@extends('Admin.layouts.index')
@section('content')

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Product
                            <small>Add</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-body" style="background-color: #ecf0f1; color:#27ae60;">
                                    <form action="" method="POST" role="form" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <label for="input-id">Category</label>
                                            <select name="category_id"  required class="form-control">
                                                <option value=""></option>
                                                @foreach($categories as $dt)
                                                    <option value="{!!$dt->id!!}" >{{$dt->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="input-id">Name</label>
                                            <input type="text" name="name"  class="form-control" value="{{ old('name') }}"  >
                                        </div>
                                        <div class="form-group">
                                            <label for="input-id">Intro</label>
                                            <input type="text" name="intro"  class="form-control" value="{{ old('intro') }}" required="required">
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                                    Image : <input type="file" name="img[]" multiple id="inputImg"  class="form-control" required="required">
                                                </div>
                                                <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
                                                    Price : <input type="number" name="price"  class="form-control" value="{{ old('price') }}" required="required">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="input-id"> Product Details</label>
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                                    Cpu : <input type="text" name="cpu"  value="{{ old('Cpu') }}" class="form-control" >
                                                </div>
                                                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                                                    RAM : <input type="text" name="ram"  value="{{ old('ram') }}" class="form-control" >
                                                </div>
                                                <div class="col-xs-12 col-sm-3 col-md-2 col-lg-2">
                                                    Storage      : <input type="text" name="storage"  value="{{ old('storage') }}" class="form-control" >
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                                    Screen : <input type="text" name="screen"  value="{{ old('screen') }}" class="form-control" >
                                                </div>
                                                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                                    Screen Card : <input type="text" name="screenCard"  value="{{ old('screenCard') }}" class="form-control" >
                                                </div>
                                                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                                    VGA : <input type="text" name="vga"  value="{{ old('vga') }}" class="form-control">
                                                </div>
                                                <div class="col-xs-12 col-sm-2 col-md-3 col-lg-3">
                                                    Cam <input type="text" name="cam" value="{{ old('cam') }}" class="form-control" >
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                                    Connect : <input type="text" name="connect" value="{{ old('connect') }}" class="form-control">
                                                </div>
                                                <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
                                                    PIN : <input type="text" name="pin"  value="{{ old('pin') }}" class="form-control" >
                                                </div>
                                                <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
                                                    OS : <input type="text" name="OS"  value="{{ old('OS') }}" class="form-control" >
                                                </div>
                                            </div>
                                        </div>

                                        <input type="submit"  class="btn btn-primary" value="Add product" class="button" />
                                    </form>
                                </div>
                            </div>
                        </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    @endsection
