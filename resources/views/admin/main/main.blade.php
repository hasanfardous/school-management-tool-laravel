@extends('admin.master')


@section('title')

  Welcome to School Management Tool

@endsection

<!-- Content Header (Page header) -->
@section('content')
  <section class="content-header">
    <h1>
      All Users
      <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{route('administrator')}}"><i class="fa fa-dashboard"></i> Users</a></li>
      <li class="active">All Users</li>
    </ol>
  </section>
@endsection

@section('content-full')
<!-- All Blogs -->
<div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title">All Users</h3>
        
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
                    <th>Username</th>
                    <th>Email</th>
                    <th>Roles</th>
                    <th>Status</th>
                    <th class="text-right">Action</th>
                </tr>
            </thead>
            <tbody>
                @if( count($users) == 0 )
                <tr>
                    <td colspan="7"><h2 class="text-danger text-center">No User Found!!</h2></td>
                </tr>
                @else
                    @php
                        $i = 1;
                    @endphp
                    @foreach( $users as $user )
                    <tr>
                        <td><a href="#">{{ $i++ }}</a></td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            @foreach($user->getRoleNames() as $v)
                                <span class="label label-success">{{$v}}</span>
                            @endforeach
                        
                        </td>
                        <td>
                            <span class="label {{ $user->status == 0 ? 'label-warning' : 'label-success' }}">{{ $user->status == 0 ? 'Pending' : 'Approved' }}</span>
                        </td>
                        <td class="text-right">
                            <a href="{{ route('edit-user', ['id' => $user->id]) }}"><span class="label label-warning">Edit</span></a>
                            <a href="{{ route('delete-user', ['id' => $user->id]) }}"><span class="label label-danger" onclick="return confirm('Are you sure, to delete this item?')">Delete</span></a>
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
        <a href="{{ route('add-new-user') }}" class="btn btn-sm btn-info btn-flat pull-left">Add New User</a>
        {{ $users->links() }}
        <!-- <a href="javascript:void(0)" class="btn btn-sm btn-default btn-flat pull-right">View All Orders</a> -->
    </div>
    <!-- /.box-footer -->
</div>
<!-- /.box -->
@endsection    