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
            background-image: url("code-image.jpg");
            background-size: cover;
            background-repeat: no-repeat;
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
        
        .content {
            background: white;
            padding: 10px;
    }
    .services {
        display: inline-block;
        padding: 10px;
        background-color: #28a745;
        color: white;
        text-decoration: none;
        border-radius: 5px;
    }
   @media (max-width: 768px) {
        
          body {
    background-image: none;
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
    <h1>The homepage of the web</h1>
    <h3>Hi! this is website for learning coding</h3>

<a class="services" href="{{ route('services') }}" class="{{ request()->routeIs('services') ? 'active' : '' }}">Get started</a>
    
    </div>
</div>

</body>
</html>
