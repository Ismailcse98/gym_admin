<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Blog;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = Blog::get();
        return view('list_blog', compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $list = Category::get();
        return view('add_blog',compact('list'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {
        $r->validate([
            'category_id'=>'required',
            'title'=>'required',
            'description'=>'required',
            'tags'=>'required',
            'user_id'=>'required',
            'image'=>'required'
        ]);
        $data = $r->all();
        $file = $r->file('image');
        if($file){
            $path = "assets/uploads/";
            $newFile = date('YmdHis').'.'.$file->getClientOriginalExtension();
            $file->move($path, $newFile);
            $data['image'] = $newFile;
        }
        $result = Blog::create($data);
        if($result){
            return redirect()->route('list_blog');
        }
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
    }
    //Api
    public function BlogData()
    {
        $data = Blog::orderBy('id','desc')->get();
        return Response()->json([
            'stutas'=>'succes',
            'data'=>$data
        ]);
    }
    public function BlogDetails($id)
    {
        $data = Blog::find($id);
        return Response()->json([
            'stutas'=>'succes',
            'data'=>$data
        ]);
    }

}
