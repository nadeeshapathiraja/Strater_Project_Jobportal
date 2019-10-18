@extends('base')

@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Create New Account</h1>
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
@endsection

