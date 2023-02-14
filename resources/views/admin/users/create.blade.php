@extends('admin.layouts.main')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Adding user</h1>
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
                    <form action="{{route('admin.users.store')}}" class="w-25" method="POST">
                        @method('POST')
                        @csrf
                        <label>Name</label>
                        <input type="text" class="form-control mb-3" name="name" placeholder="name" value="{{old('name')}}">
                        @error('name')
                        <div class="text-danger mb-3">{{ $message }}</div>
                        @enderror
                        <label>Email</label>
                        <input type="text" class="form-control mb-3" name="email" placeholder="email" value="{{old('email')}}">
                        @error('email')
                        <div class="text-danger mb-3">{{ $message }}</div>
                        @enderror
                        <div class="form-group">
                            <label>Role</label>
                            <select name="role" class="form-control">
                                <option selected disabled>Choose role</option>
                                @foreach($roles as $id => $role)
                                    <option value="{{$id}}" {{$id == old('role')?'selected':''}}>{{$role}}</option>
                                @endforeach
                            </select>
                            @error('role')
                            <div class="text-danger mb-3">{{ $message }}</div>
                            @enderror
                        </div>
                        <input type="submit" value="Add" class="btn btn-outline-primary">
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
