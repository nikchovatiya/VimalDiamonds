@extends('BackEnd\layout')
@section('content')
<style>
    body {
        color: #000;
        overflow-x: hidden;
        height: 100%;
        background-repeat: no-repeat;
        background-size: 100% 100%
    }

    .card {
        padding: 30px 40px;
        margin-top: 60px;
        margin-bottom: 60px;
        border: none !important;
        box-shadow: 0 6px 12px 0 rgba(0, 0, 0, 0.2)
    }

    .blue-text {
        color: #00BCD4
    }

    .form-control-label {
        margin-bottom: 0
    }

    input,
    textarea,
    button {
        padding: 8px 15px;
        border-radius: 5px !important;
        margin: 5px 0px;
        box-sizing: border-box;
        border: 1px solid #ccc;
        font-size: 18px !important;
        font-weight: 300
    }

    input:focus,
    textarea:focus {
        -moz-box-shadow: none !important;
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
        border: 1px solid #00BCD4;
        outline-width: 0;
        font-weight: 400
    }

    .btn-block {
        text-transform: uppercase;
        font-size: 15px !important;
        font-weight: 400;
        height: 43px;
        cursor: pointer
    }

    .btn-block:hover {
        color: #fff !important
    }

    button:focus {
        -moz-box-shadow: none !important;
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
        outline-width: 0
    }
</style>
<!-- About Start -->
<div class="container-fluid px-1  mx-auto">
    <div class="row d-flex justify-content-center">
        <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">

            <div class="card">
                <h5 class="text-center mb-4">Website Settings</h5>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br />
                @endif

                @if(session()->get('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div><br />
                @endif
                <form class="form-card" method="post" action="{{route('setup_post')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex">
                            <label class="form-control-label px-3">Website Title
                                <span class="text-danger"> *</span>
                            </label>
                            <input type="text" id="title" name="title" placeholder="Enter Your Title" value="{{$data->title}}">
                        </div>
                        <div class="form-group col-sm-6 flex-column d-flex">
                            <label class="form-control-label px-3">Company Name
                                <span class="text-danger"> *</span>
                            </label>
                            <input type="text" id="companyname" name="companyname" placeholder="Enter Your Company Name" value="{{$data->companyname}}">
                        </div>
                        <div class="form-group col flex-column d-flex">
                            <label class="form-control-label px-3">Address</label>
                            <input type="text" id="address" name="address" placeholder="Enter Address" value="{{$data->address}}">
                        </div>
                    </div>
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex">
                            <label class="form-control-label px-3">Business email</label>
                            <input type="text" id="email" name="email" placeholder="Email" value="{{$data->email}}">
                        </div>
                        <div class="form-group col-sm-6 flex-column d-flex">
                            <label class="form-control-label px-3">Phone number</label>
                            <input type="text" id="mobile" name="mobile" placeholder="Mobile No. with Country Code" value="{{$data->mobile}}">
                        </div>
                    </div>
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm flex-column d-flex">
                            <label class="form-control-label px-3">Social Profile Links</label>
                        </div>
                    </div>
                    <div id="social-group">
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex">
                                <input type="text" id="fblink" name="fblink" placeholder="Facebook Profile Link" value="{{$data->fblink}}">
                                <input type="text" id="twlink" name="twlink" placeholder="Twitter Profile Link" value="{{$data->twlink}}">
                            </div>
                            <div class="form-group col-sm-6 flex-column d-flex">
                                <input type="text" id="ytlink" name="ytlink" placeholder="Youtube Profile Link" value="{{$data->ytlink}}">
                                <input type="text" id="lilink" name="lilink" placeholder="Linkedin Profile Link" value="{{$data->lilink}}">
                            </div>
                        </div>
                    </div>

                    <div class="form-group col-sm12 flex-column d-flex">
                        <input accept="image/*" type="file" style="background-color: #fff;" class="form-control" id="logo" onchange="loadFile(event)" />
                        <img id="output" src="#" alt="" class="form-control" style="background-color: #fff; border:none;" />
                    </div>


                    <br />

                    <div class="row justify-content-center">
                        <div class="form-group col-sm-6"> <button type="submit" class="btn-block btn-primary">Update Settings</button> </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    var loadFile = function(event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.style.display = "block";
    };
</script>
<!-- About End -->
@stop