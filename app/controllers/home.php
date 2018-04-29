<?php
/**
 * Created by PhpStorm.
 * User: Mohammed
 * Date: 4/24/2018
 * Time: 11:36 PM
 */

class Home extends Controller
{
    public function index($name = '')
    {
        $users = User::all();
        $this->view('home/index', ['users' => $users]);
    }

    public function create($username = '', $email = '')
    {
        User::create([
            'username' => $username,
            'email' => $email
        ]);

    }
}