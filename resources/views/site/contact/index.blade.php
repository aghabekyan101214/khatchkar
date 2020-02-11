@extends("layouts.client")
@section("content")
    <div class="contact">
        <section class="title-section pt-lg-5">
            <div class="container p-lg-5">
                <h1 class="text-center text-white ls-2">Contact Us</h1>
            </div>
        </section>

        <div class="container contact-form">
            <h4 class="ls-2 text-white text-center mb-4">Get In Touch</h4>
            <form class="row justify-content-center" method="post" enctype="multipart/form-data" action="/send-email">
                <div class="col-md-7">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="name" placeholder="Name">
                    </div>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" name="email" placeholder="Email">
                    </div>
                    <div class="input-group mb-3">
                        <input type="tel" class="form-control" name="phone" placeholder="Phone">
                    </div>
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" name="image" placeholder="Phone">
                    </div>
                    <div class="input-group mb-3">
                        <textarea name="message" placeholder="Message" class="form-control" cols="20" rows="5"></textarea>
                    </div>
                    <div class="input-group mb-3 justify-content-end">
                        <input type="submit" class="btn btn-default" value="Send">
                    </div>
                </div>
            </form>
        </div>

    </div>
@endsection
