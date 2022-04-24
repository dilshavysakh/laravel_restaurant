<x-app-layout >
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
  
<base href="/public">

  @include('admin.admincss')

  </head>
  <body>
  <div class="container-scroller"> 
  
  
  
    @include('admin.navbar')
    <!-- right side -->
    <center>
    <div class="container my-5">
        <br>
        <form method="POST" action="{{url('/update',$data->id)}}" enctype="multipart/form-data">
            @csrf
            <div class="col-sm-6">
            <input type="text" class="form-control" id="" name='title' value="{{$data->title}}">
            </div>
            <br>
            <div class="col-sm-6">
            <input type="number" class="form-control" name="price" id="" value="{{$data->price}}">
            </div>
            <br>
            <div class="col-sm-6">
            Old Image
            <img style="width:70px;height:auto;" src="/foodimage/{{$data->image}}" alt="">
            <br>
            <input type="file" class="form-control" name="image" id="" placeholder="Image">
            </div>
            <br>
            <div class="col-sm-6">
            <input type="text" class="form-control" name="description" id="" value="{{$data->description}}">
            </div>
            <br>   
            <div class="col">
            <input type="submit" class="btn btn-success" name="submit" id="" value="Submit">
            </div>
        </form>


    </div>
    </center>
    
      
    

  </div>
    @include('admin.adminscript')

  </body>
</html>