@extends('welcome')
@section('content')
            <div class="main-wrapper">

                <div class="row d-flex justify-content-between">
                    <div class="col-lg-6 col-12">
                        <h1 class="header-title">All Receipt</h1>
                    </div>
                    <div class="col-lg-6 col-12 d-flex justify-content-lg-end gap-3 ">
                        <button class="header-btn"><i class="fa-solid fa-magnifying-glass fa-xl"></i></button>
                        <button class="header-btn" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#searchByFilter" aria-controls="offcanvasRight"><i
                                class="fa-solid fa-filter fa-xl"></i></button>
                    </div>
                </div>


                <div class="styled-tab-main">
                    <ul class="nav nav-tabs">
                        <li class="nav-item mb-3">
                            <a class="nav-link active" aria-current="page" href="#" id="final-reciepts-invoices"
                                data-bs-toggle="tab" data-bs-target="#final-reciepts-invoices-pane" type="button"
                                role="tab" aria-controls="final-reciepts-invoices-pane" aria-selected="true">

                                <svg width="25" height="24" viewBox="0 0 25 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M8.5 7H16.5M8.5 11H16.5M8.5 15H12.5M20.5 21V5C20.5 4.46957 20.2893 3.96086 19.9142 3.58579C19.5391 3.21071 19.0304 3 18.5 3H6.5C5.96957 3 5.46086 3.21071 5.08579 3.58579C4.71071 3.96086 4.5 4.46957 4.5 5V21L7 19L10 21L12.5 19L15 21L18 19L20.5 21Z"
                                        stroke="#CC0000" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>

                                Final Receipts - Invoices
                            </a>
                        </li>



                        <li class="nav-item mb-3">
                            <a class="nav-link" aria-current="page" href="#" id="temporary-receipts-invoices"
                                data-bs-toggle="tab" data-bs-target="#temporary-receipts-invoices-pane" type="button"
                                role="tab" aria-controls="temporary-receipts-invoices-pane" aria-selected="false">
                                <svg width="25" height="24" viewBox="0 0 25 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M20 3.5L18.5 2L17 3.5L15.5 2L14 3.5L12.5 2L11 3.5L9.5 2L8 3.5L6.5 2L5 3.5L3.5 2V22L5 20.5L6.5 22L8 20.5L9.5 22L11.08 20.42C11.22 20.61 11.38 20.78 11.55 20.95C12.8619 22.2423 14.6302 22.9657 16.4717 22.9634C18.3133 22.9611 20.0797 22.2334 21.3885 20.9378C22.6972 19.6423 23.4427 17.8832 23.4636 16.0418C23.4845 14.2004 22.779 12.4249 21.5 11.1V2L20 3.5ZM19.5 9.68C18.57 9.24 17.55 9 16.5 9C12.64 9 9.5 12.13 9.5 16C9.5 17.05 9.74 18.07 10.18 19H5.5V5H19.5V9.68ZM21.35 16C21.35 16.64 21.23 17.27 21 17.86C20.74 18.44 20.38 19 19.93 19.43C19.5 19.88 18.94 20.24 18.36 20.5C17.77 20.73 17.14 20.85 16.5 20.85C13.82 20.85 11.65 18.68 11.65 16C11.65 14.71 12.16 13.5 13.07 12.57C14 11.66 15.21 11.15 16.5 11.15C19.17 11.15 21.35 13.32 21.35 16ZM15.5 16.69V13H17V15.82L19.44 17.23L18.69 18.53L15.5 16.69Z"
                                        fill="#CC0000" />
                                </svg>


                                Temporary Receipts - Invoices
                            </a>
                        </li>


                        <li class="nav-item mb-3">
                            <a class="nav-link" aria-current="page" href="#" id="temporary-receipts-advance-payment"
                                data-bs-toggle="tab" data-bs-target="#temporary-receipts-advance-payment-pane"
                                type="button" role="tab" aria-controls="temporary-receipts-advance-payment-pane"
                                aria-selected="false">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M19.5 3.5L18 2L16.5 3.5L15 2L13.5 3.5L12 2L10.5 3.5L9 2L7.5 3.5L6 2L4.5 3.5L3 2V22L4.5 20.5L6 22L7.5 20.5L9 22L10.58 20.42C10.72 20.61 10.88 20.78 11.05 20.95C12.3619 22.2423 14.1302 22.9657 15.9717 22.9634C17.8133 22.9611 19.5797 22.2334 20.8885 20.9378C22.1972 19.6423 22.9427 17.8832 22.9636 16.0418C22.9845 14.2004 22.279 12.4249 21 11.1V2L19.5 3.5ZM19 9.68C18.07 9.24 17.05 9 16 9C12.14 9 9 12.13 9 16C9 17.05 9.24 18.07 9.68 19H5V5H19V9.68ZM20.85 16C20.85 16.64 20.73 17.27 20.5 17.86C20.24 18.44 19.88 19 19.43 19.43C19 19.88 18.44 20.24 17.86 20.5C17.27 20.73 16.64 20.85 16 20.85C13.32 20.85 11.15 18.68 11.15 16C11.15 14.71 11.66 13.5 12.57 12.57C13.5 11.66 14.71 11.15 16 11.15C18.67 11.15 20.85 13.32 20.85 16ZM15 16.69V13H16.5V15.82L18.94 17.23L18.19 18.53L15 16.69Z"
                                        fill="#CC0000" />
                                </svg>



                                Temporary Receipts - Advance Payment
                            </a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="final-reciepts-invoices-pane" role="tabpanel"
                            aria-labelledby="final-reciepts-invoices" tabindex="0">
                            <div class="table-responsive">
                                <table class="table custom-table-locked">
                                    <thead>
                                        <tr>
                                            <th>Customer Name</th>
                                            <th>Receipt Number</th>
                                            <th>Status</th>
                                            <th>Invoice Number</th>
                                            <th>Issue Date</th>
                                            <th>Amount</th>
                                            <th>ADM Name</th>
                                            <th class="sticky-column">Actions</th>

                                        </tr>
                                    </thead>
                                    <tbody id="finalBody">
                                    </tbody>
                                </table>

                            </div>
                            <nav class="d-flex justify-content-center mt-5">
                                <ul id="finalPagination" class="pagination"></ul>
                            </nav>
                        </div>

                        <div class="tab-pane fade" id="temporary-receipts-invoices-pane" role="tabpanel"
                            aria-labelledby="temporary-receipts-invoices" tabindex="0">
                            <div class="table-responsive">
                                <table class="table custom-table-locked">
                                    <thead>
                                        <tr>
                                            <th scope="col">Customer Name</th>
                                            <th scope="col">Receipt Number</th>
                                            <th scope="col">Issue Date</th>
                                            <th scope="col">Amount</th>
                                            <th scope="col">ADM Number</th>
                                            <th scope="col">ADM Name</th>
                                            <th scope="col">Reason</th>
                                            <th class="sticky-column">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody id="receiptsBody">
                                    </tbody>
                                </table>

                            </div>
                            <nav class="d-flex justify-content-center mt-5">
                                <ul id="receiptsPagination" class="pagination"></ul>
                            </nav>
                        </div>

                        <div class="tab-pane fade" id="temporary-receipts-advance-payment-pane" role="tabpanel"
                            aria-labelledby="temporary-receipts-advance-payment" tabindex="0">
                            <div class="table-responsive">
                                <table class="table custom-table-locked">
                                    <thead>
                                        <tr>
                                            <th scope="col">Customer Name</th>
                                            <th scope="col">Receipt Number</th>
                                            <th scope="col">Issue Date</th>
                                            <th scope="col">Amount</th>
                                            <th scope="col">ADM Number</th>
                                            <th scope="col">ADM Name</th>
                                            <th scope="col">Reason</th>
                                            <th class="sticky-column">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody id="trBody"></tbody>
                                </table>

                            </div>
                            <nav class="d-flex justify-content-center mt-5">
                                <ul id="trPagination" class="pagination"></ul>
                            </nav>
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

    searchInput.addEventListener('input', function () {
        const query = this.value.toLowerCase();
        searchDropdown.innerHTML = '';

        if (query) {
            const filteredItems = items.filter(item => item.toLowerCase().includes(query));
            if (filteredItems.length > 0) {
                filteredItems.forEach(item => {
                    const div = document.createElement('div');
                    div.className = 'search-item';
                    div.textContent = item;
                    div.addEventListener('click', function () {
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

    document.addEventListener('click', function (e) {
        if (!searchDropdown.contains(e.target) && e.target !== searchInput) {
            searchDropdown.classList.remove('show');
        }
    });
</script>

<script>

    // final receipts invoices
    const FinalRecieptInvoices = [
        { customer: "John Doe", receipt: "R1001", status: "Approved", invoiceNumber: "INV-0001", issueDate: "2024-01-05", amount: 1200, ADMName: "Alice" },
        { customer: "Jane Smith", receipt: "R1002", status: "Deposited", invoiceNumber: "INV-0002", issueDate: "2024-01-06", amount: 800, ADMName: "Bob" },
        { customer: "Michael Lee", receipt: "R1003", status: "Paid", invoiceNumber: "INV-0003", issueDate: "2024-01-07", amount: 950, ADMName: "Charlie" },
        { customer: "Sophia Brown", receipt: "R1004", status: "Rejected", invoiceNumber: "INV-0004", issueDate: "2024-01-08", amount: 500, ADMName: "Alice" },
        { customer: "David Wilson", receipt: "R1005", status: "Paid", invoiceNumber: "INV-0005", issueDate: "2024-01-09", amount: 300, ADMName: "Bob" },
        { customer: "Emily Davis", receipt: "R1006", status: "Deposited", invoiceNumber: "INV-0006", issueDate: "2024-01-10", amount: 1400, ADMName: "Charlie" },
        { customer: "Daniel Taylor", receipt: "R1007", status: "Paid", invoiceNumber: "INV-0007", issueDate: "2024-01-11", amount: 1700, ADMName: "Alice" },
        { customer: "Olivia Martin", receipt: "R1008", status: "Paid", invoiceNumber: "INV-0008", issueDate: "2024-01-12", amount: 600, ADMName: "Bob" },
        { customer: "James Anderson", receipt: "R1009", status: "Deposited", invoiceNumber: "INV-0009", issueDate: "2024-01-13", amount: 1100, ADMName: "Charlie" },
        { customer: "Isabella Thomas", receipt: "R1010", status: "Rejected", invoiceNumber: "INV-0010", issueDate: "2024-01-14", amount: 750, ADMName: "Alice" },
        { customer: "Liam White", receipt: "R1011", status: "Paid", invoiceNumber: "INV-0011", issueDate: "2024-01-15", amount: 900, ADMName: "Bob" },
        { customer: "Ava Harris", receipt: "R1012", status: "Deposited", invoiceNumber: "INV-0012", issueDate: "2024-01-16", amount: 1300, ADMName: "Charlie" },
        { customer: "Noah Clark", receipt: "R1013", status: "Approved", invoiceNumber: "INV-0013", issueDate: "2024-01-17", amount: 400, ADMName: "Alice" },
        { customer: "Mia Lewis", receipt: "R1014", status: "Rejected", invoiceNumber: "INV-0014", issueDate: "2024-01-18", amount: 500, ADMName: "Bob" },
        { customer: "Ethan Robinson", receipt: "R1015", status: "Paid", invoiceNumber: "INV-0015", issueDate: "2024-01-19", amount: 1600, ADMName: "Charlie" },
        { customer: "Amelia Walker", receipt: "R1016", status: "Deposited", invoiceNumber: "INV-0016", issueDate: "2024-01-20", amount: 700, ADMName: "Alice" },
        { customer: "Logan Hall", receipt: "R1017", status: "Paid", invoiceNumber: "INV-0017", issueDate: "2024-01-21", amount: 1200, ADMName: "Bob" },
        { customer: "Harper Allen", receipt: "R1018", status: "Approved", invoiceNumber: "INV-0018", issueDate: "2024-01-22", amount: 600, ADMName: "Charlie" },
        { customer: "Lucas Young", receipt: "R1019", status: "Deposited", invoiceNumber: "INV-0019", issueDate: "2024-01-23", amount: 2000, ADMName: "Alice" },
        { customer: "Charlotte King", receipt: "R1020", status: "Paid", invoiceNumber: "INV-0020", issueDate: "2024-01-24", amount: 1450, ADMName: "Bob" }
    ];

    // temporary receipts invoices
    const TRInvoices = [
        { customer: "John Doe", receiptNumber: "TR2001", issueDate: "2024-02-01", amount: 450, admNumber: "ADM01", admName: "Alice", reason: "Deposit", actions: "View" },
        { customer: "Jane Smith", receiptNumber: "TR2002", issueDate: "2024-02-02", amount: 600, admNumber: "ADM02", admName: "Bob", reason: "Advance", actions: "Edit" },
        { customer: "Michael Lee", receiptNumber: "TR2003", issueDate: "2024-02-03", amount: 300, admNumber: "ADM03", admName: "Charlie", reason: "Refund", actions: "Delete" },
        { customer: "Sophia Brown", receiptNumber: "TR2004", issueDate: "2024-02-04", amount: 800, admNumber: "ADM01", admName: "Alice", reason: "Security", actions: "View" },
        { customer: "David Wilson", receiptNumber: "TR2005", issueDate: "2024-02-05", amount: 1000, admNumber: "ADM02", admName: "Bob", reason: "Prepayment", actions: "Edit" },
        { customer: "Emily Davis", receiptNumber: "TR2006", issueDate: "2024-02-06", amount: 250, admNumber: "ADM03", admName: "Charlie", reason: "Deposit", actions: "View" },
        { customer: "Daniel Taylor", receiptNumber: "TR2007", issueDate: "2024-02-07", amount: 900, admNumber: "ADM01", admName: "Alice", reason: "Advance", actions: "Edit" },
        { customer: "Olivia Martin", receiptNumber: "TR2008", issueDate: "2024-02-08", amount: 700, admNumber: "ADM02", admName: "Bob", reason: "Refund", actions: "View" },
        { customer: "James Anderson", receiptNumber: "TR2009", issueDate: "2024-02-09", amount: 350, admNumber: "ADM03", admName: "Charlie", reason: "Deposit", actions: "Delete" },
        { customer: "Isabella Thomas", receiptNumber: "TR2010", issueDate: "2024-02-10", amount: 500, admNumber: "ADM01", admName: "Alice", reason: "Prepayment", actions: "View" },
        { customer: "Liam White", receiptNumber: "TR2011", issueDate: "2024-02-11", amount: 400, admNumber: "ADM02", admName: "Bob", reason: "Advance", actions: "Edit" },
        { customer: "Ava Harris", receiptNumber: "TR2012", issueDate: "2024-02-12", amount: 800, admNumber: "ADM03", admName: "Charlie", reason: "Refund", actions: "View" },
        { customer: "Noah Clark", receiptNumber: "TR2013", issueDate: "2024-02-13", amount: 650, admNumber: "ADM01", admName: "Alice", reason: "Deposit", actions: "Delete" },
        { customer: "Mia Lewis", receiptNumber: "TR2014", issueDate: "2024-02-14", amount: 1200, admNumber: "ADM02", admName: "Bob", reason: "Advance", actions: "View" },
        { customer: "Ethan Robinson", receiptNumber: "TR2015", issueDate: "2024-02-15", amount: 900, admNumber: "ADM03", admName: "Charlie", reason: "Security", actions: "Edit" },
        { customer: "Amelia Walker", receiptNumber: "TR2016", issueDate: "2024-02-16", amount: 1100, admNumber: "ADM01", admName: "Alice", reason: "Deposit", actions: "View" },
        { customer: "Logan Hall", receiptNumber: "TR2017", issueDate: "2024-02-17", amount: 500, admNumber: "ADM02", admName: "Bob", reason: "Refund", actions: "Delete" },
        { customer: "Harper Allen", receiptNumber: "TR2018", issueDate: "2024-02-18", amount: 750, admNumber: "ADM03", admName: "Charlie", reason: "Prepayment", actions: "View" },
        { customer: "Lucas Young", receiptNumber: "TR2019", issueDate: "2024-02-19", amount: 600, admNumber: "ADM01", admName: "Alice", reason: "Advance", actions: "Edit" },
        { customer: "Charlotte King", receiptNumber: "TR2020", issueDate: "2024-02-20", amount: 450, admNumber: "ADM02", admName: "Bob", reason: "Deposit", actions: "View" }
    ];

    // temporary receipts advance payment
    const temporaryReceiptsAdvancePaymentTableBody = [
        { customer: "John Doe", receiptNumber: "AP3001", issueDate: "2024-03-01", amount: 200, admNumber: "ADM01", admName: "Alice", reason: "Advance Payment", actions: "View" },
        { customer: "Jane Smith", receiptNumber: "AP3002", issueDate: "2024-03-02", amount: 350, admNumber: "ADM02", admName: "Bob", reason: "Part Payment", actions: "Edit" },
        { customer: "Michael Lee", receiptNumber: "AP3003", issueDate: "2024-03-03", amount: 400, admNumber: "ADM03", admName: "Charlie", reason: "Booking", actions: "View" },
        { customer: "Sophia Brown", receiptNumber: "AP3004", issueDate: "2024-03-04", amount: 550, admNumber: "ADM01", admName: "Alice", reason: "Deposit", actions: "Delete" },
        { customer: "David Wilson", receiptNumber: "AP3005", issueDate: "2024-03-05", amount: 600, admNumber: "ADM02", admName: "Bob", reason: "Advance Payment", actions: "View" },
        { customer: "Emily Davis", receiptNumber: "AP3006", issueDate: "2024-03-06", amount: 300, admNumber: "ADM03", admName: "Charlie", reason: "Part Payment", actions: "Edit" },
        { customer: "Daniel Taylor", receiptNumber: "AP3007", issueDate: "2024-03-07", amount: 450, admNumber: "ADM01", admName: "Alice", reason: "Booking", actions: "View" },
        { customer: "Olivia Martin", receiptNumber: "AP3008", issueDate: "2024-03-08", amount: 700, admNumber: "ADM02", admName: "Bob", reason: "Deposit", actions: "View" },
        { customer: "James Anderson", receiptNumber: "AP3009", issueDate: "2024-03-09", amount: 900, admNumber: "ADM03", admName: "Charlie", reason: "Advance Payment", actions: "Edit" },
        { customer: "Isabella Thomas", receiptNumber: "AP3010", issueDate: "2024-03-10", amount: 250, admNumber: "ADM01", admName: "Alice", reason: "Part Payment", actions: "View" },
        { customer: "Liam White", receiptNumber: "AP3011", issueDate: "2024-03-11", amount: 500, admNumber: "ADM02", admName: "Bob", reason: "Booking", actions: "Delete" },
        { customer: "Ava Harris", receiptNumber: "AP3012", issueDate: "2024-03-12", amount: 750, admNumber: "ADM03", admName: "Charlie", reason: "Deposit", actions: "View" },
        { customer: "Noah Clark", receiptNumber: "AP3013", issueDate: "2024-03-13", amount: 800, admNumber: "ADM01", admName: "Alice", reason: "Advance Payment", actions: "Edit" },
        { customer: "Mia Lewis", receiptNumber: "AP3014", issueDate: "2024-03-14", amount: 350, admNumber: "ADM02", admName: "Bob", reason: "Part Payment", actions: "View" },
        { customer: "Ethan Robinson", receiptNumber: "AP3015", issueDate: "2024-03-15", amount: 400, admNumber: "ADM03", admName: "Charlie", reason: "Booking", actions: "View" },
        { customer: "Amelia Walker", receiptNumber: "AP3016", issueDate: "2024-03-16", amount: 600, admNumber: "ADM01", admName: "Alice", reason: "Deposit", actions: "Edit" },
        { customer: "Logan Hall", receiptNumber: "AP3017", issueDate: "2024-03-17", amount: 700, admNumber: "ADM02", admName: "Bob", reason: "Advance Payment", actions: "View" },
        { customer: "Harper Allen", receiptNumber: "AP3018", issueDate: "2024-03-18", amount: 800, admNumber: "ADM03", admName: "Charlie", reason: "Part Payment", actions: "Delete" },
        { customer: "Lucas Young", receiptNumber: "AP3019", issueDate: "2024-03-19", amount: 550, admNumber: "ADM01", admName: "Alice", reason: "Booking", actions: "View" },
        { customer: "Charlotte King", receiptNumber: "AP3020", issueDate: "2024-03-20", amount: 1000, admNumber: "ADM02", admName: "Bob", reason: "Deposit", actions: "View" }
    ];




    const rowsPerPage = 10;

    let currentPages = {
        receipts: 1,
        final: 1,
        tr: 1
    };

    function renderTable(tableId, data, page) {
        const tableBody = document.getElementById(`${tableId}Body`);
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
            let row = '';

            if (tableId === 'final') {
                row = `
                <tr>
                    <td>${data[i].customer}</td>
                    <td>${data[i].receipt}</td>
                    <td><button class="${statusClass}"> ${data[i].status}</button></td>
                    <td>${data[i].invoiceNumber}</td>
                    <td>${data[i].issueDate}</td>
                    <td>${data[i].amount}</td>
                    <td>${data[i].ADMName}</td>
                    <td class="sticky-column">
                        <button class="success-action-btn">Approve</button>
                        <button class="red-action-btn">Reject</button>
                        <button class="black-action-btn">Download</button>
                    </td>
                </tr>
            `;
            } else if (tableId === 'receipts') {
                row = `
                <tr>
                    <td>${data[i].customer}</td>
                    <td>${data[i].receiptNumber}</td>
                    <td>${data[i].issueDate}</td>
                    <td>${data[i].amount}</td>
                    <td>${data[i].admNumber}</td>
                    <td>${data[i].admName}</td>
                    <td>${data[i].reason}</td>
                    <td class="sticky-column">
                        
                        <button class="red-action-btn">Resend SMS</button>
                        <button class="black-action-btn">Download</button>
                    </td>
                </tr>
            `;
            } else if (tableId === 'tr') {
                row = `
                <tr>
                   <td>${data[i].customer}</td>
                    <td>${data[i].receiptNumber}</td>
                    <td>${data[i].issueDate}</td>
                    <td>${data[i].amount}</td>
                    <td>${data[i].admNumber}</td>
                    <td>${data[i].admName}</td>
                    <td>${data[i].reason}</td>
                    <td class="sticky-column">
                        
                        <button class="red-action-btn">Resend SMS</button>
                        <button class="black-action-btn">Download</button>
                    </td>
                </tr>
            `;
            }

            tableBody.innerHTML += row;
        }
    }

    // Pagination rendering
    function renderPagination(tableId, data) {
        const pagination = document.getElementById(`${tableId}Pagination`);
        pagination.innerHTML = '';

        const totalPages = Math.ceil(data.length / rowsPerPage);
        const currentPage = currentPages[tableId];

        pagination.innerHTML += `
        <li class="page-item ${currentPage === 1 ? 'disabled' : ''}">
            <a class="page-link" href="#" onclick="changePage('${tableId}', ${currentPage - 1})">Prev</a>
        </li>
    `;

        for (let i = 1; i <= totalPages; i++) {
            pagination.innerHTML += `
            <li class="page-item ${i === currentPage ? 'active' : ''}">
                <a class="page-link" href="#" onclick="changePage('${tableId}', ${i})">${i}</a>
            </li>
        `;
        }

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

    // Map tableId to dataset
    function getTableData(tableId) {
        if (tableId === 'receipts') return temporaryReceiptsAdvancePaymentTableBody;
        if (tableId === 'final') return FinalRecieptInvoices;
        if (tableId === 'tr') return TRInvoices;
        return [];
    }

    // Init all tables
    function initTables() {
        changePage('receipts', 1);
        changePage('final', 1);
        changePage('tr', 1);
    }

    initTables();
</script>


@endsection