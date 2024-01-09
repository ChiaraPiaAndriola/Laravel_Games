<x-layout>

  <div class="container altezza-login-register ">
      <div class="row justify-content-center align-items-center ">
            <div class="col-12 ">
                <h1 class="text-center mt-4 mb-3 text-r">Login</h1>
            </div>
            <div class="col-12 col-md-6 mt-5 pt-5 shadow rounded-4 p-3">
                <form method="POST" action="{{route('login')}}">
                    @csrf
                    <div class="mb-3">
                      <label for="email" class="form-label mt-3">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                      @error('email') <p class="text-danger">{{$message}}</p> @enderror
                    </div>
                    <div class="mb-3">
                      <label for="pasword" class="form-label">Password</label>
                      <input type="password" class="form-control" id="password" name="password">
                      @error('password') <p class="text-danger">{{$message}}</p> @enderror
                    </div>
                    <div class="d-flex justify-content-center align-items-center">
                      <button type="submit" class="btn  login-register-btn mb-1">Accedi</button>
                    </div>
                  </form>
              </div>

              <div class="col-12 col-md-6 mt-5 pt-5 d-flex justify-content-center align-items-center flex-column">
                <h3 class="text-center ">Non fai ancora parte della nostra Island?</h3>
                <a class="btn login-register-btn mt-3 pulsare" href="{{route('register')}}"> Registrati Ora!</a>
              </div>
        </div>
  </div>

</x-layout>