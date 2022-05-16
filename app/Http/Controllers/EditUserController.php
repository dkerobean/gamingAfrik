<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Image;
use Illuminate\Support\Facades\Auth;

class EditUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
        return view('editUser', compact('user'));
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
      $user = User::find($id);

      $request->validate([
        'profile_image'=>'',
        'username'=>'',
        'name'=>'',


      ]);

    if ($request->hasFile('profile_image')) {

        $image = $request->file('profile_image');
        $filename = time() . '.' . $image->getClientOriginalExtension();
        $location = public_path('UserProfile/'. $filename);
        Image::make($image)->resize(800 , 400)->save($location);

    }



    $user->profile_image = $filename;
    $user->name = $request->name;
    $user->username = $request->username;

    $user->save();


    return view('profile')->with('success','User Updated !');

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
