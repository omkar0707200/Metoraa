@extends('front.layout.layout')
@section('content')

<!-- Start Hero Section -->
<div class="hero">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-5">
                <div class="intro-excerpt">
                    <h1>Over decade of Design<span clsas="d-block">& Production Expertise</span></h1>
                    <p class="mb-4">Comprehensive kitchen and interior solutions for commercial spaces, boutique restaurants, training institutes, residential complexes, and more.</p>
                    <p><a href="" class="btn btn-secondary me-2">Shop Now</a><a href="#" class="btn btn-white-outline">Explore</a></p>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="hero-img-wrap">
                    <img src="/images/couch.png" class="img-fluid img-fluid-banner">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Hero Section -->

<!-- Start Product Section -->
<div class="product-section">
<div class="container">
    <div class="row">

        <!-- Start Column 1 -->
        <div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
            <h2 class="mb-4 section-title">Crafted with excellent material.</h2>
            <p class="mb-4">Every Metoraa piece starts with premium, tested materials chosen for strength and longevity. Our craftsmen shape each product with precision to ensure it performs flawlessly. You get durability that feels as good as it looks. </p>
            <p><a href="shop.html" class="btn">Explore</a></p>
        </div> 
        <!-- End Column 1 -->

        <!-- Start Column 2 -->
        <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
            <a class="product-item" href="cart.html">
                <img src="/images/Dish_table.png" class="img-fluid product-thumbnail">
                {{-- <h3 class="product-title">Nordic Chair</h3>
                <strong class="product-price">$50.00</strong> --}}

                {{-- <span class="icon-cross">
                    <img src="/images/cross.svg" class="img-fluid">
                </span> --}}
            </a>
        </div> 
        <!-- End Column 2 -->

        <!-- Start Column 3 -->
        <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
            <a class="product-item" href="cart.html">
                <img src="/images/533077.png" class="img-fluid product-thumbnail">
                {{-- <h3 class="product-title">Kruzo Aero Chair</h3>
                <strong class="product-price">$78.00</strong>

                <span class="icon-cross">
                    <img src="/images/cross.svg" class="img-fluid">
                </span> --}}
            </a>
        </div>
        <!-- End Column 3 -->

        <!-- Start Column 4 -->
        <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
            <a class="product-item" href="cart.html">
                <img src="/images/1052957.png" class="img-fluid product-thumbnail">
                {{-- <h3 class="product-title">Ergonomic Chair</h3>
                <strong class="product-price">$43.00</strong>

                <span class="icon-cross">
                    <img src="/images/cross.svg" class="img-fluid"> --}}
                </span>
            </a>
        </div>
        <!-- End Column 4 -->

    </div>
</div>
</div>
<!-- End Product Section -->

<!-- Start Why Choose Us Section -->
<div class="why-choose-section">
<div class="container">
    <div class="row justify-content-between">
        <div class="col-lg-6">
            <h2 class="section-title">Why Choose Us</h2>
            <p>From design consulting and layout planning to equipment supply, installation, and after-sales, we cover it all.</p>

            <div class="row my-5">
                <div class="col-6 col-md-6">
                    <div class="feature">
                        <div class="icon">
                            <img src="/images/truck.svg" alt="Image" class="imf-fluid">
                        </div>
                        <h3> Expertise & Trust</h3>
                        <p>With decades of experience, Metoraa is a name you can rely on for quality, precision, and innovation.</p>
                    </div>
                </div>

                <div class="col-6 col-md-6">
                    <div class="feature">
                        <div class="icon">
                            <img src="/images/bag.svg" alt="Image" class="imf-fluid">
                        </div>
                        <h3>Tailored Solutions</h3>
                        <p>We don’t do “one-size-fits-all.” Our designs are tailored to your operational needs, workflow, and aesthetics.</p>
                    </div>
                </div>

                <div class="col-6 col-md-6">
                    <div class="feature">
                        <div class="icon">
                            <img src="/images/support.svg" alt="Image" class="imf-fluid">
                        </div>
                        <h3>Sustainability & Efficiency</h3>
                        <p>We prioritize energy-efficient appliances and durable materials to ensure long-term performance and reduced operating cost.</p>
                    </div>
                </div>

                <div class="col-6 col-md-6">
                    <div class="feature">
                        <div class="icon">
                            <img src="/images/return.svg" alt="Image" class="imf-fluid">
                        </div>
                        <h3>End-to-End Support</h3>
                        <p>From design consulting and layout planning to equipment supply, installation, and after-sales, we cover it all.</p>
                    </div>
                </div>

            </div>
        </div>

        <div class="col-lg-5">
            <div class="img-wrap">
                <img src="/images/why-choose-us-img.png" alt="Image" class="img-fluid">
            </div>
        </div>

    </div>
