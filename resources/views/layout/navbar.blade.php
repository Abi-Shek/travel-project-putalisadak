
<nav class="uk-navbar-container uk-navbar-transparent navbar" uk-navbar>

    <div class="uk-navbar-left navbar-left">

        <a class="uk-navbar-item uk-logo" href="#"><h3>Travel</h3></a>

    </div>




    <div class="uk-navbar-right">
        <ul class="uk-navbar-nav right-navbar uk-margin-medium-right uk-visible@l">
            <!-- <li><a href="/map">Maps</a></li> -->
            <li><a href="/">HOME</a></li>

            <li><a href="Event">Event</a></li>
            <li>
                <a href="destinations" >DESTINATION</a>

                <div class="uk-navbar-dropdown  uk-navbar-dropdown-width-5"uk-dropdown="pos:bottom-justify" >
                    <div class="uk-navbar-dropdown-grid  uk-child-width-1-5" uk-grid>
                        <div>
                            <ul class="uk-nav uk-navbar-dropdown-nav" style="color:black">
                                <li class="uk-nav-header">Trekking</li>
                                <li ><a href="#">Everest Region</a></li>
                                <li><a href="#">Ananpurna Region</a></li>

                                <li><a href="#">Lantang Region</a></li>
                                <li><a href="#">Manaslu Region</a></li>
{{--                                <li class="uk-nav-divider"></li>--}}
                                <li><a href="#">Dolpa Region</a></li>
                                <li><a href="#">more</a></li>

                            </ul>
                        </div>

                        <div>
                            <ul class="uk-nav uk-navbar-dropdown-nav">

{{--                                <li class="uk-active"><a href="#">Active</a></li>--}}
                                <li class="uk-nav-header">Tour</li>
                                <li><a href="#">Kathmandu</a></li>

                                <li><a href="#">Chitwan tour</a></li>
                                <li><a href="#">pokhara tour</a></li>
{{--                                <li class="uk-nav-divider"></li>--}}
                                <li><a href="#">Cultural tour</a></li>
                                <li><a href="#">Heritage tour</a></li>
                                <li><a href="#">Place To Place tour</a></li>
                                <li><a href="#">more</a></li>

                            </ul>
                        </div>


                        <div>
                            <ul class="uk-nav uk-navbar-dropdown-nav">
{{--                                <li class="uk-active"><a href="#">Active</a></li>--}}
                                <li class="uk-nav-header">Rafting</li>
                                <li><a href="#">Trisuli River</a></li>

                                <li><a href="#">Tamor River</a></li>
                                <li><a href="#">Kaligandaki River</a></li>

                                <li><a href="#">Bhote Koshi River</a></li>
                                <li><a href="#">Arun River</a></li>
                                <li><a href="#">Sun Koshi River</a></li>
                                <li><a href="#">Karnali River</a></li>
                            </ul>
                        </div>
                        <div>
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                {{--                                <li class="uk-active"><a href="#">Active</a></li>--}}
                                <li class="uk-nav-header">Adventure</li>
                                <li><a href="#">Rock Climbing</a></li>
                                <li><a href="#">Paragliding</a></li>
                                <li><a href="#">Nepal Bike Tour</a></li>
                                <li><a href="#">Bungee Jumping</a></li>
                                <li><a href="#">ZipFlyer</a></li>
                                <li><a href="#">More</a></li>


                            </ul>
                        </div>





                        <div>
                            <ul class="uk-nav uk-navbar-dropdown-nav">

                                <li class="uk-nav-header">Jungle Safari</li>

                                <li><a href="#">Chitwan National Park</a></li>
                                <li><a href="#">Bardiya National Park</a></li>
                                <li><a href="#">More</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </li>

            <li><a href="about">ABOUT</a></li>
          <!--   <li><a href="contact">CONTACT</a></li> -->

            <li style="background-color:#03A9F4 ;border-radius:7px ;"><a href="packageandpricing">PACKAGE & PRICING</a></li>
            <li> <a class="uk-navbar-toggle" href="#modal-full" uk-search-icon uk-toggle></a></li>





 <?php if(isset($_SESSION['sessname'])){
     $server=mysqli_connect('localhost','root','','gbridge');
                    $sess=$_SESSION['sessname'];
                    $countsaved="SELECT * from testingjs where bookedby='$sess' and status='0'";
                    $countsaved1="SELECT * from testingjs where bookedby='$sess' and status='1'";
                    $countsavedq=mysqli_query($server,$countsaved);
                    $countsavedq1=mysqli_query($server,$countsaved1);
                         $row=mysqli_num_rows($countsavedq);
                         $row1=mysqli_num_rows($countsavedq1);
                     ?>

                    <li><a   href="<?php if(mysqli_num_rows($countsavedq)==0){
                        echo 'userdashboard';
                    }else{
                        echo 'planner';
                    } ?>" uk-icon="icon: cart;ratio:1.5" style="padding: 5px 2px !important;" id="noti">

                        <sup>
                            <span class="uk-badge">
                                   <?php


                    if(!$countsavedq){
                        echo "nothing".mysqli_error($server);
                    }
                    else{

                    if($row>0)
                   { echo $row;
                     }
                else
                    {echo "0";}

            }

                    ?>

                            </span>
                        </sup>



                    </a></li>
                    <?php if($row1<=0)
                    {}
                   else{
                     ?>
<li><a href="thankyou">Booked</a></li>
                     <?php

                   }
                    ?>
