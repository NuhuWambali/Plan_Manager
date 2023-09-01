<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Plan,timeTableTask};

use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    //
    public function home(){
       $user=Auth::user()->id;
       $allPlans=Plan::where('user_id', '=', $user)->get();

       $countToday = $allPlans->filter(function ($plan) {
        return $plan['category'] == 'Today';
         })->count();


       $countThisWeek = $allPlans->filter(function ($plan) {
        return $plan['category'] == 'This Week';
         })->count();


        $countThisMonth = $allPlans->filter(function ($plan) {
            return $plan['category'] == 'This Month';
             })->count();

        $countThisYear = $allPlans->filter(function ($plan) {
            return $plan['category'] == 'This Year';
            })->count();

       return view('home.index',compact('allPlans','countToday','countThisWeek','countThisMonth','countThisYear'));
    }

    public function createPlan(){
        return view('home.createPlan');
    }

    public function addPlan(Request $request){
        $user=Auth::user();
        $plan=new Plan;
        $plan->plan=$request->plan;
        $plan->description=$request->description;
        $plan->category=$request->category;
        $plan->place=$request->place;
        $plan->user_id=$user->id;
        $plan->save();
        Alert::success('Plan Added Successfully','');
        // ->with('message','Plan Added Successfully');
        return redirect()->back();
    }

    public function today(){
        $authUser=Auth::user()->id;
        $todayPlan=Plan::where('user_id','=',$authUser)->get();
        return view('Home.todayPlans',compact('todayPlan'));
    }
    public function thisWeek(){
        $authUser=Auth::user()->id;
        $thisWeekPlan=PLan::where('user_id','=',$authUser)->get();
        return view('Home.thisWeek', compact('thisWeekPlan'));
    }
    public function thisMonth(){

        $authUser=Auth::user()->id;
        $thisMonthPlan=PLan::where('user_id','=',$authUser)->get();
        return view('Home.thisMonth',compact('thisMonthPlan'));
    }
    public function thisYear(){
        $authUser=Auth::user()->id;
        $thisYearPlan=Plan::where('user_id','=',$authUser)->get();
        return view('Home.thisYear',compact('thisYearPlan'));
    }
    public function timetableCreateView(){
           return view('Home.timetableCreate');

    }

    public function createTimetable(Request $request){
        $user=Auth::user();
        $task=new timeTableTask;
        $task->task=$request->task;
        $task->day=$request->day;
        $task->user_id=$user->id;
        $task->start_time=$request->start_time;
        $task->end_time=$request->end_time;
            $time1=$task->start_time=$request->start_time;
            $time2=$task->end_time=$request->end_time;
            $time1_Minutes=strtotime($time1);
            $time2_Minutes=strtotime($time2);
            $timeFinal=round(abs($time2_Minutes-$time1_Minutes));
        $task->duration=$timeFinal/60;
        $task->save();
        Alert::success('Task Added Successfully','');
        return redirect()->back();
        // with('message', 'Task Added Succesfully');
    }

    public function viewTimetable(){
            $user=Auth::user()->id;
            $taskAdded=timeTableTask::where('user_id','=',$user)->get();
            return view('Home.timetableView',compact('taskAdded'));
    }

    public function deleteTask($id){
        $deleteTask=timeTableTask::find($id);
        $deleteTask->delete();
        Alert::success('Task Deleted Successfully','');
        return redirect()->back();
        // ->with('message', 'Task Deleted Succesfully');
    }

    public function deletePlan($id){
        $deletePlan=Plan::find($id);
        $deletePlan->delete();
        Alert::success('Plan Deleted Successfully','');
        return redirect()->back();
        // ->with('message', 'Plan Deleted Successfully');
        
    }

    public function planDone($id){
        $planDone=Plan::find($id);
        $planDone->status="done";
        $planDone->save();
        Alert::success('Conglatulations!',"You've Completed This Plan");
        return redirect()->back();
    }

    public function editPlanPage($id){
        $plan=Plan::find($id);
        return view('Home.editPlan', compact('plan'));
    }

    public function confirmEdit(Request $request, $id){
        $plan=Plan::find($id);
        $user=Auth::user();
        $plan->plan=$request->plan;
        $plan->description=$request->description;
        $plan->category=$request->category;
        $plan->place=$request->place;
        $plan->user_id=$user->id;
        $plan->save();
        Alert::success('Plan Edited Successfully','');
        return redirect()->back();
        // ->with('message','Plan Edited Successfully');
    }
}
