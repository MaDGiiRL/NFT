<x-layout title="NFC  {{($product->name)}}">

    <div class="container my-5 pt-5 mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="col-12  my-2">
                <div class="card" data-aos="fade-up">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">
                            {{$product->description}}
                        </p>
                        <p class="card-text">Remaining Time: {{ $product->remaining_time }} days</p>
                        <p class="card-text">Highest Bid: {{ $product->highest_bid }}</p>
                        <a type="submit" class="btn button-custom rounded-pill" role="button" href="{{ route('characters') }}"><span class="text rounded-pill">Go Back</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layout>