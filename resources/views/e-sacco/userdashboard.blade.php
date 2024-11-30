@extends('e-sacco.layout')
@section('UserDashboard')
<div class="container my-5">
    <h2 class="text-center">User Dashboard</h2>

    <!-- Available Trips Section -->
    <div class="card my-4">
        <div class="card-body">
            <h4>Available Trips</h4>
            <table class="table table-striped" id="userTripsTable">
                <thead>
                    <tr>
                        <th>Trip Name</th>
                        <th>Date</th>
                        <th>Seats Available</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Available trip data will go here -->
                </tbody>
            </table>
        </div>
    </div>

    <!-- Selected Trips Section -->
    <div class="card my-4">
        <div class="card-body">
            <h4>Selected Trips</h4>
            <table class="table table-striped" id="selectedTripsTable">
                <thead>
                    <tr>
                        <th>Trip Name</th>
                        <th>Date</th>
                        <th>Seats Reserved</th>
                        <th>Total Cost</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Selected trip data will go here -->
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection