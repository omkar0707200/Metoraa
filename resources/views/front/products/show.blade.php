@extends('front.layout.layout')
@section('content')
<div class="pdp-container">
    <!-- Product Section -->
    <section class="product-detail">
        <div class="container">
            <div class="row">
                <!-- Product Images -->
                <div class="col-lg-6 product-images">
                    <div class="main-image">
                        <img src="{{ $product->main_image ? asset($product->main_image) : '/images/product-1.png' }}" 
                             alt="{{ $product->name }}" 
                             id="mainImage">
                    </div>
                    <div class="thumbnail-images">
                        @if($product->images && count($product->images) > 0)
                            @foreach($product->images as $index => $image)
                                <div class="thumbnail {{ $index == 0 ? 'active' : '' }}" onclick="changeImage('{{ asset($image) }}')">
                                    <img src="{{ asset($image) }}" alt="View {{ $index + 1 }}">
                                </div>
                            @endforeach
                        @else
                            <div class="thumbnail active" onclick="changeImage('{{ $product->main_image ? asset($product->main_image) : '/images/product-1.png' }}')">
                                <img src="{{ $product->main_image ? asset($product->main_image) : '/images/product-1.png' }}" alt="{{ $product->name }}">
                            </div>
                        @endif
                    </div>
                </div>

                <!-- Product Info -->
                <div class="col-lg-6 product-info">
                    <div class="breadcrumb">
                        <a href="/">Home</a> / 
                        <a href="{{ route('products.index') }}">Products</a> / 
                        @if($product->category)
                            <a href="#">{{ $product->category->name }}</a> / 
                        @endif
                        <span>{{ $product->name }}</span>
                    </div>

                    <h1 class="product-title">{{ $product->name }}</h1>
                    
                    <div class="product-rating">
                        <span class="star filled">★</span>
                        <span class="star filled">★</span>
                        <span class="star filled">★</span>
                        <span class="star filled">★</span>
                        <span class="star">★</span>
                        <span class="rating-count">(Reviews)</span>
                    </div>

                    <div class="product-price">
                        @if($product->sale_price)
                            <span class="sale-price">₹{{ number_format($product->sale_price, 2) }}</span>
                            <span class="original-price">₹{{ number_format($product->price, 2) }}</span>
                            <span class="discount-badge">{{ $product->discount_percentage }}% OFF</span>
                        @else
                            <span class="sale-price">₹{{ number_format($product->price, 2) }}</span>
                        @endif
                    </div>

                    <div class="product-description">
                        <p>{{ $product->short_description ?? Str::limit($product->description, 200) }}</p>
                    </div>

                    @if($product->features)
                        <div class="product-features-list mb-4">
                            <h3>Key Features:</h3>
                            <ul>
                                @foreach(explode("\n", $product->features) as $feature)
                                    @if(trim($feature))
                                        <li>{{ trim($feature) }}</li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <!-- Stock Status -->
                    <div class="stock-status mb-3">
                        @if($product->in_stock)
                            <span class="badge bg-success">In Stock</span>
                            @if($product->stock_quantity > 0)
                                <span class="text-muted">({{ $product->stock_quantity }} available)</span>
                            @endif
                        @else
                            <span class="badge bg-danger">Out of Stock</span>
                        @endif
                    </div>

                    <!-- SKU -->
                    <div class="product-sku mb-3">
                        <strong>SKU:</strong> {{ $product->sku }}
                    </div>

                    <!-- Quantity -->
                    <div class="quantity-selector">
                        <h3>Quantity</h3>
                        <div class="qty-control">
                            <button class="qty-btn minus" onclick="decreaseQty()">−</button>
                            <input type="number" value="1" min="1" class="qty-input" id="quantity" readonly>
                            <button class="qty-btn plus" onclick="increaseQty()">+</button>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="product-actions">
                        <button class="btn btn-primary btn-add-cart" onclick="addToCart()" {{ !$product->in_stock ? 'disabled' : '' }}>
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <circle cx="9" cy="21" r="1"></circle>
                                <circle cx="20" cy="21" r="1"></circle>
                                <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                            </svg>
                            Add to Cart
                        </button>
                        <button class="btn btn-secondary btn-buy-now" onclick="buyNow()" {{ !$product->in_stock ? 'disabled' : '' }}>
                            Buy Now
                        </button>
                        <button class="btn-wishlist" onclick="toggleWishlist()">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                            </svg>
                        </button>
                    </div>

                    <!-- Product Features -->
                    <div class="product-features">
                        <div class="feature-item">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                            </svg>
                            <div>
                                <strong>Warranty</strong>
                                <span>Quality Assured</span>
                            </div>
                        </div>
                        <div class="feature-item">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <rect x="1" y="3" width="15" height="13"></rect>
                                <polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon>
                                <circle cx="5.5" cy="18.5" r="2.5"></circle>
                                <circle cx="18.5" cy="18.5" r="2.5"></circle>
                            </svg>
                            <div>
                                <strong>Free Delivery</strong>
                                <span>Within 7-10 Days</span>
                            </div>
                        </div>
                        <div class="feature-item">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                <circle cx="9" cy="7" r="4"></circle>
                                <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                            </svg>
                            <div>
                                <strong>Expert Installation</strong>
                                <span>Professional Support</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Product Details Tabs -->
    <section class="product-tabs">
        <div class="container">
            <div class="tabs-header">
                <button class="tab-btn active" onclick="switchTab('description')">Description</button>
                @if($product->specifications && count($product->specifications) > 0)
                    <button class="tab-btn" onclick="switchTab('specifications')">Specifications</button>
                @endif
                <button class="tab-btn" onclick="switchTab('reviews')">Reviews</button>
                <button class="tab-btn" onclick="switchTab('shipping')">Shipping & Returns</button>
            </div>

            <div class="tabs-content">
                <!-- Description Tab -->
                <div class="tab-pane active" id="description">
                    <h2>Product Description</h2>
                    <div class="description-content">
                        {!! nl2br(e($product->description ?? 'No description available.')) !!}
                    </div>
                </div>

                <!-- Specifications Tab -->
                @if($product->specifications && count($product->specifications) > 0)
                    <div class="tab-pane" id="specifications">
                        <h2>Technical Specifications</h2>
                        <table class="specifications-table">
                            @foreach($product->specifications as $key => $value)
                                <tr>
                                    <td class="spec-label">{{ $key }}</td>
                                    <td class="spec-value">{{ $value }}</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                @endif

                <!-- Reviews Tab -->
                <div class="tab-pane" id="reviews">
                    <h2>Customer Reviews</h2>
                    <div class="reviews-summary">
                        <p>Reviews feature coming soon.</p>
                    </div>
                </div>

                <!-- Shipping Tab -->
                <div class="tab-pane" id="shipping">
                    <h2>Shipping & Returns</h2>
                    <div class="description-content">
                        <h3>Shipping Information</h3>
                        <p>We offer free delivery within 7-10 business days for most products. Delivery times may vary based on your location and product availability.</p>
                        
                        <h3>Returns Policy</h3>
                        <p>We accept returns within 30 days of purchase for unused products in original packaging. Please contact our customer service team to initiate a return.</p>
                        
                        <h3>Installation</h3>
                        <p>Professional installation services are available. Our expert team ensures proper setup and functionality.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Related Products -->
    {{-- @if($relatedProducts->count() > 0)
        <section class="related-products">
            <div class="container">
                <h2 class="section-title">Related Products</h2>
                <div class="product-grid">
                    @foreach($relatedProducts as $relatedProduct)
                        <div class="product-card">
                            <div class="product-image">
                                <a href="{{ route('products.show', $relatedProduct->slug) }}">
                                    <img src="{{ $relatedProduct->main_image ? asset($relatedProduct->main_image) : '/images/product-1.png' }}" alt="{{ $relatedProduct->name }}">
                                </a>
                            </div>
                            <div class="product-content">
                                <h3><a href="{{ route('products.show', $relatedProduct->slug) }}">{{ $relatedProduct->name }}</a></h3>
                                <div class="product-price">
                                    @if($relatedProduct->sale_price)
                                        <span class="sale-price">₹{{ number_format($relatedProduct->sale_price, 2) }}</span>
                                        <span class="original-price text-muted"><del>₹{{ number_format($relatedProduct->price, 2) }}</del></span>
                                    @else
                                        <span class="sale-price">₹{{ number_format($relatedProduct->price, 2) }}</span>
                                    @endif
                                </div>
                                <div class="product-actions">
                                    <a href="{{ route('products.show', $relatedProduct->slug) }}" class="btn-outline">View Details</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif --}}
