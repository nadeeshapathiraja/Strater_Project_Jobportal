<?php

namespace App\Http\Controllers;

use App\account;
use Illuminate\Http\Request;

class AccountController extends Controller
{

    public function index()
    {
        $accounts = account::all();

        return view('accounts.index', compact('accounts'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'password' => 'required|confirmed|min:6',
        ]);

        $validator = Validator::make($request->all(), []);

        $validator->sometimes('email', 'unique:users,email', function ($input) {
            return $input->email !== Auth::user()->email;
        });

        $account = new account([
            'first_name' => $request->get('first_name'),
            'last_name' => $request->get('last_name'),
            'email' => $request->get('email'),
            'password' => $request->get('password'),

        ]);
        $account->save();
        return redirect('/accounts')->with('success', 'Account Create Successfuly');
    }


    public function create(Request $request)
    {
        return view('accounts.create');
    }


    public function show(account $account)
    {
        //
    }


    public function edit($account_id)
    {
        $account = account::find($account_id);
        return view('accounts.edit', compact('account'));
    }


    public function update(Request $request,$account_id)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'password' => 'required',//|min:6|confirmed
            // 'password_confirmation' => 'required|min:6'
        ]);

        $account = account::find($account_id);
        $account->first_name =  $request->get('first_name');
        $account->last_name = $request->get('last_name');
        $account->email = $request->get('email');
        $account->password = $request->get('password');

        $account->save();

        return redirect('/accounts')->with('success', 'Account Update Successfull!');
    }


    public function destroy($account_id)
    {
        $account = account::find($account_id);
        $account->delete();

        return redirect('/accounts')->with('success', 'Account Deleted!');
    }
}
