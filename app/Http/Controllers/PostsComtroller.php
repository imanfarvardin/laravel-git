<?php

namespace App\Http\Controllers;

use App\Events\PostViewEvent;
use App\Http\Requests\CreatePostRequest;
use App\post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsComtroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // //    public function index($id = null)

//        $posts = post::all();
        $posts = post::with('user')->get();
         return view('posts.index',compact(['posts']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePostRequest $request)
    {
        $post = new post();

        if ($file = $request->file('file')){
//            $name = $file->getClientOriginalName();
            $file->store('public/images');
//            $file->move('images',$name);
//        $post->path=$name;
        }



//        $this->validate($request,[
//            'title' => 'bail|required|max:2',
//            'description' => 'required'
//            ],[
//                'title.required' => 'لطفا عنوان مطلب مورد نظر خود را انتخاب کنید ',
//                'title.max' => ' تعداد کاراکترهای عنوان شما باید بیش از 2 کاراکتر باشد  ',
//                'description.required' => ' لطفا توضیحات مطلب مورد نظر خود را وارد کنید  ',
//
//        ]);



//        return $request->all();
//        return $request->input('title');

        $post->title = $request->title;
        $post->content = $request->description;
        $post->user_id = 1 ;
        $post->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $post = post::findOrfail($id);
        event(new PostViewEvent($post));
        return view('posts.show',compact(['post']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {  //
        $post = post::findOrfail($id);

        $user = Auth::user();
        if ($user->can('update',$post)){
            return view('posts.edit',compact(['post']));
        }else{
            return "شما اجازه ویرایش این مطلب را ندارید ";
        }

//        if (Gate::allows('edit-post',$post)){
//            return view('posts.edit',compact(['post']));
//        }else{
//            return "شما اجازه ویرایش این مطلب را ندارید ";
//        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = post::findOrFail($id);
        $post->title = $request->title;
        $post->content = $request->description;
        $post->save();

        return redirect('posts');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //


        $post = post::findOrFail($id);
        $post->delete();
        return redirect('posts');

    }

//
//    public function ShowMyView($id,$name ,$password ){
////        return view('pages.MyView')->with('id', $id);
//    return view('pages.MyView',compact(['id','name','password']));
//    }
//
//    public function contact()
//    {
//        $people = [' مسعود ','مروارید ','ایمان ','فروردین ','علی','میاد'];
//        return view('pages.contact',compact('people'));
//    }
//
//    public function insert()
//    {
//        DB::insert('insert into posts(title,content) value (?,?)',['insert پست ','این پست با استفاده از متد insert درج شده اسنت ']);
//    }
//
//    public function select()
//    {
//        $allPosts = DB::select('select * from posts');
//        return $allPosts;
//
//    }
//
//    public function updatePost ()
//    {
//       $updatedPost = DB::update('update posts set title="این عنوان بروز رسانی شده است "where id=?', [2]);
//       return $updatedPost;
//    }
//
//    public function deletePost()
//    {
//        $deletedPost = DB::delete('delete from posts where id=?',[3]);
//        return $deletedPost;
//    }
//
//    public function getAllPosts()
//    {
////        $post = post::where('title','insert پست ')->orderby('id','desc')->get();
////        return $post;
////        $post = post::findOrFail(100);
//          $post = post::all();
//
//        return $post;
//    }
//
//    public function savePost()
//    {
//        // ک مدل ازش ساختیم
////        $post = new post();
////        $post->title = 'پست شماره 1';
////        $post->content = 'این هم یک توضیح تست برای این اکانت می باشد';
////        $post->save();
////
//        $post = post::create(['title'=>'پست شماره 2','content'=>'این هم یک توضیح جدید']);
//    }
//
//    public function newUpdatePost()
//    {
////        $post = post::where('id',10)->update(['title'=>'updated post','content'=>'update content to you']);
//        $post = post::findorfail(8);
//        $post->title = 'یک پست جدید';
//        $post->content = 'یک متن جدید';
//        $post->save();
//        return $post;
//    }
//
//    public function newDeletePost()
//    {
//        $post = post::where('id',5)->delete();
//
//
////        $post = post::destroy(7); حذف تکی پست
////        $post = post::destroy([7,6]);//حذف چند تایی
//
//    }
//
//    public function workWithTrash()
//    {
//        $post = post::onlyTrashed()->get();
//        return $post;
//    }
//
//    public function restorePost()
//    {
//    $post = post::onlyTrashed()->where ('id',5)->restore();
//    }
//
//    public function forceDelete()
//    {
//        $post = post::onlyTrashed()->where('id',5)->forceDelete();
//    }

}
