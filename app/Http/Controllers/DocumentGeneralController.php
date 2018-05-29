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
        $category = document_general::get_category();

        $documents_general = document_general::where('category', '=', $category)
          ->orderby('title', 'asc')->get();

        return view('document_general.index', compact('documents_general', 'category'));
    }

    public function universal_index($category)
    {
      $documents_general = document_general::orderby('title', 'desc')->get();

      return view('document_general.index', compact('documents_general', 'category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = document_general::get_category();

        return view('document_general.create', compact('category'));
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
          'process' => 'required',
          'category' => 'required'
        ]);

        $document_general = new document_general();
        $document_general->user_id = Auth::user()->id;
        $document_general->title = $request->input('title');
        $document_general->purpose = $request->input('purpose');
        $document_general->process = $request->input('process');
        $document_general->troubleshooting = $request->input('troubleshooting');
        $document_general->category = $request->input('category');
        $document_general->save();

        return view('document_general.show', compact('document_general'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\document_general  $document_general
     * @return \Illuminate\Http\Response
     */
    public function show(document_general $document_general)
    {
        return view('document_general.show', compact('document_general'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\document_general  $document_general
     * @return \Illuminate\Http\Response
     */
    public function edit(document_general $document_general)
    {
        return view('document_general.edit', compact('document_general'));
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
      $this->validate(request(), [
        'title' => 'required',
        'purpose' => 'required',
        'process' => 'required',
        'category' => 'required'
      ]);

      $document_general->update($request->all());

      return view('document_general.show', compact('document_general'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\document_general  $document_general
     * @return \Illuminate\Http\Response
     */
    public function destroy(document_general $document_general)
    {
        $category = $document_general->category;

        if (Auth::check()) {
          $document_general->delete();
        }

        $documents_general = document_general::where('category', '=', $category)
          ->orderby('title', 'desc')->get();

        return view('document_general.index', compact('documents_general', 'category'));
    }
}
