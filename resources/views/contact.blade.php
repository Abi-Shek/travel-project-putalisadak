@include("layout.header")


</head>
<body>


<!-- navbar -->

<div class="uk-position-relative">
    <!-- slider -->
    <div class="userdashboardbanner ">

        <div class="userdashboardbox uk-container uk-position-center uk-text-center">
            <h1>The new way to plan your next trip</h1>
            <p>Create a fully customized
                day-by-day itinerary for free</p>
        </div>
    </div>
<div class="uk-position-top">

    <nav class="uk-navbar-container uk-navbar-transparent header uk-container-fluid" uk-navbar>

        <div class="uk-navbar-left">
            <ul class="uk-navbar-nav">
                <li><a href="#">+1 1235 6789 10</a></li>
                <li><a href="#">info@tourandtravel.com</a></li>


            </ul>
        </div>

        <!-- <div class="uk-navbar-right uk-margin-large-right">
            <ul class="uk-navbar-nav uk-padding-small">
                <li><a href="" uk-icon="icon: facebook"></a></li>
                <li><a href="" uk-icon="icon: twitter"></a></li>
                <li><a href="" uk-icon="icon: youtube"></a></li>
                <li><a href="" uk-icon="icon: instagram"></a></li>
            </ul>
        </div> -->

        <div class="uk-navbar-right header-right uk-margin-medium-right">
            <select class="uk-select">
                <option>EN</option>
                <option>GR</option>
            </select>

        </div>

    </nav>



    <div class="headerborder" style="border:0.5px solid white"></div>
    <div uk-sticky="animation: uk-animation-slide-top; sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; cls-inactive: uk-navbar-transparent uk-light; top: 200">

        @include("layout.navbar")
    </div>






    <div id="modal-full" class="uk-modal-full uk-modal modal-search " uk-modal>
        <div class="uk-modal-dialog uk-flex uk-flex-center uk-flex-middle  search-modal" uk-height-viewport>
            <button class="uk-modal-close-full" type="button" uk-close></button>
            <form class="uk-search uk-search-large">
                <input class="uk-search-input uk-text-center search-modal-text" type="search" placeholder="Search..." autofocus>
            </form>
        </div>
    </div>


</div>
</div>

<!-- end of navbar -->



















<div class="uk-container">

    <div class="uk-section ">



        <h2>Contact Us</h2>



        <div class="uk-grid-match uk-grid-small uk-text-center contactbox" uk-grid>
            <div class="uk-width-1-2@m">
                <div class="uk-card uk-card-default uk-card-body uk-card-body-large">

                    <form class="uk-form-horizontal uk-margin-large">

                        <div class="uk-margin">
                            <label class="uk-form-label" for="form-horizontal-text">Name</label>
                            <div class="uk-form-controls">
                                <input class="uk-input uk-form-width-large" id="form-horizontal-text" type="text" placeholder="Name">
                            </div>
                        </div>

                        <div class="uk-margin">
                            <label class="uk-form-label" for="form-horizontal-text">Email</label>
                            <div class="uk-form-controls">
                                <input class="uk-input uk-form-width-large" id="form-horizontal-text" type="text" placeholder="Email">
                            </div>
                        </div>

                        <div class="uk-margin">
                            <label class="uk-form-label" for="form-horizontal-text">Phone</label>
                            <div class="uk-form-controls">
                                <input class="uk-input uk-form-width-large" id="form-horizontal-text" type="text" placeholder="Phone">
                            </div>
                        </div>


                        <div class="uk-margin">
                            <label class="uk-form-label" for="form-horizontal-text">Message</label>
                            <div class="uk-form-controls">
                    <textarea  class="uk-textarea uk-form-width-large" rows="5" type="text" placeholder="Message">
                    </textarea>
                            </div>
                        </div>




                        <div class="uk-margin">
                            <div class="uk-form-controls">
                                <button type="button" class="uk-button  btn-global" style="margin-left :20px">Send</button>

                            </div>
                        </div>
                    </form>





                </div>
            </div>

            <div class="uk-width-1-2@m">
                <div class="uk-card uk-card-default uk-card-body">

                    <h2>Contact Information</h2>

{{--                    <p><span uk-icon="icon: home;ratio:2"></span> Kathmandu, Nepal.--}}
{{--                        Thamel</p>--}}

{{--                    <p><span uk-icon="icon:phone;ratio:2"></span> 977-01-4231137</p>--}}
{{--                    <p><span uk-icon="icon:phone;ratio:2"></span>Mon to Fri 9am to 6 pm</p>--}}
{{--                        info@nepalhighpointtrekking.com--}}
{{--                        nepalhighpoint@gmail.com<--}}
{{--                        Send us your query anytime!</p>--}}




                    <ul class="uk-list uk-list-divider uk-margin-medium-top uk-text-left">
                        <li><a href="#"> <span uk-icon="icon:home;ratio:1"></span> Kathmandu,Nepal</a></li>
                        <li><a href="#"> <span uk-icon="icon: phone;ratio:1"></span> 9779801234567</a></li>
                        <li><a href="#"> <span uk-icon="icon:clock;ratio:1"></span> Mon to Fri 9am to 6pm</a></li>
                        <li><a href="#"><span uk-icon="icon:info;ratio:1"></span> info@tripmenepal.com</a></li>
                        <li><a href="#"> Send us your query anytime</a></li>
                        <li></li>
                    </ul>

                </div>
            </div>
        </div>



        </div>





    <div class="uk-section">


        <div class="mapouter">
            <div class="gmap_canvas">
                <iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=kathmandu&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                <a href="https://www.pureblack.de">Pureblack.de - Webseite erstellen lassen</a></div>
            <style>.mapouter{position:relative;text-align:right;height:500px;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:100%;}</style></div>
    </div>


    </div>













<div class="uk-container-fluid footer">


    <div class="uk-container">

        <div class="uk-section">

            <div class="uk-text-left footer-content" uk-grid>
                <div class="uk-width-1-4@m">
                    <h4>TripMe</h4>
                    <div class="uk-list">
                        <li>About </li>
                        <li>Partner with us</li>
                        <li>Inspirock on LinkedIn</li>


                    </div>
                </div>

                <div class="uk-width-1-4@m">
                    <h4>Help</h4>
                    <div class="uk-list">
                        <li>FAQ</li>
                        <li>Contact us</li>
                        <li>Privacy policy</li>
                        <li>Cookie policy</li>
                        <li>Copyright policy</li>
                        <li>Terms of use</li>


                    </div>
                </div>
                <div class="uk-width-1-4@m">
                    <h4>What’s On?</h4>
                    <div class="uk-list">
                        <li>Gai Jatra</li>
                        <li>Krishna Ashtami</li>
                        <li>View All</li>


                    </div>
                </div>

                <div class="uk-width-1-4@m">
                    <h4>Social Media</h4>

                    <div class="social-icon">
                        <span class="social-1"><a href="" uk-icon="icon:facebook"></a></span>
                        <span class="social-2 uk-margin-small-left"><a href="" uk-icon="icon:youtube"></a></span>
                        <span class="social-3 uk-margin-small-left"><a href="" uk-icon="icon: instagram"></a></span>
                    </div>

                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quae non amet esse sit maiores tempora nesciunt deserunt nulla quos consectetur impedit, blanditiis ratione illo asperiores incidunt praesentium veniam. Obcaecati, fugiat.</p>
                </div>


            </div>



            <hr>
            <p class="uk-text-center">
                © 2019 TripMe - All rights reserved
            </p>
        </div>
    </div>
</div>



@include("layout.footer")
