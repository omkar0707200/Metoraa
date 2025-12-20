@extends('front.layout.layout')
@section('content')
<section class="plp-header">
    <h1>{{ $category->name }}</h1>
    @if($category->description)
        <p>{{ $category->description }}</p>
    @endif
</section>

<!-- ================= TOOLBAR ================= -->
<div class="plp-toolbar">
    <div><span>{{ $products->total() }}</span> Products Available</div>
    <div>
        <form method="GET" action="{{ route('categories.show', $category->slug) }}" class="d-inline">
            @if(request('search'))
                <input type="hidden" name="search" value="{{ request('search') }}">
            @endif
            <select name="sort" onchange="this.form.submit()" class="form-select d-inline-block" style="width: auto;">
                <option value="latest" {{ request('sort') == 'latest' ? 'selected' : '' }}>Latest</option>
                <option value="price_low" {{ request('sort') == 'price_low' ? 'selected' : '' }}>Price: Low to High</option>
                <option value="price_high" {{ request('sort') == 'price_high' ? 'selected' : '' }}>Price: High to Low</option>
                <option value="name" {{ request('sort') == 'name' ? 'selected' : '' }}>Name A-Z</option>
            </select>
        </form>
    </div>
</div>

<!-- ================= FILTERS ================= -->
<div class="container mb-4">
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">
                    <h5>Filters</h5>
                </div>
                <div class="card-body">
                    <form method="GET" action="{{ route('categories.show', $category->slug) }}">
                        <div class="mb-3">
                            <label class="form-label">Search</label>
                            <input type="text" name="search" class="form-control" value="{{ request('search') }}" placeholder="Search products...">
                        </div>
                        <button type="submit" class="btn btn-primary">Apply Filters</button>
                        <a href="{{ route('categories.show', $category->slug) }}" class="btn btn-secondary">Clear</a>
                    </form>
                </div>
            </div>

            @if($category->children->count() > 0)
                <div class="card mt-3">
                    <div class="card-header">
                        <h5>Subcategories</h5>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled">
                            @foreach($category->children as $child)
                                <li><a href="{{ route('categories.show', $child->slug) }}">{{ $child->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif
        </div>

        <!-- ================= PRODUCTS ================= -->
        <div class="col-md-9">
            <section class="plp-section">
                <div class="product-grid">
                    @forelse($products as $product)
                        <div class="product-card">
                            <div class="product-image">
                                <a href="{{ route('products.show', $product->slug) }}">
                                    <img src="{{ $product->main_image ? asset($product->main_image) : '/images/product-1.png' }}" alt="{{ $product->name }}">
                                </a>
                                @if($product->sale_price)
                                    <span class="badge bg-danger position-absolute top-0 end-0 m-2">
                                        {{ $product->discount_percentage }}% OFF
                                    </span>
                                @endif
                            </div>
                            <div class="product-content">
                                <h3><a href="{{ route('products.show', $product->slug) }}">{{ $product->name }}</a></h3>
                                <p>{{ Str::limit($product->short_description ?? $product->description, 100) }}</p>
                                @if($product->specifications)
                                    <div class="product-specs">
                                        @foreach(array_slice($product->specifications, 0, 3) as $key => $value)
                                            <div>{{ $key }}: {{ $value }}</div>
                                        @endforeach
                                    </div>
                                @endif
                                <div class="product-price mb-3">
                                    @if($product->sale_price)
                                        <span class="sale-price">₹{{ number_format($product->sale_price, 2) }}</span>
                                        <span class="original-price text-muted"><del>₹{{ number_format($product->price, 2) }}</del></span>
                                    @else
                                        <span class="sale-price">₹{{ number_format($product->price, 2) }}</span>
                                    @endif
                                </div>
                                <div class="product-actions">
                                    <a href="{{ route('products.show', $product->slug) }}" class="btn-outline">View Details</a>
                                    <a href="#" class="btn-primary">Get Quote</a>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-12">
                            <div class="alert alert-info">
                                <h4>No products found in this category</h4>
                                <p>Try adjusting your filters or search criteria.</p>
                            </div>
                        </div>
                    @endforelse
                </div>

                <!-- Pagination -->
                <div class="mt-4" style="margin-top: 40px; text-align: center;">
                    {{ $products->links() }}
                </div>
            </section>
        </div>
    </div>
</div>

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
    background: #fff;
}

.plp-toolbar span {
    font-weight: 600;
    color: var(--text-dark);
}

/* ================= PRODUCT GRID ================= */
.plp-section {
    padding: 40px 0 80px;
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
    position: relative;
}

.product-image img {
    max-width: 85%;
    max-height: 85%;
    object-fit: contain;
}

/* Content */
.product-content {
    padding: 20px;
}

.product-content h3 {
    font-size: 17px;
    margin-bottom: 8px;
}

.product-content h3 a {
    color: var(--text-dark);
    text-decoration: none;
}

.product-content h3 a:hover {
    color: var(--primary-green);
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

/* ================= RESPONSIVE ================= */
@media (max-width: 992px) {
    .col-md-3 {
        flex: 0 0 100%;
        max-width: 100%;
        margin-bottom: 20px;
    }
    
    .col-md-9 {
        flex: 0 0 100%;
        max-width: 100%;
    }
}

@media (max-width: 768px) {
    .plp-header h1 {
        font-size: 30px;
    }
    
    .plp-toolbar {
        flex-direction: column;
        gap: 16px;
        align-items: flex-start;
    }
    
    .product-grid {
        grid-template-columns: repeat(auto-fill, minmax(240px, 1fr));
        gap: 20px;
    }
}
</style>
@endsection

