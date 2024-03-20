<?php

namespace App\Controllers;

use \App\Models\User;
use \App\Models\Role;

class Home extends BaseController
{
    protected $user;
    public function __construct()
    {
        $this->user = new User();
    }
    public function index()
    {
        $data = [
            "title" => "Home",
            'active' => "home",
            'data' => $this->user->joinusertorole()
        ];
        return view('Dashboard/Home', $data);
    }
    function Sudoku()
    {
        $data = [
            "title" => "Game Sudoku",
            'active' => "sudoku"
        ];
        return view('Dashboard/Sudoku', $data);
    }
}
