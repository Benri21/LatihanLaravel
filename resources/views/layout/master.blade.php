<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- NAVBAR START -->
    <nav class="navbar navbar-expand-lg bg-primary border-bottom border-body"
         data-bs-theme="dark">

        <div class="container-fluid">

            <!-- Brand -->
            <a class="navbar-brand" href="/">
                Belajar Laravel
            </a>

            <!-- Toggle Button -->
            <button class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="Toggle navigation">

                <span class="navbar-toggler-icon"></span>

            </button>

            <!-- Navbar Content -->
            <div class="collapse navbar-collapse"
                 id="navbarSupportedContent">

                <!-- Navigation Menu -->
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item">
                        <a class="nav-link"
                           aria-current="page"
                           href="/home">
                            Home
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/about">
                            About
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/mahasiswa">
                            Data Mahasiswa
                        </a>
                    </li>

                    <!-- Disabled -->
                    <li class="nav-item">
                        <a class="nav-link disabled"
                           aria-disabled="true"
                           tabindex="-1">
                            Disabled
                        </a>
                    </li>

                </ul>

                <!-- Search Form -->
                <form class="d-flex"
                      role="search"
                      action="/search"
                      method="GET">

                    <input class="form-control me-2"
                           type="search"
                           name="q"
                           placeholder="Search..."
                           aria-label="Search">

                    <button class="btn btn-outline-success"
                            type="submit">
                        Search
                    </button>

                </form>

            </div>
        </div>
    </nav>
<!-- NAVBAR END -->

    <div class="container mt-4">
        @yield('konten')

    </div>

<!-- Bootstrap 5.3 JavaScript Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>