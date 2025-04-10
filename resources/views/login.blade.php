<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>
<body>
    <section class="vh-100">
      <a href="{{ url('/') }}" class="btn btn-outline-light position-absolute m-3 shadow" style="top: 0; left: 0; z-index: 999; background-color: #0d6efd; color: white;">
        <i class="fas fa-arrow-left me-2"></i>
      </a>
        <div class="container-fluid h-custom">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp" class="img-fluid" alt="Sample image">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
              <form action="{{ route('login') }}" method="POST">
                @csrf
                
                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input type="email" name="email" class="form-control form-control-lg" placeholder="Enter a valid email address" required />
                  <label class="form-label">Email address</label>
                </div>
      
                <!-- Password input -->
                <div class="form-outline mb-3">
                  <input type="password" name="password" class="form-control form-control-lg" placeholder="Enter password" required />
                  <label class="form-label">Password</label>
                </div>
      
                <!-- Remember me -->
                <div class="d-flex justify-content-between align-items-center">
                  <div class="form-check mb-0">
                    <input class="form-check-input me-2" type="checkbox" name="remember" id="remember" />
                    <label class="form-check-label" for="remember"> Remember me </label>
                  </div>
                </div>
      
                <!-- Error message -->
                @if ($errors->any())
                  <div class="alert alert-danger mt-3">
                    @foreach ($errors->all() as $error)
                      <p>{{ $error }}</p>
                    @endforeach
                  </div>
                @endif
      
                <!-- Submit button -->
                <div class="text-center text-lg-start mt-4 pt-2">
                  <button type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                </div>
      
              </form>
            </div>
          </div>
        </div>
        <div class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
          <div class="text-white mb-3 mb-md-0">Copyright © 2024. All rights reserved.</div>
          <div>
            <a href="#" class="text-white me-4"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="text-white me-4"><i class="fab fa-twitter"></i></a>
            <a href="#" class="text-white me-4"><i class="fab fa-google"></i></a>
            <a href="#" class="text-white"><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>
      </section>
</body>
</html>
