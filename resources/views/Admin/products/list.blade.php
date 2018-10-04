@extends('Admin.layouts.index')
@section('content')

        <!-- Page Content -->

        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Product
                            <small>List</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table-bordered table-condensed table-hover"  id="">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Name</th>
                                <th>Intro</th>
                                <th>Images</th>
                                <th>Price</th>
                                <th>Cpu</th>
                                <th>Ram</th>
                                <th>Screen</th>
                                <th>ScreenCard</th>
                                <th>VGA</th>
                                <th>Storage</th>
                                <th>Cam</th>
                                <th>Connect</th>
                                <th>Pin</th>
                                <th>OS</th>
                                <th>Category</th>
                                <th>Status</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $item)
                            <tr class="odd gradeX" align="center">
                                <td>{{$item->id}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->intro}}</td>
                                <td><img src="{{asset('storage/'.$item  ->images[0]->images_url)}}" width="80px" height="50px"></td>
                                <td>{{$item->price}}</td>
                                <td>{{$item->cpu}}</td>
                                <td>{{$item->ram}}</td>
                                <td>{{$item->screen}}</td>
                                <td>{{$item->screenCard}}</td>
                                <td>{{$item->vga}}</td>
                                <td>{{$item->storage}}</td>
                                <td>{{$item->cam}}</td>
                                <td>{{$item->connect}}</td>
                                <td>{{$item->pin}}</td>
                                <td>{{$item->OS}}</td>
                                <td>{{$item->category->name}}</td>
                                <td>{{$item->status}}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="#">Edit</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
                {{ $products->links() }}
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    @endsection
