<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Testimonial\Testimonial;
use Illuminate\Http\Request;
use App\Models\About\About;
use App\Models\Banner\Banner;
use App\Models\General\General;
use App\Models\Link\Link;
use App\Models\Post\Post;
use App\Models\Portfolio\Portfolio;
use App\Models\Partner\Partner;
use App\Models\Pcategory\Pcategory;
use App\Models\Faq\Faq;
use App\Models\Service\Service;
use App\Models\Tag\Tag;
use App\Models\Page\Page;
use App\Models\Team\Team;
use App\Models\Category\Category;
use App\Models\Product\Product;

class FrontController extends Controller
{
    public function home()
    {
        $about = About::find(1);
        $banner =Banner::all();
        $general =General::find(1);
        $link = Link::orderBy('name','asc')->get();
        $lpost =Post::where('status','=','PUBLISH')->orderBy('id','desc')->get();
//        dd($lpost);
        $partner =Partner::orderBy('name','asc')->limit(8)->get();
        $pcategories = Pcategory::all();
        $portfolios = Portfolio::all();
        $services = Service::orderBy('title','asc')->get();
        $product=Product::all();
        $products=Product::all();
        $featured_product=Product::all()->first();
        $categories = Category::all();
        $testi=Testimonial::all();


        return view ('front.home',compact('categories','about','featured_product','product','banner','products','general','link','lpost','partner','pcategories','portfolios','services','testi'));
//        return response()->json([
//            'status' => 'sucssess' ,
//            'statusCode' => '200' ,
//            'error' => null ,
//            'data'=>   compact('about','banner','general','link','lpost','partner','pcategories','portfolio','service')  ,] , 200);
    }

    public function about()
    {
        $about = About::find(1);
        $faq = Faq::all();
        $general = General::find(1);
        $link = Link::orderBy('name','asc')->get();
        $lpost = Post::where('status','=','PUBLISH')->orderBy('id','desc')->limit(5)->get();
        $partner = Partner::orderBy('name','asc')->get();
        $team = Team::orderBy('id','asc')->get();

        $services = Service::orderBy('title','asc')->get();
        $banner =Banner::all();
        $portfolios = Portfolio::all();
        $product=Product::all();
        $categories = Category::all();
       return view ('front.about',compact('about','banner','portfolios','services','product','faq','general','link','lpost','partner','team','categories'));
//        return response()->json([
//            'status' => 'sucssess' ,
//            'statusCode' => '200' ,
//            'error' => null ,
//            'data'=>   compact('about','faq','general','link','lpost','partner','team')  ,] , 200);

    }

    public function contact()
    {
        $about = About::find(1);
        $faq = Faq::all();
        $general = General::find(1);
        $link = Link::orderBy('name','asc')->get();
        $lpost = Post::where('status','=','PUBLISH')->orderBy('id','desc')->limit(5)->get();
        $partner = Partner::orderBy('name','asc')->get();
        $team = Team::orderBy('id','asc')->get();
        $services = Service::orderBy('title','asc')->get();
        $banner =Banner::all();
        $portfolios = Portfolio::all();
        $product=Product::all();
        $categories = Category::all();
        return view ('front.contact',compact('about','banner','portfolios','services','product','faq','general','link','lpost','partner','team','categories'));
//        return response()->json([
//            'status' => 'sucssess' ,
//            'statusCode' => '200' ,
//            'error' => null ,
//            'data'=>   compact('about','faq','general','link','lpost','partner','team')  ,] , 200);

    }

    public function testi()
    {
        $general = General::find(1);
        $link = Link::orderBy('name','asc')->get();
        $lpost = Post::where('status','=','PUBLISH')->orderBy('id','desc')->limit(5)->get();
        $testi = Testimonial::orderBy('name','asc')->paginate(6);
        $categories = Category::all();
        return view ('front.testi',compact('general','link','lpost','testi'));
//        return response()->json([
//            'status' => 'sucssess' ,
//            'statusCode' => '200' ,
//            'error' => null ,
//            'data'=>   compact('general','link','lpost','testi')  ,] , 200);
    }
    public function service()
    {
        $about = About::find(1);
        $general = General::find(1);
        $link = Link::orderBy('name','asc')->get();
        $lpost = Post::where('status','=','PUBLISH')->orderBy('id','desc')->limit(5)->get();
        $services = Service::orderBy('title','asc')->get();
        $banner =Banner::all();
        $portfolios = Portfolio::all();
        $product=Product::all();
        $categories = Category::all();
        return view ('front.service',compact('about','general','link','lpost','services','banner','portfolios','product','categories'));
//        return response()->json([
//            'status' => 'sucssess' ,
//            'statusCode' => '200' ,
//            'error' => null ,
//            'data'=>   compact('general','link','lpost','service')  ,] , 200);
    }

