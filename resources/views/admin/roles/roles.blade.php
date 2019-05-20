@extends('admin.master')


@section('title')

  All Roles

@endsection

<!-- Content Header (Page header) -->
@section('content')
  <section class="content-header">
    <h1>
      All Roles
      <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{route('administrator')}}"><i class="fa fa-dashboard"></i> Roles</a></li>
      <li class="active">All Roles</li>
    </ol>
  </section>
@endsection

@section('content-full')
<!-- All Blogs -->
<div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title">All Roles</h3>
        
        <h2 class="text-success">{{ Session::has('success') ? Session::get('success') : '' }}</h2>
        <h2 class="text-danger">{{ Session::has('error') ? Session::get('error') : '' }}</h2>

        <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
        </button>
        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
        </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <div class="table-responsive">
        <table class="table no-margin">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Role Name</th>
                    <!-- <th>Permissions</th> -->
                    <th class="text-right">Action</th>
                </tr>
            </thead>
            <tbody>
                @if( count($roles) == 0 )
                <tr>
                    <td colspan="3"><h2 class="text-danger text-center">No Role Found!!</h2></td>
                </tr>
                @else
                    @php
                        $i = 1;
                    @endphp
                    @foreach( $roles as $role )
                    <tr>
                        <td><a href="#">{{ $i++ }}</a></td>
                        <td>{{ $role->name }}</td>
                        
                        <td class="text-right">
                            <a href="{{ route('view-role', ['id' => $role->id]) }}" target="_blank"><span class="label label-info">View</span></a>
                            <a href="{{ route('edit-role', ['id' => $role->id]) }}"><span class="label label-warning">Edit</span></a>
                            <a href="{{ route('delete-role', ['id' => $role->id]) }}"><span class="label label-danger" onclick="return confirm('Are you sure, to delete this item?')">Delete</span></a>
                        </td>
                    </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
        </div>
        <!-- /.table-responsive -->
    </div>
    <!-- /.box-body -->
    <div class="box-footer clearfix">
        <a href="{{ route('add-new-role') }}" class="btn btn-sm btn-info btn-flat pull-left">Add New Role</a>
        {{ $roles->links() }}
        <!-- <a href="javascript:void(0)" class="btn btn-sm btn-default btn-flat pull-right">View All Orders</a> -->
    </div>
    <!-- /.box-footer -->
</div>
<!-- /.box -->
@endsection    