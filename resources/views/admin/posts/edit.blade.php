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
                    <form action="{{route('admin.posts.update', $post->id)}}" class="w-25" method="POST">
                        @method('PATCH')
                        @csrf
                        <label>Title</label>
                        <input type="text" class="form-control mb-3" name="title" placeholder="title post " value="{{old('title') ?? $post->title}}">
                        @error('title')
                        <div class="text-danger mb-3">{{ $message }}</div>
                        @enderror
                        <input type="submit" value="update" class="btn btn-outline-primary">
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
