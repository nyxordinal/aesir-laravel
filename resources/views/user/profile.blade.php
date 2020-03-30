@extends('layouts.main')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Your Profile</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">User Profile</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">

                    <!-- Profile Image -->
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle" src="{{ asset('img/user.jpg') }}"
                                    alt="User profile picture">
                            </div>
                            <h3 class="profile-username text-center">{{ Auth::user()->name }}</h3>
                            <p class="text-muted text-center">{{ Auth::user()->job }}</p>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header p-2">
                            <ul class="nav nav-pills">
                                <li class="nav-item"><a class="nav-link active" href="#profile"
                                        data-toggle="tab">Profile</a>
                                <li class="nav-item"><a class="nav-link" href="#account" data-toggle="tab">Account</a>
                                </li>
                                </li>
                            </ul>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="active tab-pane" id="profile">
                                    <form class="form-horizontal" method="POST"
                                        action="{{ route('profile.update.submit') }}">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="name" name="name"
                                                    placeholder="Your Name" value="{{ Auth::user()->name }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="job" class="col-sm-2 col-form-label">Job</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="job" name="job"
                                                    placeholder="Your job" value="{{ Auth::user()->job }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="offset-sm-2 col-sm-10">
                                                <button type="submit" class="btn btn-danger">Update Profile</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.tab-pane -->
                                <div class="tab-pane" id="account">
                                    <form class="form-horizontal" method="POST"
                                        action="{{ route('account.email.change.submit') }}">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group row">
                                            <label for="activeEmail" class="col-sm-2 col-form-label">Active
                                                Email</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control" id="activeEmail"
                                                    value="{{ Auth::user()->email }}" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="email" class="col-sm-2 col-form-label">New Email</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control" id="email" placeholder="Email"
                                                    name="email">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="emailConfirm" class="col-sm-2 col-form-label">Confirm
                                                Email</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control" id="emailConfirm"
                                                    placeholder="Confirm your email" name="email_confirmation">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="offset-sm-2 col-sm-10">
                                                <button type="submit" class="btn btn-danger">Change Email</button>
                                            </div>
                                        </div>
                                    </form>
                                    <hr>
                                    <form class="form-horizontal" method="POST"
                                        action="{{ route('account.password.change.submit') }}">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group row">
                                            <label for="password" class="col-sm-2 col-form-label">Password</label>
                                            <div class="col-sm-10">
                                                <input type="password" class="form-control" id="password"
                                                    placeholder="Type your new password" name="password">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="passwordConfirm" class="col-sm-2 col-form-label">Confirm
                                                Email</label>
                                            <div class="col-sm-10">
                                                <input type="password" class="form-control" id="passwordConfirm"
                                                    placeholder="Confirm your new password"
                                                    name="password_confirmation">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="offset-sm-2 col-sm-10">
                                                <button type="submit" class="btn btn-danger">Change Password</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.tab-pane -->
                            </div>
                            <!-- /.tab-content -->
                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.nav-tabs-custom -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
@section('script')
<script type="text/javascript">
    $(function () {
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
    });

    var errors = {!! json_encode($errors -> all())!!};
    if (errors.length > 0) {
        errors.forEach(element => {
            Toast.fire({
                type: 'error',
                title: element
            })
        });
    }


    var success = '{{ session('success') }}';
    if (success) {
        Toast.fire({
            type: 'success',
            title: '{{ session('success') }}'
            });
        console.log('hehe');
    }
});
</script>
@endsection
