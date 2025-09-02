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
                <h1 class="header-title">Activity Log</h1>
            </div>
            <div class="col-lg-6 col-12 d-flex justify-content-lg-end gap-3 ">
                <div id="search-box-wrapper" class="collapsed">
                    <i class="fa-solid fa-magnifying-glass fa-xl search-icon-inside"></i>
                    <input type="text" class="search-input" placeholder="Search customer ID, Name or ADM ID, Name" />
                </div>
                <button class="header-btn" id="search-toggle-button"><i
                        class="fa-solid fa-magnifying-glass fa-xl"></i></button>
                <button class="header-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#searchByFilter"
                    aria-controls="offcanvasRight"><i class="fa-solid fa-filter fa-xl"></i></button>
            </div>
        </div>

        <hr class="red-line mt-0">

        <div class="table-responsive division-table">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Date</th>
                        <th scope="col">Time</th>
                        <th scope="col">ADM Number</th>
                        <th scope="col">User Name</th>
                        <th scope="col">Activity Type</th>
                        <th scope="col">Changes</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody id="activityLogTableBody">
                </tbody>
            </table>
        </div>

        <div class="col-12 d-flex justify-content-center mt-4">
            <nav aria-label="Page navigation">
                <ul id="activityLogPagination" class="pagination"></ul>
            </nav>
        </div>



    </div>



    <div class="offcanvas offcanvas-end offcanvas-filter" tabindex="-1" id="searchByFilter"

        aria-labelledby="offcanvasRightLabel">
        <div class="row d-flex justify-content-end">
            <button type="button" class="btn-close rounded-circle" data-bs-dismiss="offcanvas" aria-label="Close"></button>
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
                    <span>Supervisor</span>

                </div>

                <div class="col-4 filter-tag d-flex align-items-center justify-content-between selectable-filter">
                    <span>Marketing</span>

                </div>

                <div class="col-4 filter-tag d-flex align-items-center justify-content-between selectable-filter">
                    <span>Admin</span>

                </div>

                <div class="col-4 filter-tag d-flex align-items-center justify-content-between selectable-filter">
                    <span>Head of Division</span>

                </div>

                <div class="col-4 filter-tag d-flex align-items-center justify-content-between selectable-filter">
                    <span>Team Leaders</span>

                </div>

                <div class="col-4 filter-tag d-flex align-items-center justify-content-between selectable-filter">
                    <span>Team Leaders</span>

                </div>


            </div>

            <div class="mt-5 filter-categories">
                <p class="filter-title">Date</p>


                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Today
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Yesterday
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        This Week
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        This Month
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        This Year
                    </label>
                </div>
            </div>


            <div class="mt-5 filter-categories">
                <p class="filter-title">Time</p>


                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        9:00 AM - 1:00 PM
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        1:00 PM - 5:00 PM
                    </label>
                </div>


                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        5:00 AM - 9:00 PM
                    </label>
                </div>


                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        09:00 PM - 1:00 AM
                    </label>
                </div>
            </div>
            
            <script>
                document.querySelectorAll('.selectable-filter').forEach(function(tag) {
                    tag.addEventListener('click', function() {
                        tag.classList.toggle('selected');
                    });
                });
            </script>

            <script>
                // Sample Activity Log Data
                const activityLogData = [{
                        date: "12 Dec 2024",
                        time: "08:45 AM",
                        admNumber: "25651487",
                        userName: "H.K Perera",
                        type: "List Removed",
                        changes: "WD-45 List-Item-Removed"
                    },
                    {
                        date: "12 Dec 2024",
                        time: "09:15 AM",
                        admNumber: "25651488",
                        userName: "P.R Perera",
                        type: "User Level Edit",
                        changes: "254523 Change User Role"
                    },
                    {
                        date: "12 Dec 2024",
                        time: "09:30 AM",
                        admNumber: "25651489",
                        userName: "K.M Silva",
                        type: "User Level Edit",
                        changes: "254523 Change User Role"
                    },
                    {
                        date: "12 Dec 2024",
                        time: "10:00 AM",
                        admNumber: "25651490",
                        userName: "H.K Perera",
                        type: "User Level Edit",
                        changes: "254523 Change User Role"
                    },
                    {
                        date: "12 Dec 2024",
                        time: "10:30 AM",
                        admNumber: "25651491",
                        userName: "P.R Perera",
                        type: "List Removed",
                        changes: "254523 Change User Role"
                    },
                    {
                        date: "12 Dec 2024",
                        time: "10:30 AM",
                        admNumber: "25651491",
                        userName: "P.R Perera",
                        type: "List Removed",
                        changes: "254523 Change User Role"
                    },
                    {
                        date: "12 Dec 2024",
                        time: "10:30 AM",
                        admNumber: "25651491",
                        userName: "P.R Perera",
                        type: "List Removed",
                        changes: "254523 Change User Role"
                    },
                    {
                        date: "12 Dec 2024",
                        time: "10:30 AM",
                        admNumber: "25651491",
                        userName: "P.R Perera",
                        type: "List Removed",
                        changes: "254523 Change User Role"
                    },
                ];

                const rowsPerPage = 10;
                let currentPage = 1;

                // Render table rows
                function renderActivityLogTable(page) {
                    const tableBody = document.getElementById("activityLogTableBody");
                    tableBody.innerHTML = "";

                    const startIndex = (page - 1) * rowsPerPage;
                    const endIndex = Math.min(startIndex + rowsPerPage, activityLogData.length);

                    for (let i = startIndex; i < endIndex; i++) {
                        const row = `<tr>
                <td>${activityLogData[i].date}</td>
                <td>${activityLogData[i].time}</td>
                <td>${activityLogData[i].admNumber}</td>
                <td>${activityLogData[i].userName}</td>
                <td>${activityLogData[i].type}</td>
                <td>${activityLogData[i].changes}</td>
                <td>
                    <a href="{{ url('/activity-log-details') }}">
                    <button class="action-btn btn-sm btn-dark">
                        View More
                    </button>
                    </a>
                </td>
            </tr>`;
                        tableBody.innerHTML += row;
                    }

                    renderActivityLogPagination();
                }

                // Render pagination
                function renderActivityLogPagination() {
                    const pagination = document.getElementById("activityLogPagination");
                    pagination.innerHTML = "";

                    const totalPages = Math.ceil(activityLogData.length / rowsPerPage);

                    // Prev button
                    pagination.innerHTML += `<li class="page-item ${currentPage === 1 ? 'disabled' : ''}">
            <a class="page-link" href="#" onclick="changeActivityLogPage(${currentPage - 1})">Prev</a>
        </li>`;

                    // Page numbers
                    for (let i = 1; i <= totalPages; i++) {
                        pagination.innerHTML += `<li class="page-item ${i === currentPage ? 'active' : ''}">
                <a class="page-link" href="#" onclick="changeActivityLogPage(${i})">${i}</a>
            </li>`;
                    }

                    // Next button
                    pagination.innerHTML += `<li class="page-item ${currentPage === totalPages ? 'disabled' : ''}">
            <a class="page-link" href="#" onclick="changeActivityLogPage(${currentPage + 1})">Next</a>
        </li>`;
                }

                // Change page
                function changeActivityLogPage(page) {
                    const totalPages = Math.ceil(activityLogData.length / rowsPerPage);
                    if (page < 1 || page > totalPages) return;
                    currentPage = page;
                    renderActivityLogTable(currentPage);
                }

                // Initialize
                window.onload = function() {
                    renderActivityLogTable(currentPage);
                };
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
