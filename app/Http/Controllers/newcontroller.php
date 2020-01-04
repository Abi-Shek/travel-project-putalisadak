<?php

namespace App\Http\Controllers;



use Illuminate\Support\Facades\DB;
// use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;



class newcontroller extends Controller
{
    /*

#################################
*******  HOME Page  ********
#################################
    */


public function index($name){


return view("welcome",['data'=>$name]);
}

public function hello($name){
	return view("test",['data'=>$name]);
}



/*

#################################
*******  Login  ********
#################################
    */
function lognow(){
	$server=mysqli_connect('localhost','root','','gbridge');

	 $err="<h2 style='color:white;background-color:red;width:20%;text-align:center;'> Something is wrong!</h2>";
	$msg="<h2 style='color:white;background-color:green;width:20%;text-align:center;'> Logged in Successfully!</h2>";
	if(isset($_POST['un'])){
	$username=$_POST['un'];

	$userpw=$_POST['upw'];

	$sel_user="SELECT * from gbusers where gemail='$username' and gpass='$userpw'";
	$sel_user_query=mysqli_query($server, $sel_user);
	$numrow=mysqli_num_rows($sel_user_query);
	if($numrow==0){
		echo $err;
		 return view('login');
	}
	else{
		mysqli_query($server,"UPDATE gbusers set gstatus='1'");
		echo $msg;
	 return view('test');
}
}

else{
	echo "Nothing selected!";
}

}

/*

#################################
******* Adding New Destination  ********
#################################
    */

function destination(){

	//server
	$server=mysqli_connect('localhost','root','','gbridge');
	if(isset($_POST['add'])){

	 $err="<h2 style='color:white;background-color:red;width:20%;text-align:center;'> Something is wrong!</h2>";
	$msg="<h2 style='color:white;background-color:green;width:20%;text-align:center;'> Logged in Successfully!</h2>";


	$head=$_POST['head'];
	$type=implode(" ",$_POST['dtype']);
	//$detail=$_POST['detail'];
	$loc=$_POST['location'];

	$alt=$_POST['altitude'];
	$long=$_POST['long'];
	$latt=$_POST['latt'];
	$dist=$_POST['distance'];

	$startfrom=$_POST['start'];
	$attr=$_POST['attraction'];
	$nearby=$_POST['nearby'];
	$local=$_POST['local'];
	$cando=$_POST['cando'];

	//$ite=$_POST['ite'];
	$dur=$_POST['duration'];
    $tags=$_POST['tags'];
    $cost=$_POST['cost'];

    $img=$_FILES['featimage']['name'];
    $imgt=$_FILES['featimage']['tmp_name'];
    // $imgt=$_FILES['featimage']['size'];
    $folder="../public/image/destination/";

    if(move_uploaded_file($imgt,$folder.$img)){

	$add="INSERT into destinations (`head`,`feat`, `dtype`,  `location`, `altitude`, `long`, `latt`, `distance`, `startfrom`, `attraction`, `local`, `nearby`, `cando`, `duration`, `tags`, `costperday`,`status`) values('$head','$img','$type','$loc','$alt','$long','$latt','$dist','$startfrom','$attr','$local','$nearby','$cando','$dur','$tags','$cost','0')";
	$add_query=mysqli_query($server,$add);
	if(!$add_query){
		echo $err.mysqli_error($server);
	}
	else{
		echo $msg;
		//return redirect()->to('admin/addnew');
	}
}
else{
    echo "Error inserting image".mysqli_error($server);
    //return view('admin/newdestination');
}

    }


}


/*

#################################
*******  Search Engine  ********
#################################
    */


 public static function search(){
 	if(isset($_GET['words']) and !empty($_GET['words'])){
 		$key=$_GET['words'];


 		$selall=DB::select("SELECT * from destinations  where head like '%$key%' or dtype like '%$key%'or description like '%$key%' or location like '%$key%' or altitude like '%$key%' or attraction like '%$key%' or cando like '%$key%' or  tags like '%$key%'");
 		// $selimage=DB::select("SELECT * from gallery where title like '%$key%' and feat='yes' ");

 		return view('searchpage',['searchnow' => $selall]);
 	}

 }


