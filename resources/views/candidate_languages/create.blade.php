@extends('Common.base')

@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Create New Account</h1>
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
@endsection

