@extends('admin.master')


@section('title')

  Create User

@endsection

<!-- Content Header (Page header) -->
@section('content')
  <section class="content-header">
    <h1>
    Create User
      <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{ route('administrator') }}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Create User</li>
    </ol>
  </section>
@endsection

@section('dashboard-left-item')

<div class="box box-info">
  <div class="box-header">
    <i class="fa fa-pencil-square-o"></i>

    <h3 class="box-title">Create User</h3>
    <!-- tools box -->
    <div class="pull-right box-tools">
      <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"
              title="Remove">
        <i class="fa fa-times"></i></button>
    </div>
    <!-- /. tools -->
  </div>
  <div class="box-body">
    <form method="POST" action="{{ route('store-user') }}">
        @csrf
      <div class="form-group">
        <input type="text" class="form-control" name="name" placeholder="User Name">
      </div>

      <div class="form-group">
        <input type="email" class="form-control" name="email" placeholder="User Email">
      </div>

      <div class="form-group">
        <label>Select User Role</label>
        <select class="form-control" name="user_role">
          @if(count($roles) == 0)
            <option>No Roles Found!! Please make Role first!</option>
          @else

            @foreach($roles as $role)
              <option value="{{$role}}">{{$role}}</option>
            @endforeach

          @endif
        </select>
      </div>

      <!-- <div class="form-group user-permissions">
        <div class="checkbox">
          <label>
            <input type="checkbox" value="can_add_attendance" name="user_permissions[]">
            Can add the attendance
          </label>
        </div>

        <div class="checkbox">
          <label>
            <input type="checkbox" value="can_view_child_profile" name="user_permissions[]">
            Can view child's profile
          </label>
        </div>

        <div class="checkbox">
          <label>
            <input type="checkbox" value="can_view_child_fees" name="user_permissions[]">
            Can view child's fees
          </label>
        </div>

        <div class="checkbox">
          <label>
            <input type="checkbox" value="can_view_child_attendances" name="user_permissions[]">
            Can view child's attendances
          </label>
        </div>

        <div class="checkbox">
          <label>
            <input type="checkbox" value="can_pay_fees" name="user_permissions[]">
            Can pay fees
          </label>
        </div>

        <div class="checkbox">
          <label>
            <input type="checkbox" value="can_view_class_routine" name="user_permissions[]">
            Can view class routine
          </label>
        </div>

        <div class="checkbox">
          <label>
            <input type="checkbox" value="can_view_class_attendances" name="user_permissions[]">
            Can view class attendances
          </label>
        </div>
      </div> -->

      <div class="box-footer clearfix">
        <button type="submit" class="pull-right btn btn-info" name="save" id="save">Save
          <i class="fa fa-arrow-circle-right"></i></button>
      </div>
    </form>
  </div>
</div>
@endsection