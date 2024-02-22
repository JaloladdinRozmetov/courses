@extends('admin.layouts.app')

@section('title', 'Admin panel')

@section('admin-content')
    <div class="page-title d-flex" aria-label="Page title" style="background-image: url(/html/elotcom.uz.io-main/img/coming-soon-dark-bg.png);">
        <div class="container text-left align-self-center">
            <div class="row mt-5">
                <div class="col-xl-9 col-md-11">
                    <h2>Edit Category</h2>

                    <form action="{{ route('categories.update', ['category' => $category->id]) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" name="name" class="form-control" value="{{ $category->name }}" required>
                        </div>

                        <div class="form-group">
                            <label for="parent_id">Parent Category:</label>
                            <select name="parent_id" class="form-control">
                                <option value="">No Parent</option>
                                @foreach($categories as $cat)
                                    <option value="{{ $cat->id }}" {{ $cat->id == $category->parent_id ? 'selected' : '' }}>
                                        {{ $cat->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Update Category</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
