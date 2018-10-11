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
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Name</th>
                                <th>Images</th>
                                <th>Price</th>
                                <th>Quantity</th>    
                                <th>Category</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $item)
                            <tr class="odd gradeX" align="center">
                                <td>{{$item->id}}</td>
                                <td>{{$item->name}}</td>
                                <td>
                                     @if(count($item->images) == 0)
                                    <a href="#"><img src="{{asset('storage/images/No_Image_Available.png')}}"></a>
                                    @else
                                     <img src="{{asset('storage/'.$item  ->images[0]->images_url)}}" width="80px" height="50px">
                                    @endif
                                   
                                </td>
                                <td>{{$item->price}}</td>
                                <td>{{$item->quantity}}</td>
                                <td>{{$item->category->name}}</td>
                                <td class="center">
                                    <button type="button" value="{{$item->id}}" class="btn btn-danger">
                                        <i class="fa fa-trash-o  fa-fw" style="color:black"></i>
                                    </button>                                  
                                </td>
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
            var button = $('.btn-danger');
            button.click(function(){
                if (confirm("Do you want to delete?")) {
                    var url = '{{ route("products.destroy", ":id") }}';
                    url = url.replace(':id', $(this).val());
                    window.location.href=url;
                }
            });
        });
</script>
    @endsection
