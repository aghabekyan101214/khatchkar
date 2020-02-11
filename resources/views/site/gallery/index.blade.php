@extends("layouts.client")
@section("content")
    <link rel="stylesheet" type="text/css" href="{{ asset("site/gallery/css/default.css") }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset("site/gallery/css/component.css") }}" />
    <script src="{{ asset("site/gallery/js/modernizr.custom.js") }}"></script>

    <div class="gallery">
        <section class="title-section p-lg-5">
            <div class="container p-lg-5">
                <h1 class="text-center text-white ls-2">Khatchkar Gallery</h1>
            </div>
        </section>

        <div class="gal">
            <div class="cont">
                <div class="main">
                    <ul id="og-grid" class="og-grid">
                        @foreach($gallery as $g)

                            <li>
                                <a href="#" data-largesrc="{{ asset("uploads/$g->image") }}" data-title="{{ $g->name }}" data-description="{{ $g->description }}">
                                    <img class="img-fluid" src="{{ asset("uploads/$g->image") }}" alt="{{ $g->name }}"/>
                                </a>
                            </li>

                        @endforeach
                    </ul>
                </div>
            </div><!-- /container -->
        </div>
    </div>
    <script src="{{ asset("site/gallery/js/jq.js") }}"></script>
    <script src="{{ asset("site/gallery/js/grid.js") }}"></script>
    <script>
        $(function() {
            Grid.init();
        });
    </script>
@endsection
