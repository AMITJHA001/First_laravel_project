<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class user extends Controller
{
    function Myfunction($user_name=''){

    return view('user.header').view('user.index',array('user_name' => $user_name)).view('user.footer');

    }

    function Photo(){

        return view('user.header').view('user.photo').view('user.footer');
    
        }

        function Contact(){

            return view('user.header').view('user.contact').view('user.footer');
        
            }

            function About(){

                return view('user.header').view('user.about').view('user.footer');
            
                }
}
