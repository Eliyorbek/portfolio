<section id="contact" class="contact section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>{{__('words.contact')}}</h2>
        <p>{{__('contact.call')}}</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

            <div class="col-lg-5">

                <div class="info-wrap">
                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                        <i class="bi bi-geo-alt flex-shrink-0"></i>
                        <div>
                            <h3>{{__('contact.address')}}</h3>
                            <p>Farg'ona viloyati , Oltiariq tumani , G'alaba ko'chasi 85-uy</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                        <i class="bi bi-telephone flex-shrink-0"></i>
                        <div>
                            <h3>{{__('contact.phone')}}</h3>
                            <p><a href="tel:+998905577074" style="color: #000;">(+998)90 557-7074</a> | <a href="tel:+998889571632" style="color: #000;">(+998)88 957-16-32</a></p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                        <i class="bi bi-telegram flex-shrink-0"></i>
                        <div>
                            <h3>Telegram</h3>
                            <p><a href="https://t.me/eliyorbek_tojimatov" style="color: #000;">eliyorbek_tojimatov</a></p>
                        </div>
                    </div><!-- End Info Item -->

                    <iframe src="https://www.google.com/maps/embed?pb=!1m13!1m8!1m3!1d6078.061327269311!2d71.447204!3d40.386013!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNDDCsDIzJzA5LjciTiA3McKwMjYnNDkuOSJF!5e0!3m2!1sen!2s!4v1733303528116!5m2!1sen!2s" width="600" height="450"
                            style="border:0; width: 100%; height: 170px !important;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                </div>
            </div>

            <div class="col-lg-7">
                <form action="{{route('contact.store')}}" method="POST" class="php-email-form">
                      @csrf
                    <div class="row gy-4">

                        <div class="col-md-6">
                            <label for="name-field" class="pb-2">{{__('words.ism')}}</label>
                            <input type="text" name="name" id="name-field" placeholder="{{__('words.ismKir')}}" class="form-control" required="">
                        </div>

                        <div class="col-md-6">
                            <label for="email-field" class="pb-2">{{__('words.phone')}}</label>
                            <input type="phone" class="form-control" placeholder="{{__('words.phoneKir')}}" name="phone" id="email-field" required="">
                        </div>

                        <div class="col-md-12">
                            <label for="message-field" class="pb-2">{{__('words.message')}}</label>
                            <textarea class="form-control" placeholder="{{__('words.habarYoz')}}" name="message" rows="10" id="message-field"
                                      required=""></textarea>
                        </div>

                        <div class="col-md-12 text-center">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>

                            <button type="submit">Send Message</button>
                        </div>

                    </div>
                </form>
            </div><!-- End Contact Form -->

        </div>

    </div>

</section>
