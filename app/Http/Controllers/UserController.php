<?php

namespace App\Http\Controllers;

use Hash;
use App\User;
use App\State;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   $states = State::with('city')->get();
        return view('user.create', compact('states'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User;
        $user->fill($request->all());
        $user->password = Hash::make($request->password);

        if ($user->save())

        return back()->withSuccess('usuário cadastrado com sucesso!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $states = State::get();
        return view('user.edit', compact('user', 'states'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user->fill($request->all());
        $user->password = Hash::make($request->password);

        if ($user->save())
            return back()->withSuccess('usuário atualizado com sucesso!');

        return back()->withError('erro ao atualizar usuário');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        if ($user->delete())
            return back()->withSuccess('usuário excluído com sucesso!');

        return back()->withError('erro ao excluir registro');
    }
}
