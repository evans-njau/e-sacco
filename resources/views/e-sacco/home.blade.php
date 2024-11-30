@extends('e-sacco.layout')
@section('home')
<div class="home-page">
    <div class="home-description">
        <h2>Book E-booking express tickets online</h2>
        <h5>All E-booking express stations and schedules</h5>
    </div>
    <div class="home-links">
        <form action="" method="post">
            <div class="container row">
                <div class="col-3 form-floating">
                    <input class="" type="text" name="from" id="floating-from" placeholder="From">
                </div>
                <div class="col-3 form-floating mb-3">
                    <input type="text" name="to" id="floating-to" placeholder="To">
                </div>
                <div class="col-3 form-floating mb-3">
                    <input type="datetime" name="date" id="date" placeholder="from when?">
                </div>
                <div class="col-3 form-floating">
                    <button type="submit" class="bg-primary">Find Now</button>
                </div>
            </div>
        </form>
    </div>
    <div class="home-testimonials row mt-7">
        
        <div class="home-handshake col-4 container bg-primary home-saying" >
            <img src="Assets/images/handshake.svg" alt="handshake">
            <h3 class="text-light">Best Deal</h3>
            <p class="text-light">Save Upto 70%</p>
        </div>
        <div class="home-choice col-4 container bg-primary ">
            <img src="Assets/images/choice.svg" alt="">
            <h3 class="text-light">The Most choice</h3>
            <p class="text-light">Millions of routes countrywide</p>
        </div>
        <div class="home-transparency col-4 container bg-primary home-saying text-light">
            <img src="Assets/images/transparent.svg" alt="">
            <h3 class="text-light">Easy and Transparent</h3>
            <p class="text-light">Compare Offers With 1 Click</p>
        </div>
    </div>
    <div class="home-testimonial-cards container-fluid pt-4 bd-primary home-saying text-light">
        <div class="home-testimonials-heading">
            <h2>CUSTOMER'S TESTIMONIALS</h2>
        </div> <hr>
        <div class="container " id="testimonials">
           <div class="card">
            <div class="card-title">
                 <h3>Archif Msafiri</h3>
            </div>
            <div class="card-body">
                <p>
                    Margot is a content marketing specialist 
                    at WordStream and nutrition graduate student
                     at Framingham State. She loves all things 
                     digital, learning about nutrition, running, 
                     traveling, and cooking.
                </p>
               <h5 class="ratings">
                @for ($i = 0; $i < 4; $i++)
                <i class="fa-solid fa-star"></i>
                @endfor
                <i class="fa-regular fa-star"></i>
               </h5>
            </div>
           </div>
        </div>
    </div>
</div>
@endsection