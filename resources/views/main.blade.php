<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Layout Example</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            height: 100vh;
        }

        /* Navbar */
        .navbar {
            background: #333;
            color: white;
            /* padding: 15px; */
            text-align: center;
        }

        /* Main layout: sidebar + content */
        .main {
            flex: 1;
            display: flex;
            overflow: hidden;
        }

        /* Content wrapper (includes scroll area + bottom bar) */
        .content-wrapper {
            flex: 3;
            display: flex;
            flex-direction: column;
            background: #fff;
            /* margin-right: 20px; */
        }

        /* Scrollable content area */
        .content {
            flex: 1;
            /* padding: 20px; */
            overflow-y: auto;
        }

        /* Sidebar */
        .sidebar {
            flex: 1;
            background: #ddd;
            /* padding: 20px; */
            overflow-y: auto;
        }

        /* Bottom bar (only inside content area) */
        .bottom-bar {
            background: #f1f1f1;
            padding: 15px;
            border-top: 1px solid #ccc;
            text-align: right;
        }

        .bottom-bar button {
            padding: 8px 16px;
            margin-left: 10px;
        }
    </style>
</head>
<body>

    {{-- Navbar --}}
    @include('partials.navbar')

    {{-- Main Content and Sidebar --}}
    <div class="main">
        <div class="sidebar">
            @include('partials.sidebar')
        </div>
        <div class="content-wrapper">
            <div class="content">
                @yield('content')
            </div>
            <div class="bottom-bar">
                @yield('partials.bottom-bar')
            </div>
        </div>

        
    </div>

</body>
</html>
