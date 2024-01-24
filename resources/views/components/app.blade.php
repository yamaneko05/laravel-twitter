<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	@vite ('resources/js/app.js')
</head>
<body>
	<header>
		<nav class="navbar navbar-expand-lg bg-body-tertiary">
		<div class="container-fluid">
			<a class="navbar-brand" href="#">Navbar</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="/home">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/profile">Profile</a>
					</li>
					<li class="nav-item">
						<button type="button" class="nav-link" data-bs-toggle="modal" data-bs-target="#createPostModal">
							Create post
						</button>
					</li>
					@auth
					<li class="nav-item">
						<form action="/logout" method="post">
							@csrf
							<button class="nav-link">ログアウト</button>
						</form>
					</li>
					@endauth
				</ul>
			</div>
		</div>
	</nav>
	</header>
	<main>
		<div class="mx-auto" style="width: 400px;">
			{{ $slot }}
		</div>
	</main>
	<footer>

	</footer>
	<x-createPostModal/>
</body>
</html>