  <!--  Gallery   -->
        <section id="gallery" class="page">
            <section class="section padding-bottom-off">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <hgroup class="section-title align-center opacity">
                                <h1 class="header-title">Our<span>Gallery</span></h1> 
                            </hgroup>
                        </div>
                    </div>
                    <!--/ .row-->
                </div>
                <!--/ .container-->
                <ul id="gallery-items" class="portfolio-items">
                    
                    @foreach($ourgallerys as $ourgallery)
                    <li class="photo mix mix_all opacity2x">
                        <div class="work-item"> <img src="{{ $ourgallery->photourl1 }}" alt="" style="width: 466px;height: 200px;"/>
                            <div class="image-extra">
                                <div class="extra-content">
                                    <div class="inner-extra">
                                        <h2 class="extra-title">{{ $ourgallery->name }}</h2>
                                        <h6 class="extra-category">{{ $ourgallery->type }}</h6>
                                        @if($ourgallery->type==='video')
                                        <a class="single-image plus-icon" data-fancybox-group="folio" href="{{ $ourgallery->youtubelink }}"></a>
                                        @else
                                         <a class="single-image plus-icon" data-fancybox-group="folio" href="{{ $ourgallery->photourl1 }}"></a>
                                         @endif
                                    </div>
                                    <!--/ .inner-extra-->
                                </div>
                                <!--/ .extra-content-->
                            </div>
                            <!--/ .image-extra-->
                        </div>
                        <!--/ .work-item-->
                    </li>
                    @endforeach
                  
                </ul>
                <!--/ .portfolio-items-->
            </section>
            <!--/ .section-->
        </section>
        <!--  end Gallery   -->