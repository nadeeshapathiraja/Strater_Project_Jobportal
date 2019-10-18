<?php

namespace App\Http\Controllers;

use App\candidate_language;
use Illuminate\Http\Request;

class CandidateLanguageController extends Controller
{
   
    public function index()
    {
        //$candidate_languages = candidate_language::all();

        return view('candidate_languages.index', compact('candidate_languages'));
    }

    
    public function store(Request $request)
    {
        $request->validate([
            
        ]);

        $candidate_language = new candidate_language([
            'language_code' => $request->get('language_code'),
            'spoken_level' => $request->get('spoken_level'),
            'written_level' => $request->get('written_level'),
            'default' => $request->get('default'),
            
        ]);
        $candidate_language->save();
        return redirect('/candidate_languages')->with('success', 'Create Successfuly');
    }
    
    
    public function create(Request $request)
    {
        return view('candidate_languages.create');
    }

    
    public function show(candidate_language $candidate_language)
    {
        //
    }

    
    public function edit($candidate_lang_id)
    {
        $candidate_language = candidate_language::find($candidate_lang_id);
        return view('candidate_languages.edit', compact('candidate_language'));
    }

    
    public function update(Request $request,$candidate_lang_id)
    {
        $request->validate([
            
        ]);

        $candidate_language = candidate_language::find($candidate_lang_id);
        $candidate_language->language_code =  $request->get('language_code');
        $candidate_language->spoken_level = $request->get('spoken_level');
        $candidate_language->written_level = $request->get('written_level');
        $candidate_language->default = $request->get('default');

        $candidate_language->save();

        return redirect('/candidate_languages')->with('success', 'Update Successfull!');
    }

    
    public function destroy($candidate_lang_id)
    {
        $candidate_language = candidate_language::find($candidate_lang_id);
        $candidate_language->delete();

        return redirect('/candidate_languages')->with('success', 'Account Deleted!');
    }
}
