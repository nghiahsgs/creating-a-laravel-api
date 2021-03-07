<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // return response()->json(
        //     [
        //         "data" => "index"
        //     ]
        //     );
        return Post::get();
        // return Post::orderBy('id','desc')->get();
        // return Post::orderBy('id','asc')->paginate(2);
        // return Post::paginate(2);


        // handle with data
        $listPosts = Post::get();
        // $listPosts2 = $listPosts->filter(function($item){
        //     return $item->id<3;
        // });
        // return $listPosts2;

        // $listPosts->each(function($item){
        //     $item->likes = 2*$item->likes;
        // });
        // return $listPosts;

        $listPosts2 = $listPosts->map(function($item){
            return $item->id;
        });
        return $listPosts2;

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $kq = $request->validate([
        //     'content'=>'required'
        // ]);
        // $request->validate([
        //     'content' => 'required'
        // ]);

        // // return $kq;
        // return response()->json(
        //     [
        //         "kq" => $kq
        //     ]
        //     );

        // c1
        // $instance = new Post(); 
        // foreach($request->all() as $key=>$value){
        //     $instance->$key = $value;
        // }
        // $instance->save();
        // return $instance;

        // c2
        // $instance = Post::create([
        //     'title' => $request->input('title'),
        //     'slug' => $request->input('slug'),
        //     'likes' => $request->input('likes'),
        //     'content' => $request->input('content')
        // ]);
        // return $instance;
        
        // c3: nagn cap cua cach 2: $request->all() tu dong tra ve array roi
        return Post::create($request->all());
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
        $instance = Post::findOrFail($id);
        return $instance;

        return Post::where('id',$id)->get(); 

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
        // c1
        // $instance = Post::findOrFail($id);
        // foreach($request->all() as $key=>$value){
        //     $instance->$key = $value;
        // }
        // $instance->save();
        // return $instance;
        
        // c2
        $post = Post::findOrFail($id);
        $post->update($request->all());
        return $post;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $instance = Post::findOrFail($id);
        $instance->delete();
        return $instance;     

    }
}