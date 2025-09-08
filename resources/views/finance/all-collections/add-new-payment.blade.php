@extends('welcome')

@section('content')

<style>
    .form-check-input {
        height: 20px;
        width: 20px;
        border-color: #D2D5DA;
        margin-right: 15px;
    }

    .form-check-input:focus {
        border-color: #dc3545 !important;
        outline: 0 !important;
        box-shadow: 0 0 0 2.1px #dc354533 !important;
    }

    .form-check-input:checked {
        background-color: #dc3545 !important;
        border-color: #dc3545 !important;
    }

    .form-check-label {
        font-family: "Inter", sans-serif;
        font-size: 20px;
        font-weight: 400;


    }
</style>

<div class="main-wrapper">
    <div class="row d-flex justify-content-between">
        <div class="col-lg-6 col-12">
            <h1 class="header-title">Direct Payments</h1>
        </div>

    </div>



    <div class="styled-tab-main">
        <div class="header-and-content-gap-md"></div>
        <div class="row g-5">
            <div class="col-md-6">
                <div>
                    <p class="card-section-title">Customer Name</p>

                    <div class="mb-4 w-100">
                        <div class="dropdown w-100">
                            <button
                                class="btn custom-dropdown w-100 text-start d-flex align-items-center justify-content-between"
                                type="button"
                                id="customerDropdown"
                                data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <span>
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" class="me-2">
                                        <path
                                            d="M16.893 16.92L19.973 20M19 11.5C19 13.4891 18.2098 15.3968 16.8033 16.8033C15.3968 18.2098 13.4891 19 11.5 19C9.51088 19 7.60322 18.2098 6.1967 16.8033C4.79018 15.3968 4 13.4891 4 11.5C4 9.51088 4.79018 7.60322 6.1967 6.1967C7.60322 4.79018 9.51088 4 11.5 4C13.4891 4 15.3968 4.79018 16.8033 6.1967C18.2098 7.60322 19 9.51088 19 11.5Z"
                                            stroke="#AAB6C1" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    Select Customer
                                </span>
                                <span class="custom-arrow"></span>
                            </button>

                            <ul class="dropdown-menu custom-dropdown-menu w-100" aria-labelledby="customerDropdown">
                                <li><a class="dropdown-item" href="#">Alabama</a></li>
                                <li><a class="dropdown-item" href="#">California</a></li>
                                <li><a class="dropdown-item" href="#">Florida</a></li>
                                <li><a class="dropdown-item" href="#">New York</a></li>
                                <li><a class="dropdown-item" href="#">Texas</a></li>
                                <li><a class="dropdown-item" href="#">Washington</a></li>
                            </ul>
                        </div>
                    </div>



                    <div class="mt-4">
                        <div class="card customer-payment-card">

                            <div class="card-body d-flex flex-column gap-4">
                                <h5 class="card-title">Selected Customers Details</h5>
                                <div class="details-card">
                                    <div>
                                        <p>

                                            <span class="bold-text-sm">Customer Name :</span>
                                            <span class="slip-detail-text-sm">&nbsp;Dimo Lanka -
                                                Colombo</span>
                                        </p>
                                        <p>

                                            <span class="bold-text-sm">Customer’s Mobile No. :</span><span
                                                class="slip-detail-text-sm">&nbsp;0754265235</span>
                                        </p>
                                        <p>

                                            <span class="bold-text-sm">Customer’s Email :</span><span
                                                class="slip-detail-text-sm">&nbsp;Dimo@wurthlanka.lk</span>
                                        </p>

                                        <p>
                                            <span class="bold-text-sm">Customer’s Address :</span><span
                                                class="slip-detail-text-sm">&nbsp;No.321, Colombo 07</span>
                                        </p>
                                    </div>


                                    <div class="d-block">
                                        <div class="d-flex gap-2 mb-3">
                                            <button class="red-edit-button-sm">

                                                <svg width="13" height="12" viewBox="0 0 13 12" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M3 9.5H3.7125L8.6 4.6125L7.8875 3.9L3 8.7875V9.5ZM2 10.5V8.375L8.6 1.7875C8.7 1.69583 8.8105 1.625 8.9315 1.575C9.0525 1.525 9.1795 1.5 9.3125 1.5C9.4455 1.5 9.57467 1.525 9.7 1.575C9.82534 1.625 9.93367 1.7 10.025 1.8L10.7125 2.5C10.8125 2.59167 10.8855 2.7 10.9315 2.825C10.9775 2.95 11.0003 3.075 11 3.2C11 3.33333 10.9772 3.4605 10.9315 3.5815C10.8858 3.7025 10.8128 3.81283 10.7125 3.9125L4.125 10.5H2ZM8.2375 4.2625L7.8875 3.9L8.6 4.6125L8.2375 4.2625Z"
                                                        fill="white" />
                                                </svg>

                                                Edit
                                            </button>

                                            <button class="grey-undo-button-sm">

                                                <svg width="14" height="2" viewBox="0 0 14 2" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M1 2C0.71667 2 0.479337 1.904 0.288004 1.712C0.0966702 1.52 0.000670115 1.28267 3.44827e-06 1C-0.000663218 0.717333 0.0953369 0.48 0.288004 0.288C0.48067 0.0960001 0.718003 0 1 0H13C13.2833 0 13.521 0.0960001 13.713 0.288C13.905 0.48 14.0007 0.717333 14 1C13.9993 1.28267 13.9033 1.52033 13.712 1.713C13.5207 1.90567 13.2833 2.00133 13 2H1Z"
                                                        fill="#8C8C8C" />
                                                </svg>


                                            </button>
                                        </div>
                                    </div>

                                </div>

                                <div class="details-card">
                                    <div>
                                        <p>

                                            <span class="bold-text-sm">Customer Name :</span>
                                            <span class="slip-detail-text-sm">&nbsp;Dimo Lanka -
                                                Colombo</span>
                                        </p>
                                        <p>

                                            <span class="bold-text-sm">Customer’s Mobile No. :</span><span
                                                class="slip-detail-text-sm">&nbsp;0754265235</span>
                                        </p>
                                        <p>

                                            <span class="bold-text-sm">Customer’s Email :</span><span
                                                class="slip-detail-text-sm">&nbsp;Dimo@wurthlanka.lk</span>
                                        </p>

                                        <p>
                                            <span class="bold-text-sm">Customer’s Address :</span><span
                                                class="slip-detail-text-sm">&nbsp;No.321, Colombo 07</span>
                                        </p>
                                    </div>


                                    <div class="d-block">
                                        <div class="d-flex gap-2 mb-3">
                                            <button class="red-edit-button-sm">

                                                <svg width="13" height="12" viewBox="0 0 13 12" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M3 9.5H3.7125L8.6 4.6125L7.8875 3.9L3 8.7875V9.5ZM2 10.5V8.375L8.6 1.7875C8.7 1.69583 8.8105 1.625 8.9315 1.575C9.0525 1.525 9.1795 1.5 9.3125 1.5C9.4455 1.5 9.57467 1.525 9.7 1.575C9.82534 1.625 9.93367 1.7 10.025 1.8L10.7125 2.5C10.8125 2.59167 10.8855 2.7 10.9315 2.825C10.9775 2.95 11.0003 3.075 11 3.2C11 3.33333 10.9772 3.4605 10.9315 3.5815C10.8858 3.7025 10.8128 3.81283 10.7125 3.9125L4.125 10.5H2ZM8.2375 4.2625L7.8875 3.9L8.6 4.6125L8.2375 4.2625Z"
                                                        fill="white" />
                                                </svg>

                                                Edit
                                            </button>

                                            <button class="grey-undo-button-sm">

                                                <svg width="14" height="2" viewBox="0 0 14 2" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M1 2C0.71667 2 0.479337 1.904 0.288004 1.712C0.0966702 1.52 0.000670115 1.28267 3.44827e-06 1C-0.000663218 0.717333 0.0953369 0.48 0.288004 0.288C0.48067 0.0960001 0.718003 0 1 0H13C13.2833 0 13.521 0.0960001 13.713 0.288C13.905 0.48 14.0007 0.717333 14 1C13.9993 1.28267 13.9033 1.52033 13.712 1.713C13.5207 1.90567 13.2833 2.00133 13 2H1Z"
                                                        fill="#8C8C8C" />
                                                </svg>


                                            </button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>











            <div class="col-md-6">
                <div>
                    <p class="card-section-title">Customer Name</p>

                    <div class="d-flex search-div align-items-center">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M16.893 16.92L19.973 20M19 11.5C19 13.4891 18.2098 15.3968 16.8033 16.8033C15.3968 18.2098 13.4891 19 11.5 19C9.51088 19 7.60322 18.2098 6.1967 16.8033C4.79018 15.3968 4 13.4891 4 11.5C4 9.51088 4.79018 7.60322 6.1967 6.1967C7.60322 4.79018 9.51088 4 11.5 4C13.4891 4 15.3968 4.79018 16.8033 6.1967C18.2098 7.60322 19 9.51088 19 11.5Z"
                                stroke="#AAB6C1" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <span class="w-100 mx-3">
                            <input type="text" id="search-input" onkeyup="filterCheckboxes()"
                                class="search-invoices-input" placeholder="Select Invoice">
                        </span>

                    </div>


                    <div class="mt-4">
                        <div class="card customer-payment-card">

                            <div class="card-body d-flex flex-column invoices-card">
                                <h5 class="card-title ps-3 m-0">Choose Invoices</h5>

                                <table class="table">
                                    <thead>
                                        <tr class="searchable-table-header">

                                            <th scope="col column-title">Full Name</th>
                                            <th scope="col column-title">Invoice Number</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="checkbox-item" data-name="Apple">
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="item1" name="item1">
                                                    <label class="form-check-label ms-2" for="item1">
                                                        John
                                                    </label>
                                                </div>
                                            </td>
                                            <td>6567878</td>
                                        </tr>


                                        <tr class="checkbox-item" data-name="Banana">
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="item2" name="item2">
                                                    <label class="form-check-label ms-2" for="item2">
                                                        George
                                                    </label>
                                                </div>
                                            </td>
                                            <td>6567879</td>
                                        </tr>

                                        <tr class="checkbox-item" data-name="Grapes">
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="item3" name="item3">
                                                    <label class="form-check-label ms-2" for="item3">
                                                        Sam
                                                    </label>
                                                </div>
                                            </td>
                                            <td>6567880</td>
                                        </tr>

                                        <tr class="checkbox-item" data-name="Apple">
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="item4" name="item4">
                                                    <label class="form-check-label ms-2" for="item4">
                                                        Nimal
                                                    </label>
                                                </div>
                                            </td>
                                            <td>6567881</td>
                                        </tr>

                                        <tr class="checkbox-item" data-name="Strawberry">
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="item5" name="item5">
                                                    <label class="form-check-label ms-2" for="item5">
                                                        Yot
                                                    </label>
                                                </div>
                                            </td>
                                            <td>6567882</td>
                                        </tr>



                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>






    </div>


