@extends('layouts.app')

@section('Title', 'Edit | Slider')

@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Edit</h4>
                        <!-- <p class="card-category">Complete your profile</p> -->
                    </div>
                    <div class="card-body">

                        <form action="{{route('slider.update',$slider->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Title</label>
                                        <input type="text" value="{{$slider->title}}" name="title" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Subtitle</label>
                                        <input type="text" value="{{$slider->sub_title}}" name="sub_title" class="form-control">


                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <!-- <div class="form-group"> -->
                                    <label class="bmd-label-floating">Slide Image</label>
                                    <!-- <button class="btn btn-primary">Upload Image -->
                                    <!-- <input type="file" onchange="loadFile(event)" name="image" class="form-control"> -->
                                    <input name="image" type="file" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">


                                    <!-- </button> -->
                                    <!-- </div> -->
                                </div>
                                <div class="col-md-6">
                                    <img id="blah" src="{{asset('uploads/slider/'.$slider->image)}}" alt="your image" width="500" height="300" />

                                </div>
                            </div>
                            <a href="{{route('slider.index')}}" class="btn btn-danger">Back</a>
                            <button type="submit" class="btn btn-primary pull-right">Update Profile</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection