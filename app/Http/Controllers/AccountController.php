<?php

namespace App\Http\Controllers;

use App\Account;
use Illuminate\Http\Request;



class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accounts = Account::all();
        return view('accounts.index', ['account' => $accounts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $accounts = Account::all();
        return view('accounts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $counts = rand(111111,999999);
        $account = new Account;
        $account->firstname = $request->firstname;
        $account->lastname = $request->lastname;
        $account->counts = $counts;
        $account->code = $request->code;
        $account->bill = 0;
        $account->img = 0;
        $account->save();
        return redirect()->home();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function show(Account $account)
    {

        return view('accounts.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function plus(Account $account)
    {
        
        return view('accounts.plus', ['account' => $account]);
    }
    public function minus(Account $account)
    {
        return view('accounts.minus', ['account' => $account]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Account $account)
    {

        // dd($request['plus']);
        if(isset($request['plus'])) {
            $account->bill += $request['plus'];
            $account->save();
            return redirect()->route('account.index');
        }
        if(isset($request['minus'])) {
            if($account->bill < $request['minus']) {
                return redirect()->route('account.index');
            }
            $account->bill -= $request['minus'];
            $account->save();
            return redirect()->route('account.index');
        }
       

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function destroy(Account $account)
    {
        $account->delete();
        return redirect()->route('account.index');
    }

}
