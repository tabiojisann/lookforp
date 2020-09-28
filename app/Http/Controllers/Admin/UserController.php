<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index() {
        $users = User::orderBy('created_at', 'DESC')->paginate(10);

        return view('admin.users.index', ['users' => $users]);
    }

    public function show(User $user ) {
        
        return view('admin.users.show', ['user' => $user]);
    }

    public function search(Request $request) {

        $keyword_name     = $request->input('keyword_name');
        $keyword_email     = $request->input('keyword_email');

        $query = User::query();

        if(!empty($keyword_name)) {
            $query->where('name', 'LIKE', "%{$keyword_name}%");
        }
        if(!empty($keyword_email)) {
            $query->where('email', 'LIKE', "%{$keyword_email}%");
        }

        $users = $query->get()->sortByDesc('created_at');

        return view('admin.users.search', [
            'keyword_name'  => $keyword_name,
            'keyword_email' => $keyword_email,
            'users'      => $users
        ]);
    }
}
