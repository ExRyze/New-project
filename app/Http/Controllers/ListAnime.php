<?php

namespace App\Http\Controllers;

use App\Models\animes;
use Illuminate\Http\Request;

class ListAnime extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('list', [
        'listAnime' => animes::all()
        ]);
        // dd(animes::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\animes  $animes
     * @return \Illuminate\Http\Response
     */
    public function show(animes $animes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\animes  $animes
     * @return \Illuminate\Http\Response
     */
    public function edit(animes $animes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\animes  $animes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, animes $animes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\animes  $animes
     * @return \Illuminate\Http\Response
     */
    public function destroy(animes $animes)
    {
        //
    }
}
