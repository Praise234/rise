<?php

namespace App\Http\Controllers;
use App\Models\Projects;

use App\Http\Controllers\Controller;
use App\Models\ImageGallery;
use Illuminate\Http\Request;

use PHPMailer\PHPMailer\PHPMailer;  
use PHPMailer\PHPMailer\Exception;

class RiseController extends Controller
{
    public function index(){
        $projects = Projects::limit(3)->get();
        $image_gallerys = ImageGallery::get();
        return view('welcome', compact(['projects', 'image_gallerys']));
    }

    public function projects(){
        $projects = Projects::paginate(6);
        $image_gallerys = ImageGallery::get();
        return view('projects', compact(['projects', 'image_gallerys']));
    }

    public function project(Request $request){
        $project_slug = $request->project_slug;
        $project = Projects::where(['slug' => $project_slug])->first();
        $projects = Projects::whereNot('slug', $project_slug)->limit(3)->get();
        $image_gallerys = ImageGallery::where(['slug' => $project_slug])->get();
        return view('project', compact(['projects', 'project', 'image_gallerys']));
    }
    
    public function SendMail(Request $request){


        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->SMTPDebug = 0;
        $mail->Host = 'localhost';
        $mail->SMTPAuth = false;
        $mail->SMTPAutoTLS = false; 
        $mail->Port = 25; 
        $mail->Username = 'hello@rise4hope.org';
        $mail->Password = 'St@nd4mor3';
        $mail->setFrom('hello@rise4hope.org','rise4hope.org');
        $mail->addAddress('info@rise4hope.org');
        $mail->Subject =  "New Volunteer!";
        $mail->isHTML(true);
        $mail->Body = '<html> 
        <head> 
            <title>Welcome to CodexWorld</title> 
        </head> 
        <body> 
            <h1>We have a new volunteer!</h1> 
            <table cellspacing="0" style="border: 2px dashed #FB4314; width: 100%;"> 
                <tr> 
                    <th>Name:</th><td> ' . $request->fullname . '</td> 
                </tr> 
                <tr style="background-color: #e0e0e0;"> 
                    <th>Email:</th><td> ' . $request->email .'</td> 
                </tr>
                <tr style="background-color: #e0e0e0;"> 
                    <th>Country:</th><td> ' . $request->country .'</td> 
                </tr>
            </table> 
        </body> 
        </html>';
        if (!$mail->send()) {
           return back()->withErrors([$mail->ErrorInfo])->withInput();
        }
        return redirect()->back()->withSuccess('New project was added successfully');
           
    }

    
}