</div>

<style>
:root {
    --primary-green: #3d5a52;
    --accent-gold: #e8a438;
    --light-bg: #f5f5f5;
    --text-primary: #2c2c2c;
    --text-secondary: #666;
    --border-color: #e0e0e0;
}

.pdp-container {
    background: #fff;
    padding-top: 20px;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.row {
    display: flex;
    flex-wrap: wrap;
    margin: 0 -15px;
}

.col-lg-6 {
    flex: 0 0 50%;
    max-width: 50%;
    padding: 0 15px;
}

/* Product Images */
.product-images {
    position: sticky;
    top: 20px;
    height: fit-content;
}

.main-image {
    width: 100%;
    height: 550px;
    background: var(--light-bg);
    border-radius: 16px;
    overflow: hidden;
    margin-bottom: 20px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.08);
}

.main-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s;
}

.main-image:hover img {
    transform: scale(1.05);
}

.thumbnail-images {
    display: flex;
    gap: 12px;
    overflow-x: auto;
    padding: 5px;
}

.thumbnail {
    min-width: 110px;
    height: 110px;
    border-radius: 12px;
    overflow: hidden;
    cursor: pointer;
    border: 3px solid transparent;
    transition: all 0.3s;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
}

.thumbnail:hover,
.thumbnail.active {
    border-color: var(--primary-green);
    transform: translateY(-3px);
    box-shadow: 0 4px 12px rgba(61, 90, 82, 0.3);
}

