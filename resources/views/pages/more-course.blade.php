@extends('layouts.app')
@section('roadmap')
    <!-- Content -->
    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1>Dashboard</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li><a href="#">Dashboard</a></li>
                                <li><a href="#">UI Elements</a></li>
                                <li class="active">Cards</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <style>
        ::-webkit-scrollbar {
            height: 4px;              /* height of horizontal scrollbar ← You're missing this */
            width: 4px;               /* width of vertical scrollbar */
            border: 1px solid #d5d5d5;
        }
    </style>
    <div class="content">
        <!--  Traffic  -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-title">Traffic </h4>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card-body">
                                <!-- <canvas id="TrafficChart"></canvas>   -->
                                <iframe style="width: 100%;" height="363" src="https://www.youtube.com/embed/5qap5aO4i9A" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="card-body">
                                <div class="col-lg-12">
                                    Постановка задачи по разработке будущего проекта и определение используемых подходов. Предполагаемая структура проекта.
                                </div>
                                <div class="mb-3"></div>
                                <div class="col-lg-12">
                                    <h3>Комментарий</h3>
                                    <div class="mb-3"></div>
                                    <div class="card">

                                        <div class="card-body">
                                            <h5 class="card-title">Special title treatment</h5>
                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                            <a href="#" class="btn btn-primary">Go somewhere</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3" style="overflow-y:scroll;height: 600px;">
                            <div class="card-body">
                                <div class="progress-box ">
                                    <h4 class="por-title">Visits</h4>
                                    <div class="por-txt">96,930 Users (40%)</div>

                                </div>

                            </div> <!-- /.card-body -->
                        </div>
                    </div> <!-- /.row -->
                    <div class="card-body"></div>
                </div>
            </div><!-- /# column -->
        </div>
        <!--  /Traffic -->
    </div>
@endsection
