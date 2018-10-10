@extends('Admin.layouts.index')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Category
                    <small>Add</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-12" style="padding-bottom:120px">
                @if(count($errors)>0)
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $err)
                            {{$err}}<br>
                        @endforeach
                    </div>
                @endif
                @if(session('message'))
                    <div class="alert alert-danger">
                        {{session('message')}}
                    </div>
                @endif
                <form action="{{route('products.add')}}" method="POST" role="form" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group col-md-4 ">
                        <label>Category<span style="color: red">*</span></label>
                        <select class="form-control" name="category_id">
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    
                    <div class="form-group col-md-4">
                        <label for="input-id">Name <span style="color: red">*</span></label>
                        <input type="text" name="name"  class="form-control" value="{{ old('name') }}"  >
                    </div>
                     <div class="form-group col-md-4">
                        <label for="input-id">Intro <span style="color: red">*</span></label>
                        <input type="text" name="intro"  class="form-control" value="{{ old('intro') }}"  >
                    </div>
                    <div class="form-group col-md-4">
                        <label for="input-id">Quantity<span style="color: red">*</span></label>
                        <input type="number" name="quantity"  class="form-control" value="{{ old('quantity') }}"  >
                    </div>
                    <div class="form-group col-md-4">
                        <label for="input-id">Price <span style="color: red">*</span></label>
                        <input type="number" name="price"  class="form-control" value="{{ old('price') }}"  >
                    </div>
                     <div class="form-group col-md-4">
                        <label for="input-id">CPU <span style="color: red">*</span></label>
                        <input type="text" name="cpu"  class="form-control" value="{{ old('cpu') }}"  >
                    </div>
                    <div class="form-group col-md-4">
                        <label for="input-id">Ram <span style="color: red">*</span></label>
                        <input type="text" name="ram"  class="form-control" value="{{ old('ram') }}"  >
                    </div>
                    <div class="form-group col-md-4">
                        <label for="input-id">Screen <span style="color: red">*</span></label>
                        <input type="text" name="screen"  class="form-control" value="{{ old('screen') }}"  >
                    </div>
                    <div class="form-group col-md-4">
                        <label for="input-id">SceenCard <span style="color: red">*</span></label>
                        <input type="text" name="screenCard"  class="form-control" value="{{ old('screenCard') }}"  >
                    </div>
                    <div class="form-group col-md-4">
                        <label for="input-id">Storage <span style="color: red">*</span></label>
                        <input type="text" name="storage"  class="form-control" value="{{ old('storage') }}"  >
                    </div>
                     <div class="form-group col-md-4">
                        <label for="input-id">Weight<span style="color: red">*</span></label>
                        <input type="text" name="weight"  class="form-control" value="{{ old('weight') }}"  >
                    </div>
                     <div class="form-group col-md-4">
                        <label for="input-id">Size<span style="color: red">*</span></label>
                        <input type="text" name="size"  class="form-control" value="{{ old('size') }}"  >
                    </div>
                     <div class="form-group col-md-4">
                        <label for="input-id">Connect <span style="color: red">*</span></label>
                        <input type="text" name="connect"  class="form-control" value="{{ old('connect') }}"  >
                    </div>
                     <div class="form-group col-md-4">
                        <label for="input-id">PIN <span style="color: red">*</span></label>
                        <input type="text" name="pin"  class="form-control" value="{{ old('pin') }}"  >
                    </div>
                     <div class="form-group col-md-4">
                        <label for="input-id">OS <span style="color: red">*</span></label>
                        <input type="text" name="OS"  class="form-control" value="{{ old('OS') }}"  >
                    </div>
                    <div class="form-group col-md-4">
                        <label for="input-id">Image<span style="color: red">*</span></label>
                        <input type="file" type="file" name="images[]" multiple required="">
                    </div>

                    <input type="submit"  class="btn btn-primary col-md-12" value="Add product" class="button" />
                </form>            
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

@endsection