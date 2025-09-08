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
            <h1 class="header-title">Return Cheque</h1>
        </div>
        <div class="col-lg-6 col-12 d-flex justify-content-lg-end gap-3 ">
            <div id="search-box-wrapper" class="collapsed">
                <i class="fa-solid fa-magnifying-glass fa-xl search-icon-inside"></i>
                <input type="text" class="search-input" placeholder="Search ADM No. or Name, Return Cheque Number" />
            </div>
            <button class="header-btn" id="search-toggle-button"><i
                    class="fa-solid fa-magnifying-glass fa-xl"></i></button>
            <button class="header-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#searchByFilter"
                aria-controls="offcanvasRight"><i class="fa-solid fa-filter fa-xl"></i></button>
        </div>
    </div>

    <hr class="red-line mt-0">



    <div class="col-12 d-flex justify-content-end pe-5 mb-3 gap-3">
        <a href="{{url('upload')}}" style="text-decoration: none;">
            <button class="add-new-division-btn"
                style="background-color: black; color: white; display: flex; align-items: center; gap: 6px; padding: 6px 12px; border: none; border-radius: 4px; cursor: pointer;">
                <svg width="19" height="19" viewBox="0 0 19 19" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_1784_47778)">
                        <path
                            d="M3.23663 1.24316H12.5471L16.7366 5.43266V17.7432H9.98663V16.2432H15.2366V7.24316H10.7366V2.74316H4.73663V10.2432H3.23663V1.24316ZM12.2366 3.05366V5.74316H14.9261L12.2366 3.05366ZM6.27413 11.0592L9.91763 14.7447L6.27413 18.4302L5.20762 17.3757L7.06763 15.4947H1.73438V13.9947H7.06688L5.20688 12.1137L6.27413 11.0592Z"
                            fill="white" />
                    </g>
                    <defs>
                        <clipPath id="clip0_1784_47778">
                            <rect width="18" height="18" fill="white"
                                transform="translate(0.986328 0.493164)" />
                        </clipPath>
                    </defs>
                </svg>

                <span>Import Return Cheques</span>
            </button>
        </a>

        <a href="{{ url('/add-new-return-cheque') }}">
            <button class="add-new-division-btn">+ Add New Return Cheque</button>
        </a>
    </div>

    <div class="table-responsive">
        <table class="table custom-table-locked" style="min-width: 2300px;">
            <thead>
                <tr>
                    <th>ADM No.</th>
                    <th>ADM Name</th>
                    <th>Return Cheque Number</th>
                    <th>Cheque Amount</th>
                    <th>Returned Date</th>
                    <th>Bank Name</th>
                    <th>Branch</th>
                    <th>Return Type</th>
                    <th>Reason</th>
                    <th class="sticky-column">Actions</th>
                </tr>
            </thead>
            <tbody id="returnChequeTableBody">
            </tbody>
        </table>
    </div>

    <nav class="d-flex justify-content-center mt-5">
        <ul id="returnChequePagination" class="pagination"></ul>
    </nav>


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
</div>






<script>
    const searchInput = document.getElementById('searchInput');
    const searchDropdown = document.getElementById('searchDropdown');

    const items = ['Apple', 'Banana', 'Cherry', 'Date', 'Grape', 'Mango', 'Orange', 'Pineapple', 'Strawberry'];

    searchInput.addEventListener('input', function() {
        const query = this.value.toLowerCase();
        searchDropdown.innerHTML = '';

        if (query) {
            const filteredItems = items.filter(item => item.toLowerCase().includes(query));
            if (filteredItems.length > 0) {
                filteredItems.forEach(item => {
                    const div = document.createElement('div');
                    div.className = 'search-item';
                    div.textContent = item;
                    div.addEventListener('click', function() {
                        searchInput.value = item;
                        searchDropdown.classList.remove('show');
                    });
                    searchDropdown.appendChild(div);
                });
                searchDropdown.classList.add('show');
            } else {
                searchDropdown.classList.remove('show');
            }
        } else {
            searchDropdown.classList.remove('show');
        }
    });

    document.addEventListener('click', function(e) {
        if (!searchDropdown.contains(e.target) && e.target !== searchInput) {
            searchDropdown.classList.remove('show');
        }
    });
</script>

