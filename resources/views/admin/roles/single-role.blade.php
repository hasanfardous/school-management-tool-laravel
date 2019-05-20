@extends('admin.master')


@section('title')

  All Feedbacks

@endsection

<!-- Content Header (Page header) -->
@section('content')
  <section class="content-header">
    <h1>
      All Feedbacks
      <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{route('administrator')}}"><i class="fa fa-dashboard"></i> Feedbacks</a></li>
      <li class="active">All Feedbacks</li>
    </ol>
  </section>
@endsection

@section('content-full')
<!-- All Blogs -->
<div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title">All Feedbacks</h3>
        
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
        <table class="table no-margin single-project">
            
                <tr>
                    <th>Id</th>
                    <th class="text-right">Permissions</th>
                </tr>
                @php($i=1)
                @foreach($rolePermissions as $rolePermission)
                    <tr>
                        <td>{{$i++}}</td>
                        <td class="text-right"><span class="label label-success">{{ $rolePermission->name }}</span></td>
                    </tr>
                @endforeach
            
        </table>
        </div>
        <!-- /.table-responsive -->
    </div>
    <!-- /.box-body -->
    <!-- <div class="box-footer clearfix">
        <a href="" class="btn btn-sm btn-info btn-flat pull-left hasan" id="addNewFeedback">Add New Feedback</a>
        
    </div> -->
    <!-- /.box-footer -->
</div>
<!-- /.box -->
@endsection    