</div>
</div>
<!-- End Why Choose Us Section -->

<!-- Start We Help Section -->
<div class="we-help-section">
<div class="container">
    <div class="row justify-content-between">
        <div class="col-lg-7 mb-5 mb-lg-0">
            <div class="imgs-grid">
                <div class="grid grid-1"><img src="/images/img-grid-1.png" alt="Untree.co"></div>
                <div class="grid grid-2"><img src="/images/img-grid-2.png" alt="Untree.co"></div>
                <div class="grid grid-3"><img src="/images/img-grid-3.png" alt="Untree.co"></div>
            </div>
        </div>
        <div class="col-lg-5 ps-lg-5">
            <h2 class="section-title mb-4">We Help You Create Modern, Functional Interiors</h2>
            <p>At Metoraa, we design spaces that feel fresh, balanced, and effortlessly modern. Our team blends aesthetics with practical thinking, making sure every layout supports comfort, flow, and purpose. Whether it’s a home, café, studio, or commercial workspace, we help you shape environments that look great and work even better.</p>
            <p>We study your requirements, understand how your space is used, and craft solutions that fit your lifestyle or business workflow. From material selection to finishing touches, every element is planned with intention. You get thoughtful design, reliable craftsmanship, and interiors that stay relevant for years.</p>
            {{-- <ul class="list-unstyled custom-list my-4">
                <li>Donec vitae odio quis nisl dapibus malesuada</li>
                <li>Donec vitae odio quis nisl dapibus malesuada</li>
                <li>Donec vitae odio quis nisl dapibus malesuada</li>
                <li>Donec vitae odio quis nisl dapibus malesuada</li>
            </ul> --}}
            <p><a herf="#" class="btn">Explore</a></p>
        </div>
    </div>
</div>
</div>
<!-- End We Help Section -->

<!-- Start Popular Product -->
<div class="popular-product">
<div class="container">
    <div class="row">

        <div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="product-item-sm d-flex">
                <div class="thumbnail">
                    <img src="/images/product-1.png" alt="Image" class="img-fluid">
                </div>
                <div class="pt-3">
                    <h3>Nordic Chair</h3>
                    <p>Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio </p>
                    <p><a href="#">Read More</a></p>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="product-item-sm d-flex">
                <div class="thumbnail">
                    <img src="/images/product-2.png" alt="Image" class="img-fluid">
                </div>
                <div class="pt-3">
                    <h3>Kruzo Aero Chair</h3>
                    <p>Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio </p>
                    <p><a href="#">Read More</a></p>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="product-item-sm d-flex">
                <div class="thumbnail">
                    <img src="/images/product-3.png" alt="Image" class="img-fluid">
                </div>
                <div class="pt-3">
                    <h3>Ergonomic Chair</h3>
                    <p>Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio </p>
                    <p><a href="#">Read More</a></p>
                </div>
            </div>
        </div>

    </div>
</div>
</div>
<!-- End Popular Product -->

