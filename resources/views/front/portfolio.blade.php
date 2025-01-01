<section id="portfolio" class="portfolio section light-background">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Portfolio</h2>
        <p>{{__('words.portfolio_text')}}</p>
    </div><!-- End Section Title -->

    <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

            <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                <li data-filter="*" class="filter-active">All</li>
                @foreach ($categories as $category)
                <li data-filter=".{{$category->name}}">{{$category->name}}</li>
                @endforeach
                
            </ul><!-- End Portfolio Filters -->

            <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

                @foreach ($projects as $project)
                <div class="col-lg-4 col-md-6 portfolio-item isotope-item {{$project->category->name}}">
                    <div class="portfolio-content h-100">
                        <img src="/storage/project_img/{{$project->image}}" style="width: 100%;height:400px;" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>{{$project->name}}</h4>
                            <p>{{$project->name}}</p>
                            <a href="/storage/project_img/{{$project->image}}" title="{{$project->name}}"
                               data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="{{$project->link}}" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach              

            </div><!-- End Portfolio Container -->

        </div>

    </div>

</section>
