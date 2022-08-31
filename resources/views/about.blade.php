@extends('layouts.app')


@section('content')
<div class="container">
    <div class="about-wrapper">
      <div class="row gx-2 gy-2 w-100">
        <div class="col-lg-4">
          <div class="d-lg-flex align-items-center bg-light rounded-2 p-3 h-100">
            <div class="member-photo text-center">
                <img src="{{asset('imgs/samuel.png')}}" alt="member-1" width="100px" class="img-fluid rounded-circle border border-2 border-success">
            </div>
            <div class="member-info ms-2 mt-3 text-lg-start text-center">
              <h5 class="text-uppercase fw-bold">Samuel M. Mamaril
              </h5>
              <div class="m-0 d-lg-flex align-items-center gap-1">
                <i class='bx bx-phone-call'></i>
                <small>0947192566
                </small>
              </div>
              <div class="m-0 d-lg-flex align-items-center gap-1">
                <i class='bx bx-envelope'></i>
                <small>
                  <a href="mailto:mamarilsamuel99@gmail.com" class="text-decoration-none">mamarilsamuel99@gmail.com</a>
                </small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="d-lg-flex align-items-center bg-light rounded-2 p-3 h-100">
            <div class="member-photo text-center">
                <img src="{{asset('imgs/angus.png')}}" alt="member-1" width="100px" class="img-fluid rounded-circle border border-2 border-success">
            </div>
            <div class="member-info ms-2 mt-3 text-lg-start text-center">
              <h5 class="text-uppercase fw-bold">Angus Ray C. de Loria
              </h5>
              <div class="m-0 d-lg-flex align-items-center gap-1">
                <i class='bx bx-phone-call'></i>
                <small>09617224054
                </small>
              </div>
              <div class="m-0 d-lg-flex align-items-center gap-1">
                <i class='bx bx-envelope'></i>
                <small>
                  <a href="mailto:angusdelor888@gmail.com" class="text-decoration-none">angusdelor888@gmail.com
                  </a>
                </small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="d-lg-flex align-items-center bg-light rounded-2 p-3 h-100">
            <div class="member-photo text-center">
                <img src="{{asset('imgs/christopher.png')}}" alt="member-1" width="100px" class="img-fluid rounded-circle border border-2 border-success">
            </div>
            <div class="member-info ms-2 mt-3 text-lg-start text-center">
              <h5 class="text-uppercase fw-bold">Christopher G. Lasala
              </h5>
              <div class="m-0 d-lg-flex align-items-center gap-1">
                <i class='bx bx-phone-call'></i>
                <small>09510809587
                </small>
              </div>
              <div class="m-0 d-lg-flex align-items-center gap-1">
                <i class='bx bx-envelope'></i>
                <small>
                  <a href="mailto:lasalatop@gmail.com" class="text-decoration-none">lasalatop@gmail.com
                  </a>
                </small>
              </div>
            </div>
          </div>
        </div>
        

      </div>

    </div>
  </div>
@endsection