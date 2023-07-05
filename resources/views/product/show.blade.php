







@extends('product.layout')

@section('content')

<div class="container-fluid">
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('product.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
       
       
        <div class="container">
    <table class="table">
      <thead>
        <tr>
          <th colspan=2>  Product Details</th>
          
        </tr>
      </thead>
      <tbody>
        <tr colspacing = 45px>
          <td>Name :</td>
          <td> {{ $product_detail->name }}</td>
        </tr>
        <tr>
          <td>Amount:</td>
          <td> {{ $product_detail->amount }}</td>
        </tr>
        <tr>
          <td>Image:</td>
          <td>  <img class="card-img-top" height="95px" src="{{asset('/image/'.$product_detail->image_url)}}" alt="Card image cap">
                                                  </td>
      
        </tr>
        <tr>
          <td>Description:</td>
          <td> {{ $product_detail->name }}</td>
        </tr>
      </tbody>
    </table>
  </div>





    </div>
  
</div>

@endsection
  







