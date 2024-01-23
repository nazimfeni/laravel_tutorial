<h1>User Login</h1>

@vite(['resources/sass/app.scss', 'resources/js/app.js'])

<div class="container mt-5">
    <form action="nakib" method="POST">
        @csrf
        <div class="mb-3">
            <label for="username" class="form-label">Enter User ID</label>
            <input type="text" class="form-control" id="username" name="username" placeholder="Enter User ID" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Enter User Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Enter User Password" required>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
</div>

<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
</div>