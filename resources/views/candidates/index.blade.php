@extends('base')

@section('main')
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Candidate Details</h1>
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>First Name</td>
          <td>Last Name</td>
          <td>Email</td>
          <td>Password</td>
          <td>Job Title</td>
          <td>City</td>
          <td>Country</td>
          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($candidates as $candidate)
        <tr>
            <td>{{$candidate->id}}</td>
            <td>{{$candidate->first_name}}</td>
            <td>{{$candidate->last_name}}</td>
            <td>{{$candidate->email}}</td>
            <td>{{$candidate->password}}</td>
            <td>{{$candidate->job_title}}</td>
            <td>{{$candidate->city}}</td>
            <td>{{$candidate->country}}</td>
            <td>
                <button> <a href="{{ route('candidates.edit',$candidate->id)}}" class="btn btn-primary">Edit</a></button>
            </td>
            <td>
                <form action="{{ route('candidates.destroy', $candidate->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>
@endsection

<div class="col-sm-12">

    @if(session()->get('success'))
      <div class="alert alert-success">
        {{ session()->get('success') }}
      </div>
    @endif
  </div>
