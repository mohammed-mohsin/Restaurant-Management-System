@extends('layouts.app')

@section('Title', 'Edit | Category')

@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Edit Category</h4>
                        <!-- <p class="card-category">Complete your profile</p> -->
                    </div>
                    <div class="card-body">

                        <form action="{{route('category.update',$category->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Name</label>
                                        <input type="text" value="{{$category->name}}" name="name" class="form-control">
                                    </div>
                                </div>                             
                            </div>                        
                            <a href="{{route('category.index')}}" class="btn btn-danger">Back</a>
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