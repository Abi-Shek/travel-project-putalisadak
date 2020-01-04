<?php 

use Mapper;

public function index()
{
    Mapper::map(27.7090319, 85.2911131,13);

    return view('map')
}


 ?>