
<nav class="uk-navbar-container uk-navbar-transparent navbar" uk-navbar>

    <div class="uk-navbar-left navbar-left">

        <a class="uk-navbar-item uk-logo" href="#"><h3>Travel</h3></a>

    </div>




    <div class="uk-navbar-right">
        <ul class="uk-navbar-nav right-navbar uk-margin-medium-right uk-visible@l">
            <li><a href="/">HOME</a></li>

{{--            <li><a href="packageandpricing">PACKAGE & PRICING</a></li>--}}
            <li><a href="Event">Event</a></li>
            <li>
                <a href="destination" href="destination">DESTINATION</a>

                <div class="uk-navbar-dropdown  uk-navbar-dropdown-width-5"uk-dropdown="pos:bottom-justify" >
                    <div class="uk-navbar-dropdown-grid  uk-child-width-1-5" uk-grid>
                        <div>
                            <ul class="uk-nav uk-navbar-dropdown-nav" style="color:black">
                                <li class="uk-nav-header">Treking</li>
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
            <li><a href="contact">CONTACT</a></li>
            <li> <a class="uk-navbar-toggle" href="#modal-full" uk-search-icon uk-toggle></a></li>

            <?php 
                if(isset($_SESSION['sessname'])){

                    echo $_SESSION['sessname'];
                    ?>


                    @if(count($notifyuser) > 0)
               
                     {{ $countsaved -> email -> count()}}

                     @else
                      0
                   
                     @endif

                    <li><a   href="" uk-icon="icon: cart;ratio:1.5" style="padding-top: 5px;"></a></li>
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
                    <li class="uk-nav-header">Treaking</li>
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