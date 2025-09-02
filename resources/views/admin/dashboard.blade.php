
@extends('welcome')

@section('content')
      <div class="main-wrapper">
        <h1 class="header-title">Dashboard</h1>

        <div class="dashboard-main-container">
          <!-- Stats Cards - First Row -->
          <!-- <div class="row mb-4">
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-3">
              <div class="stat-card">
                <div class="stat-label">Total Users</div>
                <div class="stat-number">231</div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-3">
              <div class="stat-card">
                <div class="stat-label">Sales Representatives</div>
                <div class="stat-number">180</div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-3">
              <div class="stat-card">
                <div class="stat-label">Team Leaders</div>
                <div class="stat-number">12</div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-3">
              <div class="stat-card">
                <div class="stat-label">Area Sales Managers</div>
                <div class="stat-number">10</div>
              </div>
            </div>
          </div> -->

          <!-- Stats Cards - Second Row -->
          <!-- <div class="row mb-4">
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-3">
              <div class="stat-card">
                <div class="stat-label">Regional Sales Managers</div>
                <div class="stat-number">15</div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-3">
              <div class="stat-card">
                <div class="stat-label">Warehouse Managers</div>
                <div class="stat-number">2</div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-3">
              <div class="stat-card">
                <div class="stat-label">Finance Department Managers</div>
                <div class="stat-number">8</div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-3">
              <div class="stat-card">
                <div class="stat-label">Head of Division</div>
                <div class="stat-number">4</div>
              </div>
            </div>
          </div> -->

          <div class="row gx-4 gy-3 dashboard-stats">
            <div class="col-md-2">
              <div class="stat-card p-3">
                <p class="stat-label">Total Users</p>
                <h3 class="stat-number">231</h3>
              </div>
            </div>

            <div class="col-md-2">
              <div class="stat-card p-3">
                <p class="stat-label">Sales Representatives</p>
                <h3 class="stat-number">180</h3>
              </div>
            </div>

            <div class="col-md-3">
              <div class="stat-card p-3">
                <p class="stat-label">Team Leaders</p>
                <h3 class="stat-number">12</h3>
              </div>
            </div>

            <div class="col-md-3">
              <div class="stat-card p-3">
                <p class="stat-label">Area Sales Managers</p>
                <h3 class="stat-number">10</h3>
              </div>
            </div>

            <div class="col-md-3">
              <div class="stat-card p-3">
                <p class="stat-label">Regional Sales Managers</p>
                <h3 class="stat-number">15</h3>
              </div>
            </div>

            <div class="col-md-3">
              <div class="stat-card p-3">
                <p class="stat-label">Warehouse Managers</p>
                <h3 class="stat-number">2</h3>
              </div>
            </div>

            <div class="col-md-3">
              <div class="stat-card p-3">
                <p class="stat-label">Finance Department Managers</p>
                <h3 class="stat-number">8</h3>
              </div>
            </div>

            <div class="col-md-3">
              <div class="stat-card p-3">
                <p class="stat-label"> Head of Division</p>
                <h3 class="stat-number">4</h3>
              </div>
            </div>

          </div>

          <div class="row mt-4">
            <!-- Locked Users Section -->
            <div class="col-lg-8 col-md-12 mb-4">
              <div class="section-card locked-users-card">
                <h3 class="page-title">Locked Users</h3>
                <!-- <div class="locked-users-table" id="tableContainer">
                  <div class="table-wrapper">
                    <table class="table users-table">
                      <thead>
                        <tr>
                          <th>Date & Time <i class="sort-icon">▼</i></th>
                          <th>Full Name</th>
                          <th>User ID</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>12 Dec 2024, 08:45 AM</td>
                          <td>H.K Perera</td>
                          <td>254565214</td>
                          <td>
                            <button class="btn unlock-btn">Unlock</button>
                          </td>
                        </tr>
                        <tr>
                          <td>12 Dec 2024, 08:45 AM</td>
                          <td>Pasan Randula</td>
                          <td>254565214</td>
                          <td>
                            <button class="btn unlock-btn">Unlock</button>
                          </td>
                        </tr>
                        <tr>
                          <td>12 Dec 2024, 08:45 AM</td>
                          <td>H.K Perera</td>
                          <td>254565214</td>
                          <td>
                            <button class="btn unlock-btn">Unlock</button>
                          </td>
                        </tr>
                        <tr>
                          <td>12 Dec 2024, 08:45 AM</td>
                          <td>Pasan Randula</td>
                          <td>254565214</td>
                          <td>
                            <button class="btn unlock-btn">Unlock</button>
                          </td>
                        </tr>
                        <tr>
                          <td>12 Dec 2024, 08:45 AM</td>
                          <td>H.K Perera</td>
                          <td>254565214</td>
                          <td>
                            <button class="btn unlock-btn">Unlock</button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div> -->

                <div class="table-responsive division-table-sub">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Date & Time <i class="sort-icon">▼</i></th>
                        <th>Full Name</th>
                        <th>User ID</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>12 Dec 2024, 08:45 AM</td>
                        <td>H.K Perera</td>
                        <td>254565214</td>
                        <td>
                          <button class="btn unlock-btn">Unlock</button>
                        </td>
                      </tr>
                      <tr>
                        <td>12 Dec 2024, 08:45 AM</td>
                        <td>Pasan Randula</td>
                        <td>254565214</td>
                        <td>
                          <button class="btn unlock-btn">Unlock</button>
                        </td>
                      </tr>
                      <tr>
                        <td>12 Dec 2024, 08:45 AM</td>
                        <td>H.K Perera</td>
                        <td>254565214</td>
                        <td>
                          <button class="btn unlock-btn">Unlock</button>
                        </td>
                      </tr>
                      <tr>
                        <td>12 Dec 2024, 08:45 AM</td>
                        <td>Pasan Randula</td>
                        <td>254565214</td>
                        <td>
                          <button class="btn unlock-btn">Unlock</button>
                        </td>
                      </tr>
                      <tr>
                        <td>12 Dec 2024, 08:45 AM</td>
                        <td>H.K Perera</td>
                        <td>254565214</td>
                        <td>
                          <button class="btn unlock-btn">Unlock</button>
                        </td>
                      </tr>
                      <tr>
                        <td>12 Dec 2024, 08:45 AM</td>
                        <td>Pasan Randula</td>
                        <td>254565214</td>
                        <td>
                          <button class="btn unlock-btn">Unlock</button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

            <!-- Recent Activities Section -->
            <div class="col-lg-4 col-md-12 mb-4">
              <div class="section-card activities-card">
                <h3 class="page-title">Recent Activities</h3>
                <div class="activities-list">
                  <div class="activity-item">
                    <div class="activity-text">
                      User level
                      <span class="highlight-red">Finance Manager</span>
                      change access controls
                    </div>
                    <div class="activity-time">30 min ago</div>
                  </div>
                  <div class="activity-item">
                    <div class="activity-text">
                      Update
                      <span class="highlight-red">1256543</span> user's email
                      address & phone number
                    </div>
                    <div class="activity-time">35 min ago</div>
                  </div>
                  <div class="activity-item">
                    <div class="activity-text">
                      Update
                      <span class="highlight-red">1256543</span> user's email
                      address & phone number
                    </div>
                    <div class="activity-time">35 min ago</div>
                  </div>

                  <div class="activity-item">
                    <div class="activity-text">
                      Update
                      <span class="highlight-red">1256543</span> user's email
                      address & phone number
                    </div>
                    <div class="activity-time">35 min ago</div>
                  </div>
                  <div class="activity-item">
                    <div class="activity-text">
                      Update
                      <span class="highlight-red">1256543</span> user's email
                      address & phone number
                    </div>
                    <div class="activity-time">35 min ago</div>
                  </div>
                  <div class="activity-item">
                    <div class="activity-text">
                      Update
                      <span class="highlight-red">1256543</span> user's email
                      address & phone number
                    </div>
                    <div class="activity-time">35 min ago</div>
                  </div>
                  <div class="activity-item">
                    <div class="activity-text">
                      Update
                      <span class="highlight-red">1256543</span> user's email
                      address & phone number
                    </div>
                    <div class="activity-time">35 min ago</div>
                  </div>
                  <div class="activity-item">
                    <div class="activity-text">
                      Update
                      <span class="highlight-red">1256543</span> user's email
                      address & phone number
                    </div>
                    <div class="activity-time">35 min ago</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    


@endsection