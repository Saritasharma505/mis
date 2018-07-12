<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserEducation;
use App\UserWorkExperience;
use App\UserDetails;
use Auth;
use App\User;
use Session;
use DB;


class UserDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
         $id=Auth::user()->id;

         $user_detail = DB::table('user_details')->where('user_id',$id)->get();
         foreach ($user_detail as  $value) {
            $designation=$value->designation;
            $mobile=$value->mobile;
            $locationcentre=$value->locationcentre;
            $department=$value->department;
            $doj=$value->doj;
         }
         
       $useredu=  UserEducation::where('user_id',$id)->get();
        

          $user_work = UserWorkExperience::where('user_id',$id)->get();
         $user_education = UserEducation::where('id',$id)->get();
        return view('mis.user_detail.index',compact(['user_detail','user_work','user_education','designation','mobile','locationcentre','department','doj','useredu']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            $id=Auth::user()->id;

         $user_detail = UserDetails::where('id',$id)->get();
          $user_work = UserWorkExperience::where('id',$id)->get();
         $user_education = UserEducation::where('id',$id)->get();

       
        return view('mis.user_detail.add',compact(['user_detail','user_work','user_education']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     
        $id=Auth::user()->id;
        $password = 'IIFM@ME';
        $ip= \Request::ip();
        $name = $request->Input('name');
        $email = $request->Input('email');
      
        
         $user_update = User::where('id',$id)->update(['name'=>$name,'email'=>$email]);

        $doj = $request->Input('doj');
        $designation = $request->Input('designation');
        $department = $request->Input('dept');
        $did = $request->Input('did');
        $gender = $request->Input('gender');
        $dob = $request->Input('dob');
        $cstreet = $request->Input('cadd');
        $ccity = $request->Input('ccity');
        $cstate = $request->Input('cstate');
        $pstreet = $request->Input('padd');
        $pcity = $request->Input('pcity');
        $pstate = $request->Input('pstate');
        $altno = $request->Input('altno');
        $fname = $request->Input('fname');
        $foccup = $request->Input('foccup');
        $fcontact = $request->Input('fcontact');
        $mname = $request->Input('mname');
        $moccup = $request->Input('moccup');
        $mcontact = $request->Input('mcontact');
        $maritalstatus = $request->Input('maritalstatus');
        $spname = $request->Input('spname');
        $spoccup = $request->Input('spoccup');
         $mobile = $request->Input('mobile');
        $sip = $ip;
        $locationcentre = $request->Input('locationcentre');
        $anniversary = $request->Input('anniversary');
        $status = $request->Input('active');
       


        $userDetails_update =UserDetails::where('user_id',$id)->update(['doj'=>$doj,'designation'=>$designation,'department'=>$department,'gender'=>$gender,'mobile'=>$mobile,'dob'=>$dob,'cstreet'=>$cstreet,'ccity'=>$ccity,'cstate'=>$cstate,'pstreet'=>$pstreet,'pcity'=>$pcity,'pstate'=>$pstate,'altno'=>$altno,'fname'=>$fname,'foccup'=>$foccup,'fcontact'=>$fcontact,'mname'=>$mname,'moccup'=>$moccup,'mcontact'=>$mcontact,'maritalstatus'=>$maritalstatus,'spname'=>$spname,'spoccup'=>$spoccup,'sip'=>$ip,'locationcentre'=>$locationcentre,'anniversary'=>$anniversary,'status'=>'active']);


        $company = $request->Input('company');
        $designation1 = $request->Input('designation1');
        $fromdate = $request->Input('fromdate');
        $todate = $request->Input('todate');

        $workExperience_update = UserWorkExperience::where('user_id',$id)->update(['company'=> $company, 'designation1' => $designation1, 'fromdate' => $fromdate, 'todate' => $todate]);

          $postgradegree = $request->Input('postgradegree'); 
        $postgrayear = $request->Input('postgrayear');
        $postgrapercentage = $request->Input('postgrapercentage');
        $postgracoll = $request->Input('postgracoll');
        $gradegree = $request->Input('gradegree');
        $grayear = $request->Input('grayear');
        $grapercentage = $request->Input('grapercentage');
        $gracoll = $request->Input('gracoll');
        $twelvethschname = $request->Input('twelvethschname');
        $twelvethschyear = $request->Input('twelvethschyear');
        $twelvethschpercent = $request->Input('twelvethschpercent');
        $tenthschname = $request->Input('tenthschname');
        $tenthschyear = $request->Input('tenthschyear');
        $tenthschpercent = $request->Input('tenthschpercent');

         $UserEducation = UserEducation::where('user_id',$id)->update(['postgradegree'=>$postgradegree,'postgrayear'=>$postgrayear,'postgrapercentage'=>$postgrapercentage,'postgracoll'=>$postgracoll,'gradegree'=>$gradegree,'grayear'=>$grayear,'grapercentage'=>$grapercentage,'gracoll'=>$gracoll,'twelvethschname'=>$twelvethschname,'twelvethschyear'=>$twelvethschyear,'twelvethschpercent'=>$twelvethschpercent,'tenthschname'=>$tenthschname,'tenthschyear'=>$tenthschyear,'tenthschpercent'=>$tenthschpercent,]);

        Session::flash('message','Your Details Updated Successfully !!');

        return redirect()->route('user.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      
    }
    


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function education()
    {
       return view('mis.user_detail.education');
    }

     public function professional()
    {
       return view('mis.user_detail.professional');
    }

     public function professionalUpdate(Request $request){
       
        UserWorkExperience::create($request->all());
       
        Session::flash('message','Your Details Updated Successfully !!');

        return redirect()->route('user.index');

    }

    public function educationUpdate(Request $request){
       
        UserEducation::create($request->all());
       
        Session::flash('message','Your Details Updated Successfully !!');

        return redirect()->route('user.index');

    }
}
