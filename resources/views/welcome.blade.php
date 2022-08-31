@extends('layouts.app')

@section('content')
<div class="carousel-wrapper">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="https://live.staticflickr.com/3880/15135120425_62fc162caa_b.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h1>
              Lorem ipsum dolor sit amet.
            </h1>
            <p>
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vero voluptatem exercitationem maxime, quis commodi dolor! Error quaerat debitis id esse atque, recusandae doloribus delectus placeat odio quod veniam sit suscipit.
            </p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="https://constructiontoday.co.ke/wp-content/uploads/2021/08/15FishFarm-759x500-1.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h1>
              Lorem ipsum dolor sit amet, consectetur adipisicing.
            </h1>
            <p>
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita placeat adipisci nihil quos. Debitis, ipsum. Saepe, repellat eligendi mollitia facilis dignissimos id, nulla perspiciatis illo rerum fugiat similique delectus odio.
            </p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="https://agricfy.com/wp-content/uploads/2020/12/Ponds.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h1>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit.
            </h1>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde delectus veritatis sequi ratione quos! Dicta consectetur voluptas hic, praesentium numquam autem tempore, temporibus laborum vel, fuga error itaque illo culpa vero modi quod odit inventore at cum qui obcaecati rem!
            </p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
@endsection