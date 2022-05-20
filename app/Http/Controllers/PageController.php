<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function servicios()
    {
        return view('servicios');
    }

    public function portafolio()
    {
        return view('serviciosp/portafolio');
    }

     public function monitoreo()
    {
        return view('serviciosp/monitoreo');
    }

    public function eventos()
    {
        return view('serviciosp/eventos');
    }

    public function reportes()
    {
        return view('serviciosp/reportes');
    }

    public function geocercas()
    {
        return view('serviciosp/geocercas');
    }

    public function planes()
    {
        return view('serviciosp/planes');
    }

    public function nosotros2()
    {
        return view('nosotrosp/nosotros2');
    }

    public function satelital()
    {
        return view('nosotrosp/satelital');
    }

    public function contacto()
    {
        return view('contacto');
    }

    public function medios()
    {
        return view('medios');
    }
    
    public function estadistica()
    {
        return view('estadistica');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
