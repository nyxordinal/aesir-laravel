@extends('layouts.main')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Edit</h1>
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
                            <h3 class="card-title">Edit Anime Data</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form role="form" method="post" action="/detail/{{$anime->ain}}">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-sm-12">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input type="text" name="title" class="form-control" placeholder="Enter ..." value="{{$anime->title}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <!-- textarea -->
                                        <div class="form-group">
                                            <label>Genre</label>
                                            <textarea class="form-control" name="genre" rows="2" placeholder="Enter ...">{{$anime->genre}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="col-form-label" for="inputSuccess">Episode</label>
                                            <input type="number" name="episode" class="form-control" id="inputSuccess" placeholder="Enter ..." value="{{$anime->episode}}">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="col-form-label" for="inputWarning">Airing (From)</label>
                                            <input type="date" name="airfrom" class="form-control" id="inputWarning" placeholder="Enter ..." value="{{$anime->airing_from}}">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="col-form-label" for="inputError">Airing (Until)</label>
                                            <input type="date" name="airuntil" class="form-control" id="inputError" placeholder="Enter ..." value="{{$anime->airing_until}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <!-- select -->
                                        <div class="form-group">
                                            <label>Type</label>
                                            <select class="form-control" name="type">
                                                <option>Pilih...</option>
                                                <option value="1" @if ($anime->type==1)
                                                    selected
                                                    @endif
                                                    >TV</option>
                                                <option value="2" @if ($anime->type==2)
                                                    selected
                                                    @endif
                                                    >OVA</option>
                                                <option value="3" @if ($anime->type==3)
                                                    selected
                                                    @endif
                                                    >ONA</option>
                                                <option value="4" @if ($anime->type==4)
                                                    selected
                                                    @endif
                                                    >OAD</option>
                                                <option value="5" @if ($anime->type==5)
                                                    selected
                                                    @endif
                                                    >Movie</option>
                                                <option value="6" @if ($anime->type==6)
                                                    selected
                                                    @endif
                                                    >Special</option>
                                                <option value="7" @if ($anime->type==7)
                                                    selected
                                                    @endif
                                                    >BD</option>
                                                <option value="8" @if ($anime->type==8)
                                                    selected
                                                    @endif
                                                    >OVA & BD</option>
                                                <option value="9" @if ($anime->type==9)
                                                    selected
                                                    @endif
                                                    >ONA & BD</option>
                                                <option value="10" @if ($anime->type==10)
                                                    selected
                                                    @endif
                                                    >OAD & BD</option>
                                                <option value="11" @if ($anime->type==11)
                                                    selected
                                                    @endif
                                                    >Movie & BD</option>
                                                <option value="12" @if ($anime->type==12)
                                                    selected
                                                    @endif
                                                    >Special & BD</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>Status</label>
                                            <select class="form-control" name="status">
                                                <option>Pilih...</option>
                                                <option value="1" @if ($anime->status==1)
                                                    selected
                                                    @endif
                                                    >Watching</option>
                                                <option value="2" @if ($anime->status==2)
                                                    selected
                                                    @endif
                                                    >Watched</option>
                                                <option value="3" @if ($anime->status==3)
                                                    selected
                                                    @endif
                                                    >Plan to Watch</option>
                                                <option value="4" @if ($anime->status==4)
                                                    selected
                                                    @endif
                                                    >On hold</option>
                                                <option value="5" @if ($anime->status==5)
                                                    selected
                                                    @endif
                                                    >Dropped</option>
                                                <option value="6" @if ($anime->status==6)
                                                    selected
                                                    @endif
                                                    >No</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Download Status</label>
                                            <select class="form-control" name="downstatus">
                                                <option>Pilih...</option>
                                                <option value="1" @if ($anime->download_status==1)
                                                    selected
                                                    @endif
                                                    >On Process</option>
                                                <option value="2" @if ($anime->download_status==2)
                                                    selected
                                                    @endif
                                                    >Completed</option>
                                                <option value="3" @if ($anime->download_status==3)
                                                    selected
                                                    @endif
                                                    >Plan to Download</option>
                                                <option value="4" @if ($anime->download_status==4)
                                                    selected
                                                    @endif
                                                    >No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Resolution</label>
                                            <select class="form-control" name="resolution">
                                                <option>Pilih...</option>
                                                <option value="1" @if ($anime->resolution==1)
                                                    selected
                                                    @endif
                                                    >240p</option>
                                                <option value="2" @if ($anime->resolution==2)
                                                    selected
                                                    @endif
                                                    >360p</option>
                                                <option value="3" @if ($anime->resolution==3)
                                                    selected
                                                    @endif
                                                    >480p</option>
                                                <option value="4" @if ($anime->resolution==4)
                                                    selected
                                                    @endif
                                                    >720p</option>
                                                <option value="5" @if ($anime->resolution==5)
                                                    selected
                                                    @endif
                                                    >1080p</option>
                                                <option value="6" @if ($anime->resolution==6)
                                                    selected
                                                    @endif
                                                    >Else...</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Storage Device</label>
                                            <select class="form-control" name="storage">
                                                <option>Pilih...</option>
                                                <option value="1" @if ($anime->storage_device==1)
                                                    selected
                                                    @endif
                                                    >MS-1</option>
                                                <option value="2" @if ($anime->storage_device==2)
                                                    selected
                                                    @endif
                                                    >Harddisk External</option>
                                                <option value="3" @if ($anime->storage_device==3)
                                                    selected
                                                    @endif>Laptop</option>
                                                <option value="4" @if ($anime->storage_device==4)
                                                    selected
                                                    @endif>Else ...</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <!-- textarea -->
                                        <div class="form-group">
                                            <label>Note</label>
                                            <textarea class="form-control" name="note" rows="2" placeholder="Enter ...">{{$anime->note}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-primary">Edit</button>
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
