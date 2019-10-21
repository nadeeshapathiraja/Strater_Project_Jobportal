@extends('Common.base')

@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Create New Account</h1>
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
@endsection