<!-- Start Testimonial Slider -->
<div class="testimonial-section">
<div class="container">
    <div class="row">
        <div class="col-lg-7 mx-auto text-center">
            <h2 class="section-title">Testimonials</h2>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="testimonial-slider-wrap text-center">

                <div id="testimonial-nav">
                    <span class="prev" data-controls="prev"><span class="fa fa-chevron-left"></span></span>
                    <span class="next" data-controls="next"><span class="fa fa-chevron-right"></span></span>
                </div>

                <div class="testimonial-slider">
                    
                    <div class="item">
                        <div class="row justify-content-center">
                            <div class="col-lg-8 mx-auto">

                                <div class="testimonial-block text-center">
                                    <blockquote class="mb-5">
                                        <p>&ldquo;Metoraa transformed our kitchen layout completely. Workflow improved, cooking time dropped, and the space feels premium now. Their team understood exactly what we needed and delivered on point..&rdquo;</p>
                                    </blockquote>

                                    <div class="author-info">
                                        <div class="author-pic">
                                            <img src="/images/person-1.png" alt="Maria Jones" class="img-fluid">
                                        </div>
                                        <h3 class="font-weight-bold">Fisherman’s Warf</h3>
                                        <span class="position d-block mb-3">CEO, Co-Founder, XYZ Inc.</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div> 
                    <!-- END item -->

                    <div class="item">
                        <div class="row justify-content-center">
                            <div class="col-lg-8 mx-auto">

                                <div class="testimonial-block text-center">
                                    <blockquote class="mb-5">
                                        <p>&ldquo;I wanted a modern yet warm home, and Metoraa nailed the balance. The materials feel solid, the finishing is clean, and every detail looks intentionally done. Absolutely worth it.&rdquo;</p>
                                    </blockquote>

                                    <div class="author-info">
                                        <div class="author-pic">
                                            <img src="/images/person-1.png" alt="Maria Jones" class="img-fluid">
                                        </div>
                                        <h3 class="font-weight-bold">Vishal Patil</h3>
                                        <span class="position d-block mb-3">Home Interior.</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div> 
                    <!-- END item -->

                    <div class="item">
                        <div class="row justify-content-center">
                            <div class="col-lg-8 mx-auto">

                                <div class="testimonial-block text-center">
                                    <blockquote class="mb-5">
                                        <p>&ldquo;Our café revamp was smooth and well-planned. Metoraa suggested smart storage ideas and custom counters that made daily operations easier. The space looks stylish and works efficiently.&rdquo;</p>
                                    </blockquote>

                                    <div class="author-info">
                                        <div class="author-pic">
                                            <img src="/images/person-1.png" alt="Maria Jones" class="img-fluid">
                                        </div>
                                        <h3 class="font-weight-bold">Anand</h3>
                                        <span class="position d-block mb-3">Durgaa Café.</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div> 
                    <!-- END item -->

                </div>

            </div>
        </div>
    </div>
</div>
</div>
<!-- End Testimonial Slider -->

<!-- Start Blog Section -->
<div class="blog-section">
<div class="container">
    <div class="row mb-5">
        <div class="col-md-6">
            <h2 class="section-title">Recent Blog</h2>
        </div>
        <div class="col-md-6 text-start text-md-end">
            <a href="#" class="more">View All Posts</a>
        </div>
    </div>

    <div class="row">

        <div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
            <div class="post-entry">
                <a href="#" class="post-thumbnail"><img src="/images/post-1.jpg" alt="Image" class="img-fluid"></a>
                <div class="post-content-entry">
                    <h3><a href="#">How to Design a Modern Kitchen That Works as Hard as You Do</a></h3>
                    <div class="meta">
                        <span><a href="#">A practical look at layout planning, workflow, and choosing the right equipment for smooth daily operations.</a></span> <span>on <a href="#">Dec 19, 2021</a></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
            <div class="post-entry">
                <a href="#" class="post-thumbnail"><img src="/images/post-2.jpg" alt="Image" class="img-fluid"></a>
                <div class="post-content-entry">
                    <h3><a href="#">Why Material Quality Matters in Interior Design</a></h3>
                    <div class="meta">
                        <span><a href="#">Understanding how the right materials impact durability, aesthetics, and long-term value</a></span> <span>on <a href="#">Dec 15, 2021</a></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
            <div class="post-entry">
                <a href="#" class="post-thumbnail"><img src="/images/post-3.jpg" alt="Image" class="img-fluid"></a>
                <div class="post-content-entry">
                    <h3><a href="#">Small Space, Smart Design</a></h3>
                    <div class="meta">
                        <span><a href="#">Simple ways to maximize functionality and create an open feel in compact homes or commercial setups</a></span> <span>on <a href="#">Dec 12, 2021</a></span>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</div>
<!-- End Blog Section -->

@endsection('content')
