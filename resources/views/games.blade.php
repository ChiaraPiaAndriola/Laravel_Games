<x-layout class="">

    <div class="container-fluid min-vh-100 img-gamedetail">
        <div class="row">
            <h1 class="text-center my-3 text-white">I TUOI GIOCHI</h1>
            @if (session()->has('success'))
            <div class="col-12 alert alert-success">
                <p class="m-0">{{session('success')}}</p>
            </div>
            @endif  
            @foreach($games as $game)
           <x-card :data="$game" route="games" />
            @endforeach
        </div>
    </div>
    



</x-layout>    