<div class="panel panel-footer">
    <div class="row">
        <div class="panel-body">
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <ul class="list-group">
                    <h3 class="text-justify">Find Us:</h3>
                    <li class="list-group-item"><h5>City: {{ $footerLocation1li1 }}</h5></li>
                    <li class="list-group-item"><h5>Street: {{ $footerLocation1li2 }}</h5></li>
                    <li class="list-group-item"><h5>Building: {{ $footerLocation1li3 }}</h5></li>
                    <li class="list-group-item"><h5>Floor: {{ $footerLocation1li4 }}</h5></li>
                    <li class="list-group-item"><h5>Room No: {{ $footerLocation1li5 }}</h5></li>
                </ul>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <div class="row">
                    <h3>Social Media: </h3>
                </div>
                <div class="row">
                    <a target="_blank" href="{{ $footerSocial1i1 }}"><img src="{{ URL::to('img/social media/facebook-dark-active.png') }}" class="img-icon"><span> Facebook</span></a>
                </div>
                <hr>
                <div class="row">
                    <a target="_blank" href="{{ $footerSocial1i2 }}"><img src="{{ URL::to('img/social media/twitter-dark-active.png') }}" class="img-icon"><span> Twitter</span></a>
                </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <h3>Map: </h3>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3979.788658758764!2d39.672811714272214!3d-4.063452897045186!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1840131f2a02c0ad%3A0x26a250be10fd2125!2sKaderbhoy+Building%2C+Nkrumah+Rd%2C+Mombasa!5e0!3m2!1sen!2ske!4v1474294144629" width="400px" height="300px"></iframe>
            </div>
        </div>
        <div class="panel panel-heading" >
            <h5 class="float-left">Copyright &copy Bingtek <?php echo date("Y"); ?></h5>

            <h5 class="float-right">
                {{ $footerContacts1li1 }}
            </h5>

            <h5 class="float-right">
                {{ $footerContacts1li2 }}
            </h5>

            <h5 class="float-right">
                {{ $footerContacts1li3 }}
            </h5>
        </div>
    </div>
</div>