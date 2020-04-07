<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\Employee_infos;
use Illuminate\Support\Facades\DB;
use Intervention\Image\ImageServiceProvider;
use Auth;
use Carbon\Carbon;
use Validator;
use App\User;
use Session;


class Employee_infosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employee_infos = new Employee_infos();
        $employee_infos = Employee_infos::all();
        return view('admin.employee_infos.index')->with('employee_infos', $employee_infos);
    }
     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employee_infos = new Employee_infos(); 
        return view('admin.employee_infos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            // 'fname' => 'required',
            // 'email' => 'required',
            // 'uname' => 'required',
            // 'password' => 'required',
            // 'phone' => 'required',
            // 'position' => 'required',
            // 'salary' => 'required',
            // 'hired_date' => 'required',
            // 'profile_image' => 'required'
        ]);

       


        $employee_infos = new Employee_infos();
        $employee_infos -> fname = request()->input('fname');
        $employee_infos -> email = request()->input('email');
        $employee_infos -> uname = request()->input('uname');
        $employee_infos -> password = request()->input('password');
        $employee_infos -> phone = request()->input('phone');
        $employee_infos -> position = request()->input('position');
        $employee_infos -> salary = request()->input('salary');
        $employee_infos -> hired_date = Carbon::parse(request()->input('date'));
       
       if(request()->hasFile('profile_image')){
        $image = request()->file('profile_image');
        $extension = $image->getClientOriginalExtension();
        $filename = time() . '.' . $extension;
        $image ->move('images/clients/',$filename);
        $employee_infos->profile_image = ('images/clients/'.$filename);
        //    dd(request()->profile_image);

       
       }

       
        $employee_infos->save();

        return redirect()->route('employee_infos');
       
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
        $employee_info = Employee_infos::Find($id);
        return view('admin.employee_infos.edit')->with('employee_infos', $employee_info);

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
        $employee_infos = Employee_infos::Find($id);
        $employee_infos -> fname = request()->input('fname');
        $employee_infos -> email = request()->input('email');
        $employee_infos -> uname = request()->input('uname');
        $employee_infos -> password = request()->input('password');
        $employee_infos -> phone = request()->input('phone');
        $employee_infos -> position = request()->input('position');
        $employee_infos -> salary = request()->input('salary');
        $employee_infos -> hired_date = Carbon::parse(request()->input('date'));

        
        if(request()->hasFile('profile_image')){
            $image = request()->file('profile_image');
            $extension = $image->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $image ->move('images/employee/',$filename);
            $employee_infos->profile_image = ('images/employee/'.$filename);
            //    dd(request()->profile_image);
           }

        $employee_infos->save();


        return redirect()->route('employee_infos');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee_info = Employee_infos::Find($id);
        $employee_info->delete();
        return redirect()->back();
        
    }

    public function trashed(){
        $employee_info = Employee_infos::onlyTrashed()->get();
        // dd($employee_info);

        return view('admin.employee_infos.trashed')->with('employee_infos', $employee_info);

    }

    public function kill($id){
        $employee_info = Employee_infos::withTrashed()->where('id', $id)->first();
        $employee_info->forceDelete();
        return redirect()->back();

    }

    public function restore($id){
        $employee_info = Employee_infos::withTrashed()->where('id', $id)->first();
        $employee_info->restore();

        return view('admin.employee_infos.index');

    }

    
}
