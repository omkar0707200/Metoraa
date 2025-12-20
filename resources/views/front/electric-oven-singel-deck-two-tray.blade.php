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
                        <img src="/images/OVE0102.png" 
                             alt="Premium Kitchen Cabinet" 
                             id="mainImage">
                    </div>
                    <div class="thumbnail-images">
                        <div class="thumbnail active" onclick="changeImage('/images/OVE0102.png')">
                            <img src="/images/OVE0102.png"  alt="View 1">
                        </div>
                        <div class="thumbnail " onclick="changeImage('/images/OVE0102_2.png')">
                            <img src="/images/OVE0102_2.png"  alt="View 1">
                        </div>
                        <div class="thumbnail" onclick="changeImage('/images/OVE0102_3.jpg')">
                            <img src="/images/OVE0102_3.jpg"  alt="View 2">
                        </div>
                        {{-- <div class="thumbnail" onclick="changeImage('https://images.unsplash.com/photo-1565538810643-b5bdb714032a?w=800')">
                            <img src="https://images.unsplash.com/photo-1565538810643-b5bdb714032a?w=200" alt="View 3">
                        </div>
                        <div class="thumbnail" onclick="changeImage('https://images.unsplash.com/photo-1556912173-3bb406ef7e77?w=800')">
                            <img src="https://images.unsplash.com/photo-1556912173-3bb406ef7e77?w=200" alt="View 4">
                        </div> --}}
                    </div>
                </div>

                <!-- Product Info -->
                <div class="col-lg-6 product-info">
                    <div class="breadcrumb">
                        <a href="/">Home</a> / 
                        <a href="/products">Products</a> / 
                        <span>Electric Oven Single Deck Two Tray</span>
                    </div>

                    <h1 class="product-title">Electric Oven Single Deck Two Tray</h1>
                    
                    <div class="product-rating">
                        <span class="star filled">★</span>
                        <span class="star filled">★</span>
                        <span class="star filled">★</span>
                        <span class="star filled">★</span>
                        <span class="star">★</span>
                        <span class="rating-count">(127 reviews)</span>
                    </div>

                    <div class="product-price">
                        <span class="sale-price">₹40,000</span>
                        <span class="original-price">₹52,000</span>
                        <span class="discount-badge">28% OFF</span>
                    </div>

                    <div class="product-description">
                        <p>A single deck, two tray electric oven with glass door, metal body and digital display. A perfect equipment for restaurants and bakeries. Order now</p>
                    </div>

                    <!-- Color Variants -->
                    <div class="product-variants">
                        <h3>Color Options</h3>
                        <div class="color-options">
                            <div class="color-option active" style="background-color: #3d5a52" title="Forest Green" data-color="green"></div>
                            <div class="color-option" style="background-color: #2c2c2c" title="Charcoal Black" data-color="black"></div>
                            <div class="color-option" style="background-color: #8b7355" title="Walnut Brown" data-color="brown"></div>
                            <div class="color-option" style="background-color: #f5f5f5; border: 2px solid #ddd" title="Pearl White" data-color="white"></div>
                            <div class="color-option" style="background-color: #7c98b3" title="Ocean Blue" data-color="blue"></div>
                        </div>
                    </div>

                    <!-- Size Options -->
                    <div class="product-variants">
                        <h3>Configuration</h3>
                        <div class="size-options">
                            <button class="size-option" data-size="small">
                                <span class="size-label">Small</span>
                                <span class="size-desc">8ft x 6ft</span>
                            </button>
                            <button class="size-option active" data-size="medium">
                                <span class="size-label">Medium</span>
                                <span class="size-desc">10ft x 7ft</span>
                            </button>
                            <button class="size-option" data-size="large">
                                <span class="size-label">Large</span>
                                <span class="size-desc">12ft x 8ft</span>
                            </button>
                            <button class="size-option" data-size="custom">
                                <span class="size-label">Custom</span>
                                <span class="size-desc">Made to Order</span>
                            </button>
                        </div>
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
                        <button class="btn btn-primary btn-add-cart" onclick="addToCart()">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <circle cx="9" cy="21" r="1"></circle>
                                <circle cx="20" cy="21" r="1"></circle>
                                <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                            </svg>
                            Add to Cart
                        </button>
                        <button class="btn btn-secondary btn-buy-now" onclick="buyNow()">
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
                                <strong>10 Year Warranty</strong>
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
                <button class="tab-btn" onclick="switchTab('specifications')">Specifications</button>
                <button class="tab-btn" onclick="switchTab('reviews')">Reviews (127)</button>
                <button class="tab-btn" onclick="switchTab('shipping')">Shipping & Returns</button>
            </div>

            <div class="tabs-content">
                <!-- Description Tab -->
                <div class="tab-pane active" id="description">
                    <h2>Product Description</h2>
                    <div class="description-content">
                        <p>Elevate your kitchen with our Premium Modular Kitchen Cabinet Set, designed for the modern homeowner who values both aesthetics and functionality. This comprehensive solution combines superior craftsmanship with contemporary design principles.</p>
                        
                        <h3>Key Features:</h3>
                        <ul>
                            <li><strong>Premium Materials:</strong> Constructed from high-grade engineered wood with moisture-resistant coating</li>
                            <li><strong>Modern Design:</strong> Sleek, handleless design with soft-close mechanisms</li>
                            <li><strong>Ample Storage:</strong> Multiple compartments, drawers, and adjustable shelves</li>
                            <li><strong>Durable Finish:</strong> Scratch-resistant and easy-to-clean surfaces</li>
                            <li><strong>Customizable:</strong> Available in multiple colors and configurations</li>
                            <li><strong>Eco-Friendly:</strong> Made from sustainable materials with low VOC emissions</li>
                        </ul>

                        <h3>Perfect For:</h3>
                        <p>Our kitchen cabinets are ideal for residential complexes, boutique restaurants, training institutes, and modern homes. Whether you're renovating your existing kitchen or designing a new one, this modular system offers the flexibility and quality you need.</p>

                        <h3>Installation & Support:</h3>
                        <p>Professional installation services available. Our expert team ensures perfect alignment, proper mounting, and complete functionality. Post-installation support and maintenance guidance included.</p>
                    </div>
                </div>

                <!-- Specifications Tab -->
                <div class="tab-pane" id="specifications">
                    <h2>Technical Specifications</h2>
                    <table class="specifications-table">
                        <tr>
                            <td class="spec-label">Material</td>
                            <td class="spec-value">High-Grade Engineered Wood with Laminate Finish</td>
                        </tr>
                        <tr>
                            <td class="spec-label">Dimensions (Medium)</td>
                            <td class="spec-value">10ft (L) x 7ft (H) x 2ft (D)</td>
                        </tr>
                        <tr>
                            <td class="spec-label">Cabinet Type</td>
                            <td class="spec-value">Modular Wall & Base Units</td>
                        </tr>
                        <tr>
                            <td class="spec-label">Door Style</td>
                            <td class="spec-value">Handleless Push-to-Open with Soft Close</td>
                        </tr>
                        <tr>
                            <td class="spec-label">Shelves</td>
                            <td class="spec-value">Adjustable, Load Capacity: 25kg per shelf</td>
                        </tr>
                        <tr>
                            <td class="spec-label">Drawer System</td>
                            <td class="spec-value">Premium Tandem Box with Soft Close</td>
                        </tr>
                        <tr>
                            <td class="spec-label">Hardware</td>
                            <td class="spec-value">Concealed European Hinges</td>
                        </tr>
                        <tr>
                            <td class="spec-label">Finish</td>
                            <td class="spec-value">Scratch & Moisture Resistant Laminate</td>
                        </tr>
                        <tr>
                            <td class="spec-label">Color Options</td>
                            <td class="spec-value">5 Standard Colors + Custom Options</td>
                        </tr>
                        <tr>
                            <td class="spec-label">Warranty</td>
                            <td class="spec-value">10 Years on Structure, 2 Years on Hardware</td>
                        </tr>
                        <tr>
                            <td class="spec-label">Assembly</td>
                            <td class="spec-value">Professional Installation Recommended</td>
                        </tr>
                        <tr>
                            <td class="spec-label">Maintenance</td>
                            <td class="spec-value">Easy Clean with Damp Cloth</td>
                        </tr>
                        <tr>
                            <td class="spec-label">Country of Origin</td>
                            <td class="spec-value">Made in India</td>
                        </tr>
                        <tr>
                            <td class="spec-label">Certifications</td>
                            <td class="spec-value">ISO 9001, Green Product Certified</td>
                        </tr>
                    </table>
                </div>

                <!-- Reviews Tab -->
                <div class="tab-pane" id="reviews">
                    <h2>Customer Reviews</h2>
                    
                    <div class="reviews-summary">
                        <div class="rating-overview">
                            <div class="avg-rating">4.2</div>
                            <div class="rating-stars">
                                <span class="star filled">★</span>
                                <span class="star filled">★</span>
                                <span class="star filled">★</span>
                                <span class="star filled">★</span>
                                <span class="star">★</span>
                            </div>
                            <p>Based on 127 reviews</p>
                        </div>
                        <div class="rating-breakdown">
                            <div class="rating-bar">
                                <span>5★</span>
                                <div class="bar"><div class="fill" style="width: 65%"></div></div>
                                <span>82</span>
                            </div>
                            <div class="rating-bar">
                                <span>4★</span>
                                <div class="bar"><div class="fill" style="width: 20%"></div></div>
                                <span>25</span>
                            </div>
                            <div class="rating-bar">
                                <span>3★</span>
                                <div class="bar"><div class="fill" style="width: 10%"></div></div>
                                <span>13</span>
                            </div>
                            <div class="rating-bar">
                                <span>2★</span>
                                <div class="bar"><div class="fill" style="width: 3%"></div></div>
                                <span>4</span>
                            </div>
                            <div class="rating-bar">
                                <span>1★</span>
                                <div class="bar"><div class="fill" style="width: 2%"></div></div>
                                <span>3</span>
                            </div>
                        </div>
                    </div>

                    <div class="reviews-container">
                        <div class="review-item">
                            <div class="review-header">
                                <div class="reviewer-info">
                                    <div class="reviewer-avatar">RP</div>
                                    <div>
                                        <strong>Rajesh Patel</strong>
                                        <div class="review-meta">
                                            <span class="verified">✓ Verified Purchase</span>
                                            <span class="review-date">Dec 15, 2024</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="review-rating">
                                    <span class="star filled">★</span>
                                    <span class="star filled">★</span>
                                    <span class="star filled">★</span>
                                    <span class="star filled">★</span>
                                    <span class="star filled">★</span>
                                </div>
                            </div>
                            <h4>Excellent Quality and Design!</h4>
                            <p class="review-text">Absolutely love these kitchen cabinets! The quality is outstanding and the installation team was very professional. The soft-close feature is a game-changer. Worth every penny!</p>
                            <div class="review-helpful">
                                <span>Helpful?</span>
                                <button>👍 Yes (23)</button>
                                <button>👎 No (1)</button>
                            </div>
                        </div>

                        <div class="review-item">
                            <div class="review-header">
                                <div class="reviewer-info">
                                    <div class="reviewer-avatar">SM</div>
                                    <div>
                                        <strong>Sneha Mehta</strong>
                                        <div class="review-meta">
                                            <span class="verified">✓ Verified Purchase</span>
                                            <span class="review-date">Dec 10, 2024</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="review-rating">
                                    <span class="star filled">★</span>
                                    <span class="star filled">★</span>
                                    <span class="star filled">★</span>
                                    <span class="star filled">★</span>
                                    <span class="star">★</span>
                                </div>
                            </div>
                            <h4>Great Storage Space</h4>
                            <p class="review-text">The modular design is perfect for our apartment kitchen. Plenty of storage space and the finish quality is impressive. Only minor issue was delivery took a bit longer than expected.</p>
                            <div class="review-helpful">
                                <span>Helpful?</span>
                                <button>👍 Yes (15)</button>
                                <button>👎 No (0)</button>
                            </div>
                        </div>

                        <div class="review-item">
                            <div class="review-header">
                                <div class="reviewer-info">
                                    <div class="reviewer-avatar">AK</div>
                                    <div>
                                        <strong>Amit Kumar</strong>
                                        <div class="review-meta">
                                            <span class="verified">✓ Verified Purchase</span>
                                            <span class="review-date">Dec 5, 2024</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="review-rating">
                                    <span class="star filled">★</span>
                                    <span class="star filled">★</span>
                                    <span class="star filled">★</span>
                                    <span class="star filled">★</span>
                                    <span class="star filled">★</span>
                                </div>
                            </div>
                            <h4>Modern and Functional</h4>
                            <p class="review-text">Transformed our kitchen completely! The forest green color looks stunning and the quality of materials is top-notch. Installation was smooth and the team was very helpful.</p>
                            <div class="review-helpful">
                                <span>Helpful?</span>
                                <button>👍 Yes (31)</button>
                                <button>👎 No (2)</button>
                            </div>
                        </div>
                    </div>

                    <button class="btn-load-more">Load More Reviews</button>
                </div>

                <!-- Shipping Tab -->
                <div class="tab-pane" id="shipping">
                    <h2>Shipping & Returns</h2>
                    <div class="shipping-content">
                        <div class="info-card">
                            <h3>🚚 Shipping Information</h3>
                            <ul>
                                <li><strong>Free Delivery:</strong> Available on all orders across India</li>
                                <li><strong>Delivery Time:</strong> 7-10 business days from order confirmation</li>
                                <li><strong>Tracking:</strong> Real-time tracking link sent via SMS & email</li>
                                <li><strong>Installation:</strong> Professional installation scheduled after delivery</li>
                                <li><strong>Coverage:</strong> We ship to all major cities and towns</li>
                            </ul>
                        </div>

                        <div class="info-card">
                            <h3>↩️ Returns & Exchange</h3>
                            <ul>
                                <li><strong>Return Window:</strong> 7 days from delivery date</li>
                                <li><strong>Condition:</strong> Product must be unused and in original packaging</li>
                                <li><strong>Inspection:</strong> Quality check required before return approval</li>
                                <li><strong>Refund:</strong> Full refund within 7-10 business days</li>
                                <li><strong>Damaged Goods:</strong> Immediate replacement at no extra cost</li>
                            </ul>
                        </div>

                        <div class="info-card">
                            <h3>🛡️ Warranty</h3>
                            <ul>
                                <li><strong>Structure:</strong> 10 years comprehensive warranty</li>
                                <li><strong>Hardware:</strong> 2 years on hinges, handles, and mechanisms</li>
                                <li><strong>Coverage:</strong> Manufacturing defects covered</li>
                                <li><strong>Service:</strong> Free service visits during warranty period</li>
                                <li><strong>Registration:</strong> Warranty activated upon installation</li>
                            </ul>
                        </div>

                        <div class="info-card">
                            <h3>💬 Customer Support</h3>
                            <ul>
                                <li><strong>Phone:</strong> 1800-XXX-XXXX (Toll-Free)</li>
                                <li><strong>Email:</strong> support@metoraa.com</li>
                                <li><strong>WhatsApp:</strong> +91-XXXXX-XXXXX</li>
                                <li><strong>Hours:</strong> Mon-Sat, 9 AM - 7 PM IST</li>
                                <li><strong>Response:</strong> Within 24 hours</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Related Products -->
    <section class="related-products">
        <div class="container">
            <h2>You May Also Like</h2>
            <div class="products-grid">
                <div class="product-card">
                    <div class="product-badge">New</div>
                    <img src="https://images.unsplash.com/photo-1556912167-f556f1f39faa?w=400" alt="Kitchen Island">
                    <h3>Modern Kitchen Island</h3>
                    <div class="product-card-rating">
                        <span class="stars">★★★★★</span>
                        <span>(45)</span>
                    </div>
                    <p class="product-card-price">
                        <span class="price">₹54,999</span>
                        <span class="old-price">₹72,999</span>
                    </p>
                    <button class="btn-quick-view">Quick View</button>
                </div>

                <div class="product-card">
                    <div class="product-badge sale">Sale</div>
                    <img src="https://images.unsplash.com/photo-1556909212-d5b604d0c90d?w=400" alt="Wall Cabinet">
                    <h3>Premium Wall Cabinets</h3>
                    <div class="product-card-rating">
                        <span class="stars">★★★★☆</span>
                        <span>(89)</span>
                    </div>
                    <p class="product-card-price">
                        <span class="price">₹42,999</span>
                        <span class="old-price">₹58,999</span>
                    </p>
                    <button class="btn-quick-view">Quick View</button>
                </div>

                <div class="product-card">
                    <img src="https://images.unsplash.com/photo-1556911220-e15b29be8c8f?w=400" alt="Corner Cabinet">
                    <h3>Corner Storage Unit</h3>
                    <div class="product-card-rating">
                        <span class="stars">★★★★★</span>
                        <span>(67)</span>
                    </div>
                    <p class="product-card-price">
                        <span class="price">₹38,999</span>
                    </p>
                    <button class="btn-quick-view">Quick View</button>
                </div>

                <div class="product-card">
                    <div class="product-badge">Trending</div>
                    <img src="https://images.unsplash.com/photo-1556909114-f6e7ad7d3136?w=400" alt="Pantry Unit">
                    <h3>Tall Pantry Cabinet</h3>
                    <div class="product-card-rating">
                        <span class="stars">★★★★★</span>
                        <span>(102)</span>
                    </div>
                    <p class="product-card-price">
                        <span class="price">₹67,999</span>
                        <span class="old-price">₹89,999</span>
                    </p>
                    <button class="btn-quick-view">Quick View</button>
                </div>
            </div>
        </div>
    </section>
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

