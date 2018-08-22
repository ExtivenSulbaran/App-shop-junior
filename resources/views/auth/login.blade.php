@extends('layouts.app')

@section('body-class', 'signup-page sidebar-collapse')

@section('content')
<div class="page-header header-filter" filter-color="purple" style="background-image: url('{{ asset('/img/bg7.jpg')}}'); background-size: cover;  ">
    <div class="container">
      <div class="row">
        <div class="col-md-5 ml-auto mr-auto">
          <div class="card card-signup">
            <h2 class="card-title text-center ">Inicio de Sesion</h2>
            <div class="card-body ">
                <div class="col-md-12 mr-auto">
                  <div class="social text-center">
                    {{-- <button class="btn btn-just-icon btn-round btn-twitter">
                      <i class="fa fa-twitter"></i>
                    </button>
                    <button class="btn btn-just-icon btn-round btn-dribbble">
                      <i class="fa fa-dribbble"></i>
                    </button>
                    <button class="btn btn-just-icon btn-round btn-facebook">
                      <i class="fa fa-facebook"> </i>
                    </button> --}}
                    
                    <h4>Ingresa tus datos.</h4>
                  </div>
                  <form class="form" method="POST" action="{{ route('login') }}">

                    @csrf
                    
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text">
                            <i class="material-icons">mail</i>
                          </span>
                        </div>
                       <!--Campo email-->
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" 
                        name="email" value="{{ old('email') }}" placeholder="...Email" required autofocus>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text">
                            <i class="material-icons">lock_outline</i>
                          </span>
                        </div>
                        <!--Campo password-->
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" 
                        name="password" placeholder="...password" required>
                      </div>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input  class="form-check-input" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> 
                        <span class="form-check-sign">
                          <span class="check"></span>
                        </span>
                        Recordar sesion
                      </label>
                    </div>
                    <div class="text-center">
                      <button type="submit"  class="btn btn-primary btn-round">Ingresar</button>
                    </div>

               
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

        <footer class="footer">
            <div class="container">
              
              <div class="copyright float-right">
                &copy;
                <script>
                  document.write(new Date().getFullYear())
                </script>, made with <i class="material-icons">favorite</i> by
                <a href="https://www.creative-tim.com" target="_blank">Extiven Sulbaran</a>.
              </div>
            </div>
          </footer>

      </div>
     
</div>
@endsection
