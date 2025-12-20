@extends('front.layout.layout')
@section('content')
		<!-- Start Hero Section -->
    {{-- <section class="category-hero">
    <h1>Commercial Kitchen Categories</h1>
    <p>
        Explore our professionally crafted stainless-steel kitchen solutions,
        designed for durability, hygiene, and high-performance commercial use.
    </p>
</section> --}}

<!-- ================= CATEGORY GRID ================= -->
<section class="category-section">
    <div class="category-grid">

        <!-- Category Card -->
        <div class="category-card">
            <div class="category-image">
                <img src="https://via.placeholder.com/300x200?text=Work+Tables" alt="Work Tables">
            </div>
            <div class="category-content">
                <h3>Work Tables</h3>
                <p>Heavy-duty stainless steel work tables for food prep, assembly, and service areas.</p>
                <a href="#">
                    Explore Category <span>→</span>
                </a>
            </div>
        </div>

        <div class="category-card">
            <div class="category-image">
                <img src="https://via.placeholder.com/300x200?text=Sink+Units" alt="Sink Units">
            </div>
            <div class="category-content">
                <h3>Sink Units</h3>
                <p>Single, double, and triple sink solutions for efficient cleaning and sanitation.</p>
                <a href="#">
                    Explore Category <span>→</span>
                </a>
            </div>
        </div>

        <div class="category-card">
            <div class="category-image">
                <img src="https://via.placeholder.com/300x200?text=Storage+Racks" alt="Storage Racks">
            </div>
            <div class="category-content">
                <h3>Storage Racks</h3>
                <p>Optimized shelving and storage racks built for commercial kitchen organization.</p>
                <a href="#">
                    Explore Category <span>→</span>
                </a>
            </div>
        </div>

        <div class="category-card">
            <div class="category-image">
                <img src="https://via.placeholder.com/300x200?text=Exhaust+Systems" alt="Exhaust Systems">
            </div>
            <div class="category-content">
                <h3>Exhaust Systems</h3>
                <p>Efficient ventilation and exhaust solutions for smoke-free kitchens.</p>
                <a href="#">
                    Explore Category <span>→</span>
                </a>
            </div>
        </div>

        <div class="category-card">
            <div class="category-image">
                <img src="https://via.placeholder.com/300x200?text=Food+Counters" alt="Food Counters">
            </div>
            <div class="category-content">
                <h3>Food Counters</h3>
                <p>Custom food display and serving counters for restaurants and canteens.</p>
                <a href="#">
                    Explore Category <span>→</span>
                </a>
            </div>
        </div>

        <div class="category-card">
            <div class="category-image">
                <img src="https://via.placeholder.com/300x200?text=Custom+Fabrication" alt="Custom Fabrication">
            </div>
            <div class="category-content">
                <h3>Custom Fabrication</h3>
                <p>Tailor-made stainless steel solutions designed for your unique kitchen layout.</p>
                <a href="#">
                    Explore Category <span>→</span>
                </a>
            </div>
        </div>

    </div>
</section>

<!-- ================= TRUST STRIP ================= -->
<section class="trust-strip">
    <div class="trust-item">
        <h4>Premium Materials</h4>
        <p>Food-grade stainless steel engineered for strength and longevity.</p>
    </div>
    <div class="trust-item">
        <h4>Precision Craftsmanship</h4>
        <p>Designed and fabricated with accuracy to meet commercial standards.</p>
    </div>
    <div class="trust-item">
        <h4>Custom-Built Solutions</h4>
        <p>We adapt our designs to your space, workflow, and business needs.</p>
    </div>
    <div class="trust-item">
        <h4>Trusted by Professionals</h4>
        <p>Used by restaurants, hotels, institutions, and cloud kitchens.</p>
    </div>
</section>
<style>
:root {
    --primary-green: #3f5f52;
    --dark-green: #2f4a3f;
    --accent-yellow: #f6b800;
    --bg-light: #f3f5f4;
    --text-dark: #1c1c1c;
    --text-muted: #6b6b6b;
    --radius: 12px;
    --transition: all 0.3s ease;
}

/* RESET */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: "Inter", sans-serif;
    background-color: var(--bg-light);
    color: var(--text-dark);
}

/* ================= HERO ================= */
.category-hero {
    background-color: var(--primary-green);
    padding: 80px 8%;
    color: #fff;
}

.category-hero h1 {
    font-size: 42px;
    line-height: 1.2;
    margin-bottom: 16px;
}

.category-hero p {
    max-width: 520px;
    font-size: 15px;
    color: rgba(255,255,255,0.85);
}

/* ================= GRID ================= */
.category-section {
    padding: 80px 8%;
}

.category-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
    gap: 28px;
}

.category-card {
    background-color: #fff;
    border-radius: var(--radius);
    overflow: hidden;
    transition: var(--transition);
    box-shadow: 0 8px 24px rgba(0,0,0,0.04);
}

.category-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 14px 36px rgba(0,0,0,0.08);
}

/* Image */
.category-image {
    background-color: #e9eceb;
    height: 180px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.category-image img {
    max-width: 85%;
    max-height: 85%;
}

/* Content */
.category-content {
    padding: 22px;
}

.category-content h3 {
    font-size: 18px;
    margin-bottom: 10px;
}

.category-content p {
    font-size: 14px;
    color: var(--text-muted);
    margin-bottom: 18px;
    line-height: 1.5;
}

.category-content a {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    font-size: 14px;
    font-weight: 600;
    color: var(--primary-green);
    text-decoration: none;
}

.category-content a span {
    transition: var(--transition);
}

.category-content a:hover span {
    transform: translateX(4px);
}

/* ================= TRUST STRIP ================= */
.trust-strip {
    background-color: #fff;
    padding: 60px 8%;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap: 40px;
}

.trust-item h4 {
    font-size: 16px;
    margin-bottom: 8px;
}

.trust-item p {
    font-size: 14px;
    color: var(--text-muted);
    line-height: 1.5;
}

/* ================= RESPONSIVE ================= */
@media (max-width: 768px) {
    .category-hero h1 {
        font-size: 32px;
    }
}
</style>
    <!-- End Testimonial Slider -->
@endsection('content')