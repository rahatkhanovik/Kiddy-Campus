@extends('layouts.app')

@section('title')
    @php($title='Product') {{$title}}
@endsection

@section('body')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">@if(request('id')) Update @else Create @endif {{$title}}</h4>
                <form method="POST" action="@if(request('id')>0) {{route('product.update', ['id'=>$products->id])}} @else {{route('product.store')}} @endif" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="entry_by" value="{{ Auth::user()->id }}">
                    <div class="form-group row mb-4">
                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Product Name <span class="required text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" name="name" @if(request('id')>0) value="{{$products->name}}" @endif class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Description</label>
                        <div class="col-sm-9">
                            <input type="text" name="description" @if(request('id')>0) value="{{$products->description}}" @endif class="form-control" >
                        </div>
                    </div>


                    <div class="form-group row mb-4">
                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Product Image <span class="required text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="file" name="image" class="form-control">
                            <br>
                            @if(request('id')>0)
                                <img src="{{asset($products->image)}}" height="100" width="100">
                            @endif
                        </div>
                    </div>
                    @if(request('id')>0)
                        <div class="form-group row mb-4">
                            <label for="horizontal-email-input" class="col-sm-3 col-form-label">Status <span class="required text-danger">*</span></label>
                            <div class="col-sm-9">
                                <select class="form-control" name="status">
                                    <option @if($products->status =='1') selected @endif value="1">Active</option>
                                    <option @if($products->status =='0') selected @endif value="0">Inactive</option>
                                </select>
                            </div>
                        </div>
                    @endif
                    <div class="form-group row justify-content-end">
                        <div class="col-sm-9">
                            <div>
                                <a class="btn btn-danger" href="{{route('product')}}">Cancel</a>
                                <button type="submit" class="btn btn-primary w-md">@if(request('id')) Update @else Save @endif</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
