<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ActonTop;
class ActionTopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = ActonTop::get();
        return view('list_action_top', compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('add_action_top');
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
            'icon'=>'required',
            'image'=>'required'
        ]);
        $data = $r->all();
        $icon = $r->file('icon');
        $file = $r->file('image');
        if($icon){
            $path = "assets/uploads/";
            $newIcon = Date('YmHis').'.'.$icon->getClientOriginalExtension();
            $icon->move($path,$newIcon);
            $data['icon']=$newIcon;
        }
        if($file){
            $path = "assets/uploads/";
            $newFile = Date('YmdHis').'.'.$file->getClientOriginalExtension();
            $file->move($path,$newFile);
            $data['image']=$newFile;
        }
        $result = ActonTop::create($data);
        if($result){
            return redirect()->route('list_action_top');
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
    public function ActionTopData()
    {
        $data = ActonTop::orderBy('id','desc')->get();
        return Response()->json([
            'stutas'=>'succes',
            'data'=>$data
        ]);
    }
}
