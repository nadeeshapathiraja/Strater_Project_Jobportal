@extends('Common.base')

@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Work Experience</h1>
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
@endsection

