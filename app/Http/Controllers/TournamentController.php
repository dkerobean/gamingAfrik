<?php

namespace App\Http\Controllers;

use App\Models\Tournament;
use Illuminate\Http\Request;

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
        'name'=>'required', 'description'=>'required', 'game'=>'required', 'image'=>'required',
        'rules'=>'required', 'slots'=>'required',
      ]);

      Tournament::create($request->all());

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