.thumbnail img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

/* Product Info */
.product-info {
    padding-left: 40px;
}

.breadcrumb {
    font-size: 14px;
    color: var(--text-secondary);
    margin-bottom: 24px;
}

.breadcrumb a {
    color: var(--text-secondary);
    text-decoration: none;
    transition: color 0.3s;
}

.breadcrumb a:hover {
    color: var(--primary-green);
}

.product-title {
    font-size: 38px;
    font-weight: 700;
    color: var(--text-primary);
    margin-bottom: 16px;
    line-height: 1.2;
}

.product-rating {
    display: flex;
    align-items: center;
    gap: 10px;
    margin-bottom: 24px;
}

.star {
    color: #ddd;
    font-size: 22px;
}

.star.filled {
    color: var(--accent-gold);
}

.rating-count {
    color: var(--text-secondary);
    font-size: 14px;
    margin-left: 5px;
}

.product-price {
    display: flex;
    align-items: center;
    gap: 15px;
    margin-bottom: 28px;
    flex-wrap: wrap;
}

.sale-price {
    font-size: 36px;
    font-weight: 700;
    color: var(--primary-green);
}

.original-price {
    font-size: 24px;
    color: var(--text-secondary);
    text-decoration: line-through;
}

.discount-badge {
    background: linear-gradient(135deg, #e74c3c, #c0392b);
    color: white;
    padding: 6px 14px;
    border-radius: 20px;
    font-size: 14px;
    font-weight: 600;
    box-shadow: 0 2px 8px rgba(231, 76, 60, 0.3);
}

.product-description {
    margin-bottom: 32px;
    color: var(--text-secondary);
    line-height: 1.8;
    font-size: 15px;
}

.product-features-list {
    margin-bottom: 24px;
}

.product-features-list h3 {
    font-size: 18px;
    font-weight: 600;
    margin-bottom: 12px;
    color: var(--text-primary);
}

.product-features-list ul {
    list-style: none;
    padding-left: 0;
}

.product-features-list li {
    padding: 8px 0;
    padding-left: 24px;
    position: relative;
    color: var(--text-secondary);
}

.product-features-list li::before {
    content: '✓';
    position: absolute;
    left: 0;
    color: var(--primary-green);
    font-weight: bold;
}

.stock-status {
    margin-bottom: 16px;
}

.product-sku {
    margin-bottom: 16px;
    color: var(--text-secondary);
    font-size: 14px;
}

/* Quantity */
.quantity-selector {
    margin-bottom: 32px;
}

.quantity-selector h3 {
    font-size: 16px;
    font-weight: 600;
    margin-bottom: 16px;
    color: var(--text-primary);
}

.qty-control {
    display: flex;
    align-items: center;
    gap: 16px;
}

.qty-btn {
    width: 44px;
    height: 44px;
    border: 2px solid var(--border-color);
    background: white;
    border-radius: 8px;
    cursor: pointer;
    font-size: 20px;
    transition: all 0.3s;
    font-weight: 600;
    color: var(--text-primary);
}

.qty-btn:hover {
    border-color: var(--primary-green);
    background: var(--primary-green);
    color: white;
}

.qty-input {
    width: 80px;
    height: 44px;
    text-align: center;
    border: 2px solid var(--border-color);
    border-radius: 8px;
    font-size: 16px;
    font-weight: 600;
    color: var(--text-primary);
}

/* Action Buttons */
.product-actions {
    display: flex;
    gap: 12px;
    margin-bottom: 32px;
}

.btn {
    padding: 16px 32px;
    border: none;
    border-radius: 10px;
    font-size: 16px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s;
    flex: 1;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
}

.btn-primary {
    background: var(--primary-green);
    color: white;
}

.btn-primary:hover:not(:disabled) {
    background: #2d453d;
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(61, 90, 82, 0.4);
}

.btn-primary:disabled {
    opacity: 0.5;
    cursor: not-allowed;
}

.btn-secondary {
    background: var(--accent-gold);
    color: white;
}

.btn-secondary:hover:not(:disabled) {
    background: #d49328;
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(232, 164, 56, 0.4);
}

.btn-secondary:disabled {
    opacity: 0.5;
    cursor: not-allowed;
}

.btn-wishlist {
    width: 58px;
    height: 58px;
    border: 2px solid var(--border-color);
    background: white;
    border-radius: 10px;
    cursor: pointer;
    transition: all 0.3s;
    display: flex;
    align-items: center;
    justify-content: center;
}

.btn-wishlist:hover {
    border-color: #e74c3c;
    color: #e74c3c;
    transform: translateY(-2px);
}

.btn-wishlist.active {
    background: #e74c3c;
    border-color: #e74c3c;
    color: white;
}

/* Product Features */
.product-features {
    display: grid;
    grid-template-columns: 1fr;
    gap: 20px;
    padding: 32px 0;
    border-top: 1px solid var(--border-color);
}

.feature-item {
    display: flex;
    align-items: flex-start;
    gap: 16px;
    padding: 16px;
    background: var(--light-bg);
    border-radius: 12px;
    transition: all 0.3s;
}

.feature-item:hover {
    background: #fff;
    box-shadow: 0 4px 12px rgba(0,0,0,0.08);
}

.feature-item svg {
    color: var(--primary-green);
    stroke-width: 1.5;
    flex-shrink: 0;
    margin-top: 3px;
}

.feature-item strong {
    display: block;
    color: var(--text-primary);
    font-size: 15px;
    margin-bottom: 2px;
}

.feature-item span {
    color: var(--text-secondary);
    font-size: 13px;
}

/* Tabs Section */
.product-tabs {
    background: var(--light-bg);
    padding: 60px 0 80px;
    margin-top: 60px;
}

.tabs-header {
    display: flex;
    gap: 32px;
    border-bottom: 2px solid var(--border-color);
    margin-bottom: 40px;
    overflow-x: auto;
}

.tab-btn {
    padding: 16px 0;
    background: none;
    border: none;
    font-size: 16px;
    font-weight: 600;
    color: var(--text-secondary);
    cursor: pointer;
    position: relative;
    transition: color 0.3s;
    white-space: nowrap;
}

.tab-btn:hover,
.tab-btn.active {
    color: var(--primary-green);
}

.tab-btn.active::after {
    content: '';
    position: absolute;
    bottom: -2px;
    left: 0;
    right: 0;
    height: 3px;
    background: var(--primary-green);
    border-radius: 3px 3px 0 0;
}

.tab-pane {
    display: none;
    animation: fadeIn 0.5s;
}

.tab-pane.active {
    display: block;
}

@keyframes fadeIn {
    from { opacity: 0; transform: translateY(10px); }
    to { opacity: 1; transform: translateY(0); }
}

.tab-pane h2 {
    font-size: 32px;
    margin-bottom: 28px;
    color: var(--text-primary);
}

.tab-pane h3 {
    font-size: 22px;
    margin: 32px 0 16px;
    color: var(--text-primary);
}

.description-content {
    color: var(--text-secondary);
    line-height: 1.8;
    font-size: 15px;
}

.description-content ul {
    margin: 20px 0;
    padding-left: 24px;
}

.description-content li {
    margin-bottom: 12px;
    line-height: 1.7;
}

.specifications-table {
    width: 100%;
    border-collapse: collapse;
    background: white;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 2px 8px rgba(0,0,0,0.05);
}

.specifications-table tr {
    border-bottom: 1px solid var(--border-color);
}

.specifications-table tr:last-child {
    border-bottom: none;
}

.specifications-table td {
    padding: 18px 24px;
}

.spec-label {
    font-weight: 600;
    color: var(--text-primary);
    width: 35%;
    font-size: 15px;
}

.spec-value {
    color: var(--text-secondary);
    font-size: 15px;
}

/* Related Products */
.related-products {
    padding: 80px 0;
}

.related-products h2 {
    font-size: 36px;
    margin-bottom: 48px;
    text-align: center;
    color: var(--text-primary);
    font-weight: 700;
}

.related-products .product-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
    gap: 28px;
}

