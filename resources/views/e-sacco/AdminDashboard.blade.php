@extends('e-sacco.layout')
@section('AdminDashboard')
<div class="container my-5">
    <h2 class="text-center">Admin Dashboard</h2>

    <!-- Add Trip Section -->
    <div class="card my-4">
        <div class="card-body">
            <h4>Add a New Trip</h4>
            <form  action="{{route('CreateTrips')}}" id="addTripForm" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="tripName" class="form-label">Trip Name</label>
                    <input type="text"name='Trip_Name' value={{old('Trip_Name')}} placeholder="Enter trip name..." class="form-control" id="tripName"> <br>
                    @error('Trip_Name')
                        <span class="text-danger">{{$message}}</span><br>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="tripDate" class="form-label">Trip Date</label>
                    <input type="date" name='Trip_Name' value="{{old('Trip_Date')}}" class="form-control" id="tripDate" > <br>
                    @error('Trip_Name')
                        <span class="text-danger">{{$message}}</span> <br>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="tripSeats"  class="form-label">Available Seats</label>
                    <input type="number" name="Number_of_seats" value="{{old('Number_of_seats')}}" placeholder="Enter seat number..." class="form-control" id="tripSeats" > <br>
                    @error('Number_of_seats')
                        <span class="text-danger">{{$message}}</span> <br>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="Price">Price</label> <br>
                    <input type="number" name="price" placeholder="Enter price..." id="Price" class="form-control" value="{{old('price')}}"> <br>
                    @error('price')
                        <span class="text-danger">{{$message}}</span> <br>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="description">Description:</label> <br>
                    <textarea value="Description" name="Description" placeholder="Describe your trip..." id="description" class="form-control"  rows="3" ></textarea> <br>
                    @error('Description')
                        <span class="text-danger">{{$message}}</span> <br>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="Destination_Img">Destination Image:</label> <br>
                    <input value="{{old('Destination_Image')}}" type="file" placeholder="Enter a destination image..." name="Destination_Image" id="Destination_Img"  class="form-control"> <br>
                    @error('Destination_Image')
                        <span class="text-danger">{{$message}}</span> <br>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Add Trip</button>
            </form>
        </div>
    </div>

    <!-- Manage Trips Section -->
    <div class="card my-4">
        <div class="card-body">
            <h4>Available Trips</h4>
            <table class="table table-striped" id="tripsTable">
                <thead class="bg-success text-light">
                    <tr>
                        <th scope="col">Trip Name</th>
                        <th scope="col">Date</th>
                        <th scope="col">Seats</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Trip rows will be added here dynamically with JavaScript -->
                </tbody>
            </table>
        </div>
    </div>

    <!-- Booked Trips Section -->
    <div class="card my-4">
        <div class="card-body">
            <h4>Booked Trips</h4>
            <p>View all trips that users have booked and the seats taken.</p>
            <table class="table table-striped" id="bookedTripsTable">
                <thead>
                    <tr>
                        <th>User Name</th>
                        <th>Trip Name</th>
                        <th>Seats Booked</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Booked trip data will go here -->
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection