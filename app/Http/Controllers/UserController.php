<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    { 
        $users = DB::table('user')->get();
        return view ('users.index')->with('users', $users);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('users.add'); 
    }

    /**
     * Store a newly created resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('user')->insert([
        'firstName'=>$request->firstName,
        'lastName'=>$request->lastName,
        'email'=>$request->email,
        'pswd'=>$request->pswd,
        ]);
        return redirect('user')->with('flash_message', 'client Addedd!');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $usr = DB::table('user')->find($id);
        return view('users.edit')->with('usr', $usr);
    }
    /**
     * Update the specified resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        // DB::table('user')->where('id',$id)
        // ->update([
        // 'firstName'=>$request->firstName,
        // 'lastName'=>$request->lastName,
        // 'email'=>$request->email,
        // 'pswd'=>$request->psw
        // ]);
        // return redirect('user')->with('flash_message', 'client Updated!');
        DB::table('user')
        ->where('id',$id)
        ->update([
        'firstName'=>$request->firstName,
        'lastName'=>$request->lastName,
        'email'=>$request->email,
        'pswd'=>$request->pswd,
        ]);
        return redirect('user')->with('flash_message', 'client Updated!');
    }

    /**
     * Remove the specified resource from storage.
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('user')->where('id',$id)->delete();
        return redirect('user')->with('flash_message', 'client deleted!');
    }

}