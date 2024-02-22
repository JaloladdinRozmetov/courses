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
                    <button class="btn btn-gradient mr-3 mb-3" type="submit">{{$item->name}}</button>
                @endforeach
            </form>
        </div>
    </div>

@endsection
