<?php


namespace App\Http\Controllers\Front;


use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function showUserName(){
        return 'Tiger Evo';
    }
    public function getIndex(){
      /* $obj=new \stdClass();
       $obj->name='thaer';
       $obj->age=21;
       $obj->gender='male';*/
        $data=[];

        return view('welcome',compact('data'));
    }

}
