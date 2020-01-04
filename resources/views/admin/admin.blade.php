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



	<div class="uk-section ">
  <div class="uk-grid ">

            <div class="uk-width-auto@m">
                <ul class="uk-tab-left" uk-tab="connect: #component-tab-left; animation: uk-animation-fade">
                    <li><a href="#">Recent Booking</a></li>
                    <li><a href="#">Booked</a></li>
                    <li><a href="#">User Detail</a></li>
                </ul>
            </div>
            <div class="uk-width-expand@m">
                <ul id="component-tab-left" class="uk-switcher">
                    <li>


                    	<table class="uk-table uk-table-striped">
    <thead>
        <tr>
            <th>Id</th>
            <th>Booked by</th>
            <th>Booked ON</th>
            <th>Book Date</th>
             <th>Destination</th>
             <th>No of pax</th>
             <th>Price</th>
             <th>Total</th>
              <th>Approved</th>
              <th>User Info</th>
        </tr>
    </thead>
    <tbody>
         <?php $id=1; ?>
        @foreach($bookings as $bookings)

        <tr>
            <td>{{ $id }}</td>
            <td>{{$bookings -> bookedby}}</td>
            <td>date</td>
            <td>date</td>
            <td>{{$bookings -> destination}}</td>
            <td>person</td>
            <td>{{$bookings -> cost}}</td>
            <td>{{$bookings -> totalcost}}</td>
             <td><button class="uk-button-default uk-button-danger">Approve</button></td>
            <!-- <td>{{$bookings -> cost}}</td> -->

            <td><a href="#user-infomodal" uk-toggle>info</a></td>
        </tr>
        <?php $id=$id+1; ?>
        @endforeach

    </tbody>
</table>


                    </li>
                    <li>

                    	<table class="uk-table uk-table-striped">
    <thead>
        <tr>
            <th>Id</th>
            <th>Book by</th>
            <th>Booked ON</th>
            <th>Book Date</th>
             <th>Destination</th>
             <th>No of pax</th>
             <th>Price</th>
             <th>Total</th>
              <th>Approved</th>
              <th>User Info</th>
        </tr>
    </thead>
    <tbody>
         <?php $id=1; ?>
        @foreach($booked as $booked)

        <tr>
            <td>{{ $id }}</td>
            <td>{{$booked -> bookedby}}</td>
            <td>date</td>
            <td>date</td>
            <td>{{$booked -> destination}}</td>
            <td>person</td>
            <td>{{$booked -> cost}}</td>
            <td>{{$booked -> totalcost}}</td>
             <td>app</td>
            <!-- <td>{{$bookings -> cost}}</td> -->

            <td><a href="#user-infomodal" uk-toggle>info</a></td>
        </tr>
        <?php $id=$id+1; ?>
        @endforeach

    </tbody>
</table>




                    </li>
                    <li>


                    	<table class="uk-table uk-table-striped">
    <thead>
        <tr>
            <th>Id</th>
            <th>Photo</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Email</th>
             <th>Address</th>

        </tr>
    </thead>
    <tbody>
        <?php  $sn=1; ?>
        @foreach($users as $users)
        <tr>
            <td>{{$sn}}</td>
            <td>{{"pic"}}</td>
            <td>{{$users -> fullname}}</td>
            <td>{{"phone"}}</td>
            <td>{{$users -> email}}</td>
            <td>{{$users -> country}} </td>

        </tr>
        <?php $sn=$sn+1; ?>
        @endforeach


    </tbody>
</table>



                    </li>
                </ul>
            </div>
      </div>


</div>






<!--  User-info modal -->



<div id="user-infomodal" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <h2 class="uk-modal-title">User Info</h2>

        <div class="uk-container">
        	<div class="usermodalleft uk-float-left">
        		<h4>Name</h4>
        		<h5>Email</h5>
        	</div>
<div class="usermodalleft uk-float-right">
        		<img src="" alt="userphoto">
        	</div>
        	<div class="uk-clearfix">

        </div>

        <div class="usermodaldetail">
        	<h5 class="uk-text-center">
        		Detail
        	</h5>

        	<ul class="uk-list">
        		<li>Arrival Date: <span>7 <sup>th</sup> june,2019</span></li>
        		<li>Select Destination :<span> Kathmandu,</span> <span> Pokhara</span></li>
        		<li>Address:<span>123 crossstreet ,London</span></li>
        		<li>Passport No: <span>0123456789</span></li>

        	</ul>

        </div>
        <p class="uk-text-right">
            <button class="uk-button uk-button-default uk-modal-close" type="button">close</button>

        </p>
    </div>
</div>




@include("layout.footer")
