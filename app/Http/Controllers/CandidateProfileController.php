<?php

namespace App\Http\Controllers;

use App\candidateprofile;
use Illuminate\Http\Request;
use Validator,Redirect,Response,File;

class CandidateprofileController extends Controller
{

    public function index()
    {
        //$candidateprofiles = candidateprofile::all();
        return view('candidateprofiles.index', compact('candidateprofiles'));
    }

    public function store(Request $request)
    {
        $request->validate([
             //'image' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
             'firstname' => 'required',
             'lastname' => 'required',
             'acc_name' => 'required',
             'acc_no' => 'required',
             'bank' => 'required',
         ]);

    $image = $request->file('image');
    return $image;

    $image->move(
        base_path()."public/images/candidate", 'final_file'

    );

    $candidateprofile = new candidateprofile([

        //'account_id' => $request->get('first_name'),
        'image' => $request->get('image'),
        'firstname' => $request->get('firstname'),
        'lastname' => $request->get('lastname'),
        'mobile' => $request->get('mobile'),
        'telephone' => $request->get('telephone'),
        'address1' => $request->get('address1'),
        'address2' => $request->get('address2'),
        'city' => $request->get('city'),
        'state' => $request->get('state'),
        'country' => $request->get('country'),
        'zipcode' => $request->get('zipcode'),
        'fresh_graduate' => $request->get('fresh_graduate'),
        'nationality' => $request->get('nationality'),
        'country_residingin' => $request->get('country_residingin'),
        'state_residingin' => $request->get('state_residingin'),
        'working_since' => $request->get('working_since'),
        'prefered_category' => $request->get('prefered_category'),
        'prefered_level' => $request->get('prefered_level'),
        'prefered_type' => $request->get('prefered_type'),
        'prefered_salary_currency' => $request->get('prefered_salary_currency'),
        'prefered_salary' => $request->get('prefered_salary'),
        'prefered_location' => $request->get('prefered_location'),
        'about_myself' => $request->get('about_myself'),
        'gender' => $request->get('gender'),
        'date_of_birth' => $request->get('date_of_birth'),
        'core_skills' => $request->get('core_skills'),
        'race' => $request->get('race'),
        'prefered_location2' => $request->get('prefered_location2'),
        'prefered_location3' => $request->get('prefered_location3'),
        'prefered_industry' => $request->get('prefered_industry'),
        'acc_name' => $request->get('acc_name'),
        'acc_no' => $request->get('acc_no'),
        'bank' => $request->get('bank'),

    ]);

    $candidateprofile->save();

    return redirect('/candidateprofiles')->with('success');
}

    public function show(candidateprofile $candidateprofile)
    {
        //
    }

    public function create(Request $request)
    {
        return view('candidateprofiles/create');
    }


    public function edit($candidate_profile_id)
    {
        $candidateprofile = candidateprofile::find($candidate_profile_id);
        return view('candidateprofiles.edit', compact('candidateprofile'));
    }


    public function update(Request $request, $candidate_profile_id)
    {
        $request->validate([
            // 'image' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
             'first_name' => 'required',
             'last_name' => 'required',
             'acc_name' => 'required',
             'acc_no' => 'required',
             'bank' => 'required',
         ]);

         $candidateprofile = candidateProfile::find($candidate_profile_id);
         //$candidateprofile->image = $request->get('image');
         $candidateprofile->firstname=$request('first_name');
         $candidateprofile->lastname = $request->get('lastname');
         $candidateprofile->mobile = $request->get('mobile');
         $candidateprofile->telephone = $request->get('telephone');
         $candidateprofile->address1 = $request->get('address1');
         $candidateprofile->address2 = $request->get('address2');
         $candidateprofile->city = $request->get('city');
         $candidateprofile->state = $request->get('state');
         $candidateprofile->country = $request->get('country');
         $candidateprofile->zipcode = $request->get('zipcode');
         $candidateprofile->fresh_graduate = $request->get('fresh_graduate');
         $candidateprofile->nationality = $request->get('nationality');
         $candidateprofile->country_residingin = $request->get('country_residingin');
         $candidateprofile->state_residingin = $request->get('state_residingin');
         $candidateprofile->working_since = $request->get('working_since');
         $candidateprofile->prefered_category = $request->get('prefered_category');
         $candidateprofile->prefered_level = $request->get('prefered_level');
         $candidateprofile->prefered_type = $request->get('prefered_type');
         $candidateprofile->prefered_salary_currency = $request->get('prefered_salary_currency');
         $candidateprofile->prefered_salary_currency = $request->get('prefered_salary_currency');
         $candidateprofile->prefered_salary = $request->get('prefered_salary');
         $candidateprofile->prefered_location = $request->get('prefered_location');
         $candidateprofile->about_myself = $request->get('about_myself');
         $candidateprofile->gender = $request->get('gender');
         $candidateprofile->date_of_birth = $request->get('date_of_birth');
         $candidateprofile->core_skills = $request->get('core_skills');
         $candidateprofile->race = $request->get('race');
         $candidateprofile->prefered_location2 = $request->get('prefered_location2');
         $candidateprofile->prefered_location3 = $request->get('prefered_location3');
         $candidateprofile->prefered_industry = $request->get('prefered_industry');
         $candidateprofile->acc_name = $request->get('acc_name');
         $candidateprofile->acc_no = $request->get('acc_no');
         $candidateprofile->bank = $request->get('bank');

         $candidateprofile->save();

        return redirect('/candidateprofiles')->with('success');

    }


    public function destroy($candidate_profile_id)
    {
        $candidateprofile = account::find($candidate_profile_id);
        $candidateprofile->delete();

        return redirect('/candidateprofiles')->with('success');
    }
}
