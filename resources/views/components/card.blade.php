
<div class="col-12 col-md-4 d-flex justify-content-center carta">
    <div class="card" style="width: 18rem;">
        <img src="{{Storage::url($data->img)}}" class="card-img-top img-card" alt="...">
        <div class="card-body">
          <h5 class="card-title text-center">{{$data->title}}</h5>
          <a class="category-a text-center" > {{$data->category->name}} </a>
          <div class="my-2 text-center ">
            @foreach($data->consoles as $console)
            <a class="console-a" href="{{route('game.filterByConsole', ["console"=>$data->consoles->contains($console)])}}">{{$console->name}}</a>
            @endforeach
          </div>
          @auth
          <div class="d-flex justify-content-around">
             <a href="{{route('show.'.$route,compact('data'))}}" class="btn card-btn mx-2  ">Dettagli</a>
             <a href="{{route('edit.game',compact('data'))}}" class="btn card-btn mx-2 ">Modifica</a>
            <form action="{{route('destroy.game', compact('data'))}}" method="POST">
           @csrf
           @method('delete')
           <button type="submit" class="btn card-btn mx-2">Elimina</button>
           </form>
          </div>
          @endauth
        </div>
      </div>
</div>
