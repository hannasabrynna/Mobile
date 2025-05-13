<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Movie Tracker</title>
    <style>
        body { font-family: Arial; margin: 30px; }
        .movie { border-bottom: 1px solid #ccc; padding: 10px 0; }
        .success { color: green; }
        form { margin-top: 10px; }
        input, button { margin: 5px 0; padding: 5px; }
    </style>
</head>
<body>
    <h1>🎬 Movie Tracker</h1>
    @if (session('success'))
        <p class="success">{{ session('success') }}</p>
    @endif
    {{ $slot }}
</body>
</html>
