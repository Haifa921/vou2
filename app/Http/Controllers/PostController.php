<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
use App\Models\donate;
class PostController extends Controller
{
    public function index(){
       // $posts=Post::paginate(10);
        //return PostResource::collection($posts);
        $posts = post::orderBy('created_at', 'DESC')->get();
      
        return view('index')->with('posts', $posts);
    }
     
    public function create()
    {
        return view('orphan');
    }

    public function store(Request $request){
      
     /* $this->validate($request, [
      'arabic' => 'required',
      'english' =>'required',
      'phone' =>'required',
      'email' =>'required',
      'orphan_type' =>'required',
      'amount' => 'required',
      'branch' => 'required'  ]);

      $post = post::create([
        
        'arabic' =>  $request->arabic,
        'english' =>   $request->english,
        'phone' =>   $request->phone,
        'email' =>   $request->email,
        'orphan_type' =>   $request->orphan_type,
        'amount' =>   $request->amount,
        'branch' =>   $request->branch,
       
        
    ]); */
    $post = new Post();
    $post['arabic'] = $request->input('arabic');
    $post['english'] = $request->input('english');
    $post['phone'] = $request->input('phone');
   
    $post['email'] = $request->input('email');
    $post['orphan_type'] = $request->input('orphan_type');
    $post['amount'] = $request->input('amount');
    $post['branch'] = $request->input('branch');
    $post['id_num'] = $request->input('id_num');
    $post['date'] = $request->input('date');

    $post->save();
    
    return redirect('posts');
    
    }
    public function donate()
    {
        return view('dontate.donate');
    }
    public function store1(Request $request){
        $post = new donate();
        $post['type'] = $request->input('type');
        $post['name'] = $request->input('name');
        $post['phone'] = $request->input('phone');
       
        $post['email'] = $request->input('email');
       
        $post['amount'] = $request->input('amount');
        
    
        $post->save();
        
        return redirect('donates');
        
        }
}
