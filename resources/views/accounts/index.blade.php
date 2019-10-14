@extends('base')

@section('main')
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Account Details</h1>
  <table class="table table-striped">
    <thead>
        <tr>
          <td>Account ID</td>
          <td>First Name</td>
          <td>Last Name</td>
          <td>Email</td>
          <td>Password</td>
          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($accounts as $account)
        <tr>
            <td>{{$account->account_id}}</td>
            <td>{{$account->first_name}}</td>
            <td>{{$account->last_name}}</td>
            <td>{{$account->email}}</td>
            <td>{{$account->password}}</td>
            <td>
                <button> <a href="{{ route('accounts.edit',$account->account_id)}}" class="btn btn-primary">Edit</a></button>
            </td>
            <td>
                <form action="{{ route('accounts.destroy', $account->account_id)}}" method="post">
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
