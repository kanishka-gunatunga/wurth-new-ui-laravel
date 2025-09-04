@extends('welcome')

@section('content')
    <style>
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
                <label for="head-of-division-select" class="form-label custom-input-label">User
                    Level
                </label>
                <select class="form-select custom-input" aria-label="Default select example" id="head-of-division-select">
                    <option class=".custom-input-option" selected>Choose User Level</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>


            <div class="row">
                <div class="col-12 mt-4 mb-3">
                    <label for="head-of-division-select permission"
                        class="form-label custom-input-label">Permissions</label>
                </div>
                <div class="col-3 ps-4">
                    <div class="row access-control-checks">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                View User List
                            </label>
                        </div>


                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Add User
                            </label>
                        </div>



                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Edit User
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Deactivate User
                            </label>
                        </div>

                    </div>
                </div>

                <div class="col-3">
                    <div class="row access-control-checks">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                View Invoice
                            </label>
                        </div>


                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Add Invoice
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Edit Invoice
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Generate Reports
                            </label>
                        </div>

                    </div>
                </div>



                <div class="col-3">
                    <div class="row access-control-checks">



                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Generate Reports
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Export Reports
                            </label>
                        </div>


                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Access Activity Logs
                            </label>
                        </div>

                    </div>
                </div>




                <div class="col-3">
                    <div class="row access-control-checks">



                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Generate Reports
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Export Reports
                            </label>
                        </div>


                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Access Activity Logs
                            </label>
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

