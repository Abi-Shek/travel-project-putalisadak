<form action="{{action('newcontroller@ok')}}" method="post">

@csrf
<input type="text" placeholder="try name" name="try">
<input type="submit" value="Test">
</form>


