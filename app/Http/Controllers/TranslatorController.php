<?php

namespace App\Http\Controllers;

use App\Models\Translator;
use Illuminate\Http\Request;

class TranslatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $translators = Translator::all();
        return view('translator.index', ['translators' => $translators]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('translator.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $translator = new Translator;
        $translator->name = $request->translator_name;
        $translator->surname = $request->translator_surname;
        $translator->save();
        return redirect()->route('translator.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Translator  $translator
     * @return \Illuminate\Http\Response
     */
    public function show(Translator $translator)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Translator  $translator
     * @return \Illuminate\Http\Response
     */
    public function edit(Translator $translator)
    {
        return view('translator.edit', ['translator' => $translator]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Translator  $translator
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Translator $translator)
    {
        $translator->name = $request->translator_name;
        $translator->surname = $request->translator_surname;
        $translator->save();
        return redirect()->route('translator.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Translator  $translator
     * @return \Illuminate\Http\Response
     */
    public function destroy(Translator $translator)
    {
        $translator->delete();
        return redirect()->route('translator.index');

    }
}
