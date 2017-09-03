@extends('layouts.defaultblog')
@section('content')
<section class="section" id="blog">
    <div id="content">
        <div class="container">
            <!-- <div class="row">
                <div class="col-xs-12">
                    <hgroup class="section-title align-center">
                        <h1>Blog Single</h1> 
                    </hgroup>
                </div>
            </div> -->
            <!--/ .row-->
            <div class="row">
                <section id="main" class="col-md-8">
                    <article class="entry main-entry single">
                        <div class="entry-image"> <img src="<?php echo url(); ?>{{ $blogdetail->photourl1 }}" alt="" /> </div>
                        <!--/ .entry-image-->
                        <div class="entry-meta"> <span class="date">{{ $blogdetail->created_at }}</span> <!-- <span>in <a href="#">Design</a></span> --> <span>by {{ $blogdetail->bloger }}</span> <!-- <span>0 Comments</span> --> </div>


                            <a href="javascript:fbshareCurrentPage()" target="_blank" alt="Share on Facebook"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADkAAAAUCAMAAAAA9GVfAAACnVBMVEU0TI01TIw1TY01TY41TY81To82TY42TY85UZU6U5k7VJs7VZ07VaE8VZs8Vp08VqE8VqI8V6I9Vp49V6A9V6M+WJ8+WKA+WKQ+WaQ+WaU/WaM/WaQ/WaY/WqY/WqdAW6ZAW6dAW6hBW6dBXKhBXKlCXapCXatCXqpCXqxDXqtDXqxDX6xEX65EYK5EYK9FX65FYK9FYa9FYbBGYbBGYrFGYrJHYrFHY7JHY7NIZLNIZLRIZbRJZbVJZrZKZrZKZ7dLZ7hLaLhLaLlMablSaKpSaaxTaq1ZcbVbc7hfdLJfdbNfdbRfdrZgdrdhd7dhe8Fiebtie8Fofr9qgcFsgb5shMVthcZugrhugrtvgrxwhL1whL5xhb9xhcBzh8JziL9ziMJziMN1isV1isZ2iL12ir52isF5jMWAjreAk8eEk7+ElMOFlseFmMiIl7yKmsqOnL+RnsGSnsGVpdCXp9SeqsmfrNKfrNOfrdSgrdOgrdSgrtOgrtWhrtShrtWhr9Sir9WisNaisNejsNimstWoss+qtM+suNesudyuudmwvNyyvNazvNizvdqzvtqzvtu0vtu0vty0v9y0v961v921v962v9i3v9a3wd24wt65wtu5w+G8xeG8xuG9xNq+xtzAyeHAyePByuHCyd7Dy+DEzOPFzOHGz+fGz+nJ0OLL0uXN1OjP1urQ1+vS1+bS2OfT2evU2uzV2+vW2+jY3evZ3uzZ3u3b4O7c4vHd4ezd4/Le4/Df4+3f4+/g5PHg5fHh5vHk5/Dk6PLn6vXo6/Xo7Pbp7PTq7fbr7vTr7vbt8Pbx8vfx8vjx8/j09fr09vn19vr19/v29/r3+Pv5+vz6+/z6+/37+/37/P78/P38/P78/f79/f7+/v////+ZYdejAAACCUlEQVR4AWNYEebkTAYMXMHg7+BIFgxlsLMnEzLY2tja7LqHBHYARYiBDFbWVtb3UABQhBjIYGlhaQHTszw5uOTePZCIpakoEwOvmQarMpCNHTKYmJuYQzUeBbKT7t0DiZj4rbtzd09K49UpQDZ2yGBibGIM1dlsEnQESIFETFquL+i4sbzhajcbs5SxkRATA6e+PCMHs5IYMxOfAVgFg56hniFUZ5NeIogCiehNvjuPS12v/uqxazcXa3uvv3P3YOqke6duzVx5687mcLAKBl0dXR2wviNNcboeTbPv3QOJ6KYfv7szT6L26u6EQ6czu85ktd6cOOnepoBZF4oKLy0Dq2DQ0tbSButcC2JpFd+7B6a1QxZevD2t+uoMrVXnc13a9l65N2HCvQnaW0Aq94FVMGiqaaqBdR6uidV0r1lz7x5IRJObRTr+xLEZV/s1V53PWXJ9afvVfqBOta3ns6XZhcEqGFRUVVSh/qxTiQFRIBGV1ddKM84e6LzapwLUue1ywfy7Pb33elXn3J5eemUuWAWDiqKKIlRnlUo0WKciEKbtv3P3ZH7ttSkqqy/mVJy7e/zyhqn3pir6brh1Z6MPWAWDnIKcAlRnpVwUiAKKEAMZZGVkZaA6y2UjQRRQhBjIIC4pLrkdorNMPAJIbgeKEAMZxEXIhAxuggJkQS+GRZ78PGRA10UAUdSA0BPiLlkAAAAASUVORK5CYII=" width="57" /></a>

                        <!--/ .entry-meta-->
                        <h2 class="entry-title">{{ $blogdetail->title }}</h2>
                        <!--/ .entry-title-->
                        <div class="entry-body">
                            <p>{{ $blogdetail->content }}</p>
                        </div>
                        <!--/ .entry-body-->
                       <!--  <span class="tags">
                            <a href="#">Gallery</a>
                            <a href="#">Post</a>
                        </span> -->
                        <!--/ .tags-->
                    </article>
                    <!--/ .entry-->
                    <!-- <div class="single-post-nav clearfix"> <a title="Previous post" class="prev" href="#">Previous Post</a> <a title="Next post" class="next" href="#">Next Post</a> </div> -->
                    <!--/ .single-post-nav-->

                </section>
                <!--/ #main-->
                <aside id="sidebar" class="col-md-4">
                    <!-- <div class="widget widget_search">
                        <form action="http://html.webtemplatemasters.com/" id="searchform" method="get">
                            <p>
                                <input placeholder="Search" type="text" value="" name="s">
                                <button class="submit-search" type="submit">Search</button>
                            </p>
                        </form>
                    </div> -->
                    <!--/ .widget-->
                    <!-- <div class="widget widget_text">
                        <h3 class="widget-title">Text Widget</h3>
                        <div class="textwidget"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ut lacus at velit consequat sodales. Ut posuere neque in molestie gravida. Integer eu feugiat neque, elementum posuere purus. </div>
                    </div> -->
                    <!--/ .widget-->
                    <div class="widget widget_categories">
                        <h3 class="widget-title">Categories</h3>
                        <ul>
                            @foreach($categorys as $category)
                            <li><b><a href="{{ url('/courselists', $category->id) }}" style="color: #1e26b0;">{{ $category->name }}</a></b></li>
                            @endforeach
                        </ul>
                    </div>
                    <!--/ .widget-->
                   <!--  <div class="widget widget_tag_cloud">
                        <h3 class="widget-title">Tags</h3>
                        <div class="tagcloud"> <a href="#">Web</a> <a href="#">Video</a> <a href="#">Business</a> </div>
                    </div> -->
                    <!--/ .widget-->
                    <div class="widget widget_recent_posts">
                        <h3 class="widget-title">Recent Blogs</h3>
                        <section>

                        @foreach($bloglists as $bloglist)
                            <article class="entry">
                                <div class="entry-image">
                                    <a href="{{ url('/blogdetails', $bloglist->id) }}" class="single-image"> <img alt="" src="<?php echo url(); ?>{{ $bloglist->photourl1 }}" style="width: 70px;"/> </a>
                                </div>
                                <!--/ .entry-image-->
                                <div class="post-holder">
                                    <div class="entry-meta"> <span class="date">{{ $bloglist->created_at }}</span><!--  <span>0 Comments</span>  --></div>
                                    <!--/ .entry-meta-->
                                    <h6 class="entry-title">
                                     <a href="{{ url('/blogdetails', $bloglist->id) }}">{{ substr($bloglist->content,0, 70) }}...</a>
                                 </h6> 
                             </div>
                             <!--/ .post-holder-->
                         </article>
                         @endforeach
            
                 <!--/ .entry-->
             </section>
         </div>
         <!--/ .widget-->
       <!--   <div class="widget widget_archive">
            <h3 class="widget-title">Archives</h3>
            <ul>
                <li><a href="#">September 2013</a></li>
                <li><a href="#">August 2013</a></li>
            </ul>
        </div> -->
        <!--/ .widget-->
    </aside>
    <!--/ #sidebar-->
</div>
<!--/ .row-->
</div>
<!--/ .container-->
</div>
<!--/ #content-->
</section>
@stop