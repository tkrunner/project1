<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return "สวัสดีจากหน้า User index";
    }
    public function show($id)
    {
        return "เธอคือ Id $id";
    }
    public function update($id)
    {
        return "กำลัง update $id";
    }
}
