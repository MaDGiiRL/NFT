<div class="card">
    <div class="card-body">
        <h5 class="card-title">{{ $product->name }}</h5>
        <p class="card-text">
            {{ Str::limit($product->description, 100) }}
        </p>
        <p class="card-text">Remaining Time: {{ $product->remaining_time }} days</p>
        <p class="card-text">Highest Bid: {{ $product->highest_bid }}</p>
        <a type="submit" class="btn button-custom rounded-pill" role="button" href="{{ route('product.show', compact('product')) }}"><span class="text rounded-pill">Show More</span></a>
    </div>
</div>