 <section id="contacts" class="page">
            <section class="section padding-bottom-off">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <hgroup class="section-title align-center opacity">
                                <h1 class="header-title" style="color:#050930;">Contact Us</h1>
                                <h2 style="color:#050930;">Call Now - 01 507 151</h2>
                                <h2 style="color:#050930;">We look forward to hearing from you</h2> 
                            </hgroup>
                        </div>
                    </div>
                    <!--/ .row-->
                </div>
                <!--/ .container-->
            </section>
           
        </section>

         <section class="section parallax parallax-bg-4">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 opacity">
                            <!-- START CONTACT FORM DESIGN AREA -->
                            <div class="inner contact">
                                <!-- Form Area -->
                                <div class="contact-form">
                                    <!-- Form -->
                                  
                                    <form id="contact-us" action="{{ route("visitors.store") }}" method="POST" enctype="multiGet Brochurespart/form-data">

                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <div class="row">
                                            <!-- Left Inputs -->
                                            <div class="col-xs-12 col-sm-6 col-md-6 wow animated slideInLeft" data-wow-delay=".5s">
                                                <!-- Name -->
                                                <input type="text" name="name" id="name" required="required" class="form" placeholder="Name" />
                                                <!-- Email -->
                                                <input type="text" name="email" id="mail" required="required" class="form" placeholder="Email" />
                                                <!-- Subject -->
                                                <input type="text" name="phone" id="subject" required="required" class="form" placeholder="Phone" /> </div>
                                            <!-- End Left Inputs -->
                                            <!-- Right Inputs -->
                                            <div class="col-xs-12 col-sm-6 col-md-6 wow animated slideInRight" data-wow-delay=".5s">
                                                <!-- Message -->
                                                <textarea name="contentmessage" id="message" class="form textarea" placeholder="Message"></textarea>
                                            </div>
                                            <!-- End Right Inputs -->
                                        </div>
                                        <input type="text" name="like" value="-" style="display:none">
                                        <input type="text" name="type" value="contact" style="display:none">
                                        <input type="text" name="courseid" value="0" style="display:none">
                                        <div class="row">
                                            <!-- Bottom Submit -->
                                            <div class="relative fullwidth col-xs-12 col-sm-12 col-md-12 text-center">
                                                <!-- Send Button -->
                                       
                                                <input class="button turquoise large opacityRun" name="submittype" type="submit" value="Send Message"> 
                                            </div>
                                            <!-- End Bottom Submit -->
                                        </div>
                                        <!-- Clear -->
                                        <div class="clear"></div>
                                    </form>
                                </div>
                                <!-- End Contact Form Area -->
                            </div>
                            <!-- / END CONTACT FORM DESIGN AREA -->
                        </div>
                    </div>
                </div>
                <!--/ .container-->
            </section>