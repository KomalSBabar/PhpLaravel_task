


@extends('product.layout')

@section('content')

<div class="card">
        <div class="card-header">  Edit product Page</div>
        <div class="card-body">
 <form action="{{route('product.update',[$post->id])}}" method="POST" enctype="multipart/form-data">
@csrf
@method('Post')
    <div class="form-outline mb-4">
        <label class="form-label" for="form3Example1cg"> Product name</label> 
      <input type="text" id="form3Example1cg" name="name" value="{{$post->name}}"  class="form-control form-control-lg" />
      
    </div>

    <div class="form-outline mb-4">
        <label class="form-label" for="form3Example3cg">image_url</label>

    
        @if("{{asset('/image/'.$post->image_url)}}")
        <img src="{{asset('/image/'.$post->image_url)}}" id="image"> 
             <button type="button" class="btn btn-primary" onclick="up()" id="btnuploadimage">update image </button>
             <input type="file" name="image_url"  style="display:none" id="image_upload"  class="form-control form-control-lg" />
            
    @else
            <p>No image found</p>
    @endif
</div>
<div class="form-outline mb-4">
        <label class="form-label" >amount</label>
      <input type="integer" id="form3Example4cg"  name="amount"  value="{{$post->amount}}"  height="25px" class="form-control form-control-lg" />  
    </div>
    <div class="form-outline mb-4">
        <label class="form-label">Description </label> 
      <input type="text" id="form3Example7cg" name="description" value="{{$post->description}}"   class="form-control form-control-lg" />
    </div> 
    <div class="d-flex justify-content-center">
      <button type="submit"  >submit</button>
      <button type="submit"> <a href="{{ route('product.index')}}">Back</a></button>
    </div>
    </form>
        </div>

@endsection
        <script type="text/javascript">
            function up(){
    var image = document.getElementById('image');
    var file = document.getElementById('image_upload');
    var btn = document.getElementById('btnuploadimage')
    image.style.display = 'none';
    btn.style.display = 'none';
    file.style.display = 'block';
  }
  </script>
