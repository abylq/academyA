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
                                <li><a href="{{ url('section/'.request()->sec_id) }}">{{ request()->section }}</a></li>
                            <li><a href="{{ url('course/list/'.request()->c_id.'?section='.request()->section.'
                                &sec_id='.request()->sec_id.'&c='.request()->c.'&c_id='.request()->c_id)
                                }}">{{ request()->c }}</a></li>
                                <li class="active">d</li>
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
            height: 1px;              /* height of horizontal scrollbar ← You're missing this */
            width: 1px;               /* width of vertical scrollbar */

        }
        .number {
            display: inline-block;
            text-align: center;
            width: 1.5rem;
            line-height: 1.5rem;
            font-size: .8rem;
            background: #ddd;
            color: #333;
            border-radius: 100px;
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
                                <div id="player" data-plyr-provider="youtube" data-plyr-embed-id="bTqVqk7FSmY"></div>

                            </div>
                        </div>
                        <div class="col-lg-7">
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
                                            <a href="#" style="text-decoration: underline">Жауап беру</a>
                                        <div class="col-md-12 mt-2" style="border-top: 1px dashed #cccccc;">
                                            <div class="card-body" >
                                                <h5 class="card-title">Special title treatment</h5>
                                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                <a href="#" style="text-decoration: underline">Жауап беру</a>
                                            </div>
                                        </div>
                                        </div>


                                    </div>


                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5 mt-2" >
                            <div class="card-body" style="background: white;border-radius: 5px;box-shadow: 0 1px 10px rgba(0,0,0,.08);">
                                <div class="progress-box ">
                                    <h6 class="por-title" style="font-size:12px;"><span class="number">1</span> Visits фывфы вфыв фы вфывф ы</h6>

                                </div>
                                <div class="progress-box ">
                                    <h6 class="por-title" style="font-size:14px;"><span class="number">1</span> Visits фывфы вфыв фы вфывф ы</h6>

                                </div>
                                <div class="progress-box ">
                                    <h6 class="por-title" style="font-size:14px;"><span class="number">1</span> Visits фывфы вфыв фы вфывф ы</h6>

                                </div>
                                <div class="progress-box ">
                                    <h6 class="por-title" style="font-size:14px;"><span class="number">1</span> Visits фывфы вфыв фы вфывф ы</h6>

                                </div>
                                <div class="progress-box ">
                                    <h6 class="por-title" style="font-size:14px;"><span class="number">1</span> Visits фывфы вфыв фы вфывф ы</h6>

                                </div>
                                <div class="progress-box ">
                                    <h6 class="por-title" style="font-size:14px;"><span class="number">1</span> Visits фывфы вфыв фы вфывф ы</h6>

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
