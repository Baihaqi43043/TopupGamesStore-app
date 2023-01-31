@extends('layouts.navapp')
@push('custom-style')
    <style>

    </style>
@endpush
@section('content')
    <div class="wrapper pt-2">
        <br>
        <div class="row">
            <div class="col-12 px-4 col-lg-8 mx-auto p-lg-0">
                <div id="carouselpromo" class="carousel slide shadow" data-bs-ride="true">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('assets/games/cr1.jpg') }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('assets/games/cr2.jpg') }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('assets/games/cr3.jpg') }}" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselpromo"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselpromo"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="nav-item col-12 px-3 mt-4 col-lg-6 px-lg-0 mx-auto justify-content-center">
                <form action="">
                    <div class="input-group">
                        <input class="form-control" list="datalistOptions" id="exampleDataList"
                            placeholder="Type to search..." style="width: 200px" type="text">
                        <datalist id="datalistOptions">
                            <option value="San Francisco">
                            <option value="New York">
                            <option value="Seattle">
                            <option value="Los Angeles">
                            <option value="Chicago">
                        </datalist>
                        <button type="submit" class="btn btn-secondary" style="background-color:peru ">
                            <i class="bi bi-search"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 mx-auto mt-4">
                <h5 class="text-uppercase">top up <i class="bi bi-gem"></i></h5>
            </div>
            <div class="col-lg-8 mx-auto mt-4">
                <div class="row row-cols-3 row-cols-md-6 justify-content-center">
                    <div class="col mt-3">
                        <div class="card  shadow h-100" style="max-width: 100% ; cursor: pointer;">
                            <img src="{{ asset('assets/games/ml.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body py-md-0 pb-3  d-lg-block text-center mt-3">
                                <p class="text-sm">Mobile Legends Bang Bang</p>
                            </div>
                        </div>
                    </div>
                    <div class="col mt-3">
                        <div class="card  shadow h-100" style="max-width: 100% ; cursor: pointer;">
                            <img src="{{ asset('assets/games/ml.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body py-md-0 pb-3  d-lg-block text-center mt-3">
                                <p class="text-sm">Mobile Legends Bang Bang</p>
                            </div>
                        </div>
                    </div>
                    <div class="col mt-3">
                        <div class="card  shadow h-100" style="max-width: 100% ; cursor: pointer;">
                            <img src="{{ asset('assets/games/ml.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body py-md-0 pb-3  d-lg-block text-center mt-3">
                                <p class="text-sm">Mobile Legends Bang Bang</p>
                            </div>
                        </div>
                    </div>
                    <div class="col mt-3">
                        <div class="card  shadow h-100" style="max-width: 100% ; cursor: pointer;">
                            <img src="{{ asset('assets/games/ml.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body py-md-0 pb-3  d-lg-block text-center mt-3">
                                <p class="text-sm">Mobile Legends Bang Bang</p>
                            </div>
                        </div>
                    </div>
                    <div class="col mt-3">
                        <div class="card  shadow h-100" style="max-width: 100% ; cursor: pointer;">
                            <img src="{{ asset('assets/games/ml.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body py-md-0 pb-3  d-lg-block text-center mt-3">
                                <p class="text-sm">Mobile Legends Bang Bang</p>
                            </div>
                        </div>
                    </div>
                    <div class="col mt-3">
                        <div class="card  shadow h-100" style="max-width: 100% ; cursor: pointer;">
                            <img src="{{ asset('assets/games/ml.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body py-md-0 pb-3  d-lg-block text-center mt-3">
                                <p class="text-sm">Mobile Legends Bang Bang</p>
                            </div>
                        </div>
                    </div>
                    <div class="col mt-3">
                        <div class="card  shadow h-100" style="max-width: 100% ; cursor: pointer;">
                            <img src="{{ asset('assets/games/ml.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body py-md-0 pb-3  d-lg-block text-center mt-3">
                                <p class="text-sm">Mobile Legends Bang Bang</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