<li class=" btn-navbar"> <a class="uk-button uk-button-default " href="logout">Logout</a></li>

<?php
}
else{?>
    <li class="btn-navbar"> <a class="uk-button uk-button-default " href="/login">Sign In</a></li>

    <?php
}


             ?>

        </ul>
{{--        <a href="#offcanvas-usage" uk-toggle uk-icon="table"></a>--}}

                <a class="uk-navbar-toggle uk-hidden@l uk-toggle hamburger "uk-toggle href="#mobilemenu">
                    <span uk-navbar-toggle-icon></span>
                </a>


    </div>








</nav>


{{--responsive mobile navbar--}}


<div id="mobilemenu" uk-offcanvas>
    <div class="uk-offcanvas-bar">

        <button class="uk-offcanvas-close" type="button" uk-close></button>


        <ul class="uk-nav uk-nav-default mobilenav">
            <div class="uk-margin">
                <form class="uk-search uk-search-default mobilenav-input" href="#modal-full" uk-toggle>
                    <span class="uk-search-icon-flip" uk-search-icon></span>
                    <input class="uk-search-input" type="search" placeholder="Search...">
                </form>
            </div>

            <li><a href="/">HOME</a></li>
            <li><a href="Event">Event</a></li>

            <li class="uk-parent">
                <a href="destination">DESTINATION</a>
                <ul class="uk-nav-sub">
                    <li class="uk-nav-header">Trekking</li>
                    <li ><a href="#">Everest Region</a></li>
                    <li><a href="#">Ananpurna Region</a></li>

                    <li><a href="#">Lantang Region</a></li>
                    <li><a href="#">Manaslu Region</a></li>
                    {{--                                <li class="uk-nav-divider"></li>--}}
                    <li><a href="#">Dolpa Region</a></li>
                    <li><a href="#">more</a></li>
                </ul>

                <ul class="uk-nav-sub">

                    <li class="uk-nav-header">Tour</li>
                    <li><a href="#">Kathmandu</a></li>

                    <li><a href="#">Chitwan tour</a></li>
                    <li><a href="#">pokhara tour</a></li>
                    {{--                                <li class="uk-nav-divider"></li>--}}
                    <li><a href="#">Cultural tour</a></li>
                    <li><a href="#">Heritage tour</a></li>
                    <li><a href="#">Place To Place tour</a></li>
                    <li><a href="#">more</a></li>

                </ul>

                <ul class="uk-nav-sub">
                    <li class="uk-nav-header">Rafting</li>
                    <li><a href="#">Trisuli River</a></li>

                    <li><a href="#">Tamor River</a></li>
                    <li><a href="#">Kaligandaki River</a></li>

                    <li><a href="#">Bhote Koshi River</a></li>
                    <li><a href="#">Arun River</a></li>
                    <li><a href="#">Sun Koshi River</a></li>
                    <li><a href="#">Karnali River</a></li>
                </ul>


                <ul class="uk-nav-sub">
                    {{--                                <li class="uk-active"><a href="#">Active</a></li>--}}
                    <li class="uk-nav-header">Adventure</li>
                    <li><a href="#">Rock Climbing</a></li>
                    <li><a href="#">Paragliding</a></li>
                    <li><a href="#">Nepal Bike Tour</a></li>
                    <li><a href="#">Bungee Jumping</a></li>
                    <li><a href="#">ZipFlyer</a></li>
                    <li><a href="#">More</a></li>


                </ul>


                <ul class="uk-nav-sub">

                    <li class="uk-nav-header">Jungle Safari</li>

                    <li><a href="#">Chitwan National Park</a></li>
                    <li><a href="#">Bardiya National Park</a></li>
                    <li><a href="#">More</a></li>
                </ul>




            </li>

            <li><a href="about">ABOUT</a></li>
            <li><a href="contact">CONTACT</a></li>

{{--            <li class=" btn-navbar"> <a class="uk-button uk-button-default " href="login">Sign In</a></li>--}}
        </ul>

    </div>
</div>

 <div id="modal-full" class="uk-modal-full uk-modal modal-search " uk-modal>
        <div class="uk-modal-dialog uk-flex uk-flex-center uk-flex-middle  search-modal" uk-height-viewport>
            <button class="uk-modal-close-full" type="button" uk-close></button>
            <form class="uk-search uk-search-large" action="{{{ action('newcontroller@search')}}}">
                <input class="uk-search-input uk-text-center search-modal-text" type="search" placeholder="Search..." autofocus name="words">
            </form>
        </div>
    </div>
