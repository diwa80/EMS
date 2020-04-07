<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\Leave;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\User;



class ApplyleaveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $leaves = new Leave();
        $leaves = Leave::all();
        return view('admin.apply-leave.index')->with('leave', $leaves);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
        return view('admin.apply-leave.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $leaves = new Leave();
        $leaves -> leave_type = request()->input('leave_type');
        $leaves -> date_from = Carbon::parse(request()->input('date_from'));
        $leaves -> date_to =  Carbon::parse(request()->input('date_to'));
        $leaves -> days = request()->input('days');
        $leaves -> Reason = request()->input('Reason');
        // dd(request()->leaves);
        $leaves ->save();
        return redirect()->route('apply-leave');
       

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
        //
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
        //
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
