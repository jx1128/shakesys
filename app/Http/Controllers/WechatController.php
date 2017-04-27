<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class WechatController extends Controller
{
    public $weixin = 'aabb';

    public function aaa(){
    	return $this->weixin;
    }

   
}
