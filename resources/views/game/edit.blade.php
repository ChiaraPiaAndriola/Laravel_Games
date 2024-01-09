<x-layout>
    @if(session()->has('success'))
    <div class="col-12 alert alert-success">
        <p>{{session('success')}}</p>
    @endif    
    </div>
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <h1 class="text-center my-3 text-black">Crea il tuo gioco</h1>

            <div class="col-12 col-md-8">
                <form method="POST" action="{{route('update.game', compact('data'))}}" enctype="multipart/form-data">
                    @csrf 
                    @method('put')
                    <div class="mb-3">
                      <label for="title" class="form-label">Name</label>
                      <input  name="title" type="text" class="form-control @error('title') is-invalid @enderror" id="title" value="{{($data->title)}}">
                      @error ('title')
                      <p class="text-danger"> {{$message}}</p>
                      @enderror
                    </div>

                    <div class="mb-3">
                      <label for="price" class="form-label">Price</label>
                      <input name="price" type="number" class="form-control @error('price') is-invalid @enderror" id="price" value="{{($data->price)}}" >
                      @error ('price')
                      <p class="text-danger"> {{$message}}</p>
                      @enderror
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" cols="70" rows="5" >{{($data->description)}}</textarea>
                        @error ('description')
                        <p class="text-danger"> {{$message}}</p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="category_id" class="form-label">Categoria</label>
                        <select class="form-select" aria-label="Default select example" name="category_id">
                            <option selected>Seleziona</option>
                            @foreach ($categories as $category)
                            <option value="{{$category->id}}" @selected($category == $data->category)>{{$category->name}}</option>
                            @endforeach

                          </select>
                    </div>
                    <div class="row my-3">
                        <div class="col-12">
                            <h5>Console</h5>
                        </div>
                        @foreach($consoles as $console)
                        <div class="form-check col-6 col-md-3 col-lg-2 ">
                            <input class="form-check-input" type="checkbox" value="{{$console->id}}" id="flexCheckDefault" name="console[]" @checked($data->consoles->contains($console))>
                            <label class="form-check-label" for="flexCheckDefault">
                              {{$console->name}}
                            </label>
                          </div>
                        @endforeach
                    </div>

                    <div class="mb-3">
                        <input name="img" class="form-control @error('img') is-invalid @enderror" type="file">
                        @error ('img')
                        <p class="text-danger"> {{$message}}</p>
                        @enderror
                    </div>

                    <button type="submit" class="btn card-btn">Modifica</button>
                  </form>
            </div>
        </div>
    </div>
    








</x-layout>