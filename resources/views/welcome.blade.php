@extends("layouts.frontend")

@section('content')

    <div class="site-blocks-cover" id="home-section">
        <div class="img-wrap">
            <div class="owl-carousel slide-one-item hero-slider">
                <div class="slide">
                    <img src="{{ asset('themes/images/f1.jpg') }}" alt="Free Website Template by Free-Template.co">
                </div>
                <div class="slide">
                    <img src="{{ asset('themes/images/glint_hero_2.jpg') }}" alt="Free Website Template by Free-Template.co">
                </div>
                <div class="slide">
                    <img src="{{ asset('themes/images/glint_hero_3.jpg') }}" alt="Free Website Template by Free-Template.co">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 ml-auto align-self-center">
                    <div class="intro">
                        <div class="heading">
                            <h1>MATE IT</h1>
                        </div>
                        <div class="text">
                            <p class="sub-text mb-5">A transformative combination creating superior value for our clients </p>
                            <p><a href="https://facebook.com/Mate-It-Ltd-450242455384960/" target="_blank" class="btn btn-outline-primary btn-md">We are here too..</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- END .site-blocks-cover -->

    <div class="site-section" id="what-We-Do">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-6 section-title">
                    <span class="sub-title mb-2 d-block">What We Do</span>
                    <h2 class="title text-primary">At Mate IT we materialize what our client desire</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 ml-auto">
                    <div class="row">
                        <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                            <div class="service h-100">
                                <h3>CLOUD SERVICES</h3>
                                <p>We provide cloud based solutions and system for modern applications or based on our customer requirements</p>
                                <p><a href="#" class="readmore">Learn more</a></p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                            <div class="service h-100">
                                <h3>SOFTWARE SUPPORT</h3>
                                <p>We provide full software support to our client as well as to systems that were developed by other providers</p>
                                <p><a href="#" class="readmore">Learn more</a></p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                            <div class="service h-100">
                                <h3>DIGITAL MARKETING</h3>
                                <p>Digital Marketing, product promotions, online support, and many other online based services</p>
                                <p><a href="#" class="readmore">Learn more</a></p>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                            <div class="service h-100">
                                <h3>Mobile Apps</h3>
                                <p>We develop mobile application for all platform based on our customer requirements</p>
                                <p><a href="#" class="readmore">Learn more</a></p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                            <div class="service h-100">
                                <h3>WEB APPLICATION</h3>
                                <p>We develop web application based on any requirements our customers have</p>
                                <p><a href="#" class="readmore">Learn more</a></p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                            <div class="service h-100">
                                <h3>Search Engine Optimization</h3>
                                <p>We develop web application based on any requirements our customers have</p>
                                <p><a href="#" class="readmore">Learn more</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- END .site-section -->

    <div class="site-section" id="about-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5">
                    <img src="{{ asset('themes/images/about.jpg') }}" alt="Free Website Template by Free-Template.co" class="img-fluid">
                </div>
                <div class="col-lg-5 ml-auto section-title">
                    <span class="sub-title mb-2 d-block">Acquaint Us</span>
                    <h2 class="title text-primary mb-3">About us</h2>
                    <p class="mb-4">At Mate IT it is our primary goal to develop and build system they way our client envisions them to be. We hold our clients requirements at the highest of our priority, We materialize what they envisions it to be.</p>
                    <p class="mb-4">Our services are not only valid through the development phase but also the after services. One of our defining factor is we provide extended services after we have delivered our product to our client. our clients are also part of our development phase as they guide our team through when we materialize their product.</p>
                    <p class="mb-4">We provide software solution for mobile application, web application, web services or any services our client need. We also Business marketing solution aor any service required for our client business or marketing need.</p>
                    <div class="d-flex">
                        <ul class="list-unstyled ul-check success mr-5">
                            <li>Design</li>
                            <li>Development</li>
                            <li>Web APPLICATION</li>

                        </ul>
                        <ul class="list-unstyled ul-check success">

                            <li>Mobile Apps</li>
                            <li>Cloud</li>
                            <li>DIGITAL MARKETING</li>
                        </ul>
                    </div>
                    <p><a data-fancybox data-ratio="2" href="https://vimeo.com/326176805" class="d-flex align-items-center"><span class="icon-play_circle_outline h4 m-0 mr-2"></span> <span>Watch the video</span></a></p>
                </div>
            </div>
        </div>
    </div> <!-- .END site-section -->


    <div class="site-section" id="what-we-do-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-6 section-title">
                    <span class="sub-title mb-2 d-block">Meet The Team</span>
                    <h2 class="title text-primary">We are talented people.</h2>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-lg-6 mb-5 person">
                    <img src="{{ asset('themes/images/turza.jpg') }}" alt="Free website template by Free-Template.co" class="img-fluid mb-5">

                    <div class="row">
                        <div class="col-lg-10 ml-auto">
                            <div class="pr-lg-5">
                                <h3>MD. Shaiful Alam Turza</h3>
                                <span class="mb-4 d-block">CEO & Founder</span>
                                <p></p>
                                <p></p>
                                <p class="d-flex align-items-center">
                                    <span class="mr-3 text-black">Follow me:</span>
                                    <a href="#" class="twitter pr-2 pt-2 pb-2 pl-0"><span class="icon-twitter"></span></a>
                                    <a href="#" class="facebook p-2"><span class="icon-facebook"></span></a>
                                    <a href="#" class="dribbble p-2"><span class="icon-dribbble"></span></a>
                                    <a href="#" class="instagram p-2"><span class="icon-instagram"></span></a>
                                    <a href="#" class="linkedin p-2"><span class="icon-linkedin"></span></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 person">
                    <img src="{{ asset('themes/images/oayan.jpg') }}" alt="Free website template by Free-Template.co" class="img-fluid mb-5">
                    <div class="row">
                        <div class="col-lg-10 ml-auto">
                            <div class="pr-lg-5">
                                <h3>Oayan Khondokar</h3>
                                <span class="mb-4 d-block">Chief Technical Officer[C.T.O]</span>
                                <p></p>

                                <p class="d-flex align-items-center">
                                    <span class="mr-3 text-black">Follow me:</span>
                                    <a href="#" class="twitter pr-2 pt-2 pb-2 pl-0"><span class="icon-twitter"></span></a>
                                    <a href="#" class="github p-2"><span class="icon-github"></span></a>
                                    <a href="#" class="dribbble p-2"><span class="icon-dribbble"></span></a>
                                    <a href="#" class="instagram p-2"><span class="icon-instagram"></span></a>
                                    <a href="#" class="linkedin p-2"><span class="icon-linkedin"></span></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row no-gutters">
                    <div class="col-lg-6 mb-5 person">
                        <img src="{{ asset('themes/images/tonmoy.jpg') }}" alt="Free website template by Free-Template.co" class="img-fluid mb-5">
                        <div class="row">
                            <div class="col-lg-10 ml-auto">
                                <div class="pr-lg-5">
                                    <h3>Tonmoy Roy</h3>
                                    <span class="mb-4 d-block">Technical Project Manager[T.P.M]</span>
                                    <p></p>
                                    <p class="d-flex align-items-center">
                                        <span class="mr-3 text-black">Follow me:</span>
                                        <a href="#" class="twitter pr-2 pt-2 pb-2 pl-0"><span class="icon-twitter"></span></a>
                                        <a href="#" class="facebook p-2"><span class="icon-facebook"></span></a>
                                        <a href="#" class="dribbble p-2"><span class="icon-dribbble"></span></a>
                                        <a href="#" class="instagram p-2"><span class="icon-instagram"></span></a>
                                        <a href="#" class="linkedin p-2"><span class="icon-linkedin"></span></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 person">
                        <img src="{{ asset('themes/images/ashik.jpg') }}" alt="Free website template by Free-Template.co" class="img-fluid mb-5">
                        <div class="row">
                            <div class="col-lg-10 ml-auto">
                                <div class="pr-lg-5">
                                    <h3>Ashiqur Rhman</h3>
                                    <span class="mb-4 d-block">Technical Team Lead [T.T.L]</span>
                                    <p></p>
                                    <p></p>
                                    <p class="d-flex align-items-center">
                                        <span class="mr-3 text-black">Follow me:</span>
                                        <a href="#" class="twitter pr-2 pt-2 pb-2 pl-0"><span class="icon-twitter"></span></a>
                                        <a href="#" class="github p-2"><span class="icon-github"></span></a>
                                        <a href="#" class="dribbble p-2"><span class="icon-dribbble"></span></a>
                                        <a href="#" class="instagram p-2"><span class="icon-instagram"></span></a>
                                        <a href="#" class="linkedin p-2"><span class="icon-linkedin"></span></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row no-gutters">
                        <div class="col-lg-6 mb-5 person">
                            <img src="{{ asset('themes/images/ilma.jpg') }}" alt="Free website template by Free-Template.co" class="img-fluid mb-5">
                            <div class="row">
                                <div class="col-lg-10 ml-auto">
                                    <div class="pr-lg-5">
                                        <h3>Irrin Siddique Bristy</h3>
                                        <span class="mb-4 d-block">HR Head</span>
                                        <p></p>
                                        <p class="d-flex align-items-center">
                                            <span class="mr-3 text-black">Follow me:</span>
                                            <a href="#" class="twitter pr-2 pt-2 pb-2 pl-0"><span class="icon-twitter"></span></a>
                                            <a href="#" class="facebook p-2"><span class="icon-facebook"></span></a>
                                            <a href="#" class="dribbble p-2"><span class="icon-dribbble"></span></a>
                                            <a href="#" class="instagram p-2"><span class="icon-instagram"></span></a>
                                            <a href="#" class="linkedin p-2"><span class="icon-linkedin"></span></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 person">
                            <img src="{{ asset('themes/images/salman.jpg') }}" alt="Free website template by Free-Template.co" class="img-fluid mb-5">
                            <div class="row">
                                <div class="col-lg-10 ml-auto">
                                    <div class="pr-lg-5">
                                        <h3>Salman Rahman</h3>
                                        <span class="mb-4 d-block">Technical Team Lead [T.T.L]</span>
                                        <p></p>
                                        <p class="d-flex align-items-center">
                                            <span class="mr-3 text-black">Follow me:</span>
                                            <a href="#" class="twitter pr-2 pt-2 pb-2 pl-0"><span class="icon-twitter"></span></a>
                                            <a href="#" class="github p-2"><span class="icon-github"></span></a>
                                            <a href="#" class="dribbble p-2"><span class="icon-dribbble"></span></a>
                                            <a href="#" class="instagram p-2"><span class="icon-instagram"></span></a>
                                            <a href="#" class="linkedin p-2"><span class="icon-linkedin"></span></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="site-section" id="portfolio-section">
                <div class="container">
                    <div class="row mb-5 ">
                        <div class="col-md-7 section-title text-center mx-auto">
                            <span class="sub-title mb-2 d-block">Recent Works</span>
                            <h2 class="title text-primary mb-3">We love what we do, check out some of our latest works</h2>
                        </div>
                    </div>
                    <!--
                    <div class="row mb-5">
                      <div class="col-lg-6 mb-4 mb-lg-0">
                        <img src="images/sq_img_2.jpg" alt="Free website template by Free-Template.co" class="img-fluid">
                      </div>
                      <div class="col-lg-5 h-100 jm-sticky-top ml-auto">
                        <h3>Project title one</h3>
                        <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                        <p class="mb-4"><a href="#" class="readmore">Visit website</a></p>
                        <div class="testimonial bg-white h-100">
                          <blockquote class="mb-3">
                            <p>&ldquo;Far far away, behind the word mountains, <strong>far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove</strong> right at the coast of the Semantics, a large language ocean.&rdquo;</p>
                          </blockquote>
                          <div class="d-flex align-items-center vcard">
                            <figure class="mb-0 mr-3">
                              <img src="images/person_3.jpg" alt="Free website template by Free-Template.co" class="img-fluid ounded-circle">
                            </figure>
                            <div class="vcard-text">
                              <span class="d-block">Jacob Spencer</span>
                              <span class="position">Web Designer</span>
                            </div>
                          </div>
                        </div> -->
                </div>
            </div>



        </div>
    </div>

    <div class="site-section bg-light">
        <div class="container">
            <div class="row mb-5 ">
                <div class="col-md-7 section-title text-center mx-auto">
                    <span class="sub-title mb-2 d-block">Testimonials</span>
                    <h2 class="title text-primary mb-3">Our Client Sayings</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 mb-4">
                    <div class="testimonial bg-white h-100">
                        <blockquote class="mb-3">
                            <p>&ldquo;Mate IT is proud of bangladesh <strong>who is delivering high quality turn key sollution </strong> and competing with world leaders of IT service.&rdquo;</p>
                        </blockquote>
                        <div class="d-flex align-items-center vcard">
                            <figure class="mb-0 mr-3">
                                <img src="{{ asset('themes/images/person_3.jpg') }}" alt="Free website template by Free-Template.co" class="img-fluid ounded-circle">
                            </figure>
                            <div class="vcard-text">
                                <span class="d-block">Asma Azad</span>
                                <span class="position"></span>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    </div>



    <div class="site-section" id="studio-section">
        <div class="container">

            <div class="row mb-5 ">
                <div class="col-md-7 section-title text-center mx-auto">
                    <span class="sub-title mb-2 d-block">Photos</span>
                    <h2 class="title text-primary mb-3">Studio Gallery</h2>
                </div>
            </div>

            <div id="posts" class="row no-gutter">
                <div class="item web col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
                    <a href="{{ asset('themes/images/01.jpg') }}" class="item-wrap" data-fancybox="gal">
                        <span class="icon-search2"></span>
                        <img class="img-fluid" src="{{ asset('themes/images/01.jpg') }}">
                    </a>
                </div>
                <div class="item web col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
                    <a href="images/12.jpg" class="item-wrap" data-fancybox="gal">
                        <span class="icon-search2"></span>
                        <img class="img-fluid" src="images/12.jpg">
                    </a>
                </div>

                <div class="item brand col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
                    <a href="images/02.jpg" class="item-wrap" data-fancybox="gal">
                        <span class="icon-search2"></span>
                        <img class="img-fluid" src="images/02.jpg">
                    </a>
                </div>

                <div class="item design col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
                    <a href="images/04.jpg" class="item-wrap" data-fancybox="gal">
                        <span class="icon-search2"></span>
                        <img class="img-fluid" src="images/04.jpg">
                    </a>
                </div>

                <div class="item web col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
                    <a href="images/05.jpg" class="item-wrap" data-fancybox="gal">
                        <span class="icon-search2"></span>
                        <img class="img-fluid" src="images/05.jpg">
                    </a>
                </div>

                <div class="item brand col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
                    <a href="images/06.jpg" class="item-wrap" data-fancybox="gal">
                        <span class="icon-search2"></span>
                        <img class="img-fluid" src="images/06.jpg">
                    </a>
                </div>

                <div class="item web col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
                    <a href="images/07.jpg" class="item-wrap" data-fancybox="gal">
                        <span class="icon-search2"></span>
                        <img class="img-fluid" src="images/07.jpg">
                    </a>
                </div>

                <div class="item web col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
                    <a href="images/08.jpg" class="item-wrap" data-fancybox="gal">
                        <span class="icon-search2"></span>
                        <img class="img-fluid" src="images/08.jpg">
                    </a>
                </div>

                <div class="item design col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
                    <a href="images/09.jpg" class="item-wrap" data-fancybox="gal">
                        <span class="icon-search2"></span>
                        <img class="img-fluid" src="images/09.jpg">
                    </a>
                </div>
                <!--
                <div class="item brand col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
                  <a href="images/10.jpg" class="item-wrap" data-fancybox="gal">
                    <span class="icon-search2"></span>
                    <img class="img-fluid" src="images/10.jpg">
                  </a>
                </div>

                <div class="item design col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
                  <a href="images/13.jpg" class="item-wrap" data-fancybox="gal">
                    <span class="icon-search2"></span>
                    <img class="img-fluid" src="images/13.jpg">
                  </a>
                </div>
                -->

            </div>
        </div>
    </div>

@endsection


@section('contact')

    <div class="site-section" id="contact-section">
        <div class="container">
            <form action="{{route('contact.store')}}" class="contact-form" method="post">
                {{csrf_field()}}

                <div class="section-title text-center mb-5">
                    <span class="sub-title mb-2 d-block">Get In Touch</span>
                    <h2 class="title text-primary">Contact Us</h2>
                </div>

                <div class="row mb-4">
                    <div class="col-md-6 mb-4 mb-md-0">
                        <input type="text" class="form-control" placeholder="First name" name="fname" required="required">
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="Last name" name="lname" required>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-12">
                        <input type="email" class="form-control" placeholder="Email" name="email" required="required">
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-12">
                        <textarea class="form-control" name="description" id="" cols="30" rows="10" placeholder="Message" required="required"></textarea>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-md">Send Message</button>
                    </div>
                </div>

            </form>
        </div>
    </div> <!-- END .site-section -->
    @endsection


@section('subscribe')
    <div id="app">
        <vue-subscribe></vue-subscribe>
    </div>

    @endsection
