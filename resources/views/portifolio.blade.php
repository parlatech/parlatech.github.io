@extends('menu')
@section('title', 'Portifólio')
@section('conteudo')
    <!-- ***** Breadcumb Area Start ***** -->
    <div class="mosh-breadcumb-area" style="background-image: url(img/core-img/breadcumb.png);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="bradcumbContent">
                        <h2>Portfólio</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Principal</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Conheça nossas Tecnologias</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Breadcumb Area End ***** -->

    <!-- ***** Portfolio Area Start ***** -->
    <section class="mosh-portfolio-area section_padding_100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="mosh-projects-menu">
                        <div class="portfolio-menu">
                            <p class="active" data-filter="*">All</p>
                            <p data-filter=".gd">Graphic Design</p>
                            <p data-filter=".bi">Brand Identity</p>
                            <p data-filter=".pho">Photography</p>
                            <p data-filter=".wd">Web Design</p>
                            <p data-filter=".pc">Printing Colaterall</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mosh-portfolio">
            <!-- Single gallery Item Start -->
            <div class="single_gallery_item gd">
                <img src="img/portfolio-img/1.jpg" alt="">
                <div class="gallery-hover-overlay d-flex align-items-center justify-content-center">
                    <div class="port-hover-text text-center">
                        <h4>DFR Corp. Branding</h4>
                        <a href="#">Brand Identity</a>
                    </div>
                </div>
            </div>
            <!-- Single gallery Item Start -->
            <div class="single_gallery_item bi">
                <img src="img/portfolio-img/2.jpg" alt="">
                <div class="gallery-hover-overlay d-flex align-items-center justify-content-center">
                    <div class="port-hover-text text-center">
                        <h4>DFR Corp. Branding</h4>
                        <a href="#">Brand Identity</a>
                    </div>
                </div>
            </div>
            <!-- Single gallery Item Start -->
            <div class="single_gallery_item gd bi">
                <img src="img/portfolio-img/3.jpg" alt="">
                <div class="gallery-hover-overlay d-flex align-items-center justify-content-center">
                    <div class="port-hover-text text-center">
                        <h4>DFR Corp. Branding</h4>
                        <a href="#">Brand Identity</a>
                    </div>
                </div>
            </div>
            <!-- Single gallery Item Start -->
            <div class="single_gallery_item pho">
                <img src="img/portfolio-img/4.jpg" alt="">
                <div class="gallery-hover-overlay d-flex align-items-center justify-content-center">
                    <div class="port-hover-text text-center">
                        <h4>DFR Corp. Branding</h4>
                        <a href="#">Brand Identity</a>
                    </div>
                </div>
            </div>
            <!-- Single gallery Item Start -->
            <div class="single_gallery_item pho">
                <img src="img/portfolio-img/5.jpg" alt="">
                <div class="gallery-hover-overlay d-flex align-items-center justify-content-center">
                    <div class="port-hover-text text-center">
                        <h4>DFR Corp. Branding</h4>
                        <a href="#">Brand Identity</a>
                    </div>
                </div>
            </div>
            <!-- Single gallery Item Start -->
            <div class="single_gallery_item wd pc">
                <img src="img/portfolio-img/6.jpg" alt="">
                <div class="gallery-hover-overlay d-flex align-items-center justify-content-center">
                    <div class="port-hover-text text-center">
                        <h4>DFR Corp. Branding</h4>
                        <a href="#">Brand Identity</a>
                    </div>
                </div>
            </div>
            <!-- Single gallery Item Start -->
            <div class="single_gallery_item wd">
                <img src="img/portfolio-img/7.jpg" alt="">
                <div class="gallery-hover-overlay d-flex align-items-center justify-content-center">
                    <div class="port-hover-text text-center">
                        <h4>DFR Corp. Branding</h4>
                        <a href="#">Brand Identity</a>
                    </div>
                </div>
            </div>
            <!-- Single gallery Item Start -->
            <div class="single_gallery_item pc">
                <img src="img/portfolio-img/8.jpg" alt="">
                <div class="gallery-hover-overlay d-flex align-items-center justify-content-center">
                    <div class="port-hover-text text-center">
                        <h4>DFR Corp. Branding</h4>
                        <a href="#">Brand Identity</a>
                    </div>
                </div>
            </div>
            <!-- Single gallery Item Start -->
            <div class="single_gallery_item pc">
                <img src="img/portfolio-img/9.jpg" alt="">
                <div class="gallery-hover-overlay d-flex align-items-center justify-content-center">
                    <div class="port-hover-text text-center">
                        <h4>DFR Corp. Branding</h4>
                        <a href="#">Brand Identity</a>
                    </div>
                </div>
            </div>
            <!-- Single gallery Item Start -->
            <div class="single_gallery_item pc">
                <img src="img/portfolio-img/10.jpg" alt="">
                <div class="gallery-hover-overlay d-flex align-items-center justify-content-center">
                    <div class="port-hover-text text-center">
                        <h4>DFR Corp. Branding</h4>
                        <a href="#">Brand Identity</a>
                    </div>
                </div>
            </div>
            <!-- Single gallery Item Start -->
            <div class="single_gallery_item pc">
                <img src="img/portfolio-img/11.jpg" alt="">
                <div class="gallery-hover-overlay d-flex align-items-center justify-content-center">
                    <div class="port-hover-text text-center">
                        <h4>DFR Corp. Branding</h4>
                        <a href="#">Brand Identity</a>
                    </div>
                </div>
            </div>
            <!-- Single gallery Item Start -->
            <div class="single_gallery_item pc">
                <img src="img/portfolio-img/12.jpg" alt="">
                <div class="gallery-hover-overlay d-flex align-items-center justify-content-center">
                    <div class="port-hover-text text-center">
                        <h4>DFR Corp. Branding</h4>
                        <a href="#">Brand Identity</a>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- ***** Portfolio Area End ***** -->

    <!-- ***** Footer Area Start ***** -->
    <footer class="footer-area clearfix">
        <!-- Top Fotter Area -->
        <div class="top-footer-area section_padding_100_0">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget mb-100">
                            <a href="#" class="mb-50 d-block"><img src="img/core-img/logo_rodape.png" alt=""></a>
                            <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellent esque sit amet tellus blandit. Etiam nec odio vestibul.</p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget mb-100">
                            <h5>Fast links</h5>
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Testimonials</a></li>
                                <li><a href="#">Services &amp; Features</a></li>
                                <li><a href="#">Accordions and tabs</a></li>
                                <li><a href="#">Menu ideas</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget mb-100">
                            <h5>Blog</h5>
                            <div class="footer-single--blog-post">
                                <a href="#" class="blog-post-date">
                                    <p>23 September, 2017</p>
                                </a>
                                <a href="#" class="blog-post-title">
                                    <h6>Why we love stock photos</h6>
                                </a>
                            </div>
                            <div class="footer-single--blog-post">
                                <a href="#" class="blog-post-date">
                                    <p>22 September, 2017</p>
                                </a>
                                <a href="#" class="blog-post-title">
                                    <h6>Designin on grid. A few rules. </h6>
                                </a>
                            </div>
                            <div class="footer-single--blog-post">
                                <a href="#" class="blog-post-date">
                                    <p>20 September, 2017</p>
                                </a>
                                <a href="#" class="blog-post-title">
                                    <h6>2017 World Design Congress</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget mb-100">
                            <h5>Contact Info</h5>
                            <div class="footer-single-contact-info d-flex">
                                <div class="contact-icon">
                                    <img src="img/core-img/map.png" alt="">
                                </div>
                                <p>4127/ 5B-C Mislane Road, Gibraltar, UK</p>
                            </div>
                            <div class="footer-single-contact-info d-flex">
                                <div class="contact-icon">
                                    <img src="img/core-img/call.png" alt="">
                                </div>
                                <p>Main: 203-808-8613 <br> Office: 203-808-8648</p>
                            </div>
                            <div class="footer-single-contact-info d-flex">
                                <div class="contact-icon">
                                    <img src="img/core-img/message.png" alt="">
                                </div>
                                <p>office@yourbusiness.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fotter Bottom Area -->
        <div class="footer-bottom-area">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-12 h-100">
                        <div class="footer-bottom-content h-100 d-md-flex justify-content-between align-items-center">
                            <div class="copyright-text">
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
                            </div>
                            <div class="footer-social-info">
                                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ***** Footer Area End ***** -->

@stop
