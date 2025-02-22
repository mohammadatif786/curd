<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    function index()
    {
        $users = User::get();

        return view('welcome',compact('users'));
    }
    function store(Request $request)
    {
        User::create($request->all());

        return redirect()->back();
    }
    function edit($id)
    {
        $user = User::findOrfail($id);

        return view('edit',compact('user'));
    }

    function update(Request $request, $id)
    {
        User::updateOrCreate(['id' => $id], $request->all());

        return redirect()->route('/');
    }

    function delete($id)
    {
        User::find($id)->delete();
        
        return redirect()->route('/');
    }
}
