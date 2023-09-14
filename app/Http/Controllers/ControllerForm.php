<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Validator;


class ControllerForm extends BaseController
{
    public function checKForm(Request $request)
    {
        $rules = [
            'URL' => 'required|string|url',
            'Email' => 'required|string|email',
            'MDP' => 'required|string',
        ];
    
        $validator = Validator::make($request->all(), $rules);
    
        if ($validator->fails()) {
            return redirect('/gestionMdp')->withErrors($validator);
        }
    
        // Save the data to the database
        
        // return redirect("/welcome")->withErrors($validator);
        // return redirect('welcome')->route('welcome');
        return redirect('/');
    }
}

