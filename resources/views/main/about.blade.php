@extends('layouts.master')

@section('title')
  About
@endsection

@section('about-active')
 active
@endsection

@section('content')

<div class="container-fluid margin-top">
<hr>
<h1 class="text-center">{{ $aboutHistory1H1 }}</h1>
<hr>
  <div class="row">
    <h3 class="text-center"></h3>
    <hr class="underline">
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
      <img src="{{ URL::to($aboutHistory1Img) }}" class="img-thumbnail"/>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
      <h4>{{ $aboutHistory2H1 }}</h4>
      <h4>{{ $aboutHistory2H2 }}</h4>
      <hr>
      <h4>{{ $aboutHistory2H3 }}</h4>
      <hr>
      <p>
        {{ $aboutHistory2P }}
      </p>
    </div>
  </div>

  <hr>

  <div class="row">
    <h3 class="text-center">{{ $aboutAccomplishments1H1 }}</h3>
    <hr class="underline">
    <div class="container-fluid">
      <div class="row">
        <div id="milestone-carousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#milestone-carousel"  data-slide-to="0" class="active"></li>
            <li data-target="#milestone-carousel"  data-slide-to="1"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active carousel-height">
              <div class="row">
                <img src="{{ URL::to($aboutAccomplishments1Img1) }}">
                <div class="carousel-caption-right">
                  <h4>{{ $aboutAccomplishments1Img1H1 }}</h4>
                  <h5>{{ $aboutAccomplishments1Img1H2 }}</h5>
                  <hr>
                  <h4>{{ $aboutAccomplishments1Img1H3 }}</h4>
                  <hr>
                  <p>
                    {{ $aboutAccomplishments1Img1P }}
                  </p>
                </div>
              </div>
            </div>
            <div class="item carousel-height">
              <div class="row">
                <img src="{{ URL::to($aboutAccomplishments1Img2) }}">
                <div class="carousel-caption-right">
                  <h4>{{ $aboutAccomplishments1Img2H1 }}</h4>
                  <h5>{{ $aboutAccomplishments1Img2H2 }}</h5>
                  <hr>
                  <h4>{{ $aboutAccomplishments1Img2H3 }}</h4>
                  <hr>
                  <p>
                    {{ $aboutAccomplishments1Img2P }}
                  </p>
                </div>
              </div>
            </div>
          </div>

          <!-- Controls -->
          <a class="left carousel-control" href="#milestone-carousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#milestone-carousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </div>

  <br>
  <br>

  <div class="text-center">
    <hr>
    <h1>Testimonials</h1>
    <hr>
  </div>
  <div class="row">
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
      <img src="{{ URL::to($aboutTestimonials1Img) }}" class="img-thumbnail" />
      <p class="blockquote-reverse">
        {{ $aboutTestimonials1P }}
      </p>
      <hr>
      <h5 class="blockquote"><i>{{ $aboutTestimonials1H51 }}</i></h5>
      <h5 class="blockquote"><i>{{ $aboutTestimonials1H52 }}</i> </h5>
      <h5 class="blockquote"><i>{{ $aboutTestimonials1H53 }}</i></h5>
    </div>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
      <img src="{{ URL::to($aboutTestimonials2Img) }}" class="img-thumbnail" />
      <p class="blockquote-reverse">
        {{ $aboutTestimonials2P }}
      </p>
      <hr>
      <h5 class="blockquote"><i>{{ $aboutTestimonials2H51 }}</i></h5>
      <h5 class="blockquote"><i>{{ $aboutTestimonials2H52 }}</i> </h5>
      <h5 class="blockquote"><i>{{ $aboutTestimonials2H53 }}</i></h5>
    </div>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
      <img src="{{ URL::to($aboutTestimonials3Img) }}" class="img-thumbnail" />
      <p class="blockquote-reverse">
        {{ $aboutTestimonials3P }}
      </p>
      <hr>
      <h5 class="blockquote"><i>{{ $aboutTestimonials3H51 }}</i></h5>
      <h5 class="blockquote"><i>{{ $aboutTestimonials3H52 }}</i> </h5>
      <h5 class="blockquote"><i>{{ $aboutTestimonials3H53 }}</i></h5>
    </div>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
      <img src="{{ URL::to($aboutTestimonials4Img) }}" class="img-thumbnail" />
      <p class="blockquote-reverse">
        {{ $aboutTestimonials4P }}
      </p>
      <hr>
      <h5 class="blockquote"><i>{{ $aboutTestimonials4H51 }}</i></h5>
      <h5 class="blockquote"><i>{{ $aboutTestimonials4H52 }}</i> </h5>
      <h5 class="blockquote"><i>{{ $aboutTestimonials4H53 }}</i></h5>
    </div>
  </div>

  <div class="text-center">
    <hr>
    <h1>Partners</h1>
    <hr>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div id="partners-carousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#partners-carousel" data-slide-to="0" class="active"></li>
        <li data-target="#partners-carousel" data-slide-to="1"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <img src="{{ URL::to($aboutPartners1Img) }}" class="img-thumbnail">
            <div class="carousel-caption">
              {{ $aboutPartners1ImgH1 }}
            </div>
          </div>
          <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <img src="{{ URL::to($aboutPartners2Img) }}" class="img-thumbnail">
            <div class="carousel-caption">
              {{ $aboutPartners2ImgH1 }}
            </div>
          </div>
          <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <img src="{{ URL::to($aboutPartners3Img) }}" class="img-thumbnail">
            <div class="carousel-caption">
              {{ $aboutPartners3ImgH1 }}
            </div>
          </div>
        </div>
        <div class="item">
          <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <img src="{{ URL::to($aboutPartners4Img) }}" class="img-thumbnail">
            <div class="carousel-caption">
              {{ $aboutPartners4ImgH1 }}
            </div>
          </div>
          <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <img src="{{ URL::to($aboutPartners5Img) }}" class="img-thumbnail">
            <div class="carousel-caption">
              {{ $aboutPartners5ImgH1 }}
            </div>
          </div>
          <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <img src="{{ URL::to($aboutPartners6Img) }}" class="img-thumbnail">
            <div class="carousel-caption">
              {{ $aboutPartners6ImgH1 }}
            </div>
          </div>
        </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#partners-carousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#partners-carousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>

  <div class="text-center">
    <hr>
    <h1>Our Team</h1>
    <hr>
  </div>
  <div class="row">
    <div class="col=xs-4 col-sm-4 col-md-4 col-lg-4">
      <img src="{{ URL::to($aboutTeam1Img) }}"
      class="center-block img-circle img-responsive">
      <h3 class="text-center">{{ $aboutTeam1ImgH1 }}</h3>
      <p class="text-center">{{ $aboutTeam1ImgH2 }}</p>
    </div>
    <div class="col=xs-4 col-sm-4 col-md-4 col-lg-4">
      <img src="{{ URL::to($aboutTeam2Img) }}"
      class="center-block img-circle img-responsive">
      <h3 class="text-center">{{ $aboutTeam2ImgH1 }}</h3>
      <p class="text-center">{{ $aboutTeam2ImgH2 }}</p>
    </div>
    <div class="col=xs-4 col-sm-4 col-md-4 col-lg-4">
      <img src="{{ URL::to($aboutTeam3Img) }}"
      class="center-block img-circle img-responsive">
      <h3 class="text-center">{{ $aboutTeam3ImgH1 }}</h3>
      <p class="text-center">{{ $aboutTeam3ImgH2 }}</p>
    </div>
  </div>
</div>

@endsection
