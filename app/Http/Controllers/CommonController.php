<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\General;
use App\Models\About;
use App\Models\Membership;
use App\Models\Push;
use App\Models\Contact;

class CommonController extends Controller
{
    public function General()
    {
        $data = General::first();
        return view('general',compact('data'));
    }
    public function GeneralUpdate(Request $r, $id)
    {
        $r->validate([
            'email'=>'required',
            'phone'=>'required',
            'location'=>'required',
            'description'=>'required',
            'facebook'=>'required',
            'twitter'=>'required',
            'instagram'=>'required',
            'copyright'=>'required'
        ]);

        $data = General::find($id);
        $file = $r->file('logo');
        if(empty($file)){
            $data->email = $r->email;
            $data->phone = $r->phone;
            $data->location = $r->location;
            $data->description = $r->description;
            $data->facebook = $r->facebook;
            $data->twitter = $r->twitter;
            $data->instagram = $r->instagram;
            $data->copyright = $r->copyright;
            $data->update();
            return redirect()->back();
        }else{
            $path = "assets/uploads/";
            $fileName ='logo.'.$file->getClientOriginalExtension();
            $file->move($path, $fileName);

            $data->email = $r->email;
            $data->phone = $r->phone;
            $data->location = $r->location;
            $data->description = $r->description;
            $data->facebook = $r->facebook;
            $data->twitter = $r->twitter;
            $data->instagram = $r->instagram;
            $data->copyright = $r->copyright;
            $data->logo = $fileName;
            $data->update();
            return redirect()->back();
        }
    }

    public function add_about()
    {
        $data = About::first();
        return view('add_about',compact('data'));
    }
    public function update_about(Request $r, $id)
    {
        $data = About::find($id);
        $file = $r->file('image');
        if (empty($file)) {
            $data->title = $r->title;
            $data->description = $r->description;
            $data->update();
            return redirect()->route('add_about');
        }else{
            $path = "assets/uploads/";
            $newFile = 'about.'.$file->getClientOriginalExtension();
            $file->move($path, $newFile);
            $data->title = $r->title;
            $data->description = $r->description;
            $data->image= $newFile;
            $data->update();
            return redirect()->route('add_about');
        }

    }

    public function Add_membership()
    {
        $data = Membership::first();
        return view('add_membership', compact('data'));
    }
    public function Update_membership(Request $r, $id)
    {
        $r->validate([
            'short_title'=>'required',
            'long_title'=>'required',
            'description'=>'required'
        ]);
        $data = Membership::find($id);
        $data->short_title=$r->short_title;
        $data->long_title=$r->long_title;
        $data->description=$r->description;
        $result = $data->update();
        if ($result) {
            return redirect()->route('add_membership');
        }
    }

    public function Add_push()
    {
        $data = Push::first();
        return view('add_push',compact('data'));
    }
    public function Update_push(Request $r,$id)
    {
        $r->validate([
            'title_top'=>'required',
            'title_bottom'=>'required',
            'description'=>'required'
        ]);
        $data = Push::find($id);
        $file = $r->file('image');
        if(empty($file)) {
            $data->title_top = $r->title_top;
            $data->title_bottom = $r->title_bottom;
            $data->description = $r->description;
            $data->update();
            return redirect()->route('add_push');
        }else{
            $path = "assets/uploads/";
            $newFile = "push-bg.".$file->getClientOriginalExtension();
            $file->move($path, $newFile);
            $data->title_top = $r->title_top;
            $data->title_bottom = $r->title_bottom;
            $data->description = $r->description;
            $data->image = $newFile;
            $data->update();
            return redirect()->route('add_push');
        }
    }
//Contact
    public function Message()
    {
        $list = Contact::get();
        return view('list_message',compact('list'));
    }

    public function StoreMessage(Request $r)
    {
        $data = [];
        $data['name'] = $r->name; 
        $data['email'] = $r->email;
        $data['message'] = $r->message;
        $result = Contact::create($data);
        if($result){
            return response()->json(['message'=>'Data inserted Successfully']);
        }
    }

    //Api

    public function Aboutdata()
    {
        $data = About::first();
        return Response()->json([
            'stutas'=>'succes',
            'data'=>$data
        ]);
    }
     public function Generaldata()
    {
        $data = General::first();
        return Response()->json([
            'stutas'=>'succes',
            'data'=>$data
        ]);
    }
     public function Membershipdata()
    {
        $data = Membership::first();
        return Response()->json([
            'stutas'=>'succes',
            'data'=>$data
        ]);
    }
     public function Pushdata()
    {
        $data = Push::first();
        return Response()->json([
            'stutas'=>'succes',
            'data'=>$data
        ]);
    }
}
