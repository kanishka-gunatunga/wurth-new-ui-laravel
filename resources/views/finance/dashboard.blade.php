@extends('welcome')

@section('content')
<style>
    @media (max-width: 1125px) {
        .table-responsive {
            max-width: 25vw;
            /* table fits parent, allows some margin */
            overflow-x: auto;
            /* horizontal scroll if content overflows */
            -webkit-overflow-scrolling: touch;
        }

        .table-responsive table {
            width: 100%;
            /* table fills container */
            table-layout: auto;
        }
    }
</style>
<div class="main-wrapper">
    <h1 class="header-title">Dashboard</h1>

    <div class="dashboard-main-container">
        <div class="row gx-4 gy-3 dashboard-stats">


            <div class="col-md-2">
                <div class="stat-card p-3">
                    <p class="stat-label">Collection Target</p>
                    <h3 class="stat-number">LKR 545,500</h3>
                </div>
            </div>

            <div class="col-md-2">
                <div class="stat-card p-3">
                    <p class="stat-label">Verified deposit</p>
                    <h3 class="stat-number">LKR 1,100,000</h3>
                </div>
            </div>

            <div class="col-md-3">
                <div class="stat-card p-3">
                    <p class="stat-label"> Pending  deposit Verification</p>
                    <h3 class="stat-number">LKR 560,000</h3>
                </div>
            </div>

            <div class="col-md-2">
                <div class="stat-card p-3">
                    <p class="stat-label">On hand cash</p>
                    <h3 class="stat-number">LKR 389,500</h3>
                </div>
            </div>

            <div class="col-md-3">
                <div class="stat-card p-3">
                    <p class="stat-label">On hand cheques</p>
                    <h3 class="stat-number">LKR 143,000</h3>
                </div>
            </div>
        </div>




        <div class="row mt-4">
            <!-- Locked Users Section -->
            <div class="col-lg-6 col-md-12 mb-4">
                <div class="section-card">
                    <div class="card-body">
                        <h3 class="table-title">Recent Cash Deposits</h3>
                        <div class="table-responsive">
                            <table class="table unlock-column-table ">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>ADM Name</th>
                                        <th>ADM Number</th>
                                        <th>Amount</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>12 Dec 2024</td>
                                        <td>H.K Perera</td>
                                        <td>254565214</td>
                                        <td>Rs. 12,000.00</td>

                                    </tr>
                                    <tr>
                                        <td>12 Dec 2024</td>
                                        <td>Pasan Randula</td>
                                        <td>254565214</td>
                                        <td>Rs. 21,000.00</td>

                                    </tr>
                                    <tr>
                                        <td>12 Dec 2024</td>
                                        <td>H.K Perera</td>
                                        <td>254565214</td>
                                        <td>Rs. 14,000.00</td>

                                    </tr>
                                    <tr>
                                        <td>12 Dec 2024</td>
                                        <td>Pasan Randula</td>
                                        <td>254565214</td>
                                        <td>Rs. 15,000.00</td>

                                    </tr>
                                    <tr>
                                        <td>12 Dec 2024</td>
                                        <td>H.K Perera</td>
                                        <td>254565214</td>
                                        <td>Rs. 112,000.00</td>

                                    </tr>
                                </tbody>
                            </table>
                            </table>
                        </div>

                    </div>

                </div>
            </div>

            <div class="col-lg-6 col-md-12 mb-4">
                <div class="section-card">
                    <div class="card-body">
                        <h3 class="table-title">Recent Cheque Deposits</h3>
                        <div class="table-responsive">
                            <table class="table unlock-column-table ">
                                <thead>
                                    <tr>
                                        <th>Date <i class="sort-icon">▼</i></th>
                                        <th>ADM Name</th>
                                        <th>ADM Number</th>
                                        <th>Amount</th>
                                        <th>Payment Slip</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>12 Dec 2024</td>
                                        <td>H.K Perera</td>
                                        <td>254565214</td>
                                        <td>Rs. 12,000.00</td>
                                        <td>256554558</td>
                                    </tr>
                                    <tr>
                                        <td>12 Dec 2024</td>
                                        <td>Pasan Randula</td>
                                        <td>254565214</td>
                                        <td>Rs. 21,000.00</td>
                                        <td>256554558</td>
                                    </tr>
                                    <tr>
                                        <td>12 Dec 2024</td>
                                        <td>H.K Perera</td>
                                        <td>254565214</td>
                                        <td>Rs. 14,000.00</td>
                                        <td>256554558</td>
                                    </tr>
                                    <tr>
                                        <td>12 Dec 2024</td>
                                        <td>Pasan Randula</td>
                                        <td>254565214</td>
                                        <td>Rs. 15,000.00</td>
                                        <td>256554558</td>
                                    </tr>
                                    <tr>
                                        <td>12 Dec 2024</td>
                                        <td>H.K Perera</td>
                                        <td>254565214</td>
                                        <td>Rs. 112,000.00</td>
                                        <td>256554558</td>
                                    </tr>
                                </tbody>
                            </table>
                            </table>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection