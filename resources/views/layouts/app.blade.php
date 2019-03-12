<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'ProjectLister')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.0/css/bulma.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        .is-completed{
            text-decoration: line-through;
            color: #999;
        }
        #content{
            margin-top: 1.25em;
        }
        #modify-project{
            margin: 1.25em;
        }
    </style>
</head>

<body>
    <div class="container">
        <nav class="nav">
            <div class="nav-left">
                <a class="nav-item" href="/">
                    <h1 class="title">Project</h1>
                    <h2 class="subtitle">Lister</h2>
                </a>
            </div>

            <div class="nav-center">
                <a class="nav-item" href="https://github.com/Chikimuras">
                    <span class="icon">
                        <i class="fa fa-github"></i>
                    </span>
                </a>
                <a class="nav-item" href="https://twitter.com/Code42Dev">
                    <span class="icon">
                        <i class="fa fa-twitter"></i>
                    </span>
                </a>
            </div>

            <!-- This "nav-toggle" hamburger menu is only visible on mobile -->
            <!-- You need JavaScript to toggle the "is-active" class on "nav-menu" -->
            <span class="nav-toggle">
                <span></span>
                <span></span>
                <span></span>
            </span>

            <!-- This "nav-menu" is hidden on mobile -->
            <!-- Add the modifier "is-active" to display it on mobile -->
            <div class="nav-right nav-menu">
                <a class="nav-item" href="/">
                    Home
                </a>
                <a class="nav-item" href="/projects">
                    Projects
                </a>
                <a class="nav-item">
                    Profil
                </a>
            </div>
        </nav>
    </div>


    <div class="container is-fluid" id="content">
        @yield('content')
    </div>


    <footer class="footer">
      <div class="container">
        <div class="content has-text-centered">
          <p>
            <strong>This web site</strong> was created by <a href="https://twitter.com/Code42Dev">Chikimuras</a>.<br>
            &copy; All right reserved 2019
          </p>
          <p>
            <a class="icon" href="https://github.com/Chikimuras">
              <i class="fa fa-github"></i>
            </a>
          </p>
        </div>
      </div>
    </footer>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>        
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>
