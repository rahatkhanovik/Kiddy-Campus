@extends('layouts.app')

@section('title', 'Edit Category')

@section('body')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Edit Category</h4>
                    <div class="page-title-right">
                        <a href="{{ route('category') }}" class="btn btn-secondary btn-sm">Back to Categories</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('category.update', $category->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('POST') {{-- Use POST since your route is post --}}

                            <div class="form-group">
                                <label for="name">Category Name</label>
                                <input type="text" name="name" class="form-control" value="{{$category->name}}" required>
                            </div>

                            <div class="form-group">
                                <label for="name">Description</label>
                                <input type="text" name="description" class="form-control" value="{{$category->description}}" required>
                            </div>

                            <div class="form-group">
                                <label for="image">Category Image</label>
                                <input type="file" name="image" id="image" class="form-control-file">
                                @if ($category->image)
                                    <img src="{{ asset('storage/' . $category->image) }}" alt="Current Image" width="100" class="mt-2">
                                @endif
                            </div>

                            <button type="submit" class="btn btn-primary">Update Category</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