 /*

#################################
*******  Single Dynamic Page  ********
#################################
    */



 function singlepage(){
 	$server=mysqli_connect('localhost','root','','gbridge');
 	$get=$_GET['post_name'];
 	// $pid=$_GET['post_id'];
$selid = DB::select("SELECT * from destinations where head like'%$get%'");
$gettype=DB::select("SELECT * from gallery where title like '%$get%' and feat='yes'");
$gettype="SELECT * from destinations where head like '%$get%'";
 				$gettype_query=mysqli_query($server,$gettype);
 				$row=mysqli_fetch_array($gettype_query);
 				$seltype=explode(" ",$row['dtype']);
 				$seltype=$row['dtype'];
 			$similar=DB::select("SELECT * from destinations where dtype like '%$row[dtype]%' and head NOT like '%$get%'");
 			$gall=DB::select("SELECT * from gallery where title='$get' ");
 			$package=DB::select("SELECT * from destinations where head like '%$get%'");

return view('detail',['views' => $selid, 'featimage' => $gettype,'same' => $similar,'detgall' => $gall,'packages'=>$package]);
}



/*

#################################
*******  Similar Destinations ********
#################################
    */



		function similardest(){
            $server=mysqli_connect('localhost','root','','gbridge');
 			$get=$_GET['post_name'];
 				$gettype="SELECT * from destinations where head='%$get%'";
 				$gettype_query=mysqli_query($server,$gettype);
 				$row=mysqli_fetch_array($gettype_query);
 				$seltype=$row['dtype'];
 			$similar=DB::select("SELECT * from destinations where dtype like '%$seltype%' order by id desc limit 6 EXCEPT Select * from destinations where head like '%$get%'");
 			return view('detal', ['same' => $similar]);
 		}


//ITS about PAckages
 function getpackages(){

 		$server=mysqli_connect('localhost','root','','gbridge');
 		$pid=$_GET['post_id'];
 		$getpackage="SELECT * from packages where pid='$pid'";
 		$getpackage_query=mysqli_query($server,$getpackage);

 		if(!$getpackage_query){
 			echo "Something is wrong!";
 		}
 		else{
 			?>
 			<div class="book" style="float: ;background: red;height: 500px;width:30%;">
 				<?php
 			while($pack=mysqli_fetch_array($getpackage_query)){
 				echo $pack['prices']."</br>";
 				echo $pack['pdays']."</br>";
 				$str=explode(" ",$pack['pincludes']);
 				for($i=0;$i<count($str);$i++){

 					echo "$str[$i]";
 					echo "<br>";
 				}
 			}
 			return view('detail');
 			?>
 			</div>
 			<?php
 		}
 }


/*

#################################
*******  Gallery Page  ********
#################################
    */
 function gallery(){
 	$server=mysqli_connect('localhost','root','','gbridge');
 	$tit=$_POST['title'];
 	$feat=$_POST['feat'];
 	$file=$_FILES['media']['name'];
 	$tfile=$_FILES['media']['tmp_name'];
 	 // $fileimp=implode("," , $file);
 	 // $tfileimp=implode(",", $tfile);
 	$folder="image/destination/";
 	// for($i=0;$i<=sizeof($file);$i++){
	 	if(move_uploaded_file($tfile, $folder.$file)){
	 		$go="INSERT into gallery(id,title,image,alt,feat,upload_on) values('','$tit','$file','','$feat','')";
	 		$goq=mysqli_query($server,$go);
	 		if(!$goq){
	 			echo "Cannot be uploaded";
	 		}
	 		else{
	 			echo "Successfully Inserted!";
	 		}

	 	// }
return view('media');
	 }



 	}

 	/*

#################################
*******  Destination Page  ********
#################################
    */






 	public function alldestination()
 	{
 		$natadv=DB::select("SELECT * from destinations where dtype like'%nat%' and dtype like '%adv%' order by id desc limit 3");
 		$culrel=DB::select("SELECT * from destinations where dtype like'%cul%' and dtype like '%rel%'");
 		$natwild=DB::select("SELECT * from destinations where dtype like '%nat%' and dtype like '%wild%'");
 			return view('destinations',['advnat' => $natadv,'relcul' => $culrel,'wild' => $natwild]);
 	}



