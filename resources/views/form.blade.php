<x-layout>
    
    <div class="container-fluid vh-100 bg-w">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-md-8">
                <h1 class="text-center mt-3 mb-3 text-black">Contattaci</h1>
                <form class="col-12 col-mb-6 border-contact p-4 rounded-5 shadow" action="{{route('send.email')}}" method="POST">  
                    @csrf 
                    
                    <div class="mb-3 ">
                        <label for="name" class="form-label">Name</label>
                        <input name="username" type="text" class="form-control" id="name" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="message">Message</label>
                        <textarea name="message" class="form-control" id="message" cols="30" rows="10"></textarea>
                    </div>
                    <button type="submit" class="btn card-btn mb-1">Invia email</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
</x-layout>