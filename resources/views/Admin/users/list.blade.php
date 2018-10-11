@extends('Admin.layouts.index')
@section('content')

<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">User
                    <small>List</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                <tr align="center">
                    <th>ID</th>
                    <th>Email</th>
                    <th>User_type</th>
                    <th>Active</th>
                    <th>Delete</th>
                    <th>Edit</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $item)
                <tr class="odd gradeX" align="center">
                    <td>{{$item->id}}</td>
                    <td>{{$item->email}}</td>
                    <td>
                        @if($item->user_type == 1)
                            {{"Admin"}}
                        @else
                            {{"User"}}
                        @endif

                    </td>
                    <td>{{$item->active}}
                        @if($item->active == 1)
                            {{"Yes"}}
                        @else
                            {{"No"}}
                        @endif
                    </td>
                    <td class="center">
                        <button type="button" value="{{$item->id}}" class="btn btn-danger">
                            <i class="fa fa-trash-o  fa-fw" style="color:black"></i>
                        </button>                                  
                    </td>
                    <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{route('users.edit', $item->id)}}">Edit</a></td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    var button = $('.btn-danger');
    button.click(function(){
        if (confirm("Do you want to delete?")) {
            var url = '{{ route("users.destroy", ":id") }}';
            url = url.replace(':id', $(this).val());
            window.location.href=url;
        }
    });
});
</script>

@endsection