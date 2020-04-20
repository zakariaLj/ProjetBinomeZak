<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Team;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::all();
        return view('Team.index',compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $team = Team::all();
        if (count($team) < 4) {

            return view('Team.create',compact('team'));
        }
        
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $team = new Team();

        $team->Name = request('nom');
        $team->Imgteam_path = request('img')->store('img');
        $team->Descriptionteam = request('description');
        $team->url = request('lien');
        $team->save();

        return redirect()->route('Team.index');
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
        $team = Team::find($id);
        return view('Team.edit',compact('team'));
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
        $team = Team::find($id);
            if(request('img') !== null){
            Storage::delete($team->Imgteam_path);
            $team->Imgteam_path = request('img')->store('img');

            }
        $team->Name = request('nom');
        $team->Descriptionteam = request('description');
        $team->url = request('lien');
        
        $team->save();

        return redirect()->route('Team.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $team = Team::find($id);

        Storage::delete($team->Imgteam_path);

        $team->delete();

        return redirect()->back();
    }
}
