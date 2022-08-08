<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ActonBottom;

class ActionBottomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = ActonBottom::get();
        return view('list_action_bottom',compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add_action_bottom');
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
            'heading'=>'required',
            'description'=>'required',
            'icon'=>'required'
        ]);
        $data = $r->all();
        $icon = $r->file('icon');
        if($icon){
            $path = "assets/uploads/";
            $newIcon = date('YmdHis').'.'.$icon->getClientOriginalExtension();
            $icon->move($path, $newIcon);
            $data['icon']=$newIcon;
        }
        $result= ActonBottom::create($data);
        if ($result) {
            return redirect()->route('list_action_bottom');
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
    public function ActionBottomData()
    {
        $data = ActonBottom::orderBy('id','desc')->get();
        return Response()->json([
            'stutas'=>'succes',
            'data'=>$data
        ]);
    }
}
