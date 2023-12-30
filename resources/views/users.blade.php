<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Login</title>
  <!-- Link Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<!-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) -->
  <div class="container mt-5">
    <h1>User Login</h1>
    <form action="users" method="POST">
      <!-- CSRF Token -->
      @csrf
      <div class="mb-3">
        <input type="text" name="username" class="form-control" placeholder="Enter User ID" required>
      </div>
      <div class="mb-3">
        <input type="password" name="password" class="form-control" placeholder="Enter User Password" required>
      </div>
      <div class="mb-3">
        <button type="submit" class="btn btn-primary">Login</button>
        <button type="button" class="btn btn-primary">Primary</button>
      </div>
    </form>
  </div>

  <!-- Link Bootstrap JavaScript (Optional, for certain Bootstrap features) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


