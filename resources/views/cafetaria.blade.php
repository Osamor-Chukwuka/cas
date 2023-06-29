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


    <script>

        function commend() {
            const commend = document.getElementById('commend_body').style.display = 'block';
            const complain = document.getElementById('complain_body').style.display = "none";
            const deliver = document.getElementById('deliver_body').style.display = "none";
        }

        function complain(){
            const commend = document.getElementById('commend_body').style.display = 'none';
            const complain = document.getElementById('complain_body').style.display = "block";
            const deliver = document.getElementById('deliver_body').style.display = "none";
        }

        function deliver(){
            const commend = document.getElementById('commend_body').style.display = 'none';
            const complain = document.getElementById('complain_body').style.display = "none";
            const deliver = document.getElementById('deliver_body').style.display = "block";
        }
    </script>
@endsection


<style>
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
</style>
