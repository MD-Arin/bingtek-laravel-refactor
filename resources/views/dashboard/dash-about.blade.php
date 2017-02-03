@extends('layouts.dash')

@section('title', 'Edit About')

@section('edit-about-active', 'active')

@section('dash-content')

<div class="container-fluid">
    <div class="row">
        <h1 class="text-center">Edit History</h1>
        <hr class="underline">

        <form class="form-group" action="/dash-about/aboutHistory" method="POST" enctype="multipart/form-data">
            <input class="form-control" type="text" name="1-history-h1" placeholder="Our Story">
            <hr>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                {{ csrf_field() }}       

                <input class="btn btn-primary" type="file" name="1-history-img-1" >
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <input class="form-control" type="text" name="1-history-h4-1" placeholder="Founder: Founder's Name">
                <br>
                <input class="form-control" type="text" name="1-history-h4-2" placeholder="Year: Founding Date">
                <br>
                <input class="form-control" type="text" name="1-history-h4-3" placeholder="The: Story">
                <br>
                <textarea class="form-control" rows="8" cols="20" name="1-history-h2" placeholder="Story Body Content"></textarea>
            </div>
            
            <input class="btn btn-primary" style="margin-left: 47%; margin-top: 20px;" type="submit" name="1-history-submit" value="Save">
        </form>

    </div>

    <hr>
    
    <!--Milestones-->

    <div class="row">
        <h3 class="text-center">Edit Milestones</h3>
        <hr class="underline">
        <div class="container-fluid">
            <div class="row">
                <form class="form-group" action="/dash-about/aboutMilestones" method="POST" enctype="multipart/form-data">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <input class="btn btn-primary" type="file" name="1-milestone-img-1" >
                        <br>
                        <input class="form-control" type="number" name="1-milestone-year-1" placeholder="Year Of Milestone">
                        <br>
                        <input class="form-control" type="text" name="1-milestone-accomplishment-1" placeholder="Accomplishment">
                        <br>
                        <textarea class="form-control" rows="8" cols="20" name="1-milestone-accomplishment-body-1" placeholder="Accomplishment Body/ Story"></textarea>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <input class="btn btn-primary" type="file" name="1-milestone-img-2" >
                        <br>
                        <input class="form-control" type="number" name="1-milestone-year-2" placeholder="Year Of Milestone">
                        <br>
                        <input class="form-control" type="text" name="1-milestone-accomplishment-2" placeholder="Accomplishment">
                        <br>
                        <textarea class="form-control" rows="8" cols="20" name="1-milestone-accomplishment-body-2" placeholder="Accomplishment Body/ Story"></textarea>
                    </div>
                    
                    <input class="btn btn-primary" type="submit" style="margin-left: 47%; margin-top: 20px;" name="1-milestones-submit" value="Save">
                </form>
            </div>
        </div>
    </div>
    <br>
    <br>

    
    <!--Testimonials-->
    <div class="text-center">
        <hr>
        <h1>Edit Testimonials</h1>
        <hr>
    </div>
    <div class="row">
        <form class="form-group" action="/dash-about/aboutTestimonials" method="POST" enctype="multipart/form-data">
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                <input class="btn btn-primary" name="1-testimonials-img-1" type="file">
                <br>
                <textarea class="form-control" name="1-testimonials-message-1" rows="8" cols="20" placeholder="Testimonial Message"></textarea>
                <hr>
                <input class="form-control" name="1-testimonials-name-1" type="text" placeholder="Name">
                <br>
                <input class="form-control" name="1-testimonials-position-1" type="text" placeholder="Position">
                <br>
                <input class="form-control" name="1-testimonials-company-1" type="text" placeholder="Company">
            </div>
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                <input class="btn btn-primary" name="1-testimonials-img-2" type="file">
                <br>
                <textarea class="form-control" name="1-testimonials-message-2" rows="8" cols="20" placeholder="Testimonial Message"></textarea>
                <hr>
                <input class="form-control" name="1-testimonials-name-2" type="text" placeholder="Name">
                <br>
                <input class="form-control" name="1-testimonials-position-2" type="text" placeholder="Position">
                <br>
                <input class="form-control" name="1-testimonials-company-2" type="text" placeholder="Company">
            </div>
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                <input class="btn btn-primary" name="1-testimonials-img-3" type="file">
                <br>
                <textarea class="form-control" name="1-testimonials-message-3" rows="8" cols="20" placeholder="Testimonial Message"></textarea>
                <hr>
                <input class="form-control" name="1-testimonials-name-3" type="text" placeholder="Name">
                <br>
                <input class="form-control" name="1-testimonials-position-3" type="text" placeholder="Position">
                <br>
                <input class="form-control" name="1-testimonials-company-3" type="text" placeholder="Company">
            </div>
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                <input class="btn btn-primary" name="1-testimonials-img-4" type="file">
                <br>
                <textarea class="form-control" name="1-testimonials-message-4" rows="8" cols="20" placeholder="Testimonial Message"></textarea>
                <hr>
                <input class="form-control" name="1-testimonials-name-4" type="text" placeholder="Name">
                <br>
                <input class="form-control" name="1-testimonials-position-4" type="text" placeholder="Position">
                <br>
                <input class="form-control" name="1-testimonials-company-4" type="text" placeholder="Company">
            </div>

            <input class="btn btn-primary" type="submit" name="1-testimonials-submit-1" style="margin-left: 47%; margin-top: 20px;" value="Save">
        </form>
    </div>

    <div class="text-center">
        <hr>
        <h1>Edit Partners</h1>
        <hr>
    </div>
    <div class="container-fluid">
        <div class="row">
            <form class="form-group" action="/dash-about/aboutPartners" method="POST" enctype="multipart/form-data">
                <input class="btn btn-primary" type="file" name="1-partners-img-1">
                <br>
                <input class="form-control" type="text" name="1-partners-name-1" placeholder="Partner Name">
                <br>
                <input class="form-control" type="number" name="1-partners-number-1" min="1" max="6" value="1" placeholder="Partner Number">
                
                <input class="btn btn-primary" type="submit" name="1-partners-submit-1" style="margin-left: 47%; margin-top: 20px;" value="Save">
            </form>
        </div>
    </div>

    <div class="text-center">
        <hr>
        <h1>Edit Team</h1>
        <hr>
    </div>
    <div class="row">
        <form class="form-group" action="/dash-about/aboutTeam" method="POST" enctype="multipart/form-data">
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <input class="btn btn-primary" type="file" name="1-team-img-1">
                <br>
                <input class="form-control" type="text" name="1-team-name-1" placeholder="Team Member Name">
                <br>
                <input class="form-control" type="text" name="1-team-position-1" placeholder="Team Member Position">
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <input class="btn btn-primary" type="file" name="1-team-img-2">
                <br>
                <input class="form-control" type="text" name="1-team-name-2" placeholder="Team Member Name">
                <br>
                <input class="form-control" type="text" name="1-team-position-2" placeholder="Team Member Position">
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <input class="btn btn-primary" type="file" name="1-team-img-3">
                <br>
                <input class="form-control" type="text" name="1-team-name-3" placeholder="Team Member Name">
                <br>
                <input class="form-control" type="text" name="1-team-position-3" placeholder="Team Member Position">
            </div>

            <input class="btn btn-primary" type="submit" style="margin-left: 47%; margin-top: 20px;" value="Save">
        </form>
    </div>
</div>

@endsection