/* Variants */
.product-variants {
    margin-bottom: 28px;
}

.product-variants h3 {
    font-size: 16px;
    font-weight: 600;
    margin-bottom: 16px;
    color: var(--text-primary);
}

.color-options {
    display: flex;
    gap: 12px;
    flex-wrap: wrap;
}

.color-option {
    width: 48px;
    height: 48px;
    border-radius: 50%;
    cursor: pointer;
    border: 3px solid var(--border-color);
    transition: all 0.3s;
    position: relative;
}

.color-option::after {
    content: '✓';
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: white;
    font-weight: bold;
    font-size: 20px;
    opacity: 0;
    transition: opacity 0.3s;
}

.color-option:hover,
.color-option.active {
    transform: scale(1.15);
    border-color: var(--primary-green);
    box-shadow: 0 4px 12px rgba(0,0,0,0.2);
}

.color-option.active::after {
    opacity: 1;
}

.size-options {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(140px, 1fr));
    gap: 12px;
}

.size-option {
    padding: 16px;
    border: 2px solid var(--border-color);
    background: white;
    border-radius: 12px;
    cursor: pointer;
    transition: all 0.3s;
    text-align: left;
    display: flex;
    flex-direction: column;
    gap: 4px;
}

.size-label {
    font-weight: 600;
    font-size: 15px;
    color: var(--text-primary);
}

