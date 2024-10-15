@extends('layouts.dashboard')

@section('content')
     <!--  Row 1 -->
 <div class="row">
  <div class="col-lg-4">
    <div class="card overflow-hidden">
      <div class="card-body p-4">
        <h5 class="card-title mb-9 fw-semibold">Jumlah Murid Diterima</h5>
        <div class="row align-items-center">
          <div class="col-8">
            <h4 class="fw-semibold mb-3">{{ $student_approved }}</h4>
            <div class="d-flex align-items-center mb-3">
              <span
                class="me-1 rounded-circle bg-light-success round-20 d-flex align-items-center justify-content-center">
                <i class="ti ti-arrow-up-left text-success"></i>
              </span>
              <p class="text-dark me-1 fs-3 mb-0">Jumlah Murid Diterima</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-lg-4">
    <div class="card overflow-hidden">
      <div class="card-body p-4">
        <h5 class="card-title mb-9 fw-semibold">Jumlah Pendaftar Hari Ini</h5>
        <div class="row align-items-center">
          <div class="col-8">
            <h4 class="fw-semibold mb-3">{{ $student }}</h4>
            <div class="d-flex align-items-center mb-3">
              <span
                class="me-1 rounded-circle bg-light-success round-20 d-flex align-items-center justify-content-center">
                <i class="ti ti-arrow-up-left text-success"></i>
              </span>
              <p class="text-dark me-1 fs-3 mb-0">Jumlah Pendaftar Hari ini.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection