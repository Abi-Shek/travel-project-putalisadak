@include("layout.header")
</head>
<body>

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

    <div class="uk-section">
        <h2>About</h2>
        <p>


            Till the date, a lot has been written about the beauty of Nepal and how it can completely captivate you. However, much of Nepal’s beauty is not in words or the speech but in the things you experience. We here at Alpine Adventure Team understand this. We understand that exploring Nepal is not a surface level ordeal but a deep experience where you engulf yourself in the Himalayan way of life. The simplistic and enigmatic way of life, surrounded by rare flora and fauna, guarded with towering breathtaking peaks.

            Our deep understanding of the travel to the Himalayas made us adept enough to start Alpine Adventure Team in 2006, with the aim to bring forth a socially and environmentally conscious tourism company that understood the essence of tourism.

            For instance, tourism is not simply a business or an exchange, it is the medium with which ecosystems are nurtured, businesses are built and travelers and locals are empowered. Alpine Adventure Team which is an accumulation of years of experience and a team that understands the importance of sustainable tourism and prosperity through tourism hopes to achieve just this.

            With all of our efforts directed towards our community and the country itself, we also make a great deal of effort to be there for our clients. By introducing multiple facilities that help them experience the country we also offer them with interactions with locals and homestay options. Furthermore, our attention to detail also beckons to respond to comfort levels that each client would expect from us, starting with introducing female guides for female travelers. Our options, understanding, and respect for people and nature make us one of the most ethical organizations today.
        </p>


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