.size-desc {
    font-size: 13px;
    color: var(--text-secondary);
}

.size-option:hover,
.size-option.active {
    border-color: var(--primary-green);
    background: var(--primary-green);
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(61, 90, 82, 0.2);
}

.size-option:hover .size-label,
.size-option:hover .size-desc,
.size-option.active .size-label,
.size-option.active .size-desc {
    color: white;
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

.btn-primary:hover {
    background: #2d453d;
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(61, 90, 82, 0.4);
}

.btn-secondary {
    background: var(--accent-gold);
    color: white;
}

.btn-secondary:hover {
    background: #d49328;
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(232, 164, 56, 0.4);
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

/* Reviews */
.reviews-summary {
    display: grid;
    grid-template-columns: 200px 1fr;
    gap: 40px;
    background: white;
    padding: 32px;
    border-radius: 16px;
    margin-bottom: 32px;
    box-shadow: 0 2px 12px rgba(0,0,0,0.06);
}

.rating-overview {
    text-align: center;
}

.avg-rating {
    font-size: 56px;
    font-weight: 700;
    color: var(--primary-green);
    line-height: 1;
    margin-bottom: 12px;
}

.rating-stars {
    font-size: 24px;
    margin-bottom: 8px;
}

.rating-overview p {
    color: var(--text-secondary);
    font-size: 14px;
}

.rating-breakdown {
    display: flex;
    flex-direction: column;
    gap: 12px;
    justify-content: center;
}

.rating-bar {
    display: flex;
    align-items: center;
    gap: 12px;
    font-size: 14px;
}

.rating-bar span:first-child {
    width: 30px;
    color: var(--text-secondary);
    font-weight: 600;
}

.rating-bar span:last-child {
    width: 40px;
    text-align: right;
    color: var(--text-secondary);
}

.bar {
    flex: 1;
    height: 8px;
    background: #e0e0e0;
    border-radius: 4px;
    overflow: hidden;
}

.fill {
    height: 100%;
    background: var(--accent-gold);
    border-radius: 4px;
    transition: width 0.5s ease;
}

.reviews-container {
    display: flex;
    flex-direction: column;
    gap: 24px;
}

.review-item {
    background: white;
    padding: 28px;
    border-radius: 16px;
    box-shadow: 0 2px 12px rgba(0,0,0,0.06);
    transition: all 0.3s;
}

.review-item:hover {
    box-shadow: 0 4px 20px rgba(0,0,0,0.1);
    transform: translateY(-2px);
}

.review-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    margin-bottom: 16px;
}

.reviewer-info {
    display: flex;
    gap: 16px;
}

.reviewer-avatar {
    width: 48px;
    height: 48px;
    border-radius: 50%;
    background: var(--primary-green);
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 700;
    font-size: 16px;
}

.reviewer-info strong {
    color: var(--text-primary);
    font-size: 16px;
    display: block;
    margin-bottom: 4px;
}

.review-meta {
    display: flex;
    gap: 12px;
    align-items: center;
}

.verified {
    color: #27ae60;
    font-size: 13px;
    font-weight: 600;
}

.review-date {
    color: var(--text-secondary);
    font-size: 13px;
}

.review-rating {
    font-size: 18px;
}

.review-item h4 {
    font-size: 17px;
    margin-bottom: 12px;
    color: var(--text-primary);
}

.review-text {
    color: var(--text-secondary);
    line-height: 1.7;
    margin-bottom: 16px;
    font-size: 15px;
}

.review-helpful {
    display: flex;
    align-items: center;
    gap: 12px;
    padding-top: 16px;
    border-top: 1px solid var(--border-color);
}

.review-helpful span {
    color: var(--text-secondary);
    font-size: 14px;
    font-weight: 600;
}

.review-helpful button {
    padding: 6px 16px;
    border: 1px solid var(--border-color);
    background: white;
    border-radius: 20px;
    cursor: pointer;
    font-size: 13px;
    transition: all 0.3s;
}

.review-helpful button:hover {
    background: var(--light-bg);
    border-color: var(--primary-green);
}

.btn-load-more {
    margin-top: 24px;
    padding: 14px 40px;
    border: 2px solid var(--primary-green);
    background: white;
    color: var(--primary-green);
    border-radius: 10px;
    font-size: 15px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s;
    display: block;
    margin-left: auto;
    margin-right: auto;
}

.btn-load-more:hover {
    background: var(--primary-green);
    color: white;
}

/* Shipping Content */
.shipping-content {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 24px;
}

.info-card {
    background: white;
    padding: 28px;
    border-radius: 16px;
    box-shadow: 0 2px 12px rgba(0,0,0,0.06);
    transition: all 0.3s;
}

.info-card:hover {
    box-shadow: 0 4px 20px rgba(0,0,0,0.1);
    transform: translateY(-4px);
}

.info-card h3 {
    font-size: 20px;
    margin-bottom: 20px;
    color: var(--text-primary);
    padding-bottom: 16px;
    border-bottom: 2px solid var(--light-bg);
}

.info-card ul {
    list-style: none;
}

.info-card li {
    padding: 12px 0;
    color: var(--text-secondary);
    line-height: 1.6;
    font-size: 14px;
    display: flex;
    align-items: flex-start;
    gap: 8px;
}

.info-card li::before {
    content: '•';
    color: var(--primary-green);
    font-weight: bold;
    font-size: 20px;
    line-height: 1;
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

.products-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
    gap: 28px;
}

.product-card {
    background: white;
    border-radius: 16px;
    overflow: hidden;
    transition: all 0.3s;
    box-shadow: 0 2px 12px rgba(0,0,0,0.06);
    position: relative;
}

.product-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 8px 32px rgba(0,0,0,0.12);
}