</div>
@endsection
@section('bottom-bar')
<div class="action-button-lg-row ">
    <a href="{{ url('add-new-collection')}}">
        <button class="black-action-btn-lg mb-3 ">
            Cancel
        </button>
    </a>

    <a href="{{ url('invoices-inner') }}">
        <button class="red-action-btn-lg mb-3">
            Submit
        </button>
    </a>

</div>
@endsection



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>



<script>
    $(document).ready(function() {
        $('#multi-select-dropdown').select2({
            placeholder: "Select Customer",
            allowClear: true
        });
    });
</script>

<script>
    function filterCheckboxes() {
        // Get the search input value and convert to lowercase for case-insensitive matching
        const searchInput = document.getElementById('search-input').value.toLowerCase();

        // Get all the checkbox items
        const checkboxItems = document.querySelectorAll('.checkbox-item');

        // Loop through each item to check if it matches the search query
        checkboxItems.forEach(item => {
            // Get the data-name attribute, which contains the text to be searched
            const itemName = item.getAttribute('data-name').toLowerCase();

            // Check if the item's name includes the search input
            if (itemName.includes(searchInput)) {
                // If it matches, remove the 'hidden' class to show the item
                item.classList.remove('hidden');
            } else {
                // If it doesn't match, add the 'hidden' class to hide the item
                item.classList.add('hidden');
            }
        });
    }
</script>