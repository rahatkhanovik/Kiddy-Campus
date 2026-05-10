@extends('layouts.app')

@section('title', 'Edit Brand')

@section('body')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Edit Brand</h4>
                    <div class="page-title-right">
                        <a href="{{ route('brand') }}" class="btn btn-secondary btn-sm">Back to Brands</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('brand.update', $brands->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('POST') {{-- Use POST since your route is post --}}

                            <div class="form-group">
                                <label for="name">Brand Name</label>
                                <input type="text" name="name" class="form-control" value="{{$brands->name}}" required>
                            </div>

                            <div class="form-group">
                                <label for="name">Description</label>
                                <input type="text" name="description" class="form-control" value="{{$brands->description}}" required>
                            </div>

                            <div class="form-group">
                                <label for="image">Brand Image</label>
                                <input type="file" name="image" id="image" class="form-control-file">
                                @if ($brands->image)
                                    <img src="{{ asset('storage/' . $brands->image) }}" alt="Current Image" width="100" class="mt-2">
                                @endif
                            </div>

                            <button type="submit" class="btn btn-primary">Update Brand</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
