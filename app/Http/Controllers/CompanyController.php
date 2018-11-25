<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Http\Requests\CompanyFormRequest;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::all();

        return view('companies.index', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('companies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\CompanyFormRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(CompanyFormRequest $request)
    {
        $validatedInput = $request->validated();
        Company::create($validatedInput);

        return redirect()->route('companies.index')->withSuccess('Company created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        $company = Company::find($company->id); // Retrieve in database the Company related to the specified id
        return view('companies.show', compact('company'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        $companyUpdate = Company::find($company->id);
        return view('companies.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(CompanyFormRequest $request, Company $company)
    {
        // Retrieve validated input data ...
        $validatedInput = $request->validated();

        $company->update($validated);
        return redirect()->route('companies.show', $company)->withSuccess('Company updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        if ($company->delete()) {
            return redirect()->route('companies.index')->withSuccess('Company deleted successfully');
        }
        return back()->withInput()->withError('Company could not be deleted');
        
    }
}
