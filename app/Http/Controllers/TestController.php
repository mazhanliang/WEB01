<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;

class TestController extends Controller
{
     public function aaa()
     {
         $aa = DB::table('p_users')->first();
         var_dump($aa);
     }
}