<script>
    // Sample Return Cheque Data (replace with API or DB fetch later)
    const returnChequeData = [{
            admNo: "254565214",
            admName: "H.K Perera",
            chequeNo: "12568547456",
            amount: "Rs.100,200.00",
            returnedDate: "19.02.2025",
            bank: "Bank of Ceylon",
            branch: "Maharagama",
            type: "Invalid Amount",
            reason: "Insufficient Bank Balance"
        },
        {
            admNo: "254565214",
            admName: "H.K Perera",
            chequeNo: "12568547456",
            amount: "Rs.100,200.00",
            returnedDate: "19.02.2025",
            bank: "Bank of Ceylon",
            branch: "Maharagama",
            type: "Invalid Amount",
            reason: "Insufficient Bank Balance"
        },
        {
            admNo: "254565214",
            admName: "H.K Perera",
            chequeNo: "12568547456",
            amount: "Rs.100,200.00",
            returnedDate: "19.02.2025",
            bank: "Bank of Ceylon",
            branch: "Maharagama",
            type: "Invalid Amount",
            reason: "Insufficient Bank Balance"
        },
        {
            admNo: "254565214",
            admName: "H.K Perera",
            chequeNo: "12568547456",
            amount: "Rs.100,200.00",
            returnedDate: "19.02.2025",
            bank: "Bank of Ceylon",
            branch: "Maharagama",
            type: "Invalid Amount",
            reason: "Insufficient Bank Balance"
        },
        {
            admNo: "254565214",
            admName: "H.K Perera",
            chequeNo: "12568547456",
            amount: "Rs.100,200.00",
            returnedDate: "19.02.2025",
            bank: "Bank of Ceylon",
            branch: "Maharagama",
            type: "Invalid Amount",
            reason: "Insufficient Bank Balance"
        },
        {
            admNo: "254565214",
            admName: "H.K Perera",
            chequeNo: "12568547456",
            amount: "Rs.100,200.00",
            returnedDate: "19.02.2025",
            bank: "Bank of Ceylon",
            branch: "Maharagama",
            type: "Invalid Amount",
            reason: "Insufficient Bank Balance"
        },
    ];

    const rowsPerPage = 5;
    let currentPage = 1;

    // Render Return Cheque Table
    function renderReturnChequeTable(page) {
        const tableBody = document.getElementById("returnChequeTableBody");
        tableBody.innerHTML = "";

        const startIndex = (page - 1) * rowsPerPage;
        const endIndex = Math.min(startIndex + rowsPerPage, returnChequeData.length);

        for (let i = startIndex; i < endIndex; i++) {
            const row = `<tr>
                <td>${returnChequeData[i].admNo}</td>
                <td>${returnChequeData[i].admName}</td>
                <td>${returnChequeData[i].chequeNo}</td>
                <td>${returnChequeData[i].amount}</td>
                <td>${returnChequeData[i].returnedDate}</td>
                <td>${returnChequeData[i].bank}</td>
                <td>${returnChequeData[i].branch}</td>
                <td>${returnChequeData[i].type}</td>
                <td>${returnChequeData[i].reason}</td>
                <td class="sticky-column">
                    <a href="{{url('return-cheque-details')}}" style="text-decoration: none;">
                        <button class="action-btn btn-sm btn-dark">
                            View More
                        </button>
                    </a>
                </td>
            </tr>`;
            tableBody.innerHTML += row;
        }

        renderReturnChequePagination();
    }

    // Render Pagination
    function renderReturnChequePagination() {
        const pagination = document.getElementById("returnChequePagination");
        pagination.innerHTML = "";

        const totalPages = Math.ceil(returnChequeData.length / rowsPerPage);

        // Prev Button
        pagination.innerHTML += `<li class="page-item ${currentPage === 1 ? 'disabled' : ''}">
            <a class="page-link" href="#" onclick="changeReturnChequePage(${currentPage - 1})">Prev</a>
        </li>`;

        // Page Numbers
        for (let i = 1; i <= totalPages; i++) {
            pagination.innerHTML += `<li class="page-item ${i === currentPage ? 'active' : ''}">
                <a class="page-link" href="#" onclick="changeReturnChequePage(${i})">${i}</a>
            </li>`;
        }

        // Next Button
        pagination.innerHTML += `<li class="page-item ${currentPage === totalPages ? 'disabled' : ''}">
            <a class="page-link" href="#" onclick="changeReturnChequePage(${currentPage + 1})">Next</a>
        </li>`;
    }

    // Handle Page Change
    function changeReturnChequePage(page) {
        const totalPages = Math.ceil(returnChequeData.length / rowsPerPage);
        if (page < 1 || page > totalPages) return;
        currentPage = page;
        renderReturnChequeTable(currentPage);
    }

    // Init on page load
    window.onload = function() {
        renderReturnChequeTable(currentPage);
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

<!-- search functionality -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const searchInput = document.querySelector("#search-box-wrapper .search-input");

        searchInput.addEventListener("input", function() {
            const query = this.value.toLowerCase();

            // Filter the returnChequeData
            const filteredData = returnChequeData.filter(item =>
                item.admNo.toLowerCase().includes(query) ||
                item.admName.toLowerCase().includes(query) ||
                item.chequeNo.toLowerCase().includes(query)
            );

            // Render table with filtered results
            renderFilteredReturnChequeTable(filteredData);
        });
    });

    // New function to render filtered data without breaking pagination
    function renderFilteredReturnChequeTable(data) {
        const tableBody = document.getElementById("returnChequeTableBody");
        tableBody.innerHTML = "";

        data.forEach(item => {
            const row = `<tr>
                <td>${item.admNo}</td>
                <td>${item.admName}</td>
                <td>${item.chequeNo}</td>
                <td>${item.amount}</td>
                <td>${item.returnedDate}</td>
                <td>${item.bank}</td>
                <td>${item.branch}</td>
                <td>${item.type}</td>
                <td>${item.reason}</td>
                <td class="sticky-column">
                    <a href="{{url('return-cheque-details')}}" style="text-decoration: none;">
                        <button class="action-btn btn-sm btn-dark">View More</button>
                    </a>
                </td>
            </tr>`;
            tableBody.innerHTML += row;
        });
    }
</script>


<script>
    document.querySelectorAll('.selectable-filter').forEach(function(tag) {
        tag.addEventListener('click', function() {
            tag.classList.toggle('selected');
        });
    });
</script>


@endsection