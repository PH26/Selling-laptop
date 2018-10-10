@extends('Admin.layouts.index')

@section('content')
<!-- Page Content -->
    <div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Category
                    <small>List</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
             @if (session('success'))
                    <div class="alert" style="background:#dff0d8; color:#4f844f" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
                 @if (session('error'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('error') }}
                    </div>
                @endif    
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                <tr align="center">
                    <th>ID</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Delete</th>
                    <th>Edit</th>
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $item)
                    <tr class="odd gradeX" align="center">
                    <td>{{$item->id}}</td>                    
                    <td><img src="{{asset('storage/'.$item->img)}}" ></td>
                    <td>{{$item->name}}</td>
                    <td class="center">
                        <button type="button" value="{{$item->id}}" class="btn btn-danger">
                            <i class="fa fa-trash-o  fa-fw" style="color:black"></i>
                        </button>                                  
                    </td>
                    <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{route('categories.edit',$item->id)}}">Edit</a></td>
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
            var url = '{{ route("categories.destroy", ":id") }}';
            url = url.replace(':id', $(this).val());
            window.location.href=url;
        }
    });
});
</script>

@endsection