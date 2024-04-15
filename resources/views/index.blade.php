<x-layout>

    <div class="container">
        <div class="row justify-content-center my-5">
            <div class="col-12 text-center">
                <h1>Catalogo Prodotti</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            @foreach ($products as $product)
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body text-center">
                          <h5 class="card-title mb-4">{{$product->name}}</h5>
                          <p class="card-text my-4">{{$product->description}}</p>
                          <h6 class="card-subtitle mb-2 text-body-secondary mt-4">{{$product->price}} €</h6>
                        </div>
                      </div>
                </div>
            @endforeach
        </div>
    </div>




</x-layout>