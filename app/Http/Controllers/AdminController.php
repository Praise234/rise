<?php

namespace App\Http\Controllers;
use App\Models\Projects;

use App\Http\Controllers\Controller;
use App\Models\ImageGallery;
use Illuminate\Http\Request;
use Validator;
use Storage;

class AdminController extends Controller
{
    public function loginUser(Request $request){
        if($request->username == "" && 
$request->password == ""){
            \Session::put('user', 'admin');
            return redirect(Route('dashboard'));
        }
        return redirect()->back()->withErrors('Incorrect Username or Password');
     }
     public function logout(){
        if(Session()->has('user')){
            Session()->pull('user');
        }
        return redirect(Route('login'));
     }
     public function listProjects(){
        $projects = Projects::paginate(10);
        
        return view('admin.dashboard', compact(['projects']));
    }
    public function addProject(Request $request){
        $messages = [
            'required' => 'The :attribute is required',
            'string'    => 'The :attribute must be text format',
            'file'    => 'The :attribute must be a file',
            'min'      => 'The :attribute must have a minimum length of :min',
            'max'      => 'The :attribute must have a maximum length of :max',
            'numeric'      => 'The :attribute must be numeric',
            'digits_between'      => 'The :attribute must be 11 digits',
            'digits'      => 'The :attribute must be :digits digits',
            'exists'      => 'The :attribute does not exist',
            'unique'      => 'The :attribute already exist',
            'gte'      => 'The :attribute must be greater than :gte',
            'file'    => 'The :attribute must be a file',
            'gt'      => 'The :attribute must be greater than 0',
            'mimes'      => 'The image must be jpeg,png or jpg',
            'after_or_equal'      => 'The :attribute must be on or after ' . date("Y-m-d", strtotime("now")),
          ];
          



          $delimeters = [
            'product_Image'=>'required|mimes:jpeg,png,jpg',
            'project_name'=>'required|string|unique:projects|min:3',
            'amount_raised'=>'required|numeric|gt:0',
            'goal'=>'required|numeric|gt:0',
            'details'=>'required|string|min:3',
          ];
        
       

          $validator = Validator::make($request->all(), $delimeters, $messages);

            if ($validator->fails()) {
                return back()->withErrors($validator->errors()->all())->withInput();
            }


            $path = $request->file('product_Image')->store('public');
            $project = new Projects;
            $project->img_url =  substr($path,7);
            $project->project_name = $request->project_name;
            $project->raised =  $request->amount_raised;
            $project->goal = $request->goal;
            $project->details =  $request->details;
            $project->slug = strtolower(str_replace(' ', '_', $request->project_name));


            $project->save();

            return redirect()->back()->withSuccess('New project was added successfully');
    }

    public function updateProject(Request $request){
        $messages = [
            'required' => 'The :attribute is required',
            'string'    => 'The :attribute must be text format',
            'file'    => 'The :attribute must be a file',
            'min'      => 'The :attribute must have a minimum length of :min',
            'max'      => 'The :attribute must have a maximum length of :max',
            'numeric'      => 'The :attribute must be numeric',
            'digits_between'      => 'The :attribute must be 11 digits',
            'digits'      => 'The :attribute must be :digits digits',
            'exists'      => 'The :attribute does not exist',
            'unique'      => 'The :attribute already exist',
            'gte'      => 'The :attribute must be greater than :gte',
            'file'    => 'The :attribute must be a file',
            'gt'      => 'The :attribute must be greater than 0',
            'mimes'      => 'The image must be jpeg,png or jpg',
            'after_or_equal'      => 'The :attribute must be on or after ' . date("Y-m-d", strtotime("now")),
          ];
          


          $delimeters = [
            'id'=>'required|exists:projects',
            'project_name'=>'required|string|min:3',
            'amount_raised'=>'required|numeric|gt:0',
            'goal'=>'required|numeric|gt:0',
            'details'=>'required|string|min:3',
          ];

          if($request->file('product_Image')){
            $delimeters = [
                'id'=>'required|exists:projects',
                'product_Image'=>'required|mimes:jpeg,png,jpg',
                'project_name'=>'required|string|min:3',
                'amount_raised'=>'required|numeric|gt:0',
                'goal'=>'required|numeric|gt:0',
                'details'=>'required|string|min:3',
            ];
        }
        
       

          $validator = Validator::make($request->all(), $delimeters, $messages);

            if ($validator->fails()) {
                return response()->json(['status'=>400, 'error'=> $validator->errors()->all()]);
            }

            $project = Projects::find($request->id) ;
            if($request->file('product_Image')){
                $path = $request->file('product_Image')->store('public');
                $project->img_url =  substr($path,7);
            }
            $project->project_name = $request->project_name;
            $project->raised =  $request->amount_raised;
            $project->goal = $request->goal;
            $project->details =  $request->details;
            $project->slug = strtolower(str_replace(' ', '_', $request->project_name));


            $project->save();
            return response()->json(['status'=>1, 'message'=> 'Project update was done successfully']);
    }

    public function deleteProject(Request $request){
        $id = $request->id; 
        $unavailable = Projects::find($id);
        $unavailable->delete();
        return response()->json(['status'=>1, 'message'=>'Your delete was successful!']);
     }
      public function addGalleryImage(Request $request){
        $messages = [
            'required' => 'The :attribute is required',
            'mimes'      => 'The image must be jpeg,png or jpg',
          ];
          


            $delimeters = [
                'product_Image'=>'required|mimes:jpeg,png,jpg',
            ];
        
        
       

          $validator = Validator::make($request->all(), $delimeters, $messages);

            if ($validator->fails()) {
                return back()->withErrors($validator->errors()->all())->withInput();
            }

            $exist = ImageGallery::where(['slug' => $request->slug])->count();
            if($exist == 3){
                return back()->withErrors(['You already have two images, please delete one.'])->withInput();
            }
            $project = new ImageGallery;
            $path = $request->file('product_Image')->store('public');
            $project->img_url =  substr($path,7);
            $project->slug = $request->slug;


            $project->save();
            return redirect()->back()->withSuccess('Image added successfully');
    }

    public function addGalleryImageView(){
        $projects = Projects::get();
        
        return view('admin.add_image_to_gallery', compact(['projects']));
    }

    public function ImageGalleryView(){
        $image_gallerys = ImageGallery::paginate(10);
        $projects = Projects::get();
        return view('admin.image_gallery_view', compact(['image_gallerys', 'projects']));
    }
    public function ImageGalleryViewSearch(Request $request){
        $image_gallerys = ImageGallery::where(['slug' => $request->slug])->paginate(3);
        $projects = Projects::get();
        return view('admin.image_gallery_view', compact(['image_gallerys', 'projects']));
    }
    public function deleteImage(Request $request){
        $id = $request->id; 
        $image_gallerys = ImageGallery::find($id);
        Storage::delete('public/' . $image_gallerys->img_url);
        
        $image_gallerys->delete();
        return response()->json(['status'=>1, 'message'=>'Your delete was successful!']);
     }

}
