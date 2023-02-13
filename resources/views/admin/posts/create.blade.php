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
                        <form action="{{route('admin.posts.store')}}" method="POST" enctype="multipart/form-data">
                            @method('POST')
                            @csrf
                            <div class="form-group w-25">
                                <label>Title</label>
                                <input type="text" class="form-control" name="title" placeholder="title post"
                                       value="{{old('title')}}">
                                @error('title')
                                <div class="text-danger mb-3">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group w-50">
                                <textarea id="summernote" name="content">{{old('content')}}</textarea>
                                @error('content')
                                <div class="text-danger mb-3">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group w-50">
                                <label for="exampleInputFile">Add preview</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="exampleInputFile" name="preview_image">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                </div>
                                @error('preview_image')
                                <div class="text-danger mb-3">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group w-50">
                                <label for="exampleInputFile">Add main image</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="exampleInputFile" name="main_image">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                </div>
                                @error('main_image')
                                <div class="text-danger mb-3">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group w-50">
                                <label>Categories</label>
                                <select name="category_id" class="form-control">
                                    <option selected disabled>Choose categories</option>
                                    @foreach($categories as $category)
                                    <option value="{{$category->id}}" {{$category->id == old('category_id')?'selected':''}}>{{$category->title}}</option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                <div class="text-danger mb-3">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Tags</label>
                                <select class="select2" name="tag_ids[]" multiple="multiple" data-placeholder="Select a tags" style="width: 50%;">
                                    @foreach($tags as $tag)
                                    <option {{ is_array( old('tag_ids') ) && in_array( $tag->id, old('tag_ids') ) ? ' selected' : ''}} value="{{$tag->id}}">{{$tag->title}}</option>
                                    @endforeach
                                </select>
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
