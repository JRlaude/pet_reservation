@extends('layouts.app')

@section('style')
<style>
    .jumbotron {
        background-image: url("{{asset('images/Labrador_Grass.jpg')}}");
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        color: white;
    }
</style>
@endsection
@section('content')
<div class="jumbotron" id="home">
    <div class="container">
        <h1 class="display-3">We care <br> <b>As you care</b></h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <p><a class="btn custom-bg-color " href="#about" role="button">Learn more &raquo;</a></p>
    </div>
</div>
<div class="container py-4">
    @if(App\Model\Breed::all()->count() > 0)
    <section id="pets" class="row justify-content-center pt-5">
        <div class="col-12">
            <h1 class="text-center">Our Pets</h1>
        </div>
        @foreach(App\Model\Breed::all() as $breed)

        <div class="col-lg-3 col-md-5 col-8 p-4">
            <a href="{{route('petBreed',$breed->slug)}}">
                <div class="card custom-border custom-bg-color h-100">
                    <div class="card-body text-center">

                        <h2 class="card-text ">
                            {{$breed->name}}
                        </h2>
                    </div>
                </div>
            </a>
        </div>

        @endforeach
    </section>
    @endif
    <section id="services" class="row justify-content-center pt-5">
        <div class="col-12 text-center">
            <h1 class="text-center custom-color">Pet Services</h1>
        </div>
        <div class="col-lg-3 col-md-5 col-8 p-4">
            <div class="card custom-border h-100">
                <img src="https://static.onecms.io/wp-content/uploads/sites/24/2020/05/28/2640602_petsHiGettyImages-1068118124-2000.jpg" class="card-img-top" height="250px" style="object-fit:cover;" alt="">
                <div class="card-body">
                    <h5 class="card-title">
                        <i class="fas fa-paw"></i>
                        Pet Grooming
                    </h5>
                    <p class="card-text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Quisquam, quidem.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-5 col-8 p-4">
            <div class="card custom-border h-100">
                <img src="https://www.thesprucepets.com/thmb/uC46sc1p1rJg_hiOII07kt6DAlY=/500x350/filters:no_upscale():max_bytes(150000):strip_icc()/GettyImages-603295352-18b15258214f4777855e337a1adee185.jpg" class="card-img-top" style="object-fit:cover;" height="250px" alt="">
                <div class="card-body">
                    <!-- pet boarding -->
                    <h5 class="card-title">
                        <i class="fas fa-paw"></i>
                        Pet Boarding
                    </h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-5 col-8 p-4">
            <div class="card custom-border h-100">
                <img src="https://www.petbacker.com/blog/images/2016/basket-of-dogs.jpg" class="card-img-top" height="250px" style="object-fit:cover;" alt="">
                <div class="card-body">
                    <!-- pet boarding -->
                    <h5 class="card-title">
                        <i class="fas fa-paw"></i>
                        Pet Breeding
                    </h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                </div>
            </div>
        </div>


        <div class="col-12 text-center py-5">
            <a href="{{route('appointment.create')}}" class="btn btn-lg custom-bg-color"> Make an appointment now </a>
        </div>
    </section>

   
     <!-- ======= About Us Section ======= -->
    <section id="about" class="about card-footer">
      <div class="container ">

        <div class="section-title text-center" data-aos="fade-up">
          <h2>About Us</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6 border border-success rounded" data-aos="fade-up" data-aos-delay="150">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
              <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
              <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 " data-aos="fade-up" data-aos-delay="300">
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum.
            </p>
            
          </div>
        </div>

      </div>
    </section>
    <!-- End About Us Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title text-center" data-aos="fade-up">
          <h2>Contact Us</h2>
        </div>

        <div class="row justify-content-md-center">
          <div class="text-center" data-aos="fade-up" data-aos-delay="200">
            <div class="container info">
              <div class="row">
              <div class="text-center col-lg-6">
                <h2 class="font-weight-bold ">Location</h2>
                <i class="fas fa-map-marker-alt text-success"></i>
                <p>A108 Adam Street<br>New York, NY 535022</p>
              </div>

              <div class="text-center col-lg-6 " >
                <h2 class="font-weight-bold" >Email</h2>
                <i class="fas fa-envelope text-success"></i>
                <p>info@example.com</p>
              </div>

              <div class="text-center  col-lg-6">
                <h2 class="font-weight-bold" >Phone</h2>
                <i class="fas fa-phone  text-success "></i>
                <p>+1 5589 55488 55s</p>
              </div>

              <div class="text-center  col-lg-6 " >
                <h2 class="font-weight-bold" >Working Hours</h2>
                <i class="fas fa-clock text-success"></i>
                <p>8:00 AM - 5:00 PM </p>
              </div>
            </div>
            </div>
          </div>

          

        </div>

      </div>
    </section><!-- End Contact Section -->

</div>
@endsection