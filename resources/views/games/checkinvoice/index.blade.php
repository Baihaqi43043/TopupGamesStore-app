@extends('layouts.navapp')
@push('custom-style')
    <style>

    </style>
@endpush
@section('content')
    <div class="wrapper pt-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto mb-5 mt-5">
                    <div class="card shadow">
                        <div class="card-header">
                            <h5 class="fs-5">Check Invoice</h5>
                        </div>
                        <div class="card-body">
                            <span>Invoice Number :</span>
                            <div class="input-group">
                                <span class="input-group-text shadow"
                                    style="color: var(--bs-light-text); background-color: var(--bs-body-bg);"><i
                                        class="bi bi-receipt"></i></span>
                                <input type="text" class="form-control bg-light shadow text-dark"
                                    placeholder="OS9534xxxxxx" aria-label="Username" aria-describedby="addon-wrapping">
                            </div>
                            <button class="btn mt-3 float-end text-white " style="background-color: peru;">Check</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
