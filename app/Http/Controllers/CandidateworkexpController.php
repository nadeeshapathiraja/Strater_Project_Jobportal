<?php

namespace App\Http\Controllers;

use App\candidateworkexp;
use Illuminate\Http\Request;

class CandidateworkexpController extends Controller
{

    public function index()
    {
        //$accounts = account::all();

        return view('candidateworkexps.index', compact('candidateworkexps'));
    }

    
    public function store(Request $request)
    {

        $request->validate([

            'employername' => 'required',
            'industry' => 'required',
            'position' => 'required',
            'salary' => 'required',
            
        ]);

        $candidateworkexp = new candidateworkexp([

            'employername' => $request->get('employername'),
            'industry' => $request->get('industry'),
            'city' => $request->get('city'),
            'country' => $request->get('country'),
            'state' => $request->get('state'),
            'position' => $request->get('position'),
            'start_date' => $request->get('start_date'),
            'end_date' => $request->get('end_date'),
            'still_working' => $request->get('still_working'),
            'salary' => $request->get('salary'),
            
        ]);

        $candidateworkexp->save();
        return redirect('/candidateworkexps')->with('success', ' Create Successfuly');

    }
    

    public function create(Request $request)
    {
        return view('candidateworkexps.create');
    }


    public function show(candidateworkexp $candidateworkexp)
    {
        //
    }

   
    public function edit($candidate_workexp_id)
    {
        $candidateworkexp = candidateworkexp::find($candidate_workexp_id);
        return view('candidateworkexps.edit', compact('candidateworkexp'));
    }

    
    public function update(Request $request, $candidate_workexp_id)
    {
        $request->validate([
            'employername' => 'required',
            'industry' => 'required',
            'position' => 'required',
            'salary' => 'required',
        ]);

        $candidateworkexp = candidateworkexp::find($candidate_workexp_id);

        $candidateworkexp->employername =  $request->get('employername');
        $candidateworkexp->industry = $request->get('industry');
        $candidateworkexp->city = $request->get('city');
        $candidateworkexp->country = $request->get('country');
        $candidateworkexp->state =  $request->get('state');
        $candidateworkexp->position = $request->get('position');
        $candidateworkexp->start_date = $request->get('start_date');
        $candidateworkexp->end_date = $request->get('end_date');
        $candidateworkexp->still_working = $request->get('still_working');
        $candidateworkexp->salary = $request->get('salary');

        $candidateworkexp->save();

        return redirect('/candidateworkexps')->with('success', 'Update Successfull!');
    }

    
    public function destroy($candidate_workexp_id)
    {
        $candidateworkexp = candidateworkexp::find($candidate_workexp_id);
        $candidateworkexp->delete();

        return redirect('/candidateworkexps')->with('success', 'Account Deleted!');
    }

}
