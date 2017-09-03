<section id="blog" class="page">
            <section class="section bg-gray-color">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <hgroup class="section-title align-center opacity">
                                <h1 class="header-title">the <span>Blog</span></h1>
                                <h2>Keep on track of latest news and updates</h2> </hgroup>
                        </div>
                    </div>
                    <!--/ .row-->
                    <div class="row">
                    @foreach($blogs as $blog)
                        <div class="col-sm-6 col-lg-4 slideRight">
                            <article class="entry">
                                <div class="entry-image">
                                    <div class="work-item"> <img src="<?php echo url(); ?>{{ $blog->photourl1 }}" alt="" />
                                        <div class="image-extra">
                                            <div class="extra-content">
                                                <div class="inner-extra">
                                                    <a class="single-image link-icon" href="{{ url('/blogdetails', $blog->id) }}"></a>
                                                    <a class="single-image link-icon" href="{{ url('/blogdetails', $blog->id) }}"></a>
                                                    <a class="single-image plus-icon" data-fancybox-group="blog" href="{{ $blog->photourl1 }}"></a>
                                                </div>
                                                <!--/ .inner-extra-->
                                            </div>
                                            <!--/ .extra-content-->
                                        </div>
                                        <!--/ .image-extra-->
                                    </div>
                                    <!--/ .work-item-->
                                </div>
                                <!--/ .entry-image-->
                               <!--  <div class="entry-meta"> <span class="date"><a href="#">15.11.2013</a></span> <span class="comments">0 Comments</span> </div> -->
                                <!--/ .entry-meta-->
                                <h2 class="entry-title">
                                    <a href="{{ url('/blogdetails', $blog->id) }}">{{ $blog->title }}</a>
                                </h2>
                                <!--/ .entry-title-->
                                <div class="entry-body">
                                   
                                     <p style="color:#050930;">{{ substr($blog->aboutcourse,0, 150) }}...</p>
                                </div>

                                <!--/ .entry-body-->
                            </article>
                            <!--/ .entry-->
                        </div>
                     
                      @endforeach
                    </div>
                    <!--/ .row-->
                   <!--  <div class="col-xs-12">
                        <div class="align-center opacity"> <a href="blog.html" class="button large default">View All Blogs> </div>
                    </div> -->
                     <div class="row">
                        <div class="col-xs-12">
                        <div class="align-center opacityRun view-more-wrap"> <a class="button large success" href="{{ url('/yourblogs') }}">Your Blogs</a> </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12">
                        <div class="align-center opacityRun view-more-wrap"> <a class="button large success" href="{{ url('/bloglists') }}">View All Blogs</a> </div>
                        </div>
                    </div>
                </div>
                <!--/ .container-->
            </section>

</section>