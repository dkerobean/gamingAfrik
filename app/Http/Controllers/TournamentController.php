<?php

namespace App\Http\Controllers;

use App\Models\Tournament;
use Illuminate\Http\Request;
use Image;




class TournamentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $tournaments = Tournament::all();

        return view('admin.Tournaments.ViewTournament', compact('tournaments'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Tournaments.CreateTournaments');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      $request->validate([
        'name'=>'required', 'description'=>'required', 'game'=>'required',
        'rules'=>'required', 'slots'=>'required',
      ]);


        if($request->HasFile('image')){
        $image = $request->file('image');
        $filename = time().'.'.$image->getClientOriginalName();
        $location = public_path('Tournament/'.$filename);
        Image::make($image)->save($location);

      }


        $tourn = new Tournament;
        $tourn->image = $filename;
        $tourn->name = $request->name;
        $tourn->game = $request->game;
        $tourn->description = $request->name;
        $tourn->start_date = $request->start_date;
        $tourn->check_in = $request->check_in;
        $tourn->enrolled = $request->enrolled;
        $tourn->prize = $request->prize;
        $tourn->skill_level = $request->skill_level;
        $tourn->entry_fee = $request->entry_fee;
        $tourn->slots = $request->slots;
        $tourn->video_url = $request->video_url;
        $tourn->rules = $request->rules;
        $tourn->team_size = $request->team_size;
        $tourn->format = $request->format;
        $tourn->prize_claim = $request->prize_claim;
        $tourn->first = $request->first;
        $tourn->second = $request->second;
        $tourn->third = $request->third;

        $tourn->save();



      return redirect()->route('tournament.index')->with('success', 'Tournament Created!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tournament  $tournament
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tournaments = Tournament::Find($id);
        return view('admin.Tournaments.ShowTournament', compact('tournaments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tournament  $tournament
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $tournament = Tournament::find($id);

      return view('admin.Tournaments.UpdateTournaments', compact('tournament'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tournament  $tournament
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tournament $tournament)
    {


      $request->validate([
        'name'=>'required', 'description'=>'required', 'game'=>'required', 'image'=>'required',

      ]);

      $tournament->update($request->all());

      return redirect()->route('tournament.index')->with('success', 'Tournament Updated !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tournament  $tournament
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tournament $tournament)
    {
        $tournament->delete();

        return redirect()->route('tournament.index')->with('success', 'Deleted successfully');
    }
}
