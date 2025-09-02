@extends('welcome')

@section('content')
    <div class="main-wrapper">
        <div class="row d-flex justify-content-between">
            <div class="col-lg-6 col-12">
                <h1 class="header-title">Direct Payments</h1>
            </div>
            <div class="col-lg-6 col-12 d-flex justify-content-lg-end gap-3 ">
                <button class="header-btn"><i class="fa-solid fa-magnifying-glass fa-xl"></i></button>
                <button class="header-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#searchByFilter"
                    aria-controls="offcanvasRight"><i class="fa-solid fa-filter fa-xl"></i></button>
            </div>
        </div>



        <div class="styled-tab-main">
            <div class="header-and-content-gap-md"></div>
            <div class="row d-flex justify-content-end">
                <div class="col-lg-6 col-12 d-flex justify-content-lg-end gap-3">
                    <a href="{{ url('add-new-payment') }}">
                    <button class="red-action-btn-lg add-new-payment-btn">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9.50726 10.5634H4.85938V9.0141H9.50726V4.36621H11.0566V9.0141H15.7044V10.5634H11.0566V15.2113H9.50726V10.5634Z"
                                fill="white" />
                        </svg>

                        Add New Payment
                    </button>
                </a>
                </div>
            </div>
            <div class="header-and-content-gap-md"></div>
            <div class="table-responsive">
                <table class="table custom-table-locked" id="addNewPaymentTable">
                    <thead>
                        <tr>
                            <th>Invoice No.</th>
                            <th>Customer Name</th>
                            <th>Invoice Date</th>
                            <th>Total Invoice Amount</th>
                            <th>Outstanding Balance</th>
                            <th>Outstanding Days</th>
                            <th>Additional Notes</th>


                        </tr>
                    </thead>
                    <tbody id="addNewPaymentTableBody">
                    </tbody>
                </table>

            </div>


            <nav class="d-flex justify-content-center mt-5">
                <ul id="addNewPaymentPagination" class="pagination"></ul>
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
        const addNewPaymentTableData = [{
                invoiceNumber: "2024-06-01",
                customerName: "Cash",
                invoiceDate: "ADM1001",
                totalInvoiceAmount: 12000,
                outstandingBalance: 1500.00,
                outstandingDate: "2024-06-15",
                additionalNotes: "Inquiry ID : Qwdff23ehjbjhbsfd81222bhj"

            },

            {
                invoiceNumber: "2024-06-01",
                customerName: "Cash",
                invoiceDate: "ADM1001",
                totalInvoiceAmount: 12000,
                outstandingBalance: 1500.00,
                outstandingDate: "2024-06-15",
                additionalNotes: "Inquiry ID : Qwdff23ehjbjhbsfd81222bhj"

            },

            {
                invoiceNumber: "2024-06-01",
                customerName: "Cash",
                invoiceDate: "ADM1001",
                totalInvoiceAmount: 12000,
                outstandingBalance: 1500.00,
                outstandingDate: "2024-06-15",
                additionalNotes: "Inquiry ID : Qwdff23ehjbjhbsfd81222bhj"

            },

            {
                invoiceNumber: "2024-06-01",
                customerName: "Cash",
                invoiceDate: "ADM1001",
                totalInvoiceAmount: 12000,
                outstandingBalance: 1500.00,
                outstandingDate: "2024-06-15",
                additionalNotes: "Inquiry ID : Qwdff23ehjbjhbsfd81222bhj"

            },

        ];

        const rowsPerPage = 10;
        const currentPages = {
            cashDeposite: 1
        }; // track pages separately

        // Table render function
        function renderTable(tableId, data, page) {
            const tableBody = document.getElementById(`addNewPaymentTableBody`);
            tableBody.innerHTML = '';

            const startIndex = (page - 1) * rowsPerPage;
            const endIndex = Math.min(startIndex + rowsPerPage, data.length);

            for (let i = startIndex; i < endIndex; i++) {
                const row = `
                <tr>
                    <td>${data[i].invoiceNumber}</td>
                    <td>${data[i].customerName}</td>
                    <td>${data[i].invoiceDate}</td>
                    <td>${data[i].totalInvoiceAmount.toFixed(2)}</td>
                    <td>${data[i].outstandingBalance.toFixed(2)}</td>
                    <td>${data[i].outstandingDate}</td>
                    <td>${data[i].additionalNotes}</td>
                </tr>
            `;
                tableBody.innerHTML += row;
            }
        }

        // Pagination render
        function renderPagination(tableId, data) {
            const pagination = document.getElementById(`addNewPaymentPagination`);
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
            if (tableId === 'addNewPaymentTable') return addNewPaymentTableData;
            return [];
        }

        // Initial load after page ready
        window.onload = function() {
            changePage('addNewPaymentTable', 1);
        };
    </script>
@endsection
