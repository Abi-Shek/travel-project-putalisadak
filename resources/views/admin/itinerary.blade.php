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


<div class="uk-container">
    <div class="uk-grid">
        <div>
            <h2>Add Itinerary</h2>
        <form action="{{action('newcontroller@additinerary')}}" method="post">
    @csrf
    <div class="uk-margin">
            <span class="uk-inline">  <span uk-icon="icon: check;"></span> Destination Name</span><br>
                <div class="uk-inline">

                        <select class="uk-select" name="title">
                            @foreach ($getting as $get)
                        <option value="{{$get -> head}}">
                            {{$get -> head}}
                                </option>
                            @endforeach

                </div>
                <div class="uk-inline" >

                <input min='1' max='28' type="number" placeholder="No. of Days" class="uk-input  uk-margin" id="itedays">
                    <span class="newinput">

                    </span>
                </div>
                <div>

                        <input type="submit" class="uk-button uk-margin btn-global" id="addite">

                </div>
    </div>
</form>
        </div>
    </div>

</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script type="text/javascript">
$('#itedays').blur(function(){
    var nums=$('#itedays').val();
    if(nums<=7){
       var numsa=3;
    }
    else{
        var numsa=7;
    }
    var totdays=parseInt(nums)+parseInt(numsa);
    var any=parseInt(nums)+1;

    for(var i=1;i<=totdays;i++){
        if(i==any){
            $('.newinput').append("<h2>Extra Days<h2><br>");
        }
        $('.newinput').append("<label for='ite'>Day::"+ i +"</label><br>");
        $('.newinput').append("<input type='text' id='ite' name='ite[]' class='uk-input' placeholder='highlighted events...'><br>");
    }
});

</script>


@include("layout.footer")
