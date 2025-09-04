@extends('welcome')

@section('content')
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

                    <div class="d-flex search-div align-items-center">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M16.893 16.92L19.973 20M19 11.5C19 13.4891 18.2098 15.3968 16.8033 16.8033C15.3968 18.2098 13.4891 19 11.5 19C9.51088 19 7.60322 18.2098 6.1967 16.8033C4.79018 15.3968 4 13.4891 4 11.5C4 9.51088 4.79018 7.60322 6.1967 6.1967C7.60322 4.79018 9.51088 4 11.5 4C13.4891 4 15.3968 4.79018 16.8033 6.1967C18.2098 7.60322 19 9.51088 19 11.5Z"
                                stroke="#AAB6C1" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <span class="w-100 mx-3 search-select">
                            <select id="multi-select-dropdown" name="states[]" multiple="multiple">
                                <option value="AL">Alabama</option>
                                <option value="CA">California</option>
                                <option value="FL">Florida</option>
                                <option value="NY">New York</option>
                                <option value="TX">Texas</option>
                                <option value="WA">Washington</option>
                            </select>
                        </span>
                        <span>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M12.7073 15.7073C12.5198 15.8948 12.2655 16.0001 12.0003 16.0001C11.7352 16.0001 11.4809 15.8948 11.2933 15.7073L5.63634 10.0503C5.54083 9.9581 5.46465 9.84775 5.41224 9.72575C5.35983 9.60374 5.33225 9.47252 5.33109 9.33974C5.32994 9.20696 5.35524 9.07529 5.40552 8.95239C5.4558 8.82949 5.53006 8.71784 5.62395 8.62395C5.71784 8.53006 5.82949 8.4558 5.95239 8.40552C6.07529 8.35524 6.20696 8.32994 6.33974 8.33109C6.47252 8.33225 6.60374 8.35983 6.72575 8.41224C6.84775 8.46465 6.9581 8.54083 7.05034 8.63634L12.0003 13.5863L16.9503 8.63634C17.1389 8.45418 17.3915 8.35339 17.6537 8.35567C17.9159 8.35795 18.1668 8.46312 18.3522 8.64852C18.5376 8.83393 18.6427 9.08474 18.645 9.34694C18.6473 9.60914 18.5465 9.86174 18.3643 10.0503L12.7073 15.7073Z"
                                    fill="#AAB6C1" />
                            </svg>

                        </span>
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

                                            <td><input type="checkbox" id="item1" name="item1"><span
                                                    class="ms-2">John</span></td>
                                            <td>6567878</td>
                                        </tr>

                                        <tr class="checkbox-item" data-name="Banana">

                                            <td><input type="checkbox" id="item2" name="item2"><span
                                                    class="ms-2">George</span></td>
                                            <td>6567879</td>
                                        </tr>

                                        <tr class="checkbox-item" data-name="Grapes">

                                            <td><input type="checkbox" id="item3" name="item3"><span
                                                    class="ms-2">Sam</span></td>
                                            <td>6567880</td>
                                        </tr>

                                        <tr class="checkbox-item" data-name="Apple">

                                            <td><input type="checkbox" id="item4" name="item4"><span
                                                    class="ms-2">Nimal</span></td>
                                            <td>6567881</td>
                                        </tr>

                                        <tr class="checkbox-item" data-name="Strawberry">

                                            <td><input type="checkbox" id="item5" name="item5"><span
                                                    class="ms-2">Yot</span></td>
                                            <td>6567882</td>
                                        </tr>
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