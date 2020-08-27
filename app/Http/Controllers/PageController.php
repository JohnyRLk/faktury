<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use Mail;
use App\Mail\ContactForm;
class PageController extends Controller
{
    public function index(){

        return "About Us Page";
    }

    public function profile($id){

        $user =  User::findOrFail($id);
            return view('profile')->with('user', $user);
    }
    
    public function contact()
    {
      return view('contact');
    }
  
    public function sendContact(Request $request)
    {
      $this->validate($request, [
        'name' => 'required',
        'email' => 'required|email',
        'subject' => 'required|min:3',
        'message' => 'required|min:10'
      ]);
  
      Mail::to('f9fef2133b-72a372@inbox.mailtrap.io')->send(new ContactForm($request));
        
      return redirect('showinvoice');
    }
  }
  






?>