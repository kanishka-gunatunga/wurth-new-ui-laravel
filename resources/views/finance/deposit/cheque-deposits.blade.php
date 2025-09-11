@extends("welcome")
@section("content")

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
            <h1 class="header-title">Cheque Deposites</h1>
        </div>
        <div class="col-lg-6 col-12 d-flex justify-content-lg-end gap-3 pe-5">
            <div id="search-box-wrapper" class="collapsed">
                <i class="fa-solid fa-magnifying-glass fa-xl search-icon-inside"></i>
                <input type="text" class="search-input" placeholder="Search customer ID, Name or ADM ID, Name" />
            </div>
            <button class="header-btn" id="search-toggle-button"><i class="fa-solid fa-magnifying-glass fa-xl"></i></button>
            <button class="header-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#searchByFilter" aria-controls="offcanvasRight"><i class="fa-solid fa-filter fa-xl"></i></button>
        </div>
    </div>


    <div class="styled-tab-main">
        <div class="header-and-content-gap-lg"></div>
        <div class="table-responsive">
            <table class="table custom-table-locked">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Status</th>
                        <th>ADM Number</th>
                        <th>ADM Name</th>
                        <th>Bank Name</th>
                        <th>Branch Name</th>
                        <th>Amount</th>
                        <th class="sticky-column">Actions</th>

                    </tr>
                </thead>
                <tbody id="cashDepositeTableBody">
                </tbody>
            </table>

        </div>
        <nav class="d-flex justify-content-center mt-5">
            <ul id="cashDepositePagination" class="pagination"></ul>
        </nav>
    </div>





</div>


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




<!-- Toast message -->
<div id="user-toast" class="toast align-items-center text-white bg-success border-0 position-fixed top-0 end-0 m-4"
    role="alert" aria-live="assertive" aria-atomic="true" style="z-index: 9999; display: none; min-width: 320px;">
    <div class="d-flex align-items-center">
        <span class="toast-icon-circle d-flex align-items-center justify-content-center me-3">
            <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                <circle cx="12" cy="12" r="12" fill="#fff" />
                <path d="M7 12.5l3 3 7-7" stroke="#28a745" stroke-width="2" fill="none" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
        </span>
        <div class="toast-body flex-grow-1">
            Downloaded successfully
        </div>
        <button type="button" class="btn-close btn-close-white me-2 m-auto" aria-label="Close"
            onclick="document.getElementById('user-toast').style.display='none';"></button>
    </div>
</div>

<!-- Approve Modal -->
<div id="approve-modal" class="modal" tabindex="-1" style="display:none; position:fixed; z-index:1050; left:0; top:0; width:100vw; height:100vh; background:rgba(0,0,0,0.3);">
    <div style="background:#fff; border-radius:12px; max-width:460px; margin:10% auto; padding:2rem; position:relative; box-shadow:0 2px 16px rgba(0,0,0,0.2);">

        <!-- Close button -->
        <button id="approve-modal-close" style="position:absolute; top:16px; right:16px; background:none; border:none; font-size:1.5rem; color:#555; cursor:pointer;">&times;</button>

        <!-- Title -->
        <h4 style="margin:0 0 0.5rem 0; font-weight:600; color:#000;">Payment Approval</h4>

        <!-- Subtitle -->
        <p style="margin:0 0 1.5rem 0; color:#6c757d; font-size:0.95rem; line-height:1.4;">
            You're about to confirm this payment. Please provide a reason for approval.
        </p>

        <!-- Textarea with button inside -->
        <div style="position:relative;">
            <textarea id="approve-modal-input" rows="3" placeholder="Enter your reason here...."
                style="width:100%; border:1px solid #ddd; border-radius:12px; padding:0.75rem 3rem 0.75rem 1rem; font-size:0.95rem; resize:none; outline:none;"></textarea>

            <!-- Green tick button -->
            <button id="approve-modal-tick" style="position:absolute; bottom:10px; right:10px; background:#2E7D32; border:none; border-radius:50%; width:36px; height:36px; display:flex; align-items:center; justify-content:center; cursor:pointer;">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none" viewBox="0 0 24 24">
                    <path d="M7 12.5l3 3 7-7" stroke="#fff" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </button>
        </div>
    </div>
</div>


