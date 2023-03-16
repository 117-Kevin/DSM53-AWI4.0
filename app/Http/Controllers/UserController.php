<?php

namespace App\Http\Controllers;

Use App\Models\user;
use App\Models\typeuser;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        //Definimos nuestra vista
        $users = user::all();
        return view('user.index', compact('users'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $typeusers = typeuser::all('id','name');
        // $users = user::all();$users = user::all();
        return view('user.add', compact('typeusers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input=$request->all();
        user::create($input);
        return redirect('user')->with('message','Se ha creado correctamente al estudiante');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users = user::find($id);
        return view('user.show')->with('users',$users);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $typeusers = typeuser::all('id','name');
        $users = user::find($id);
        return view('user.edit',compact('typeusers'))->with('users', $users);
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
        $users = user::findOrFail($id);
        $input=$request->all();
        $users->update($input);
        return redirect('user')->with('message','Se ha actualizado el registro correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users = user::findOrFail($id);
        $users->delete();
        return redirect('user')->with('danger','correctamente el estudiante');
    }

    
}