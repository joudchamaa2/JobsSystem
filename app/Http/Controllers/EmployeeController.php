<?php

namespace App\Http\Controllers;

use App\Models\Ejobs;
use App\Models\AdminSkill;
use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmployeeController extends Controller
{
    function EmployeeHome(){
        $jobs = Auth::user()->jobs;
        return view('employee.EmployeePage',compact('jobs'));
    }
    function AddJobPage(){
        $adminskill = AdminSkill::all();
        return view('employee.AddJob',compact('adminskill'));
    }
    function AddJob(Request $request){
        $fields = $request->validate([
            'title'=>['required','string','min:2'],
            'company_name'=>['required','string','min:2'],
            'location'=>['required','string','min:2'],
            'job_type'=>['required','string'],
            'salary'=>['required','string'],
            'description'=>['required','string','max:2000'],
            'skills'=>['required','string','max:500'],
        ]);
        $job =  Ejobs::create($fields);
        $job->users()->attach(Auth::user()->id);
        return redirect()->back()->with('success','Job posted successfully!');
    }
    function ApplicationsPage(){
        $applications = Application::whereHas('ejob', function ($query) {
            $query->whereIn('id', Auth::user()->jobs->pluck('id'));
        })->with(['user', 'ejob'])->get();

        return view('employee.Application', compact('applications'));
    }
}