<!-- Reject Modal -->
<div id="reject-modal" class="modal" tabindex="-1" style="display:none; position:fixed; z-index:1050; left:0; top:0; width:100vw; height:100vh; background:rgba(0,0,0,0.3);">
    <div style="background:#fff; border-radius:12px; max-width:460px; margin:10% auto; padding:2rem; position:relative; box-shadow:0 2px 16px rgba(0,0,0,0.2);">

        <!-- Close button -->
        <button id="reject-modal-close" style="position:absolute; top:16px; right:16px; background:none; border:none; font-size:1.5rem; color:#555; cursor:pointer;">&times;</button>

        <!-- Title -->
        <h4 style="margin:0 0 0.5rem 0; font-weight:600; color:#000;">Payment Rejection</h4>

        <!-- Subtitle -->
        <p style="margin:0 0 1.5rem 0; color:#6c757d; font-size:0.95rem; line-height:1.4;">
            You're about to reject this payment. Please provide a reason for rejection.
        </p>

        <!-- Input fields -->
        <div style="display:flex; flex-direction:column; gap:1rem; margin-bottom:1rem;">
            <input type="text" placeholder="Header"
                style="width:100%; border:1px solid #ddd; border-radius:20px; padding:0.6rem 1rem; font-size:0.95rem; outline:none;">
            <input type="text" placeholder="GL"
                style="width:100%; border:1px solid #ddd; border-radius:20px; padding:0.6rem 1rem; font-size:0.95rem; outline:none;">
        </div>

        <!-- Red tick button -->
        <div style="display:flex; justify-content:flex-end;">
            <button id="reject-modal-tick" style="background:#CC0000; border:none; border-radius:50%; width:40px; height:40px; display:flex; align-items:center; justify-content:center; cursor:pointer;">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none" viewBox="0 0 24 24">
                    <path d="M7 12.5l3 3 7-7" stroke="#fff" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </button>
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
    // Cheque deposit data
    const cashDepositeTableData = [{
            date: "2024-06-01",
            status: "Approved",
            admNumber: "ADM1001",
            admName: "Alice Smith",
            bankName: "Bank of Ceylon",
            branchName: "Colombo",
            amount: 1500.00,

        },
        {
            date: "2024-06-03",
            status: "Paid",
            admNumber: "ADM1002",
            admName: "Bob Johnson",
            bankName: "Bank of Ceylon",
            branchName: "Colombo",
            amount: 2000.00,

        },
        {
            date: "2024-05-28",
            status: "Approved",
            admNumber: "ADM1003",
            admName: "Charlie Brown",
            bankName: "Bank of Ceylon",
            branchName: "Colombo",
            amount: 3500.00,

        },
        {
            date: "2024-06-05",
            status: "Approved",
            admNumber: "ADM1004",
            admName: "Diana Prince",
            bankName: "Bank of Ceylon",
            branchName: "Colombo",
            amount: 5000.00,

        },
        {
            date: "2024-06-07",
            status: "Approved",
            admNumber: "ADM1005",
            admName: "Edward Nigma",
            bankName: "Bank of Ceylon",
            branchName: "Colombo",
            amount: 1200.00,

        },
        {
            date: "2024-06-01",
            status: "Rejected",
            admNumber: "ADM1001",
            admName: "Alice Smith",
            bankName: "Bank of Ceylon",
            branchName: "Colombo",
            amount: 1500.00,

        },
        {
            date: "2024-06-03",
            status: "Approved",
            admNumber: "ADM1002",
            admName: "Bob Johnson",
            bankName: "Bank of Ceylon",
            branchName: "Colombo",
            amount: 2000.00,

        },
        {
            date: "2024-05-28",
            status: "Approved",
            admNumber: "ADM1003",
            admName: "Charlie Brown",
            bankName: "Bank of Ceylon",
            branchName: "Colombo",
            amount: 3500.00,

        },
        {
            date: "2024-06-05",
            status: "paid",
            admNumber: "ADM1004",
            admName: "Diana Prince",
            bankName: "Bank of Ceylon",
            branchName: "Colombo",
            amount: 5000.00,

        },
        {
            date: "2024-06-07",
            status: "Paid",
            admNumber: "ADM1005",
            admName: "Edward Nigma",
            bankName: "Bank of Ceylon",
            branchName: "Colombo",
            amount: 1200.00,

        }, {
            date: "2024-06-01",
            status: "Paid",
            admNumber: "ADM1001",
            admName: "Alice Smith",
            bankName: "Bank of Ceylon",
            branchName: "Colombo",
            amount: 1500.00,

        },
        {
            date: "2024-06-03",
            status: "Approved",
            admNumber: "ADM1002",
            admName: "Bob Johnson",
            bankName: "Bank of Ceylon",
            branchName: "Colombo",
            amount: 2000.00,

        },
        {
            date: "2024-05-28",
            status: "Approved",
            admNumber: "ADM1003",
            admName: "Charlie Brown",
            bankName: "Bank of Ceylon",
            branchName: "Colombo",
            amount: 3500.00,

        },
        {
            date: "2024-06-05",
            status: "Paid",
            admNumber: "ADM1004",
            admName: "Diana Prince",
            bankName: "Bank of Ceylon",
            branchName: "Colombo",
            amount: 5000.00,

        },
        {
            date: "2024-06-07",
            status: "Rejected",
            admNumber: "ADM1005",
            admName: "Edward Nigma",
            bankName: "Bank of Ceylon",
            branchName: "Colombo",
            amount: 1200.00,

        }
    ];

    const rowsPerPage = 10;
    const currentPages = {
        cashDeposite: 1
    }; // track pages separately

    // Table render function
    function renderTable(tableId, data, page) {
        const tableBody = document.getElementById(`${tableId}TableBody`);
        tableBody.innerHTML = '';

        const startIndex = (page - 1) * rowsPerPage;
        const endIndex = Math.min(startIndex + rowsPerPage, data.length);

        for (let i = startIndex; i < endIndex; i++) {
            let statusClass = '';
            switch (data[i].status) {
                case 'Approved':
                case 'approved':
                    statusClass = 'success-status-btn';
                    break;
                case 'Deposited':
                case 'deposited':
                    statusClass = 'blue-status-btn';
                    break;
                case 'Rejected':
                case 'rejected':
                    statusClass = 'danger-status-btn';
                    break;
                default:
                    statusClass = 'grey-status-btn';
            }
            const row = `
                <tr class="clickable-row" data-href="/cheque-deposit-details">
                    <td>${data[i].date}</td>
                    <td><button class="${statusClass}"> ${data[i].status}</button></td>
                    <td>${data[i].admNumber}</td>
                    <td>${data[i].admName}</td>
                    <td>${data[i].bankName}</td>
                    <td>${data[i].branchName}</td>
                    <td>${data[i].amount.toFixed(2)}</td>
                    <td class="sticky-column">
                        <button class="success-action-btn">Approve</button>
                        <button class="red-action-btn">Reject</button>
                        <button class="black-action-btn submit">Download</button>    
                    </td>
                </tr>
            `;
            tableBody.innerHTML += row;
        }
    }

    // Pagination render
    function renderPagination(tableId, data) {
        const pagination = document.getElementById(`${tableId}Pagination`);
        pagination.innerHTML = '';

        const totalPages = Math.ceil(data.length / rowsPerPage);
        const currentPage = currentPages[tableId];

        // Prev button
        pagination.innerHTML += `
            <li class="page-item ${currentPage === 1 ? 'disabled' : ''}">
                <a class="page-link" href="#" onclick="changePage('${tableId}', ${currentPage - 1})">Prev</a>
            </li>
        `;

        // Page numbers
        for (let i = 1; i <= totalPages; i++) {
            pagination.innerHTML += `
                <li class="page-item ${i === currentPage ? 'active' : ''}">
                    <a class="page-link" href="#" onclick="changePage('${tableId}', ${i})">${i}</a>
                </li>
            `;
        }

        // Next button
        pagination.innerHTML += `
            <li class="page-item ${currentPage === totalPages ? 'disabled' : ''}">
                <a class="page-link" href="#" onclick="changePage('${tableId}', ${currentPage + 1})">Next</a>
            </li>
        `;
    }

    // Page change
    function changePage(tableId, page) {
        const data = getTableData(tableId);
        const totalPages = Math.ceil(data.length / rowsPerPage);

        if (page < 1 || page > totalPages) return;
        currentPages[tableId] = page;

        renderTable(tableId, data, page);
        renderPagination(tableId, data);
    }

    // Helper to get data by tableId
    function getTableData(tableId) {
        if (tableId === 'cashDeposite') return cashDepositeTableData;
        return [];
    }

    // Initial load after page ready
    window.onload = function() {
        changePage('cashDeposite', 1);
    };
