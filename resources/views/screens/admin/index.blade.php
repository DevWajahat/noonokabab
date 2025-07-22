@extends('layout.admin.app')

@section('content')
<div class="content-body">
  <!-- row -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-xl-4 col-lg-6 col-sm-6">
        <div class="card bg-order">
          <div class="card-body">
            <div class="media align-items-center">
              <span class="p-2 me-3 feature-icon rounded">
                <i class="fa-solid fa-bars-staggered"></i>
              </span>
              <div class="media-body text-end feature-icon-text">
                <p class="fs-18 text-white mb-2">Orders</p>
                <span class="fs-48 text-white font-w600">{{ count($orders) }}</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-lg-6 col-sm-6">
        <div class="card bg-payment overflow-hidden">
          <div class="card-body">
            <div class="media align-items-center">
              <span class="p-2 me-3 feature-icon rounded">
                <i class="fa-regular fa-credit-card"></i>
                <!-- <svg width="36" height="36" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M38.4998 10.4995H35.0002V38.4999H38.4998C40.4245 38.4999 42 36.9238 42 34.9992V13.9992C42 12.075 40.4245 10.4995 38.4998 10.4995Z" fill="white" />
                  <path d="M27.9998 10.4995V6.9998C27.9998 5.07515 26.4243 3.49963 24.5001 3.49963H17.4998C15.5756 3.49963 14.0001 5.07515 14.0001 6.9998V10.4995H10.5V38.4998H31.5V10.4995H27.9998ZM24.5001 10.4995H17.4998V6.99929H24.5001V10.4995Z" fill="white" />
                  <path d="M3.50017 10.4995C1.57551 10.4995 0 12.075 0 13.9997V34.9997C0 36.9243 1.57551 38.5004 3.50017 38.5004H6.99983V10.4995H3.50017Z" fill="white" />
                </svg> -->
              </span>
              {{-- <div class="media-body text-end feature-icon-text">
                <p class="fs-18 text-white mb-2">Impressions</p>
                <span class="fs-48 text-white font-w600">75</span>
              </div> --}}
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-lg-6 col-sm-6">
        <div class="card bg-profile">
          <div class="card-body">
            <div class="media align-items-center">
              <span class="p-2 me-3 feature-icon rounded">
                <svg width="36" height="36" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M15.1811 22.0083C15.065 21.9063 14.7968 21.6695 14.7015 21.5799C12.3755 19.3941 10.8517 15.9712 10.8517 12.1138C10.8517 5.37813 15.4868 0.0410156 21.001 0.0410156C26.5152 0.0410156 31.1503 5.37813 31.1503 12.1138C31.1503 15.9679 29.6292 19.3884 27.3094 21.5778C27.2118 21.6699 26.9384 21.9116 26.8238 22.0125L26.8139 22.1799C26.8789 23.1847 27.554 24.0553 28.5232 24.3626C35.7277 26.641 40.9507 32.0853 41.8276 38.538C41.9483 39.3988 41.6902 40.2696 41.1198 40.9254C40.5495 41.5813 39.723 41.9579 38.8541 41.9579C32.4956 41.9591 9.50672 41.9591 3.14818 41.9591C2.2787 41.9591 1.4518 41.5824 0.881242 40.9263C0.31068 40.2701 0.0523763 39.3989 0.172318 38.5437C1.05145 32.0851 6.27444 26.641 13.4777 24.3628C14.4504 24.0544 15.1263 23.1802 15.1885 22.1722L15.1811 22.0083Z" fill="white" />
                </svg>
              </span>
              <div class="media-body text-end feature-icon-text">
                <p class="fs-18 text-white mb-2">Profiles</p>
                <span class="fs-48 text-white font-w600">Active</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12">
        <div class="row">
          <div class="col-xl-12">
            <div class="card card-body">
              <div class="card-header border-0 pb-0 flex-wrap">
                <!-- <h4 class="fs-20 text-black me-4 mb-2">Vacancy Stats</h4> -->
                <div class="form-check custom-checkbox mb-3">
                  <input type="checkbox" class="form-check-input" id="customCheckBox1" required />
                  <label class="form-check-label" for="customCheckBox1">Orders</label>
                </div>
                <div class="form-check custom-checkbox mb-3">
                  <input type="checkbox" class="form-check-input" id="customCheck1" required />
                  <label class="form-check-label" for="customCheck1">Payments</label>
                </div>
                <!-- <div class="form-check custom-checkbox mb-3">
                  <input type="checkbox" class="form-check-input" id="customCheck2" required />
                  <label class="form-check-label" for="customCheck2">Profiles</label>
                </div> -->
                <select class="form-control style-1 default-select mt-3 mt-sm-0">
                  <option>Monthly</option>
                  <option>Weekly</option>
                  <option>Daily</option>
                </select>
              </div>
              <div class="card-body">
                <canvas id="lineChart" class="Vacancy-chart"></canvas>
                <div class="d-flex flex-wrap align-items-center justify-content-center mt-3">
                  <div class="fs-14 text-black me-4">
                    <svg class="me-2" width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <rect width="19" height="19" rx="9.5" fill="#4c719e" />
                    </svg>
                    Orders
                  </div>
                  <div class="fs-14 text-black me-4">
                    <svg class="me-2" width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <rect width="19" height="19" rx="9.5" fill="#2d3447" />
                    </svg>
                    Payments
                  </div>
                  <div class="fs-14 text-black">
                    <svg class="me-2" width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <rect width="19" height="19" rx="9.5" fill="#f8bc22" />
                    </svg>
                    Profiles
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
</div>
@endsection
