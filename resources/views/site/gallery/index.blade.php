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

                            <li class="image-det">
                                <a href="#" onclick="getData('{{ json_encode($g) }}', this, '{{ $g->type->name }}')" data-largesrc="{{ asset("uploads/$g->image") }}" data-title="{{ $g->name }}" data-description="{{ $g->description }}">
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
        function getData(dataPassed, self, type) {
            let data = JSON.parse(dataPassed);
            let html = `
                <p class="text-white d-flex justify-content-between"> <span>Price:</span> <span class="font-weight-bold ls-1">$ ${data.price}</span> </p>
                <p class="text-white d-flex justify-content-between"> <span>Type:</span> <span class="font-weight-bold ls-1"> ${type}</span> </p>
                <p class="text-white d-flex justify-content-between"> <span>Material:</span> <span class="font-weight-bold ls-1">${data.material}</span> </p>
                <p class="text-white d-flex justify-content-between"> <span>Height:</span> <span class="font-weight-bold ls-1">$ ${data.height}</span> </p>
                <p class="text-white d-flex justify-content-between"> <span>Width:</span> <span class="font-weight-bold ls-1">$ ${data.width}</span> </p>
                <p class="text-white d-flex justify-content-between"> <span>Thickness:</span> <span class="font-weight-bold ls-1">$ ${data.thickness}</span> </p>
            `;
            if(data.video_url != null) {
                html += `<p class="text-white d-flex justify-content-between align-items-center"> <span>How It's Made:</span> <a href="${data.video_url}" target="_blank"><img id="play" src="{{ asset("site/images/play.png") }}" alt="Play Icon"></a> </p>`;
            }
            setTimeout(function () {
                $(document).find(".og-details").find("p").remove();
                $(document).find(".og-details").append(html);
            }, 5)
        }
    </script>
@endsection
