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
              Aquaculture
            </h1>
            <p>
                The term aquaculture broadly refers to the cultivation of aquatic organisms in controlled aquatic environments for any commercial, recreational or public purpose. The breeding, rearing and harvesting of plants and animals takes place in all types of water environments including ponds, rivers, lakes, the ocean and man-made “closed” systems on land.
            </p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="https://constructiontoday.co.ke/wp-content/uploads/2021/08/15FishFarm-759x500-1.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h1>
                Overview of Aquaculture Methods and Practices
            </h1>
            <p>
                A number of aquaculture practices are used world-wide in three types of environment (freshwater, brackishwater, and marine) for a great variety of culture organisms. Freshwater aquaculture is carried out either in fish ponds, fish pens, fish cages or, on a limited scale, in rice paddies. Brackishwater aquaculture is done mainly in fish ponds located in coastal areas. Marine culture employs either fish cages or substrates for molluscs and seaweeds such as stakes, ropes, and rafts. (Summarized information on major culture systems and practices used for the principal culture organisms on a regional basis
            </p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="https://agricfy.com/wp-content/uploads/2020/12/Ponds.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h1>
                Feeding of fish
            </h1>
            <p>
                A wide variety of feed ingredients is used to prepare supplemental/artificial feeds. The simplest fish feeds are prepared at the pond site using locally available raw materials like rice or corn bran, copra meal, and rice mill sweepings as sources of carbohydrates. These are usually mixed with animal protein like trash fish/fish meal, shrimp heads, and snail meat. Supplemental feeds for tilapia are prepared using 80% rice bran and 20% fish meal. Those for shrimps in improved extensive culture (low-density stocking but given dietary supplements for increased growth/production) usually include fresh raw materials like snail/mussel/clam meat or carabao hide and other slaughterhouse leftovers.
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