.product-badge {
    position: absolute;
    top: 16px;
    right: 16px;
    padding: 6px 14px;
    border-radius: 20px;
    font-size: 12px;
    font-weight: 700;
    z-index: 1;
    background: var(--accent-gold);
    color: white;
}

.product-badge.sale {
    background: #e74c3c;
}

.product-card img {
    width: 100%;
    height: 280px;
    object-fit: cover;
    transition: transform 0.3s;
}

.product-card:hover img {
    transform: scale(1.1);
}

.product-card h3 {
    padding: 20px 20px 8px;
    font-size: 17px;
    color: var(--text-primary);
    font-weight: 600;
    line-height: 1.4;
}

.product-card-rating {
    padding: 0 20px 12px;
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: 14px;
}

.stars {
    color: var(--accent-gold);
}

.product-card-rating span:last-child {
    color: var(--text-secondary);
}

.product-card-price {
    padding: 0 20px 16px;
    display: flex;
    align-items: center;
    gap: 12px;
}

.price {
    font-size: 22px;
    font-weight: 700;
    color: var(--primary-green);
}

.old-price {
    font-size: 16px;
    color: var(--text-secondary);
    text-decoration: line-through;
}

.btn-quick-view {
    width: calc(100% - 40px);
    margin: 0 20px 20px;
    padding: 12px;
    border: 2px solid var(--primary-green);
    background: white;
    color: var(--primary-green);
    border-radius: 8px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s;
}

