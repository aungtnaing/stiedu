        <section class="section border">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <hgroup class="section-title align-center opacity">
                            <h2 style="color:#050930;">Meet our partners</h2> </hgroup>
                        </div>
                    </div>
                    <!--/ .row-->
                    <div class="row">
                        <div class="col-xs-12">
                            <div id="partner-slider" class="owl-carousel owl-theme clients-items">

                                @foreach($partners as $partner)
                                <div class="item opacity2x">
                                    <a href="{{ $partner->urllink }}"><img src="{{ $partner->photourl1 }}" alt="" /></a>
                                </div>
                                
                                @endforeach
                            </div>
                            <!--/ .clients-items-->
                        </div>
                    </div>
                    <!--/ .row-->
                </div>
                <!--/ .container-->
            </section>