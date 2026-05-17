<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
      body {
        background: linear-gradient(135deg, #4caf50, #2e7d32);
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 0;
      }
      #LoginBox {
        background: white;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        padding: 2rem;
        width: 100%;
        max-width: 400px;
      }
      #LoginBox h1 {
        font-size: 2rem;
        font-weight: bold;
        color: #4caf50;
        text-align: center;
        margin-bottom: 1.5rem;
      }
      .form-control {
        border-radius: 5px;
      }
      .btn-primary {
        background-color: #4caf50;
        border: none;
        transition: background-color 0.3s;
      }
      .btn-primary:hover {
        background-color: #388e3c;
      }
      .form-check-label {
        font-size: 0.9rem;
      }
      a {
        color: #4caf50;
        text-decoration: none;
      }
      a:hover {
        text-decoration: underline;
      }
    </style>
  </head>
  <body>
    <div id="LoginBox">
        <h1>Login</h1>
        @auth
          <div></div>
        @endauth
        @if(session()->has('loginError'))
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif
        <form action="/Login" method="post">
            @csrf
              <div class="form-outline mb-4">
                <input type="username" name="username" id="form2Example1" class="form-control" placeholder="Username" required/>
                @error('username')
                  <small class="text-danger">{{ $message }}</small>
                @enderror
              </div>

              <div class="form-outline mb-4">
                <input type="password" name="password" id="form2Example2" class="form-control" placeholder="Password" required/>
              </div>
              <div class="row mb-4">
                <div class="col d-flex justify-content-start">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                    <label class="form-check-label" for="form2Example31"> Remember me </label>
                  </div>
                </div>
                <div class="col text-end">
                    <a href="#">Forgot password?</a>
                </div>
              </div>
              <button class="btn btn-primary btn-block w-100 mb-4" type="submit">Sign in</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>
