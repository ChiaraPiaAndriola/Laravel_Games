<x-layout>

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center my-3 text-black">{{$category->name}}</h1>
        </div>
            @foreach ($category->games as $game)
            <x-card :data="$game" route="games" />
            @endforeach
    </div>
</div>


</x-layout>