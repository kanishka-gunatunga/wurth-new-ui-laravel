@extends('welcome')

@section('content')

<style>
    /* Search box styles */
    #search-box-wrapper {
        display: flex;
        align-items: center;
        overflow: hidden;
        background-color: #fff;
        transition: width 0.3s ease;
        border-radius: 30px;
        height: 45px;
        width: 45px;
        border: 1px solid transparent;
        position: relative;
        width: 0;
    }

    #search-box-wrapper.collapsed {
        width: 0;
        padding: 0;
        margin: 0;
        border: 1px solid transparent;
        background-color: transparent;
    }

    #search-box-wrapper.expanded {
        width: 450px;
        padding: 0 15px;
    }

    .search-input {
        flex-grow: 1;
        border: none;
        background: transparent;
        outline: none;
        font-size: 16px;
        color: #333;
        width: 100%;
        /* Add padding to make space for the icon */
        padding-left: 30px;
    }

    .search-input::placeholder {
        color: #888;
    }

    .search-icon-inside {
        position: absolute;
        left: 10px;
        /* Adjust as needed */
        color: #888;
    }

    /* Optional: Adjust button alignment if needed */
    .col-12.d-flex.justify-content-lg-end {
        align-items: center;
    }
</style>

<div class="main-wrapper">

    <div class="row d-flex justify-content-between">
        <div class="col-lg-6 col-12">
            <h1 class="header-title">Locked Users</h1>
        </div>
        <div class="col-lg-6 col-12 d-flex justify-content-lg-end gap-3 pe-5">
            <div id="search-box-wrapper" class="collapsed">
                <i class="fa-solid fa-magnifying-glass fa-xl search-icon-inside"></i>
                <input type="text" class="search-input"
                    placeholder="Search customer ID, Name or ADM ID, Name" />
            </div>
            <button class="header-btn" id="search-toggle-button"><i
                    class="fa-solid fa-magnifying-glass fa-xl"></i></button>
            <button class="header-btn" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#searchByFilter" aria-controls="offcanvasRight"><i
                    class="fa-solid fa-filter fa-xl"></i></button>
        </div>
    </div>

    <hr class="red-line mt-0">

    <div class="section-card locked-users-card">

        <div class="table-responsive division-table-sub">
            <table class="table">
                <thead>
                    <tr>
                        <th>Date & Time <i class="sort-icon">▼</i></th>
                        <th>Full Name</th>
                        <th>User ID</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>12 Dec 2024, 08:45 AM</td>
                        <td>H.K Perera</td>
                        <td>254565214</td>
                        <td>
                            <button class="btn unlock-btn">Unlock</button>
                        </td>
                    </tr>
                    <tr>
                        <td>12 Dec 2024, 08:45 AM</td>
                        <td>Pasan Randula</td>
                        <td>254565214</td>
                        <td>
                            <button class="btn unlock-btn">Unlock</button>
                        </td>
                    </tr>
                    <tr>
                        <td>12 Dec 2024, 08:45 AM</td>
                        <td>H.K Perera</td>
                        <td>254565214</td>
                        <td>
                            <button class="btn unlock-btn">Unlock</button>
                        </td>
                    </tr>
                    <tr>
                        <td>12 Dec 2024, 08:45 AM</td>
                        <td>Pasan Randula</td>
                        <td>254565214</td>
                        <td>
                            <button class="btn unlock-btn">Unlock</button>
                        </td>
                    </tr>
                    <tr>
                        <td>12 Dec 2024, 08:45 AM</td>
                        <td>H.K Perera</td>
                        <td>254565214</td>
                        <td>
                            <button class="btn unlock-btn">Unlock</button>
                        </td>
                    </tr>
                    <tr>
                        <td>12 Dec 2024, 08:45 AM</td>
                        <td>Pasan Randula</td>
                        <td>254565214</td>
                        <td>
                            <button class="btn unlock-btn">Unlock</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>




