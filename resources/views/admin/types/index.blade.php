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
                    <th>Name</th>
                    <th>Options</th>
                </tr>
                </thead>
                <tbody>
                @foreach($data as $key => $value)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $value->name }}</td>
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

