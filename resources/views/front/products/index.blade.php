@extends('front.layout.layout')

@section('content')

<!-- ================= HEADER ================= -->
<section class="plp-header">
    <div class="plp-header-inner">
        <div class="plp-header-text">
            <h1>Products</h1>
            <p>Browse our complete range of products</p>
        </div>

        <div class="plp-header-image">
            <img
                src="/images/product_page.png"
                class="img-fluid"
                alt="Metoraa Equipment Marketplace"
            >
        </div>
    </div>
</section>

<!-- ================= TOOLBAR ================= -->
<div class="plp-toolbar">
    <div><span>{{ $products->total() }}</span> Products Available</div>
    <div>
        <form method="GET" action="{{ route('products.index') }}">
            @if(request('category'))
                <input type="hidden" name="category" value="{{ request('category') }}">
            @endif
            @if(request('search'))
                <input type="hidden" name="search" value="{{ request('search') }}">
            @endif

            <select name="sort" onchange="this.form.submit()" class="plp-sort">
                <option value="latest" {{ request('sort') == 'latest' ? 'selected' : '' }}>Latest</option>
                <option value="price_low" {{ request('sort') == 'price_low' ? 'selected' : '' }}>Price: Low to High</option>
                <option value="price_high" {{ request('sort') == 'price_high' ? 'selected' : '' }}>Price: High to Low</option>
                <option value="name" {{ request('sort') == 'name' ? 'selected' : '' }}>Name A–Z</option>
            </select>
        </form>
    </div>
</div>

<!-- ================= MAIN ================= -->
<div class="container plp-container">
    <div class="plp-layout">

        <!-- ================= FILTERS ================= -->
        <aside class="plp-filters">
            <div class="filter-card">
                <h5>Filters</h5>

                <form method="GET" action="{{ route('products.index') }}">
                    <div class="filter-group">
                        <label>Search</label>
                        <input type="text" name="search" value="{{ request('search') }}" placeholder="Search products">
                    </div>

                    <div class="filter-group">
                        <label>Category</label>
                        <select name="category">
                            <option value="">All Categories</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}" {{ request('category') == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <button class="btn-filter">Apply Filters</button>
                    <a href="{{ route('products.index') }}" class="btn-clear">Clear</a>
                </form>
            </div>
        </aside>

        <!-- ================= PRODUCTS ================= -->
        <main class="plp-products">
            <div class="product-grid">

                @forelse($products as $product)
                    <div class="product-card">

                        <!-- IMAGE -->
                        <div class="product-image">
                            <a href="{{ route('products.show', $product->slug) }}">
                                <img
                                    src="{{ $product->main_image ? asset($product->main_image) : '/images/product-1.png' }}"
                                    alt="{{ $product->name }}"
                                    loading="lazy"
                                >
                            </a>

                            @if($product->sale_price)
                                <span class="badge-off">{{ $product->discount_percentage }}% OFF</span>
                            @endif
                        </div>

                        <!-- CONTENT -->
                        <div class="product-content">
                            <h3>
                                <a href="{{ route('products.show', $product->slug) }}">
                                    {{ $product->name }}
                                </a>
                            </h3>

                            <p>{{ Str::limit($product->short_description ?? $product->description, 100) }}</p>

                            @if($product->specifications)
                                <div class="product-specs">
                                    @foreach(array_slice($product->specifications, 0, 3) as $key => $value)
                                        <div>{{ $key }}: {{ $value }}</div>
                                    @endforeach
                                </div>
                            @endif

                            <div class="product-price">
                                @if($product->sale_price)
                                    <span class="price-sale">₹{{ number_format($product->sale_price, 2) }}</span>
                                    <span class="price-old">₹{{ number_format($product->price, 2) }}</span>
                                @else
                                    <span class="price-sale">₹{{ number_format($product->price, 2) }}</span>
                                @endif
                            </div>

                            <div class="product-actions">
                                <a href="{{ route('products.show', $product->slug) }}" class="btn-outline">View Details</a>
                                <a href="#" class="btn-primary">Get Quote</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="no-products">
                        <h4>No products found</h4>
                        <p>Try adjusting your filters or search criteria.</p>
                    </div>
                @endforelse

            </div>
        </main>
    </div>
</div>

<!-- ================= STYLES ================= -->
<style>
:root {
    --green: #3f5f52;
    --yellow: #f6b800;
    --text: #1c1c1c;
    --muted: #6b6b6b;
    --bg: #f3f5f4;
    --radius: 12px;
}

