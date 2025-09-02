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
        <div class="p-4 pt-0">
            <div class="row d-flex justify-content-between">
                <div class="col-lg-6 col-12">
                    <h1 class="header-title">Tehan Perera - 25651487</h1>
                </div>
                <div class="col-lg-6 col-12 d-flex justify-content-lg-end gap-3 pe-5">
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

            <hr class="red-line">


            <form>

                <div class="row d-flex justify-content-between">
                    <div class="mb-4 col-12 col-lg-6">
                        <label for="division-input" class="form-label custom-input-label">
                            Name</label><span class="outside-label"> (First Name & Second Name)</span>
                        <input type="text" class="form-control custom-input" id="division-input" placeholder="Name">
                    </div>

                    <div class="mb-4 col-12 col-lg-6">
                        <label for="head-of-division-select" class="form-label custom-input-label">
                            Division
                        </label>

                        <div class="dropdown w-100">
                            <button class="btn custom-dropdown w-100 text-start" type="button" id="dropdownMenuButton"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Select Division
                                <span class="custom-arrow"></span>
                            </button>
                            <ul class="dropdown-menu custom-dropdown-menu w-100" aria-labelledby="dropdownMenuButton">
                                <li><a class="dropdown-item" href="#">One</a></li>
                                <li><a class="dropdown-item" href="#">Two</a></li>
                                <li><a class="dropdown-item" href="#">Three</a></li>

                            </ul>
                        </div>
                    </div>

                    <div class="mb-4 col-12 col-lg-6">
                        <label for="division-input" class="form-label custom-input-label">Phone Number</label>
                        <input type="tel" class="form-control custom-input" id="division-input"
                            placeholder="Phone number">
                    </div>

                    <div class="mb-4 col-12 col-lg-6">
                        <label for="division-input" class="form-label custom-input-label">Email</label>
                        <input type="email" class="form-control custom-input" id="division-input" placeholder="Email">
                    </div>

                    <div class="mb-4 col-12 col-lg-6">
                        <label for="head-of-division-select" class="form-label custom-input-label">
                            User Role
                        </label>

                        <div class="dropdown w-100">
                            <button class="btn custom-dropdown w-100 text-start" type="button" id="dropdownMenuButton"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Select User Role
                                <span class="custom-arrow"></span>
                            </button>
                            <ul class="dropdown-menu custom-dropdown-menu w-100" aria-labelledby="dropdownMenuButton">
                                <li><a class="dropdown-item" href="#">Head of Division</a></li>
                                <li><a class="dropdown-item" href="#">Finance Manager</a></li>
                                <li><a class="dropdown-item" href="#">Recovery Manager</a></li>
                                <li><a class="dropdown-item" href="#">System Administrator</a></li>
                                <li><a class="dropdown-item" href="#">Regional Sales Manager</a></li>
                                <li><a class="dropdown-item" href="#">ADM</a></li>
                                <li><a class="dropdown-item" href="#">Area Sales Manager</a></li>
                                <li><a class="dropdown-item" href="#">Team Leader</a></li>
                            </ul>
                        </div>
                    </div>

                </div>

                <div class="assign-form-container">
                    <button type="submit" class="assign-submit-btn">Submit</button>
                    <h2 class="assign-form-title">Assign New User</h2>

                    <div class="assign-form-row">
                        <div class="assign-form-group">
                            <label class="assign-form-label" for="userId">User ID</label>
                            <input type="text" class="assign-form-input" id="userId" value="2356778554332"
                                readonly>
                        </div>

                        <div class="switch-icon">
                            <svg viewBox="0 0 24 24">
                                <path
                                    d="M6.99 11L3 15L6.99 19L8.41 17.58L6.83 16H21V14H6.83L8.41 12.42L6.99 11ZM21 9L17.01 5L15.59 6.42L17.17 8H3V10H17.17L15.59 11.58L17.01 13L21 9Z" />
                            </svg>
                        </div>

                        <div class="assign-form-group">
                            <label class="assign-form-label" for="switchUserId">Switch User ID <span
                                    style="color: #999;">(New User or Existing User)</span></label>
                            <input type="text" class="assign-form-input" id="switchUserId" value="3547272328">
                        </div>
                    </div>
                </div>


                <div class="col-12 d-flex justify-content-end division-action-btn gap-3">
                    <button class="btn btn-dark cancel">Cancel</button>
                    <button class="btn btn-danger submit">Save</button>
                </div>

        </div>

        </form>
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

          


            <!-- <script>
                document.querySelectorAll('.dropdown').forEach(dropdown => {
                    const button = dropdown.querySelector('.custom-dropdown');
                    const items = dropdown.querySelectorAll('.dropdown-item');

                    items.forEach(item => {
                        item.addEventListener('click', function(e) {
                            e.preventDefault();
                            button.innerHTML = this.textContent + '<span class="custom-arrow"></span>';
                        });
                    });
                });
            </script> -->

            <script>
                // Cancel button redirect
                document.querySelector('.cancel').addEventListener('click', function(e) {
                    e.preventDefault();
                    window.location.href = 'user-management.html';
                });

                // Save button redirect
                document.querySelector('.submit').addEventListener('click', function(e) {
                    e.preventDefault();
                    window.location.href = 'user-management.html';
                });
            </script>

            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    // Division Dropdown
                    const divisionDropdown = document.querySelectorAll('.mb-4.col-12.col-lg-6 .dropdown .custom-dropdown')[
                        0];
                    const divisionDropdownMenu = divisionDropdown.parentElement.querySelector('.dropdown-menu');
                    // User Role Dropdown
                    const userRoleDropdown = document.querySelectorAll('.mb-4.col-12.col-lg-6 .dropdown .custom-dropdown')[
                        1];
                    const userRoleDropdownMenu = userRoleDropdown.parentElement.querySelector('.dropdown-menu');

                    const assignForm = document.querySelector('.assign-form-container');
                    const actionBtns = document.querySelector('.division-action-btn');
                    const assignSubmitBtn = document.querySelector('.assign-submit-btn');

                    // Hide assign form initially
                    assignForm.style.display = 'none';

                    // Helper function to toggle assign form
                    function toggleAssignForm(dropdownMenu) {
                        if (assignForm.style.display === 'block') {
                            assignForm.style.display = 'none';
                            actionBtns.style.display = 'flex';
                        } else {
                            assignForm.style.display = 'block';
                            actionBtns.style.display = 'none';
                        }
                        // Always hide dropdown menu
                        if (dropdownMenu) dropdownMenu.style.display = 'none';
                    }

                    // Division dropdown click
                    divisionDropdown.addEventListener('click', function(e) {
                        e.preventDefault();
                        e.stopPropagation();
                        toggleAssignForm(divisionDropdownMenu);
                    });

                    // User Role dropdown click
                    userRoleDropdown.addEventListener('click', function(e) {
                        e.preventDefault();
                        e.stopPropagation();
                        toggleAssignForm(userRoleDropdownMenu);
                    });

                    // Hide assign form and show buttons on outside click
                    document.addEventListener('mousedown', function(e) {
                        if (
                            assignForm.style.display === 'block' &&
                            !assignForm.contains(e.target) &&
                            e.target !== divisionDropdown &&
                            e.target !== userRoleDropdown
                        ) {
                            assignForm.style.display = 'none';
                            actionBtns.style.display = 'flex';
                        }
                    });

                    // Hide assign form and show buttons on assign form submit
                    assignSubmitBtn.addEventListener('click', function(e) {
                        e.preventDefault();
                        assignForm.style.display = 'none';
                        actionBtns.style.display = 'flex';
                    });
                });
            </script>

            <script>
                document.querySelectorAll('.selectable-filter').forEach(function(tag) {
                    tag.addEventListener('click', function() {
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