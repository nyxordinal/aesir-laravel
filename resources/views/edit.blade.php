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
            @if (session('download-alert'))
            <div class="row">
                <div class="col-sm-12">
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        @if (session('download-alert'))
                        {{ session('download-alert') }}
                        @endif
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            </div>
            @endif
            @if ($errors->any())
            <div class="row">
                <div class="col-sm-12">
                    @foreach ($errors->all() as $error)
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ $error }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endforeach
                </div>
            </div>
            @endif
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Main row -->
            <div class="row">
                <div class="col-12">
                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title">Edit Anime Data</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form role="form" method="post"
                                action="{{ route('anime.detail.edit', ['id' => $anime->ain]) }}">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-12">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input type="text" name="title" class="form-control" placeholder="Enter ..."
                                                value="{{old('title')?old('title'):$anime->title}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <!-- textarea -->
                                        <div class="form-group">
                                            <label>Genre</label>
                                            <textarea class="form-control" name="genre" rows="2"
                                                placeholder="Enter ...">{{old('genre')?old('genre'):$anime->genre}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="col-form-label" for="inputSuccess">Episode</label>
                                            <input type="number" name="episode" class="form-control" id="inputSuccess"
                                                placeholder="Enter ..."
                                                value="{{old('episode')?old('episode'):$anime->episode}}">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="col-form-label" for="inputWarning">Airing (From)</label>
                                            <input type="date" name="airfrom" class="form-control" id="inputWarning"
                                                placeholder="Enter ..."
                                                value="{{old('airfrom')?old('airfrom'):$anime->airing_from}}">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="col-form-label" for="inputError">Airing (Until)</label>
                                            <input type="date" name="airuntil" class="form-control" id="inputError"
                                                placeholder="Enter ..."
                                                value="{{old('airuntil')?old('airuntil'):$anime->airing_until}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <!-- select -->
                                        <div class="form-group">
                                            <label>Type</label>
                                            <select class="form-control" name="type">
                                                <option value="0" @if (old('type')==0) selected @endif>Pilih...</option>
                                                <option value="1" @if ($anime->type==1||old('type')==1) selected
                                                    @endif>TV</option>
                                                <option value="2" @if ($anime->type==2||old('type')==2) selected
                                                    @endif>OVA</option>
                                                <option value="3" @if ($anime->type==3||old('type')==3) selected
                                                    @endif>ONA</option>
                                                <option value="4" @if ($anime->type==4||old('type')==4) selected
                                                    @endif>OAD</option>
                                                <option value="5" @if ($anime->type==5||old('type')==5) selected
                                                    @endif>Movie</option>
                                                <option value="6" @if ($anime->type==6||old('type')==6) selected
                                                    @endif>Special</option>
                                                <option value="7" @if ($anime->type==7||old('type')==7) selected
                                                    @endif>BD</option>
                                                <option value="8" @if ($anime->type==8||old('type')==8) selected
                                                    @endif>OVA & BD</option>
                                                <option value="9" @if ($anime->type==9||old('type')==9) selected
                                                    @endif>ONA & BD</option>
                                                <option value="10" @if ($anime->type==10||old('type')==10) selected
                                                    @endif>OAD & BD</option>
                                                <option value="11" @if ($anime->type==11||old('type')==11) selected
                                                    @endif>Movie & BD</option>
                                                <option value="12" @if ($anime->type==12||old('type')==12) selected
                                                    @endif>Special & BD</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>Status</label>
                                            <select class="form-control" name="status">
                                                <option value="0" @if (old('status')==0) selected @endif>Pilih...
                                                </option>
                                                <option value="1" @if ($anime->status==1||old('status')==1) selected
                                                    @endif>Watching</option>
                                                <option value="2" @if ($anime->status==2||old('status')==2) selected
                                                    @endif>Watched</option>
                                                <option value="3" @if ($anime->status==3||old('status')==3) selected
                                                    @endif>Plan to Watch</option>
                                                <option value="4" @if ($anime->status==4||old('status')==4) selected
                                                    @endif>On hold</option>
                                                <option value="5" @if ($anime->status==5||old('status')==5) selected
                                                    @endif>Dropped</option>
                                                <option value="6" @if ($anime->status==6||old('status')==6) selected
                                                    @endif>No</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Download Status</label>
                                            <select class="form-control" name="downstatus">
                                                <option value="0" @if (old('downstatus')==0) selected @endif>Pilih...
                                                </option>
                                                <option value="1" @if ($anime->download_status==1||old('downstatus')==1)
                                                    selected @endif>On Process</option>
                                                <option value="2" @if ($anime->download_status==2||old('downstatus')==2)
                                                    selected @endif>Completed</option>
                                                <option value="3" @if ($anime->download_status==3||old('downstatus')==3)
                                                    selected @endif>Plan to Download</option>
                                                <option value="4" @if ($anime->download_status==4||old('downstatus')==4)
                                                    selected @endif>No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Resolution</label>
                                            <select class="form-control" name="resolution">
                                                <option value="0" @if (old('resolution')==0) selected @endif>Pilih...
                                                </option>
                                                <option value="1" @if ($anime->resolution==1||old('resolution')==1)
                                                    selected @endif>240p</option>
                                                <option value="2" @if ($anime->resolution==2||old('resolution')==2)
                                                    selected @endif>360p</option>
                                                <option value="3" @if ($anime->resolution==3||old('resolution')==3)
                                                    selected @endif>480p</option>
                                                <option value="4" @if ($anime->resolution==4||old('resolution')==4)
                                                    selected @endif>720p</option>
                                                <option value="5" @if ($anime->resolution==5||old('resolution')==5)
                                                    selected @endif>1080p</option>
                                                <option value="6" @if ($anime->resolution==6||old('resolution')==6)
                                                    selected @endif>4K/2160p</option>
                                                <option value="7" @if ($anime->resolution==7||old('resolution')==7)
                                                    selected @endif>Else...</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Storage Device</label>
                                            <select class="form-control" name="storage">
                                                <option value="0" @if (old('storage')==0) selected @endif>Pilih...
                                                </option>
                                                <option value="1" @if ($anime->storage_device==1||old('storage')==1)
                                                    selected @endif>MS-1</option>
                                                <option value="2" @if ($anime->storage_device==2||old('storage')==2)
                                                    selected @endif>Harddisk Ext 1 (250 GB)</option>
                                                <option value="3" @if ($anime->storage_device==3||old('storage')==3)
                                                    selected @endif>Laptop</option>
                                                <option value="4" @if ($anime->storage_device==4||old('storage')==4)
                                                    selected @endif>Harddisk Ext 2 (4 TB)</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <!-- textarea -->
                                        <div class="form-group">
                                            <label>Note</label>
                                            <textarea class="form-control" name="note" rows="2"
                                                placeholder="Enter ...">{{old('note')?old('note'):$anime->note}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <button type="button" class="btn btn-danger" data-toggle="modal"
                                            data-target="#deleteModal">
                                            Delete
                                        </button>
                                        <button type="submit" class="btn btn-primary">Save</button>
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

<!-- Delete Confirmation Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Anime Deletion
                    Confirmation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure want to delete this anime ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                <form action="{{ route('anime.delete',['id' => $anime->ain]) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger">Delete Anime</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
