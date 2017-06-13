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
        @foreach($ourgallerys as $ourgallery)



        @endforeach
        <ul id="gallery-items" class="portfolio-items">

            @foreach($ourgallerys as $ourgallery)
            <li class="photo mix mix_all opacity2x">




              
            <!--     <video width="350" height="250px" controls>
                  <source src="<?php echo url(); ?>{{ $ourgallery->photourl1 }}" type="video/mp4">
                    
                      Your browser does not support the video tag.
                  </video>  -->
                
                  <div class="work-item"> 
                    <img src="{{ $ourgallery->photourl1 }}" alt="" style="width: 466px;height: 250px;"/>

                    <div class="image-extra">
                        <div class="extra-content">
                            <div class="inner-extra">
                                <h2 class="extra-title">{{ $ourgallery->name }}</h2>
                                <h6 class="extra-category">{{ $ourgallery->type }}</h6>


                                @if($ourgallery->type==='youtubelink')
                                <a class="single-image plus-icon" data-fancybox-group="folio" href="{{ $ourgallery->youtubelink }}"></a>
                                @elseif($ourgallery->type==='video')
                                <a class="single-image plus-icon" href="{{ $ourgallery->photourl2 }}"></a>
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