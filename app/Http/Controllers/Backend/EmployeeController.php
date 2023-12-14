<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\EmployeeDataTable;
use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Employee;
use App\Traits\ImageUploadTrait;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    use ImageUploadTrait;
    /**
     * Display a listing of the resource.
     */
    public function index(EmployeeDataTable $dataTable)
    {
        return $dataTable->render('admin.employee.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $companies = Company::select('id', 'name')->get();
        return view('admin.employee.create', compact('companies'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => ['required'],
            'last_name'  => ['required'],
            'company'    => ['required'],
            'email'      => ['required', 'email'],
        ]);

        $employee = new Employee();
        $employee->first_name = $request->first_name;
        $employee->last_name  = $request->last_name;
        $employee->company_id = $request->company;
        $employee->email      = $request->email;
        $employee->phone      = $request->phone;
        $employee->save();

        toastr('Created Successfully!', 'success');
        return redirect()->route('admin.employee.index');
    }


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $companies = Company::select('id', 'name')->get();
        $employee  = Employee::findOrFail($id);
        return view('admin.employee.edit', compact('companies', 'employee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'first_name' => ['required'],
            'last_name'  => ['required'],
            'company'    => ['required'],
            'email'      => ['required', 'email'],
        ]);

        $employee = Employee::findOrfail($id);
        $employee->first_name = $request->first_name;
        $employee->last_name  = $request->last_name;
        $employee->company_id = $request->company;
        $employee->email      = $request->email;
        $employee->phone      = $request->phone;
        $employee->save();

        toastr('Updated Successfully!', 'success');
        return redirect()->route('admin.employee.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();

        return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
    }
}
