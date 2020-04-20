<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subscribe;

class SubscribeController extends Controller
{

    public function index(){
        
        $subscribe = Subscribe::find(1);
        return view('subscribe.indexSubscribe',compact('subscribe'));
    }



    public function edit(){
        $subscribe = Subscribe::find(1);
        if ($subscribe != null) {
            return view('subscribe.editSubscribe', compact('subscribe')); 
        } else {
            return view('subscribe.indexSubscribe');
        }
    }
    
    public function update(){
        $subscribe = Subscribe::find(1);
        if ($subscribe != null) {
            $subscribe->link = request('lien');
            $subscribe->save();
            return redirect()->route('admin');
        }else{
            $subscribe = new Subscribe();
            $subscribe->link = request('lien');
            $subscribe->save();
            return redirect()->route('admin');
        

        }
    }

}
