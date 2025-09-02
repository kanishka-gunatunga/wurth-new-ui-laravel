<!-- <style>
    
    

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
            <h1 class="header-title">Create Reminder</h1>
        </div>

        <hr class="red-line">


        <form>

            <!-- <div class="row d-flex justify-content-between">
                            <div class="mb-4 col-12 col-lg-6">
                                <label for="division-input" class="form-label custom-input-label">Send From</label>
                                <input type="text" class="form-control custom-input" id="division-input"
                                    placeholder="L.K Perera">
                            </div>

                            <div class="mb-4 col-12 col-lg-6 position-relative">
                                <label for="returned-date-input" class="form-label custom-input-label">Reason</label>
                                <div class="input-group">
                                    <input type="text" class="form-control custom-input pr-5" id="division-input"
                                        placeholder="Enter the reason">
                                </div>
                            </div>


                            <div class="mb-4 col-12 col-lg-6">
                                <label for="head-of-division-select" class="form-label custom-input-label">
                                    Send to
                                </label>

                                <div class="dropdown w-100">
                                    <button class="btn custom-dropdown w-100 text-start" type="button"
                                        id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                        Select Sender
                                        <span class="custom-arrow"></span>
                                    </button>
                                    <ul class="dropdown-menu custom-dropdown-menu w-100"
                                        aria-labelledby="dropdownMenuButton">
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

                            <div class="mb-4 col-12 col-lg-6 position-relative">
                                <label for="returned-date-input" class="form-label custom-input-label">Returned
                                    Date</label>
                                <div class="input-group">
                                    <input type="text" class="form-control custom-input pr-5" id="division-input"
                                        placeholder="Returned Date">
                                    <img src="/public/images/calender-icon.svg"
                                        style="width:18px; height:18px; top: 50%;" class="input-icon">
                                </div>
                            </div>
                        </div> -->


            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="mb-4">
                        <label for="division-input" class="form-label custom-input-label">Send From</label>
                        <input type="text" class="form-control custom-input" id="division-input"
                            placeholder="L.K Perera">
                    </div>
                    <div class="mb-4">
                        <label for="head-of-division-select" class="form-label custom-input-label">
                            Send to
                        </label>

                        <div class="dropdown w-100">
                            <button class="btn custom-dropdown w-100 text-start" type="button" id="dropdownMenuButton"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Select Sender
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

                    <div class="mb-4">
                        <label for="returned-date-input" class="form-label custom-input-label">Returned
                            Date</label>
                        <div class="input-group">
                            <input type="text" class="form-control custom-input pr-5" id="division-input"
                                placeholder="Returned Date">
                            <img src="/public/images/calender-icon.svg" style="width:18px; height:18px; top: 50%;"
                                class="input-icon">
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <div class="mb-4">
                        <label for="reason-textarea" class="form-label">Reason</label>
                        <textarea class="form-control" id="reason-textarea" rows="10" placeholder="Enter the reason description"></textarea>
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
            Reminder created successfully
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
        window.location.href = 'notifications.html';
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