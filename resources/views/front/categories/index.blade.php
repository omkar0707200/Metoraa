@extends('front.layout.layout')
@section('content')
<section class="plp-header">
    <h1>Categories</h1>
    <p>Browse products by category</p>
</section>

<div class="container my-5">
    <div class="row">
        @forelse($categories as $category)
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    @if($category->image)
                        <img src="{{ asset($category->image) }}" class="card-img-top" alt="{{ $category->name }}" style="height: 200px; object-fit: cover;">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $category->name }}</h5>
                        @if($category->description)
                            <p class="card-text">{{ Str::limit($category->description, 100) }}</p>
                        @endif
                        <a href="{{ route('categories.show', $category->slug) }}" class="btn btn-primary">View Products</a>
                    </div>
                    @if($category->children->count() > 0)
                        <div class="card-footer">
                            <small class="text-muted">
                                Subcategories: 
                                @foreach($category->children as $child)
                                    <a href="{{ route('categories.show', $child->slug) }}">{{ $child->name }}</a>@if(!$loop->last), @endif
                                @endforeach
                            </small>
                        </div>
                    @endif
                </div>
            </div>
        @empty
            <div class="col-12">
                <div class="alert alert-info">
                    <h4>No categories found</h4>
                    <p>Categories will appear here once they are added.</p>
                </div>
            </div>
        @endforelse
    </div>
</div>
@endsection

