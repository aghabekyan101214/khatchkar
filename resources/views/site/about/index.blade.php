@extends("layouts.client")
@section("content")
    <div class="about-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="ls-2 mb-5 text-white">About Us</h1>
                    <div class="cont mb-5">
                        <h4 class="ls-2 mb-4 text-white">About Our Workshop</h4>
                        <p class="ls-2 text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad adipisci cumque fugiat, non nostrum possimus quo recusandae? Adipisci amet blanditiis perferendis repellendus? Ab at eveniet expedita illum iure recusandae voluptates!</p>
                    </div>
                    <div class="cont mb-5">
                        <h4 class="ls-2 mb-4 text-white">How To Care</h4>
                        <p class="ls-2 text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aperiam aut, consectetur consequuntur delectus, doloribus dolorum, eum facere impedit maxime modi provident quae quasi quo ratione similique tempora temporibus vel!</p>
                    </div>
                    <div class="cont mb-5">
                        <h4 class="ls-2 mb-4 text-white">Our design ethos</h4>
                        <p class="ls-2 text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad, assumenda consequuntur cum dolorem eius eum id minus nulla voluptate voluptatibus. Ab aliquid assumenda dolor dolores iste magnam provident reprehenderit voluptatibus!</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset("site/images/about/about.webp") }}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection
