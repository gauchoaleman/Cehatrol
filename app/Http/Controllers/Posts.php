<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class Posts extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param $user_id which users posts to show
     * @return \Illuminate\Http\Response
     */
  public function __invoke(Request $request,$user_id)
  {
    $posts = DB::table('posts')
    ->select('posts.title as post_title', 'posts.content as post_content')
    ->where('user_id',$user_id)->orderBy('post_title', 'asc')->get();

    foreach ($posts as $post) {
        //$user_array = array($user);
        if (strlen($post->post_title)>=20) {
            $post->post_title = trim(substr($post->post_title,0,20)).'...';
        }
        $shorten_posts[] = $post;
      }

    $data["json"] = json_encode($posts);
    return view("posts",$data);
  }
}
