@extends("layouts.client")
@section("content")
    <link rel="stylesheet" type="text/css" href="{{ asset("site/upload/css/normalize.css") }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset("site/upload/css/component.css") }}" />
    <div class="contact">

        <div class="container pt-5">
            <div class="row">
                <div class="col-12">
                    <div class="map-cont">
                        <iframe style="width: 100%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2993.7262106838975!2d-81.82543158502762!3d41.380032804414775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8830eb9d516fcbb9%3A0xf9b3ab671a2e30a6!2s6909%20Engle%20Rd%2C%20Middleburg%20Heights%2C%20OH%2044130%2C%20USA!5e0!3m2!1sen!2s!4v1592201060290!5m2!1sen!2s" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        <div class="about-cont">
                            <p><b>MYKHATCHKAR.COM Inc.</b></p>
                            <p><b>6909 Engle Road,</b></p>
                            <p><b>Units 6-7,</b></p>
                            <p><b>Middleburg Heights,</b></p>
                            <p><b>OH 44130, USA.</b></p>
                            <p><small>Telephone: +14409153610, +14409159530</small></p>
                            <p><small>Fax: 14408264405</small></p>
                            <p><small>E-mail: </small><small style="color: #94736a">mykhatchkar@gmail.com</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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
                        <input type="text" autocomplete="off" class="form-control" name="name" placeholder="Name">
                    </div>
                    <div class="input-group mb-3">
                        <input type="email" autocomplete="off" class="form-control" name="email" placeholder="Email">
                    </div>
                    <div class="input-group mb-3">
                        <input type="tel" autocomplete="off" class="form-control" name="phone" placeholder="Phone">
                    </div>
{{--                    <div class="input-group mb-3">--}}
{{--                        <input type="file" autocomplete="off" class="form-control" name="image" placeholder="Phone">--}}
{{--                    </div>--}}
                    <div class="box">
                        <input style="display: none" type="file" name="image" id="file-1" class="inputfile inputfile-1" data-multiple-caption="{count} files selected" multiple />
                        <label for="file-1" style="width: 100%; max-width: 100%; background: black"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span>Choose a file&hellip;</span></label>
                    </div>
                    <div class="input-group mb-3">
                        <textarea name="message" autocomplete="off" placeholder="Message" class="form-control" cols="20" rows="5"></textarea>
                    </div>
                    <div class="input-group mb-3 justify-content-end">
                        <input type="submit" class="btn btn-default" value="Send">
                    </div>
                </div>
            </form>
        </div>

    </div>
    <script src="{{ asset("site/upload/js/custom-file-input.js") }}"></script>
@endsection
