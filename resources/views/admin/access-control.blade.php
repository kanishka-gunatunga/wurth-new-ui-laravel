@extends('welcome')

@section('content')
<style>
    .form-check {
        display: flex;
        align-items: center;
        /* vertically center label with checkbox */
        gap: 0.5rem;
        /* spacing between checkbox and label */
        margin-bottom: 0.75rem;
        /* vertical spacing between items */
    }

    .access-control-checks .form-check-input {
        height: 20px;
        width: 20px;
        border-color: #D2D5DA;
        margin-right: 15px;
    }

    .access-control-checks .form-check-input:focus {
        border-color: #dc3545 !important;
        outline: 0 !important;
        box-shadow: 0 0 0 2.1px #dc354533 !important;
    }

    .access-control-checks .form-check-input:checked {
        background-color: #dc3545 !important;
        border-color: #dc3545 !important;
    }

    .access-control-checks .form-check-label {
        font-family: "Inter", sans-serif;
        font-size: 20px;
        font-weight: 400;


    }
</style>


<div class="main-wrapper">

    <div class="row d-flex justify-content-between">
        <div class="col-lg-6 col-12">
            <h1 class="header-title">Access Control</h1>
        </div>
    </div>

    <hr class="red-line mt-0">
    <form action="">



        <div class="mb-4 col-12 col-lg-6">
            <label for="head-of-division-select" class="form-label custom-input-label">
                User Level
            </label>
            <div class="dropdown w-100">
                <button class="btn custom-dropdown w-100 text-start" type="button" id="head-of-division-select"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    Choose User Level
                    <span class="custom-arrow"></span>
                </button>
                <ul class="dropdown-menu custom-dropdown-menu w-100" aria-labelledby="head-of-division-select">
                    <li><a class="dropdown-item" href="#">One</a></li>
                    <li><a class="dropdown-item" href="#">Two</a></li>
                    <li><a class="dropdown-item" href="#">Three</a></li>
                </ul>
            </div>
        </div>



        <div class="row">
            <div class="col-12 mt-4 mb-3">
                <label for="head-of-division-select-permission" class="form-label custom-input-label">
                    Permissions
                </label>
            </div>

            <!-- Column 1 -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 ps-4">
                <div class="row access-control-checks">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="viewUserList">
                        <label class="form-check-label" for="viewUserList">View User List</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="addUser">
                        <label class="form-check-label" for="addUser">Add User</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="editUser">
                        <label class="form-check-label" for="editUser">Edit User</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="deactivateUser">
                        <label class="form-check-label" for="deactivateUser">Deactivate User</label>
                    </div>
                </div>
            </div>

            <!-- Column 2 -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="row access-control-checks">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="viewInvoice">
                        <label class="form-check-label" for="viewInvoice">View Invoice</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="addInvoice">
                        <label class="form-check-label" for="addInvoice">Add Invoice</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="editInvoice">
                        <label class="form-check-label" for="editInvoice">Edit Invoice</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="generateReports">
                        <label class="form-check-label" for="generateReports">Generate Reports</label>
                    </div>
                </div>
            </div>

            <!-- Column 3 -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="row access-control-checks">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="generateReports2">
                        <label class="form-check-label" for="generateReports2">Generate Reports</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="exportReports">
                        <label class="form-check-label" for="exportReports">Export Reports</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="accessLogs">
                        <label class="form-check-label" for="accessLogs">Access Activity Logs</label>
                    </div>
                </div>
            </div>

            <!-- Column 4 -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="row access-control-checks">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="generateReports3">
                        <label class="form-check-label" for="generateReports3">Generate Reports</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="exportReports2">
                        <label class="form-check-label" for="exportReports2">Export Reports</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="accessLogs2">
                        <label class="form-check-label" for="accessLogs2">Access Activity Logs</label>
                    </div>
                </div>
            </div>
        </div>





    </form>

</div>

@endsection
@section('bottom-bar')
<div class="action-button-lg-row" style="margin-top: 55px">

    <button class="red-action-btn-lg submit">
        Update User
    </button>
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
            Update user successfully
        </div>
        <button type="button" class="btn-close btn-close-white me-2 m-auto" aria-label="Close"
            onclick="document.getElementById('user-toast').style.display='none';"></button>
    </div>
</div>


<script>
    // Show toast on submit
    document.querySelector('.submit').addEventListener('click', function(e) {
        e.preventDefault();
        const toast = document.getElementById('user-toast');
        toast.style.display = 'block';
        setTimeout(() => {
            toast.style.display = 'none';
        }, 3000);
    });
</script>
@endsection