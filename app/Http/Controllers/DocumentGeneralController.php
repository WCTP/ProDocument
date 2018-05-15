<?php

namespace App\Http\Controllers;

use App\document_general;
use Illuminate\Http\Request;
use Auth;

class DocumentGeneralController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $documents_general = document_general::orderby('title', 'desc')->get();

        return view('document_general.index', compact('documents_general'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('document_general.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
          'title' => 'required',
          'purpose' => 'required',
          'process' => 'required'
        ]);

        $general_document = new document_general();
        $general_document->user_id = Auth::user()->id;
        $general_document->title = $request->input('title');
        $general_document->purpose = $request->input('purpose');
        $general_document->process = $request->input('process');
        $general_document->troubleshooting = $request->input('troubleshooting');
        $general_document->save();

        return redirect('/document_general/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\document_general  $document_general
     * @return \Illuminate\Http\Response
     */
    public function show(document_general $document_general)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\document_general  $document_general
     * @return \Illuminate\Http\Response
     */
    public function edit(document_general $document_general)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\document_general  $document_general
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, document_general $document_general)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\document_general  $document_general
     * @return \Illuminate\Http\Response
     */
    public function destroy(document_general $document_general)
    {
        //
    }
}
