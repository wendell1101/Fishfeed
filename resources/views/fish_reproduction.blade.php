@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mt-5">
            <h1 class="text-center fw-bold">Type of Fish Reproduction</h1>
        </div>
        <div class="row mt-5">
            <div class="bg-light rounded-2 p-0">
                <div class="pond-type">
                    <img src="{{asset('imgs/asexual-reproduction.png')}}" class="fish-pond-img rounded-2" width="30%"/>
                    <div class="p-3">
                        <h3 class="fw-bold">Asexual Reproduction</h3>
                        <p class="text-muted">
                            Asexual reproduction is a form of reproduction in which an organism gives rise to a genetically-similar or identical copy of itself without a contribution of genetic material from another individual. It does not involve meiosis, ploidy reduction, or fertilization, and only one parent is involved genetically. A more stringent definition is agamogenesis, which refers to reproduction without the fusion of gametes.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5 mb-5">
            <div class="bg-light rounded-2 p-0">
                <div class="pond-type">
                    <img src="{{asset('imgs/sexual-reproduction.jpg')}}" class="fish-pond-img rounded-2" width="30%"/>
                    <div class="p-3">
                        <h3 class="fw-bold">Sexual Reproduction</h3>
                        <p class="text-muted">
                            Sexual reproduction is a biological reproduction process in which organisms produce descendants with a combination of genetic material contributed by two different gametes, typically two different individuals, male and female. A mature reproductive or sex cell is referred to as a gamete. Because the union of these gametes produces an organism that is not genetically identical to the parent, sexual reproduction increases genetic diversity (s).
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
