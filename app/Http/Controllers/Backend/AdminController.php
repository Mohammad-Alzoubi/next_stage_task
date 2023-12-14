<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Employee;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $companies = Company::orderBy('id', 'DESC')->limit(5)->get();
        $employees = Employee::orderBy('id', 'DESC')->limit(5)->get();

        return view('admin.dashboard', compact('companies', 'employees'));
    }

    public function login()
    {
        return view('admin.auth.login');
    }
}
