@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading">  {{ $action . " " . $title }}</div>
                <div class="panel-wrapper collapse in" aria-expanded="true">
                    <div class="panel-body">
                        <form action="/{{ $route . (isset($video->id) ? ("/" . $video->id) : "") }}" method="post" class="form-horizontal form-bordered">
                            @csrf
                            @if(isset($video))
                                @method("PUT")
                            @endif
                            <div class="form-body">

                                <div class="form-group">
                                    <label class="control-label col-md-2">Title</label>
                                    <div class="col-md-9">
                                        <input type="text" placeholder="Video Title" value="{{ $video->title ?? old("title") }}" required class="form-control" name="title">
                                        @error('title')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-2">Video Url</label>
                                    <div class="col-md-9">
                                        <input type="text" placeholder="Video Url" value="{{ $video->video ?? old("video") }}" required class="form-control video" name="video">
                                        <input type="hidden" name="video_id" class="video_id">
                                        @error('video')
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
    <script>
        $(document).ready(function () {
            $(".video").trigger("input");
        })
        $(".video").on("input", function(){
            let video_id = getId($(this).val());
            $(".video_id").val(video_id);
        })
        function getId(url) {
            const regExp = /^.*(youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=|&v=)([^#&?]*).*/;
            const match = url.match(regExp);

            return (match && match[2].length === 11)
                ? match[2]
                : null;
        }
    </script>
@endsection
