<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Image;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

        return view('Admin.Users.ViewUsers', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $user = User::find($id);
        return view('Admin.Users.EditUser',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {

        // $user = User::find($id);

        $request->validate([
          'is_verified'=>'required',
          'gold_trophy'=>'required',
          'wins'=>'required',
          'silver_trophy'=>'required',
          'bronze_trophy'=>'required',
          'elite_trophy'=>'required',
          'Earnings'=>'required',
        ]);

      // $user->is_verified = $request->is_verified;
      // $user->gold_trophy = $request->gold_trophy;
      // $user->bronze_trophy = $request->bronze_trophy;
      // $user->silver_trophy = $request->silver_trophy;
      // $user->elite_trophy = $request->elite_trophy;
      // $user->Earnings = $request->Earnings;
      // $user->wins = $request->wins;
      //
      //
      //
      //
      // //SAVE IMAGE
      // if ($request->hasFile('profile_image')) {
      //
      //     $image = $request->file('profile_image');
      //     $filename = time() . '.' . $image->getClientOriginalExtension();
      //     $location = public_path('UserProfile/'. $filename);
      //     Image::make($image)->resize(800 , 400)->save($location);
      //
      //
      //     $user->image = $filename;
      // }
      //
      // $user->save();

      $user->update($request->all());


      return redirect()->back()->with('success','User Updated !');


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
}
