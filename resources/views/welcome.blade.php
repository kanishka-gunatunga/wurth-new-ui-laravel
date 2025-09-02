<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Layout Example</title>

    <link rel="stylesheet" href="{{ asset('css/sidebarNew.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link rel="stylesheet" href="{{ asset('css/finance.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar-profile.css') }}">
    <link rel="stylesheet" href="{{ asset('css/commonNew.css') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Poppins:wght@400;500;600&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <style>
        body {
            margin: 0;
            /* font-family: Arial, sans-serif; */
            display: flex;
            flex-direction: column;
            height: 100vh;
        }


        /* Main layout */
        .main {
            flex: 1;
            display: flex;
            overflow: hidden;
            margin-top: 1rem;
            width: 100vw;
        }


        /* Content wrapper */
        .content-wrapper {
            flex: 3;
            display: flex;
            flex-direction: column;
            background-color: #fff5f6;
            margin-right: 20px;
        }

        /* Scrollable content */
        .content {
            flex: 1;
            padding: 2rem;
            padding-top: 4rem;
            overflow-y: auto;
        }

        /* Bottom bar */
        .bottom-bar {
            background: #fff5f6;
            /* padding: 15px; */
            border-top: none;
            text-align: right;
        }

        .bottom-bar button {
            padding: 8px 16px;
            margin-left: 10px;
        }

        @media (max-width: 1024px) {
            .content-wrapper {
                max-width: 700px;
            }
        }

        @media (min-width: 1024px)and (max-width:1350px) {
            .content-wrapper {
                max-width: 700px;
            }
        }
    </style>
</head>

<body>

    {{-- Navbar --}}
    @include('partials.navbar')

    {{-- Main Content and Sidebar --}}
    <div class="main">
        <div class="sidebar-div">
            @include('partials.sidebar')
        </div>

        {{-- <div class="content-wrapper">
            <div class="content">
                @yield('content')
            </div>
            <div class="bottom-bar">
                @yield('bottom-bar')
            </div>
        </div> --}}
        <div class="content-wrapper">
            <div class="content container-fluid">
                @yield('content')
            </div>
            <div class="bottom-bar">
                @yield('bottom-bar')
            </div>
        </div>

    </div>





    <script src="{{ asset('js/main-script.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>




    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const sidebar = document.getElementById("sidebar");
            const toggleButton = document.getElementById("sidebarToggle");
            const sidebarLinks = document.querySelectorAll(".sidebar-list li a");

            // Toggle sidebar visibility
            if (toggleButton) {
                toggleButton.addEventListener("click", function() {
                    sidebar.classList.toggle("collapsed");
                });
            }

            // Set active class on navigation
            const currentPath = window.location.pathname;
            sidebarLinks.forEach((link) => {
                const href = link.getAttribute("href");
                if (
                    href === currentPath ||
                    (currentPath === "/" && href === "/dashboard")
                ) {
                    link.parentElement.classList.add("active");
                } else {
                    link.parentElement.classList.remove("active");
                }
            });

            // Handle dropdown functionality
            const dropdownItems = document.querySelectorAll(
                ".sidebar-list li a .dropdown-arrow"
            );
            dropdownItems.forEach((arrow) => {
                arrow.parentElement.addEventListener("click", function(e) {
                    e.preventDefault();
                    const listItem = this.parentElement;
                    listItem.classList.toggle("expanded");
                });
            });
        });
    </script>

</body>

</html>
