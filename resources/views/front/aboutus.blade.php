@extends('front.layout.layout')
@section('content')

<!-- ================= HERO SECTION ================= -->
<div class="hero">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-5">
                <div class="intro-excerpt">
                    <h1>About Us</h1>
                    <p class="mb-4">
                        Metoraa is a modern industrial marketplace built to simplify how businesses source
                        commercial kitchen equipment, manufacturing machinery, and industrial tools across India.
                        <br><br>
                        We solve key challenges faced by businesses — fragmented suppliers, inconsistent quality,
                        unclear pricing, and lack of expert guidance. Metoraa brings everything together on one
                        trusted platform, making equipment procurement simpler, faster, and more reliable.
                        <br><br>
                        From small cafés and bakeries to large factories and industrial units, we support businesses
                        at every stage of growth with the right equipment, transparent pricing, and dependable service.
                    </p>
                    <p>
                        <a href="{{ url('/products') }}" class="btn btn-secondary me-2">Browse Products</a>
                        <a href="{{ url('/contact-us') }}" class="btn btn-white-outline">Contact Sales</a>
                    </p>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="hero-img-wrap">
                    <img src="/images/about_us.png" class="img-fluid" >
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ================= END HERO ================= -->


<!-- ================= WHY CHOOSE US ================= -->
<div class="why-choose-section">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-6">
                <h2 class="section-title">Why Choose Metoraa</h2>
                <p>
                    Metoraa is built to be a long-term equipment sourcing partner for businesses,
                    not just a transactional marketplace.
                </p>

                <div class="row my-5">

                    <div class="col-6 col-md-6">
                        <div class="feature">
                            <div class="icon">
                                <img src="/images/truck.svg" alt="Expertise" class="imf-fluid">
                            </div>
                            <h3>Industry Expertise & Trust</h3>
                            <p>
                                Backed by deep experience across commercial kitchens,
                                manufacturing, and industrial operations.
                            </p>
                        </div>
                    </div>

                    <div class="col-6 col-md-6">
                        <div class="feature">
                            <div class="icon">
                                <img src="/images/bag.svg" alt="Tailored Solutions" class="imf-fluid">
                            </div>
                            <h3>Tailored Equipment Solutions</h3>
                            <p>
                                Recommendations based on capacity, usage, compliance,
                                and budget — not one-size-fits-all.
                            </p>
                        </div>
                    </div>

                    <div class="col-6 col-md-6">
                        <div class="feature">
                            <div class="icon">
                                <img src="/images/support.svg" alt="Efficiency" class="imf-fluid">
                            </div>
                            <h3>Efficiency & Sustainability</h3>
                            <p>
                                Energy-efficient, durable equipment designed for
                                long-term performance and lower operating costs.
                            </p>
                        </div>
                    </div>

                    <div class="col-6 col-md-6">
                        <div class="feature">
                            <div class="icon">
                                <img src="/images/return.svg" alt="End to End Support" class="imf-fluid">
                            </div>
                            <h3>End-to-End Support</h3>
                            <p>
                                From consultation and sourcing to logistics,
                                installation coordination, and after-sales guidance.
                            </p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-lg-5">
                <div class="img-wrap">
                    <img src="/images/why-choose-us-img.png" alt="Why Choose Metoraa" class="img-fluid">
                </div>
            </div>

        </div>
    </div>
</div>
<!-- ================= END WHY CHOOSE US ================= -->


<!-- ================= TESTIMONIALS ================= -->
<div class="testimonial-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 mx-auto text-center">
                <h2 class="section-title">Trusted by Businesses Across India</h2>
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
                                            <p>
                                                &ldquo;Metoraa helped us source all our commercial kitchen equipment
                                                from a single platform. Timely delivery and excellent support
                                                throughout the setup.&rdquo;
                                            </p>
                                        </blockquote>
                                        <div class="author-info">
                                            <h3 class="font-weight-bold">Restaurant Owner</h3>
                                            <span class="position d-block mb-3">Pune</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="row justify-content-center">
                                <div class="col-lg-8 mx-auto">
                                    <div class="testimonial-block text-center">
                                        <blockquote class="mb-5">
                                            <p>
                                                &ldquo;Competitive pricing and proper technical guidance made our
                                                factory equipment upgrade smooth and efficient.&rdquo;
                                            </p>
                                        </blockquote>
                                        <div class="author-info">
                                            <h3 class="font-weight-bold">Manufacturing Unit Manager</h3>
                                            <span class="position d-block mb-3">India</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="row justify-content-center">
                                <div class="col-lg-8 mx-auto">
                                    <div class="testimonial-block text-center">
                                        <blockquote class="mb-5">
                                            <p>
                                                &ldquo;Reliable products, clear communication, and strong after-sales
                                                support. Metoraa understands industrial procurement.&rdquo;
                                            </p>
                                        </blockquote>
                                        <div class="author-info">
                                            <h3 class="font-weight-bold">Café & Food Business Owner</h3>
                                            <span class="position d-block mb-3">India</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- ================= END TESTIMONIALS ================= -->

@endsection
