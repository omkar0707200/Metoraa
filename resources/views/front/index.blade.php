@extends('front.layout.layout')
@section('content')

<!-- ================= HERO SECTION ================= -->
<div class="hero">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-5">
                <div class="intro-excerpt">
                    <h1>Metoraa – Industrial, Kitchen & Manufacturing Equipment Marketplace</h1>
                    <p class="mb-4">
                        Metoraa serves businesses that power India’s economy — restaurants, bakeries,
                        hotels, factories, warehouses, workshops, and industrial units.
                        We bring commercial kitchen equipment, manufacturing machinery,
                        and industrial tools together on one trusted platform.
                    </p>
                    <p>
                        <a href="{{ url('/products') }}" class="btn btn-secondary me-2">Browse Products</a>
                        <a href="{{ url('/contact-us') }}" class="btn btn-white-outline">Request a Quote</a>
                    </p>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="hero-img-wrap">
                    <img src="/images/Hero_banner-min.jpg" class="img-fluid img-fluid-banner" alt="Metoraa Equipment Marketplace">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ================= END HERO ================= -->


<!-- ================= CATEGORY PREVIEW ================= -->
<div class="product-section">
<div class="container">
    <div class="row">

        <div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
            <h2 class="mb-4 section-title">Equipment That Powers Your Business</h2>
            <p class="mb-4">
                Whether you are starting a new venture, expanding operations,
                or upgrading infrastructure, Metoraa helps you source
                the right equipment with transparent pricing and nationwide support.
            </p>
            <p><a href="{{ url('/products') }}" class="btn">Explore Categories</a></p>
        </div>

        <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
            <a class="product-item" href="#">
                <img src="/images/Dish_table.png" class="img-fluid product-thumbnail" alt="Commercial Kitchen Equipment">
            </a>
        </div>

        <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
            <a class="product-item" href="#">
                <img src="/images/533077.png" class="img-fluid product-thumbnail" alt="Manufacturing Equipment">
            </a>
        </div>

        <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
            <a class="product-item" href="#">
                <img src="/images/1052957.png" class="img-fluid product-thumbnail" alt="Industrial Machinery">
            </a>
        </div>

    </div>
</div>
</div>
<!-- ================= END CATEGORY PREVIEW ================= -->


<!-- ================= WHY METORAA ================= -->
<div class="why-choose-section">
<div class="container">
    <div class="row justify-content-between">
        <div class="col-lg-6">
            <h2 class="section-title">Why Metoraa?</h2>
            <p>Everything your business needs — simplified.</p>

            <div class="row my-5">

                <div class="col-6 col-md-6">
                    <div class="feature">
                        <div class="icon"><img src="/images/truck.svg" class="imf-fluid"></div>
                        <h3>Wide Industry Coverage</h3>
                        <p>Commercial kitchens, bakeries, factories, warehouses, and industrial facilities.</p>
                    </div>
                </div>

                <div class="col-6 col-md-6">
                    <div class="feature">
                        <div class="icon"><img src="/images/bag.svg" class="imf-fluid"></div>
                        <h3>Verified Products</h3>
                        <p>Trusted brands, verified suppliers, and quality-assured equipment.</p>
                    </div>
                </div>

                <div class="col-6 col-md-6">
                    <div class="feature">
                        <div class="icon"><img src="/images/support.svg" class="imf-fluid"></div>
                        <h3>Bulk & Enterprise Support</h3>
                        <p>Special pricing and customized quotes for large and recurring orders.</p>
                    </div>
                </div>

                <div class="col-6 col-md-6">
                    <div class="feature">
                        <div class="icon"><img src="/images/return.svg" class="imf-fluid"></div>
                        <h3>Pan-India Delivery</h3>
                        <p>Safe logistics for heavy and sensitive equipment across India.</p>
                    </div>
                </div>

            </div>
        </div>

        <div class="col-lg-5">
            <div class="img-wrap">
                <img src="/images/why-choose-us-img.png" class="img-fluid" alt="Why Choose Metoraa">
            </div>
        </div>
    </div>
</div>
</div>
<!-- ================= END WHY METORAA ================= -->


<!-- ================= SERVICES ================= -->
<div class="we-help-section">
<div class="container">
    <div class="row justify-content-between">
        <div class="col-lg-7 mb-5 mb-lg-0">
            <div class="imgs-grid">
                <div class="grid grid-1"><img src="/images/img-grid-1.png"></div>
                <div class="grid grid-2"><img src="/images/img-grid-2.png"></div>
                <div class="grid grid-3"><img src="/images/img-grid-3.png"></div>
            </div>
        </div>
        <div class="col-lg-5 ps-lg-5">
            <h2 class="section-title mb-4">More Than a Marketplace</h2>
            <p>
                Metoraa supports businesses with expert equipment consultation,
                bulk procurement, installation coordination, and after-sales guidance.
            </p>
            <p>
                We help you choose equipment based on capacity, usage,
                compliance needs, and long-term operational efficiency.
            </p>
            <p><a href="{{ url('/services') }}" class="btn">View Our Services</a></p>
        </div>
    </div>
</div>
</div>
<!-- ================= END SERVICES ================= -->


<!-- ================= TESTIMONIALS ================= -->
<div class="testimonial-section">
<div class="container">
    <div class="row">
        <div class="col-lg-7 mx-auto text-center">
            <h2 class="section-title">Trusted by Businesses</h2>
        </div>
    </div>

    <div class="testimonial-slider-wrap text-center">
        <div class="testimonial-slider">

            <div class="item">
                <blockquote class="mb-5">
                    <p>
                        “Metoraa helped us source all our commercial kitchen equipment
                        from one platform. Timely delivery and excellent support.”
                    </p>
                </blockquote>
                <h3 class="font-weight-bold">Restaurant Owner</h3>
                <span class="position">Pune</span>
            </div>

            <div class="item">
                <blockquote class="mb-5">
                    <p>
                        “Competitive pricing and expert guidance made our factory upgrade smooth.”
                    </p>
                </blockquote>
                <h3 class="font-weight-bold">Manufacturing Unit Manager</h3>
                <span class="position">India</span>
            </div>

        </div>
    </div>
</div>
</div>
<!-- ================= END TESTIMONIALS ================= -->


<!-- ================= BLOG ================= -->
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
<!-- ================= END BLOG ================= -->

@endsection
