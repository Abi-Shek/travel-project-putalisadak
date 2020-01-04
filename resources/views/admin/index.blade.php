@include("layout.header")
<div class="uk-container">
    <div class="uk-section">

        <div id="signInForm">

            <div class="uk-width-1-3">


                <h2 class="uk-modal-title">Admin Login</h2>
                      <!-- login Form -->

                      <form class="uk-grid-small uk-text-center" uk-grid action="{{{ action('Auth\LoginController@adminlogin')}}}" method="post">
                        @csrf
                        <div class="uk-width-1-1@s">
                            <input class="uk-input " type="text" placeholder="Your Email" name="un">
                        </div>
                        <div class="uk-width-1-1@s">
                                <input class="uk-input" type="password" placeholder="Password" name="pass">
                            </div>

                            <div class="uk-width-1-1@s uk-form-width-medium">
                            <button class="uk-button uk-button-default form-t form-bg"  name="adminlog" type="subbmit">Sign In as Admin</button>
                            </div>

                        </form>




<!-- end of login form -->
                <!-- <p class="uk-text-right">
                    <button class="uk-button uk-button-default uk-modal-close" type="button">Cancel</button>
                    <button class="uk-button uk-button-primary" type="button">Save</button>with TravelMe
                </p> -->
            </div>
        </div>
    </div>
</div>




@include("layout.footer")
