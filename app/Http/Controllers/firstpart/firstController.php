<?php

namespace App\Http\Controllers\firstpart;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as Controller;
class firstController extends Controller
{
     
  public function  getName()
  {
      return 'i the first controller getName function' ;
  } 
  public function  getNameWithPar($name)
  {
      return $name ;
  } 
}
