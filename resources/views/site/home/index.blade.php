@extends("layouts.client")
@section("content")
    <div class="home d-flex align-items-center" style="background-image: url('{{ asset("site/images/home-bg.jpg") }}')">
        <section class="bg-section position-relative">
            <div class="container-fluid">
                <h1 class="home-h1 ml-5">My Khatchkar</h1>
                <h3 class="ml-5 mt-3 text-white">Hand Carved Monuments</h3>
            </div>
        </section>
    </div>
    <section class="work-section position-relative pt-5">
        <div class="container">
            <h1 class="title text-center text-white">Recent Works</h1>
            <div class="row mt-5 pb-5">
                @foreach($recent as $r)

                    <div class="col-md-4 kh-cont">
                        <div class="col-md-12 kh-back p-0">
                            <div class="col-md-12 overflow-hidden img-cont p-0 b-rad">
                                <img class="img-fluid" src="{{ asset("uploads/$r->image") }}" alt="{{ $r->name }}">
                            </div>
{{--                            <div class="col-md-12 mt-3 pb-1 pl-4">--}}
{{--                                <h4 class="text-white">{{ $r->name }}</h4>--}}
{{--                                <hr>--}}
{{--                                <p class="text-white d-flex justify-content-between"> <span>Type:</span> <span class="font-weight-bold ls-1">{{ $r->type->name }}</span></p>--}}
{{--                                <p class="text-white d-flex justify-content-between"> <span>Material:</span> <span class="font-weight-bold ls-1">{{ $r->material }}</span> </p>--}}
{{--                                <p class="text-white d-flex justify-content-between"> <span>Height:</span> <span class="font-weight-bold ls-1">{{ $r->height }}</span> </p>--}}
{{--                                <p class="text-white d-flex justify-content-between"> <span>Width:</span> <span class="font-weight-bold ls-1">{{ $r->width }}</span> </p>--}}
{{--                                <p class="text-white d-flex justify-content-between"> <span>Thickness:</span> <span class="font-weight-bold ls-1">{{ $r->thickness }}</span> </p>--}}
{{--                            </div>--}}
                        </div>
                    </div>

                @endforeach

                    <div class="col-md-12">
                        <h1 class="title text-center text-white">Our Mission Is</h1>
                        <h4 class="text-white text-center mb-5">We are a social enterprise, which imports Khatchkars from Armenia. </h4>
                        <p class="text-white ls-1">Our mission is <br>
                            To support the Armenian Church and Cultural sustainability in the Diocese
                            10% of each order will be donated to The Armenian Parish or organization of your choice.</p>
                        <p class="text-white ls-1">To support artists in Armenia to keep Khatchkar making traditions alive.
                            With this enterprise, we aim to restore the destroyed Khatchkars from Djugha and other parts of Historic Armenia by recreating the designs.
                        </p>
                        <p class="text-white ls-1">Our Khatchkar makers are experienced in their work and some of them are well known in Armenia and all over the world. The works of our artists are standing in several countries, such as the United States, The Baltic States, Russia, France and many more.</p>
                        <p class="text-white ls-1">God bless all of us, we are a blessed nation, we are survivors and creators.</p>
                    </div>

            </div>
        </div>
    </section>
@endsection
