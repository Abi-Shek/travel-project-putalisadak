<?php


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Cornford\Googlmapper\Facades\MapperFacade as Mapper;


Route::get('/', function () {
    return view('welcome');
});
Route::get('boss', function () {
    return view('admin/index');
});
Route::post('admin/admin','Auth\LoginController@adminlogin');


Route::get('/search','newcontroller@search');

Route::get('/detail','newcontroller@singlepage');
Route::get('/destinations','newcontroller@alldestination');

// Route::get('/navbar',function (){

//     $sess=$_SESSION['sessname'];
//         $countsaved=DB::select("SELECT * from bookedings where email='$sess'");
//         return view('/navbar',['notifyuser' => $countsaved]);

// });


Route::get('/Event', function () {
    return view('Event');
});
// Route::get('/booking', function () {
//     return view('booking');
// });


Route::get('/packageandpricing', function () {
    return view('packageandpricing');
});

// Route::get('/destinations', function () {
//     return view('destinations');
// });


Route::get('/about', function () {
    return view('about');
});


Route::get('/contact', function () {
    return view('contact');
});
Route::get('/login', function () {
    return view('login');
});

Route::get('/add', function () {
    return view('add');
});





Route::get('userdashboard', function () {


//      if(isset($_GET['post_name'])){

//         session_start();
//       $postname=$_GET['post_name'];

//             $options=DB::select("SELECT * from destinations where head='$postname'");


//         $sess=$_SESSION['sessname'];
//        $saved=DB::select("SELECT * from bookedings where bookedby='$sess'");
//          return view('userdashboard',['option' => $options, 'savedone' => $saved]);
//          // return redirect()->route('dashboard', $booknow);


//     }

//     else{

session_start();
//       // for genereal view
        $options=DB::select("SELECT * from destinations");
  $sess=$_SESSION['sessname'];
       $saved=DB::select("SELECT * from bookedings where bookedby='$sess'");
       $allow=DB::select("SELECT * from testingjs where bookedby='$sess' and status='0'");

        return view('userdashboard',['option' => $options, 'savedone' => $saved,'allow' => $allow]);

//      }
 // return view('userdashboard');

});





// Route::get('/detail', function () {
//     return view('detail');
// });



Route::get('/logout', function () {


    return view('/');
});
Route::get('/admin/logout', 'Auth\LoginController@adminlogout');

// Route::get('/map', function () {


//     return view('map');
// });

Route::get('/map', function () {
  return view('map');
});

// Route::get('map', function () {

//   // Mapper::map(53.381128999999990000,-1.470085000000040000, ['marker' => false, 'zoom' => 10, 'markers' => ['title' => 'You are here', 'animation' => 'DROP', 'icon' => 'https://image.flaticon.com/icons/svg/138/138956.svg']]);


//     Mapper::map(53.381128999999990000,  -1.470085000000040000, ['marker' => false, 'zoom' => 10, 'markers' => ['title' => 'You are here', 'animation' => 'DROP', 'icon' => 'https://image.flaticon.com/icons/svg/138/138956.svg']]);


//     // Mapper::map(53.381128999999990000,  -1.470085000000040000, ['marker' => false, 'zoom' => 10, 'markers' => ['title' => 'You are here', 'animation' => 'DROP', 'icon' => 'https://image.flaticon.com/icons/svg/138/138956.svg']]);


//     Mapper::informationWindow(53.381128999999990000, -1.470085000000040000, 'Location 1<hr>Location 2', ['open' => true, 'markers' => ['title' => 'Title']]);

//     Mapper::polyline([['latitude' => 53.381128999999990000, 'longitude' => -1.470085000000040000], ['latitude' => 52.381128999999990000, 'longitude' => 0.870085000000040000], ['latitude' => 55.381128999999990000, 'longitude' => 1.470085000000040000]]);
//     return view('map');
// });


Route::get('/savedplan', function () {

  if(isset($_SESSION['sessname'])) {
  $sess=$_SESSION['sessname'];
  $saved=DB::select("SELECT * from bookedings where bookedby='$sess'");


  return view('savedplan',['savedone' => $saved]);
}
else{
  session_start();
    $sess=$_SESSION['sessname'];
    $saved=DB::select("SELECT * from bookedings where bookedby='$sess'");


  return view('savedplan',['savedone' => $saved]);
}
});

    // return view('savedplan');









