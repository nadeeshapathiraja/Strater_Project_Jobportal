@extends('Common.base')

@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Create New Job</h1>
    <div>
        <a style="margin: 19px;" href="{{ route('employerjobposts.create')}}" class="btn btn-primary">New Job</a>
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

      <form method="post" action="{{ route('employerjobposts.store') }}">
        @csrf                                                                                                                
          {{-- {{ csrf_field() }} --}}
          
          {{-- {{ --Image-- }}
          <div class="form-group">
              <label for="image">Image:</label>
              <input type="file" class="form-control" name="image"/>
          </div> --}}

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
@endsection

