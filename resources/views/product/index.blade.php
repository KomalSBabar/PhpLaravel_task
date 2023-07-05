


@extends('product.layout')

@section('content')

<div class="container-fluid">
  
    <div class="card">
        <div class="card-header"> Product  Page</div>
        <div class="card-body">
    <div class="row ">

        <div class="col-md-4 col-sm-6">
            <div >
                <div class="card" style="width: 61rem;  margin:5%; height:250px;">

                    <div>
                        <div class="">
                            <table class="table table-bordered ">
                                <thead>
                                    <tr>
                                        <!-- Set columns width -->

                                        <a href="{{ route('product.create')}}"> <button class="btn product_button btn-outline-dark my-2 my-sm-0" >create Product </button></a>
                                    </tr>
                                    <tr>
                                        <!-- Set columns width -->
                                        <th class="text-center py-3 px-4" style="min-width: 83px;">id</th>
                                        <th class=" text-center py-3 px-4" style="min-width: 100px;"> name</th>
                                        <th class=" text-center py-3 px-4" style="min-width: 100px;"> amount</th>
                                        <th class="text-center  py-3 px-4" style="min-width: 136px;">description</th>
                                        <th class="text-center  py-3 px-4" style="height:70px; text-align:center;"> image</th>
                                       
                                        <th class="text-center  py-3 px-4" style="min-width: 5px;" colspan=2> Actions</th>
                                    </tr>
                                
                                </thead>
                                <tbody>
                                    @foreach ($products as $key => $product)
                                    <tr>
                                        <td class="p-4">
                                            <div class="media align-items-center">
                                                <div class="media-body">
                                                    {{$key + 1}}
                                                </div>
                                            </div>
                                        </td>
                                       
                                        <td class="p-4">
                                            <div class="media align-items-center">
                                                <div class="media-body">
                                                    <h6 class="d-block text-dark"> title :{{$product->name}} </h6>
                                                   
                                                    <!-- <h6 class="d-block text-dark"> id :{{$product->short_description}} </h6> -->
                                                </div>
                                            </div>
                                        </td>

                                        <td class="p-4">
                                            <div class="media align-items-center">
                                                <div class="media-body">
                                                    <h6 class="d-block text-dark"> {{ $product->amount}}</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="p-4">
                                            <div class="media align-items-center">
                                                <div class="media-body">
                                                    <h6 class="d-block text-dark desc" > {{ $product->description}}</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="p-4">
                                            <div class="media align-items-center">
                                                <div class="media-body">
                                                    <img class="card-img-top" height="25px" src="{{asset('/image/'.$product->image_url)}}" alt="Card image cap">
                                                  
                                                </div>
                                            </div>
                                        </td>
                                        <td class="p-4">
                                            <div class="media align-items-center">
                                                <div class="media-body">
                                                    <h6 class="d-block btn "><a href="{{ url('edit/'.$product->id) }}"><img  height="25px"src="{{asset('/image/edit-icon.webp')}}" alt="edit"></h6>

                                                    <!-- <h6 class="d-block btn btn-primary"><a href="{{ url('edit/'.$product->id) }}">View</h6> -->
                                                      
                                                </div>
                                            </div>
                                        </td>
                                    
                                        <td class="p-4">
                                            <div class="media align-items-center">
                                                <div class="media-body">
                                                
                                                    <h6 class="d-block btn "><a href="{{ url('product/'.$product->id) }}"><img  height="25px"src="{{asset('/image/eye_icon.jpg')}}" alt="view"></h6>
                                                      
                                                </div>
                                            </div>
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
  