@extends('layouts.app')

@section('title')
    @php($title='Category') {{$title}}
@endsection

@section('body')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">@if(request('id')) Update @else Create @endif {{$title}}</h4>
                <form method="POST" action="@if(request('id')>0) {{route('category.update', ['id'=>$category->id])}} @else {{route('category.store')}} @endif" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="entry_by" value="{{ Auth::user()->id }}">
                    <div class="form-group row mb-4">
                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Category Name <span class="required text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" name="name" @if(request('id')>0) value="{{$category->name}}" @endif class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Description</label>
                        <div class="col-sm-9">
                            <input type="text" name="description" @if(request('id')>0) value="{{$category->description}}" @endif class="form-control" >
                        </div>
                    </div>


                    <div class="form-group row mb-4">
                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Category Image <span class="required text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="file" name="image" class="form-control">
                            <br>
                            @if(request('id')>0)
                                <img src="{{asset($category->image)}}" height="100" width="100">
                            @endif
                        </div>
                    </div>
                    @if(request('id')>0)
                        <div class="form-group row mb-4">
                            <label for="horizontal-email-input" class="col-sm-3 col-form-label">Status <span class="required text-danger">*</span></label>
                            <div class="col-sm-9">
                                <select class="form-control" name="status">
                                    <option @if($category->status =='1') selected @endif value="1">Active</option>
                                    <option @if($category->status =='0') selected @endif value="0">Inactive</option>
                                </select>
                            </div>
                        </div>
                    @endif
                    <div class="form-group row justify-content-end">
                        <div class="col-sm-9">
                            <div>
                                <a class="btn btn-danger" href="{{route('category')}}">Cancel</a>
                                <button type="submit" class="btn btn-primary w-md">@if(request('id')) Update @else Save @endif</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
