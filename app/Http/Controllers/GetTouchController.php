<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GetTouch;

class GetTouchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = GetTouch::get();
        return view('list_touch', compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add_touch');
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
            'title'=>'required',
            'icon'=>'required'
        ]);
        $data = $r->all();
        $icon = $r->file('icon');
        if ($icon) {
            $path = "assets/uploads/";
            $newIcon = date('YmdHIs').'.'.$icon->getClientOriginalExtension();
            $icon->move($path, $newIcon);
            $data['icon']=$newIcon;
        }
        $result = GetTouch::create($data);
        if ($result) {
            return redirect()->route('list_touch');
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
    public function GetTouchData()
    {
        $data = GetTouch::orderBy('id','desc')->get();
        return Response()->json([
            'stutas'=>'succes',
            'data'=>$data
        ]);
    }
}
