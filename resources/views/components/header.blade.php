@if(Route::currentRouteName() == "homepage")
<div class="container pt-5 mt-5">
    <div class="row pt-5 mt-5">
        <div class="col-12 d-flex justify-content-center pt-5 mt-5">
            <img src="/media/Group (1).png" alt="diamond" width="40px">
        </div>
        <div class="col-12 text-center pt-2 mt-4">
            <h1 class="text-white">
                Discover and collect<br> super rare NFTs
            </h1>
            <p class="lead text-white pt-2">
                Digital marketplace for crypto collectibles and NFTs. Buy, sell,<br>
                and discover exclusive digital assets today.
            </p>
            <button class="btn-custom rounded-pill">Connect Wallet</button>
        </div>
        <div class="col-12 d-flex justify-content-center pt-5 mt-5">
            <img src="/media/Characters.png" alt="character" width="1050">
        </div>
    </div>
</div>
@ifelse(Route::currentRouteName() == "characters")
<div class="container">
    <div class="row pt-5 mt-5 align-items-center">
        <div class="col-6 d-flex justify-content-end align-items-start pt-5 mt-5 flex-column">
            <h1 class="text-white">
                Experience the<br> Next Evolution<br> of Collectibles
            </h1>
            <p class="lead text-white pt-2 fs-1 pb-5">
                Buy, Sell, and Trade NFTs
            </p>
            <button class="btn-custom rounded-pill fs-5">Explore</button>
        </div>
        <div class="col-6 d-flex justify-content-start pt-5 mt-5">
            <img src="/media/Group 72.png" class="img-fluid">
        </div>
    </div>
</div>
@else(Route::currentRouteName() == "product.create")
<div class="container">
    <div class="row pt-5 mt-5 align-items-center">
        <div class="col-12 d-flex justify-content-center align-items-center pt-5 mt-5 flex-column">
            <h1 class="text-white pt-5">
                Create Yout NFT
            </h1>
            <p class="lead text-white pt-2 fs-1 pb-5">
                Buy, Sell, and Trade NFTs
            </p>
            <img src="/media/Group 36779.png" width="800">
            <button class="btn-custom rounded-pill fs-5 mt-5">Start Creating</button>
            
        </div>
    </div>
</div>
@endif