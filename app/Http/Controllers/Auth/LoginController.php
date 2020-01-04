<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Socialite;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/userdashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }




    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
        return Socialite::driver('google')->stateless()->user();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {
        $user = Socialite::driver('google')->user();


        // $user->token;

// OAuth Two Providers
$token = $user->token;
$refreshToken = $user->refreshToken; // not always provided
$expiresIn = $user->expiresIn;

//OAuth One Providers
// $token = $user->token;
// $tokenSecret = $user->tokenSecret;

// All Providers


// $user->getId();
$fname= $user->getNickname();
$useremail=$user->getEmail();
// echo $user->getEmail();
//  $user->getAvatar();
$server=mysqli_connect('localhost','root','','gbridge');
$seluser="SELECT * from regusers where email='$useremail'";
$seluserq=mysqli_query($server,$seluser);
$row=mysqli_num_rows($seluserq);

if($row ==0){
    $ins="INSERT into regusers(fullname,email,userfrom) values('$fname','$useremail','google')";
    $insq=mysqli_query($server,$ins);
    if(!$insq){
        ?>
        <div uk-alert class="uk-alert-danger">
            <?php // echo "error".mysqli_error($server) ;?>
           <a  class="uk-alert-close" uk-close>Something gone wrong!</a>
           <h2><?php return view('error')?></h2>
        </div>

   <?php  }
    else{
session_start();
    $_SESSION['sessname']=$useremail;
        ?>


        <div uk-alert class="uk-alert-success w-25" uk-alert>
        <a class="uk-alert-close" uk-close></a>
            Welcome to our Travel, <?php echo $useremail; ?>!

        </div>
        <?php return redirect()->to('/');


    }
}
else{?>

    <div uk-alert class="uk-alert-success" style="z-index: 9999 !important;position: absolute;top:0px;background: white;left:width:100%;left:3px;">
           <a  class="uk-alert-close" uk-close></a>
           <h2 style=""><?php  echo "Good to see you... Again!!"; ?></h2>
        </div>
   <?php
       session_start();
    $_SESSION['sessname']=$useremail;



        // $options=DB::select("SELECT * from destinations");


        return view('welcome');
    }




}


// return view('/booking');




public function logout() {

session_start();

  session_destroy();
  return redirect()->to('/');
  // return view('welcome');


}
public function adminlogout() {

    session_start();

      session_destroy();
      return redirect()->to('boss');
      // return view('welcome');


    }
 function booknow(){



      if(isset($_POST['book'])){
        session_start();
        $server=mysqli_connect('localhost','root','','gbridge');
        // $pid=$_POST['postid'];
        $desname=$_POST['dest'];
        // $imagename=$_POST['image'];
        $duration=$_POST['duration'];
        $adv=$_POST['adv'];
        $pax=$_POST['pax'];
        $arrival= $_POST['arrival'];

        $sess= $_SESSION['sessname'];
        $selname="SELECT * from destinations where head like '%$desname%'";
        $selnameq=mysqli_query($server,$selname);
        while($row=mysqli_fetch_array($selnameq)){
          $pid=$row['id'];
           $imagename=$row['feat'];

        $booknow="INSERT into bookedings(id,bookedby,destination,adventure,postid, feat,duration,pax,arrival,cost) values('','$sess','$desname','$adv','$pid','$imagename','$duration','$pax','','1')";
        $booknowq=mysqli_query($server,$booknow);

        if(!$booknow){
            ?>
            <div uk-alert class="uk-alert-danger">
           <a  class="uk-alert-close" uk-close></a>
           <h2><?php  echo "Something is wrong... Please! Try Again!!"; ?></h2>
        </div>

            <?
            $options=DB::select("SELECT * from destinations");
              $sess=$_SESSION['sessname'];
       $saved=DB::select("SELECT * from bookedings where bookedby='$sess'");
       $dest=DB::select("SELECT * from destinations where id='$pid'");
         return view('userdashboard',['option' => $options, 'savedone' => $saved, 'destin' => $dest]);


        }
        else{
            ?>
            <div uk-alert class="uk-alert-success">
           <a  class="uk-alert-close" uk-close></a>
           <h2><?php  echo "Destination Saved Successfully!! We will contact you soon!"; ?></h2>
        </div>
            <?php


        $options=DB::select("SELECT * from destinations ");
        // $withimage=DB::select("SELECT * from destinations where head like '%$name%'");
         $dest=DB::select("SELECT * from destinations where id='$pid'");
  $sess=$_SESSION['sessname'];
       $saved=DB::select("SELECT * from bookedings where bookedby='$sess'");

          // return redirect()->route('dashboard', ['option' => $options, 'savedone' => $saved, 'destin' => $dest]);
 return view('savedplan',['savedone' => $saved]);


          // return view('userdashboard',['option' => $options, 'savedone' => $saved, 'destin' => $dest]);

       // return redirect() -> back();





        }
}


           }


     if(isset($_POST['lognow'])){
        $server=mysqli_connect('localhost','root','','gbridge');

        $un=$_POST['un'];
        $pw=$_POST['pass'];

        $lognow="SELECT * from regusers where email='$un' and password='$pw' ";
        $lognowq=mysqli_query($server,$lognow);
        $row=mysqli_num_rows($lognowq);
        if($row==0){
            ?>


    <div uk-alert class="uk-alert-danger">
           <a  class="uk-alert-close" uk-close></a>
           <h2><?php  echo "Login Failed! Try Again"; ?></h2>
        </div>

        <?php
        return view('login');
        }
        else{
           session_start();
           $_SESSION['sessname']=$un;

            ?>


            <?php

            $options=DB::select("SELECT * from destinations");


        $sess=$_SESSION['sessname'];
       $saved=DB::select("SELECT * from bookedings where bookedby='$sess'");
         return view('userdashboard',['option' => $options, 'savedone' => $saved]);



        }


    }





 }




