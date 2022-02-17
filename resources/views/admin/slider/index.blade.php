@extends('layouts.app')

@section('Title', 'Slider')

@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <a href="{{route('slider.create')}}" class="btn btn-primary">Create</a>
                <div class="card card-plain">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title mt-0"> Slider List</h4>
                        <!-- <p class="card-category"> Here is a subtitle for this table</p> -->
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead class="">
                                    <th>
                                        Serial
                                    </th>
                                    <th>
                                        Title
                                    </th>
                                    <th>
                                        Subtitle
                                    </th>
                                    <th>
                                        Image
                                    </th>
                                    <th>
                                        Action
                                    </th>
                                </thead>
                                <tbody>
                                
                                    <tr>
                                        <td>
                                      
                                        </td>
                                        <td>
                                     
                                        </td>
                                        <td>
                                     
                                        </td>
                                        <td>
                                  
                                        </td>
                                        <td>
                                            $36,738
                                        </td>
                                    </tr>
                               

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