//needed lateron

Route::get('/googlelogin', 'Auth\LoginController@redirectToProvider');
 Route::get('/welcome', 'Auth\LoginController@handleProviderCallback');


    Route::post('/booking', 'Auth\LoginController@handleProviderCallback' );
      Route::post('/savedplan', 'Auth\LoginController@booknow' );




// });




Route::get('/logout', 'Auth\LoginController@logout');

// Route::get('/booking','newcontroller@logout');
// Route::post('/booking','newcontroller@booknow');



// Testing dynamicness with JS
Route::get('demo', function(){
  return view('demo');
});
Route::post('welcome','newcontroller@js');

//checking AJAX

Route::get('ajax',function() {
   return view('message');
});
Route::post('go','newcontroller@ok');
Route::get('go',function (){
    return view('ajaxtest');
});

// Route::get('desti',function(){
//   return view('userdashboard');
// });


// Route::post('demo','newcontroller@lovedestination');
Route::get('create','newcontroller@lovedestination');
Route::post('login','Auth\LoginController@travelreg');
Route::get('desti','newcontroller@desti');
Route::get('delete','newcontroller@deldestination');
Route::get('selgeo','newcontroller@selgeo');
Route::get('removegeo','newcontroller@removegeo');
Route::get('map','newcontroller@selgeo');
Route::get('booked','newcontroller@bookinguser');
Route::get('duration','newcontroller@numberofdays');
// Route::get('userdashboard', function (){
//   return view('userdashboard');
// });

// admin routing


Route::get('admin/admin', function () {
  $bookings=DB::table('testingjs')->where('status','=','0')->get();
  $booked=DB::table('testingjs')->where('status','=','1')->get();
  $users=DB::select("SELECT * from regusers");

    return view('admin/admin',['bookings' => $bookings,'booked' => $booked,'users' =>$users]);
});
Route::get('destinfo','newcontroller@destinfo');
Route::get('planner',function(){

  return view('planner');
});
Route::get('destcreated','newcontroller@destCreated');
Route::get('destcreatedb','newcontroller@destCreatedb');
Route::get('planner','newcontroller@plans');
Route::get('dayadd','newcontroller@dayadd');
Route::get('addDestination','newcontroller@addDest');
Route::get('statusbooked','newcontroller@statusbooked');
//Route::get('lastpage','newcontroller@lastpage');
Route::get('thankyou',function(){
  session_start();
  $user=$_SESSION['sessname'];
  $sel=DB::select("SELECT * FROM testingjs WHERE bookedby='$user' and status='1' ");

  $sels=DB::table('testingjs')->where('bookedby',$user)->value('destination');
$dess=DB::table('destinations')->where('head','like',$sels)->value('head');

  $alldest=DB::select("SELECT * FROM destinations");
  // $adv=DB::select("SELECT  from destinations')");
  $adv=DB::select("SELECT Distinct adventure FROM testingjs where bookedby='$user' ");
  $totaldays=DB::table('testingjs')->where('bookedby',$user)->sum('duration');
  $totalcost=DB::table('testingjs')->where('bookedby',$user)->sum('totalcost');
  $advents=DB::table('testingjs')->where('bookedby',$user)->value('seladv');
  $folder='image/destination/';

  $image=DB::select("SELECT * from destinations where head like '%$dess%'");

  return view('thankyou',['destination'=> $sel,'alld' => $alldest, 'seladv' => $adv,'totaldays' =>$totaldays,'totalcost' =>$totalcost,'advents' =>$advents,'images' => $image]);
});

Route::get('error',function(){
  return view('error');
});

//ADMIN PART
Route::get('admin/addnew',function(){
    return view('admin/newdestination');
});
Route::get('admin/itinerary',function(){
    $get=DB::table('destinations')->get();
    return view('admin/itinerary',['getting' => $get]);
});
Route::post('admin/addnew','newcontroller@destination');
Route::post('admin/itinerary','newcontroller@additinerary');


