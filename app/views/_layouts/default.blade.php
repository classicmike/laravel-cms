<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome1" />
    <title>My Awesome Blog</title>

    {{ HTML::style('css/style.css') }}

    <!--[if lt IE9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif] -->
</head>
<body>

<header>
    <div class="container">
        <h1>My Awesome Blog</h1>
        <p>By Classic Mike</p>
    </div>
</header>

<main class="container">
    @yield('content')
</main>

<footer>
    <div class="container">
        &copy; {{ date('Y') }} My Awesome Company | {{ link_to_route('admin.posts.index', 'Admin') }}
    </div>
</footer>

</body>
</html>