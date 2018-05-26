@extends('base')

@section('css')

    <style>
        .carousel {
            width: 100%;
            margin-top: 50px;
        }
    </style>

@stop

@section('outsidecontainer')
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="/assets/slider/1.jpg" alt="image 1">
                <div class="carousel-caption">
                    Acme Nature Tours
                </div>
            </div>
            <div class="item">
                <img src="/assets/slider/2.jpg" alt="image 2">
                <div class="carousel-caption">
                    Experience Nature as Never Before
                </div>
            </div>
            <div class="item">
                <img src="/assets/slider/3.jpg" alt="image 3">
                <div class="carousel-caption">
                    Register Now!
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">

        </div>
    </div>
    <div class="row">
        <div class="col-md-4 well text-center">
            <h3>About</h3>
            <!-- bootstrapについているアイコン -->
            <span class="glyphicon glyphicon-globe bigger-icon" aria-hidden="true"></span>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores eaque ipsa molestias, pariatur qui veniam vero voluptas? Accusantium doloremque exercitationem fuga magnam magni officia quis, repudiandae! Commodi consequuntur illo pariatur.</p>
        </div>
        <div class="col-md-4 well empty-well text-center">
            <h3>Tours</h3>
            <span class="glyphicon glyphicon-eye-open bigger-icon" aria-hidden="true"></span>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium commodi deleniti id ipsum maxime natus, nemo. Adipisci, commodi, culpa dolore eos fuga hic id illo laboriosam porro qui quidem rerum?</p>
        </div>
        <div class="col-md-4 well text-center">
            <h3>Contact</h3>
            <span class="glyphicon glyphicon-earphone bigger-icon" aria-hidden="true"></span>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, amet dolore doloremque et eveniet ipsam itaque laboriosam minus mollitia officia quas qui quisquam quod, sed suscipit totam ullam veniam, veritatis.</p>
        </div>
    </div>
@stop
