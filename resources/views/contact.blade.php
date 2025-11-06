<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Laravel App')</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        nav {
            background-color: #333;
            padding: 10px;
        }
        nav a {
            color: white;
            text-decoration: none;
            margin-right: 15px;
            font-weight: bold;
        }
        nav a.active {
            text-decoration: underline;
        }
        .container {
            padding: 10px;
        }
        .content {
            background: white;
            padding: 20px;
            border-radius: 5px;
        }
        .identity {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            gap: 10px;
        }
        .identity a {
            display: inline-block;
            padding: 10px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
         @media (max-width: 768px) {
    .identity {
        flex-direction: column;
        align-items: center;    
    }
}
        
    </style>
</head>
<body>
<div class="container">
    <nav>
        <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
        <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About</a>
        <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
        <a href="{{ route('services') }}" class="{{ request()->routeIs('services') ? 'active' : '' }}">Services</a>
    </nav>
    <div class="content">
    <h1>Who are we?</h1>

    </div>
</div>
<div>
    <div class="identity">
       <a href="#" class="identity">I Nyoman Warsana (2401010431)</a>
       <a href="#" class="identity">I Nyoman Warsana (2401010431)</a>
       <a href="#" class="identity">I Nyoman Warsana (2401010431)</a>
    </div>
</div>
</body>
</html>
