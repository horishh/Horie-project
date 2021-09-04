@extends('layout.master')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">

        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/9254FA3B4385331D34717C2C5BF8D08394D9C67B2D3DD44B2FFC4597BBE463D4/scale?width=1200&aspectRatio=1.78&format=jpeg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Avengers Infinity War</h5>
                            <p>In theaters july 28</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://res.cloudinary.com/jerrick/image/upload/v1603660616/5f95eb47386558001c0610d7.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Avengers EndGame</h5>
                            <p>In theaters July 29</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://whatsamwatches.com/wp-content/uploads/2021/01/wonder-woman.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Wonder Woman</h5>
                            <p>In theaters December 2</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://ideahuntr.com/wp-content/uploads/2021/05/What-time-is-the-Friends-Reunion-released-on-HBO-Max.jpeg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Friends Reunion</h5>
                            <p>27 May on hbo max</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://moviewire.com/wp-content/uploads/2020/12/tenet.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Some representative placeholder content for the third slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://m.media-amazon.com/images/M/MV5BMzZiMTljZDctYzAzNy00ODQzLTlhMDQtY2U3ZmU3N2Y3N2VmXkEyXkFqcGdeQXVyNDQ0MTYzMDA@._V1_.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Some representative placeholder content for the third slide.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 mt-4 mb-4"
        <div class="col-md-4">
            <ul class="list-group list-group-horizontal">
                <li class="list-group-item">Latest</li>
                <li class="list-group-item">Most popular</li>
            </ul>
        </div>
        </div>
        <div class="card-group">
            <div class="card">
                <img class="card-img-top style="height="600px"; " src="https://i.gadgets360cdn.com/large/extraction_poster_1586173758536.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Extraction</h5>
                    <p class="card-text">In theaters April 24</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top style="height="600px"" src="https://www.washingtonpost.com/graphics/2019/entertainment/oscar-nominees-movie-poster-design/img/black-panther-web.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Black Panther</h5>
                    <p class="card-text">In theaters September 8</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top style="height="600px"" src="https://images.redbox.com/Images/EPC/https://images.redbox.com/Images/EPC/boxArtVertical/211567.jpg?h=375&resize=fit&w=250" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Mortal Kombat</h5>
                    <p class="card-text">In theaters November 6</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>
        <div class="col-md-12 ">
            @foreach($posts as $post)
                @if(isset($message))
                    <div class="alert alert-success" role="alert">
                        {{ $message }}
                    </div>
                @endif

                    <div class="card border-light mb-3 h-350 d-inline-block" style="width: 314px; ">

                            <img class="card-img-top style="height="500px" src="{{ asset('storage/uploads/'. $post->image) }}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">{{ $post->title }}</h5>
                                <p class="card-body text-secondary">{{ $post->content }}</p>
                            <form method="POST" action="{{ route('post.delete.form') }}">
                                @csrf
                                @method('delete')
                                <input type="hidden" name="id" value="{{ $post->id }}">
                                <a href="{{ route('post.edit.form', $post->id)  }}" class="btn btn-outline-primary">Edit</a>
                                <button class="btn btn-outline-danger" type="submit">Delete</button>
                            </form>
                        </div>
                    </div>
            @endforeach
        </div>
        @endsection

                        </div>
                    </div>
                    </div>
            </div>
    </div>
</div>
