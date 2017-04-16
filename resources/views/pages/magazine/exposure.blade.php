<div class="fancy-title title-border">
						<h3>Exposure</h3>
					</div>

					
					<div class="col_full bottommargin-lg">
						<div class="fslider flex-thumb-grid grid-6" data-animation="fade" data-arrows="true" data-thumbs="true">
							<div class="flexslider">
								<div class="slider-wrap">
								@foreach($exposures as $exposure)
									<div class="slide" data-thumb="{{ $exposure->photourl1 }}">
										<a href="{{ url('/postdetails', $exposure->id) }}">
											<img src="{{ $exposure->photourl2 }}" alt="">
											<div class="overlay">
												<div class="text-overlay">
													<div class="text-overlay-title">
														<h3>{{ $exposure->name }}</h3>
													</div>
													<div class="text-overlay-meta">
														<span>{{ $exposure->subtitle }}</span>
													</div>
												</div>
											</div>
										</a>
									</div>
								@endforeach
							
								</div>
							</div>
						</div>
					</div>