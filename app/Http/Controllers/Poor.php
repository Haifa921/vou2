<?php
use App\Models\poor;
use App\Models\User;
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class Poor extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function create(){
        return view('dontate.newdonate');
    }
    public function index()
    {
        $posts = poor::where('approved', true)->orderBy('created_at', 'DESC')->get();
        // $posts = post::paginate(2);
        // ,compact('posts')
        return view('dontate.newdonate')->with('posts', $posts);
    }
    public function approve(poor $post)
    {
        $post->approved = true;
        $post->save();
        return redirect()->back();
    }
    public function postsTrashed()
    {
        $posts = poor::onlyTrashed()->where('user_id', Auth::id())->get();
        return view('posts.trashed')->with('posts', $posts);
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' =>  'required',
            'content' =>  'required',

            'phone' =>  'required',
            'address' =>  'required',

        ]);
        $post = poor::create([
            'user_id' =>  Auth::id(),
            'name' =>  $request->name,
            'content' =>   $request->content,
            'phone' =>  $request->phone,
            'address' =>  $request->address,
        ]);

        
        return redirect()->back();
       
    }
    /*
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                 
     $post = new poor();
       
        $post->phone = $request->phone;
       
        $post->name=$request->name;
       
        $post->content = $request->content;
        $post->address = $request->address;
        $post->user_id = Auth::id();
       
    
        $post->save();
        
        return redirect('dontate.newdonate');
        
    */

    public function destroy($id)
    {
        $post = poor::find($id);
        $post->delete($id);
        return redirect()->back();
    }
    public function admin()
    {
        return view('new')->with(
            'posts',
            poor::where('approved', false)->get()
        );
    }
}
