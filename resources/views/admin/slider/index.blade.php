@extends('layouts.app')

@section('Title', 'Slider')

@section('content')


<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <a href="{{route('slider.create')}}" class="btn btn-primary">Create</a>
                <div class="card">

                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">Slider Table</h4>
                        <!-- <p class="card-category"> Here is a subtitle for this table</p> -->
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th>
                                        Serial
                                    </th>
                                    <th>
                                        Title
                                    </th>
                                    <th>
                                        Sub Title
                                    </th>
                                    <th>
                                        Image
                                    </th>
                                    <th>
                                        Action
                                    </th>
                                </thead>
                                <tbody>
                                    @foreach($sliders as $key=>$slider)
                                    <tr>
                                        <td>
                                            {{$key+1}}
                                        </td>
                                        <td>
                                            {{$slider->title}}
                                        </td>
                                        <td>
                                            {{$slider->sub_title}}
                                        </td>
                                        <td>
                                            <img src="{{asset('uploads/slider/'.$slider->image)}}" width="300" height="150" alt="{{$slider->title}}">
                                        </td>
                                        <td>
                                            <a href="{{route('slider.edit',$slider->id)}}" class="btn btn-info"><i class="material-icons">edit</i></a>

                                            <!-- <a href="{{route('slider.destroy',$slider->id)}}" class="btn btn-danger"><i class="material-icons">delete</i></a> -->

                                            <form action="{{route('slider.destroy',$slider->id)}}" method="POST">

                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"  class="btn btn-danger"><i class="material-icons">delete</i></button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection