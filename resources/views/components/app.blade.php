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

	</header>
	<main>{{ $slot }}</main>
	<footer>

	</footer>
</body>
</html>