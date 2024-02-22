@extends('admin.layouts.app')

@section('title', 'Admin panel')

@section('admin-content')
    <div class="page-title d-flex" aria-label="Page title" style="background-image: url(/html/elotcom.uz.io-main/img/coming-soon-dark-bg.png);">
        <div class="container text-left align-self-center">
            <div class="row mt-5">
                <div class="col-xl-9 col-md-11">
                    <form action="{{ route('courses.store') }}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label for="title">Course Title:</label>
                            <input type="text" class="form-control" id="title" name="title" required>
                        </div>

                        <div class="form-group">
                            <label for="description">Course Description:</label>
                            <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                        </div>

                        <div class="form-group">
                            <label for="youtube_link">YouTube Link:</label>
                            <input type="text" class="form-control" id="youtube_link" name="youtube_link" required>
                        </div>

                        <div class="form-group">
                            <label for="category_id">Category:</label>
                            <select class="form-control" id="category_id" name="category_id" required>
                                <option value="">Select Category</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Create Course</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
