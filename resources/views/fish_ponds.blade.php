@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row mt-5">
        <h1 class="text-center fw-bold">Pond Details</h1>
    </div>
    <div class="row mt-5 mb-5">
        <div class="bg-light rounded-2 p-0">
            <div class="pond-type">
                <img src="{{asset('imgs/earthen-pond.png')}}" class="fish-pond-img rounded-2" width="30%"/>
                <div class="p-3">
                    <h3 class="fw-bold">Earthen Fish Pond</h3>
                    <p class="text-muted">
                        An earthen pond is a near-natural habitation for fishes (catfish, tilapia, etc) like the river or stream. Although it is constructed to suit the design of the fish farmer, it is mostly constructed in the sloppy or waterlogged area to accommodate the fishes and make them have a natural feel when they are being raised.
                    </p>
                    <p class="text-muted">
                        An earthen pond is an artificial dam, a reservoir constructed by digging a hole that should be at least 1.5 meters deep. The process of constructing an earthen pond should be carried out by professionals who have been in the business of pond construction for a long time.
                    </p>
                    <p class="text-muted fw-bold m-0">
                        Factors To Consider Before Constructing An Earthen Pond <br>
                        Before choosing to construct an earthen pond, there are 2 crucial factors you need to consider:
                    </p>
                    <ul class="text-muted">
                         <li>
                            Location of the land: The first thing to consider before deciding to dig an earthen pond is the location and choice of the land that will be used. One major key factor to choosing a land is that it must be in a place where there is natural water.
                        </li>
                        <li>
                         Soil Type: The second factor to consider before building an earthen pond is the type of soil that will be used for construction. The best type of soil for the earthen pond is one that can hold water very well. This can be clay soil or sandy clay soil. Other factors to consider before constructing an earthen pond are soil permeability and soil texture.
                        </li>
                    </ul>
                    <div class="row">
                        <div class="col-lg-6">
                            <div>
                            <p class="text-muted fw-bold m-0">
                                Advantages of Earthen Fish Pond
                            </p>
                            <ol class="text-muted">
                                <li>
                                    It is the most near-natural type of pond good for raising fish.
                                </li>
                                <li>
                                    Fishes tend to eat natural food like worms compared to other types of ponds.
                                </li>
                                <li>
                                    Fish grow faster in an earthen pond.
                                </li>
                                <li>
                                    It has a low maintenance cost.
                                </li>
                                <li>
                                    It is easy to manage the water system in an earthen pond.
                                </li>
                            </ol>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div>
                            <p class="text-muted fw-bold m-0">
                                Disdvantages of Earthen Fish Pond
                            </p>
                            <ol class="text-muted">
                                <li>
                                    It is very risky to control if there is a flood.
                                </li>
                                <li>
                                    It requires more space to build an earthen pond.
                                </li>
                                <li>
                                    It is difficult to know when there is an outbreak of diseases and more difficult to control.
                                </li>
                                <li>
                                    It is difficult to sort in an earthen pond which makes it easy for fish to eat each other (cannibalism)
                                </li>
                            </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="row mt-5">
        <div class="bg-light rounded-2 p-0">
            <div class="pond-type">
                <img src="{{asset('imgs/concrete-pond.png')}}" class="fish-pond-img rounded-2" width="30%"/>
                <div class="p-3">
                    <h3 class="fw-bold">Concrete Fish Pond</h3>
                    <p class="text-muted">
                        A Concrete pond is using blocks, sands, and cement to build a habitation for you to raise your fish. Constructing concrete ponds requires the help of experts compared to other types of ponds. This is so because any mistake in the construction of the pond can lead to leakages and it might cost more to repair than to construct another one. One advantage of the concrete pond over the earthen pond is that it can be constructed anywhere eve in your house.
                    </p>
                    <p class="text-muted fw-bold m-0">
                        Factors to Consider Before Constructing A Concrete Pond:
                    </p>
                    <ul class="text-muted">
                         <li>
                            Location: This is not all a determinant of building a pond. You can build a concrete pond anywhere even in your backyard.
                        </li>
                        <li>
                            Drainage System: This is the second factor that is critical to constructing your concrete pond. A good drainage system where you will be disposing of the wastewater should be part of the planning process when you want to build a pond.
                        </li>
                        <li>
                            Cost: Setting up a concrete pond is the most expensive among all other types of ponds. You need to look at your pocket before choosing to construct a concrete pond.
                        </li>
                    </ul>
                    <div class="row">
                        <div class="col-lg-6">
                            <div>
                            <p class="text-muted fw-bold m-0">
                                Advantages of Concrete Fish Pond
                            </p>
                            <ol class="text-muted">
                                <li>
                                    It can be constructed on any land.
                                </li>
                                <li>
                                    A concrete pond is better to manage for younger fishes like fingerlings and juvenile.
                                </li>
                                <li>
                                    It is easy to notice fish diseases and also control the diseases.
                                </li>
                                <li>
                                    A concrete pond cannot be affected by flood unlike the earthen pond.
                                </li>
                                <li>
                                    The water system can easily be managed.
                                </li>
                                <li>
                                    It last longer than other types of ponds if managed well.
                                </li>
                            </ol>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div>
                            <p class="text-muted fw-bold m-0">
                                Disdvantages of Concrete Fish Pond
                            </p>
                            <ol class="text-muted">
                                <li>
                                    It is expensive to construct.
                                </li>
                                <li>
                                    For you to successfully run a catfish farm, it requires a large amount of water to run a concrete pond.
                                </li>
                                <li>
                                    If you don’t have where to dispose of the water, water waste can become a nuisance in the environment.
                                </li>
                                <li>
                                    The maintenance cost is very expensive.
                                </li>
                            </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="bg-light rounded-2 p-0">
            <div class="pond-type">
                <img src="{{asset('imgs/tarpaulin-pond.png')}}" class="fish-pond-img rounded-2" width="30%"/>
                <div class="p-3">
                    <h3 class="fw-bold">Tarpaulin Fish Pond</h3>
                    <p class="text-muted">
                        The next type of pond that can be used for raising fish is the tarpaulin pond. This type of fish pond is the next common after earthen, concrete, and plastic pond.
                    </p>
                    <p class="text-muted">
                        It can be constructed with either wood or galvanized pipes and then covered with a tarpaulin. Tarpaulin pond comes in different sizes and colors. One of the advantages of tarpaulin pond over the other types of ponds is that is easy to set up.
                    </p>
                    <p class="text-muted fw-bold m-0">
                        Factors to Consider Before Constructing A Tarpaulin Pond:
                    </p>
                    <ul class="text-muted">
                         <li>
                            Space – Although you don’t need so much space to put up a tarpaulin pond, regardless, you need to make sure that wherever your pond will be, it is free from obstacles that could tear the tarpaulin.
                        </li>
                        <li>
                            Cost – If you want to fish on a large scale, it is advisable not to use a tarpaulin pond because, in the long run, you will spend more on setting it up compared to if you use a concrete pond or an earthen pond.
                        </li>
                        <li>
                            Quality – Another factor to consider before deciding to buy a tarpaulin is quality. If you are going to be buying equipment that will cost you money, you need to be very particular about the quality.
                        </li>
                    </ul>
                    <div class="row">
                        <div class="col-lg-6">
                            <div>
                            <p class="text-muted fw-bold m-0">
                                Advantages of Tarpaulin Fish Pond
                            </p>
                            <ol class="text-muted">
                                <li>
                                    It is cost-effective compared to a concrete pond.
                                </li>
                                <li>
                                    It is easy to set up.
                                </li>
                                <li>
                                    Tarpaulin ponds are easily moveable.
                                </li>
                                <li>
                                    Tarpaulin ponds do not require a lot of space.
                                </li>
                            </ol>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div>
                            <p class="text-muted fw-bold m-0">
                                Disdvantages of Tarpaulin Fish Pond
                            </p>
                            <ol class="text-muted">
                                <li>
                                    It can easily tear.
                                </li>
                                <li>
                                    Because of its flexibility, heavy wind, rain/flood can quickly destroy the pond.
                                </li>
                                <li>
                                    Tarpaulin ponds can be disassembled and stolen easily.
                                </li>
                            </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="bg-light rounded-2 p-0">
            <div class="pond-type">
                <img src="{{asset('imgs/plastic-pond.png')}}" class="fish-pond-img rounded-2" width="30%"/>
                <div class="p-3">
                    <h3 class="fw-bold">Plastic or Rubber Fish Pond</h3>
                    <p class="text-muted">
                        This type of pond is common for beginners in fish farming. One of the benefits of the plastic pond (just like the tarpaulin pond) is that it is easy to set up. One amazing thing about the plastic pond is that you can turn the old overhead tank into ponds that can be used to raise catfish.
                    </p>
                    <p class="text-muted fw-bold m-0">
                        Factors to Consider Before Constructing A Plastic or Rubber Pond:
                    </p>
                    <ul class="text-muted">
                         <li>
                            Space – You only require a small space to put your plastic.
                        </li>
                        <li>
                            Quantity – When you are just starting fish farming and you want to use a plastic pond (which is advisable), the number of ponds you will buy should be considered depending on the number of fish you will be in there.
                        </li>
                        <li>
                            Cost – Sometimes if you don’t have enough money with you, it is not advisable to buy a lot of plastic ponds for raising the fishes.
                        </li>
                    </ul>
                    <div class="row">
                        <div class="col-lg-6">
                            <div>
                            <p class="text-muted fw-bold m-0">
                                Advantages of Plastic or Rubber Fish Pond
                            </p>
                            <ol class="text-muted">
                                <li>
                                    It is easily movable.
                                </li>
                                <li>
                                    They are good for hatchling and raising to fingerlings/juvenile.
                                </li>
                                <li>
                                    They can be used to raise catfish indoor.
                                </li>
                                <li>
                                    They are cost-effective.
                                </li>
                                <li>
                                    Plastic ponds are easy to maintain.
                                </li>
                                <li>
                                    Plastic ponds do not have any economic effect on the environment.
                                </li>
                            </ol>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div>
                            <p class="text-muted fw-bold m-0">
                                Disdvantages of Plastic or Rubber Fish Pond
                            </p>
                            <ol class="text-muted">
                                <li>
                                    If you are raising a large number of fishes, you will spend more money to buy the number of plastic that will contain the fishes.
                                </li>
                                <li>
                                    If the plastics are put in an open space, too much sun can affect the durability of the plastic.
                                </li>
                            </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5 mb-5">
        <div class="bg-light rounded-2 p-0">
            <div class="pond-type">
                <img src="{{asset('imgs/cage-pond.png')}}" class="fish-pond-img rounded-2" width="30%"/>
                <div class="p-3">
                    <h3 class="fw-bold">Cage o Pen Fish Pond</h3>
                    <p class="text-muted">
                        This type of pond is common for beginners in fish farming. One of the benefits of the plastic pond (just like the tarpaulin pond) is that it is easy to set up. One amazing thing about the plastic pond is that you can turn the old overhead tank into ponds that can be used to raise catfish.
                    </p>
                    <div class="row">
                        <div class="col-lg-6">
                            <div>
                            <p class="text-muted fw-bold m-0">
                                Advantages of Cage o Pen Fish Pond
                            </p>
                            <ol class="text-muted">
                                <li>
                                    Fish tend to eat natural feed as they are raised in oceans (their natural habitation).
                                </li>
                                <li>
                                    You can stock as many as the number of fishes that you want.
                                </li>
                                <li>
                                    Fishes raised in this type of pond tend to grow faster.
                                </li>
                            </ol>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div>
                            <p class="text-muted fw-bold m-0">
                                Disdvantages of Cage o Pen Fish Pond
                            </p>
                            <ol class="text-muted">
                                <li>
                                    Water pollution can happen which can make you lose all your fish.
                                </li>
                                <li>
                                    Poaching can occur in this type of pond.
                                </li>
                                <li>
                                    Requires tight security for you to succeed in raising fishes with this type of pond.
                                </li>
                            </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
  </div>

@endsection
