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
                <a href="">
                    <button class="uk-button uk-button-default uk-button-primary btn-global">Book Trip</button>
                </a>
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

            <div class="uk-navbar-right header-right uk-margin-medium-right">
                <select class="uk-select">
                    <option>EN</option>
                    <option>GR</option>
                </select>

            </div>

        </nav>



        <div class="headerborder" style="border:1px solid white"></div>
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




        <div class="uk-grid event-box">

            <div class="uk-width-3-4@m  eventmaincontent " >

    @if (count($searchnow)>0)
     @foreach ($searchnow as $selall)
     
                <div class="uk-card uk-card-default uk-card-small">

                   


                  
                    <div class="uk-card uk-card-default uk-card-small uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
                         
                        <div class="uk-card-media-left uk-cover-container">
                             
                           
                           
                            <img src="image/destination/{{ $selall -> feat }}" alt="" width="300px" height="200px" uk-cover >

                              
                            <canvas width="300" height="100"></canvas>
                            
                            

                        </div>
                       
                        <div>

                            <div class="uk-card-body uk-card-small">
                                <h3 class="uk-card-title">
                                   <a href="detail?post_name={{$selall -> head}}&post_id={{$selall -> id}}">{{$selall -> head}}</a>
                                </h3>
                                
                                <p>{{str_limit($selall -> description, $limit = 150, $end = '...') }}</p>
                                
                                <a href="detail?post_name={{$selall -> head}}&post_id={{$selall -> id}}"><button class="uk-button uk-button-default btn-global uk-margin-medium-bottom">View More</button></a>
                            </div>
                        </div>
                    </div>
                     

                </div>
           
 @endforeach
 
 @else 
 Nothing found! Please Try again
 @endif
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

            </div>

        </div>
    </div>

</div>



















@include("layout.footer")
