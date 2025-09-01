@extends('welcome')
@section('content')
    <div class="main-wrapper">
        <div class="p-4 pt-0">
            <div class="col-lg-6 col-12">
                <h1 class="header-title">Return Cheque</h1>
            </div>

            <hr class="red-line">


            <form>

                <div class="row d-flex justify-content-between">
                    <div class="mb-4 col-12 col-lg-6">
                        <label for="head-of-division-select" class="form-label custom-input-label">
                            Select ADM Name
                        </label>

                        <div class="dropdown w-100">
                            <button class="btn custom-dropdown w-100 text-start d-flex align-items-center" type="button"
                                id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">

                                <!-- Search Icon -->
                                <img src="/public/images/search-icon.svg" alt="Search" class="me-2"
                                    style="width:16px; height:16px;">

                                <!-- Text -->
                                <span class="flex-grow-1">Search ADM Name</span>

                                <!-- Custom Arrow -->
                                <span class="custom-arrow ms-auto"></span>
                            </button>

                            <ul class="dropdown-menu custom-dropdown-menu w-100" aria-labelledby="dropdownMenuButton">
                                <li><a class="dropdown-item" href="#">Head of Division</a></li>
                                <li><a class="dropdown-item" href="#">Finance Manager</a></li>
                                <li><a class="dropdown-item" href="#">Recovery Manager</a></li>
                                <li><a class="dropdown-item" href="#">System Administrator</a></li>
                                <li><a class="dropdown-item" href="#">Regional Sales Manager</a></li>
                                <li><a class="dropdown-item" href="#">ADM</a></li>
                                <li><a class="dropdown-item" href="#">Area Sales Manager</a></li>
                                <li><a class="dropdown-item" href="#">Team Leader</a></li>
                            </ul>
                        </div>
                    </div>


                    <div class="mb-4 col-12 col-lg-6">
                        <label for="head-of-division-select" class="form-label custom-input-label">
                            Return Cheque Number
                        </label>

                        <div class="dropdown w-100">
                            <button class="btn custom-dropdown w-100 text-start" type="button" id="dropdownMenuButton"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Return Cheque Number
                                <span class="custom-arrow"></span>
                            </button>
                            <ul class="dropdown-menu custom-dropdown-menu w-100" aria-labelledby="dropdownMenuButton">
                                <li><a class="dropdown-item" href="#">Head of Division</a></li>
                                <li><a class="dropdown-item" href="#">Finance Manager</a></li>
                                <li><a class="dropdown-item" href="#">Recovery Manager</a></li>
                                <li><a class="dropdown-item" href="#">System Administrator</a></li>
                                <li><a class="dropdown-item" href="#">Regional Sales Manager</a></li>
                                <li><a class="dropdown-item" href="#">ADM</a></li>
                                <li><a class="dropdown-item" href="#">Area Sales Manager</a></li>
                                <li><a class="dropdown-item" href="#">Team Leader</a></li>
                            </ul>
                        </div>
                    </div>



                    <div class="mb-4 col-12 col-lg-6">
                        <label for="division-input" class="form-label custom-input-label">Cheque Amount</label>
                        <input type="text" class="form-control custom-input" id="division-input"
                            placeholder="Cheque Amount">
                    </div>

                    <div class="mb-4 col-12 col-lg-6 position-relative">
                        <label for="returned-date-input" class="form-label custom-input-label">Returned
                            Date</label>
                        <div class="input-group">
                            <input type="text" class="form-control custom-input pr-5" id="division-input"
                                placeholder="Returned Date">
                            <img src="/public/images/calender-icon.svg" style="width:18px; height:18px; top: 50%;"
                                class="input-icon">
                        </div>
                    </div>



                    <div class="mb-4 col-12 col-lg-6">
                        <label for="head-of-division-select" class="form-label custom-input-label">
                            Bank Name
                        </label>

                        <div class="dropdown w-100">
                            <button class="btn custom-dropdown w-100 text-start" type="button" id="dropdownMenuButton"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Enter Bank Name
                                <span class="custom-arrow"></span>
                            </button>
                            <ul class="dropdown-menu custom-dropdown-menu w-100" aria-labelledby="dropdownMenuButton">
                                <li><a class="dropdown-item" href="#">Head of Division</a></li>
                                <li><a class="dropdown-item" href="#">Finance Manager</a></li>
                                <li><a class="dropdown-item" href="#">Recovery Manager</a></li>
                                <li><a class="dropdown-item" href="#">System Administrator</a></li>
                                <li><a class="dropdown-item" href="#">Regional Sales Manager</a></li>
                                <li><a class="dropdown-item" href="#">ADM</a></li>
                                <li><a class="dropdown-item" href="#">Area Sales Manager</a></li>
                                <li><a class="dropdown-item" href="#">Team Leader</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="mb-4 col-12 col-lg-6">
                        <label for="head-of-division-select" class="form-label custom-input-label">
                            Branch
                        </label>

                        <div class="dropdown w-100">
                            <button class="btn custom-dropdown w-100 text-start" type="button" id="dropdownMenuButton"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Branch
                                <span class="custom-arrow"></span>
                            </button>
                            <ul class="dropdown-menu custom-dropdown-menu w-100" aria-labelledby="dropdownMenuButton">
                                <li><a class="dropdown-item" href="#">One</a></li>
                                <li><a class="dropdown-item" href="#">Two</a></li>
                                <li><a class="dropdown-item" href="#">Three</a></li>

                            </ul>
                        </div>
                    </div>

                    <div class="mb-4 col-12 col-lg-6">
                        <label for="head-of-division-select" class="form-label custom-input-label">
                            Select Return Type
                        </label>

                        <div class="dropdown w-100">
                            <button class="btn custom-dropdown w-100 text-start" type="button" id="dropdownMenuButton"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Select Return Type
                                <span class="custom-arrow"></span>
                            </button>
                            <ul class="dropdown-menu custom-dropdown-menu w-100" aria-labelledby="dropdownMenuButton">
                                <li><a class="dropdown-item" href="#">One</a></li>
                                <li><a class="dropdown-item" href="#">Two</a></li>
                                <li><a class="dropdown-item" href="#">Three</a></li>

                            </ul>
                        </div>
                    </div>

                    <div class="mb-4 col-12 col-lg-6 position-relative">
                        <label for="returned-date-input" class="form-label custom-input-label">Reason</label>
                        <div class="input-group">
                            <input type="text" class="form-control custom-input pr-5" id="division-input"
                                placeholder="Reason">
                            <img src="/public/images/reason-icon.svg"
                                style="width:18px; height:18px; top: 80%; right: 1px;" class="input-icon">
                        </div>
                    </div>
                </div>

                <div class="col-12 d-flex justify-content-end division-action-btn gap-3">
                    <button class="btn btn-dark cancel">Cancel</button>
                    <button class="btn btn-danger submit">Submit</button>
                </div>

        </div>

        </form>
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
                Submitted successfully
            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" aria-label="Close"
                onclick="document.getElementById('user-toast').style.display='none';"></button>
        </div>
    </div>




    <script>
        document.querySelectorAll('.dropdown').forEach(dropdown => {
            const button = dropdown.querySelector('.custom-dropdown');
            const items = dropdown.querySelectorAll('.dropdown-item');

            items.forEach(item => {
                item.addEventListener('click', function(e) {
                    e.preventDefault();
                    button.innerHTML = this.textContent + '<span class="custom-arrow"></span>';
                });
            });
        });
    </script>

    <script>
        // Cancel button redirect
        document.querySelector('.cancel').addEventListener('click', function(e) {
            e.preventDefault();
            window.location.href = 'return-cheques.html';
        });
    </script>

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
