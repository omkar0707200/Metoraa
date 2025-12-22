@extends('front.layout.layout')
@section('content')

<!-- ================= HERO SECTION ================= -->
<div class="hero">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-5">
                <div class="intro-excerpt">
                    <h1>Our Services</h1>
                    <p class="mb-4">
                        Metoraa is more than a marketplace. We are your equipment sourcing partner for
                        commercial kitchens, manufacturing units, factories, and industrial operations
                        across India — from consultation to delivery and beyond.
                    </p>
                    <p>
                        <a href="{{ url('/products') }}" class="btn btn-secondary me-2">Browse Products</a>
                        <a href="{{ url('/contact') }}" class="btn btn-white-outline">Request a Quote</a>
                    </p>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="hero-img-wrap">
                    {{-- Optional service illustration --}}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ================= END HERO ================= -->


<!-- ================= WHY CHOOSE US ================= -->
<div class="why-choose-section">
    <div class="container">

        <div class="row my-5">

            <div class="col-6 col-md-6 col-lg-3 mb-4">
                <div class="feature">
                    <div class="icon">
                        <img src="/images/truck.svg" alt="Nationwide Delivery" class="imf-fluid">
                    </div>
                    <h3>Nationwide Delivery</h3>
                    <p>
                        Pan-India logistics with secure packaging and reliable delivery,
                        even for heavy or sensitive industrial equipment.
                    </p>
                </div>
            </div>

            <div class="col-6 col-md-6 col-lg-3 mb-4">
                <div class="feature">
                    <div class="icon">
                        <img src="/images/bag.svg" alt="Verified Products" class="imf-fluid">
                    </div>
                    <h3>Verified Products</h3>
                    <p>
                        Equipment sourced only from trusted brands and verified suppliers,
                        ensuring durability, safety, and compliance.
                    </p>
                </div>
            </div>

            <div class="col-6 col-md-6 col-lg-3 mb-4">
                <div class="feature">
                    <div class="icon">
                        <img src="/images/support.svg" alt="Expert Support" class="imf-fluid">
                    </div>
                    <h3>Expert Guidance</h3>
                    <p>
                        Assistance with product selection, capacity planning,
                        setup consultation, and operational suitability.
                    </p>
                </div>
            </div>

            <div class="col-6 col-md-6 col-lg-3 mb-4">
                <div class="feature">
                    <div class="icon">
                        <img src="/images/return.svg" alt="Bulk Orders" class="imf-fluid">
                    </div>
                    <h3>Bulk & Custom Orders</h3>
                    <p>
                        Special pricing, customized specifications, and centralized procurement
                        support for enterprises and franchises.
                    </p>
                </div>
            </div>

            <div class="col-6 col-md-6 col-lg-3 mb-4">
                <div class="feature">
                    <div class="icon">
                        <img src="/images/truck.svg" alt="Installation Support" class="imf-fluid">
                    </div>
                    <h3>Installation Support</h3>
                    <p>
                        Coordination support for installation, layout planning,
                        and operational readiness.
                    </p>
                </div>
            </div>

            <div class="col-6 col-md-6 col-lg-3 mb-4">
                <div class="feature">
                    <div class="icon">
                        <img src="/images/bag.svg" alt="After Sales" class="imf-fluid">
                    </div>
                    <h3>After-Sales Guidance</h3>
                    <p>
                        Maintenance planning, spare-parts sourcing,
                        and long-term equipment lifecycle support.
                    </p>
                </div>
            </div>

            <div class="col-6 col-md-6 col-lg-3 mb-4">
                <div class="feature">
                    <div class="icon">
                        <img src="/images/support.svg" alt="Enterprise Support" class="imf-fluid">
                    </div>
                    <h3>B2B Support</h3>
                    <p>
                        Dedicated handling for institutional buyers,
                        factories, chains, and enterprise clients.
                    </p>
                </div>
            </div>

            <div class="col-6 col-md-6 col-lg-3 mb-4">
                <div class="feature">
                    <div class="icon">
                        <img src="/images/return.svg" alt="Trusted Partner" class="imf-fluid">
                    </div>
                    <h3>Trusted Partner</h3>
                    <p>
                        From single equipment to full-scale setup,
                        Metoraa supports your growth at every stage.
                    </p>
                </div>
            </div>

        </div>

    </div>
</div>
<!-- ================= END WHY CHOOSE US ================= -->


<!-- ================= TESTIMONIALS ================= -->
<div class="testimonial-section before-footer-section">
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
                        <span class="prev" data-controls="prev">
                            <span class="fa fa-chevron-left"></span>
                        </span>
                        <span class="next" data-controls="next">
                            <span class="fa fa-chevron-right"></span>
                        </span>
                    </div>

                    <div class="testimonial-slider">

                        <div class="item">
                            <div class="row justify-content-center">
                                <div class="col-lg-8 mx-auto">
                                    <div class="testimonial-block text-center">
                                        <blockquote class="mb-5">
                                            <p>
                                                &ldquo;Metoraa helped us source all our commercial kitchen equipment
                                                from one place. Timely delivery and excellent support throughout
                                                the setup process.&rdquo;
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
                                                &ldquo;Competitive pricing and proper technical guidance made
                                                our factory equipment upgrade seamless and stress-free.&rdquo;
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

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- ================= END TESTIMONIALS ================= -->

@endsection
