<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class AjaxController extends Controller {
   public function lovedestination(Request $request) {

   	// if(isset($_POST['go'])){
				$server=mysqli_connect('localhost', 'root', '', 'gbridge');


    $test = $request->input('course');
    $sess=$request->input('sessname');

    // $username = $request->input('username');
    // $email = $request->input('email');
    	$sel="SELECT * from destinations where head like '%$test%' ";

				$selq=mysqli_query($server,$sel);
				if(!$selq){
					echo "error";
				}
				else{
				while($geo=mysqli_fetch_array($selq)){
					$lat=$geo['latt'];
						$long=$geo['long'];

				$ins="INSERT into testingjs values('','$sess', '$test','','','','','$lat','$long')";


				// return view('userdashboard',['inserting' => $ins,'sel' => $select]);
				$insq=mysqli_query($server, $ins);
				if(!$insq){
					echo"Error insertion!";
									}
									else{
										echo "okay";
									}

				}


				}




 }
public function desti(){
			$server=mysqli_connect('localhost','root','','gbridge');
			$sel="SELECT * from testingjs";
			$selq=mysqli_query($server,$sel);
			if(!$selq){
				echo "Nothing selected";
			}
			else{
				while($getdesti=mysqli_fetch_array($selq)){
				?>

					<span style='color:red !important;background-color:black !important;padding:4px;border:0;margin:3px;' id='del' name='delcourse'>
					<?php echo $getdesti['destination']?> <span class='delete' style="background-color: white;color:red;cursor: pointer;" data-id= "<?php echo $getdesti['destination']?>" id="del">X</span>

				</span>
				<?php
				}

			}


	}
 //delete selection ajax
 function deldestination() {

     $del =  $_GET['id'];

    $delagain=DB::delete("DELETE from testingjs");

 }

	function selgeo()
	{
		$server=mysqli_connect('localhost', 'root', '', 'gbridge');
		// $del=$_GET['id'];
		// $dest=DB::delete("DELETE from testingjs where destination like '%$del%'");
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

	function removegeo()
	{
		$server=mysqli_connect('localhost', 'root', '', 'gbridge');
		// $del=$_GET['id'];
		// $dest=DB::delete("DELETE from testingjs where destination like '%$del%'");
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



}

?>
