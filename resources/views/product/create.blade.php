<x-layout title="Create NFT">
    <div class="container">
        <div class="row pt-5 mt-5 align-items-center">
            <div class="col-12 d-flex justify-content-center align-items-center text-center pt-5 mt-5 flex-column">
                <h1 class="text-white">
                    Experience the Next Evolution of Collectibles
                </h1>
                <img src="/media/frame 14 (1).png" class="img-fluid">
            </div>

        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 border rounded shadow bg-white">
                <form class="m-5" method="POST" action="{{route('product.store')}}">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Name of your NFT</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Description of your NFT</label>
                        <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Remaining Time</label>
                        <input type="number" class="form-control" name="remaining_time">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Bid</label>
                        <input type="number" class="form-control" name="highest_bid" step="0.5" max="9999">
                    </div>
                    <div class="mb-3 text-center">
                        <button type="submit" class="button-custom rounded-pill" role="button"><span class="text rounded-pill">Create</span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>