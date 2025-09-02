@extends('welcome')
@section('content')
    <!-- <style>
            .custom-input,
            .custom-input option {
                
                height: 50px;
                padding: 14px;
                border-radius: 4px;
                border: 1px solid;
                border-color: #9D9D9D;
                background-color: #FFFFFF;
                color: #AAB6C1;
                font-family: "Poppins", sans-serif;
                font-size: 13px;
                font-weight: 400;
            }

            .custom-input::placeholder,
            .division-description::placeholder {
                color: #9D9D9D;
            }

            .outside-label {
                font-size: 16px !important;
                color: #9D9D9D;

            }

            .custom-input-label,
            .outside-label {
                font-family: "Poppins", sans-serif;
                font-size: 18px;
                font-weight: 500;
            }

            .division-action-btn{
                margin-top: 150px;
            }
            .division-action-btn .submit,
            .division-action-btn .cancel {
                width: 262px;
                height: 52px;
                padding: 15.62px;
                border-radius: 5.47px;
                color: #FFFFFF;
                font-family: "Inter", sans-serif;
                font-size: 18px;
                font-weight: 600;

                display: flex;
                align-items: center;
                justify-content: center;
            }

            .division-action-btn .submit {
                background-color: #CC0000;
            }

            .division-action-btn .cancel {
                background-color: #000000;
            }
        </style> -->


    <div class="main-wrapper">
        <div class="p-4 pt-0">
            <div class="col-lg-6 col-12">
                <h1 class="header-title">Add Customer</h1>
            </div>

            <hr class="red-line">


            <form>

                <div class="row d-flex justify-content-between">

                    <div class="mb-4 col-12 col-lg-6">
                        <label for="division-input" class="form-label custom-input-label">Customer ID</label>
                        <input type="tel" class="form-control custom-input" id="division-input"
                            placeholder="Customer ID">
                    </div>

                    <div class="mb-4 col-12 col-lg-6">
                        <label for="division-input" class="form-label custom-input-label">
                            Full Name</label>
                        <input type="text" class="form-control custom-input" id="division-input" placeholder="full Name">
                    </div>

                    <div class="mb-4 col-12 col-lg-6">
                        <label for="division-input" class="form-label custom-input-label">Address</label>
                        <input type="tel" class="form-control custom-input" id="division-input" placeholder="Address">
                    </div>

                    <div class="mb-4 col-12 col-lg-6">
                        <label for="division-input" class="form-label custom-input-label">Mobile Number</label>
                        <input type="tel" class="form-control custom-input" id="division-input"
                            placeholder="Mobile number">
                    </div>

                    <div class="mb-4 col-12 col-lg-6">
                        <label for="division-input" class="form-label custom-input-label">Email Address</label>
                        <input type="email" class="form-control custom-input" id="division-input"
                            placeholder="Email Address">
                    </div>


                    <div class="mb-4 col-12 col-lg-6">
                        <label for="division-input" class="form-label custom-input-label">WhatsApp
                            Number</label>
                        <input type="text" class="form-control custom-input" id="division-input"
                            placeholder="WhatsApp Numberr">
                    </div>

                    <div class="mb-4 col-12 col-lg-6">
                        <label for="head-of-division-select" class="form-label custom-input-label">
                            Select ADM
                        </label>

                        <div class="dropdown w-100">
                            <button class="btn custom-dropdown w-100 text-start" type="button" id="dropdownMenuButton"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Select ADM
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
                            Secondary ADM
                        </label>

                        <div class="dropdown w-100">
                            <button class="btn custom-dropdown w-100 text-start" type="button" id="dropdownMenuButton"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Select Secondary ADM
                                <span class="custom-arrow"></span>
                            </button>
                            <ul class="dropdown-menu custom-dropdown-menu w-100" aria-labelledby="dropdownMenuButton">
                                <li><a class="dropdown-item" href="#">One</a></li>
                                <li><a class="dropdown-item" href="#">Two</a></li>
                                <li><a class="dropdown-item" href="#">Three</a></li>

                            </ul>
                        </div>
                    </div>


                </div>

                <div class="mb-4 col-12 col-lg-6">
                    <label for="division-input" class="form-label custom-input-label">Contact Person
                        Name</label>
                    <input type="tel" class="form-control custom-input" id="division-input"
                        placeholder="Contact Person Name">
                </div>



                {{-- <div class="col-12 d-flex justify-content-end division-action-btn gap-3">
                    <button class="btn btn-dark cancel">Cancel</button>
                    <button class="btn btn-danger submit">Submit</button>
                </div> --}}

        </div>

        </form>
    </div>
@endsection
@section('bottom-bar')
    <div class="action-button-lg-row">
        <button class="black-action-btn-lg mb-3 cancel">
            Cancel
        </button>



        <button class="red-action-btn-lg mb-3 submit">
            Submit
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
                Customer added successfully
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
            window.location.href = 'customers.html';
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
