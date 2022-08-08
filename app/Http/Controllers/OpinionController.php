<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Opinion;

class OpinionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = Opinion::get();
        return view('list_opinion',compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add_opinion');
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
            'name'=>'required',
            'comments'=>'required',
            'heading'=>'required',
            'image'=>'required',
        ]);
        $data = $r->all();
        $file = $r->file('image');
        if($file){
            $path = "assets/uploads/";
            $newFile = date('YmdHis').'.'.$file->getClientOriginalExtension();
            $file->move($path, $newFile);
            $data['image']= $newFile;
        }
        $result = Opinion::create($data);
        if($result){
            return redirect()->route('list_opinion');
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
    public function OpinionData()
    {
        $data = Opinion::orderBy('id','desc')->get();
        return Response()->json([
            'stutas'=>'succes',
            'data'=>$data
        ]);
    }
}
