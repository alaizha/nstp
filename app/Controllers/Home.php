<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
    public function test(){
        $j = New Login();
        $data = $j->findAll();

        return view('test', $data);
    }
    public function about(){
        return view('about');
    }
    public function request(){
        return view('request');
    }
    public function login(){
        return view('login');
    }
    public function register(){
        return view('register');
    }
}
