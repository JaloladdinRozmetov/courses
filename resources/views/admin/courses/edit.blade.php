@extends('admin.layouts.app')

@section('title', 'Admin panel')

@section('admin-content')
    <div class="page-title d-flex" aria-label="Page title" style="background-image: url(/html/elotcom.uz.io-main/img/coming-soon-dark-bg.png);">
        <div class="container text-left align-self-center">
            <div class="row mt-5">
                <div class="col-xl-9 col-md-11">
                    <form action="{{ route('courses.update', $course->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="title">Course Title:</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{ $course->title }}" required>
                        </div>

                        <div class="form-group">
                            <label for="description">Course Description:</label>
                            <textarea class="form-control" id="description" name="description" rows="3" required>{{ $course->description }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="youtube_link">YouTube Link:</label>
                            <input type="text" class="form-control" id="youtube_link" name="youtube_link" value="{{ $course->youtube_link }}" required>
                        </div>

                        <div class="form-group">
                            <label for="category_id">Category:</label>
                            <select class="form-control" id="category_id" name="category_id" required>
                                <option value="">Select Category</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}" @if($category->id == $course->category_id) selected @endif>{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Update Course</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
