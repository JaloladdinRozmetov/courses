@extends('page.layout')

@section('title', 'Categories')

@section('content')

    <div class="page-title d-flex" aria-label="Page title" style="background-image: url(/html/elotcom.uz.io-main/img/coming-soon-dark-bg.png);">
        <div class="container text-left align-self-center">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">{{$category->name}}</a>
                    </li>
                </ol>
            </nav>
            <h1 class="page-title-heading">{{$category->name}}</h1>
        </div>
    </div>
    <div class="container pb-5 mb-2">
        <div class="d-sm-flex justify-content-between align-items-center text-center text-sm-left">
            <form class="form-inline py-2">
                @foreach($categories as $item)
                    <a class="btn btn-gradient mr-3 mb-3" href="{{route('category',['id'=>$item->id])}}">{{$item->name}}</a>
                @endforeach
            </form>
        </div>
    </div>


        <div class="offcanvas-wrapper">
            <div class="container">
                <div class="row pb-5 mb-4">
                    @foreach($courses as $course)
                    <div class="col-xl-4 col-sm-6 mb-30 pb-2">
                            <div class="card blog-card">
                            <div class="embed-responsive embed-responsive-16by9">
                                {!! $course->youtube_link !!}
                            </div>
                            <div class="card-body">
                                <h5 class="post-title"><a href="{{$course->youtube_link}}">{{$course->title}}</a></h5>
                                <p class="text-muted">{{$course->description}}.</p><a class="tag-link" href="#">Management</a>
                            </div>
                        </div>
                    </div>
                    @endforeach

            </div>
        </div>
    </div>

@endsection
