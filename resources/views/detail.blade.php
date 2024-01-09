<x-layout>
  <section class="vh-75 img-gamedetail">
    <h1 class="text-center my-2">{{$data->title}}</h1>
    <div class="container">
        <div class="row">
          <div class="col-12 d-flex justify-content-center my-5">
            <div class="card card-detail mb-3" style="max-width: 700px">
                <div class="row g-0 ">
                  <div class="col-md-4">
                    <img src="{{Storage::url($data->img)}}" class="img-fluid rounded-start " alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body d-flex flex-column align-content-center">
                      <h5 class="card-title text-center my-4 text-white">{{$data->title}}</h5>
                      <p class="text-center text-white">{{$data->category->name}} </p>
                      <p class="card-text text-center my-4 text-white">{{$data->description}}</p>
                      <p class="card-text text-center my-4 text-white">{{$data->price}} euro</p>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </div>
    </div>
</section>
    
</x-layout>