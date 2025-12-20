@extends('front.layout.layout')
@section('content')
<section class="plp-header">
    <h1>Work Tables</h1>
    <p>
        Heavy-duty stainless steel work tables designed for commercial kitchens,
        food preparation units, and industrial workspaces.
    </p>
</section>

<!-- ================= TOOLBAR ================= -->
<div class="plp-toolbar">
    <div><span>12</span> Products Available</div>
    <div>Custom sizes available on request</div>
</div>

<!-- ================= PRODUCTS ================= -->
<section class="plp-section">
    <div class="product-grid">

        <!-- Product -->
        <div class="product-card">
            <div class="product-image">
                <img src="https://via.placeholder.com/300x200?text=Work+Table+1" alt="">
            </div>
            <div class="product-content">
                <h3>Stainless Steel Work Table – Plain</h3>
                <p>Ideal for food prep, cutting, and general kitchen operations.</p>
                <div class="product-specs">
                    <div>Material: SS 304</div>
                    <div>Finish: Matt</div>
                    <div>Usage: Commercial</div>
                </div>
                <div class="product-actions">
                    <a href="#" class="btn-outline">View Details</a>
                    <a href="#" class="btn-primary">Get Quote</a>
                </div>
            </div>
        </div>

        <div class="product-card">
            <div class="product-image">
                <img src="https://via.placeholder.com/300x200?text=Work+Table+2" alt="">
            </div>
            <div class="product-content">
                <h3>Work Table with Undershelf</h3>
                <p>Extra storage space with reinforced stainless steel undershelf.</p>
                <div class="product-specs">
                    <div>Material: SS 304</div>
                    <div>Finish: Satin</div>
                    <div>Load Capacity: Heavy</div>
                </div>
                <div class="product-actions">
                    <a href="#" class="btn-outline">View Details</a>
                    <a href="#" class="btn-primary">Get Quote</a>
                </div>
            </div>
        </div>

        <div class="product-card">
            <div class="product-image">
                <img src="https://via.placeholder.com/300x200?text=Work+Table+3" alt="">
            </div>
            <div class="product-content">
                <h3>Backsplash Work Table</h3>
                <p>Designed to prevent spills and wall damage during prep work.</p>
                <div class="product-specs">
                    <div>Material: SS 202 / 304</div>
                    <div>Backsplash Height: 100 mm</div>
                    <div>Use Case: Prep Area</div>
                </div>
                <div class="product-actions">
                    <a href="#" class="btn-outline">View Details</a>
                    <a href="#" class="btn-primary">Get Quote</a>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- ================= INQUIRY ================= -->
<section class="inquiry-strip">
    <div>
        <h2>Need Custom Sizes or Bulk Orders?</h2>
        <p>We manufacture tailored stainless steel solutions for your kitchen layout.</p>
    </div>
    <a href="#">Request a Quote</a>
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

/* * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: "Inter", sans-serif;
    background-color: var(--bg-light);
    color: var(--text-dark);
} */

/* ================= CATEGORY HEADER ================= */
.plp-header {
    background-color: var(--primary-green);
    padding: 70px 8%;
    color: #fff;
}

.plp-header h1 {
    font-size: 38px;
    margin-bottom: 14px;
}

.plp-header p {
    max-width: 600px;
    font-size: 15px;
    color: rgba(255,255,255,0.85);
}

/* ================= TOOLBAR ================= */
.plp-toolbar {
    padding: 24px 8%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-size: 14px;
    color: var(--text-muted);
}

.plp-toolbar span {
    font-weight: 600;
    color: var(--text-dark);
}

/* ================= PRODUCT GRID ================= */
.plp-section {
    padding: 40px 8% 80px;
}

.product-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
    gap: 28px;
}

.product-card {
    background-color: #fff;
    border-radius: var(--radius);
    overflow: hidden;
    transition: var(--transition);
    box-shadow: 0 8px 24px rgba(0,0,0,0.04);
}

.product-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 14px 36px rgba(0,0,0,0.08);
}

/* Image */
.product-image {
    height: 200px;
    background-color: #e9eceb;
    display: flex;
    align-items: center;
    justify-content: center;
}

.product-image img {
    max-width: 85%;
    max-height: 85%;
}

/* Content */
.product-content {
    padding: 20px;
}

.product-content h3 {
    font-size: 17px;
    margin-bottom: 8px;
}

.product-content p {
    font-size: 14px;
    color: var(--text-muted);
    line-height: 1.5;
    margin-bottom: 14px;
}

/* Specs */
.product-specs {
    font-size: 13px;
    color: var(--text-muted);
    margin-bottom: 16px;
}

.product-specs div {
    margin-bottom: 4px;
}

/* CTA */
.product-actions {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.product-actions a {
    text-decoration: none;
    font-size: 14px;
    font-weight: 600;
}

.btn-outline {
    color: var(--primary-green);
}

.btn-outline:hover {
    text-decoration: underline;
}

.btn-primary {
    background-color: var(--accent-yellow);
    color: #000;
    padding: 8px 14px;
    border-radius: 20px;
}

.btn-primary:hover {
    background-color: #e5aa00;
}

/* ================= INQUIRY STRIP ================= */
.inquiry-strip {
    background-color: #fff;
    padding: 60px 8%;
    display: grid;
    grid-template-columns: 1fr auto;
    gap: 20px;
    align-items: center;
}

.inquiry-strip h2 {
    font-size: 26px;
}

.inquiry-strip p {
    color: var(--text-muted);
    margin-top: 6px;
}

.inquiry-strip a {
    background-color: var(--primary-green);
    color: #fff;
    padding: 14px 26px;
    border-radius: 30px;
    text-decoration: none;
    font-weight: 600;
}

/* ================= RESPONSIVE ================= */
@media (max-width: 768px) {
    .plp-header h1 {
        font-size: 30px;
    }
    .inquiry-strip {
        grid-template-columns: 1fr;
        text-align: center;
    }
}
</style>
@endsection