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
<h1 class="text-center">Our Story</h1>
<hr>
  <div class="row">
    <h3 class="text-center"></h3>
    <hr class="underline">
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
      <img src="{{ URL::to('img/placeholders/placeholder-1.jpg') }}" class="img-thumbnail"/>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
      <h4>Founder: Founder's Name</h4>
      <h4>Year: Founding Date</h4>
      <hr>
      <h4>The Story: </h4>
      <hr>
      <p>
        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.
      </p>
    </div>
  </div>

  <hr>

  <div class="row">
    <h3 class="text-center">Where We've Been</h3>
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
                <img src="{{ URL::to('img/placeholders/placeholder-2.jpg') }}">
                <div class="carousel-caption-right">
                  <h4>Year: 2005</h4>
                  <h5>Accomplishment: Best Networkers in Mombasa</h5>
                  <hr>
                  <h4>The Story: </h4>
                  <hr>
                  <p>
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.
                  </p>
                </div>
              </div>
            </div>
            <div class="item carousel-height">
              <div class="row">
                <img src="{{ URL::to('img/placeholders/placeholder-1.jpg') }}">
                <div class="carousel-caption-right">
                  <h4>Year: 2006</h4>
                  <h5>Accomplishment: Best Internet Provider in Mombasa</h5>
                  <hr>
                  <h4>The Story: </h4>
                  <hr>
                  <p>
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.
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
      <img src="{{ URL::to('img/placeholders/user-placeholder.png') }}" class="img-thumbnail" />
      <p class="blockquote-reverse">
        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.
      </p>
      <hr>
      <h5 class="blockquote"><i>Name: John Doe</i></h5>
      <h5 class="blockquote"><i>Position: Procurement</i> </h5>
      <h5 class="blockquote"><i>Company: Satisfied Ltd</i></h5>
    </div>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
      <img src="{{ URL::to('img/placeholders/user-placeholder.png') }}" class="img-thumbnail" />
      <p class="blockquote-reverse">
        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.
      </p>
      <hr>
      <h5 class="blockquote"><i>Name: Jane Doe</i></h5>
      <h5 class="blockquote"><i>Position: CEO</i> </h5>
      <h5 class="blockquote"><i>Company: Logistics Ltd</i></h5>
    </div>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
      <img src="{{ URL::to('img/placeholders/user-placeholder.png') }}" class="img-thumbnail" />
      <p class="blockquote-reverse">
        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.
      </p>
      <hr>
      <h5 class="blockquote"><i>Name: John Doe</i></h5>
      <h5 class="blockquote"><i>Position: Marketing</i> </h5>
      <h5 class="blockquote"><i>Company: Designs Ltd</i></h5>
    </div>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
      <img src="{{ URL::to('img/placeholders/user-placeholder.png') }}" class="img-thumbnail" />
      <p class="blockquote-reverse">
        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.
      </p>
      <hr>
      <h5 class="blockquote"><i>Name: Jane Doe</i></h5>
      <h5 class="blockquote"><i>Position:  Sales</i> </h5>
      <h5 class="blockquote"><i>Company: Merchant Ltd</i></h5>
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
            <img src="{{ URL::to('img/placeholders/placeholder-0.jpg') }}" class="img-thumbnail">
            <div class="carousel-caption">
              Partner 1
            </div>
          </div>
          <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <img src="{{ URL::to('img/placeholders/placeholder-1.jpg') }}" class="img-thumbnail">
            <div class="carousel-caption">
              Partner 2
            </div>
          </div>
          <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <img src="{{ URL::to('img/placeholders/placeholder-1.jpg') }}" class="img-thumbnail">
            <div class="carousel-caption">
              Partner 3
            </div>
          </div>
        </div>
        <div class="item">
          <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <img src="{{ URL::to('img/placeholders/placeholder-1.jpg') }}" class="img-thumbnail">
            <div class="carousel-caption">
              Partner 4
            </div>
          </div>
          <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <img src="{{ URL::to('img/placeholders/placeholder-1.jpg') }}" class="img-thumbnail">
            <div class="carousel-caption">
              Partner 5
            </div>
          </div>
          <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <img src="{{ URL::to('img/placeholders/placeholder-1.jpg') }}" class="img-thumbnail">
            <div class="carousel-caption">
              Partner 6
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
      <img src="{{ URL::to('img/placeholders/user-placeholder.png') }}"
      class="center-block img-circle img-responsive">
      <h3 class="text-center">John Doe</h3>
      <p class="text-center">CEO</p>
    </div>
    <div class="col=xs-4 col-sm-4 col-md-4 col-lg-4">
      <img src="{{ URL::to('img/placeholders/user-placeholder.png') }}"
      class="center-block img-circle img-responsive">
      <h3 class="text-center">Jane Doe</h3>
      <p class="text-center">CFO</p>
    </div>
    <div class="col=xs-4 col-sm-4 col-md-4 col-lg-4">
      <img src="{{ URL::to('img/placeholders/user-placeholder.png') }}"
      class="center-block img-circle img-responsive">
      <h3 class="text-center">John Doe</h3>
      <p class="text-center">COO</p>
    </div>
  </div>
</div>

@endsection
