<?php

namespace App\Http\Controllers\Admin;

use App\MainTitle;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class MainTitleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $title = new MainTitle();

        $title['title1'] = $request->title1;
        $title['title2'] = $request->title2;
        $title['title3'] = $request->title3;
        $title['title4'] = $request->title4;

        session()->flash('success','Başlıklar Eklendi');
        $title->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MainTitle  $mainTitle
     * @return \Illuminate\Http\Response
     */
    public function show(MainTitle $mainTitle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MainTitle  $mainTitle
     * @return \Illuminate\Http\Response
     */
    public function edit(MainTitle $mainTitle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MainTitle  $mainTitle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $titleFirst = MainTitle::first();

        $titleFirst['title1'] = $request->title1;
        $titleFirst['title2'] = $request->title2;
        $titleFirst['title3'] = $request->title3;
        $titleFirst['title4'] = $request->title4;


        $titleFirst->update();
        session()->flash('success','Başlık Güncellendi');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MainTitle  $mainTitle
     * @return \Illuminate\Http\Response
     */
    public function destroy(MainTitle $mainTitle)
    {
        //
    }
}