.related-products .product-card {
    background: white;
    border-radius: 16px;
    overflow: hidden;
    transition: all 0.3s;
    box-shadow: 0 2px 12px rgba(0,0,0,0.06);
    position: relative;
}

.related-products .product-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 8px 32px rgba(0,0,0,0.12);
}

.related-products .product-image {
    height: 200px;
    background-color: #e9eceb;
    display: flex;
    align-items: center;
    justify-content: center;
}

.related-products .product-image img {
    max-width: 85%;
    max-height: 85%;
    object-fit: contain;
}

.related-products .product-content {
    padding: 20px;
}

.related-products .product-content h3 {
    font-size: 17px;
    margin-bottom: 12px;
}

.related-products .product-content h3 a {
    color: var(--text-primary);
    text-decoration: none;
}

.related-products .product-content h3 a:hover {
    color: var(--primary-green);
}

.related-products .product-price {
    margin-bottom: 16px;
}

.related-products .product-actions {
    margin-bottom: 0;
}

/* Responsive */
@media (max-width: 992px) {
    .col-lg-6 {
        flex: 0 0 100%;
        max-width: 100%;
    }
    
    .product-info {
        padding-left: 15px;
        margin-top: 40px;
    }
    
    .product-images {
        position: static;
    }
}

@media (max-width: 768px) {
    .product-title {
        font-size: 28px;
    }
    
    .product-actions {
        flex-wrap: wrap;
    }

    .btn {
        flex: 1 1 calc(50% - 6px);
        min-width: 140px;
    }
    
    .btn-wishlist {
        flex: 0 0 58px;
    }
    
    .product-features {
        grid-template-columns: 1fr;
    }

    .tabs-header {
        gap: 20px;
    }

    .tab-btn {
        font-size: 14px;
    }
}

