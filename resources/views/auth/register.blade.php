<x-layout>

    <div class="container vh-100 ">
        <div class="row justify-content-center align-items-center">
            <div class="col-12">
                <h1 class="text-center text-r mt-3 mb-3">Registrati</h1>
            </div>
            <div class="col-12 col-md-6 shadow rounded-5 p-3  mt-5 pt-5 ">
                <form method="POST" action="{{route('register')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" aria-describedby="emailHelp" name="name">
                      </div>
                    <div class="mb-3">
                      <label for="email" class="form-label">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                    </div>
                    <div class="mb-3">
                      <label for="pasword" class="form-label">Password</label>
                      <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="mb-3">
                        <label for="pasword_confirmation" class="form-label">Password confirmation</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                      </div>
                      <div class="d-flex justify-content-center">
                        <button type="submit" class="btn login-register-btn mb-1 text-center">Registrati</button>
                      </div>
                  </form>
            </div>

            <div class="col-12 col-md-6 mt-5 pt-5 d-flex justify-content-center align-items-center flex-column">
              <h3 class="text-center ">Fai già parte della nostra Island?</h3>
              <a class="btn login-register-btn mt-3 pulsare" href="{{route('login')}}"> Accedi!</a>
            </div>
        </div>
    </div>

</x-layout>