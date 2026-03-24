<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>RecipeNest</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="style.css">

</head>

<body>

<!-- NAVBAR -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

<div class="container">

<a class="navbar-brand d-flex align-items-center" href="index.html">
<img src="logo.jpg" width="40" height="40" class="me-2">
<span class="site-title">RecipeNest</span>
</a>

<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="menu">

<ul class="navbar-nav ms-auto">

<li class="nav-item">
<a class="nav-link active" href="index.html">Home</a>
</li>

<li class="nav-item">
<a class="nav-link" href="recipes.html">Recipes</a>
</li>

<li class="nav-item">
<a class="nav-link" href="contact.html">Contact</a>
</li>

<li class="nav-item">
<a class="nav-link" href="auth/login.php">Login</a>
</li>

<li class="nav-item">
<a class="nav-link" href="auth/register.php">Register</a>
</li>

</ul>

</div>

</div>

</nav>

<!-- HERO SECTION -->

<div class="hero">

<h1>RecipeNest</h1>

<p>Where every recipe finds a home</p>

</div>

<!-- CAROUSEL -->

<div id="foodSlider" class="carousel slide" data-bs-ride="carousel">

<div class="carousel-inner">

<div class="carousel-item active">
<img src="food.jpg" class="d-block w-100">
</div>

<div class="carousel-item">
<img src="food1.jpg" class="d-block w-100">
</div>

<div class="carousel-item">
<img src="food2.jpg" class="d-block w-100">
</div>

<div class="carousel-item">
<img src="food3.jpg" class="d-block w-100">
</div>

</div>

<button class="carousel-control-prev" type="button" data-bs-target="#foodSlider" data-bs-slide="prev">
<span class="carousel-control-prev-icon"></span>
</button>

<button class="carousel-control-next" type="button" data-bs-target="#foodSlider" data-bs-slide="next">
<span class="carousel-control-next-icon"></span>
</button>

</div>

<!-- SEARCH BAR -->

<div class="container mt-4">

<input type="text" class="form-control" placeholder="Search recipes...">

</div>

<!-- ABOUT SECTION -->

<div class="container mt-5">

<h2>About RecipeNest</h2>

<p>
RecipeNest is a simple digital recipe collection that helps users find cooking ideas easily.
This website allows users to explore different recipes, read ingredients and cooking steps,
and discover new food ideas.
</p>

</div>

<!-- FOOTER -->

<footer class="bg-dark text-white text-center p-3 mt-5">

<p>© 2026 RecipeNest</p>

</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>