@extends('Common.base')
@section('main')

<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update Candidate</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br />
        @endif
        <form method="post" action="{{ route('candidateprofiles.update', $candidateprofile->candidate_profile_id) }}">
            @method('PATCH')
            @csrf

                {{-- <div class="form-group">
                    <label for="image">Image:</label>
                    <input type="file" class="form-control" name="image" value={{ $candidateProfile->image }}/>
                </div> --}}
                <div class="form-group">
                  <label for="first_name">First Name:</label>
                  <input type="text" class="form-control" name="first_name" value={{ $candidateprofile->first_name }}/>
                </div>
      
                <div class="form-group">
                    <label for="last_name">Last Name:</label>
                    <input type="text" class="form-control" name="last_name" value={{ $candidateprofile->last_name }}/>
                </div>
      
                <div class="form-group">
                  <label for="mobile">Mobile:</label>
                  <input type="text" class="form-control" name="mobile" value={{ $candidateprofile->mobile }}/>
                </div>
      
                <div class="form-group">
                    <label for="telephone">Telephone Number:</label>
                    <input type="text" class="form-control" name="telephone" value={{ $candidateprofile->telephone }}/>
                </div>
      
                <div class="form-group">
                  <label for="address1">Address 1:</label>
                  <input type="text" class="form-control" name="address1" value={{ $candidateprofile->address1 }}/>
                </div>
      
                <div class="form-group">
                  <label for="address2">Address 2:</label>
                  <input type="text" class="form-control" name="address2" value={{ $candidateprofile->address2 }}/>
                </div>
      
                <div class="form-group">
                  <label for="city">City:</label>
                  <input type="text" class="form-control" name="city" value={{ $candidateprofile->city }}/>
                </div>
      
                <div class="form-group">
                    <label for="state">State:</label>
                    <input type="text" class="form-control" name="state" value={{ $candidateprofile->state }}/>
                </div>
      
                <div class="form-group">
                  <label for="country">Country:</label>
                  <input type="text" class="form-control" name="country" value={{ $candidateprofile->country }}/>
                </div>
      
                <div class="form-group">
                    <label for="zipcode">Zip Code:</label>
                    <input type="text" class="form-control" name="zipcode" value={{ $candidateprofile->zipcode }}/>
                </div>
      
                <div class="form-group">
                  <label for="fresh_graduate">Fresh Graduate:</label>
                  <input type="text" class="form-control" name="fresh_graduate" value={{ $candidateprofile->fresh_graduate }}/>
                </div>
      
                <div class="form-group">
                  <label for="nationality">Nationality</label>
                  <input type="text" class="form-control" name="nationality" value={{ $candidateprofile->nationality }}/>
                </div>
      
                <div class="form-group">
                  <label for="country_residingin">Country Residingin:</label>
                    <label for="state_residingin">State Residingin:</label>
                    <input type="text" class="form-control" name="state_residingin" value={{ $candidateprofile->state_residingin }}/>
                </div>
      
                <div class="form-group">
                  <label for="working_since">Working since:</label>
                  <input type="text" class="form-control" name="working_since" value={{ $candidateprofile->working_since }}/>
                </div>
      
                <div class="form-group">
                    <label for="prefered_category">Prefered Category:</label>
                    <input type="text" class="form-control" name="prefered_category" value={{ $candidateprofile->prefered_category }}/>
                </div>
      
                <div class="form-group">
                  <label for="prefered_level">Prefered Level:</label>
                  <input type="text" class="form-control" name="prefered_level" value={{ $candidateprofile->prefered_level }}/>
                </div>
      
                <div class="form-group">
                  <label for="prefered_type">Prefered Type:</label>
                  <input type="text" class="form-control" name="prefered_type" value={{ $candidateprofile->prefered_type }}/>
                </div>
      
                <div class="form-group">
                  <label for="prefered_salary_currency">Prefered Salary Currency:</label>
                  <input type="text" class="form-control" name="prefered_salary_currency" value={{ $candidateprofile->prefered_salary_currency }}/>
                </div>
      
                <div class="form-group">
                    <label for="prefered_salary">Prefered Salary:</label>
                    <input type="text" class="form-control" name="prefered_salary" value={{ $candidateprofile->prefered_salary }}/>
                </div>
      
                <div class="form-group">
                  <label for="prefered_location">Prefered Location:</label>
                  <input type="text" class="form-control" name="prefered_location" value={{ $candidateprofile->prefered_location }}/>
                </div>
      
                <div class="form-group">
                    <label for="about_myself">About Myself:</label>
                    <input type="text" class="form-control" name="about_myself" value={{ $candidateprofile->about_myself }}/>
                </div>
      
                <div class="form-group">
                  <label for="gender">Gender:</label>
                  <input type="text" class="form-control" name="gender" value={{ $candidateprofile->gender }}/>
                </div>
      
                <div class="form-group">
                  <label for="date_of_birth">Date Of Birth</label>
                  <input type="date" class="form-control" name="date_of_birth" value={{ $candidateprofile->date_of_birth }}/>
                </div>
      
                <div class="form-group">
                  <label for="core_skills">Core Skills:</label>
                  <input type="text" class="form-control" name="core_skills" value={{ $candidateprofile->core_skills }}/>
                </div>
      
                <div class="form-group">
                  <label for="race">Race:</label>
                  <input type="text" class="form-control" name="race" value={{ $candidateprofile->race }}/>
                </div>
      
                <div class="form-group">
                  <label for="prefered_location2">Prefered Location2:</label>
                  <input type="text" class="form-control" name="prefered_location2" value={{ $candidateprofile->prefered_location2 }}/>
                </div>
      
                <div class="form-group">
                    <label for="prefered_location3">Prefered Location3:</label>
                    <input type="text" class="form-control" name="prefered_location3" value={{ $candidateprofile->prefered_location3 }}/>
                </div>
      
                <div class="form-group">
                  <label for="prefered_industry">Prefered Industry:</label>
                  <input type="text" class="form-control" name="prefered_industry" value={{ $candidateprofile->prefered_industry }}/>
                </div>
      
                <div class="form-group">
                    <label for="acc_name">Account Name:</label>
                    <input type="text" class="form-control" name="acc_name" value={{ $candidateprofile->acc_name }}/>
                </div>
      
                <div class="form-group">
                  <label for="acc_no">Account Number:</label>
                  <input type="text" class="form-control" name="acc_no" value={{ $candidateprofile->acc_no }}/>
                </div>
      
                <div class="form-group">
                  <label for="bank">Bank:</label>
                  <input type="text" class="form-control" name="bank" value={{ $candidateprofile->bank }}/>
                </div>

            
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection
