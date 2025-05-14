<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Movie Tracker</title>
<style>
    body {
        font-family: Arial;
        background-color: #222831;
        margin: 0;
        padding: 20px;
        color: #ccc;
        }
    
    .success {
        color: green;
        font-weight: bold;
    }
    header {
        background-color: #393E46;
        padding: 10px 0;
    }
    nav {
        display: flex;
        justify-content: center;
    }
    nav ul {
        list-style: none;
        padding: 0;
    }
    nav ul li {
        display: inline;
        margin: 0 15px;
    }
    nav ul li a {
        color: white;
        text-decoration: none;
    }
    nav ul li a:hover {
        text-decoration: underline;
    }
    .content {
        max-width: 800px;
        margin: 20px auto;
        padding: 20px;
        background-color:#393E46;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    footer {
        text-align: center;
        margin-top: 20px;
        color: #777;
    }
    hr {
        margin: 20px 0;
        border: 0;
        border-top: 1px solid #ccc;
    }
</style>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{ route('movies.index') }}">Home</a></li>
                <li><a href="{{ route('movies.create') }}">Add Movie</a></li>
                <li><a href="">About</a></li>
            </ul>
        </nav>
    </header>
    <div class="content">
        <h1>Movie Tracker</h1>
        @if (session('success'))
            <p class="success">{{ session('success') }}</p>
        @endif
        {{ $slot }}
    </div>
    <hr>
    <footer>
        <p>&copy; 2025 Movie Tracker</p>
    </footer>
    <hr>
    
</body>
</html>
