@extends('layouts.app')

@section('content')
    <div>
        <figure>
            <img style="width: 100%;  height: 90vh; opacity: 0.6; filter: brightness(30%)"
                src="https://media.istockphoto.com/id/1169414361/photo/regional-african-food.jpg?s=612x612&w=0&k=20&c=ulfKENptsq0Fv0iA0OVPs37ZlLT24LsBmPjVse1KBzs="
                class="img-fluid bg-gradient" alt="...">
            <figcaption class="display-2 caption fw-bold " id="caption">Davta Cafetaria</figcaption>

        </figure>
    </div>


    <div class="card px-5 py-3 mt-5 shadow">
        <div class="nav nav-fill my-3">
            <label class="nav-link shadow-sm step0 border ml-2" onclick="commend()"><a id="commend" href="#">
                    Commend</a></label>
            <label class="nav-link shadow-sm step1   border ml-2 "><a onclick="complain()" id="complain"
                    href="#">Complain</a></label>
            <label class="nav-link shadow-sm step2   border ml-2 "><a onclick="deliver()" id="delivered"
                    href="#">Delivered</a></label>
        </div>

        <h1 id="commend_body">Commend the caf</h1>
        <h1 id="complain_body" style="display: none">complain the caf</h1>
        <h1 id="deliver_body" style="display: none">deliver the caf</h1>



    </div>

    <div class="mb-4">
        <figure>
            <img style="width: 100%;  height: 100vh; opacity: 1; filter: brightness(15%)"
                src="https://media.istockphoto.com/id/1169414361/photo/regional-african-food.jpg?s=612x612&w=0&k=20&c=ulfKENptsq0Fv0iA0OVPs37ZlLT24LsBmPjVse1KBzs="
                class="img-fluid bg-gradient" alt="...">
            <figcaption class=" caption2 fw-bold text-center " id="caption">
                <p class="display-4">Rate this Cafetaria</p>
                <div class="display-3">
                    <i class="bi bi-star-fill text-warning "></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-half text-warning"></i>
                    <i class="bi bi-star"></i>
                </div>
                <div class="text display-5">4.5</div>
                <div class="mt-5 mb-2">
                    <i class="bi bi-trophy-fill display-1 text-warning"></i>
                    <p class="fs-1"> Best Cafetaria of the Year(2023): ETC Cafetaria</p>
                </div>
                <div class="mt-4">
                    <i class="bi bi-clock-fill display-1 text-warning"></i>
                    <p id="time" class="fs-1"></p>
                </div>
            </figcaption>

        </figure>
    </div>





    <script>
        function commend() {
            const commend = document.getElementById('commend_body').style.display = 'block';
            const complain = document.getElementById('complain_body').style.display = "none";
            const deliver = document.getElementById('deliver_body').style.display = "none";
        }

        function complain() {
            const commend = document.getElementById('commend_body').style.display = 'none';
            const complain = document.getElementById('complain_body').style.display = "block";
            const deliver = document.getElementById('deliver_body').style.display = "none";
        }

        function deliver() {
            const commend = document.getElementById('commend_body').style.display = 'none';
            const complain = document.getElementById('complain_body').style.display = "none";
            const deliver = document.getElementById('deliver_body').style.display = "block";
        }


        // HANDLE THE COUNT DOWN
        // Set the date we're counting down to
        var countDownDate = new Date("Jan 5, 2024 15:37:25").getTime();

        // Update the count down every 1 second
        var x = setInterval(function() {

            // Get today's date and time
            var now = new Date().getTime();

            // Find the distance between now and the count down date
            var distance = countDownDate - now;

            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Display the result in the element with id="demo"
            document.getElementById("time").innerHTML = days + "d " + hours + "h " +
                minutes + "m " + seconds + "s ";

            // If the count down is finished, write some text
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("expire").innerHTML = "EXPIRED";
            }
        }, 1000);
    </script>
@endsection


<style>
    figure {
        position: relative;
    }

    .caption {
        position: absolute;
        bottom: 40%;
        left: 0;
        width: 100%;
        /* background-color: rgba(0, 0, 0, 0.2); Adjust the background color and opacity */
        color: #ffffff;
        /* Adjust the text color */
        padding: 10px;
    }

    .caption2 {
        position: absolute;
        bottom: 0%;
        left: 0;
        width: 100%;
        /* background-color: rgba(0, 0, 0, 0.2); Adjust the background color and opacity */
        color: #ffffff;
        /* Adjust the text color */
        padding: 10px;
    }
</style>
