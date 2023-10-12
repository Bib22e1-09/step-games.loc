<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeController extends Controller
{
    public function __invoke(Request $request)
    {
        $user=User::find(1);
        $user->name = $request->('name','NoName');
        $user->save();
        return 'Hello world! Hello ' . $user->name;
    }
}
