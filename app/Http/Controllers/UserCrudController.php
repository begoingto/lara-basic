<?php
namespace App\Http\Controllers;

use App\Models\UserCrud;
use Illuminate\Http\Request;

class UserCrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = UserCrud::paginate(10);
        return view('users.user-list', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.user-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = UserCrud::create($request->all());
        return to_route('users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserCrud  $userCrud
     * @return \Illuminate\Http\Response
     */
    public function show(UserCrud $userCrud)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserCrud  $userCrud
     * @return \Illuminate\Http\Response
     */
    public function edit(UserCrud $userCrud)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserCrud  $userCrud
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserCrud $userCrud)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserCrud  $userCrud
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserCrud $userCrud)
    {
        //
    }
}
