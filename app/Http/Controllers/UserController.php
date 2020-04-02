<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\DB;

    class UserController extends Controller
    {
        public function index()
        {
            DB::table('users')->insert([
                ['name' => 'DHN Chandan', 'email' => 'php.chandan@gmail.com', 'password' => '10091986'],
                ['name' => 'Sajib Hasan', 'email' => 'sajib001@gmail.com', 'password' => '12345678'],
            ]);
//            DB::insert("insert into users (name, email, password) values (?, ?, ?)", ['DHN Chandan', 'php.chandan@gmail.com', '10091986']);
            return view('user');
        }
    }
