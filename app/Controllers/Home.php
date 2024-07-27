<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function login(): string
    {
        return view('welcome_message');
    }

    public function index(): string
    {
        return $this->render('home', ['title' => 'Home']);
    }

    public function about(): string
    {
        return $this->render('about', ['title' => 'About Us']);
    }

    public function contact(): string
    {
        return $this->render('contact', ['title' => 'Contact Us']);
    }

    public function active(): string
    {
        return $this->render('active', ['title' => 'Active Starter Page']);
    }

    public function inactive(): string
    {
        return $this->render('inactive', ['title' => 'Inactive Starter Page']);
    }
}