<div class="offcanvas offcanvas-end offcanvas-filter" tabindex="-1" id="searchByFilter"
    aria-labelledby="offcanvasRightLabel">
    <div class="row d-flex justify-content-end">
        <button type="button" class="btn-close rounded-circle" data-bs-dismiss="offcanvas"
            aria-label="Close"></button>
    </div>

    <div class="offcanvas-header d-flex justify-content-between">
        <div class="col-6">
            <span class="offcanvas-title" id="offcanvasRightLabel">Search </span> <span class="title-rest"> &nbsp;by
                Filter
            </span>
        </div class="col-6">

        <div>
            <button class="btn rounded-phill">Clear All</button>
        </div>
    </div>
    <div class="offcanvas-body">
        <div class="row">
            <div class="col-4 filter-tag d-flex align-items-center justify-content-between selectable-filter">
                <span>ADMs</span>

            </div>

            <div class="col-4 filter-tag d-flex align-items-center justify-content-between selectable-filter">
                <span>Marketing</span>

            </div>

            <div class="col-4 filter-tag d-flex align-items-center justify-content-between selectable-filter">
                <span>Admin</span>

            </div>

            <div class="col-4 filter-tag d-flex align-items-center justify-content-between selectable-filter">
                <span>Finance</span>

            </div>

            <div class="col-4 filter-tag d-flex align-items-center justify-content-between selectable-filter">
                <span>Team Leaders</span>

            </div>

            <div class="col-4 filter-tag d-flex align-items-center justify-content-between selectable-filter">
                <span>Head of Division</span>

            </div>
        </div>

        <!-- Divisions -->
        <div class="mt-5 filter-categories">
            <p class="filter-title">Divisions</p>
            <div class="form-check custom-circle-checkbox">
                <input class="form-check-input" type="checkbox" id="division1" name="division" value="Division 1">
                <label class="form-check-label" for="division1">
                    Division 1
                </label>
            </div>
            <div class="form-check custom-circle-checkbox">
                <input class="form-check-input" type="checkbox" id="division2" name="division" value="Division 2">
                <label class="form-check-label" for="division2">
                    Division 2
                </label>
            </div>
            <div class="form-check custom-circle-checkbox">
                <input class="form-check-input" type="checkbox" id="division3" name="division" value="Division 3">
                <label class="form-check-label" for="division3">
                    Division 3
                </label>
            </div>
            <div class="form-check custom-circle-checkbox">
                <input class="form-check-input" type="checkbox" id="division4" name="division" value="Division 4">
                <label class="form-check-label" for="division4">
                    Division 4
                </label>
            </div>
            <div class="form-check custom-circle-checkbox">
                <input class="form-check-input" type="checkbox" id="division5" name="division" value="Division 5">
                <label class="form-check-label" for="division5">
                    Division 5
                </label>
            </div>
        </div>

        

        
        <!-- link view more to the view user page -->
        <!-- <script>
    document.querySelectorAll('.action-btn').forEach(function (btn) {
        btn.addEventListener('click', function () {
            window.location.href = 'view-user.html';
        });
    });
</script> -->

        <script>
    document.querySelectorAll('.selectable-filter').forEach(function (tag) {
        tag.addEventListener('click', function () {
            tag.classList.toggle('selected');
        });
    });
</script>

<!-- expand search bar  -->
            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    const searchWrapper = document.getElementById("search-box-wrapper");
                    const searchToggleButton = document.getElementById("search-toggle-button");
                    const searchInput = searchWrapper.querySelector(".search-input");

                    let idleTimeout;
                    const idleTime = 5000; // 5 seconds (5000 milliseconds)

                    function collapseSearch() {
                        searchWrapper.classList.remove("expanded");
                        searchWrapper.classList.add("collapsed");
                        searchToggleButton.classList.remove("d-none"); // Show the button
                        clearTimeout(idleTimeout); // Clear any existing timer
                    }

                    function startIdleTimer() {
                        clearTimeout(idleTimeout); // Clear previous timer
                        idleTimeout = setTimeout(() => {
                            if (!searchInput.value) { // Only collapse if input is empty
                                collapseSearch();
                            }
                        }, idleTime);
                    }

                    searchToggleButton.addEventListener("click", function() {
                        if (searchWrapper.classList.contains("collapsed")) {
                            searchWrapper.classList.remove("collapsed");
                            searchWrapper.classList.add("expanded");
                            searchToggleButton.classList.add("d-none"); // Hide the button
                            searchInput.focus();
                            startIdleTimer();
                        } else {
                            collapseSearch();
                        }
                    });

                    searchInput.addEventListener("keydown", function() {
                        startIdleTimer(); // Reset the timer on any keypress
                    });
                });
            </script>


@endsection