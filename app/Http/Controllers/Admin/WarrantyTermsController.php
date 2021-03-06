<?php

namespace App\Http\Controllers\Admin;

use App\WarrantyTerm;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WarrantyTermsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $terms = WarrantyTerm::paginate(15);
        return view('admin.warranty.list', compact('terms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return $this->formView( new WarrantyTerm( ));
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
        $this->validate($request, [
            'name' => 'required',
            'code' => 'required|alpha_dash|unique:warranty_terms',
            'terms:en' => 'required',
            'terms:tc' => 'required',
        ]);

        $terms = WarrantyTerm::create( $request->all() );

        alert('Terms #' . $terms->id . 'Created');

        return redirect()->route('admin.warranties.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\WarrantyTerm  $warranty
     * @return \Illuminate\Http\Response
     */
    public function show(WarrantyTerm $warranty)
    {
        //
        return view('admin.warranty.show', compact('warranty'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\WarrantyTerm  $warranty
     * @return \Illuminate\Http\Response
     */
    public function edit(WarrantyTerm  $warranty)
    {
        //
        return $this->formView($warranty);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\WarrantyTerm  $warranty
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WarrantyTerm  $warranty)
    {
        $this->validate($request, [
            'terms:en' => 'required',
            'terms:tc' => 'required',
            'name' => 'required',
            'code' => 'required|alpha_dash|unique:warranty_terms,code,'.$warranty->id,
        ]);

        $warranty->update( $request->all() );

        alert('Terms #' . $warranty->id . ' Updated');

        return redirect()->route('admin.warranties.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\WarrantyTerm  $warranty
     * @return \Illuminate\Http\Response
     */
    public function destroy(WarrantyTerm  $warranty)
    {
        $warranty->delete();
        //
    }

    protected function formView(WarrantyTerm $term) {
        return view('admin.warranty.form', compact('term'));
    }
}
