@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading">  {{ $action . " " . $title }}</div>
                <div class="panel-wrapper collapse in" aria-expanded="true">
                    <div class="panel-body">
                        <form action="/{{ $route . "/" . ( $product->id ?? "" ) }}" enctype="multipart/form-data" method="post" class="form-horizontal form-bordered">
                            @csrf
                            @if(isset($product))
                                @method("PUT")
                            @endif
                            <div class="form-body">

                                <div class="form-group">
                                    <label class="control-label col-md-2">Name</label>
                                    <div class="col-md-9">
                                        <input type="text" placeholder="Name" value="{{ $product->name ?? old("name") }}" required class="form-control" name="name">
                                        @error('name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-2">Price</label>
                                    <div class="col-md-9">
                                        <input type="number" step="any" placeholder="Price" value="{{ $product->price ?? old("price") }}" required class="form-control" name="price">
                                        @error('price')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-2">Material</label>
                                    <div class="col-md-9">
                                        <input type="text" step="any" placeholder="Material" value="{{ $product->material ?? old("material") }}" required class="form-control" name="material">
                                        @error('material')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-2">Type</label>
                                    <div class="col-md-9">
                                        <select name="type_id" required class="form-control">
                                            <option value="">Choose Type</option>
                                            @foreach($types as $type)
                                                <option @if(old("type_id") == $type->id || isset($product) && $product->type->id == $type->id ) selected @endif value="{{ $type->id }}">{{ $type->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('type_id')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-2">Category</label>
                                    <div class="col-md-9">
                                        <select name="category" required class="form-control">
                                            <option value="">Choose Category</option>
                                            @foreach($categories as $category)
                                                <option @if(old("category") == $category || isset($product) && $product->category == $category ) selected @endif value="{{ $category }}">{{ strtoupper($category) }}</option>
                                            @endforeach
                                        </select>
                                        @error('category')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-2">Height</label>
                                    <div class="col-md-9">
                                        <input type="number" step="any" placeholder="Height" value="{{ $product->height ?? old("height") }}" required class="form-control" name="height">
                                        @error('height')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-2">Width</label>
                                    <div class="col-md-9">
                                        <input type="number" step="any" placeholder="Width" value="{{ $product->width ?? old("width") }}" required class="form-control" name="width">
                                        @error('width')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-2">Thickness</label>
                                    <div class="col-md-9">
                                        <input type="number" step="any" placeholder="Thickness" value="{{ $product->thickness ?? old("thickness") }}" required class="form-control" name="thickness">
                                        @error('thickness')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-2">Image</label>
                                    <div class="col-md-9">
                                        <input type="file" @if(!isset($product)) required @endif class="form-control" name="image">
                                        @error('image')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                @if(isset($product))
                                    <div class="form-group text-center">
                                        <img style="height: 150px" src="{{ asset("uploads/$product->image") }}" alt="">
                                    </div>
                                @endif

                                <div class="form-group">
                                    <label class="control-label col-md-2">Location</label>
                                    <div class="col-md-9">
                                        <input type="text" placeholder="Location" value="{{ $product->location ?? old("location") }}" class="form-control" name="location">
                                        @error('location')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-2">Description</label>
                                    <div class="col-md-9">
                                        <textarea placeholder="Description" name="description" class="form-control">{{ $product->description ?? old("location") }}</textarea>
                                        @error('location')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>


                                <div class="form-actions">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-offset-11 col-md-9">
                                                    <button type="submit" class="btn btn-success"><i
                                                            class="fa fa-check"></i>
                                                        Submit
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
