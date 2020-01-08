<?php

class PagesController
{
    public function home()
    {
        $users = App::get('database')->selectAll('users');

        return view('index', compact('users'));
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function culture()
    {
        return view('about-culture');
    }
}