     /*

#################################
*******  Saved Destinations (user)  ********
#################################
    */
 	public function saveditems()
 	{
 		$sess=$_SESSION['sessname'];
 		$countsaved=DB::select("SELECT * from bookedings where email='$sess'");
 		return view('/layout/navbar',['notifyuser' => $countsaved]);


 	}


/*
JQUERY Contents ....
#################################
*******  Planned  Destination (user)  ********
#################################
    */




    function lovedestination() {

        // session_start();

				$server=mysqli_connect('localhost', 'root', '', 'gbridge');



    $test = $_GET['seldest'];
    $email = $_GET['sessname'];
    	$sel="SELECT * from destinations where head = '$test' ";

				$selq=mysqli_query($server,$sel);
				if(!$selq){
					echo "error one";
				}
				else{
				while($geo=mysqli_fetch_array($selq)){
					$lat=$geo['latt'];
						$long=$geo['long'];
						$adv=$geo['cando'];
						$duration=$geo['duration'];

						$cost=$geo['costperday'];
						$pax=1;
                        $total= $pax*$cost*$duration;
                        $ins="INSERT INTO `testingjs`(`bookedby`, `destination`, `duration`, `cost`, `adventure`, `pax`, `lat`, `totalcost`, `status`, `long`,`seladv`) values('$email', '$test',$duration,'$cost','$adv',$pax,'$lat',$total,0,'$long','')";
				//$ins="INSERT into testingjs(id,bookedby,destination,duration,cost,adventure,pax,lat,totalcost,long) values('','$email', '$test','$duration','$cost','$adv',$pax,'$lat',$total,0,'$long')";
                $insq=mysqli_query($server, $ins);
                if(!$insq){
                  echo "error two".mysqli_error($server);
                }
                else{
                     echo "ok";
                }





                }
            }




 }


 //testing input LINUX

 public function ok(){
    $server=mysqli_connect('localhost', 'root', '', 'gbridge');

    $a=$_POST['try'];
    $ins="INSERT into ajax(test) values('$a')";
    $sel="SELECT * from ajax";

    $insq=mysqli_query($server,$ins);
    $sels=mysqli_query($server,$sel);

    if(!$insq){
        echo "ERROR";
    }
    else{
        echo "DONE";
        return view('ajaxtest',['pqr' => $sels]);
    }


 }


 /*

#################################
*******  selected Destinations  added  in planning page(user)  ********
#################################
    */
public function desti(){
		session_start();
			$server=mysqli_connect('localhost','root','','gbridge');

			$bookedby=$_SESSION['sessname'];
			$sel="SELECT * from testingjs where bookedby='$bookedby'";
			$selq=mysqli_query($server,$sel);
			if(!$selq){
				echo "Nothing selected";
			}
			else{
				while($getdesti=mysqli_fetch_array($selq)){
				?>

					<span style='color:white !important;background-color:rgb(12, 147, 209) !important;padding:4px;border:0;margin:3px  !important;border:;float: left;font-size: 12px !important;' id='del' name='delcourse'>
					<?php echo $getdesti['destination']?> <span class='delete' style="background-color: white;color:rgb(12, 147, 209);cursor: pointer;padding:2px 5px;border-radius: 50%;" data-id= "<?php echo $getdesti['destination']?>" id="del" uk-tooltip="<b>Remove</b>  <?php echo $getdesti['destination']?> "><b>X</b></span>

				</span>

				<?php
				}

			}


	}



    /*

#################################
*******  Delete Planned Destinations (User)  ********
#################################
    */


 function deldestination() {
 		session_start();
 		$bookedby=$_SESSION['sessname'];
     $del =  $_GET['id'];

    $delagain=DB::delete("DELETE from testingjs where bookedby='$bookedby' and destination like '%$del%'");

 }


 //on Test (unknown)

