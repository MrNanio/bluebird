<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminRequest;
use App\User;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   /* public function __construct()
    {
        $this->middleware('auth');
    }*/
    public function __construct()
    {
        $this->middleware('One');
    }

    public function index()
    {
        $pages = User::all()->sortByDesc('id')->where('id','!=', Auth::user()->id);
        return view('admin.index',compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
       //
    }

    /**
     * Store a newly created resource in storage.
     * @param AdminRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(AdminRequest $request)
    {
        User::create($request->all());
        return redirect()->route('admin.index');
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
        $pages = User::find($id);
        return view('admin.edit', compact('pages'));
    }

    /**
     * Update the specified resource in storage.
     * @param  AdminRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(AdminRequest $request, $id)
    {
        $pages = User::find($id);
        $pages->name = $request->get('name');
        $pages->email = $request->get('email');
        $pages->role_id = $request->get('role_id');
        $pages->save();
        return redirect()->action('AdminController@index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $pages = User::find($id);
        $pages->delete();
        return redirect()->action('AdminController@index');
    }
}
