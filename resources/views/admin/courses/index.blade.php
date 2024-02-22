@extends('admin.layouts.app')

@section('title', 'Admin panel')

@section('admin-content')
    <div class="page-title d-flex" aria-label="Page title" style="background-image: url(/html/elotcom.uz.io-main/img/coming-soon-dark-bg.png);">
        <div class="container text-left align-self-center">
            <div class="row mt-5">
                <div class="col-xl-9 col-md-11">
                    <div class="table-responsive">
                        <a href="{{ route('courses.create')}}" class="btn btn-style-4 btn-success mr-3 mb-3">Create</a>
                        <table class="table table-light">
                            <thead class="thead-light">
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Link</th>
                                <th>Description</th>
                                <th>Category</th>
                                <th></th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($courses as $course)
                                <tr>
                                    <th scope="row">{{$course->id}}</th>
                                    <td>{{$course->title}}</td>
                                    <td>{{$course->youtube_link}}</td>
                                    <td>{{$course->description}}</td>
                                    <td>{{$course->category->name}}</td>
                                    <td>

                                        <a href="{{ route('courses.edit', ['course' => $course->id]) }}" class="btn btn-style-4 btn-info mr-3 mb-3">Edit</a>
                                    </td>
                                    <td>
                                        <form action="{{ route('courses.destroy', ['course' => $course->id]) }}" method="POST" style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-style-4 btn-danger mr-3 mb-3" onclick="return confirm('Are you sure you want to delete this category?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

