<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{

    public function index()
    {
        $uniqueNames = DB::table('users')->select('name')->distinct()->get();
        return $uniqueNames;

    }


    public function WhereNot()
    {
        $users = DB::table('users')
                ->whereNot('status', 'active')
                ->get();

        return $users;

    }


    public function ExistsData()
    {
        $exists = DB::table('users')
                ->where('status', 'active')
                ->exists();
        return $exists;

    }


    public function DoesNotExistsData()
    {
        $doesntExist = DB::table('users')
                        ->where('status', 'active')
                        ->doesntExist();

        return $doesntExist;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
