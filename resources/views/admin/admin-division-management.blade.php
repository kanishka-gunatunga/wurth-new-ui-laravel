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
                <h1 class="header-title">Division Management</h1>
            </div>
            <div class="col-lg-6 col-12 d-flex justify-content-lg-end gap-3">
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


        <div class="styled-tab-main">
            <ul class="nav">
                <li class="nav-item mb-3">
                    <a class="nav-link active" aria-current="page" href="#">
                        <svg width="25" height="24" viewBox="0 0 25 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M20.6094 4H4.60938C4.34416 4 4.0898 4.10536 3.90227 4.29289C3.71473 4.48043 3.60938 4.73478 3.60938 5V19C3.60938 19.2652 3.71473 19.5196 3.90227 19.7071C4.0898 19.8946 4.34416 20 4.60938 20H20.6094C20.8746 20 21.1289 19.8946 21.3165 19.7071C21.504 19.5196 21.6094 19.2652 21.6094 19V5C21.6094 4.73478 21.504 4.48043 21.3165 4.29289C21.1289 4.10536 20.8746 4 20.6094 4ZM4.60938 2C3.81373 2 3.05066 2.31607 2.48805 2.87868C1.92545 3.44129 1.60938 4.20435 1.60938 5V19C1.60938 19.7956 1.92545 20.5587 2.48805 21.1213C3.05066 21.6839 3.81373 22 4.60938 22H20.6094C21.405 22 22.1681 21.6839 22.7307 21.1213C23.2933 20.5587 23.6094 19.7956 23.6094 19V5C23.6094 4.20435 23.2933 3.44129 22.7307 2.87868C22.1681 2.31607 21.405 2 20.6094 2H4.60938ZM6.60938 7H8.60938V9H6.60938V7ZM11.6094 7C11.3442 7 11.0898 7.10536 10.9023 7.29289C10.7147 7.48043 10.6094 7.73478 10.6094 8C10.6094 8.26522 10.7147 8.51957 10.9023 8.70711C11.0898 8.89464 11.3442 9 11.6094 9H17.6094C17.8746 9 18.1289 8.89464 18.3165 8.70711C18.504 8.51957 18.6094 8.26522 18.6094 8C18.6094 7.73478 18.504 7.48043 18.3165 7.29289C18.1289 7.10536 17.8746 7 17.6094 7H11.6094ZM8.60938 11H6.60938V13H8.60938V11ZM10.6094 12C10.6094 11.7348 10.7147 11.4804 10.9023 11.2929C11.0898 11.1054 11.3442 11 11.6094 11H17.6094C17.8746 11 18.1289 11.1054 18.3165 11.2929C18.504 11.4804 18.6094 11.7348 18.6094 12C18.6094 12.2652 18.504 12.5196 18.3165 12.7071C18.1289 12.8946 17.8746 13 17.6094 13H11.6094C11.3442 13 11.0898 12.8946 10.9023 12.7071C10.7147 12.5196 10.6094 12.2652 10.6094 12ZM8.60938 15H6.60938V17H8.60938V15ZM10.6094 16C10.6094 15.7348 10.7147 15.4804 10.9023 15.2929C11.0898 15.1054 11.3442 15 11.6094 15H17.6094C17.8746 15 18.1289 15.1054 18.3165 15.2929C18.504 15.4804 18.6094 15.7348 18.6094 16C18.6094 16.2652 18.504 16.5196 18.3165 16.7071C18.1289 16.8946 17.8746 17 17.6094 17H11.6094C11.3442 17 11.0898 16.8946 10.9023 16.7071C10.7147 16.5196 10.6094 16.2652 10.6094 16Z"
                                fill="#CC0000" />
                        </svg>

                        Division List
                    </a>
                </li>
            </ul>
            <div class="col-12 d-flex justify-content-end mb-3">
                <a href="{{url("admin-add-new-division")}}">
                    {{-- <button class="add-new-division-btn">+ Add New Division</button> --}}


                    <button class="red-action-btn-lg add-new-payment-btn">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9.50726 10.5634H4.85938V9.0141H9.50726V4.36621H11.0566V9.0141H15.7044V10.5634H11.0566V15.2113H9.50726V10.5634Z"
                                fill="white" />
                        </svg>

                        Add New Division
                    </button>
                </a>
            </div>

            <div class="table-responsive division-table">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Division Name</th>
                            <th scope="col">Head of Division</th>
                            <th scope="col">Registered Date</th>
                            <th scope="col">No. of Users</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody id="divisionManagementTableBody">
                    </tbody>
                </table>
            </div>

            <nav aria-label="Division Table Pagination">
                <ul id="divisionManagementPagination" class="pagination justify-content-center mt-4"></ul>
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






            <script>
                document.querySelectorAll('.selectable-filter').forEach(function(tag) {
                    tag.addEventListener('click', function() {
                        tag.classList.toggle('selected');
                    });
                });
            </script>

            <!-- link view more to the division management details page -->
            <!-- <script>
                document.querySelectorAll('.action-btn').forEach(function(btn) {
                    btn.addEventListener('click', function() {
                        window.location.href = 'division-management-details.html';
                    });
                });
            </script> -->

            <script>
                // Division Management Table Data
                const divisionManagementData = [{
                        divisionName: "Division 1",
                        head: "C.K. Abeyrathna",
                        registeredDate: "2024/09/18",
                        users: 320
                    },
                    {
                        divisionName: "Division 2",
                        head: "C.K. Abeyrathna",
                        registeredDate: "2024/09/18",
                        users: 410
                    },
                    {
                        divisionName: "Division 3",
                        head: "C.K. Abeyrathna",
                        registeredDate: "2024/09/18",
                        users: 560
                    },
                    {
                        divisionName: "Division 4",
                        head: "C.K. Abeyrathna",
                        registeredDate: "2024/09/18",
                        users: 80
                    },
                    {
                        divisionName: "Division 5",
                        head: "C.K. Abeyrathna",
                        registeredDate: "2024/09/18",
                        users: 300
                    },
                    {
                        divisionName: "Division 6",
                        head: "C.K. Abeyrathna",
                        registeredDate: "2024/09/18",
                        users: 450
                    },
                    {
                        divisionName: "Division 7",
                        head: "C.K. Abeyrathna",
                        registeredDate: "2024/09/18",
                        users: 200
                    },
                    {
                        divisionName: "Division 8",
                        head: "C.K. Abeyrathna",
                        registeredDate: "2024/09/18",
                        users: 150
                    },
                    {
                        divisionName: "Division 9",
                        head: "C.K. Abeyrathna",
                        registeredDate: "2024/09/18",
                        users: 600
                    },
                    {
                        divisionName: "Division 10",
                        head: "C.K. Abeyrathna",
                        registeredDate: "2024/09/18",
                        users: 350
                    }
                ];

                const rowsPerPage = 5;
                let currentPage = 1;

                function renderDivisionTable(page) {
                    const tableBody = document.getElementById("divisionManagementTableBody");
                    tableBody.innerHTML = "";

                    const startIndex = (page - 1) * rowsPerPage;
                    const endIndex = Math.min(startIndex + rowsPerPage, divisionManagementData.length);

                    for (let i = startIndex; i < endIndex; i++) {
                        const row = `<tr>
                <td>${divisionManagementData[i].divisionName}</td>
                <td>${divisionManagementData[i].head}</td>
                <td>${divisionManagementData[i].registeredDate}</td>
                <td>${divisionManagementData[i].users}</td>
                <td>
                    <a href={{url('admin-division-management-details')}}>
                    <button class="action-btn btn-sm btn-dark">
                        View More
                    </button>
                    </a>
                </td>
            </tr>`;
                        tableBody.innerHTML += row;
                    }

                    renderDivisionPagination();
                }

                function renderDivisionPagination() {
                    const pagination = document.getElementById("divisionManagementPagination");
                    pagination.innerHTML = "";

                    const totalPages = Math.ceil(divisionManagementData.length / rowsPerPage);

                    // Prev button
                    pagination.innerHTML += `<li class="page-item ${currentPage === 1 ? "disabled" : ""}">
            <a class="page-link" href="#" onclick="changeDivisionPage(${currentPage - 1})">Prev</a>
        </li>`;

                    // Page numbers
                    for (let i = 1; i <= totalPages; i++) {
                        pagination.innerHTML += `<li class="page-item ${i === currentPage ? "active" : ""}">
                <a class="page-link" href="#" onclick="changeDivisionPage(${i})">${i}</a>
            </li>`;
                    }

                    // Next button
                    pagination.innerHTML += `<li class="page-item ${currentPage === totalPages ? "disabled" : ""}">
            <a class="page-link" href="#" onclick="changeDivisionPage(${currentPage + 1})">Next</a>
        </li>`;
                }

                function changeDivisionPage(page) {
                    const totalPages = Math.ceil(divisionManagementData.length / rowsPerPage);
                    if (page < 1 || page > totalPages) return;

                    currentPage = page;
                    renderDivisionTable(currentPage);
                }

                // Initial load
                window.onload = function() {
                    renderDivisionTable(currentPage);
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