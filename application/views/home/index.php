<!-- Header Section -->
<section id="home-header" class="home-header">
    <div class="top-header">
        <div class="container d-flex">
            <a href="tel:+62215918869" class="text-secondary nav-link pl-0">
                <i class="fas fa-phone-alt pr-2"></i>021 5918869
            </a>
            <a href="mailto:info@asiapart.co.id" class="text-secondary nav-link">
                <i class="fas fa-envelope pr-2"></i>info@asiapart.co.id
            </a>
        </div>
    </div>

    <div class="top-nav">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-3">
                    <div class="menu-top-nav"><img src="<?= base_url('assets/images/xd-asset/Menu.png') ?>" alt="Menu"></div>
                </div>
                <div class="col-lg-6 col-9 text-center">
                    <a href="<?= base_url('home'); ?>"><img src="<?= base_url('assets/images/xd-asset/Logo.png') ?>" alt="Asiapart" width="40"></a>
                </div>
                <div class="col-lg-3 text-right">
                    <a href="<?= base_url('aas'); ?>" class="btn btn-primary">Asia Auto Spring</a>
                </div>
            </div>
        </div>
    </div>

    <div class="home-carousel-header">
        <div class="container">
            <div class="slide-header fade-slider">
                <img src="<?= base_url('assets/images/xd-asset/Drive-Steer3.png'); ?>" class="slide-img-size" alt="slide image">
                <div class="text-image-header">
                    <h3>Alloy Wheel ZX097 LS</h3>
                </div>
            </div>

            <div class="slide-header fade-slider">
                <img src="<?= base_url('assets/images/xd-asset/ptt-lubrican.png'); ?>" class="slide-img-size" alt="slide image">
                <div class="text-image-header">
                    <h3>PTT Lubricants Performa</h3>
                </div>
            </div>

            <div class="slide-header fade-slider">
                <img src="<?= base_url('assets/images/xd-asset/SHOEI-Oil-Advance-4T2.png'); ?>" class="slide-img-size" alt="slide image">
                <div class="text-image-header">
                    <h3>SHOEI Advance 4T</h3>
                </div>
            </div>

            <div class="slide-header fade-slider">
                <img src="<?= base_url('assets/images/xd-asset/Champ Chassis Grease.png'); ?>" class="slide-img-size" alt="slide image">
                <div class="text-image-header">
                    <h3>Champ Chassis Grease</h3>
                </div>
            </div>

            <a href="#" class="slide-next" onclick="plusSlides(1)">
                <img class="arrow-left" src="<?= base_url('assets/images/xd-asset/right-arrow.png'); ?>" alt="">
            </a>
            <a href="#" class="slide-prev" onclick="plusSlides(-1)">
                <img class="arrow-right" src="<?= base_url('assets/images/xd-asset/left-arrow.png'); ?>" alt="">
            </a>

            <div class="more-product">
                <a href="<?= base_url('product'); ?>" class="card-link text-secondary">More product
                    <img src="<?= base_url('assets/images/xd-asset/arrow.png'); ?>" alt="arrow" width="15" height="9" class="ml-2">
                </a>
            </div>
        </div>

    </div>

    <!-- The dots/circles -->
    <div class="indicators">
        <span class="indicator" onclick="currentSlide(1)">01</span>
        <span class="indicator" onclick="currentSlide(2)">02</span>
        <span class="indicator" onclick="currentSlide(3)">03</span>
        <span class="indicator" onclick="currentSlide(4)">04</span>
    </div>

    <div class="side-nav">
        <div class="container text-light">
            <div class="side-nav-menu text-center">
                <a href="<?= base_url('home'); ?>" class="d-block mb-3 text-light nav-link p-0">Home</a>
                <a href="<?= base_url('product'); ?>" class="d-block mb-3 text-light nav-link p-0">Product</a>
                <a href="<?= base_url('gallery'); ?>" class="d-block mb-3 text-light nav-link p-0">Gallery</a>
                <a href="<?= base_url('branch'); ?>" class="d-block mb-3 text-light nav-link p-0">Branchs</a>
                <a href="<?= base_url('about'); ?>" class="d-block mb-3 text-light nav-link p-0">About Us</a>
            </div>

            <div class="close-icon">
                <div class="closed-side-nav text-light">
                    <i class="fas fa-times"></i>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Header Section -->

