 <!--  Professor   -->
        <section id="team" class="page">
            <section class="section bg-gray-color">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <hgroup class="section-title align-center opacity">
                                <h1 class="header-title">meet our <span>Faculty</span></h1>
                                <h2>We are great Faculty in a university</h2> 
                            </hgroup>
                        </div>
                    </div>
                    <!--/ .row-->
                </div>
                <!--/ .container-->
                <section class="team-member">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <div id="team-slider" class="owl-carousel owl-theme team-contents clearfix">
                                    
                                @foreach($professors as $professor)
                                    <div class="item scale">
                                        <div class="contents clearfix">
                                            <div class="team-info">
                                                <div class="team-image">
                                                    <a class="single-image team-plus-icon" href="{{ url('/facultyprofile', $professor->id) }}"><img src="{{ $professor->photourl1 }}" alt="" /></a>
                                                </div>
                                                <hgroup class="team-group">
                                                    @if(strlen($professor->name) > 13)
                                                    <h4 class="team-title">  
                                                    {{ $professor->name }}
                                                    </h4>
                                                     @else
                                                      <h4 class="team-title">
                                                    {{ $professor->name }}
                                                    </h4>
                                                    <br>
                                                     @endif
                                                    
                                                    <h5 class="team-position">{{ $professor->positions }}</h5> 
                                                </hgroup>
                                            </div>
                                            <!--/ .team-info-->
                                        </div>
                                        <!--/ .contents-->
                                    </div>
                                @endforeach
                                </div>
                                <!--/ .team-contents-->
                            </div>
                        </div>
                        <!--/ .row-->
                    </div>
                    <!--/ .container-->
                </section>
                <!--/ .team-member-->
            </section>
            <!--/ .section-->