<section id="about" class="about section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>{{__('words.about')}}</h2>
        <p></p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 justify-content-center">
            <div class="col-lg-4">
                <img src="/img1.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-lg-8 content">
                <h2>{{__('words.backend')}} </h2>
                <p class="fst-italic py-3">
                   {{__('title.resume')}}
                </p>
                <div class="row">
                    <div class="col-lg-6">
                        <ul>
                            @foreach($about1 as $item)
                                <li><i class="bi bi-chevron-right"></i> <strong>{{$item->name[session('locale')]}}:</strong> <span>{{$item->title}}</span></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <ul>
                            @foreach($about2 as $item)
                                <li><i class="bi bi-chevron-right"></i> <strong>{{$item->name[session('locale')]}}:</strong> <span>{{$item->title}}</span></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <p class="py-3"> {{__('resume.sumary_text')}}</p>
            </div>
        </div>

    </div>

</section>