</script>

<!-- link entire row of table -->
<script>
    document.addEventListener('click', function(e) {
        const row = e.target.closest('.clickable-row');
        if (row && !e.target.closest('button')) {
            window.location.href = row.getAttribute('data-href');
        }
    });
</script>

<!-- for toast message -->
<script>
    document.addEventListener('click', function(e) {
        if (e.target.classList.contains('submit')) {
            e.preventDefault();
            e.stopPropagation(); // Prevent row click
            const toast = document.getElementById('user-toast');
            toast.style.display = 'block';
            setTimeout(() => {
                toast.style.display = 'none';
            }, 3000);
        }
    });
</script>

<!-- expand search bar and search functionality -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const searchWrapper = document.getElementById("search-box-wrapper");
        const searchToggleButton = document.getElementById("search-toggle-button");
        const searchInput = searchWrapper.querySelector(".search-input");

        let idleTimeout;
        const idleTime = 5000; // 5 seconds

        function collapseSearch() {
            searchWrapper.classList.remove("expanded");
            searchWrapper.classList.add("collapsed");
            searchToggleButton.classList.remove("d-none");
            clearTimeout(idleTimeout);
        }

        function startIdleTimer() {
            clearTimeout(idleTimeout);
            idleTimeout = setTimeout(() => {
                if (!searchInput.value) collapseSearch();
            }, idleTime);
        }

        searchToggleButton.addEventListener("click", function() {
            if (searchWrapper.classList.contains("collapsed")) {
                searchWrapper.classList.remove("collapsed");
                searchWrapper.classList.add("expanded");
                searchToggleButton.classList.add("d-none");
                searchInput.focus();
                startIdleTimer();
            } else {
                collapseSearch();
            }
        });

        searchInput.addEventListener("input", function() {
            filterTable(this.value);
            startIdleTimer();
        });

        searchInput.addEventListener("keydown", startIdleTimer);
    });

    // Filter table based on Deposit Type, ADM Number, or ADM Name
    function filterTable(query) {
        const searchQuery = query.toLowerCase();
        const tableRows = document.querySelectorAll("#cashDepositeTableBody tr");

        tableRows.forEach(row => {
            const depositType = row.children[1].textContent.toLowerCase();
            const admNumber = row.children[3].textContent.toLowerCase();
            const admName = row.children[4].textContent.toLowerCase();

            if (depositType.includes(searchQuery) || admNumber.includes(searchQuery) || admName.includes(searchQuery)) {
                row.style.display = "";
            } else {
                row.style.display = "none";
            }
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

<!-- for reject modal pop-up -->
<script>
    document.addEventListener('click', function(e) {
        // Approve button click
        if (e.target.classList.contains('success-action-btn')) {
            e.preventDefault();
            e.stopPropagation();
            document.getElementById('approve-modal').style.display = 'block';
            document.getElementById('approve-modal-input').value = '';
        }
        // Approve modal tick
        if (e.target.id === 'approve-modal-tick' || e.target.closest('#approve-modal-tick')) {
            document.getElementById('approve-modal').style.display = 'none';
        }
        // Approve modal close
        if (e.target.id === 'approve-modal-close') {
            document.getElementById('approve-modal').style.display = 'none';
        }

        // Reject button click
        if (e.target.classList.contains('red-action-btn')) {
            e.preventDefault();
            e.stopPropagation();
            document.getElementById('reject-modal').style.display = 'block';
            // Optionally clear input fields here if needed
            var inputs = document.querySelectorAll('#reject-modal input');
            inputs.forEach(function(input) {
                input.value = '';
            });
        }
        // Reject modal tick
        if (e.target.id === 'reject-modal-tick' || e.target.closest('#reject-modal-tick')) {
            document.getElementById('reject-modal').style.display = 'none';
        }
        // Reject modal close
        if (e.target.id === 'reject-modal-close') {
            document.getElementById('reject-modal').style.display = 'none';
        }
    });
</script>
@endsection