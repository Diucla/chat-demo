<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserMassageController extends Controller
{
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'requester' => 'required',
            'user_requested' => 'required',
            'massage_id' => 'required',
        ]);
    }




}
