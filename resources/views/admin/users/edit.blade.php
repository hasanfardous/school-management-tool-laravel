@extends('admin.master')


@section('title')

  Edit User

@endsection

<!-- Content Header (Page header) -->
@section('content')
  <section class="content-header">
    <h1>
    Edit User
      <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{ route('administrator') }}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Edit User</li>
    </ol>
  </section>
@endsection

@section('dashboard-left-item')

<div class="box box-info">
  <div class="box-header">
    <i class="fa fa-pencil-square-o"></i>

    <h3 class="box-title">Edit User</h3>
    <!-- tools box -->
    <div class="pull-right box-tools">
      <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"
              title="Remove">
        <i class="fa fa-times"></i></button>
    </div>
    <!-- /. tools -->
  </div>
  <div class="box-body">
    <form method="POST" action="{{ route('update-user', ['id' => $user->id]) }}">
        @csrf
      <div class="form-group">
        <input type="text" class="form-control" value="{{ $user->name }}" name="name" placeholder="User Name">
      </div>

      <div class="form-group">
        <input type="email" class="form-control" value="{{ $user->email }}" name="email" placeholder="User Email">
      </div>

      <div class="form-group">
        <label>Select User Role</label>
        <select class="form-control" name="user_role">
          @if(count($roles) == 0)
            <option>No Roles Found!! Please make Role first!</option>
          @else

            @foreach($roles as $role)
              <option value="{{$role}}" {{ $user->hasRole($role) ? 'selected' : '' }}>{{$role}}</option>
            @endforeach

          @endif
        </select>
      </div>

      <div class="box-footer clearfix">
        <button type="submit" class="pull-right btn btn-default" name="save" id="save">Save
          <i class="fa fa-arrow-circle-right"></i></button>
      </div>
    </form>
  </div>
</div>
@endsection