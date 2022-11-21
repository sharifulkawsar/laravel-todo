<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('master');
    }

    public function about()
    {
        return view('about.about');
    }

    public function howItWorks()
    {
        return view('how-works.how-it-works');
    }

    public function allUsers(Request $request)
    {
        $userTable = User::get();
    
        foreach ($userTable as $key => $value) {
            $data['name'] = $value->name;
            $data['email'] = $value->email;
            $mainData[] = $data;
        }
        return json_encode($mainData);
    }
}
