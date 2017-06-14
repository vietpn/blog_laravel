<?php
/**
 * Created by IntelliJ IDEA.
 * User: vietpnk53
 * Date: 6/10/2017
 * Time: 1:50 PM
 */

namespace App\Http\Controllers;


use App\Models\Post;

class PagesController extends Controller
{
    public function getIndex()
    {
        $posts = Post::orderBy('created_at', 'desc')->limit(4)->get();
        return view('pages.welcome')->withPosts($posts);
    }

    public function getAbout()
    {
        $data = [];
        $data['email'] = "vietpnk53@gmail.com";
        $data['fullname'] = "Hello";
        return view('pages.about')->withData($data);
    }

    public function getContact()
    {
        return view('pages.contact');
    }
}