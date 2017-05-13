  <section class="section parallax parallax-bg-2">
    <div class="full-bg-image"></div>
    <div class="parallax-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <hgroup class="section-title align-center opacity">
                    <h2>our top priorities</h2> 
                </hgroup>
            </div>
        </div>
        <!--/ .row-->
        <div class="row">
            <div class="col-xs-12">
                <div class="counter-box">
                    @foreach($priorities as $prioritie)
                    <div data-from="0" data-to="{{ $prioritie->value }}" data-speed="1300" class="counter opacity"> <span class="count"></span>
                        <h4 class="details">{{ $prioritie->name }}</h4> 
                    </div>
                  
                    @endforeach
                    <!--/ .counter-->
                </div>
                <!--/ .counter-box-->
            </div>
        </div>
        <!--/ .row-->
    </div>
    <!--/ .container-->
</section>