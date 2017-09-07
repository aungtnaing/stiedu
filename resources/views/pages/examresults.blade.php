 @extends('layouts.defaultp')
@section('content')
<section class="section" id="blog">
    <div id="content">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <hgroup class="section-title align-center">
                        <h1>Exam Results</h1> 
                    </hgroup>
                </div>
            </div>
            <!--/ .row-->
            <div class="row">
                <section id="main" class="col-md-8">
                    <article class="entry main-entry single">
                      <table class="table table-bordered data-table">
					

							<thead>
								<tr>
									
													
									<th>Title</th>
									
									<th></th>
									
								</tr>
							</thead>
							<tbody>

								@foreach($examresults as $examresult)
								<tr lass="gradeX">   
									
									
									<td>{{ $examresult->title }}</td>
									
								
								
									<td>
										<a class="btn btn-mini btn-primary" href="{{ $examresult->photourl1 }}">Get Exam Results</a>
									</td>
									
								</tr>
								@endforeach


							</tbody>
						</table>
                    </article>
                 

                </section>
                <!--/ #main-->
                <aside id="sidebar" class="col-md-4">
                   
                    <div class="widget widget_categories">
                        <h3 class="widget-title">Categories</h3>
                        <ul>
                            @foreach($categorys as $category)
                            <li><b><a href="{{ url('/courselists', $category->id) }}" style="color: #1e26b0;">{{ $category->name }}</a></b></li>
                            @endforeach
                        </ul>
                    </div>
                   
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
                                    @if(strlen($bloglist->title>=70))
                                     <a href="{{ url('/blogdetails', $bloglist->id) }}">{{ substr($bloglist->title,0, 70) }}...</a>
                                     @else
                                     <a href="{{ url('/blogdetails', $bloglist->id) }}">{{ $bloglist->title }}...</a>

                                     @endif
                                 </h6> 
                             </div>
                             <!--/ .post-holder-->
                         </article>
                         @endforeach
            
                 <!--/ .entry-->
             </section>
         </div>
         
    </aside>
    <!--/ #sidebar-->
</div>
<!--/ .row-->
</div>
<!--/ .container-->
</div>
<!--/ #content-->
</section>

    <script language="javascript">
                                function fbshareCurrentPage()
                                {window.open("https://www.facebook.com/sharer/sharer.php?u="+escape(window.location.href)+"&t="+document.title, '', 
                                    'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');
                                return false; }
                            </script>
@stop