public function userd(){
   if(isset($_GET['post_name'])){

        session_start();
      $postname=$_GET['post_name'];

            $options=DB::select("SELECT * from destinations where head='$postname'");


        $sess=$_SESSION['sessname'];
       $saved=DB::select("SELECT * from bookedings where bookedby='$sess'");
         return view('userdashboard',['option' => $options, 'savedone' => $saved]);
         // return redirect()->route('dashboard', $booknow);


    }

    else{

session_start();
$sess=$_SESSION['sessname'];
      // for genereal view
        $options=DB::select("SELECT * from destinations");
  $sess=$_SESSION['sessname'];
       $saved=DB::select("SELECT * from bookedings where bookedby='$sess'");
         return view('userdashboard',['option' => $options, 'savedone' => $saved]);

     }
}

function travelreg(Request $request){

  $email=$request->input('uemail');
  $pass=$request -> input('upw');
  $uname=$request -> input('ufull');
  $cont=$request ->input('ufrom');
  $state=$request->input('ustate');
  $gender=$request->input('ugender');
  $dob=$request->input('udob');
  $selusers=DB::select("SELECT * from regusers where email='$email'");
if($selusers==0){

  $testreg=DB::insert("INSERT into regusers(fullname,email,password,userfrom,country,gender,age) values('$uname','$email','$pass','$cont','$state','$gender','$dob')");
  return view('login');
}
else{?>
    <div uk-alert class="uk-alert-danger">
    <a  class="uk-alert-close" uk-close></a>
    <h2><?php  echo  "User's name Already Taken!! Try login with given Platforms"; ?></h2>
 </div>

 <?php
 return view('login');
}
}

 function travellogin(){
    if(isset($_POST['lognow'])){
        $server=mysqli_connect('localhost','root','','gbridge');

        $un=$_POST['un'];
        $pw=$_POST['pass'];

        $lognow="SELECT * from regusers where email='$un' and password='$pw' ";
        $lognowq=mysqli_query($server,$lognow);
        $row=mysqli_num_rows($lognowq);
        if($row==0){
            ?>


    <div uk-alert class="uk-alert-danger">
           <a  class="uk-alert-close" uk-close></a>
           <h2><?php  echo "Login Failed! Try Again"; ?></h2>
        </div>

        <?php
        return view('login');
        }
        else{
           session_start();
    $_SESSION['sessname']=$un;

            ?>

    <!-- <div uk-alert class="uk-alert-success">
           <a  class="uk-alert-close" uk-close></a>
           <h2><?php  //echo  "Good to see you... Again!!"; ?></h2>
        </div> -->
            <?php
  //           $options=DB::select("SELECT * from destinations");
  // $sess=$_SESSION['sessname'];
  //      $saved=DB::select("SELECT * from bookedings where bookedby='$sess'");
              return view('userdashboard');
        }



 }

}

function adminlogin(){
    if(isset($_POST['adminlog'])){
        $server=mysqli_connect('localhost','root','','gbridge');

        $un=$_POST['un'];
        $pw=$_POST['pass'];

        $lognow="SELECT * from gbusers where gemail='$un' and gpass='$pw' ";
        $lognowq=mysqli_query($server,$lognow);
        $row=mysqli_num_rows($lognowq);
        if($row==0){
            ?>


    <div uk-alert class="uk-alert-danger">
           <a  class="uk-alert-close" uk-close></a>
           <h2><?php  echo "Login Failed! Try Again".mysqli_error($server); ?></h2>
        </div>

        <?php
        return view('admin/index');
        }
        else{
           session_start();
    $_SESSION['sessname']=$un;
              return redirect()->to('admin/admin');
        }



 }

}
}


