@extends('layouts.app')

@section('content')
    <div>
        <figure>
            <img style="width: 100%;  height: 90vh; opacity: 0.6; filter: brightness(30%)"
                src="https://media.istockphoto.com/id/1169414361/photo/regional-african-food.jpg?s=612x612&w=0&k=20&c=ulfKENptsq0Fv0iA0OVPs37ZlLT24LsBmPjVse1KBzs="
                class="img-fluid bg-gradient" alt="...">
            <figcaption class="display-2 caption fw-bold " id="caption">{{ $caf_name[0]->name }}</figcaption>

        </figure>
    </div>


    <div class="card px-5 py-3 mt-5 shadow">
        <div class="nav nav-fill my-3">
            <label class="nav-link shadow-sm step0 border ml-2" onclick="commend()"><a id="commend" href="#">
                    Commend</a></label>
            <label class="nav-link shadow-sm step1   border ml-2 "><a onclick="complain()" id="complain"
                    href="#">Complain</a></label>
            {{-- <label class="nav-link shadow-sm step2   border ml-2 "><a onclick="deliver()" id="delivered"
                    href="#">Delivered</a></label> --}}
        </div>


        {{-- THE CHAT FOR COMMENDING --}}
        <div id="commend_body">
            <div class="accordion mt-5" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button border border-warning text-black fs-5 fw-bolder" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseComment" aria-expanded="true"
                            aria-controls="collapseComment">
                            Commend This Cafetaria
                        </button>
                    </h2>
                    <div id="collapseComment" class="accordion-collapse collapse show" aria-labelledby="headingComment"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body border border-warning">
                            <div class="">
                                <div class="overflow-y-auto">
                                    @foreach ($commendations as $commend)
                                        @php
                                            $user2 = Auth::user()
                                                ->where('id', $commend->user_id)
                                                ->get('name');
                                        @endphp
                                        <a href="javascript:void(0);" data-toggle="modal" data-target="#view_info"
                                            class="user_name">
                                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIUAAACFCAMAAABCBMsOAAAAaVBMVEX///8rLzIXHSG9vb4AAAAoLC8eIycJEhclKi38/PwhJilnaWu4ubnW19dbXV/i4uLz8/PHx8gADRPQ0dFFSEqlpqfo6OgAAAiUlZays7RvcXM8P0J+f4BPUlQPFxtfYmOdnp8zNzqJi4zeMWTiAAADg0lEQVR4nO2a7W6rMAxAS/gOpHxDgZZC3/8hF7Zd0a3QEmOzSjfnx6SqP3aUxI5j93DQaDQajUajeStKkZimmYjyzwyiuskH7jDGHD7kTR3tr+CHgZM6tm18YdvyUxD6+zoUXsqN3/DUK3b0CFtmPzh8Lglrw50c4rPrzTqMeO453kNCtGzRYYS1gl4iSZcX4ns50oRcYuFE/DwdxBoZfy0hNXhGKVGyV9vxvSmMMJn6l8ckMQ+/0CWOPl0pYRhpTyUhnofoTxhVvAaOgoUT0EhkKhJSgyZOlJaCajFKS0nCMCyKaC06RYuuwJfwr+sS1oR3xc8Z5dqENcHxtySrlC0q/CjpVY+FPBg9ukWjFqcjToNucVE9nPJ4XtAtcoBFji3h52vKm5/YOXaovofFe+zIm5zO94jUk0qh9QU7oVskgAyO/ywpATuCf5v5R+Wb/UjwGuhVDwbr8SXepOI7HNXqHH6kkDiYalvCTBILtcUgWgpZ9Cm9EMmaB+f1GuxMJXHw27U5w2sJW47CW9lF8Ug7bOG6PWHEXc96Te6yaloJmTW6l53GjihT3JMMz29XZyBvd45Ex3S5ErbT414TisLoFrrxnUHQLliivBkznU+PGbd9h0ZRP1TsrhFsc1YN/R+Mi0QfDGmVup0r/w5Bv8MoYBY/jrKwKIowi+J9h1WaO3xxy8OlqVQc5jexw+Zkgcd4155m/pcvTm0nvw1IpyOjw7X6LPtsGZfnWkxLEov6LGP3M3R5daX0KBt3Kj1thzHHy6/Nubnm3vhhyh68a8jSVz08VBe2xx3H4d5DQmcDze3uN08usblrrSE4pa/GqI8QDFZNA9CBNpArDdNSb67JXbFQq65C9aX8Dwux3KhXDJQXVoOhhUqiFBy/NDqkBCZcuITUcFFKn3L1QHkefsFIowpP5HkwHs6hu1HCMNzN78UYHB4TNtv6I5nb1v0YYbdtEkJ9WjZHt+1GUezrLbGtyZWot53ncbbca4oD/icWG0b/EfQSe8SCZ1DATGQJ+KwkBkzslrBzaM4AjNaXAQ/dN98g90AzF2SEugx0rCkwJSSw/Flvv03vcWG1H8pFNgE8GIBp8jOAk+b1P9pbRwqRiDGzxYgFyVvKM8OXFpAqWGCvRQUJ1QT9XEBqDBM3XciEAXk6awtt8b4WocVwsSDP1Sg0cQn/YIaj0Wg0Go3mv+UDHAA07kXUYusAAAAASUVORK5CYII="
                                                class="img-comment" alt="avatar"> <span
                                                class="ms-2 h5 text-black bolder fw-5">{{ $user2[0]->name }}</span>
                                        </a>
                                        <div class="chat-about mb-5">
                                            <h6 class="m-b-0 fs-5">{{ $commend->message }}
                                            </h6>
                                            <small class="italics bg-s"><i
                                                    class="bi bi-calendar">{{ $commend->updated_at }}</i>
                                            </small>

                                            @if (Auth::user()->name == 'D')
                                            @else
                                            @endif

                                            <div style="display: flex" class="chat-message clearfix" id="reply_f">
                                                <form action="/reply/commend/{{ $commend->id }}" method="post">
                                                    @csrf
                                                    <div class="input-group mb-0">
                                                        <input type="text" name="reply" class="form-control"
                                                            placeholder="Reply">
                                                        <div class="input-group-prepend">
                                                            <button type="submit" class="border-0">
                                                                <span class="input-group-text"><i
                                                                        class="bi bi-send-fill"></i></span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>

                                            </div>

                                            @foreach ($commendations_replies as $commendation_reply)
                                                @if ($commendation_reply->message_id == $commend->id)
                                                    <div class="mt-0 container ms-5">
                                                        <a href="javascript:void(0);" data-toggle="modal"
                                                            data-target="#view_info" class="user_name">
                                                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIUAAACFCAMAAABCBMsOAAAAaVBMVEX///8rLzIXHSG9vb4AAAAoLC8eIycJEhclKi38/PwhJilnaWu4ubnW19dbXV/i4uLz8/PHx8gADRPQ0dFFSEqlpqfo6OgAAAiUlZays7RvcXM8P0J+f4BPUlQPFxtfYmOdnp8zNzqJi4zeMWTiAAADg0lEQVR4nO2a7W6rMAxAS/gOpHxDgZZC3/8hF7Zd0a3QEmOzSjfnx6SqP3aUxI5j93DQaDQajUajeStKkZimmYjyzwyiuskH7jDGHD7kTR3tr+CHgZM6tm18YdvyUxD6+zoUXsqN3/DUK3b0CFtmPzh8Lglrw50c4rPrzTqMeO453kNCtGzRYYS1gl4iSZcX4ns50oRcYuFE/DwdxBoZfy0hNXhGKVGyV9vxvSmMMJn6l8ckMQ+/0CWOPl0pYRhpTyUhnofoTxhVvAaOgoUT0EhkKhJSgyZOlJaCajFKS0nCMCyKaC06RYuuwJfwr+sS1oR3xc8Z5dqENcHxtySrlC0q/CjpVY+FPBg9ukWjFqcjToNucVE9nPJ4XtAtcoBFji3h52vKm5/YOXaovofFe+zIm5zO94jUk0qh9QU7oVskgAyO/ywpATuCf5v5R+Wb/UjwGuhVDwbr8SXepOI7HNXqHH6kkDiYalvCTBILtcUgWgpZ9Cm9EMmaB+f1GuxMJXHw27U5w2sJW47CW9lF8Ug7bOG6PWHEXc96Te6yaloJmTW6l53GjihT3JMMz29XZyBvd45Ex3S5ErbT414TisLoFrrxnUHQLliivBkznU+PGbd9h0ZRP1TsrhFsc1YN/R+Mi0QfDGmVup0r/w5Bv8MoYBY/jrKwKIowi+J9h1WaO3xxy8OlqVQc5jexw+Zkgcd4155m/pcvTm0nvw1IpyOjw7X6LPtsGZfnWkxLEov6LGP3M3R5daX0KBt3Kj1thzHHy6/Nubnm3vhhyh68a8jSVz08VBe2xx3H4d5DQmcDze3uN08usblrrSE4pa/GqI8QDFZNA9CBNpArDdNSb67JXbFQq65C9aX8Dwux3KhXDJQXVoOhhUqiFBy/NDqkBCZcuITUcFFKn3L1QHkefsFIowpP5HkwHs6hu1HCMNzN78UYHB4TNtv6I5nb1v0YYbdtEkJ9WjZHt+1GUezrLbGtyZWot53ncbbca4oD/icWG0b/EfQSe8SCZ1DATGQJ+KwkBkzslrBzaM4AjNaXAQ/dN98g90AzF2SEugx0rCkwJSSw/Flvv03vcWG1H8pFNgE8GIBp8jOAk+b1P9pbRwqRiDGzxYgFyVvKM8OXFpAqWGCvRQUJ1QT9XEBqDBM3XciEAXk6awtt8b4WocVwsSDP1Sg0cQn/YIaj0Wg0Go3mv+UDHAA07kXUYusAAAAASUVORK5CYII="
                                                                class="img-comment" alt="avatar"> <span
                                                                class="ms-2 h5 text-black bolder fw-5">{{ $user2[0]->name }}</span>
                                                        </a>
                                                        <div class="chat-about mb-5">
                                                            <h6 class="m-b-0 fs-5">{{ $commendation_reply->reply }}
                                                            </h6>
                                                            <small class="italics bg-s"><i
                                                                    class="bi bi-calendar">{{ $commendation_reply->updated_at }}</i>
                                                            </small>
                                                        </div>
                                                    </div>
                                                @else
                                                @endif
                                            @endforeach

                                        </div>
                                    @endforeach



                                  

                                    <div class="chat-message clearfix">
                                        <form action="/cafetaria/post/commend/{{ $caf_id }}" method="post">
                                            @csrf
                                            <div class="input-group mb-0">
                                                <input type="text" name="message" class="form-control"
                                                    placeholder="Enter text here...">
                                                <div class="input-group-prepend">
                                                    <button type="submit" class="border-0">
                                                        <span class="input-group-text"><i
                                                                class="bi bi-send-fill"></i></span>
                                                    </button>
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>








        {{-- THE CHAT FOR COMPLAINS --}}
        <div id="complain_body" style="display: none">
            <div class="accordion mt-5" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button border border-warning text-black fs-5 fw-bolder" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseComment" aria-expanded="true"
                            aria-controls="collapseComment">
                            Make Complains about this Cafetaria
                        </button>
                    </h2>

                    <div id="collapseComment" class="accordion-collapse collapse show" aria-labelledby="headingComment"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body border border-warning">
                            <div class="">
                                <div class="overflow-y-auto">
                                    @foreach ($complains as $complain)
                                        @php
                                            $user = Auth::user()
                                                ->where('id', $complain->user_id)
                                                ->get('name');
                                        @endphp
                                        <a href="javascript:void(0);" data-toggle="modal" data-target="#view_info"
                                            class="user_name">
                                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIUAAACFCAMAAABCBMsOAAAAaVBMVEX///8rLzIXHSG9vb4AAAAoLC8eIycJEhclKi38/PwhJilnaWu4ubnW19dbXV/i4uLz8/PHx8gADRPQ0dFFSEqlpqfo6OgAAAiUlZays7RvcXM8P0J+f4BPUlQPFxtfYmOdnp8zNzqJi4zeMWTiAAADg0lEQVR4nO2a7W6rMAxAS/gOpHxDgZZC3/8hF7Zd0a3QEmOzSjfnx6SqP3aUxI5j93DQaDQajUajeStKkZimmYjyzwyiuskH7jDGHD7kTR3tr+CHgZM6tm18YdvyUxD6+zoUXsqN3/DUK3b0CFtmPzh8Lglrw50c4rPrzTqMeO453kNCtGzRYYS1gl4iSZcX4ns50oRcYuFE/DwdxBoZfy0hNXhGKVGyV9vxvSmMMJn6l8ckMQ+/0CWOPl0pYRhpTyUhnofoTxhVvAaOgoUT0EhkKhJSgyZOlJaCajFKS0nCMCyKaC06RYuuwJfwr+sS1oR3xc8Z5dqENcHxtySrlC0q/CjpVY+FPBg9ukWjFqcjToNucVE9nPJ4XtAtcoBFji3h52vKm5/YOXaovofFe+zIm5zO94jUk0qh9QU7oVskgAyO/ywpATuCf5v5R+Wb/UjwGuhVDwbr8SXepOI7HNXqHH6kkDiYalvCTBILtcUgWgpZ9Cm9EMmaB+f1GuxMJXHw27U5w2sJW47CW9lF8Ug7bOG6PWHEXc96Te6yaloJmTW6l53GjihT3JMMz29XZyBvd45Ex3S5ErbT414TisLoFrrxnUHQLliivBkznU+PGbd9h0ZRP1TsrhFsc1YN/R+Mi0QfDGmVup0r/w5Bv8MoYBY/jrKwKIowi+J9h1WaO3xxy8OlqVQc5jexw+Zkgcd4155m/pcvTm0nvw1IpyOjw7X6LPtsGZfnWkxLEov6LGP3M3R5daX0KBt3Kj1thzHHy6/Nubnm3vhhyh68a8jSVz08VBe2xx3H4d5DQmcDze3uN08usblrrSE4pa/GqI8QDFZNA9CBNpArDdNSb67JXbFQq65C9aX8Dwux3KhXDJQXVoOhhUqiFBy/NDqkBCZcuITUcFFKn3L1QHkefsFIowpP5HkwHs6hu1HCMNzN78UYHB4TNtv6I5nb1v0YYbdtEkJ9WjZHt+1GUezrLbGtyZWot53ncbbca4oD/icWG0b/EfQSe8SCZ1DATGQJ+KwkBkzslrBzaM4AjNaXAQ/dN98g90AzF2SEugx0rCkwJSSw/Flvv03vcWG1H8pFNgE8GIBp8jOAk+b1P9pbRwqRiDGzxYgFyVvKM8OXFpAqWGCvRQUJ1QT9XEBqDBM3XciEAXk6awtt8b4WocVwsSDP1Sg0cQn/YIaj0Wg0Go3mv+UDHAA07kXUYusAAAAASUVORK5CYII="
                                                class="img-comment" alt="avatar"> <span
                                                class="ms-2 h5 text-black bolder fw-5">{{ $user[0]->name }}</span>
                                        </a>
                                        <div class="chat-about mb-5">
                                            <h6 class="m-b-0 fs-5">{{ $complain->message }}
                                            </h6>
                                            <small class="italics bg-s"><i
                                                    class="bi bi-calendar">{{ $complain->updated_at }}</i>
                                            </small>
                                            <div style="display: flex" class="chat-message clearfix" id="reply_f">
                                                <form action="/reply/complain/{{ $complain->id }}" method="post">
                                                    @csrf
                                                    <div class="input-group mb-0">
                                                        <input type="text" name="reply" class="form-control"
                                                            placeholder="Reply">
                                                        <div class="input-group-prepend">
                                                            <button type="submit" class="border-0">
                                                                <span class="input-group-text"><i
                                                                        class="bi bi-send-fill"></i></span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>

                                            </div>

                                            @foreach ($complains_replies as $complain_reply)
                                                @if ($complain_reply->message_id == $complain->id)
                                                    <div class="mt-0 container ms-5">
                                                        <a href="javascript:void(0);" data-toggle="modal"
                                                            data-target="#view_info" class="user_name">
                                                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIUAAACFCAMAAABCBMsOAAAAaVBMVEX///8rLzIXHSG9vb4AAAAoLC8eIycJEhclKi38/PwhJilnaWu4ubnW19dbXV/i4uLz8/PHx8gADRPQ0dFFSEqlpqfo6OgAAAiUlZays7RvcXM8P0J+f4BPUlQPFxtfYmOdnp8zNzqJi4zeMWTiAAADg0lEQVR4nO2a7W6rMAxAS/gOpHxDgZZC3/8hF7Zd0a3QEmOzSjfnx6SqP3aUxI5j93DQaDQajUajeStKkZimmYjyzwyiuskH7jDGHD7kTR3tr+CHgZM6tm18YdvyUxD6+zoUXsqN3/DUK3b0CFtmPzh8Lglrw50c4rPrzTqMeO453kNCtGzRYYS1gl4iSZcX4ns50oRcYuFE/DwdxBoZfy0hNXhGKVGyV9vxvSmMMJn6l8ckMQ+/0CWOPl0pYRhpTyUhnofoTxhVvAaOgoUT0EhkKhJSgyZOlJaCajFKS0nCMCyKaC06RYuuwJfwr+sS1oR3xc8Z5dqENcHxtySrlC0q/CjpVY+FPBg9ukWjFqcjToNucVE9nPJ4XtAtcoBFji3h52vKm5/YOXaovofFe+zIm5zO94jUk0qh9QU7oVskgAyO/ywpATuCf5v5R+Wb/UjwGuhVDwbr8SXepOI7HNXqHH6kkDiYalvCTBILtcUgWgpZ9Cm9EMmaB+f1GuxMJXHw27U5w2sJW47CW9lF8Ug7bOG6PWHEXc96Te6yaloJmTW6l53GjihT3JMMz29XZyBvd45Ex3S5ErbT414TisLoFrrxnUHQLliivBkznU+PGbd9h0ZRP1TsrhFsc1YN/R+Mi0QfDGmVup0r/w5Bv8MoYBY/jrKwKIowi+J9h1WaO3xxy8OlqVQc5jexw+Zkgcd4155m/pcvTm0nvw1IpyOjw7X6LPtsGZfnWkxLEov6LGP3M3R5daX0KBt3Kj1thzHHy6/Nubnm3vhhyh68a8jSVz08VBe2xx3H4d5DQmcDze3uN08usblrrSE4pa/GqI8QDFZNA9CBNpArDdNSb67JXbFQq65C9aX8Dwux3KhXDJQXVoOhhUqiFBy/NDqkBCZcuITUcFFKn3L1QHkefsFIowpP5HkwHs6hu1HCMNzN78UYHB4TNtv6I5nb1v0YYbdtEkJ9WjZHt+1GUezrLbGtyZWot53ncbbca4oD/icWG0b/EfQSe8SCZ1DATGQJ+KwkBkzslrBzaM4AjNaXAQ/dN98g90AzF2SEugx0rCkwJSSw/Flvv03vcWG1H8pFNgE8GIBp8jOAk+b1P9pbRwqRiDGzxYgFyVvKM8OXFpAqWGCvRQUJ1QT9XEBqDBM3XciEAXk6awtt8b4WocVwsSDP1Sg0cQn/YIaj0Wg0Go3mv+UDHAA07kXUYusAAAAASUVORK5CYII="
                                                                class="img-comment" alt="avatar"> <span
                                                                class="ms-2 h5 text-black bolder fw-5">{{ $user2[0]->name }}</span>
                                                        </a>
                                                        <div class="chat-about mb-5">
                                                            <h6 class="m-b-0 fs-5">{{ $complain_reply->reply }}
                                                            </h6>
                                                            <small class="italics bg-s"><i
                                                                    class="bi bi-calendar">{{ $complain_reply->updated_at }}</i>
                                                            </small>
                                                        </div>
                                                    </div>
                                                @else
                                                @endif
                                            @endforeach
                                        </div>
                                    @endforeach




                                    <div class="chat-message clearfix">
                                        <form action="/cafetaria/post/complain/{{ $caf_id }}" method="post">
                                            @csrf
                                            <div class="input-group mb-0">
                                                <input type="text" name="message" class="form-control"
                                                    placeholder="Enter text here...">
                                                <div class="input-group-prepend">
                                                    <button type="submit" class="border-0">
                                                        <span class="input-group-text"><i
                                                                class="bi bi-send-fill"></i></span>
                                                    </button>
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>







    </div>


    {{-- RATE THE CAF --}}
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
        // let reply_f = document.getElementById().style.display = "flex";

        function commend() {
            const commend = document.getElementById('commend_body').style.display = 'block';
            const complain = document.getElementById('complain_body').style.display = "none";
          
        }

        function complain() {
            const commend = document.getElementById('commend_body').style.display = 'none';
            const complain = document.getElementById('complain_body').style.display = "block";
           
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

    .img-comment {
        width: 45px;
        border-radius: 50%;
        text-decoration: none;
    }

    .user_name {
        text-decoration: none;
        font-weight: bolder;
    }

    #complain,
    #commend {
        text-decoration: none;
        color: black
    }

    #complain:hover,
    #commend:hover {
        font-style: italic;
        font-weight: bolder
    }

    #commend:active,
    #complain:active {
        color: green;
    }
</style>
