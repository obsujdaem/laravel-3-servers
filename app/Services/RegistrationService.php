<?php


namespace App\Services;


use App\UserModel;

class RegistrationService
{
    public function saveAction($request) {

        $user = new UserModel();

        $user->name = $request->name;
        $user->password = $request->password;
        $user->email = $request->email;
        $user->server_id = rand(1,2);

        $user->save();

        return true;
    }
}
