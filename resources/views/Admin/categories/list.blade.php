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
                        <td class="center"><i   ></i>
                            <form action="{{route('categories.destroy', $item->id)}}" method="POST">
                                {!! csrf_field() !!}
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit">Delete</button>
                            </form>
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

@endsection