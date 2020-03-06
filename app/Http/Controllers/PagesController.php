<?php

namespace App\Http\Controllers;
use App\Http\Requests\PagesRequest;
use App\Pages;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $pages = Pages::all()->sortByDesc('id')->where('id_us','LIKE', Auth::user()->id);
        return view('pages.index',compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $use=Auth::user()->id;
        return view('pages.create', compact('use'));
    }

    /**
     * Store a newly created resource in storage.
     * @param PagesRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(PagesRequest $request)
    {
        Pages::create($request->all());
        return redirect()->route('pages.index');
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
      // @param  \App\Pages $page
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function edit($id)
    {
        $pages = Pages::find($id);
        return view('pages.edit', compact('pages'));
    }

    /**
     * Update the specified resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(PagesRequest $request, $id)
    {
        /*$request->validate([
            'title'=>'required',
            'id_us'=> 'required',
            'poziom' => 'required',
            'przedmiot' => 'required',
            'lokalizacja'=>'required',
            'tel'=> 'required',
            'Imie' => 'required',
            'content'=>'required'
           ]);*/

        $pages = Pages::find($id);
        $pages->title = $request->get('title');
        $pages->id_us = $request->get('id_us');
        $pages->poziom = $request->get('poziom');
        $pages->przedmiot = $request->get('przedmiot');
        $pages->lokalizacja = $request->get('lokalizacja');
        $pages->tel = $request->get('tel');
        $pages->Imie = $request->get('Imie');
        $pages->content = $request->get('content');
        $pages->save();
        return redirect()->action('PagesController@index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $pages = Pages::find($id);
        $pages->delete();
        return redirect()->action('PagesController@index');
    }
}
