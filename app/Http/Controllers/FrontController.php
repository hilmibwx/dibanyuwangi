<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{Category, General, Hotel, Post, Restaurant, Tag, Travel};

class FrontController extends Controller
{
    public function home()
    {
        $general = General::find(1);
        $hotel = Hotel::orderBy('id','desc')->limit(3)->get();
        $resto = Restaurant::orderBy('id','desc')->limit(3)->get();
        $travel = Travel::orderBy('id','desc')->limit(3)->get();
        return view ('welcome', compact('general','hotel','resto','travel'));
    }

    public function wisata()
    {
        $general = General::find(1);
        $travels = Travel::orderBy('id','desc')->paginate(9);
        return view ('front.wisata', compact('general','travels'));
    }

    public function wisatashow($slug)
    {
        $general = General::find(1);
        $travel = Travel::where('slug', $slug)->firstOrFail();
        return view ('front.wisatashow', compact('general','travel'));
    }

    public function akomodasi()
    {
        $general = General::find(1);
        $hotels = Hotel::orderBy('id','desc')->paginate(9);
        return view ('front.akomodasi',compact('general','hotels'));
    }

    public function akomodasishow($slug)
    {
        $general = General::find(1);
        $hotel = Hotel::where('slug', $slug)->firstOrFail();
        return view ('front.akomodasishow', compact('general','hotel'));
    }

    public function caferesto()
    {
        $general = General::find(1);
        $restos = Restaurant::orderBy('id','desc')->paginate(9);
        return view ('front.caferesto', compact('general','restos'));
    }

    public function caferestoshow($slug)
    {
        $general = General::find(1);
        $resto = Restaurant::where('slug', $slug)->firstOrFail();

        return view ('front.caferestoshow', compact('general','resto'));
    }

    public function search()
    {
        $query = request("query");

        $posts = Post::where("title","like","%$query%")->latest()->paginate(9);
        $general = General::find(1);
        return view('front.artikel',compact("general","posts","query"));
    }

    public function artikel()
    {
        $posts = Post::where('status','=','PUBLISH')->orderBy('id','desc')->paginate(6);
        $general = General::find(1);
        return view ('front.artikel', compact('general','posts'));
    }

    public function artikelshow($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        
        $old = $post->views;

        $new = $old + 1;
    
        $post->views = $new;
    
        $post->update();

        $general = General::find(1);
        $categories = Category::get();
        $tags = Tag::get();
        $recent = Post::orderBy('id','desc')->limit(5)->get();
        // $link = Link::orderBy('id','asc')->get();
        // $lpost = Post::orderBy('id','desc')->limit(5)->get();
        // $general = General::find(1);

        return view('front.artikelshow',compact('post','general','categories','recent','tags'));
    }

    public function category(Category $category)
    {
        $general = General::find(1);
        $posts = $category->posts()->latest()->paginate(9);
        // $link = Link::orderBy('id','asc')->get();
        // $lpost = Post::orderBy('id','desc')->limit(5)->get();
        // $general = General::find(1);
        return view ('front.artikel',compact('general','posts','category'));
    }

    public function tag(Tag $tag)
    {
        $general = General::find(1);
        $posts = $tag->posts()->latest()->paginate(12);
        // $link = Link::orderBy('id','asc')->get();
        // $lpost = Post::orderBy('id','desc')->limit(5)->get();
        // $general = General::find(1);
        return view ('front.artikel',compact('general','posts','tag'));
    }

    public function contact()
    {
        $general = General::find(1);
        return view ('front.contact', compact('general'));
    }
}
