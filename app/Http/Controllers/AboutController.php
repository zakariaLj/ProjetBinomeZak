<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;

class AboutController extends Controller
{
    public function edit(){
        $about = About::find(1);

        if ($about != null) {
            return view('About.editAbout',compact('about'));
        } else {
            return view('About.editAbout');
        }
    }

    public function update(){
        $about = About::find(1);

        if ($about != null) {
            if (request('img') != null) {
                $about->imgAbout_path =request('img')->store('img');
                
            }
            $about->description_1 = request('description1');
            $about->Titre = request('titre');
            $about->description_2 = request('description2');
            $about->save();

            return redirect()->route('admin');
        } else {
            
            $about = new About();

            $about->description_1 = request('description1');
            $about->Titre = request('titre');
            $about->description_2 = request('description2');
            $about->imgAbout_path =request('img')->store('img');

            $about->save();

            return redirect()->route('admin');
        }
        
    }
}
