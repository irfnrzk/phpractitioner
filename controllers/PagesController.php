<?php 

class PagesController{
  
  public function home(){    
    
    return view('index', [
      'users' => $users
    ]);
  }

  public function about(){

    return view('about');

  }

  public function contact(){

    return view('contact');

  }



}