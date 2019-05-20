@extends('admin.master')


@section('title')

  Create Role

@endsection

<!-- Content Header (Page header) -->
@section('content')
  <section class="content-header">
    <h1>
    Create Role
      <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{ route('administrator') }}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Create Role</li>
    </ol>
  </section>
@endsection

@section('dashboard-left-item')

<div class="box box-info">
  <div class="box-header">
    <i class="fa fa-pencil-square-o"></i>

    <h3 class="box-title">Create Role</h3>
    <!-- tools box -->
    <div class="pull-right box-tools">
      <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"
              title="Remove">
        <i class="fa fa-times"></i></button>
    </div>
    <!-- /. tools -->
  </div>
  <div class="box-body">
    <form method="POST" action="{{ route('store-role') }}">
        @csrf
      <div class="form-group">
        <input type="text" class="form-control" name="role_name" placeholder="Role Name">
        <p class="help-block">Ex. Teacher, Parent, Student</p>
      </div>

      <div class="form-group user-permissions">
        @foreach($permissions as $permission)
        <div class="checkbox">
          <label>
            <input type="checkbox" value="{{$permission->name}}" name="user_permissions[]">
            {{$permission->name}}
          </label>
        </div>
        @endforeach
        
      </div>

      <div class="box-footer clearfix">
        <button type="submit" class="pull-right btn btn-info" name="save" id="save">Save
          <i class="fa fa-arrow-circle-right"></i></button>
      </div>
    </form>
  </div>
</div>
@endsection