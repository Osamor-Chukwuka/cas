@extends('layouts.app')

@section('content')
    <div>
        <figure>
            <img style="width: 100%;  height: 90vh; opacity: 0.6; filter: brightness(30%)"
                src="https://media.istockphoto.com/id/1169414361/photo/regional-african-food.jpg?s=612x612&w=0&k=20&c=ulfKENptsq0Fv0iA0OVPs37ZlLT24LsBmPjVse1KBzs="
                class="img-fluid bg-gradient" alt="...">
            <figcaption class="display-2 caption fw-bold " id="caption">Ever Wanted to Review a Cafetaria</figcaption>

        </figure>
    </div>

    <div class="row mt-5 pt-5 container justify-content-between">
        <div class="col-7">
            <p class="text-start">Cafeteria assessment is a process aimed at evaluating and improving the quality of a
                cafeteria's food
                offerings, service, and overall customer experience. It involves gathering feedback and data from cafeteria
                visitors to identify areas of strength and areas that need improvement.The assessment typically includes
                various aspects such as food quality, menu variety, cleanliness, staff behavior, efficiency, pricing, and
                customer satisfaction. By conducting assessments, cafeterias can gain valuable insights to enhance their
                operations, make informed decisions, and provide a better dining experience for their customers.


            </p>
        </div>
        <div class="col-3 ">
            <img src="https://e7.pngegg.com/pngimages/967/502/png-clipart-waiter-animation-restaurant-hospitality-industry-cafe-waiter-computer-wallpaper-cartoon.png"
                class="img-fluid " alt="...">
        </div>
    </div>


    <div class="mt-4">
        <figure>
            <img style="width: 100%;  height: 90vh; opacity: 0.6; filter: brightness(10%)"
                src="https://media.istockphoto.com/id/1169414361/photo/regional-african-food.jpg?s=612x612&w=0&k=20&c=ulfKENptsq0Fv0iA0OVPs37ZlLT24LsBmPjVse1KBzs="
                class="img-fluid bg-gradient" alt="...">
            {{-- <figcaption class="display-2 caption fw-bold " id="caption">Ever Wanted to Review a Cafetaria</figcaption> --}}

        </figure>
    </div>

    <div class="container mt-5 row justify-content-between">
        <h2 class="text-center mb-4 fw-bolder" id="caf">Cafetarias</h2>
        <div class="card col-6" style="width: 28rem;">
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://media.istockphoto.com/id/491090528/photo/cooked-rice.jpg?s=170667a&w=0&k=20&c=YkY-NcuHR870eJS1azbozRxowiUZQsbliIF9p2vX59M="
                            class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://media.istockphoto.com/id/491090528/photo/cooked-rice.jpg?s=170667a&w=0&k=20&c=YkY-NcuHR870eJS1azbozRxowiUZQsbliIF9p2vX59M="
                            class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://media.istockphoto.com/id/491090528/photo/cooked-rice.jpg?s=170667a&w=0&k=20&c=YkY-NcuHR870eJS1azbozRxowiUZQsbliIF9p2vX59M="
                            class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                    content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>

        <div class="card col-6" style="width: 28rem;">
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://media.istockphoto.com/id/491090528/photo/cooked-rice.jpg?s=170667a&w=0&k=20&c=YkY-NcuHR870eJS1azbozRxowiUZQsbliIF9p2vX59M="
                            class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://media.istockphoto.com/id/491090528/photo/cooked-rice.jpg?s=170667a&w=0&k=20&c=YkY-NcuHR870eJS1azbozRxowiUZQsbliIF9p2vX59M="
                            class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://media.istockphoto.com/id/491090528/photo/cooked-rice.jpg?s=170667a&w=0&k=20&c=YkY-NcuHR870eJS1azbozRxowiUZQsbliIF9p2vX59M="
                            class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                    content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>






    <script>
        function check() {
            let counter = 0;
            const intervalId = setInterval(() => {
                const parentElement = document.getElementById("caption");
                const newElement = document.createElement("span");
                newElement.textContent = "?";
                parentElement.appendChild(newElement);
                counter++;
                if (counter > 3) {
                    clearInterval(intervalId);
                    parentElement.innerHTML = "Do you want your Views to be Heard";
                    // parentElement.innerHTML = "Ever Wanted to Review a Cafetaria";
                    check();
                }
            }, 1000)
        }
        check()


        // function for the cafetaria
        function caf() {
            let counter = 0;
            const intervalId = setInterval(() => {
                const caf = document.getElementById("caf");
                const newElement = document.createElement("span");
                newElement.textContent = ".";
                caf.appendChild(newElement);
                counter++;
                if (counter >= 3) {
                    clearInterval(intervalId);

                }
            }, 1000)
        }
        caf()
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
