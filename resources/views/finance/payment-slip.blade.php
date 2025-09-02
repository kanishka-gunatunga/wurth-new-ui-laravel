@extends('welcome')
@section('content')
    <div class="main-wrapper">

        <div class="d-flex justify-content-between align-items-center header-with-button">
            <h1 class="header-title">Payment Slip No. - 586485235647</h1>
            <button class="black-action-btn-lg">
                <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M12.0938 16L7.09375 11L8.49375 9.55L11.0938 12.15V4H13.0938V12.15L15.6938 9.55L17.0938 11L12.0938 16ZM6.09375 20C5.54375 20 5.07308 19.8043 4.68175 19.413C4.29042 19.0217 4.09442 18.5507 4.09375 18V15H6.09375V18H18.0938V15H20.0938V18C20.0938 18.55 19.8981 19.021 19.5068 19.413C19.1154 19.805 18.6444 20.0007 18.0938 20H6.09375Z"
                        fill="white" />
                </svg>
                Download
            </button>
        </div>




        <div class="styled-tab-main">
            <div class="header-and-content-gap-md"></div>
            <div class="slip-details">
                <p>
                    <span class="bold-text">ADM Name :</span><span class="slip-detail-text">&nbsp;L.K
                        Perera</span>
                </p>
                <p>
                    <span class="bold-text">ADM No. :</span><span class="slip-detail-text">&nbsp;4585689557</span>
                </p>
                <p>
                    <span class="bold-text">Deposit Date :</span><span class="slip-detail-text">&nbsp;2024.12.26</span>
                </p>

                <p>
                    <span class="bold-text"> Total Amount :</span><span class="slip-detail-text">&nbsp;Rs.
                        545,000.00</span>
                </p>

            </div>

            <div class="header-and-content-gap-lg"></div>
            <div class="table-responsive">
                <table class="table unlock-column-table">
                    <thead>
                        <tr>
                            <th>Receipt Number</th>
                            <th>Customer Name</th>
                            <th>Customer ID</th>
                            <th>Customer Paid Date</th>
                            <th>Customer Paid Amount</th>


                        </tr>
                    </thead>
                    <tbody id="paymentSlips">
                    </tbody>
                </table>

            </div>
            <nav class="d-flex justify-content-center mt-5">
                <ul id="paymentSlipsPagination" class="pagination"></ul>
            </nav>
        </div>
    </div>
@endsection

@section('bottom-bar')
<div class="py-3">
<div class="action-button-lg-row">
    <button class="grey-action-btn-lg">

        Back
    </button>



    <button class="red-action-btn-lg">

        Reject
    </button>



    <button class="success-action-btn-lg">

        Approve
    </button>
</div>
</div>

@endsection








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
    // Payment slips data
    const paymentSlipsData = [{
            recieptNumber: "125684588",
            customerName: "Dimo Lanka - Navinna",
            customerId: "1547854445",
            customerPaidDate: "2024.12.26",
            customerPaidAmount: 100000.00,
        },
        {
            recieptNumber: "125684589",
            customerName: "Auto World - Colombo",
            customerId: "1547854446",
            customerPaidDate: "2024.12.25",
            customerPaidAmount: 75000.00,
        },
        {
            recieptNumber: "125684590",
            customerName: "Lanka Motors",
            customerId: "1547854447",
            customerPaidDate: "2024.12.24",
            customerPaidAmount: 120000.00,
        },
        {
            recieptNumber: "125684591",
            customerName: "Super Tyres",
            customerId: "1547854448",
            customerPaidDate: "2024.12.23",
            customerPaidAmount: 95000.00,
        },
        {
            recieptNumber: "125684592",
            customerName: "Speed Auto",
            customerId: "1547854449",
            customerPaidDate: "2024.12.22",
            customerPaidAmount: 110000.00,
        },
        {
            recieptNumber: "125684593",
            customerName: "Car Care Center",
            customerId: "1547854450",
            customerPaidDate: "2024.12.21",
            customerPaidAmount: 80000.00,
        },
        {
            recieptNumber: "125684594",
            customerName: "Auto Parts Hub",
            customerId: "1547854451",
            customerPaidDate: "2024.12.20",
            customerPaidAmount: 105000.00,
        },
        {
            recieptNumber: "125684595",
            customerName: "Lanka Traders",
            customerId: "1547854452",
            customerPaidDate: "2024.12.19",
            customerPaidAmount: 90000.00,
        },
        {
            recieptNumber: "125684596",
            customerName: "Motor City",
            customerId: "1547854453",
            customerPaidDate: "2024.12.18",
            customerPaidAmount: 115000.00,
        },
        {
            recieptNumber: "125684597",
            customerName: "Auto Zone",
            customerId: "1547854454",
            customerPaidDate: "2024.12.17",
            customerPaidAmount: 98000.00,
        },
        {
            recieptNumber: "125684598",
            customerName: "Car Experts",
            customerId: "1547854455",
            customerPaidDate: "2024.12.16",
            customerPaidAmount: 102000.00,
        },
        {
            recieptNumber: "125684599",
            customerName: "Lanka Wheels",
            customerId: "1547854456",
            customerPaidDate: "2024.12.15",
            customerPaidAmount: 87000.00,
        },
        {
            recieptNumber: "125684600",
            customerName: "Auto Solutions",
            customerId: "1547854457",
            customerPaidDate: "2024.12.14",
            customerPaidAmount: 95000.00,
        },
        {
            recieptNumber: "125684601",
            customerName: "Motor Masters",
            customerId: "1547854458",
            customerPaidDate: "2024.12.13",
            customerPaidAmount: 108000.00,
        },
        {
            recieptNumber: "125684602",
            customerName: "Car Point",
            customerId: "1547854459",
            customerPaidDate: "2024.12.12",
            customerPaidAmount: 99000.00,
        },
        {
            recieptNumber: "125684603",
            customerName: "Auto Garage",
            customerId: "1547854460",
            customerPaidDate: "2024.12.11",
            customerPaidAmount: 103000.00,
        },



    ];

    const rowsPerPage = 10;
    const currentPages = {
        paymentSlips: 1
    }; // track pages separately

    // Table render function
    function renderTable(tableId, data, page) {
        const tableBody = document.getElementById(`paymentSlips`);
        tableBody.innerHTML = '';

        const startIndex = (page - 1) * rowsPerPage;
        const endIndex = Math.min(startIndex + rowsPerPage, data.length);

        for (let i = startIndex; i < endIndex; i++) {
            const row = `
                <tr>
                    <td>${data[i].recieptNumber}</td>
                    <td>${data[i].customerName}</td>
                    <td>${data[i].customerId}</td>
                    <td>${data[i].customerPaidDate}</td>
                    <td>${data[i].customerPaidAmount.toFixed(2)}</td>
                    
                </tr>
            `;
            tableBody.innerHTML += row;
        }
    }

    // Pagination render
    function renderPagination(tableId, data) {
        const pagination = document.getElementById(`paymentSlipsPagination`);
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
        if (tableId === 'paymentSlips') return paymentSlipsData;
        return [];
    }

    // Initial load after page ready
    window.onload = function() {
        changePage('paymentSlips', 1);
    };
</script>
