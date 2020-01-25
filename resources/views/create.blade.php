@extends('layouts.main')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Create</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Main row -->
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Add New Anime</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form role="form" method="post" action="/create">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-12">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input type="text" name="title" class="form-control" placeholder="Enter ...">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <!-- textarea -->
                                        <div class="form-group">
                                            <label>Genre</label>
                                            <textarea class="form-control" name="genre" rows="2" placeholder="Enter ..."></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="col-form-label" for="inputSuccess">Episode</label>
                                            <input type="number" name="episode" class="form-control is-valid" id="inputSuccess" placeholder="Enter ...">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="col-form-label" for="inputWarning">Airing (From)</label>
                                            <input type="date" name="airfrom" class="form-control is-warning" id="inputWarning" placeholder="Enter ...">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="col-form-label" for="inputError">Airing (Until)</label>
                                            <input type="date" name="airuntil" class="form-control is-invalid" id="inputError" placeholder="Enter ...">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <!-- select -->
                                        <div class="form-group">
                                            <label>Type</label>
                                            <select class="form-control" name="type">
                                                <option value="0">Pilih...</option>
                                                <option value="1">TV</option>
                                                <option value="2">OVA</option>
                                                <option value="3">ONA</option>
                                                <option value="4">OAD</option>
                                                <option value="5">Movie</option>
                                                <option value="6">Special</option>
                                                <option value="7">BD</option>
                                                <option value="8">OVA & BD</option>
                                                <option value="9">ONA & BD</option>
                                                <option value="10">OAD & BD</option>
                                                <option value="11">Movie & BD</option>
                                                <option value="12">Special & BD</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>Status</label>
                                            <select class="form-control" name="status">
                                                <option value="0">Pilih...</option>
                                                <option value="1">Watching</option>
                                                <option value="2">Watched</option>
                                                <option value="3">Plan to Watch</option>
                                                <option value="4">On hold</option>
                                                <option value="5">Dropped</option>
                                                <option value="6">No</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Download Status</label>
                                            <select class="form-control" name="downstatus">
                                                <option value="0">Pilih...</option>
                                                <option value="1">On Process</option>
                                                <option value="2">Completed</option>
                                                <option value="3">Plan to Download</option>
                                                <option value="4">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Resolution</label>
                                            <select class="form-control" name="resolution">
                                                <option value="0">Pilih...</option>
                                                <option value="1">240p</option>
                                                <option value="2">360p</option>
                                                <option value="3">480p</option>
                                                <option value="4">720p</option>
                                                <option value="5">1080p</option>
                                                <option value="6">Else...</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Storage Device</label>
                                            <select class="form-control" name="storage">
                                                <option value="0">Pilih...</option>
                                                <option value="1">MS-1</option>
                                                <option value="2">Harddisk External</option>
                                                <option value="3">Laptop</option>
                                                <option value="4">Else ...</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <!-- textarea -->
                                        <div class="form-group">
                                            <label>Note</label>
                                            <textarea class="form-control" name="note" rows="2" placeholder="Enter ..."></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-primary">Insert</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