    public function serviceshow($slug)
    {
        $about = About::find(1);
        $general = General::find(1);
        $link = Link::orderBy('name','asc')->get();
        $lpost = Post::where('status','=','PUBLISH')->orderBy('id','desc')->limit(5)->get();
        $service = Service::where('slug', $slug)->firstOrFail();
        $services = Service::orderBy('title','asc')->get();
        $banner =Banner::all();
        $portfolios = Portfolio::all();
        $product=Product::all();
        $categories = Category::all();
       return view ('front.serviceshow',compact('general','about','link','lpost','service','services','banner','product','portfolios','categories'));
//        return response()->json([
//            'status' => 'sucssess' ,
//            'statusCode' => '200' ,
//            'error' => null ,
//            'data'=>   compact('general','link','lpost','service')  ,] , 200);
    }

    public function product()
    {
        $about = About::find(1);
        $general = General::find(1);
        $link = Link::orderBy('name','asc')->get();
        $lpost = Post::where('status','=','PUBLISH')->orderBy('id','desc')->limit(5)->get();
        $services = Service::orderBy('title','asc')->get();
        $banner =Banner::all();
        $portfolios = Portfolio::all();
        $product=Product::all();
        $categories = Category::all();
        $products=Product::all();
//        dd($product);
        return view ('front.product',compact('products','about','general','link','lpost','services','banner','portfolios','product','categories'));
//        return response()->json([
//            'status' => 'sucssess' ,
//            'statusCode' => '200' ,
//            'error' => null ,
//            'data'=>   compact('general','link','lpost','service')  ,] , 200);
    }

    public function productshow($slug)
    {
        $about = About::find(1);
        $general = General::find(1);
        $link = Link::orderBy('name','asc')->get();
        $lpost = Post::where('status','=','PUBLISH')->orderBy('id','desc')->limit(5)->get();
        $prod = Product::where('name', $slug)->firstOrFail();
        $services = Service::orderBy('title','asc')->get();
        $banner =Banner::all();
        $portfolios = Portfolio::all();
        $product=Product::all();
        $categories = Category::all();
        return view ('front.productshow',compact('general','prod','about','link','lpost','services','banner','product','portfolios','categories'));
//        return response()->json([
//            'status' => 'sucssess' ,
//            'statusCode' => '200' ,
//            'error' => null ,
//            'data'=>   compact('general','link','lpost','service')  ,] , 200);
    }

    public function portfolio()
    {
        $general = General::find(1);
        $link = Link::orderBy('name','asc')->get();
        $lpost = Post::where('status','=','PUBLISH')->orderBy('id','desc')->limit(5)->get();
        $pcategories = Pcategory::all();
        $portfolio = Portfolio::all();
        $categories = Category::all();
        return view ('front.portfolio',compact('general','link','lpost','pcategories','portfolio','categories'));
//        return response()->json([
//            'status' => 'sucssess' ,
//            'statusCode' => '200' ,
//            'error' => null ,
//            'data'=>   compact('general','link','lpost','pcategories','portfolio')  ,] , 200);
    }

    public function portfolioshow($slug)
    {
        $general = General::find(1);
        $link = Link::orderBy('name','asc')->get();
        $lpost = Post::where('status','=','PUBLISH')->orderBy('id','desc')->limit(5)->get();
        $portfolio = Portfolio::where('slug', $slug)->firstOrFail();
//        dd($portfolio);

        $product=Product::all();
        $services = Service::orderBy('title','asc')->get();
        $portfolios = Portfolio::all();
        $about = About::find(1);
        $categories = Category::all();
        return view ('front.portfolioshow',compact('general','product','services','portfolios','about','link','lpost','portfolio','categories'));
//        return response()->json([
//            'status' => 'sucssess' ,
//            'statusCode' => '200' ,
//            'error' => null ,
//            'data'=>   compact('general','link','lpost','portfolio')  ,] , 200);
    }

    public function blog()
    {
        $categories = Category::all();

        $general = General::find(1);
        $link = Link::orderBy('name','asc')->get();
        $lpost = Post::where('status','=','PUBLISH')->orderBy('id','desc')->limit(5)->get();
        $posts = Post::where('status','=','PUBLISH')->orderBy('id','desc')->paginate(3);

        $recent = Post::orderBy('id','desc')->limit(5)->get();
        $tags = Tag::all();
//        dd($portfolio);

        $product=Product::all();
        $services = Service::orderBy('title','asc')->get();
        $portfolios = Portfolio::all();
        $about = About::find(1);

        return view ('front.blog',compact('categories','product','services','portfolios','about','general','link','lpost','posts','recent','tags'));
//        return response()->json([
//            'status' => 'sucssess' ,
//            'statusCode' => '200' ,
//            'error' => null ,
//            'data'=>   compact('categories','general','link','lpost','posts','recent','tags')  ,] , 200);

    }

