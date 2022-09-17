<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
header('Content-type:application/json;charset=utf-8');
class Users extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
      $users = DB::table('users')->select('name as user_name','id as user_id')->orderBy('user_name', 'asc')->get();
      
      foreach ($users as $user) {
        $capital_users[] = array("user_name"=>ucfirst(strtolower($user->user_name)),"user_id"=>$user->user_id);
      }

      $data["json"] =  html_entity_decode(json_encode($capital_users));
      return view("json",$data);
    }
}
