<x-layout>
    
    <header class="img-home vh-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center my-5 text-white">GAME ISLAND</h1>
                    
                    @if (session()->has('success'))
                    <div class="col-12 alert alert-success">
                        <p class="m-0">{{session('success')}}</p>
                    </div>
                    @endif  
                    
                </div>
            </div>
        </div>
        
    </header>
</x-layout>