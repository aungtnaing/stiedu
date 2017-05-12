 <style type="text/css">
     .imgg {
    
    width:20%;
     max-width: 20%;
     width:70px;
     height:70px;
         text-align: -webkit-center;
    
}
 </style>
 <section class="section parallax parallax-bg-1 bg-turquoise-color">
                <div class="full-bg-image"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12" id="demos">
                            <div id="testiminial-slider" class="owl-carousel owl-theme">
                            @foreach($testimonials as $testimonial)
                                <div class="item align-right">
                                    <blockquote class="quote-text">
                                        <p><?php echo $testimonial->description; ?></p>
                                    </blockquote>
                                    <div class="quote-image"><img class="imgg" alt="Jack Black" src="{{ $testimonial->photourl1 }}" ></div>
                                    <div class="quote-author"><span>{{ $testimonial->name }}, {{ $testimonial->positions }}</span></div>
                                </div>
                            @endforeach   
                            </div>
                            <!--/ .quotes-->
                        </div>
                    </div>
                    <!--/ .row-->
                </div>
                <!--/ .container-->
            </section>