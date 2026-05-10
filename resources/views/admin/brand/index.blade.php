@extends('layouts.app')

@section('title', 'Brands')

@section('body')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">
                            Brands
                            <a href="{{ route('brand.create') }}" class="btn btn-success float-right">
                                <i class="mdi mdi-plus mr-1"></i> Add New
                            </a>
                        </h4>

                        <!-- Success / Error Messages -->
                        @if ($message = Session::get('destroy_message'))
                            <div class="alert alert-danger text-center">{{ $message }}</div>
                        @elseif ($message = Session::get('store_message'))
                            <div class="alert alert-success text-center">{{ $message }}</div>
                        @elseif ($message = Session::get('update_message'))
                            <div class="alert alert-info text-center">{{ $message }}</div>
                        @endif

                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                            <thead>
                            <tr>
                                <th style="width: 5%; text-align: center">#</th>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th class="text-center" style="width: 12%">Option</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($brands as $brands)
                                <tr>
                                    <td style="text-align: center; vertical-align: middle">
                                        {{ $loop->iteration }}
                                    </td>
                                    <td style="vertical-align: middle">{{ $brands->id }}</td>
                                    <td style="vertical-align: middle">
                                        @if($brands->status == 0)
                                            <del>{{ $brands->name }}</del>
                                        @else
                                            {{ $brands->name }}
                                        @endif
                                    </td>

                                    <td style="vertical-align: middle">{{ $brands->description }}</td>

                                    <td style="vertical-align: middle">
                                        @if($brands->image)
                                            <img src="{{ asset('storage/' . $brands->image) }}" height="50" width="50" alt="Brand Image">
                                        @else
                                            <img src="{{ asset('assets/images/no-image.png') }}" height="50" width="50">
                                        @endif
                                    </td>
                                    <td style="vertical-align: middle">
                                        @if($brands->status == '1')
                                            <span class="badge badge-success">Active</span>
                                        @elseif($brands->status == '0')
                                            <span class="badge badge-warning">Inactive</span>
                                        @else
                                            <span class="badge badge-danger">Deleted</span>
                                        @endif
                                    </td>
                                    <td class="text-center" style="vertical-align: middle">
                                        <a href="{{ route('brand.edit', $brands->id) }}"
                                           class="btn btn-info btn-sm" title="Edit">
                                            <i class="fa fa-edit"></i>
                                        </a>

                                        <form action="{{ route('brand.destroy', $brands->id) }}" method="POST" style="display:inline">
                                            @csrf
                                            @method('POST')
                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete"
                                                    onclick="return confirm('Are you sure you want to delete this brand?')">
                                                <i class="fa fa-trash"></i>
                                            </button>
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
