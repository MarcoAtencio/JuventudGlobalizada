<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;
use DB;

class EmployeeMaintenanceController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request){
            $query = trim($request->get('searchText'));
            $employees = DB::table('employees')->where('name','LIKE','%'.$query.'%')
                ->paginate(5);
            return view('admin.Maintenance.Employee.index',[ "employees" => $employees, "searchText"=>$query]);
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Maintenance.Employee.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasFile('photo')){
            $file = $request->file('photo');
            $name = time().$request->lastName .'.png';
            $file->move(public_path().'/img/employees',$name);
        }
        $employee = new Employee();
        $employee->name = $request->name;
        $employee->lastName = $request->lastName;
        $employee->dni = $request->dni;
        $employee->email = $request->email;
        $employee->cellPhone = $request->cellPhone;
        $employee->photo = $name;
        $employee->save();

        return redirect()->route('employees.index');
    }

    /**
     * Display the specified resource.
     *
     * @param Employee $employee
     * @return void
     */
    public function show(Employee $employee)
    {

        return view('admin.Maintenance.Employee.show',[ 'emp'=> $employee]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Employee $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        return view('admin.Maintenance.Employee.edit',[ 'emp'=> $employee]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param Employee $employee
     * @return void
     */
    public function update(Request $request, Employee $employee)
    {
        $employee->update($request->all());
        return redirect()->route('employees.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Employee $employee
     * @return void
     * @throws \Exception
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()->route('employees.index');
    }
}
