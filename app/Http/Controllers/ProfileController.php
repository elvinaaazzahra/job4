<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $profile = [
            'name' => 'Elvina Azzahra',
            'email' => 'elvina23708@gmail.com',
            'bio' => 'Pelajar ',
            'profile_picture' => 'pp foto.jpg',
            'skills' => ['HTML', 'PHP'],
        ];
        return view('profile', compact('profile'));
    }
}
