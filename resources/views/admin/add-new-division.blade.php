@extends('welcome')
@section('content')


<div class="main-wrapper">
    <div class="p-4 pt-0">
        <div class="col-lg-6 col-12">
            <h1 class="header-title">Add New Division</h1>
        </div>

        <hr class="red-line">

        <form>
            <div class="pe-5">
                <!-- <div class="d-flex flex-row justify-content-between">
                                <div class="mb-3 col-6">
                                    <label for="division-input" class="form-label custom-input-label">Division
                                        Name</label>
                                    <input type="text" class="form-control custom-input" id="division-input"
                                        placeholder="Division Name">
                                </div>


                                <div class="btn-group col-6 d-flex justify-content-end">
                                    <div class="mb-3 ">
                                        <label for="head-of-division-select" class="form-label custom-input-label">Head
                                            of
                                            Division
                                        </label>
                                        <select class="form-select custom-input" aria-label="Default select example"
                                            id="head-of-division-select">
                                            <option class=".custom-input-option" selected>Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>
                            </div>


                            <div class="mb-3 col-12">
                                <label for="head-of-division-select" class="form-label custom-input-label">Division Description
                                </label>
                                <textarea class="form-control division-description" placeholder="Division Description" style="height: 152px"></textarea>

                            </div> -->
                <div class="row d-flex justify-content-between">
                    <div class="mb-4 col-12 col-lg-6">
                        <label for="division-input" class="form-label custom-input-label">
                            Division Name</label>
                        <input type="text" class="form-control custom-input" id="division-input"
                            placeholder="Division Name">
                    </div>





                    <div class="mb-4 col-12">
                        <label for="head-of-division-select" class="form-label custom-input-label">Division Description
                        </label>
                        <textarea class="form-control division-description" placeholder="Division Description" style="height: 152px"></textarea>
                    </div>
                </div>
                {{-- <div class="col-12 d-flex justify-content-end division-action-btn gap-3">
                    <button class="btn btn-dark cancel">Cancel</button>
                    <button class="btn btn-danger submit">Submit</button>
                </div> --}}

            </div>

        </form>
    </div>

</div>
@endsection
@section('bottom-bar')

<div
        class="action-button-lg-row">
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
            Division added successfully
        </div>
        <button type="button" class="btn-close btn-close-white me-2 m-auto" aria-label="Close"
            onclick="document.getElementById('user-toast').style.display='none';"></button>
    </div>
</div>




<script>
    // Cancel button redirect
    document.querySelector('.cancel').addEventListener('click', function(e) {
        e.preventDefault();
        window.location.href = 'admin-division-management';
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