@media (max-width: 576px) {
    .main-image {
        height: 400px;
    }

    .product-title {
        font-size: 24px;
    }

    .sale-price {
        font-size: 28px;
    }

    .product-actions {
        flex-direction: column;
    }

    .btn,
    .btn-wishlist {
        width: 100%;
    }
}
</style>

<script>
function changeImage(src) {
    document.getElementById('mainImage').src = src;
    document.querySelectorAll('.thumbnail').forEach(thumb => thumb.classList.remove('active'));
    event.currentTarget.classList.add('active');
}

function switchTab(tabName) {
    document.querySelectorAll('.tab-pane').forEach(pane => pane.classList.remove('active'));
    document.querySelectorAll('.tab-btn').forEach(btn => btn.classList.remove('active'));
    document.getElementById(tabName).classList.add('active');
    event.currentTarget.classList.add('active');
}

function increaseQty() {
    const qtyInput = document.getElementById('quantity');
    qtyInput.value = parseInt(qtyInput.value) + 1;
}

function decreaseQty() {
    const qtyInput = document.getElementById('quantity');
    if (parseInt(qtyInput.value) > 1) {
        qtyInput.value = parseInt(qtyInput.value) - 1;
    }
}

function addToCart() {
    alert('Add to cart functionality coming soon!');
}

function buyNow() {
    alert('Buy now functionality coming soon!');
}

function toggleWishlist() {
    alert('Wishlist functionality coming soon!');
}
</script>
@endsection

