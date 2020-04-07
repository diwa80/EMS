<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use Intervention\Image\ImageServiceProvider;
use Illuminate\Support\Facades\Hash;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = new User();
        return view('admin.user.index')->with('user', User::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'name' =>'required',
        //     'email' =>'required|email',
        //     'password' =>'required',
        //     'c-password' => 'required'
        // ]);
        // dd($request->all());

        $users = new User;
        $users -> name = request()->input('name');
        $users -> email = request()->input('email');
        $users-> password = Hash::make($request->password);
            
        $role = config('roles.models.role')::where('name', '=', 'User')->first();  //choose the default role upon user creation.
        $user->attachRole($role);
        
        if(request()->hasFile('avatar')){
            
            $image = request()->file('avatar');
            $extension = $image->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $image ->move('images/users/',$filename);
            $users->avatar = ('images/users/'.$filename);
            //    dd(request()->profile_image);
           }

        $users->save();


        return redirect()->route('users');
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

        $user = User::Find($id);
        return view('admin.user.edit')->with('users', $user);

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
        $users = User::Find($id);
        $users -> name = request()->input('name');
        $users -> email = request()->input('email');
        $users-> password = Hash::make($request->password);
        

        if(request()->hasFile('avatar')){
           
            $image = request()->file('avatar');
            $extension = $image->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $image ->move('images/users/',$filename);
            $users->avatar = ('images/users/'.$filename);
            //    dd(request()->profile_image);
           }

        $users->update();


        return redirect()->route('users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users = User::Find($id);
        $users->delete();
        return redirect()->back();
    }
}