<!-- client -->
<section id="home-clients" class="clients">
    <div class="title-client">
        <h3 class="p-3">
            Our Client
        </h3>
    </div>

    <div class="content-client">
        <div class="container">
            <div class="owl-carousel">

                <div class="card-size">
                    <div class="bg-border-circle">
                        <img src="<?= base_url('assets/images/clients/PT-Autokorindo-Pratama.png') ?>" alt="image" class="client-img">
                    </div>
                    <div class="cb"></div>
                </div>

                <div class="card-size">
                    <div class="bg-border-circle">
                        <img src="<?= base_url('assets/images/clients/DID.png') ?>" alt="image" class="client-img">
                    </div>
                    <div class="cb"></div>
                </div>

                <div class="card-size">
                    <div class="bg-border-circle">
                        <img src="<?= base_url('assets/images/clients/PT-Mega-Multi-Pegas.png') ?>" alt="image" class="client-img">
                    </div>
                    <div class="cb"></div>
                </div>

                <div class="card-size">
                    <div class="bg-border-circle">
                        <img src="<?= base_url('assets/images/clients/ptt.png') ?>" alt="image" class="client-img">
                    </div>
                    <div class="cb"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End client -->

<!-- About -->
<section id="home-about" class="home-about">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <div class="wrap-text">
                    <h3>About Us</h3>
                    <p class="pb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet consequatur officia eum illo doloremque! Delectus repellendus nesciunt voluptatem exercitationem eveniet hic id optio earum unde minus cupiditate quam quis natus, odio tempora eligendi voluptates laboriosam magni, eum inventore consequatur? Sapiente quos minima eum reprehenderit illum eligendi, temporibus aliquid corrupti odit?</p>

                    <div class="more-product">
                        <a href="<?= base_url('about'); ?>" class="card-link text-secondary">Read more
                            <img src="<?= base_url('assets/images/xd-asset/arrow.png'); ?>" alt="arrow" width="15" height="9" class="ml-2">
                        </a>
                    </div>

                    <div class="rectangle"></div>
                </div>

                <div class="wrap-img-about">
                    <img src="<?= base_url('assets/images/about/asiapart-team2.jpg') ?>" alt="about">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About -->

<!-- Address -->
<section id="home-address" class="home-address">
    <div class="bg-home-address">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.361561929472!2d106.57670491382466!3d-6.215957995500263!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fe7cdf2d871b%3A0x26f4e181c085c840!2sPT%20ASIAPART%20SARANA%20TERUS%20MAKMUR!5e0!3m2!1sen!2sid!4v1578203501869!5m2!1sen!2sid" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div>
</section>
<!-- End Address -->

<!-- Quote -->
<section id="quote" class="quote">
    <div class="wrap-quote">
        <div class="quote-img">
            <i class="fas fa-quote-left center-c"></i>
        </div>

        <div class="quote-text">
            <p>The best spare parts from various companies are ready to send.</p>
        </div>

        <div class="call-now">
            <a href="tel:+62215918869" class="btn btn-primary">Call now</a>
        </div>
    </div>
</section>
<!-- End Quote -->

<!-- Footer -->
<section id="footer" class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12">
                <div class="wrap-footer">
                    <div class="center-c">
                        <img src="<?= base_url('assets/images/xd-asset/Logo.png'); ?>" alt="Logo" class="logo-footer">
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="wrap-footer">
                    <div class="footer-title text-white">Address</div>
                    <div class="footer-content text-light">Manis Jaya Kecamatan Jatiuwung, Kota Tangerang Banten, Indonesia 15136</div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="wrap-footer">
                    <div class="footer-title text-white">Contact</div>
                    <div class="footer-content text-light">
                        <a href="tel:+62215918869" class="text-light nav-link p-0 pb-2">
                            <i class="fas fa-phone-alt pr-2"></i>021 5918869
                        </a>
                        <a href="mailto:info@asiapart.co.id" class="text-light nav-link p-0 pb-2">
                            <i class="fas fa-envelope pr-2"></i>info@asiapart.co.id
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="wrap-footer">
                    <div class="footer-title text-white">Social Media</div>
                    <div class="footer-content text-light">
                        <a href="#" class="text-light nav-link p-0 pb-2">
                            <i class="fab fa-facebook-f pr-2"></i>Facebook
                        </a>
                        <a href="#" class="text-light nav-link p-0 pb-2">
                            <i class="fab fa-twitter pr-2"></i>Twitter
                        </a>
                        <a href="#" class="text-light nav-link p-0 pb-2">
                            <i class="fab fa-instagram pr-2"></i>Instagram
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="wrap-footer text-right">
                    <a href="#" class="nav-link text-white d-inline-block p-0 mr-1"> &#x24B8;Asiapart2019</a>
                    <a href="#" class="nav-link text-white d-inline-block p-0">Bie Multi Kreasi&#x2122;</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Footer -->