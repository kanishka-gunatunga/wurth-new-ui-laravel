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
                                <svg width="25" height="24" viewBox="0 0 25 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M17.393 16.92L20.473 20M19.5 11.5C19.5 13.4891 18.7098 15.3968 17.3033 16.8033C15.8968 18.2098 13.9891 19 12 19C10.0109 19 8.10322 18.2098 6.6967 16.8033C5.29018 15.3968 4.5 13.4891 4.5 11.5C4.5 9.51088 5.29018 7.60322 6.6967 6.1967C8.10322 4.79018 10.0109 4 12 4C13.9891 4 15.8968 4.79018 17.3033 6.1967C18.7098 7.60322 19.5 9.51088 19.5 11.5Z"
                                        stroke="#AAB6C1" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>


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
    <label for="returned-date-input" class="form-label custom-input-label">Returned Date</label>
    <div class="input-group">
        <input type="text" class="form-control custom-input pr-5" id="division-input"
            placeholder="Returned Date">
        
        <!-- Replaced <img> with inline SVG -->
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 25 24" 
            fill="none" class="input-icon1" style="top: 50%;">
            <path d="M9 14C9.33152 14 9.64946 13.8683 9.88388 13.6339C10.1183 13.3995 10.25 13.0815 10.25 12.75C10.25 12.4185 10.1183 12.1005 9.88388 11.8661C9.64946 11.6317 9.33152 11.5 9 11.5C8.66848 11.5 8.35054 11.6317 8.11612 11.8661C7.8817 12.1005 7.75 12.4185 7.75 12.75C7.75 13.0815 7.8817 13.3995 8.11612 13.6339C8.35054 13.8683 8.66848 14 9 14ZM9 17.5C9.33152 17.5 9.64946 17.3683 9.88388 17.1339C10.1183 16.8995 10.25 16.5815 10.25 16.25C10.25 15.9185 10.1183 15.6005 9.88388 15.3661C9.64946 15.1317 9.33152 15 9 15C8.66848 15 8.35054 15.1317 8.11612 15.3661C7.8817 15.6005 7.75 15.9185 7.75 16.25C7.75 16.5815 7.8817 16.8995 8.11612 17.1339C8.35054 17.3683 8.66848 17.5 9 17.5ZM13.75 12.75C13.75 13.0815 13.6183 13.3995 13.3839 13.6339C13.1495 13.8683 12.8315 14 12.5 14C12.1685 14 11.8505 13.8683 11.6161 13.6339C11.3817 13.3995 11.25 13.0815 11.25 12.75C11.25 12.4185 11.3817 12.1005 11.6161 11.8661C11.8505 11.6317 12.1685 11.5 12.5 11.5C12.8315 11.5 13.1495 11.6317 13.3839 11.8661C13.6183 12.1005 13.75 12.4185 13.75 12.75ZM12.5 17.5C12.8315 17.5 13.1495 17.3683 13.3839 17.1339C13.6183 16.8995 13.75 16.5815 13.75 16.25C13.75 15.9185 13.6183 15.6005 13.3839 15.3661C13.1495 15.1317 12.8315 15 12.5 15C12.1685 15 11.8505 15.1317 11.6161 15.3661C11.3817 15.6005 11.25 15.9185 11.25 16.25C11.25 16.5815 11.3817 16.8995 11.6161 17.1339C11.8505 17.3683 12.1685 17.5 12.5 17.5ZM17.25 12.75C17.25 13.0815 17.1183 13.3995 16.8839 13.6339C16.6495 13.8683 16.3315 14 16 14C15.6685 14 15.3505 13.8683 15.1161 13.6339C14.8817 13.3995 14.75 13.0815 14.75 12.75C14.75 12.4185 14.8817 12.1005 15.1161 11.8661C15.3505 11.6317 15.6685 11.5 16 11.5C16.3315 11.5 16.6495 11.6317 16.8839 11.8661C17.1183 12.1005 17.25 12.4185 17.25 12.75Z" fill="#AAB6C1"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.5 3.25C8.69891 3.25 8.88968 3.32902 9.03033 3.46967C9.17098 3.61032 9.25 3.80109 9.25 4V4.75H15.75V4C15.75 3.80109 15.829 3.61032 15.9697 3.46967C16.1103 3.32902 16.3011 3.25 16.5 3.25C16.6989 3.25 16.8897 3.32902 17.0303 3.46967C17.171 3.61032 17.25 3.80109 17.25 4V4.758C17.402 4.762 17.5437 4.76933 17.675 4.78C18.055 4.81 18.411 4.878 18.748 5.05C19.2656 5.31367 19.6863 5.73445 19.95 6.252C20.122 6.589 20.19 6.945 20.22 7.325C20.25 7.69 20.25 8.135 20.25 8.67V16.33C20.25 16.865 20.25 17.31 20.22 17.675C20.19 18.055 20.122 18.411 19.95 18.748C19.6866 19.2654 19.2662 19.6862 18.749 19.95C18.411 20.122 18.055 20.19 17.675 20.22C17.31 20.25 16.865 20.25 16.331 20.25H8.67C8.135 20.25 7.69 20.25 7.325 20.22C6.945 20.19 6.589 20.122 6.252 19.95C5.73475 19.6869 5.31401 19.2668 5.05 18.75C4.878 18.412 4.81 18.056 4.78 17.676C4.75 17.311 4.75 16.866 4.75 16.332V8.67C4.75 8.135 4.75 7.69 4.78 7.325C4.81 6.945 4.878 6.589 5.05 6.252C5.31367 5.73445 5.73445 5.31367 6.252 5.05C6.589 4.878 6.945 4.81 7.325 4.78C7.45633 4.76933 7.598 4.762 7.75 4.758V4C7.75 3.90151 7.7694 3.80398 7.80709 3.71299C7.84478 3.62199 7.90003 3.53931 7.96967 3.46967C8.03931 3.40003 8.12199 3.34478 8.21299 3.30709C8.30398 3.2694 8.40151 3.25 8.5 3.25ZM7.75 6.5V6.258C7.64887 6.26111 7.54784 6.26678 7.447 6.275C7.16 6.298 7.023 6.34 6.933 6.386C6.69741 6.50591 6.50591 6.69741 6.386 6.933C6.34 7.023 6.298 7.16 6.275 7.447C6.251 7.743 6.25 8.127 6.25 8.7V9.25H18.75V8.7C18.75 8.128 18.75 7.743 18.725 7.447C18.702 7.16 18.66 7.023 18.614 6.933C18.4941 6.69741 18.3026 6.50591 18.067 6.386C17.977 6.34 17.84 6.298 17.552 6.275C17.4515 6.2668 17.3508 6.26113 17.25 6.258V6.5C17.25 6.69891 17.171 6.88968 17.0303 7.03033C16.8897 7.17098 16.6989 7.25 16.5 7.25C16.3011 7.25 16.1103 7.17098 15.9697 7.03033C15.829 6.88968 15.75 6.69891 15.75 6.5V6.25H9.25V6.5C9.25 6.69891 9.17098 6.88968 9.03033 7.03033C8.88968 7.17098 8.69891 7.25 8.5 7.25C8.30109 7.25 8.11032 7.17098 7.96967 7.03033C7.82902 6.88968 7.75 6.69891 7.75 6.5ZM18.75 10.25H6.25V16.3C6.25 16.872 6.25 17.257 6.275 17.552C6.298 17.84 6.34 17.977 6.386 18.067C6.506 18.303 6.697 18.494 6.933 18.614C7.023 18.66 7.16 18.702 7.447 18.725C7.743 18.749 8.127 18.75 8.7 18.75H16.3C16.872 18.75 17.257 18.75 17.552 18.725C17.84 18.702 17.977 18.66 18.067 18.614C18.3026 18.4941 18.4941 18.3026 18.614 18.067C18.66 17.977 18.702 17.84 18.725 17.552C18.749 17.257 18.75 16.872 18.75 16.3V10.25Z" fill="#AAB6C1"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M10.25 7.75C10.25 7.55109 10.329 7.36032 10.4697 7.21967C10.6103 7.07902 10.8011 7 11 7H14C14.1989 7 14.3897 7.07902 14.5303 7.21967C14.671 7.36032 14.75 7.55109 14.75 7.75C14.75 7.94891 14.671 8.13968 14.5303 8.28033C14.3897 8.42098 14.1989 8.5 14 8.5H11C10.8011 8.5 10.6103 8.42098 10.4697 8.28033C10.329 8.13968 10.25 7.94891 10.25 7.75Z" fill="#AAB6C1"/>
        </svg>
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
  <div class="input-group position-relative">
    <input type="text" class="form-control custom-input pr-5" id="division-input"
      placeholder="Reason">

    <!-- Inline SVG replacing the <img> -->
    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
      viewBox="0 0 26 25" fill="none" style="width:18px; height:18px; top: 80%; right: 1px;" class="input-icon1">
      <path d="M9.34562 20.2791L19.6854 20.2791L19.843 11.1961M13 21.9844L21.4738 21.9844L21.6315 13.5006" stroke="#9C9C9C"/>
    </svg>
  </div>
</div>

                </div>



        </div>

        </form>
    </div>
@endsection
@section('bottom-bar')
    <div class="action-button-lg-row ">
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
        window.location.href = 'return-cheques';
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
