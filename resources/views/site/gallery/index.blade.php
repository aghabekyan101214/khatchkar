@extends("layouts.client")
@section("content")
    <div class="shop pb-5">
        <section class="title-section p-lg-5">
            <div class="container p-lg-5">
                <h1 class="text-center text-white ls-2">Our Khatchkar Shop</h1>
            </div>
        </section>
        <div class="item-cont">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="col-md-12">
                            <h5 class="ls-2 font-weight-light text-white categories">Categories</h5>
                            <hr class="bg-light">
                            <div class="nav flex-column" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <a class="nav-link pl-0 active" id="v-pills-all-tab" data-toggle="pill" href="#v-pills-all" role="tab" aria-controls="v-pills-all" aria-selected="true">Products</a>
                                <a class="nav-link pl-0" id="v-pills-videos-tab" data-toggle="pill" href="#v-pills-videos" role="tab" aria-controls="v-pills-videos" aria-selected="true">Videos</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9 pt-5">
                        <div class="tab-content" id="v-tabContent">
                            <div class="tab-pane row fade show active" id="v-pills-all" role="tabpanel" aria-labelledby="v-pills-all-tab">
                                @foreach($products as $product)

                                    <div class="col-md-4 kh-cont">
                                        <div class="col-md-12 kh-back p-0">
                                            <div class="col-md-12 overflow-hidden img-cont p-0 b-rad">
                                                <img class="img-fluid" src="{{ asset("uploads/$product->image") }}" alt="{{ $product->name }}">
                                            </div>
                                            <div class="col-md-12 mt-3 pb-1 pl-4">
                                                <h4 class="text-white">{{ $product->name }}</h4>
                                                <hr>
                                                <p class="text-white d-flex justify-content-between"> <span>Location:</span> <span class="font-weight-bold ls-1">{{ $product->location }}</span> </p>
                                            </div>
                                        </div>
                                    </div>

                                @endforeach
                            </div>

                            <div class="tab-pane row fade show" id="v-pills-videos" role="tabpanel" aria-labelledby="v-pills-videos-tab">
                                @foreach($videos as $video)

                                    <div class="col-md-6 kh-cont">
                                        <div class="col-md-12 kh-back p-0">
                                            <div class="col-md-12 overflow-hidden img-cont p-0 b-rad">
                                                <iframe class="img-fluid" style="width: 100%; height: 300px" src="{{ "https://www.youtube.com/embed/$video->video_id" }}" frameborder="0" allowfullscreen></iframe>
                                            </div>
                                            <div class="col-md-12 mt-3 pb-1 pl-4">
                                                <h5 class="text-white">{{ $video->title }}</h5>
                                            </div>
                                        </div>
                                    </div>

                                @endforeach
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
