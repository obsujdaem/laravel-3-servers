<?php

namespace App\Http\Controllers;

use App\Services\AddPostService;
use App\UserModel;
use Illuminate\Http\Request;

class AddPostController extends Controller
{
    public function index()
    {
        $users = UserModel::all();

        return view('post', ['users' => $users]);
    }

    public function store(Request $request, AddPostService $service)
    {
        $service->save($request);

        $users = UserModel::all();

        return view('post', ['users' => $users]);
    }
}
