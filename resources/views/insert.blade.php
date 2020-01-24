@extends('layouts.main')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Insert</h1>
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
                    <div class="card card-warning">
                        <div class="card-header">
                            <h3 class="card-title">Insert New Anime</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form role="form">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input type="text" class="form-control" placeholder="Enter ...">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <!-- textarea -->
                                        <div class="form-group">
                                            <label>Genre</label>
                                            <textarea class="form-control" rows="2" placeholder="Enter ..."></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="col-form-label" for="inputSuccess">Episode</label>
                                            <input type="number" class="form-control is-valid" id="inputSuccess" placeholder="Enter ...">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="col-form-label" for="inputWarning">Airing (From)</label>
                                            <input type="date" class="form-control is-warning" id="inputWarning" placeholder="Enter ...">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="col-form-label" for="inputError">Airing (Until)</label>
                                            <input type="date" class="form-control is-invalid" id="inputError" placeholder="Enter ...">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <!-- select -->
                                        <div class="form-group">
                                            <label>Type</label>
                                            <select class="form-control">
                                                <option>Pilih...</option>
                                                <option>TV</option>
                                                <option>OVA</option>
                                                <option>ONA</option>
                                                <option>OAD</option>
                                                <option>Movie</option>
                                                <option>Special</option>
                                                <option>BD</option>
                                                <option>OVA & BD</option>
                                                <option>ONA & BD</option>
                                                <option>OAD & BD</option>
                                                <option>Movie & BD</option>
                                                <option>Special & BD</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>Status</label>
                                            <select class="form-control">
                                                <option>Pilih...</option>
                                                <option>Watching</option>
                                                <option>Watched</option>
                                                <option>Plan to Watch</option>
                                                <option>On hold</option>
                                                <option>Dropped</option>
                                                <option>No</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Download Status</label>
                                            <select class="form-control">
                                                <option>Pilih...</option>
                                                <option>On Process</option>
                                                <option>Completed</option>
                                                <option>Plan to Download</option>
                                                <option>No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Resolution</label>
                                            <select class="form-control">
                                                <option>Pilih...</option>
                                                <option>240p</option>
                                                <option>360p</option>
                                                <option>480p</option>
                                                <option>720p</option>
                                                <option>1080p</option>
                                                <option>Else...</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Storage Device</label>
                                            <select class="form-control">
                                                <option>Pilih...</option>
                                                <option>MS-1</option>
                                                <option>Harddisk External</option>
                                                <option>Laptop</option>
                                                <option>Else ...</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <!-- textarea -->
                                        <div class="form-group">
                                            <label>Note</label>
                                            <textarea class="form-control" rows="2" placeholder="Enter ..."></textarea>
                                        </div>
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
