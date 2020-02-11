@extends("layouts.client")
@section("content")
    <div class="home d-flex align-items-center" style="background-image: url('{{ asset("site/images/home-bg.jpg") }}')">
        <section class="bg-section position-relative">
            <div class="container-fluid">
                <h1 class="home-h1 ml-5">Khatchkars For You</h1>
                <h3 class="ml-5 mt-3">We Make Khatchkars for 50 Years</h3>
            </div>
        </section>
    </div>
    <section class="work-section position-relative pt-5">
        <div class="container">
            <h1 class="title text-center text-white">Recent Works</h1>
            <div class="row mt-5">
                @foreach($recent as $r)

                    <div class="col-md-4 kh-cont">
                        <div class="col-md-12 overflow-hidden img-cont">
                            <img class="img-fluid" src="{{ asset("uploads/$r->image") }}" alt="{{ $r->name }}">
                        </div>
                        <div class="col-md-12 mt-3">
                            <p class="text-center text-white">{{ $r->name }}</p>
                        </div>
                        <div class="col-md-12">
                            <p class="text-center text-white">${{ $r->price }}</p>
                        </div>
                    </div>

                @endforeach

            </div>
        </div>
    </section>
@endsection
