<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index(){
        return view('index');
    }
    
    public function workExperience(){
        return view('work_experiences');
    }
    
    public function projects(){
        $labels = json_decode(Storage::get('data/projects-category.json'), true);
        $projects = json_decode(Storage::get('data/projects.json'), true);
        return view('projects', ['projects'=>$projects, 'labels'=>$labels]);
    }
    
    public function projectShow($id){
        $projects = json_decode(Storage::get('data/projects.json'), true);
        $project = collect($projects)->firstWhere('id', $id);
        if (!$project) {
            abort(404, 'Project not found');
        }
        return view('projects-details', ['project'=>$project]);
    }
    
    public function blogs(){
        return view('blog');
    }
    
    public function contact(){
        return view('contact');
    }

    
}