	function selgeo()
	{
		session_start();
 		$bookedby=$_SESSION['sessname'];
		$server=mysqli_connect('localhost', 'root', '', 'gbridge');
		$dest=DB::delete("DELETE from testingjs where destination like '%$del%'");
		$selgeo="SELECT * from testingjs where  bookedby='$bookedby' and status='0' ";
		$selgeoq=mysqli_query($server,$selgeo);
		if(!$selgeoq){
			echo "ERROR";
		}
		else{

			while($getit=mysqli_fetch_array($selgeoq)){


				$dest=$getit['destination'];
				$latt=$getit['latt'];
				$long=$getit['longi'];


			}
			header("Content Type","application/json");
				$array=array('desti' => $dest, 'latti' => $latt,'longi' => $long);
				 echo json_encode($array);
		}


    }


    /*

#################################
*******  Remove from Map  ********
#################################
    */

	function removegeo()
	{
		$server=mysqli_connect('localhost', 'root', '', 'gbridge');
		 $dest=DB::delete("DELETE from testingjs where destination like '%$del%'");
		$selgeo="SELECT * from testingjs";
		$selgeoq=mysqli_query($server,$selgeo);
		if(!$selgeoq){
			echo "ERROR";
		}
		else{

			while($getit=mysqli_fetch_array($selgeoq)){


				$dest=$getit['destination'];
				$latt=$getit['latt'];
				$long=$getit['longi'];


			}
			header("Content Type","application/json");
				$array=array('desti' => $dest, 'latti' => $latt,'longi' => $long);
				 echo json_encode($array);
		}


    }

    /*

#################################
*******  User's Destination/s Listings ********
#################################
    */

	function bookinguser(){
		session_start();
		$bookedby=$_SESSION['sessname'];
		$server=mysqli_connect('localhost', 'root', '', 'gbridge');
		$getting="SELECT * from testingjs where bookedby='$bookedby'";
		$gettingq=mysqli_query($server,$getting);
		$row=mysqli_num_rows($gettingq);
		if($row==0){
?>
	<h2 class="uk-light">Select destinations to create Itinerary</h2>
<?php
		}
		else{
			?>
			<table class="uk-table uk-table-striped" style="background-color: whitesmoke">

        <tr style="font-weight: bold;">
            <th>Id</th>
            <th>Destination</th>
            <th>Duration</th>
            <th>Cost per Day</th>

             <th>Total Cost</th>
             <th>Status</th>
              <th>About Destination</th>
        </tr>

    <?php

    while($thedata=mysqli_fetch_array($gettingq)){
    	if($thedata['status']==0){
    		$status="Cart";
    	}
    	else{
    		$status="Booked";
    	}
    	?>


        <tr id="thisis" class="clickedRow">
            <td><?php  ?></td>
            <td><?php echo $thedata['destination']; ?></td>
            <td><!-- <input type="number" min="<?php echo $thedata['duration']; ?>" name="" class="day" data-myvalue="<?php echo $thedata['duration']; ?>" value="<?php echo $thedata['duration']; ?>"> -->
            	<?php echo $thedata['duration']; ?>
            </td>
            <!-- <input type="text" name="" class="destis" hidden data-my="<?php //echo $thedata['destination']; ?>" value="<?php //echo $thedata['destination']; ?>"> -->
            <td><b>$ </b> <?php echo $thedata['cost']; ?> </td>
           <!--  <td><?php echo $thedata['pax']; ?></td> -->
            <td><b>$ </b><?php echo $thedata['totalcost']; ?></td>
            <td><?php echo $status ?></td>
            <?php
            $image=DB::table('destinations')->where('head',$thedata['destination'])->value('feat');
            $can=DB::table('destinations')->where('head',$thedata['destination'])->value('cando');
            $attract=DB::table('destinations')->where('head',$thedata['destination'])->value('attraction');
            $folder="image/destination/";

             ?>
            <td><button  value="<?php echo $thedata['destination']; ?>" id="destname" class="clickme" uk-tooltip="<p class='margins titled'><b><?php echo $thedata['destination']; ?></b></p><p class='margins'><img src='<?php echo $folder.$image ?>' height='150px'></p><p class='margins'><b>Can Do </b><?php echo $can; ?></p><p class='margins'><b>Attractions </b><?php echo $attract; ?></p><span class='triangle'></span>" >info</button></td>
        </tr>

        <?php
    } ?>

    </table>
			<?php
		}
	}



