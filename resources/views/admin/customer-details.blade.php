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
                <h1 class="header-title">H.K Perera - 254565214</h1>
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

        <hr class="red-line mt-0">

        <div class="styled-tab-sub p-4">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item mb-3" role="presentation">
                    <a class="nav-link active" data-bs-toggle="tab" href="#customer-details" role="tab"
                        aria-controls="customer-list" aria-selected="true">


                        Customer Details
                    </a>
                </li>

                <li class="nav-item mb-3" role="presentation">
                    <a class="nav-link" data-bs-toggle="tab" href="#payment-details" role="tab"
                        aria-controls="temporary" aria-selected="false">
                        Payment details
                    </a>
                </li>

                <li class="nav-item mb-3" role="presentation">
                    <a class="nav-link" data-bs-toggle="tab" href="#payment-history" role="tab"
                        aria-controls="temporary" aria-selected="false">
                        Payment History
                    </a>
                </li>
            </ul>



            <div class="tab-content">

                <!-- Customer details Tab Pane -->
                <div id="customer-details" class="tab-pane fade show active" role="tabpanel"
                    aria-labelledby="customer-list-tab">
                    <div class="row d-flex justify-content-between mt-5">

                        <div class="mb-4 col-12 col-lg-6">
                            <h2 class="section-title mb-4">Customer Details</h2>

                            <div class="detail-row">
                                <span class="detail-label">Address :</span>
                                <span class="detail-value">No.18, Colombo 10</span>
                            </div>

                            <div class="detail-row">
                                <span class="detail-label">Secondary Address :</span>
                                <span class="detail-value">No.18, Colombo 10</span>
                            </div>

                            <div class="detail-row">
                                <span class="detail-label">Mobile Number :</span>
                                <span class="detail-value">0112847595</span>
                            </div>

                            <div class="detail-row">
                                <span class="detail-label">Secondary Mobile Number :</span>
                                <span class="detail-value">0775846245</span>
                            </div>

                            <div class="detail-row">
                                <span class="detail-label">Email :</span>
                                <span class="detail-value">HKPrerera@info.com</span>
                            </div>

                            <div class="detail-row">
                                <span class="detail-label">WhatsApp :</span>
                                <span class="detail-value">0775846245</span>
                            </div>

                            <div class="detail-row">
                                <span class="detail-label">ADM Name :</span>
                                <span class="detail-value">LK Perera</span>
                            </div>

                            <div class="detail-row">
                                <span class="detail-label">ADM No. :</span>
                                <span class="detail-value">4585689557</span>
                            </div>

                            <div class="detail-row">
                                <span class="detail-label">Secondary ADM Name :</span>
                                <span class="detail-value">D.P Rajapaksha</span>
                            </div>

                            <div class="detail-row">
                                <span class="detail-label">Secondary ADM No. :</span>
                                <span class="detail-value">5789532845</span>
                            </div>

                            <div class="detail-row">
                                <span class="detail-label">Contact Person Name :</span>
                                <span class="detail-value">P.R Perera</span>
                            </div>
                        </div>

                        <div class="mb-4 col-12 col-lg-6">
                            <h2 class="section-title mb-4">Payment Details</h2>

                            <div class="detail-row">
                                <span class="detail-label">Outstanding Invoices :</span>
                                <span class="detail-value payment-highlight">15</span>
                            </div>

                            <div class="detail-row">
                                <span class="detail-label">Return Cheques :</span>
                                <span class="detail-value payment-highlight">1</span>
                            </div>

                            <div class="detail-row">
                                <span class="detail-label">Extra Payment :</span>
                                <span class="detail-value">Rs. 12 000</span>
                            </div>

                            <div class="detail-row">
                                <span class="detail-label">Credit Note :</span>
                                <span class="detail-value">Rs. 1000</span>
                            </div>

                            <div class="detail-row">
                                <span class="detail-label">Last Credit Added Date :</span>
                                <span class="detail-value">03.06.2025</span>
                            </div>

                            <div class="detail-row">
                                <span class="detail-label">Total Outstanding Balance :</span>
                                <span class="detail-value payment-highlight">Rs. 120,000</span>
                            </div>

                            <div class="detail-row">
                                <span class="detail-label">Total pending Amount :</span>
                                <span class="detail-value payment-highlight">Rs. 2,350,000</span>
                            </div>

                            <div class="detail-row">
                                <span class="detail-label">Last Payment Date :</span>
                                <span class="detail-value">04.04.2025</span>
                            </div>
                        </div>
                    </div>

                </div>


                <!-- Payment Details Tab Pane -->
                <div id="payment-details" class="tab-pane fade mt-1" role="tabpanel" aria-labelledby="temporary-tab">

                    <div class="styled-tab-small">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item mb-3" role="presentation">
                                <a class="nav-link active" data-bs-toggle="tab" href="#invoice-details" role="tab">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="20"
                                        viewBox="0 0 21 20" fill="none">
                                        <path
                                            d="M11.5 13.9999H5.50001C5.23479 13.9999 4.98044 14.1053 4.7929 14.2928C4.60537 14.4804 4.50001 14.7347 4.50001 14.9999C4.50001 15.2652 4.60537 15.5195 4.7929 15.7071C4.98044 15.8946 5.23479 15.9999 5.50001 15.9999H11.5C11.7652 15.9999 12.0196 15.8946 12.2071 15.7071C12.3947 15.5195 12.5 15.2652 12.5 14.9999C12.5 14.7347 12.3947 14.4804 12.2071 14.2928C12.0196 14.1053 11.7652 13.9999 11.5 13.9999ZM7.50001 7.99995H9.50001C9.76522 7.99995 10.0196 7.89459 10.2071 7.70705C10.3947 7.51952 10.5 7.26516 10.5 6.99995C10.5 6.73473 10.3947 6.48038 10.2071 6.29284C10.0196 6.1053 9.76522 5.99995 9.50001 5.99995H7.50001C7.23479 5.99995 6.98044 6.1053 6.7929 6.29284C6.60537 6.48038 6.50001 6.73473 6.50001 6.99995C6.50001 7.26516 6.60537 7.51952 6.7929 7.70705C6.98044 7.89459 7.23479 7.99995 7.50001 7.99995ZM19.5 9.99995H16.5V0.999946C16.5007 0.823736 16.4548 0.65047 16.367 0.497692C16.2792 0.344914 16.1526 0.218051 16 0.129946C15.848 0.042178 15.6755 -0.00402832 15.5 -0.00402832C15.3245 -0.00402832 15.152 0.042178 15 0.129946L12 1.84995L9.00001 0.129946C8.84799 0.042178 8.67554 -0.00402832 8.50001 -0.00402832C8.32447 -0.00402832 8.15203 0.042178 8.00001 0.129946L5.00001 1.84995L2.00001 0.129946C1.84799 0.042178 1.67554 -0.00402832 1.50001 -0.00402832C1.32447 -0.00402832 1.15203 0.042178 1.00001 0.129946C0.847404 0.218051 0.720789 0.344914 0.632986 0.497692C0.545183 0.65047 0.499308 0.823736 0.500008 0.999946V16.9999C0.500008 17.7956 0.816078 18.5587 1.37869 19.1213C1.9413 19.6839 2.70436 19.9999 3.50001 19.9999H17.5C18.2957 19.9999 19.0587 19.6839 19.6213 19.1213C20.1839 18.5587 20.5 17.7956 20.5 16.9999V10.9999C20.5 10.7347 20.3947 10.4804 20.2071 10.2928C20.0196 10.1053 19.7652 9.99995 19.5 9.99995ZM3.50001 17.9999C3.23479 17.9999 2.98044 17.8946 2.7929 17.7071C2.60536 17.5195 2.50001 17.2652 2.50001 16.9999V2.72995L4.50001 3.86995C4.65435 3.95056 4.82589 3.99266 5.00001 3.99266C5.17413 3.99266 5.34567 3.95056 5.50001 3.86995L8.50001 2.14995L11.5 3.86995C11.6543 3.95056 11.8259 3.99266 12 3.99266C12.1741 3.99266 12.3457 3.95056 12.5 3.86995L14.5 2.72995V16.9999C14.5027 17.3411 14.5636 17.6793 14.68 17.9999H3.50001ZM18.5 16.9999C18.5 17.2652 18.3947 17.5195 18.2071 17.7071C18.0196 17.8946 17.7652 17.9999 17.5 17.9999C17.2348 17.9999 16.9804 17.8946 16.7929 17.7071C16.6054 17.5195 16.5 17.2652 16.5 16.9999V11.9999H18.5V16.9999ZM11.5 9.99995H5.50001C5.23479 9.99995 4.98044 10.1053 4.7929 10.2928C4.60537 10.4804 4.50001 10.7347 4.50001 10.9999C4.50001 11.2652 4.60537 11.5195 4.7929 11.7071C4.98044 11.8946 5.23479 11.9999 5.50001 11.9999H11.5C11.7652 11.9999 12.0196 11.8946 12.2071 11.7071C12.3947 11.5195 12.5 11.2652 12.5 10.9999C12.5 10.7347 12.3947 10.4804 12.2071 10.2928C12.0196 10.1053 11.7652 9.99995 11.5 9.99995Z"
                                            fill="currentColor" />
                                    </svg>
                                    Invoices
                                </a>
                            </li>

                            <li class="nav-item mb-3" role="presentation">
                                <a class="nav-link" data-bs-toggle="tab" href="#cheque-details" role="tab"
                                    aria-controls="temporary" aria-selected="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21"
                                        viewBox="0 0 21 21" fill="none">
                                        <path
                                            d="M16.5 3H3C2.60218 3 2.22064 3.15804 1.93934 3.43934C1.65804 3.72064 1.5 4.10218 1.5 4.5V18.5C1.5 18.8978 1.65804 19.2794 1.93934 19.5607C2.22064 19.842 2.60218 20 3 20H18C18.3978 20 18.7794 19.842 19.0607 19.5607C19.342 19.2794 19.5 18.8978 19.5 18.5V8"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M14.6215 5.2425L16.7425 3.1215L14.6215 1M10.5 7.5V16M14.5 11V16M6.5 11V16"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                    Return Cheque
                                </a>
                            </li>

                            <li class="nav-item mb-3" role="presentation">
                                <a class="nav-link" data-bs-toggle="tab" href="#extra-payment-details" role="tab"
                                    aria-controls="temporary" aria-selected="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="16"
                                        viewBox="0 0 21 16" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M17.5 4.66045e-09C18.2652 -4.26217e-05 19.0015 0.292325 19.5583 0.817284C20.115 1.34224 20.4501 2.06011 20.495 2.824L20.5 3V13C20.5 13.7652 20.2077 14.5015 19.6827 15.0583C19.1578 15.615 18.4399 15.9501 17.676 15.995L17.5 16H3.5C2.73479 16 1.99849 15.7077 1.44174 15.1827C0.884993 14.6578 0.549892 13.9399 0.505 13.176L0.5 13V3C0.499957 2.23479 0.792325 1.49849 1.31728 0.941739C1.84224 0.384993 2.56011 0.0498925 3.324 0.00500012L3.5 4.66045e-09H17.5ZM18.5 6H2.5V13C2.50003 13.2449 2.58996 13.4813 2.75272 13.6644C2.91547 13.8474 3.13975 13.9643 3.383 13.993L3.5 14H17.5C17.7449 14 17.9813 13.91 18.1644 13.7473C18.3474 13.5845 18.4643 13.3603 18.493 13.117L18.5 13V6ZM13.207 7.464L15.035 9.293C15.2225 9.48053 15.3278 9.73484 15.3278 10C15.3278 10.2652 15.2225 10.5195 15.035 10.707L13.207 12.535C13.1148 12.6305 13.0044 12.7067 12.8824 12.7591C12.7604 12.8115 12.6292 12.8391 12.4964 12.8403C12.3636 12.8414 12.2319 12.8161 12.109 12.7658C11.9861 12.7155 11.8745 12.6413 11.7806 12.5474C11.6867 12.4535 11.6125 12.3419 11.5622 12.219C11.5119 12.0961 11.4866 11.9644 11.4877 11.8316C11.4889 11.6988 11.5165 11.5676 11.5689 11.4456C11.6213 11.3236 11.6975 11.2132 11.793 11.121L11.913 11H7.5C7.23478 11 6.98043 10.8946 6.79289 10.7071C6.60536 10.5196 6.5 10.2652 6.5 10C6.5 9.73478 6.60536 9.48043 6.79289 9.29289C6.98043 9.10536 7.23478 9 7.5 9H11.914L11.793 8.879C11.6054 8.69149 11.4999 8.43712 11.4998 8.17185C11.4997 7.90658 11.605 7.65214 11.7925 7.4645C11.98 7.27686 12.2344 7.17139 12.4996 7.1713C12.7649 7.1712 13.0194 7.27649 13.207 7.464ZM17.5 2H3.5C3.23478 2 2.98043 2.10536 2.79289 2.29289C2.60536 2.48043 2.5 2.73478 2.5 3V4H18.5V3C18.5 2.73478 18.3946 2.48043 18.2071 2.29289C18.0196 2.10536 17.7652 2 17.5 2Z"
                                            fill="currentColor" />
                                    </svg>
                                    Extra Payment
                                </a>
                            </li>

                            <li class="nav-item mb-3" role="presentation">
                                <a class="nav-link" data-bs-toggle="tab" href="#credit-note" role="tab"
                                    aria-controls="temporary" aria-selected="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="20"
                                        viewBox="0 0 21 20" fill="none">
                                        <path
                                            d="M1.5 10C1.5 11.1819 1.73279 12.3522 2.18508 13.4442C2.63738 14.5361 3.30031 15.5282 4.13604 16.364C4.97177 17.1997 5.96392 17.8626 7.05585 18.3149C8.14778 18.7672 9.3181 19 10.5 19C11.6819 19 12.8522 18.7672 13.9442 18.3149C15.0361 17.8626 16.0282 17.1997 16.864 16.364C17.6997 15.5282 18.3626 14.5361 18.8149 13.4442C19.2672 12.3522 19.5 11.1819 19.5 10C19.5 8.8181 19.2672 7.64778 18.8149 6.55585C18.3626 5.46392 17.6997 4.47177 16.864 3.63604C16.0282 2.80031 15.0361 2.13738 13.9442 1.68508C12.8522 1.23279 11.6819 1 10.5 1C9.3181 1 8.14778 1.23279 7.05585 1.68508C5.96392 2.13738 4.97177 2.80031 4.13604 3.63604C3.30031 4.47177 2.63738 5.46392 2.18508 6.55585C1.73279 7.64778 1.5 8.8181 1.5 10Z"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M13.3 7C13.1188 6.68576 12.8557 6.4267 12.5386 6.25055C12.2215 6.0744 11.8625 5.9878 11.5 6H9.5C8.96957 6 8.46086 6.21071 8.08579 6.58579C7.71071 6.96086 7.5 7.46957 7.5 8C7.5 8.53043 7.71071 9.03914 8.08579 9.41421C8.46086 9.78929 8.96957 10 9.5 10H11.5C12.0304 10 12.5391 10.2107 12.9142 10.5858C13.2893 10.9609 13.5 11.4696 13.5 12C13.5 12.5304 13.2893 13.0391 12.9142 13.4142C12.5391 13.7893 12.0304 14 11.5 14H9.5C9.13749 14.0122 8.77849 13.9256 8.46142 13.7494C8.14435 13.5733 7.88115 13.3142 7.7 13M10.5 5V15"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                    Credit Note
                                </a>
                            </li>
                        </ul>

                        <div class="tab-content">

                            <!-- Payment details - Invoices Tab Pane -->
                            <div id="invoice-details" class="tab-pane fade show active" role="tabpanel"
                                aria-labelledby="customer-list-tab">
                                <div class="row d-flex justify-content-between">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Invoice No</th>
                                                    <th>Date</th>
                                                    <th>Total Amount</th>
                                                    <th>Outstanding Balance</th>
                                                    <th>Outstanding Days</th>
                                                </tr>
                                            </thead>
                                            <tbody id="paymentInvoicesTableBody">
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="col-12 d-flex justify-content-center mt-4">
                                        <nav aria-label="...">
                                            <ul id="paymentInvoicesPagination" class="pagination"></ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>

                            <!-- Payment details - return cheque Tab Pane -->
                            <div id="cheque-details" class="tab-pane fade" role="tabpanel"
                                aria-labelledby="temporary-tab">

                                <div class="row d-flex justify-content-between">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Return Che. No</th>
                                                    <th>Date</th>
                                                    <th>Total Amount</th>
                                                    <th>Outstanding Balance</th>
                                                    <th>Outstanding Days</th>
                                                </tr>
                                            </thead>
                                            <tbody id="paymentReturnChequeTableBody">
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="col-12 d-flex justify-content-center mt-4">
                                        <nav aria-label="...">
                                            <ul id="paymentReturnChequePagination" class="pagination"></ul>
                                        </nav>
                                    </div>
                                </div>

                            </div>

                            <!-- Payment details - extra payment Tab Pane -->
                            <div id="extra-payment-details" class="tab-pane fade" role="tabpanel"
                                aria-labelledby="temporary-tab">

                                <div class="row d-flex justify-content-between">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Return Che. No</th>
                                                    <th>Date</th>
                                                    <th>Total Amount</th>
                                                    <th>Outstanding Balance</th>
                                                    <th>Outstanding Days</th>
                                                </tr>
                                            </thead>
                                            <tbody id="extraPaymentTableBody">
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="col-12 d-flex justify-content-center mt-4">
                                        <nav aria-label="...">
                                            <ul id="extraPaymentPagination" class="pagination"></ul>
                                        </nav>
                                    </div>
                                </div>

                            </div>

                            <!-- Payment details - credit note Tab Pane -->
                            <div id="credit-note" class="tab-pane fade" role="tabpanel" aria-labelledby="temporary-tab">

                                <div class="row d-flex justify-content-between">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Return Che. No</th>
                                                    <th>Date</th>
                                                    <th>Total Amount</th>
                                                    <th>Outstanding Balance</th>
                                                    <th>Outstanding Days</th>
                                                </tr>
                                            </thead>
                                            <tbody id="paymentCreditNoteTableBody">
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="col-12 d-flex justify-content-center mt-4">
                                        <nav aria-label="...">
                                            <ul id="paymentCreditNotePagination" class="pagination"></ul>
                                        </nav>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>


                </div>

                <!-- Payment history Tab Pane -->
                <div id="payment-history" class="tab-pane fade mt-5" role="tabpanel" aria-labelledby="temporary-tab">

                    <div class="row d-flex justify-content-between">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Receipt No</th>
                                        <th>In. No / Return Che.</th>
                                        <th>Payment Method</th>
                                        <th>Paid Amount</th>
                                        <th>Paid Date</th>
                                    </tr>
                                </thead>
                                <tbody id="paymentHistoryTableBody">
                                </tbody>
                            </table>
                        </div>

                        <div class="col-12 d-flex justify-content-center mt-4">
                            <nav aria-label="...">
                                <ul id="paymentHistoryPagination" class="pagination"></ul>
                            </nav>
                        </div>
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
            




            

            <script>
                // Shared pagination object for all tables
                window.currentPages = window.currentPages || {};

                // Rows per page
                const rowsPerPage = 5;

                // Data arrays for each table
                const paymentInvoicesData = [{
                        invoiceNo: "I254565214",
                        date: "07.04.2025",
                        totalAmount: 400000,
                        outstandingBalance: 328000,
                        outstandingDays: 15
                    },
                    {
                        invoiceNo: "I254565215",
                        date: "08.04.2025",
                        totalAmount: 500000,
                        outstandingBalance: 450000,
                        outstandingDays: 10
                    },
                    {
                        invoiceNo: "I254565216",
                        date: "09.04.2025",
                        totalAmount: 250000,
                        outstandingBalance: 150000,
                        outstandingDays: 20
                    },
                    {
                        invoiceNo: "I254565217",
                        date: "10.04.2025",
                        totalAmount: 600000,
                        outstandingBalance: 60000,
                        outstandingDays: 5
                    },
                    {
                        invoiceNo: "I254565218",
                        date: "11.04.2025",
                        totalAmount: 300000,
                        outstandingBalance: 100000,
                        outstandingDays: 12
                    },
                    {
                        invoiceNo: "I254565219",
                        date: "12.04.2025",
                        totalAmount: 450000,
                        outstandingBalance: 200000,
                        outstandingDays: 18
                    },
                    {
                        invoiceNo: "I254565220",
                        date: "13.04.2025",
                        totalAmount: 350000,
                        outstandingBalance: 150000,
                        outstandingDays: 8
                    },
                    {
                        invoiceNo: "I254565221",
                        date: "14.04.2025",
                        totalAmount: 700000,
                        outstandingBalance: 500000,
                        outstandingDays: 25
                    }
                ];

                const paymentReturnChequeData = [{
                        chequeNo: "R254565214",
                        date: "07.04.2025",
                        totalAmount: 400000,
                        outstandingBalance: 328000,
                        outstandingDays: 15
                    },
                    {
                        chequeNo: "R254565245",
                        date: "07.04.2025",
                        totalAmount: 400000,
                        outstandingBalance: 328000,
                        outstandingDays: 15
                    },
                    {
                        chequeNo: "R254485214",
                        date: "07.04.2025",
                        totalAmount: 400000,
                        outstandingBalance: 328000,
                        outstandingDays: 15
                    },
                    {
                        chequeNo: "R454565214",
                        date: "07.04.2025",
                        totalAmount: 400000,
                        outstandingBalance: 328000,
                        outstandingDays: 15
                    },
                    {
                        chequeNo: "R1586652145",
                        date: "07.04.2025",
                        totalAmount: 400000,
                        outstandingBalance: 328000,
                        outstandingDays: 15
                    },
                    {
                        chequeNo: "R2543552145",
                        date: "07.04.2025",
                        totalAmount: 400000,
                        outstandingBalance: 328000,
                        outstandingDays: 15
                    }
                ];

                const extraPaymentData = [{
                        paymentNo: "EP1001",
                        date: "01.04.2025",
                        totalAmount: 120000,
                        outstandingBalance: 50000,
                        outstandingDays: 5
                    },
                    {
                        paymentNo: "EP1002",
                        date: "02.04.2025",
                        totalAmount: 200000,
                        outstandingBalance: 100000,
                        outstandingDays: 10
                    },
                    {
                        paymentNo: "EP1003",
                        date: "03.04.2025",
                        totalAmount: 150000,
                        outstandingBalance: 50000,
                        outstandingDays: 3
                    },
                    {
                        paymentNo: "EP1004",
                        date: "04.04.2025",
                        totalAmount: 300000,
                        outstandingBalance: 150000,
                        outstandingDays: 12
                    },
                    {
                        paymentNo: "EP1005",
                        date: "05.04.2025",
                        totalAmount: 250000,
                        outstandingBalance: 100000,
                        outstandingDays: 8
                    }
                ];

                const paymentCreditNoteData = [{
                        creditNoteNo: "CN1001",
                        date: "01.04.2025",
                        totalAmount: 50000,
                        outstandingBalance: 20000,
                        outstandingDays: 5
                    },
                    {
                        creditNoteNo: "CN1002",
                        date: "02.04.2025",
                        totalAmount: 80000,
                        outstandingBalance: 50000,
                        outstandingDays: 10
                    },
                    {
                        creditNoteNo: "CN1003",
                        date: "03.04.2025",
                        totalAmount: 60000,
                        outstandingBalance: 30000,
                        outstandingDays: 8
                    },
                    {
                        creditNoteNo: "CN1004",
                        date: "04.04.2025",
                        totalAmount: 90000,
                        outstandingBalance: 40000,
                        outstandingDays: 12
                    },
                    {
                        creditNoteNo: "CN1005",
                        date: "05.04.2025",
                        totalAmount: 70000,
                        outstandingBalance: 35000,
                        outstandingDays: 7
                    }
                ];

                const paymentHistoryData = [{
                        receiptNo: "254565214",
                        refNo: "R157452233",
                        method: "Cash Payment",
                        paidAmount: 400000,
                        paidDate: "07.04.2025"
                    },
                    {
                        receiptNo: "254565245",
                        refNo: "R157452233",
                        method: "Cheque Payment",
                        paidAmount: 158000,
                        paidDate: "07.04.2025"
                    },
                    {
                        receiptNo: "254485214",
                        refNo: "I157452233",
                        method: "Card Payment",
                        paidAmount: 230000,
                        paidDate: "07.04.2025"
                    },
                    {
                        receiptNo: "454565214",
                        refNo: "I157452233",
                        method: "Cash Payment",
                        paidAmount: 510000,
                        paidDate: "07.04.2025"
                    },
                    {
                        receiptNo: "158665214",
                        refNo: "I157452233",
                        method: "Cheque Payment",
                        paidAmount: 740000,
                        paidDate: "07.04.2025"
                    },
                    {
                        receiptNo: "254355214",
                        refNo: "R157452233",
                        method: "Cash Payment",
                        paidAmount: 320000,
                        paidDate: "07.04.2025"
                    }
                ];

                // Initialize current pages
                const tableIds = ['paymentInvoicesTableBody', 'paymentReturnChequeTableBody', 'extraPaymentTableBody',
                    'paymentCreditNoteTableBody', 'paymentHistoryTableBody'
                ];
                tableIds.forEach(id => {
                    if (!window.currentPages[id]) window.currentPages[id] = 1;
                });

                // Generic table renderer
                function renderTable(tableId, data, page) {
                    const tableBody = document.getElementById(tableId);
                    tableBody.innerHTML = '';

                    const startIndex = (page - 1) * rowsPerPage;
                    const endIndex = Math.min(startIndex + rowsPerPage, data.length);

                    for (let i = startIndex; i < endIndex; i++) {
                        let row = '';
                        switch (tableId) {
                            case 'paymentInvoicesTableBody':
                                row = `<tr>
                        <td>${data[i].invoiceNo}</td>
                        <td>${data[i].date}</td>
                        <td>Rs.${data[i].totalAmount.toLocaleString()}</td>
                        <td>Rs.${data[i].outstandingBalance.toLocaleString()}</td>
                        <td>${data[i].outstandingDays} days</td>
                    </tr>`;
                                break;
                            case 'paymentReturnChequeTableBody':
                                row = `<tr>
                        <td>${data[i].chequeNo}</td>
                        <td>${data[i].date}</td>
                        <td>Rs.${data[i].totalAmount.toLocaleString()}</td>
                        <td>Rs.${data[i].outstandingBalance.toLocaleString()}</td>
                        <td>${data[i].outstandingDays} days</td>
                    </tr>`;
                                break;
                            case 'extraPaymentTableBody':
                                row = `<tr>
                        <td>${data[i].paymentNo}</td>
                        <td>${data[i].date}</td>
                        <td>Rs.${data[i].totalAmount.toLocaleString()}</td>
                        <td>Rs.${data[i].outstandingBalance.toLocaleString()}</td>
                        <td>${data[i].outstandingDays} days</td>
                    </tr>`;
                                break;
                            case 'paymentCreditNoteTableBody':
                                row = `<tr>
                        <td>${data[i].creditNoteNo}</td>
                        <td>${data[i].date}</td>
                        <td>Rs.${data[i].totalAmount.toLocaleString()}</td>
                        <td>Rs.${data[i].outstandingBalance.toLocaleString()}</td>
                        <td>${data[i].outstandingDays} days</td>
                    </tr>`;
                                break;
                            case 'paymentHistoryTableBody':
                                row = `<tr>
                        <td>${data[i].receiptNo}</td>
                        <td>${data[i].refNo}</td>
                        <td>${data[i].method}</td>
                        <td>Rs.${data[i].paidAmount.toLocaleString()}</td>
                        <td>${data[i].paidDate}</td>
                    </tr>`;
                                break;
                        }
                        tableBody.innerHTML += row;
                    }
                }

                // Generic pagination renderer
                function renderPagination(tableId, data, paginationId) {
                    const pagination = document.getElementById(paginationId);
                    pagination.innerHTML = '';

                    const totalPages = Math.ceil(data.length / rowsPerPage);
                    const currentPage = window.currentPages[tableId];

                    pagination.innerHTML += `<li class="page-item ${currentPage === 1 ? 'disabled' : ''}">
            <a class="page-link" href="#" onclick="changePage('${tableId}', ${currentPage - 1}, '${paginationId}')">Prev</a>
        </li>`;

                    for (let i = 1; i <= totalPages; i++) {
                        pagination.innerHTML += `<li class="page-item ${i === currentPage ? 'active' : ''}">
                <a class="page-link" href="#" onclick="changePage('${tableId}', ${i}, '${paginationId}')">${i}</a>
            </li>`;
                    }

                    pagination.innerHTML += `<li class="page-item ${currentPage === totalPages ? 'disabled' : ''}">
            <a class="page-link" href="#" onclick="changePage('${tableId}', ${currentPage + 1}, '${paginationId}')">Next</a>
        </li>`;
                }

                // Change page
                function changePage(tableId, page, paginationId) {
                    let data;
                    switch (tableId) {
                        case 'paymentInvoicesTableBody':
                            data = paymentInvoicesData;
                            break;
                        case 'paymentReturnChequeTableBody':
                            data = paymentReturnChequeData;
                            break;
                        case 'extraPaymentTableBody':
                            data = extraPaymentData;
                            break;
                        case 'paymentCreditNoteTableBody':
                            data = paymentCreditNoteData;
                            break;
                        case 'paymentHistoryTableBody':
                            data = paymentHistoryData;
                            break;
                        default:
                            data = [];
                            break;
                    }

                    const totalPages = Math.ceil(data.length / rowsPerPage);
                    if (page < 1 || page > totalPages) return;

                    window.currentPages[tableId] = page;
                    renderTable(tableId, data, page);
                    renderPagination(tableId, data, paginationId);
                }

                // Initial load for all tables
                window.onload = function() {
                    changePage('paymentInvoicesTableBody', 1, 'paymentInvoicesPagination');
                    changePage('paymentReturnChequeTableBody', 1, 'paymentReturnChequePagination');
                    changePage('extraPaymentTableBody', 1, 'extraPaymentPagination');
                    changePage('paymentCreditNoteTableBody', 1, 'paymentCreditNotePagination');
                    changePage('paymentHistoryTableBody', 1, 'paymentHistoryPagination');
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

            <script>
                document.querySelectorAll('.selectable-filter').forEach(function(tag) {
                    tag.addEventListener('click', function() {
                        tag.classList.toggle('selected');
                    });
                });
            </script>
@endsection