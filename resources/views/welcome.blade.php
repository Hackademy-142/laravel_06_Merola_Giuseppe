<x-layout>
   
    <div class="container">
        <div class="row justify-content-center">
            <form class="col-6 p-5" action="{{route('prodottiStore')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nome prodotto</label>
                    <input name="name" type="text" class="form-control" id="name">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione prodotto</label>
                    <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <div class="mb-3 me-3 ">
                    <label for="price" class="form-label">Prezzo prodotto</label>
                    <div class="d-flex">
                        <input name="price" type="text" class="form-control" id="price"><span class="ms-3 mt-1 fs-4">€</span>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Crea prodotto</button>
            </form>
        </div>
    </div>
    
</x-layout>