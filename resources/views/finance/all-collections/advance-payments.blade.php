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
                <h1 class="header-title">Advance Payments</h1>
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
                <table class="table custom-table-locked" style="min-width: 2000px;">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>ADM Number</th>
                            <th>ADM Name</th>
                            <th>Customer Name</th>
                            <th>Payment Amount</th>
                            <th>Reason</th>
                            <th>Attachment</th>
                            <th>Customer Signature</th>
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
        // Cash deposit data
        const cashDepositeTableData = [{
                date: "2024-06-01",
                admNumber: "ADM1001",
                admName: "Alice Smith",
                customerName: "John Doe",
                paymentAmount: 1500.00,
                reason: "Invoice Payment",
                attachment: "invoice_1001.pdf",
                customerSignature: "signature_1001.png"
            },
            {
                date: "2024-06-03",
                admNumber: "ADM1002",
                admName: "Bob Johnson",
                customerName: "Jane Roe",
                paymentAmount: 2000.00,
                reason: "Cheque Deposit",
                attachment: "cheque_2002.pdf",
                customerSignature: "signature_2002.png"
            },
            {
                date: "2024-05-28",
                admNumber: "ADM1003",
                admName: "Charlie Brown",
                customerName: "Mike Lee",
                paymentAmount: 3500.00,
                reason: "Advance Payment",
                attachment: "advance_3003.pdf",
                customerSignature: "signature_3003.png"
            },
            {
                date: "2024-06-05",
                admNumber: "ADM1004",
                admName: "Diana Prince",
                customerName: "Sara Kim",
                paymentAmount: 5000.00,
                reason: "Refund",
                attachment: "refund_4004.pdf",
                customerSignature: "signature_4004.png"
            },
            {
                date: "2024-06-07",
                admNumber: "ADM1005",
                admName: "Edward Nigma",
                customerName: "Tom Clark",
                paymentAmount: 1200.00,
                reason: "Partial Payment",
                attachment: "partial_5005.pdf",
                customerSignature: "signature_5005.png"
            },
            {
                date: "2024-06-08",
                admNumber: "ADM1006",
                admName: "Fiona Glenanne",
                customerName: "Anna Bell",
                paymentAmount: 1800.00,
                reason: "Cheque Deposit",
                attachment: "cheque_6006.pdf",
                customerSignature: "signature_6006.png"
            },
            {
                date: "2024-06-09",
                admNumber: "ADM1007",
                admName: "George Miller",
                customerName: "Chris Evans",
                paymentAmount: 2200.00,
                reason: "Invoice Payment",
                attachment: "invoice_7007.pdf",
                customerSignature: "signature_7007.png"
            },
            {
                date: "2024-06-10",
                admNumber: "ADM1008",
                admName: "Helen Carter",
                customerName: "Lisa Ray",
                paymentAmount: 2700.00,
                reason: "Advance Payment",
                attachment: "advance_8008.pdf",
                customerSignature: "signature_8008.png"
            },
            {
                date: "2024-06-11",
                admNumber: "ADM1009",
                admName: "Ian Wright",
                customerName: "Paul Young",
                paymentAmount: 3200.00,
                reason: "Refund",
                attachment: "refund_9009.pdf",
                customerSignature: "signature_9009.png"
            },
            {
                date: "2024-06-12",
                admNumber: "ADM1010",
                admName: "Julia Roberts",
                customerName: "Nina Fox",
                paymentAmount: 4000.00,
                reason: "Partial Payment",
                attachment: "partial_1010.pdf",
                customerSignature: "signature_1010.png"
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
                const row = `
                 <tr>
                    <td>${data[i].date}</td>
                    <td>${data[i].admNumber}</td>
                    <td>${data[i].admName}</td>
                    <td>${data[i].customerName}</td>
                    <td>${data[i].paymentAmount.toFixed(2)}</td>
                    <td>${data[i].reason}</td>
                    <td>
                        <a href="${data[i].attachment}" download>${data[i].attachment}</a>
                    </td>
                    <td>
                        <img src="${data[i].customerSignature}" alt="Signature" style="height:32px;">
                    </td>
                    <td class="sticky-column">
                        <button class="success-action-btn">Approve</button>
                        <button class="red-action-btn">Reject</button>
                        <button class="black-action-btn">Download</button>
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

    <!-- expand search bar  -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
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

        searchToggleButton.addEventListener("click", function () {
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

        searchInput.addEventListener("keydown", function () {
            startIdleTimer(); // Reset the timer on any keypress
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
@endsection
