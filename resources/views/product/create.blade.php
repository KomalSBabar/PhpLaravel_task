


@extends('product.layout')

@section('content')


<form class="form_productcreate"  action="{{route('product_store')}}"   method="POST" enctype="multipart/form-data"   >
@csrf
   <h3>Create product Page</h3>
    <div class="form-outline mb-4">
        <label class="form-label" for="form3Example1cg"> Product name</label> 
      <input type="text" id="form3Example1cg" name="name"  class="form-control form-control-lg" />
      
    </div>
    <div class="form-outline mb-4">
        <label class="form-label" for="form3Example4cg">amount</label>
      <input type="integer" id="form3Example4cg"  name="amount"  class="form-control form-control-lg" />  
    </div>
    <div class="form-outline mb-4">
        <label class="form-label" for="form3Example9cg">  Description </label> 
      <input type="text" id="form3Example7cg" name="description"  class="form-control form-control-lg" />
    </div> 
    <div class="form-outline mb-4">
        <label class="form-label" for="form3Example3cg">image_url</label>
      <input type="file" height=55px id="form3Example3cg" name="image_url"  class="form-control form-control-lg" />
     
    </div>
    <div class="d-flex justify-content-center">
      <button type="submit" class="product_button" >submit</button>
      <button type="submit" class="product_button" style="margin-top: 12px;!important"> <a href="{{ route('product.index')}}">Back</a></button>
  
    </div>
  
  </form>

  @endsection