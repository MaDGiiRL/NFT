<x-layout title="Characters">

    <div class="container">
        <div class="row pt-5 mt-5 align-items-center">
            <div class="col-12 d-flex justify-content-center align-items-center pt-5 mt-5 flex-column">
                <h1 class="text-white pt-5" data-aos="fade-up" data-aos-easing="linear"
                data-aos-duration="300">
                    Create Yout NFT
                </h1>
                <p class="lead text-white pt-2 fs-1 pb-5" data-aos="fade-up" data-aos-easing="linear"
                data-aos-duration="500">
                    Buy, Sell, and Trade NFTs
                </p>
                <img src="/media/Group 36779.png" width="800" data-aos="fade-up" data-aos-easing="linear"
                data-aos-duration="700">
                <a class="btn-custom rounded-pill fs-5 mt-5" href="{{route ('product.create')}}" data-aos="fade-up" data-aos-easing="linear"
                data-aos-duration="800">Start Creating</a>

            </div>
        </div>
    </div>


    <div class="container my-5">
        <div class="row justify-content-center align-items-center">
            @foreach ($products as $product)
            <div class="col-6 col-md-3 col-lg-3 my-2" data-aos-easing="linear"
            data-aos-duration="1000">
                <x-card
                    :product="$product" />
            </div>
            @endforeach
        </div>
    </div>



</x-layout>