.btn-quick-view:hover {
    background: var(--primary-green);
    color: white;
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

    .reviews-summary {
        grid-template-columns: 1fr;
        text-align: center;
    }

    .rating-breakdown {
        align-items: center;
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

    .shipping-content {
        grid-template-columns: 1fr;
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

    .size-options {
        grid-template-columns: 1fr;
    }
}
</style>

<script>
// Image Gallery
function changeImage(src) {
    document.getElementById('mainImage').src = src;
    
    // Update active thumbnail
    document.querySelectorAll('.thumbnail').forEach(thumb => {
        thumb.classList.remove('active');
    });
    event.currentTarget.classList.add('active');
}

// Tabs
function switchTab(tabId) {
    // Remove active from all tabs and panes
    document.querySelectorAll('.tab-btn').forEach(btn => btn.classList.remove('active'));
    document.querySelectorAll('.tab-pane').forEach(pane => pane.classList.remove('active'));
    
    // Add active to clicked tab and corresponding pane
    event.currentTarget.classList.add('active');
    document.getElementById(tabId).classList.add('active');
}

// Quantity Control
function decreaseQty() {
    const input = document.getElementById('quantity');
    if (input.value > 1) {
        input.value = parseInt(input.value) - 1;
    }
}

function increaseQty() {
    const input = document.getElementById('quantity');
    input.value = parseInt(input.value) + 1;
}

// Color Selection
document.querySelectorAll('.color-option').forEach(option => {
    option.addEventListener('click', function() {
        document.querySelectorAll('.color-option').forEach(opt => opt.classList.remove('active'));
        this.classList.add('active');
    });
});

// Size Selection
document.querySelectorAll('.size-option').forEach(option => {
    option.addEventListener('click', function() {
        document.querySelectorAll('.size-option').forEach(opt => opt.classList.remove('active'));
        this.classList.add('active');
    });
});

// Add to Cart
function addToCart() {
    const qty = document.getElementById('quantity').value;
    alert(`Added ${qty} item(s) to cart!`);
}

// Buy Now
function buyNow() {
    const qty = document.getElementById('quantity').value;
    alert(`Proceeding to checkout with ${qty} item(s)!`);
}

// Wishlist Toggle
function toggleWishlist() {
    const btn = event.currentTarget;
    btn.classList.toggle('active');
    
    if (btn.classList.contains('active')) {
        alert('Added to wishlist!');
    } else {
        alert('Removed from wishlist!');
    }
}
</script>
    <!-- End Testimonial Slider -->
@endsection('content')