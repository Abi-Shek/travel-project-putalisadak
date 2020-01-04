@include("layout.header")





</head>


<body>

<div class="uk-position-relative">

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

    <div class="uk-section">

<h2>Event</h2>



        <div class="uk-grid event-box">

            <div class="uk-width-3-4@m  eventmaincontent " >

                <div class="uk-card uk-card-default uk-card-small">


                    <div class="uk-card uk-card-default uk-card-small uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
                        <div class="uk-card-media-left uk-cover-container">
                            <img src="image/nepal-content.jpg" alt="" width="300px" height="200px" uk-cover >
                            <canvas width="300" height="100"></canvas>
                        </div>
                        <div>
                            <div class="uk-card-body uk-card-small">
                                <h3 class="uk-card-title">Event Title</h3>
                                <h5>Date:18 feb,2019</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                            </div>
                        </div>
                    </div>

                    <div class="uk-card uk-card-default uk-card-small uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
                        <div class="uk-card-media-left uk-cover-container">
                            <img src="image/nepal-content.jpg" alt="" width="300px" height="200px" uk-cover >
                            <canvas width="300" height="100"></canvas>
                        </div>
                        <div>
                            <div class="uk-card-body uk-card-small">
                                <h3 class="uk-card-title">Media Left</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                            </div>
                        </div>
                    </div>


                    <div class="uk-card uk-card-default uk-card-small uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
                        <div class="uk-card-media-left uk-cover-container">
                            <img src="image/nepal-content.jpg" alt="" width="300px" height="200px" uk-cover >
                            <canvas width="300" height="100"></canvas>
                        </div>
                        <div>
                            <div class="uk-card-body uk-card-small">
                                <h3 class="uk-card-title">Media Left</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                            </div>
                        </div>
                    </div>



                    <div class="uk-card uk-card-default uk-card-small uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
                        <div class="uk-card-media-left uk-cover-container">
                            <img src="image/nepal-content.jpg" alt="" width="300px" height="200px" uk-cover >
                            <canvas width="300" height="100"></canvas>
                        </div>
                        <div>
                            <div class="uk-card-body uk-card-small">
                                <h3 class="uk-card-title">Media Left</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                            </div>
                        </div>
                    </div>



                </div>

            </div>

            <div class="uk-width-1-4@m  eventsidecontent">


                 <div class="dateinline" style="width:100px">
                 </div>


                <h4 class="uk-heading-divider">Top Destination</h4>

                <ul class="uk-list">
                    <li><a href="#">Everst Region</a></li>
                    <li><a href="#">Annapurna Region</a></li>
                    <li><a href="#">Kathmandu Tour</a></li>
                    <li><a href="">Bhaktapur Tour</a></li>
                    <li><a href="">Chitwan National Park</a></li>
                </ul>

                <h4 class="uk-heading-divider">Holiday Destination</h4>

                <ul class="uk-list">
                    <li><a href="#">Everst Region</a></li>
                    <li><a href="#">Annapurna Region</a></li>
                    <li><a href="#">Kathmandu Tour</a></li>
                    <li><a href="">Bhaktapur Tour</a></li>
                    <li><a href="">Chitwan National Park</a></li>
                </ul>

                </div>

        </div>
    </div>
</div>






<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>



<script src="/js/flatpickr.js"></script>


<script>


    $(".dateinline").flatpickr({

        dateFormat: "F, d Y",
        disableMobile: "true",
         inline:'true'
        // dateFormat: "Y-m-d"
    });

</script>
















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
