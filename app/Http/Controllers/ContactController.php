<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class ContactController extends Controller
{
    public function Contact()
    {
       return View('Contact');
    }
    
    public function About()
    {
       return View('About');
    }

    public function Panduan()
    {
       return View('Panduan');
    }

}