/* HEADER */
.plp-header {
    background: var(--green);
    padding: 70px 8%;
    color: #fff;
}
.plp-header h1 { font-size: 38px; }
.plp-header p { opacity: 0.85; }

/* TOOLBAR */
.plp-toolbar {
    padding: 20px 8%;
    background: #fff;
    display: flex;
    justify-content: space-between;
}
.plp-sort {
    padding: 8px 12px;
    border-radius: 6px;
}

/* LAYOUT */
.plp-container { padding: 40px 0; }
.plp-layout {
    display: grid;
    grid-template-columns: 260px 1fr;
    gap: 30px;
}

/* FILTERS */
.filter-card {
    background: #fff;
    border-radius: var(--radius);
    padding: 20px;
}
.filter-group { margin-bottom: 16px; }
.filter-group label { font-size: 14px; font-weight: 600; }
.filter-group input,
.filter-group select {
    width: 100%;
    padding: 8px;
    border-radius: 6px;
    border: 1px solid #ddd;
}
.btn-filter {
    width: 100%;
    background: var(--green);
    color: #fff;
    padding: 10px;
    border-radius: 6px;
    border: none;
}
.btn-clear {
    display: block;
    text-align: center;
    margin-top: 8px;
    background: var(--bg);
    padding: 10px;
    border-radius: 6px;
    color: var(--text);
}

/* PRODUCT GRID */
.product-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
    gap: 26px;
}

/* CARD */
.product-card {
    background: #fff;
    border-radius: var(--radius);
    overflow: hidden;
    display: flex;
    flex-direction: column;
    box-shadow: 0 8px 24px rgba(0,0,0,0.05);
}

/* IMAGE FIX */
.product-image {
    /* aspect-ratio: 2/ 3; */
    /* background: #f5f6f6; */
    /* display: flex; */
    /* align-items: center; */
    /* justify-content: center; */
    /* padding: 12px; */
    position: relative;
}
.product-image img {
    width: 100%;
    height: 262px;
    object-fit: contain;
}
.badge-off {
    position: absolute;
    top: 10px;
    right: 10px;
    background: #e74c3c;
    color: #fff;
    padding: 4px 10px;
    font-size: 12px;
    border-radius: 20px;
}

/* CONTENT */
.product-content {
    padding: 20px;
    flex: 1;
    display: flex;
    flex-direction: column;
}
.product-content h3 { font-size: 16px; }
.product-content p { color: var(--muted); font-size: 14px; }
.product-specs { font-size: 13px; color: var(--muted); }
.product-price { margin: 12px 0; }
.price-sale { font-weight: 700; color: var(--green); }
.price-old { text-decoration: line-through; margin-left: 8px; }

/* CTA */
.product-actions {
    margin-top: auto;
    display: flex;
    justify-content: space-between;
}
.btn-outline { color: var(--green); font-weight: 600; }
.btn-primary {
    background: var(--yellow);
    padding: 8px 14px;
    border-radius: 20px;
    font-weight: 600;
    color: #000;
}

/* EMPTY */
.no-products {
    background: #fff;
    padding: 40px;
    text-align: center;
    border-radius: var(--radius);
}

/* RESPONSIVE */
@media (max-width: 992px) {
    .plp-layout {
        grid-template-columns: 1fr;
    }
}
@media (max-width: 768px) {
    .plp-header h1 { font-size: 30px; }
    /* .product-image { aspect-ratio: 1 / 1; } */
}
/* HEADER */
.plp-header {
    background: var(--green);
    padding: 70px 8%;
    color: #fff;
}

.plp-header-inner {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 40px;
}

.plp-header-text {
    max-width: 50%;
}

.plp-header h1 {
    font-size: 38px;
}

.plp-header p {
    opacity: 0.85;
}

/* RIGHT IMAGE */
.plp-header-image img {
    max-width: 820px;
    width: 100%;
    height: 500px;
    border-radius: 12px;
}

/* HIDE IMAGE ON MOBILE */
@media (max-width: 768px) {
    .plp-header-inner {
        flex-direction: column;
        text-align: center;
    }

    .plp-header-text {
        max-width: 100%;
    }

    .plp-header-image {
        display: none;
    }

    .plp-header h1 {
        font-size: 30px;
    }
}

</style>

@endsection
