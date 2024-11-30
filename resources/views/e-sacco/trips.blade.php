@extends('e-sacco.layout')
@section('trips')
<section class="trips-page container mt-4">
    <h2 class="text-center mb-4">Explore Our Trips</h2>

    <!-- Search Filter -->
    <div class="search-filter row mb-5">
        <div class="col-md-3">
            <input type="text" class="form-control" placeholder="From" name="from">
        </div>
        <div class="col-md-3">
            <input type="text" class="form-control" placeholder="To" name="to">
        </div>
        <div class="col-md-3">
            <input type="date" class="form-control" name="date">
        </div>
        <div class="col-md-3">
            <button class="btn btn-primary w-100">Search Trips</button>
        </div>
    </div>

    <!-- Featured Trips -->
    <div class="row featured-trips">
        <div class="col-md-4 mb-4">
            <div class="trip-card card">
                <img src="Assets/images/trip1.jpg" class="card-img-top" alt="Trip 1">
                <div class="card-body">
                    <h5 class="card-title">Trip to Nairobi</h5>
                    <p class="card-text">Enjoy a city adventure and explore Nairobi’s best attractions!</p>
                    <p class="card-text"><strong>From:</strong> $50</p>
                    <button class="btn btn-primary w-100">Book Now</button>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="trip-card card">
                <img src="Assets/images/trip2.jpg" class="card-img-top" alt="Trip 2">
                <div class="card-body">
                    <h5 class="card-title">Trip to Mombasa</h5>
                    <p class="card-text">Experience the coastal charm of Mombasa and unwind by the ocean.</p>
                    <p class="card-text"><strong>From:</strong> $80</p>
                    <button class="btn btn-primary w-100">Book Now</button>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="trip-card card">
                <img src="Assets/images/trip3.jpg" class="card-img-top" alt="Trip 3">
                <div class="card-body">
                    <h5 class="card-title">Trip to Maasai Mara</h5>
                    <p class="card-text">Safari experience at the world-renowned Maasai Mara National Reserve.</p>
                    <p class="card-text"><strong>From:</strong> $150</p>
                    <button class="btn btn-primary w-100">Book Now</button>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection