@include("layout.header")
</head>
<body>




       
        <nav class="uk-navbar-container  header uk-container-fluid" uk-navbar>
 
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
                      
                      </nav>
                   
               
    
            </nav>
       
            
<hr style="margin: 0px !important;padding: 0px !important;opacity: .4;">
              
           <div uk-sticky="animation: uk-animation-slide-top; sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; cls-inactive: uk-navbar-transparent uk-light; top: 200" style="background: #03A9F4 !important" id="loginmenu">
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
    


           

<div class="uk-container ">
<div class="uk-section">


     
                        <div class="uk-card  uk-text-center">
                                <h3 class="uk-card-title">Login and Sign Up Form</h3>
                                <p>Login up to access your plan from any device</p>
                                
                                <div class="uk-margin-medium-top">
                                        <ul class="uk-flex-center uk-subnav" uk-tab  uk-switcher >
                                            <li class="uk-active"><a href="#">Sign In</a></li>
                                            <li><a href="#">Sign Up</a></li>
                                           
                                        </ul>
                                   
                                    
                                    <ul class="uk-switcher uk-margin uk-card uk-card-default uk-padding-medium">
                                        <li>
                                                <!-- <a class="uk-button uk-button-default form-f form-bg  uk-padding-left-small" href="">Sign in With Facebook</a> -->
                                         
                                               <!--  <br> -->
                                                <a class="uk-button uk-button-default form-g form-bg uk-padding-large-left" href="googlelogin">Sign in With Google</a>
                                        <br>
                                        
                                           <a class="uk-button uk-button-default form-t form-bg" uk-toggle="target: #signInForm" href="">Login in with TravelMe</a>
                                           
                                        
                                        </li>

                                     


                                        <li>
                                            <div class="uk-container uk-card uk-card-default  uk-card-body uk-card-large  uk-width-1-2@m signup-form-cardbox">
                                                <form class="uk-grid-small uk-text-center" uk-grid action="login" method="post">
                                                    @csrf
                                                        <div class="uk-width-1-1@s">
                                                            <input class="uk-input " type="email" placeholder="Your Email" name="uemail" required="true">
                                                        </div>
                                                        <div class="uk-width-1-1@s">
                                                                <input class="uk-input" type="password" placeholder="Password (min 6 characters" name="upw" required="true" minlength="6">
                                                            </div>
                                                        <div class="uk-width-1-1@s">
                                                                <input class="uk-input" type="text" placeholder="Full Name" name="ufull">
                                                            </div>
                                                            <div class="uk-width-1-2@s uk-form-width-medium">
                                                                <input class="uk-input " type="text" placeholder="Country" name="ufrom">
                                                            </div>
                                                            <div class="uk-width-1-2@s uk-form-width-medium">
                                                            <input class="uk-input" type="text" placeholder="State" name="ustate">
                                                            </div>
                                                            <div class="uk-width-1-2@s uk-form-width-medium">
                                                            <select class="uk-select" name="ugender">
                                                                <option value="male">Male</option>
                                                                <option value="female">Female</option>
                                                                <option value="other">Other</option>
                                                            </select>
                                                            </div>
                                                            <div class="uk-width-1-2@s uk-form-width-medium">
                                                            <input class="uk-input" type="date" placeholder="DOB" name="udob">
                                                            </div>
                                                            <div class="uk-width-1-1@s uk-form-width-medium">
                                                            <button class="uk-button uk-button-default form-t form-bg" href="" type="subbmit">Sign Up with TravelMe</button>
                                                            </div>
                                                          
                                                        </form>
                                                        <p>Already have an account?   <a href="" uk-toggle="target: #signInForm" > Login</a></p>
                                                        </div>
                                          
                                        </li>
                                        <li>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur, sed do eiusmod.</li>
                                    </ul>
                                
                                </div>
                            </div>
                </div>


            </div>











            <div id="signInForm" uk-modal>
                    <div class="uk-modal-dialog uk-modal-body">

                        
                        <h2 class="uk-modal-title">Login With Trip Me</h2>
                              <!-- login Form -->

                              <form class="uk-grid-small uk-text-center" uk-grid action="{{{ action('Auth\LoginController@booknow')}}}" method="post">
                                @csrf
                                <div class="uk-width-1-1@s">
                                    <input class="uk-input " type="text" placeholder="Your Email" name="un">
                                </div>
                                <div class="uk-width-1-1@s">
                                        <input class="uk-input" type="password" placeholder="Password" name="pass">
                                    </div>
                              
                                    <div class="uk-width-1-1@s uk-form-width-medium">
                                    <button class="uk-button uk-button-default form-t form-bg"  name="lognow" type="subbmit">Sign In with TravelMe</button>
                                    </div>
                                  
                                </form>




<!-- end of login form -->
                        <!-- <p class="uk-text-right">
                            <button class="uk-button uk-button-default uk-modal-close" type="button">Cancel</button>
                            <button class="uk-button uk-button-primary" type="button">Save</button>
                        </p> -->
                    </div>
                </div>

 <div class="uk-clearfix"></div> 


        <div class="uk-container-fluid footer uk-margin-xlarge-top login-footer">


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
            
            
            
            
            
            
            
            
            
            
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
             
            
                <!-- UIkit JS -->
                <script src="js/uikit.min.js"></script>
                <script src="js/uikit-icons.min.js"></script>
            
                <script src="js/flatpickr.js"></script>
            
            
                <script>
                  
            
                    $(".basicDate").flatpickr({
            
                dateFormat: "F, d Y",
                disableMobile: "true",
            
             mode: 'range'
                // dateFormat: "Y-m-d"
            });
            
                     </script>
                    
                    
            
            
            
        @include("layout.footer")
