<section id="stats" class="stats section">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
            <div class="col-lg-3 col-md-6">
                <div class="stats-item">
                    <i class="bi bi-emoji-smile"></i>
                    <span data-purecounter-start="0" data-purecounter-end="{{count($projects)}}"  data-purecounter-duration="1" class="purecounter">+</span>
                    <p><strong>{{__('words.client')}}</strong></p>
                </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-3 col-md-6">
                <div class="stats-item">
                    <i class="bi bi-journal-richtext"></i>
                    <span data-purecounter-start="0" data-purecounter-end="{{count($projects)}}" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>{{__('words.projects')}}</strong></p>
                </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-3 col-md-6">
                <div class="stats-item">
                    <i class="bi bi-headset"></i>
                    <span data-purecounter-start="0" data-purecounter-end="{{count($projects) * 5}}" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>{{__('words.hour')}}</strong></p>
                </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-3 col-md-6">
                <div class="stats-item">
                    <i class="bi bi-people"></i>
                    <span data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>{{__('words.hard')}}</strong></p>
                </div>
            </div><!-- End Stats Item -->

        </div>

    </div>

</section>
