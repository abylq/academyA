@extends('layouts.app')
@section('roadmap')
    <!-- Content -->
    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1>{{$listCourse->title}}</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li><a href="#">Dashboard</a></li>
                                <li><a href="{{ url('section/'.request()->sec_id) }}">{{ request()->section }}</a></li>
                                <li class="active">{{$listCourse->title}}</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="content">
        <div class="animated fadeIn">
            <div class="row">
                @foreach($listCourse->videos as $item)
                    <div class="col-md-4">
                        <div class="card">
                            <img class="card-img-top" src="https://i.imgur.com/ue0AB6J.png" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title mb-3">Card Image Title</h4>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="{{url('course/more/'.$item->id.'/?section='.request()->section.'&sec_id='.request()->sec_id.'&c='.$item->title.'&c_id='.$item->id)}}" class="btn btn-primary">test</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div><!-- .row -->
        </div>
    </div>
@endsection