    /*

#################################
*******  Add number of days (AJAX)  ********
#################################
    */



	function numberofdays(Request $request){
		session_start();
		$server=mysqli_connect('localhost', 'root', '', 'gbridge');
		$bookedby=$_SESSION['sessname'];
		$name = $request->input('desti');
		$newduration=$request->input('dayss');
		$sel="SELECT * from testingjs where destination like '%$name%' and bookedby='$bookedby'";
		$selq=mysqli_query($server,$sel);
		if(!$selq){

		}
		else{
			while ($anything=mysqli_fetch_array($selq)) {
				$cost=$anything['cost'];
				$totalcost=$cost*$newduration;

		$getting=DB::update("UPDATE testingjs set duration='$newduration', totalcost='$totalcost' where destination like '%$name%' and bookedby='$bookedby'");

	}

		}


}


/*

#################################
*******  extras  ********
#################################
    */


function destinfo(){
	session_start();
		$server=mysqli_connect('localhost', 'root', '', 'gbridge');
		$name=$_GET['thedest'];
		$sel="SELECT * from destination where destination like '%$name%'";
		$selq=mysqli_query($server,$sel);
		if(!$selq){

		}
		else{
			?>
			<div id="user-infomodal" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
    	<?php while($loop=mysqli_fetch_array($selq)){ ?>

        <h2 class="uk-modal-title"> <?php echo $loop['destination']; ?> </h2>

        <div class="uk-container">
          <div class="usermodalleft uk-float-left">
            <h4>Name</h4>
            <h5>Email</h5>
          </div>
  <div class="usermodalleft uk-float-right">
            <img src="" alt="userphoto">
          </div>
          <div class="uk-clearfix">

        </div>

        <div class="usermodaldetail">
          <h5 class="uk-text-center">
            Detail
          </h5>

          <ul class="uk-list">
            <li>Arrival Date: <span>7 <sup>th</sup> june,2019</span></li>
            <li>Select Destination :<span> Kathmandu,</span> <span> Pokhara</span></li>
            <li>Address:<span>123 crossstreet ,London</span></li>
            <li>Passport No: <span>0123456789</span></li>

          </ul>

        </div>
        <p class="uk-text-right">
            <button class="uk-button uk-button-default uk-modal-close" type="button">close</button>

        </p>
    </div>
<?php } ?>

</div>
</div>
			<?php
		}
}


/*

#################################
*******  Adding to Map  ********
#################################
    */

function destCreated(){
session_start();
$user=$_SESSION['sessname'];
		$server=mysqli_connect('localhost', 'root', '', 'gbridge');
		$sel="SELECT * from testingjs where bookedby='$user' and status='0'";
		$selq=mysqli_query($server,$sel);
		$myplace=['Kathmandu'];
		$mylat=['27.7089'];
		$mylong=['85.3202'];

		if(!$selq){

		}
		else{
			while($row=mysqli_fetch_array($selq)){
				array_push($myplace, $row['destination']);
				array_push($mylat, $row['lat']);
				array_push($mylong, $row['long']);


			}
			header("Content Type","application/json");
			$array=array('desti' => $myplace, 'latti' => $mylat,'longi' => $mylong);
			echo json_encode($array);

		}


}


function destCreatedb(){
session_start();
$user=$_SESSION['sessname'];
		$server=mysqli_connect('localhost', 'root', '', 'gbridge');
		$sel="SELECT * from testingjs where bookedby='$user' and status='1'";
		$selq=mysqli_query($server,$sel);
		$myplace=['Kathmandu'];
		$mylat=['27.7089'];
		$mylong=['85.3202'];

		if(!$selq){

		}
		else{
			while($row=mysqli_fetch_array($selq)){
				array_push($myplace, $row['destination']);
				array_push($mylat, $row['lat']);
				array_push($mylong, $row['long']);


			}
			header("Content Type","application/json");
			$array=array('desti' => $myplace, 'latti' => $mylat,'longi' => $mylong);
			echo json_encode($array);


		}


}

/*

#################################
*******  Users all Destinations  ********
#################################
    */


function plans(){
	session_start();
	$user=$_SESSION['sessname'];
	$sel=DB::select("SELECT * FROM testingjs WHERE bookedby='$user' and status='0' ");
    $alldest=DB::select("SELECT * FROM destinations");

	// $adv=DB::select("SELECT  from destinations')");
	$adv=DB::select("SELECT Distinct adventure FROM testingjs where bookedby='$user' ");
	$totaldays=DB::table('testingjs')->where([['bookedby',$user],['status','=','0']])->sum('duration');
	$totalcost=DB::table('testingjs')->where([['bookedby',$user],['status','=','0']])->sum('totalcost');
	$advents=DB::table('testingjs')->where([['bookedby',$user],['status','=','0']])->value('seladv');
	return view('planner',['destination'=> $sel,'alld' => $alldest, 'seladv' => $adv,'totaldays' =>$totaldays,'totalcost' =>$totalcost,'advents' =>$advents]);
}

/*

#################################
*******  Adding more destinations ********
#################################
    */

function addDest(){
	session_start();
	$user=$_SESSION['sessname'];
	if(empty($_GET['adventure']))
	{

		return view('error');
	}
	else{
	$posted=$_GET['adventure'];
	$user=$_SESSION['sessname'];
	$sel=DB::update("UPDATE testingjs set seladv='$posted' where bookedby='$user' ");
}
	return redirect()->to('planner');
}


/*

#################################
*******  Adding more days  ********
#################################
    */
function dayadd(){
	session_start();
	$user=$_SESSION['sessname'];
	$name=$_GET['name'];
	$days=$_GET['days'];
	$tcost=DB::table('testingjs')->where('destination',$name)->value('cost');
	$totc=$days*$tcost;

	$sel=DB::update("UPDATE testingjs set duration='$days',totalcost='$totc' WHERE bookedby='$user' and destination like '%$name%' ");



	?>

<div id="modal-close-outside" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <button class="uk-modal-close-outside" type="button" uk-close></button>
        <h2 class="uk-modal-title">Outside</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
</div>

	<?php
}

/*

#################################
*******  Booked Status  ********
#################################
    */

function statusbooked(){
	session_start();
	$user=$_SESSION['sessname'];
	$up=DB::update("UPDATE testingjs set status='1' where bookedby='$user'");
	return redirect() -> to('thankyou');
}


function additinerary(){
		$server=mysqli_connect('localhost', 'root', '', 'gbridge');

    $title=$_POST['title'];
    // $sel=DB::table('itinerary')->where('title','like','%$title%')->value('title');
    $sel="SELECT * from itinerary where title like '%$title%'";
    $selq=mysqli_query($server,$sel);


    if(mysqli_num_rows($selq)==0){

    $i=1;
    $itinerary=$_POST['ite'];
    foreach($itinerary as $wow){
    $it=DB::insert("INSERT into itinerary(title,day,highlight,description) values('$title','$i','$wow','x')");
if(!$it){
    echo "error".mysqli_error($server);
}
else{
    echo "inserted!";
}
$i++;
}

    }
else{
    echo "Destination Already Exists!";
}
$get=DB::table('destinations')->get();
return view('admin/itinerary',['getting' => $get]);

// return view('admin.itinerary');
}



/*

#################################
*******  Final Page  ********
#################################
    */
function lastpage(){
	session_start();
	$user=$_SESSION['sessname'];
	$sel=DB::select("SELECT * FROM testingjs WHERE bookedby='$user' and status='1' ");
	$alldest=DB::select("SELECT * FROM destinations");
	$adv=DB::select("SELECT Distinct adventure FROM testingjs where bookedby='$user' ");

	$totaldays=DB::table('testingjs')->where('bookedby',$user)->sum('duration');
	$totalcost=DB::table('testingjs')->where('bookedby',$user)->sum('totalcost');
	$advents=DB::table('testingjs')->where('bookedby',$user)->value('seladv');

	return view('thankyou',['destination'=> $sel,'alld' => $alldest, 'seladv' => $adv,'totaldays' =>$totaldays,'totalcost' =>$totalcost,'advents' =>$advents,'image' -> $image]);
}
		}//last














?>
