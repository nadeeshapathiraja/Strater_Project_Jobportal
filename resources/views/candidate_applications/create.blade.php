@extends('base')

@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Create New Account</h1>
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
@endsection

