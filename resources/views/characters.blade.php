<x-layout title="Characters">

    <div class="container my-5">
        <div class="row justify-content-center align-items-center">
            @foreach ($products as $product)
            <div class="col-6 col-md-3 col-lg-3 my-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">
            {{-- Mostra solo i primi 100 caratteri --}}
            <span class="short-desc">{{ Str::limit($product->description, 100) }}</span>
            
            {{-- Testo completo con scroll, inizialmente nascosto --}}
            <span class="full-desc" style="display: none; max-height: 72px; overflow-y: auto; padding: 5px; background: #f8f9fa; border-radius: 5px; border: 1px solid #ddd;">
                {{ $product->description }}
            </span>

            @if (strlen($product->description) > 100)
                <a href="#" class="show-more btn btn-link p-0">Show More</a>
            @endif
        </p>
                        <p class="card-text">Remaining Time: {{ $product->remaining_time }}</p>
                        <p class="card-text">Highest Bid: {{ $product->highest_bid }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>



</x-layout>