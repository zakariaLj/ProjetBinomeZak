<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Header;

class HeaderController extends Controller
{

    public function index(){
        $header = Header::find(1);
        return view('header.index', compact('header'));
    }



    public function edit(){
        $header = Header::find(1);

        if($header != null){
            return view('header.editHeader',compact('header'));
        }else{
            return view('header.editHeader');
            
        }

    }

    public function update(){
        
        $header = Header::find(1);

        if($header != null){  // si il existe deja recurer et modifier
            if(request('img') != null){
                $header->imgHeader_path =request('img')->store('img');

            }
            if (request('imgFond') != null) {
                $header->FondImg_path =request('imgFond')->store('img');
                
            }            
                    $header->Titre = request('titre');
                    $header->HeaderDescription = request('description');

                    $header->save();
                    return redirect()->route('admin');
        }else{      // Dans ce cas il n'existe pas on va devoir avoir besoin d'un new header
                        $header = new Header();


                        $header->FondImg_path =request('imgFond')->store('img');
                        $header->imgHeader_path =request('img')->store('img');
                        $header->Titre = request('titre');
                        $header->HeaderDescription = request('description');

                        $header->save();
                        return redirect()->route('admin');
        }




    }
}
