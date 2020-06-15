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
                                <a class="nav-link pl-0 active" id="v-pills-all-tab" data-toggle="pill" href="#v-pills-all" role="tab" aria-controls="v-pills-all" aria-selected="true">All Products</a>
                                @foreach($items as $bin => $i)
                                    <a class="nav-link pl-0" id="v-pills-{{ $i->id }}-tab" data-toggle="pill" href="#v-pills-{{ $i->id }}" role="tab" aria-controls="v-pills-{{ $i->id }}" aria-selected="true">{{ $i->name }}</a>
                                @endforeach
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
                                                <p class="text-white d-flex justify-content-between"> <span>Price:</span> <span class="font-weight-bold ls-1">${{ $product->price }}</span> </p>
                                                <p class="text-white d-flex justify-content-between"> <span>Type:</span> <span class="font-weight-bold ls-1">{{ $product->type->name }}</span></p>
                                                <p class="text-white d-flex justify-content-between"> <span>Material:</span> <span class="font-weight-bold ls-1">{{ $product->material }}</span> </p>
                                                <p class="text-white d-flex justify-content-between"> <span>Height:</span> <span class="font-weight-bold ls-1">{{ $product->height }}</span> </p>
                                                <p class="text-white d-flex justify-content-between"> <span>Width:</span> <span class="font-weight-bold ls-1">{{ $product->width }}</span> </p>
                                                <p class="text-white d-flex justify-content-between"> <span>Thickness:</span> <span class="font-weight-bold ls-1">{{ $product->thickness }}</span> </p>
                                            </div>
                                        </div>
                                    </div>

                                @endforeach
                            </div>
                            @foreach($items as $bin => $item)
                                <div class="tab-pane row fade show" id="v-pills-{{ $item->id }}" role="tabpanel" aria-labelledby="v-pills-{{ $item->name }}-tab">
                                    @foreach($item->items as $i)

                                        <div class="col-md-4 kh-cont">
                                            <div class="col-md-12 kh-back p-0">
                                                <div class="col-md-12 overflow-hidden img-cont p-0 b-rad">
                                                    <img class="img-fluid" src="{{ asset("uploads/$i->image") }}" alt="{{ $i->name }}">
                                                </div>
                                                <div class="col-md-12 mt-3 pb-1 pl-4">
                                                    <h4 class="text-white">{{ $i->name }}</h4>
                                                    <hr>
                                                    <p class="text-white d-flex justify-content-between"> <span>Price:</span> <span class="font-weight-bold ls-1">${{ $i->price }}</span> </p>
                                                    <p class="text-white d-flex justify-content-between"> <span>Type:</span> <span class="font-weight-bold ls-1">{{ $i->type->name }}</span></p>
                                                    <p class="text-white d-flex justify-content-between"> <span>Material:</span> <span class="font-weight-bold ls-1">{{ $i->material }}</span> </p>
                                                    <p class="text-white d-flex justify-content-between"> <span>Height:</span> <span class="font-weight-bold ls-1">{{ $i->height }}</span> </p>
                                                    <p class="text-white d-flex justify-content-between"> <span>Width:</span> <span class="font-weight-bold ls-1">{{ $i->width }}</span> </p>
                                                    <p class="text-white d-flex justify-content-between"> <span>Thickness:</span> <span class="font-weight-bold ls-1">{{ $i->thickness }}</span> </p>
                                                </div>
                                            </div>
                                        </div>

                                    @endforeach
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
