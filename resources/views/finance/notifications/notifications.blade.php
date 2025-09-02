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
            <h1 class="header-title">Notifications</h1>
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


    <div class="styled-tab-main">
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item mb-3" role="presentation">
                <a class="nav-link active" data-bs-toggle="tab" href="#payment" role="tab" aria-controls="payment"
                    aria-selected="true">
                    Payment Notifications
                </a>
            </li>

            <li class="nav-item mb-3" role="presentation">
                <a class="nav-link" data-bs-toggle="tab" href="#system" role="tab" aria-controls="system"
                    aria-selected="false">
                    System Notifications
                </a>
            </li>
        </ul>

        <div class="tab-content">
            <!-- Payment Notifications Tab Pane -->
            <div id="payment" class="tab-pane fade show active" role="tabpanel" aria-labelledby="payment-tab">
                <ul class="list-group" id="paymentNotifications"></ul>
                <nav class="d-flex justify-content-center mt-3">
                    <ul id="paymentNotificationsPagination" class="pagination"></ul>
                </nav>
            </div>

            <!-- System Notifications Tab Pane -->
            <div id="system" class="tab-pane fade" role="tabpanel" aria-labelledby="system-tab">
                <ul class="list-group" id="temporaryNotifications"></ul>
                <nav class="d-flex justify-content-center mt-3">
                    <ul id="temporaryNotificationsPagination" class="pagination"></ul>
                </nav>
            </div>
        </div>
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
            <div class="col-4 filter-tag d-flex align-items-center justify-content-between">
                <span>ADMs</span>
                <button class="btn btn-sm p-0"><i class="fa-solid fa-xmark fa-lg"></i></button>
            </div>

            <div class="col-4 filter-tag d-flex align-items-center justify-content-between">
                <span>Marketing</span>
                <button class="btn btn-sm p-0"><i class="fa-solid fa-xmark fa-lg"></i></button>
            </div>

            <div class="col-4 filter-tag d-flex align-items-center justify-content-between">
                <span>Admin</span>
                <button class="btn btn-sm p-0"><i class="fa-solid fa-xmark fa-lg"></i></button>
            </div>

            <div class="col-4 filter-tag d-flex align-items-center justify-content-between">
                <span>Finance</span>
                <button class="btn btn-sm p-0"><i class="fa-solid fa-xmark fa-lg"></i></button>
            </div>

            <div class="col-4 filter-tag d-flex align-items-center justify-content-between">
                <span>Team Leaders</span>
                <button class="btn btn-sm p-0"><i class="fa-solid fa-xmark fa-lg"></i></button>
            </div>

            <div class="col-4 filter-tag d-flex align-items-center justify-content-between">
                <span>Head of Division</span>
                <button class="btn btn-sm p-0"><i class="fa-solid fa-xmark fa-lg"></i></button>
            </div>
        </div>


        <div class="mt-5 filter-categories">
            <p class="filter-title">AMD Number</p>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    5643678
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    5643678
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    5643678
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    5643678
                </label>
            </div>


            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    5643678
                </label>
            </div>
        </div>

        <!-- Divisions -->
        <div class="mt-5 radio-selection filter-categories">
            <p class="filter-title">Divisions</p>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                    Division 1
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                    Division 2
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                    Division 3
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                    Division 4
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                    Division 5
                </label>
            </div>
        </div>


        <div class="mt-5 filter-categories">
            <p class="filter-title">User Role</p>


            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    All
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    System Administration
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Head of Division
                </label>
            </div>


            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Regional Sales Managers
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Area Sales Managers
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Team Leaders
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    ADMs
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Finance Department Managers
                </label>
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
                    09:00 AM - 1:00 PM
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    09:00 AM - 1:00 PM
                </label>
            </div>


            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    09:00 AM - 1:00 PM
                </label>
            </div>


            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    09:00 AM - 1:00 PM
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    09:00 AM - 1:00 PM
                </label>
            </div>
        </div>
    </div>
</div>



<script>
    const notificationsData = {
        paymentNotifications: [{
                sender: "System Admin",
                description: "Your payment has been received successfully",
                time: "10:45 AM",
                link: "notification1.html"
            },
            {
                sender: "Credit Dept.",
                description: "Return cheque uploaded to your account",
                time: "Yesterday",
                link: "notification2.html"
            },
            {
                sender: "Support",
                description: "Please update your profile information",
                time: "2 days ago",
                link: "notification3.html"
            },
            {
                sender: "Finance",
                description: "Monthly statement is ready",
                time: "3 days ago",
                link: "notification4.html"
            },
            {
                sender: "System Bot",
                description: "Account synced successfully",
                time: "1 week ago",
                link: "notification5.html"
            }
        ],
        temporaryNotifications: [{
                sender: "Temporary Admin",
                description: "A new temporary customer has been added",
                time: "09:15 AM",
                link: "temp1.html"
            },
            {
                sender: "Verification Team",
                description: "Temporary customer requires approval",
                time: "Yesterday",
                link: "temp2.html"
            },
            {
                sender: "System Bot",
                description: "Temporary customer account auto-expired",
                time: "3 days ago",
                link: "temp3.html"
            },
            {
                sender: "Admin Office",
                description: "Temporary record updated",
                time: "1 week ago",
                link: "temp4.html"
            }
        ]
    };

    function renderNotifications(listId, page = 1, itemsPerPage = 10) {
        const list = document.getElementById(listId);
        const pagination = document.getElementById(listId + "Pagination");
        if (!list || !pagination) return;

        const data = notificationsData[listId];
        const totalPages = Math.ceil(data.length / itemsPerPage);

        // slice for current page
        const start = (page - 1) * itemsPerPage;
        const end = start + itemsPerPage;
        const paginatedData = data.slice(start, end);

        // render notifications
        list.innerHTML = "";
        paginatedData.forEach(n => {
            list.innerHTML += `
        <li class="list-group-item d-flex justify-content-between align-items-start"
            style="cursor:pointer;" onclick="window.location.href='${n.link}'">
          <div>
            <div class="fw-bold">${n.sender}</div>
            <small class="text-muted">${n.description}</small>
          </div>
          <small class="text-muted">${n.time}</small>
        </li>
      `;
        });

        // render pagination
        pagination.innerHTML = "";
        for (let i = 1; i <= totalPages; i++) {
            pagination.innerHTML += `
        <li class="page-item ${i === page ? "active" : ""}">
          <a class="page-link" href="#" onclick="renderNotifications('${listId}', ${i}, ${itemsPerPage})">${i}</a>
        </li>
      `;
        }
    }

    window.onload = function() {
        renderNotifications("paymentNotifications");
        renderNotifications("temporaryNotifications");
    }
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