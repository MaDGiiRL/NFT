<x-layout title="Characters">
    <div class="container my-5">
        <div class="row justify-content-center align-items-center">
            @foreach ($products as $product)
            <div class="col-6 col-md-3 col-lg-3 my-2">
                <div class="card">
                    <img src="/media/{{ $product->image }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">{{ $product->description }}</p>
                        <p class="card-text">Remaining Time: {{ $product->remaining_time }}</p>
                        <p class="card-text">Highest Bid: {{ $product->highest_bid }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

</x-layout>