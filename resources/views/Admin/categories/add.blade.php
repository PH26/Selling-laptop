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
            <div class="col-lg-7" style="padding-bottom:120px">
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
                <form action="" method="POST" role="form" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    
                    <div class="form-group">
                        <label for="input-id">Name</label>
                        <input type="text" name="name"  class="form-control" value="{{ old('name') }}"  >
                    </div>
                    <div class="form-group">
                        <label for="input-id">Image</label>
                        <input type="file" name="img[]"  class="form-control" required="required">
                    </div>

                    <input type="submit"  class="btn btn-primary" value="Add product" class="button" />
                </form>            
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

@endsection