    public function blogshow($slug)
    {
        $categories = Category::all();
        $general = General::find(1);
        $link = Link::orderBy('name','asc')->get();
        $lpost = Post::where('status','=','PUBLISH')->orderBy('id','desc')->limit(5)->get();
        $post = Post::where('slug', $slug)->firstOrFail();
        $old = $post->views;
        $new = $old + 1;
        $post->views = $new;
        $post->update();
        $recent = Post::orderBy('id','desc')->limit(5)->get();
        $tags = Tag::get();
        $product=Product::all();
        $services = Service::orderBy('title','asc')->get();
        $portfolios = Portfolio::all();
        $about = About::find(1);

        return view ('front.blogshow',compact('categories','about','portfolios','services','product','general','link','lpost','post','recent','tags'));
//        return response()->json([
//            'status' => 'sucssess' ,
//            'statusCode' => '200' ,
//            'error' => null ,
//            'data'=>   compact('categories','general','link','lpost','post','recent','tags')  ,] , 200);
    }

    public function category(Category $category)
    {
        $categories = Category::all();
        $general = General::find(1);
        $link = Link::orderBy('name','asc')->get();
        $lpost = Post::where('status','=','PUBLISH')->orderBy('id','desc')->limit(5)->get();
        $posts = $category->posts()->latest()->paginate(6);
        $recent = Post::orderBy('id','desc')->limit(5)->get();
        $tags = Tag::all();
        return view ('front.blog',compact('categories','general','link','lpost','posts','recent','tags'));
//        return response()->json([
//            'status' => 'sucssess' ,
//            'statusCode' => '200' ,
//            'error' => null ,
//            'data'=>   compact('categories','general','link','lpost','posts','recent','tags')  ,] , 200);
    }

    public function tag(Tag $tag)
    {
        $categories = Category::all();
        $general = General::find(1);
        $link = Link::orderBy('name','asc')->get();
        $lpost = Post::where('status','=','PUBLISH')->orderBy('id','desc')->limit(5)->get();
        $posts = $tag->posts()->latest()->paginate(12);
        $recent = Post::orderBy('id','desc')->limit(5)->get();
        $tags = Tag::all();
        return view ('front.blog',compact('categories','general','link','lpost','posts','recent','tags'));
//        return response()->json([
//            'status' => 'sucssess' ,
//            'statusCode' => '200' ,
//            'error' => null ,
//            'data'=>   compact('categories','general','link','lpost','posts','recent','tags')  ,] , 200);
    }

    public function search()
    {

        $query = request("query");

        $categories = Category::all();
        $general = General::find(1);
        $link = Link::orderBy('name','asc')->get();
        $lpost = Post::where('status','=','PUBLISH')->orderBy('id','desc')->limit(5)->get();
        $posts = Post::where("title","like","%$query%")->latest()->paginate(9);
        $recent = Post::orderBy('id','desc')->limit(5)->get();
        $tags = Tag::all();

        return view('front.blog',compact('categories','general','link','lpost','posts','query','recent','tags'));
//        return response()->json([
//            'status' => 'sucssess' ,
//            'statusCode' => '200' ,
//            'error' => null ,
//            'data'=>   compact('categories','general','link','lpost','posts','query','recent','tags')  ,] , 200);
    }

    public function page($slug)
    {
        $general = General::find(1);
        $link = Link::orderBy('name','asc')->get();
        $lpost = Post::where('status','=','PUBLISH')->orderBy('id','desc')->limit(5)->get();
        $page = Page::where('slug', $slug)->firstOrFail();
        return view('front.page',compact('general','link','lpost','page'));
//        return response()->json([
//            'status' => 'sucssess' ,
//            'statusCode' => '200' ,
//            'error' => null ,
//            'data'=>   compact('general','link','lpost','page')  ,] , 200);
    }

    public function subscribe(Request $request)
    {
        \Validator::make($request->all(), [
            "email" => "required|unique:subscribers,email",
        ])->validate();

        $subs = new Subscriber();
        $subs->email = $request->email;
        if ( $subs->save()) {

            return redirect()->route('homepage')->with('success', 'You have successfully subscribed');

        } else {

            return redirect()->back();

        }
    }

}
