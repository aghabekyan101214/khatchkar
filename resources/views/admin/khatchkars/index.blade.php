@extends('layouts.app')

@section('content')

    <div class="white-box">
        <h3 class="box-title m-b-10">All Clients</h3>
        <a href="/{{ $route }}/create" class="box-title m-b-20 btn btn-success">Add New {{ $title }}</a>
        <div class="table-responsive">
            <table id="myTable" class="table table-striped">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Material</th>
                    <th>Type</th>
                    <th>Category</th>
                    <th>Height</th>
                    <th>Width</th>
                    <th>Thickness</th>
                    <th>Location</th>
                    <th>Options</th>
                </tr>
                </thead>
                <tbody>
                @foreach($data as $key => $value)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td><img style="height: 150px" src="{{ asset("uploads/$value->image") }}" alt=""></td>
                        <td>{{ $value->name }}</td>
                        <td>{{ $value->price }}</td>
                        <td>{{ $value->material }}</td>
                        <td>{{ $value->name }}</td>
                        <td>{{ $value->category }}</td>
                        <td>{{ $value->height }}</td>
                        <td>{{ $value->width }}</td>
                        <td>{{ $value->thickness }}</td>
                        <td>{{ $value->location }}</td>
                        <td>
                            <a href="/{{ $route . "/" . $value->id }}/edit" data-toggle="tooltip" data-placement="top" title="Edit" class="btn btn-primary btn-circle tooltip-primary">
                                <i class="fas fa-pencil-alt"></i>
                            </a>
                            <form style="display: inline-block" onsubmit="if(confirm('Dou You Really Want To Delete This Client?') == false ) return false;" action="/{{ $route . "/" . $value->id }}" method="post">
                                @csrf
                                @method("DELETE")
                                <button class="btn btn-danger btn-circle tooltip-danger" data-toggle="tooltip" data-placement="top" title="Delete">
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
@endsection

