<?php
class PagesController
{
    /**
     * Show the home page.
     */
    public function home()
    {
        echo 'Hey';
        //return view('index');
    }
    /**
     * Show the about page.
     */
    public function about()
    {
        echo 'About functioh';die;
        //return view('about', ['company' => $company]);
    }
    /**
     * Show the contact page.
     */
    public function contact()
    {
        echo 'contact';die;
       // return view('contact');
    }
}