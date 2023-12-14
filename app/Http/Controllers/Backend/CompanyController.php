<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\CompanyDataTable;
use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Traits\ImageUploadTrait;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    use ImageUploadTrait;
    /**
     * Display a listing of the resource.
     */
    public function index(CompanyDataTable $dataTable)
    {
        return $dataTable->render('admin.company.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.company.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'    => ['required'],
            'email'   => ['required', 'email'],
            'logo'    => ['required', 'image', 'max:100'],
        ]);

        /** Handle the image upload */
        $imagePath = $this->uploadImage($request, 'logo', 'logo');

        $company = new Company();
        $company->name    = $request->name;
        $company->email   = $request->email;
        $company->logo    = $imagePath;
        $company->website = $request->website;
        $company->save();

        toastr('Created Successfully!', 'success');
        return redirect()->route('admin.company.index');
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
        $company = Company::findOrFail($id);
        return view('admin.company.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'    => ['required'],
            'email'   => ['required', 'email'],
            'logo'    => ['nullable', 'image', 'max:100'],
        ]);

        $company = Company::findOrFail($id);

        /** Handle the image Update */
        $imagePath     = $this->updateImage($request, 'logo', 'logo', $company->image);
        $company->logo = empty(!$imagePath) ? $imagePath : $company->logo;

        $company->name    = $request->name;
        $company->email   = $request->email;
        $company->website = $request->website;
        $company->save();

        toastr('Update Successfully!', 'success');
        return redirect()->route('admin.company.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $company = Company::findOrFail($id);
        $this->deleteImage($company->logo);
        $company->delete();

        return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
    }
}
