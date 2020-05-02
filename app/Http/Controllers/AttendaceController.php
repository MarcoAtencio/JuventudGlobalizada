<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AttendanceWorkersRequest;

use App\Attendace;
use App\Employee;
use Carbon\Carbon;

class AttendaceController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (auth()->user()){
            if(auth()->user()->hasRole('Admin')){
                return redirect()->route('admin');
            }
        }

        return view('attendance.index');
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
     * @param  \App\Http\Requests\AttendanceWorkersRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(AttendanceWorkersRequest $request)
    {

        $emp = Employee::where('dni', $request->dni)->first();
        if(empty($emp)){
            return view('attendance.index');
        }
        else{

            $now = Carbon::now();
            $attend = Attendace::where([
                ['date',$now->toDateString()],
                ['employee',$request->dni]
            ])->first();

            if(empty($attend) ){
                $attendance= new Attendace;
                $attendance->employee = $request->dni;
                $attendance->date = $now->toDateString();
                $attendance->entry = $now->format('H:i:s');
                $attendance->exit = null;
                $attendance->save();
            }

            else{
                $attend->exit = $now->format('H:i:s');
                $attend->save();
            }

            $emp = Employee::
            join('attendaces', 'employees.dni', '=', 'attendaces.employee')
                ->select('attendaces.employee','employees.name', 'employees.lastName', 'attendaces.entry', 'attendaces.exit','employees.photo')
                ->where('employees.dni', '=', $request->dni)
                ->first();

            return view('attendance.show',["employee" => $emp]);
        }
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
