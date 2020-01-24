@extends('layouts.main')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Home</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
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
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>150</h3>
                            <p>Watched</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-android-checkmark-circle"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>53<sup style="font-size: 20px">%</sup></h3>
                            <p>Watching</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-social-youtube-outline"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>44</h3>
                            <p>Completed Download</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-checkmark"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>65</h3>
                            <p>On Process Download</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-ios-clock-outline"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->
            <!-- Main row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Brief Anime List</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Anime Title</th>
                                        <th>Type</th>
                                        <th>Episode</th>
                                        <th>Status</th>
                                        <th>Download Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $anime)
                                    <tr>
                                        <td>{{$anime->Title}}</td>
                                        <td>
                                            @switch($anime->Type)
                                            @case(1)
                                            TV
                                            @break
                                            @case(2)
                                            OVA
                                            @break
                                            @case(3)
                                            ONA
                                            @break
                                            @case(4)
                                            OAD
                                            @break
                                            @case(5)
                                            Movie
                                            @break
                                            @case(6)
                                            Special
                                            @break
                                            @case(7)
                                            BD
                                            @break
                                            @case(8)
                                            OVA & BD
                                            @break
                                            @case(9)
                                            ONA & BD
                                            @break
                                            @case(10)
                                            OAD & BD
                                            @break
                                            @case(11)
                                            Movie & BD
                                            @break
                                            @case(12)
                                            Special & BD
                                            @break
                                            @default
                                            Error
                                            @endswitch
                                        </td>
                                        <td>{{$anime->Episode}}</td>
                                        <td>
                                            @switch($anime->Status)
                                            @case(1)
                                            Watching
                                            @break
                                            @case(2)
                                            Watched
                                            @break
                                            @case(3)
                                            Plan to Watch
                                            @break
                                            @case(4)
                                            On hold
                                            @break
                                            @case(5)
                                            Dropped
                                            @break
                                            @case(6)
                                            No
                                            @break
                                            @default
                                            Error
                                            @endswitch
                                        </td>
                                        <td>
                                            @switch($anime->downloadstatus)
                                            @case(1)
                                            On Process
                                            @break
                                            @case(2)
                                            Completed
                                            @break
                                            @case(3)
                                            Plan to Download
                                            @break
                                            @case(4)
                                            No
                                            @break
                                            @default
                                            Error
                                            @endswitch
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Anime Title</th>
                                        <th>Type</th>
                                        <th>Episode</th>
                                        <th>Status</th>
                                        <th>Download Status</th>
                                    </tr>
                                </tfoot>
                            </table>
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
