<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
use App\Models\donate;
use App\Models\surgery;
use App\Models\volu1;
use Illuminate\Support\Facades\Session;

class PostController extends Controller
{
    public function index(){
       // $posts=Post::paginate(10);
        //return PostResource::collection($posts);
        $posts = post::orderBy('created_at', 'DESC')->get();

        return view('index')->with('posts', $posts);
    }

    public function create1()
    {
        return view('orphan');
    }
    public function newdonate()
    {
        return view('dontate.newdonate');
    }

    public function store4(Request $request){

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
    $post = new post();
    $post['arabic'] = $request->input('arabic');
    $post['english'] = $request->input('english');
    $post['phone'] = $request->input('phone');

    $post['email'] = $request->input('email');
    $post['orphan_type'] = $request->input('orphan_type');
   


    $post->save();
    Session::flash('message', 'تم التطوع بنجاح');
    
    //return redirect('post/create1');
    
    return redirect('post/submit');

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
        // بتحط عند فانكشن الحفظ قبل مايعمل ريترن بتحط يلي تحت مع الرسالة يلي بدك ياها بعدين بتروح عالصفحة الاتش تي ام ال
        Session::flash('message', 'تم التطوع بنجاح');

        return redirect('post/submit');

        }

        public function contact()
    {
        return view('contact');
    }

    public function about()
    {
        return view('about');
    }
    public function store2(Request $request){
        $post = new surgery();
        
        $post['name'] = $request->input('name');
        $post['phone'] = $request->input('phone');

        $post['email'] = $request->input('email');

        $post['amount'] = $request->input('amount');


        $post->save();

        return redirect('post/submit');

        }
        public function store3(Request $request){
            $post = new volu1();
            $post['type'] = $request->input('type');
            $post['name'] = $request->input('name');
            $post['phone'] = $request->input('phone');




            $post->save();
            
            // بتحط عند فانكشن الحفظ قبل مايعمل ريترن بتحط يلي تحت مع الرسالة يلي بدك ياها بعدين بتروح عالصفحة الاتش تي ام ال
            Session::flash('message', 'تم التطوع بنجاح');
            return redirect('post/volu1');

            }
}
