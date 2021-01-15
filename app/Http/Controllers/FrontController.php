<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use App\{Category, General, Hotel, Link, Message, Page, Post, Restaurant, Tag, Travel};

class FrontController extends Controller
{
    public function home()
    {
        $general = General::find(1);
        $hotel = Hotel::orderBy('id','desc')->limit(3)->get();
        $resto = Restaurant::orderBy('id','desc')->limit(3)->get();
        $travel = Travel::orderBy('id','desc')->limit(3)->get();
        $link = Link::orderBy('name','asc')->get();
        $schedule = Http::get('https://api.banghasan.com/sholat/format/json/jadwal/kota/742/tanggal/'.date("Y-m-d"))->json()['jadwal']['data'];
        return view ('welcome', compact('general','hotel','link','resto','schedule','travel'));
    }

    public function wisata()
    {
        $general = General::find(1);
        $travels = Travel::orderBy('id','desc')->paginate(9);
        $link = Link::orderBy('name','asc')->get();
        return view ('front.wisata', compact('general','link','travels'));
    }

    public function wisatashow($slug)
    {
        $general = General::find(1);
        $travel = Travel::where('slug', $slug)->firstOrFail();
        $link = Link::orderBy('name','asc')->get();
        return view ('front.wisatashow', compact('general','link','travel'));
    }

    public function akomodasi()
    {
        $general = General::find(1);
        $hotels = Hotel::orderBy('id','desc')->paginate(9);
        $link = Link::orderBy('name','asc')->get();
        return view ('front.akomodasi',compact('general','hotels','link'));
    }

    public function akomodasishow($slug)
    {
        $general = General::find(1);
        $hotel = Hotel::where('slug', $slug)->firstOrFail();
        $link = Link::orderBy('name','asc')->get();
        return view ('front.akomodasishow', compact('general','hotel','link'));
    }

    public function caferesto()
    {
        $general = General::find(1);
        $link = Link::orderBy('name','asc')->get();
        $restos = Restaurant::orderBy('id','desc')->paginate(9);
        return view ('front.caferesto', compact('general','link','restos'));
    }

    public function caferestoshow($slug)
    {
        $general = General::find(1);
        $link = Link::orderBy('name','asc')->get();
        $resto = Restaurant::where('slug', $slug)->firstOrFail();

        return view ('front.caferestoshow', compact('general','link','resto'));
    }

    public function search()
    {
        $query = request("query");

        $posts = Post::where("title","like","%$query%")->latest()->paginate(9);
        $general = General::find(1);
        $link = Link::orderBy('name','asc')->get();
        return view('front.artikel',compact("general","posts","query","link"));
    }

    public function artikel()
    {
        $posts = Post::where('status','=','PUBLISH')->orderBy('id','desc')->paginate(9);
        $general = General::find(1);
        $link = Link::orderBy('name','asc')->get();
        return view ('front.artikel', compact('general','link','posts'));
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
        $link = Link::orderBy('name','asc')->get();
        // $lpost = Post::orderBy('id','desc')->limit(5)->get();
        // $general = General::find(1);

        return view('front.artikelshow',compact('post','general','link','categories','recent','tags'));
    }

    public function category(Category $category)
    {
        $general = General::find(1);
        $posts = $category->posts()->latest()->paginate(9);
        $link = Link::orderBy('name','asc')->get();
        // $lpost = Post::orderBy('id','desc')->limit(5)->get();
        // $general = General::find(1);
        return view ('front.artikel',compact('general','posts','category','link'));
    }

    public function tag(Tag $tag)
    {
        $general = General::find(1);
        $posts = $tag->posts()->latest()->paginate(12);
        $link = Link::orderBy('name','asc')->get();
        // $lpost = Post::orderBy('id','desc')->limit(5)->get();
        // $general = General::find(1);
        return view ('front.artikel',compact('general','posts','link','tag'));
    }

    public function contact()
    {
        $general = General::find(1);
        $link = Link::orderBy('name','asc')->get();
        return view ('front.contact', compact('general','link'));
    }

    public function message(Request $request)
    {
        \Validator::make($request->all(), [
            "name" => "required",
            "email" => "required",
            "subject" => "required",
            "body" => "required"         
        ])->validate();

        $message = new Message();
        $message->name = $request->name;
        $message->email = $request->email;
        $message->subject = $request->subject;
        $message->body = $request->body;

       $message->save();

       if ( $message->save()) {

        return redirect()->route('contact')->with('sended', 'Your message was successfully sent');

       } else {
           
        return redirect()->route('contact')->with('failed', 'Your message failed to send');

       }
    }

    public function page($slug)
    {
        
        $general = General::find(1);
        $page = Page::where('slug', $slug)->firstOrFail();
        $link = Link::orderBy('name','asc')->get();
        $schedule = Http::get('https://api.banghasan.com/sholat/format/json/jadwal/kota/742/tanggal/'.date("Y-m-d"))->json()['jadwal']['data'];
        return view('front.page',compact('page','general','link','schedule'));
    }

    public function covid()
    {
        $general = General::find(1);
        $idcovid = Http::get('https://api.kawalcorona.com/indonesia');
        $iddata = $idcovid->json();
        $response = Http::get('https://api.kawalcorona.com/indonesia/provinsi');
        $data = $response->json();
        $link = Link::orderBy('name','asc')->get();

        return view('front.covid',compact('data','iddata','general','link'));
    }

}
