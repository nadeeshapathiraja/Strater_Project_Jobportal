@extends('Common.base')

@section('main')

<div id="exTab2" class="container">	
  {{-- Menubar --}}
  <div class="row">
    <div class="col-md-3">
        <ul>

          <div class="row">           
            <div class="col-md-12">
              <li class="active">
                 <a  href="#1" data-toggle="tab">PROFILE</a>
              </li>    
            </div>
          </div>

          <div class="row">
              <div class="col-md-12">
                  <li>
                    <a href="#2" data-toggle="tab">EDUCATION</a>
                  </li>
              </div>
          </div>

          <div class="row">
            <div class="col-md-12">
                <li>
                    <a href="#3" data-toggle="tab">APPLICATION</a>
                </li> 
            </div>
          </div>
          
          <div class="row">
            <div class="col-md-12">
              <li>
                <a href="#4" data-toggle="tab">LANGUAGES</a>
              </li>     
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <li>
                <a href="#5" data-toggle="tab">EXPERIENCE</a>
              </li>       
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <li>
                <a href="#6" data-toggle="tab">PREFERENCE</a>
              </li>         
            </div>
          </div>
          
        </ul>
    </div>
{{-- Content --}}
    <div class="col-md-9">  

			<div class="tab-content ">

        {{-- Menubar Item 1 --}}
			  <div class="tab-pane active" id="1">
            
            <div class="row">
            <div class="col-sm-8 offset-sm-2">
                <h1 class="display-3">Add Profile Data</h1>
                <div>
                    <a style="margin: 19px;" href="{{ route('candidateprofiles.create')}}" class="btn btn-primary">New Candidate</a>
                </div>
              <div>
                @if ($errors->any())
                  <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                  </div><br />
                @endif
                  <form method="post" action="{{ route('candidateprofiles.store') }}">
                    @csrf                                                                                                                
                      {{-- {{ csrf_field() }} --}}
                      
                      {{-- Image --}}
                      <div class="form-group">
                          <label for="image">Image:</label>
                          <input type="file" class="form-control" name="image"/>
                      </div>

                      <div class="form-group">
                        <label for="firstname">First Name:</label>
                        <input type="text" class="form-control" name="firstname"/>
                      </div>

                      <div class="form-group">
                          <label for="lastname">Last Name:</label>
                          <input type="text" class="form-control" name="lastname"/>
                      </div>

                      <div class="form-group">
                        <label for="mobile">Mobile:</label>
                        <input type="text" class="form-control" name="mobile"/>
                      </div>

                      <div class="form-group">
                          <label for="telephone">Telephone Number:</label>
                          <input type="text" class="form-control" name="telephone"/>
                      </div>

                      <div class="form-group">
                        <label for="address1">Address 1:</label>
                        <input type="text" class="form-control" name="address1"/>
                      </div>

                      <div class="form-group">
                        <label for="address2">Address 2:</label>
                        <input type="text" class="form-control" name="address2"/>
                      </div>

                      <div class="form-group">
                        <label for="city">City:</label>
                        <input type="text" class="form-control" name="city"/>
                      </div>

                      <div class="form-group">
                          <label for="state">State:</label>
                          <input type="text" class="form-control" name="state"/>
                      </div>

                      <div class="form-group">
                        <label for="country">Country:</label>
                        <input type="text" class="form-control" name="country"/>
                      </div>

                      <div class="form-group">
                          <label for="zipcode">Zip Code:</label>
                          <input type="text" class="form-control" name="zipcode"/>
                      </div>

                      <div class="form-group">
                        <label for="fresh_graduate">Fresh Graduate:</label>
                        <input type="text" class="form-control" name="fresh_graduate"/>
                      </div>

                      <div class="form-group">
                        <label for="nationality">Nationality</label>
                        <input type="text" class="form-control" name="nationality"/>
                      </div>

                      <div class="form-group">
                        <label for="country_residingin">Country Residingin:</label>
                        <input type="text" class="form-control" name="country_residingin"/>
                      </div>

                      <div class="form-group">
                          <label for="state_residingin">State Residingin:</label>
                          <input type="text" class="form-control" name="state_residingin"/>
                      </div>

                      <div class="form-group">
                        <label for="working_since">Working since:</label>
                        <input type="text" class="form-control" name="working_since"/>
                      </div>

                      <div class="form-group">
                          <label for="prefered_category">Prefered Category:</label>
                          <input type="text" class="form-control" name="prefered_category"/>
                      </div>

                      <div class="form-group">
                        <label for="prefered_level">Prefered Level:</label>
                        <input type="text" class="form-control" name="prefered_level"/>
                      </div>

                      <div class="form-group">
                        <label for="prefered_type">Prefered Type:</label>
                        <input type="text" class="form-control" name="prefered_type"/>
                      </div>

                      <div class="form-group">
                        <label for="prefered_salary_currency">Prefered Salary Currency:</label>
                        <input type="text" class="form-control" name="prefered_salary_currency"/>
                      </div>

                      <div class="form-group">
                          <label for="prefered_salary">Prefered Salary:</label>
                          <input type="text" class="form-control" name="prefered_salary"/>
                      </div>

                      <div class="form-group">
                        <label for="prefered_location">Prefered Location:</label>
                        <input type="text" class="form-control" name="prefered_location"/>
                      </div>

                      <div class="form-group">
                          <label for="about_myself">About Myself:</label>
                          <input type="text" class="form-control" name="about_myself"/>
                      </div>

                      <div class="form-group">
                        <label for="gender">Gender:</label>
                        <input type="text" class="form-control" name="gender"/>
                      </div>

                      <div class="form-group">
                        <label for="date_of_birth">Date Of Birth</label>
                        <input type="date" class="form-control" name="date_of_birth"/>
                      </div>

                      <div class="form-group">
                        <label for="core_skills">Core Skills:</label>
                        <input type="text" class="form-control" name="core_skills"/>
                      </div>

                      <div class="form-group">
                        <label for="race">Race:</label>
                        <input type="text" class="form-control" name="race"/>
                      </div>

                      <div class="form-group">
                        <label for="prefered_location2">Prefered Location2:</label>
                        <input type="text" class="form-control" name="prefered_location2"/>
                      </div>

                      <div class="form-group">
                          <label for="prefered_location3">Prefered Location3:</label>
                          <input type="text" class="form-control" name="prefered_location3"/>
                      </div>

                      <div class="form-group">
                        <label for="prefered_industry">Prefered Industry:</label>
                        <input type="text" class="form-control" name="prefered_industry"/>
                      </div>

                      <div class="form-group">
                          <label for="acc_name">Account Name:</label>
                          <input type="text" class="form-control" name="acc_name"/>
                      </div>

                      <div class="form-group">
                        <label for="acc_no">Account Number:</label>
                        <input type="text" class="form-control" name="acc_no"/>
                      </div>

                      <div class="form-group">
                        <label for="bank">Bank:</label>
                        <input type="text" class="form-control" name="bank"/>
                      </div>     

                      <button type="submit" class="btn btn-primary-outline">Submit</button>
                  </form>
              </div>
            </div>
          </div>
         

        </div>

         {{-- Menubar Item 2 --}}
				<div class="tab-pane" id="2">
            <div class="row">
                <div class="col-sm-8 offset-sm-2">
                   <h1 class="display-3">Add Education Data</h1>
                   <div>
                       <a style="margin: 19px;" href="{{ route('candidateeducations.create')}}" class="btn btn-primary">New Account</a>
                   </div>
                 <div>
                   @if ($errors->any())
                     <div class="alert alert-danger">
                       <ul>
                           @foreach ($errors->all() as $error)
                             <li>{{ $error }}</li>
                           @endforeach
                       </ul>
                     </div><br />
                   @endif
                     <form method="post" action="{{ route('candidateeducations.store') }}">
                         @csrf
               
                         <div class="form-group">
                             <label for="degree">Degree:</label>
                             <input type="text" class="form-control" name="degree"/>
                         </div>
               
                         <div class="form-group">
                             <label for="school_type">School Type:</label>
                             <input type="text" class="form-control" name="school_type"/>
                         </div>
               
                         <div class="form-group">
                             <label for="school_name">School Name:</label>
                             <input type="text" class="form-control" name="school_name"/>
                         </div>
               
                         <div class="form-group">
                           <label for="city">City:</label>
                           <input type="text" class="form-control" name="city"/>
                       </div>
               
                         <div class="form-group">
                           <label for="country">Country:</label>
                           <input type="text" class="form-control" name="country"/>
                       </div>
               
                       <div class="form-group">
                           <label for="state">State:</label>
                           <input type="text" class="form-control" name="state"/>
                       </div>
               
                       <div class="form-group">
                           <label for="enrolldate">Enrole Date:</label>
                           <input type="date" class="form-control" name="enrolldate"/>
                       </div>
               
                       <div class="form-group">
                           <label for="still_studying">Still Studying:</label>
                           <input type="text" class="form-control" name="still_studying"/>
                       </div>
               
                       <div class="form-group">
                           <label for="grad_date">Undergraduate Date:</label>
                           <input type="date" class="form-control" name="grad_date"/>
                       </div>
               
                       <div class="form-group">
                           <label for="exp_graddate">Graduate Date:</label>
                           <input type="date" class="form-control" name="exp_graddate"/>
                       </div>
               
                       <div class="form-group">
                           <label for="is_graduated">Is Graduated:</label>
                           <input type="text" class="form-control" name="is_graduated"/>
                       </div>
               
                       <div class="form-group">
                         <label for="lastenrollyear">Last Enrole Year:</label>
                         <input type="date" class="form-control" name="lastenrollyear"/>
                     </div>
               
                     <div class="form-group">
                         <label for="future_study">Future Study:</label>
                         <input type="text" class="form-control" name="future_study"/>
                     </div>
               
                     <div class="form-group">
                         <label for="field_of_study">Fields Of Study:</label>
                         <input type="text" class="form-control" name="field_of_study"/>
                     </div>
               
                         <button type="submit" class="btn btn-primary-outline">Submit</button>
                     </form>
                 </div>
               </div>
               </div>
        </div>

         {{-- Menubar Item 3 --}}
        <div class="tab-pane" id="3">
            <div class="row">
                <div class="col-sm-8 offset-sm-2">
                   <h1 class="display-3">Add Application Data</h1>
                   <div>
                       <a style="margin: 19px;" href="{{ route('candidate_applications.create')}}" class="btn btn-primary">New Application</a>
                   </div>
                 <div>
                   @if ($errors->any())
                     <div class="alert alert-danger">
                       <ul>
                           @foreach ($errors->all() as $error)
                             <li>{{ $error }}</li>
                           @endforeach
                       </ul>
                     </div><br />
                   @endif
                     <form method="post" action="{{ route('candidate_applications.store') }}">
                         @csrf
               
                   {{--  
                       <div class="form-group">
                             <label for="status">Status:</label>
                             <input type="text" class="form-control" name="status"/>
                         </div>
               
                         <div class="form-group">
                             <label for="emp_status">Employee Status:</label>
                             <input type="text" class="form-control" name="emp_status"/>
                         </div>
               
                         <div class="form-group">
                             <label for="interview_status">Interview Status:</label>
                             <input type="school_name" class="form-control" name="interview_status"/>
                         </div>
               
                         <div class="form-group">
                           <label for="final_status">Final Status:</label>
                           <input type="text" class="form-control" name="final_status"/>
                       </div>
                       
                   --}}
               
                       <div class="form-group">
                           <label for="emp_action_by">Employee Action By:</label>
                           <input type="text" class="form-control" name="emp_action_by"/>
                       </div>
               
                       <div class="form-group">
                           <label for="emp_action_at">Employee Action At:</label>
                           <input type="date" class="form-control" name="emp_action_at"/>
                       </div>
               
                       <div class="form-group">
                           <label for="cand_action_at">Candidate Action At:</label>
                           <input type="date" class="form-control" name="cand_action_at"/>
                       </div>
               
                         <button type="submit" class="btn btn-primary-outline">Submit</button>
                     </form>
                 </div>
               </div>
               </div>
        </div>

         {{-- Menubar Item 4 --}}
         <div class="tab-pane" id="4">
            <div class="row">
                <div class="col-sm-8 offset-sm-2">
                   <h1 class="display-3">Add Language Data</h1>
                   <div>
                       <a style="margin: 19px;" href="{{ route('candidate_languages.create')}}" class="btn btn-primary">New Account</a>
                   </div>
                 <div>
                   @if ($errors->any())
                     <div class="alert alert-danger">
                       <ul>
                           @foreach ($errors->all() as $error)
                             <li>{{ $error }}</li>
                           @endforeach
                       </ul>
                     </div><br />
                   @endif
                     <form method="post" action="{{ route('candidate_languages.store') }}">
                         @csrf
               
                         <div class="form-group">
                             <label for="language_code">Language Code:</label>
                             <input type="text" class="form-control" name="language_code"/>
                         </div>
               
                         <div class="form-group">
                             <label for="spoken_level">Spoken Level:</label>
                             <input type="text" class="form-control" name="spoken_level"/>
                         </div>
               
                         <div class="form-group">
                             <label for="written_level">Written Level:</label>
                             <input type="text" class="form-control" name="written_level"/>
                         </div>
               
                         <div class="form-group">
                           <label for="default">Default:</label>
                           <input type="text" class="form-control" name="default"/>
                       </div>
               
               
               
                         <button type="submit" class="btn btn-primary-outline">Submit</button>
                     </form>
                 </div>
                 </div>
               </div>
         
          </div>

           {{-- Menubar Item 5 --}}
        <div class="tab-pane" id="5">
            <div class="row">
                <div class="col-sm-8 offset-sm-2">
                   <h1 class="display-3">Add Work Experience</h1>
                   <div>
                       <a style="margin: 19px;" href="{{ route('candidateworkexps.create')}}" class="btn btn-primary">New Data</a>
                   </div>
                 <div>
                   @if ($errors->any())
                     <div class="alert alert-danger">
                       <ul>
                           @foreach ($errors->all() as $error)
                             <li>{{ $error }}</li>
                           @endforeach
                       </ul>
                     </div><br />
                   @endif
                     <form method="post" action="{{ route('candidateworkexps.store') }}">
                         @csrf
               
                         <div class="form-group">
                             <label for="employername">Employer Name:</label>
                             <input type="text" class="form-control" name="employername"/>
                         </div>
               
                         <div class="form-group">
                             <label for="industry">Industry:</label>
                             <input type="text" class="form-control" name="industry"/>
                         </div>
               
                         <div class="form-group">
                           <label for="city">City:</label>
                           <input type="text" class="form-control" name="city"/>
                       </div>
               
                       <div class="form-group">
                           <label for="country">Country:</label>
                           <input type="text" class="form-control" name="country"/>
                       </div>
               
                       <div class="form-group">
                         <label for="state">State:</label>
                         <input type="text" class="form-control" name="state"/>
                     </div>
               
                     <div class="form-group">
                         <label for="position">Position:</label>
                         <input type="text" class="form-control" name="position"/>
                     </div>
               
                     <div class="form-group">
                       <label for="start_date">Start Date:</label>
                       <input type="date" class="form-control" name="start_date"/>
                   </div>
               
                   <div class="form-group">
                       <label for="end_date">End Date:</label>
                       <input type="date" class="form-control" name="end_date"/>
                   </div>
               
                   <div class="form-group">
                     <label for="still_working">Still Working:</label>
                     <input type="text" class="form-control" name="still_working"/>
                 </div>
               
                 <div class="form-group">
                     <label for="salary">Salary:</label>
                     <input type="text" class="form-control" name="salary"/>
                 </div>
               
                         
               
                         <button type="submit" class="btn btn-primary-outline">Submit</button>
                     </form>
                 </div>
               </div>
               </div>
        </div>

           {{-- Menubar Item 6 --}}
        <div class="tab-pane" id="6">
            <div class="row">
                <div class="col-sm-8 offset-sm-2">
                   <h1 class="display-3">Add Preperence Data</h1>
                   <div>
                       <a style="margin: 19px;" href="{{ route('candidatepreferences.create')}}" class="btn btn-primary">New Account</a>
                   </div>
                 <div>
                   @if ($errors->any())
                     <div class="alert alert-danger">
                       <ul>
                           @foreach ($errors->all() as $error)
                             <li>{{ $error }}</li>
                           @endforeach
                       </ul>
                     </div><br />
                   @endif
                     <form method="post" action="{{ route('candidatepreferences.store') }}">
                         @csrf
                         <div class="form-group">
                             <label for="specialization">Specialization:</label>
                             <input type="text" class="form-control" name="specialization"/>
                         </div>
               
                         <div class="form-group">
                             <label for="location_country">Country:</label>
                             <input type="text" class="form-control" name="location_country"/>
                         </div>
               
                         <div class="form-group">
                           <label for="location_state">State:</label>
                           <input type="text" class="form-control" name="location_state"/>
                       </div>
               
                       <div class="form-group">
                           <label for="salary_currency">Salary Currency:</label>
                           <input type="text" class="form-control" name="salary_currency"/>
                       </div>
               
                       <div class="form-group">
                         <label for="salary_amount">Salary Amount:</label>
                         <input type="text" class="form-control" name="salary_amount"/>
                     </div>
                        
                   
                         <button type="submit" class="btn btn-primary-outline">Submit</button>
                     </form>
                 </div>
               </div>
               </div>
        </div>
        
      </div> 
      
    </div>

  </div>
  {{-- End Menubar --}}

  
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  

@endsection

<div class="col-sm-12">

    @if(session()->get('success'))
      <div class="alert alert-success">
        {{ session()->get('success') }}
      </div>
    @endif
  </div>

 