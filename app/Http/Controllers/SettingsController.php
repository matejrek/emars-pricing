<?php

namespace App\Http\Controllers;

use App\Models\Settings;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //check for settings and show them
        $settings = Settings::all()->first();
        return view('settings/edit', compact('settings'));
        //return $settings;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('settings/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $settings = new Settings();
        $settings->importtax = $request->importtax;
        $settings->localtax = $request->localtax;
        $settings->gatewayfee = $request->gatewayfee;
        $settings->gatewayfixed = $request->gatewayfixed;
 
        $settings->save();

        return redirect('/settings');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Settings  $settings
     * @return \Illuminate\Http\Response
     */
    public function show(Settings $settings)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Settings  $settings
     * @return \Illuminate\Http\Response
     */
    public function edit(Settings $settings)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Settings  $settings
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $settings = Settings::where('id',$id)->first();
        $settings->importtax = $request->importtax;
        $settings->localtax = $request->localtax;
        $settings->gatewayfee = $request->gatewayfee;
        $settings->gatewayfixed = $request->gatewayfixed;
 
        $settings->save();
        return redirect('/settings');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Settings  $settings
     * @return \Illuminate\Http\Response
     */
    public function destroy(Settings $settings)
    {
        //
    }
}
