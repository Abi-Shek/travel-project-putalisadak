@include("layout.header")
<nav class="uk-navbar-container adminnav" uk-navbar >
    <div class="uk-navbar-left">

        <ul class="uk-navbar-nav">
            <li class="uk-active"><a href="addnew">Add Destination</a></li>
            <li>
                <a href="itinerary">Add Itinerary</a>
                <div class="uk-navbar-dropdown">
                    <ul class="uk-nav uk-navbar-dropdown-nav">
                        <li class="uk-active"><a href="#">Active</a></li>
                        <li><a href="#">Item</a></li>
                        <li><a href="#">Item</a></li>
                    </ul>
                </div>
            </li>
            <li><a href="#">Item</a></li>
        </ul>

    </div>
    <div class="uk-navbar-right">

            <ul class="uk-navbar-nav">
                <li class="uk-active"><a href="#">Notification</a></li>
                <li>
                    <a href="#">Follow up</a>
                    <div class="uk-navbar-dropdown">
                        <ul class="uk-nav uk-navbar-dropdown-nav">
                            <li class="uk-active"><a href="#">Active</a></li>
                            <li><a href="#">Item</a></li>
                            <li><a href="#">Item</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="logout">Logout</a></li>
            </ul>

        </div>
</nav>
<div class="uk-container"  id="admins">
    <div class="uk-section">
        <div>
            <h2>Add New Destinations</h2>
        <form action="{{action('newcontroller@destination')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="uk-margin">
                                <div class="uk-inline">
                                    <span class="uk-form-icon" uk-icon="icon: heart;"></span>
                                    <input class="uk-input uk-form-width-large" type="text"  placeholder="Destination Name..." name="head">
                                </div>
                        </div>
                        <div class="uk-margin">
                                <div class="uk-inline">
                                    <span class="uk-form-icon" uk-icon="icon: image;"></span>
                                    <input class="uk-input" type="file"  name="featimage" style="padding:2% 0;">
                                </div>
                                <input type="hidden" name="MAX_FILE_SIZE" value="819200">
                        </div>
                        <div class="uk-margin">
                            <span class="uk-inline">  <span uk-icon="icon: check;"></span> Destination Type</span><br>
                                <div class="uk-inline">


                                    <input class="uk-checkbox" type="checkbox"  value="nat" name="dtype[]" style="padding:2% 0;">
                                    <span>Natural</span>
                                </div> <br>
                                <div class="uk-inline">

                                        <input class="uk-checkbox" type="checkbox" value="cult"  name="dtype[]" style="padding:2% 0;">
                                        <span>Cultural</span>
                                    </div><br>
                                    <div class="uk-inline">


                                        <input class="uk-checkbox" type="checkbox" value="adv" name="dtype[]" style="padding:2% 0;">
                                        <span>Adventurous</span>
                                    </div><br>
                                        <div class="uk-inline">

                                                <input class="uk-checkbox" type="checkbox" value="wild" name="dtype[]" style="padding:2% 0;">
                                                <span>Wildlife</span><br>
                                        </div>
                                        <div class="uk-margin">
                                                <div class="uk-inline">
                                                    <span class="uk-form-icon" uk-icon="icon: location;"></span>
                                                    <input class="uk-input uk-form-width-large" type="text"  placeholder="Located at (District)..." name="location">
                                                </div>
                                        </div>
                                        <div class="uk-margin">
                                                <div class="uk-inline">
                                                    <span class="uk-form-icon" uk-icon="icon: more-vertical;"></span>
                                                    <input class="uk-input uk-form-width-large" type="text"  placeholder="Altitude ... (about)" name="altitude">
                                                </div>
                                        </div>
                                        <div class="uk-margin">
                                                <div class="uk-inline">
                                                    <span class="uk-form-icon" uk-icon="icon: world;"></span>
                                                    <input class="uk-input uk-form-width-large" type="text"  placeholder="Longitude (Geo Loaction)" name="long">
                                                </div>
                                        </div>
                                        <div class="uk-margin">
                                                <div class="uk-inline">
                                                    <span class="uk-form-icon" uk-icon="icon: world;"></span>
                                                    <input class="uk-input uk-form-width-large" type="text"  placeholder="Lattitude (Geo Loaction)" name="latt">
                                                </div>
                                        </div>
                                        <div class="uk-margin">
                                                <div class="uk-inline">
                                                    <span class="uk-form-icon" uk-icon="icon: more;"></span>
                                                    <input class="uk-input uk-form-width-large" type="text"  placeholder="Distance from KTM.. (about)" name="distance">
                                                </div>
                                        </div>
                                        <div class="uk-margin">
                                                <div class="uk-inline">
                                                    <span class="uk-form-icon" uk-icon="icon: location;"></span>
                                                    <input class="uk-input uk-form-width-large" type="text"  placeholder="Tour start from.." name="start">
                                                </div>
                                        </div>
                                        <div class="uk-margin">
                                                <div class="uk-inline">
                                                    <span class="uk-form-icon" uk-icon="icon: refresh;"></span>
                                                    <input class="uk-input uk-form-width-large" type="text"  placeholder="Attractions... place, culture, natural" name="attraction">
                                                </div>
                                        </div>
                                        <div class="uk-margin">
                                                <div class="uk-inline">
                                                    <span class="uk-form-icon" uk-icon="icon: hashtag;"></span>
                                                    <input class="uk-input uk-form-width-large" type="text"  placeholder="Local... things to taste" name="local">
                                                </div>
                                        </div>
                                        <div class="uk-margin">
                                                <div class="uk-inline">
                                                    <span class="uk-form-icon" uk-icon="icon: calendar;"></span>
                                                    <input class="uk-input uk-form-width-large" type="text"  placeholder="Duration of trip" name="duration">
                                                </div>
                                        </div>
                                        <div class="uk-margin">
                                                <div class="uk-inline">
                                                    <span class="uk-form-icon" uk-icon="icon: expand;"></span>
                                                    <input class="uk-input uk-form-width-large" type="text"  placeholder="Nearby Destination (important)" name="nearby">
                                                </div>
                                        </div>
                                        <div class="uk-margin">
                                                <div class="uk-inline">
                                                    <span class="uk-form-icon" uk-icon="icon: happy;"></span>
                                                    <input class="uk-input uk-form-width-large" type="text"  placeholder="Things to do..." name="cando">
                                                </div>
                                        </div>
                                        <div class="uk-margin">
                                                <div class="uk-inline">
                                                    <span class="uk-form-icon" uk-icon="icon: tag;"></span>
                                                    <input class="uk-input uk-form-width-large" type="text"  placeholder="Tag for destination... (important)" name="tags">
                                                </div>
                                        </div>
                                        <div class="uk-margin">
                                                <div class="uk-inline">
                                                    <span class="uk-form-icon" uk-icon="icon: ;">$</span>
                                                    <input class="uk-input uk-form-width-large" type="text"  placeholder="Cost per day..." name="cost">
                                                </div>
                                        </div>

                                <input type="hidden" name="MAX_FILE_SIZE" value="819200">
                                <div class="uk-margin">
                                        <div class="uk-inline">
                                            <span class="uk-form-icon" uk-icon="icon: forward;"></span>
                                            <input class="uk-button btn-global" type="submit" name="add" value="Click to ADD">
                                        </div>
                                </div>
                        </div>

                    </form>
        </div>
    </div>
</div>
@include('layout.footer')
