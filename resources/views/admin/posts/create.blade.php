@extends('admin.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Adding post</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-12 mb-3">
                        <form action="{{route('admin.posts.store')}}" method="POST">
                            @method('POST')
                            @csrf
                            <div class="form-group w-25">
                                <label>Title</label>
                                <input type="text" class="form-control mb-3" name="title" placeholder="title post"
                                       value="{{old('title')}}">
                                @error('title')
                                <div class="text-danger mb-3">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group w-50">
                                <textarea id="summernote" name="content">{{old('title')}}</textarea>
                                @error('content')
                                <div class="text-danger mb-3">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Add" class="btn btn-outline-primary">
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
