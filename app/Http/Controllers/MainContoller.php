<?php

namespace App\Http\Controllers;
use App\Models\Like;
use App\Models\Post;
use App\Models\User;
use App\Models\Ejobs;
use App\Models\Skill;
use App\Models\Comment;
use App\Models\Prenium;
use App\Models\ImagePost;
use App\Models\AdminSkill;
use App\Models\Experience;
use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainContoller extends Controller
{
    function home(){
        $post = Post::with(['user','imagePost'])->get();
        $jobs = Ejobs::all();
        return view('main.home',compact('post','jobs'));
    }
    function NewPost(){
        return view('main.NewPost');
    }
    function NewPostAction(Request $request){
        $fields = $request->validate([
            'title'=>['required','string','min:2'],
            'description'=>['required','string','max:2000'],
            'path'=>['mimes:jpg,png,jpeg,webp','max:5120'],      
            
        ]);
        $post =  Post::create([
            'title'=>$fields['title'],
            'description'=>$fields['description'],
            'user_id' =>Auth::user()->id,  

        ]);
        if(isset($fields['path'])){
        $imageName = time().'.'.$fields['path']->extension();
        $fields['path']->move(public_path('assets/images'),$imageName);
        $fields['path'] = $imageName;
        ImagePost::create([
            'post_id'=>$post->id,
            'path'=>$fields['path'],
        ]);
    }
        return redirect()->back()->with('success','Post created successfully!');
    }
    function PostComment(Request $request ,Post $id){
        $fields = $request->validate([
            'comment'=>['required','string','max:500'],
        ]);
        Comment::create([
            'user_id' => Auth::user()->id,
            'post_id'=>$id->id,
            'comment'=> $fields['comment'],
        ]);
        return redirect()->route('HomePage');
    }
    function GetComment($id){
        $comment = Comment::with(['user'])
        ->where('post_id',$id)
        ->latest()
        ->get();
        return view('main.home',compact('comment'));
    }
    function profilePage(User $id){
        $user = User::find($id);
        $count = Post::where('user_id',Auth::id())->count();
        $skill = Skill::where('user_id',Auth::id())->get();
        $adminskill = AdminSkill::all();
        $experience = Experience::where('user_id',Auth::id())->get();
        return view('main.profile',compact('user','count','skill','adminskill','experience'));

    }
    function AddSkills(Request $request){
        $fields = $request->validate([
            'skil'=>['required','string','max:10'],
        ]);
        if(Skill::where('skil',$fields['skil'])->where('user_id',Auth::id())->exists()){
            return back()->with('error','Skill already added');
        }
        Skill::create([
        'skil' => $fields['skil'],
        'user_id' => Auth::id(),
        ]); 
        
        return back()->with('success','skills added successfully');
    }
    function MyPostPage(){
        $post = Post::where('user_id',Auth::id())->with('user','imagePost')->get();
        return view('main.mypost',compact('post'));
    }
    function DeletePost(Post $id){
        $id->delete();
        return redirect()->route('MyPostPage')->with('success','Post Deleted Successfully');
    }
    function AddExperiencePage(){
        return view('main.AddExperience');
    }
    function AddExperience(Request $request , User $id){
        $fields = $request->validate([
            'title'=>['required','string','max:255'],
            'company'=>['required','string','max:255'],
            'start_date'=>['required','date'],
            'end_date'=>['required','date','after_or_equal:start_date'],
            'description'=>['nullable','string','max:2000'],
        ]);
        Experience::create([
            'title'=>$fields['title'],
            'company'=>$fields['company'],
            'start_date'=>$fields['start_date'],
            'end_date'=>$fields['end_date'],
            'description'=>$fields['description'] ?? null,
            'user_id'=>$id->id,
        ]);
        return redirect()->back()->with('success','Experience added successfully');
    }
    function DeleteSkill(Skill $id){
        $id->delete();
        return redirect()->back()->with('success','Skill deleted successfully');
    }
    function DeleteExperience(Experience $id){
        $id->delete();
        return redirect()->back()->with('success','Experience deleted successfully');
    }
    function EditProfilePage(){
        return view('main.EditProfile');
    }
    public function UpdateProfile(Request $request, User $id)
{
    $fields = $request->validate([
        'name' => ['required','string','max:255'],
        'email' => ['required','email','max:255'],
        'about' => ['nullable','string','max:2000'],
        'profile_image' => ['nullable','mimes:jpg,png,jpeg,webp','max:5120'],
    ]);

    // Handle image upload
    if ($request->hasFile('profile_image')) {
        $imageName = time() . '.' . $request->file('profile_image')->extension();
        $request->file('profile_image')->move(public_path('assets/images'), $imageName);
        $fields['profile_image'] = $imageName;
    } else {
        $fields['profile_image'] = $id->profile_image;
    }

    // Update user
    $id->update([
        'name' => $fields['name'],
        'email' => $fields['email'],
        'about' => $fields['about'] ?? $id->about,
        'profile_image' => $fields['profile_image'],
    ]);

    return redirect()->back()->with('success', 'Profile updated successfully');
}
function JobsPage(){
    $jobs = Ejobs::all();
    return view('main.jobs',compact('jobs'));
}
function ViewJob($id){
    $job = Ejobs::find($id);
    return view('main.ViewJob',compact('job'));
}
function ApplyJobPage($id){
    $job = Ejobs::find($id);
    return view('main.ApplyJob',compact('job'));
}
function SubmitJobApplication(Request $request,  $id){
    $fields = $request->validate([
        'full_name'=>['required','string','max:255'],
        'email'=>['required','email','max:255'],
        'cv'=>['nullable','mimes:pdf,doc,docx','max:10240'],
        'cover_letter'=>['nullable','string','max:2000'],
        'additional_info'=>['nullable','string','max:2000'],
    ]);
    if ($request->hasFile('cv')) {
        $cvName = time() . '.' . $request->file('cv')->extension();
        $request->file('cv')->move(public_path('assets/cvs'), $cvName);
        $applicationData['cv'] = $cvName;
    }
     Application::create([
        'user_id' => Auth::id(),
        'ejob_id' => $id,
        'full_name' => $fields['full_name'],
        'cv' => $cvName ?? null,
        'email' => $fields['email'],
        'cover_letter' => $fields['cover_letter'] ?? null,
        'additional_info' => $fields['additional_info'] ?? null,
    ]);

    // Handle CV upload
    
    return redirect()->back()->with('success', 'Job application submitted successfully!');
}
function SubscribePreniumPage(){
    return view('main.SubscribePrenium');
}
function SubscribeSuccessPage(){
    return view('main.subscribe');
}
function SubmitPreniumSubscription(Request $request){
    $fields = $request->validate([
        'name'=>['required','string','max:255'],
        'email'=>['required','email','max:255'],
        'payment_method'=>['required','string','max:100'],
    ]);
    Prenium::create([
        'user_id' => Auth::id(),
        'name' => $fields['name'],
        'email' => $fields['email'],
        'payment_method' => $fields['payment_method'],
    ]);
    $user = User::find(Auth::id());
    $user->is_premium = true;
    $user->subscription_end =date('Y-m-d', strtotime('+1 month'));
    $user->role = 'employer';
    $user->save();

    return back()->with('success','Subscription successful! You are now a premium member.');
}
function LikePost($id){
    $post = Post::find($id);
    if(!$post){
        return redirect()->back()->with('error','Post not found');
    }
    // Check if the user has already liked the post
    $existingLike = $post->Like()->where('user_id', Auth::id())->first();
    if ($existingLike) {
        $existingLike->delete();
        return redirect()->back()->with('success', 'Like removed successfully!');
    }

    // Create a new like
    Like::create([
        'user_id' => Auth::id(),
        'post_id' => $post->id,
    ]);

    return redirect()->back()->with('success', 'Post liked successfully!');
}
}