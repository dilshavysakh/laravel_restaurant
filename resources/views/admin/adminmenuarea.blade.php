

<x-app-layout >
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
  
  @include('admin.admincss')

  </head>
  <body>
  <div class="container-scroller"> 
  
  
  
    @include('admin.navbar')
    <!-- right side -->
    
    <div class="container my-5">
    <h3 class="ml-2 text-danger">Add Menu Items</h3>
        <br>
        <form method="POST" action="{{url('/uploadmenufood')}}" enctype="multipart/form-data">
            @csrf
            <div class="col-sm-6">
            <input type="text" class="form-control" id="" name='title' placeholder="Title">
            </div>
            <br>
            <div class="col-sm-6">
            <input type="number" class="form-control" name="price" id="" placeholder="price">
            </div>
            <br>
            <div class="col-sm-6">
            <input type="file" class="form-control" name="image" id="" placeholder="Image">
            </div>
            <br>
            <div class="col-sm-6">
            <input type="text" class="form-control" name="description" id="" placeholder="Description">
            </div>
            <br>   
            <div class="col">
            <input type="submit" class="btn btn-success" name="submit" id="" value="Submit">
            </div>
        </form>

        <center><h3 class="my-5 text-danger" >Menu Details</h3></center>
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">Title</th>
                <th scope="col">Price</th>
                <th scope="col">Description</th>
                <th scope="col">Image</th>
                <th scope="col"></th>
                <th scope="col"></th>

                </tr>
            </thead>
            <tbody>
                @foreach($data as $data)
                <tr>
                <td class="text-white">{{$data->title}}</td>
                <td class="text-white">${{$data->price}}</td>
                <td class="text-white">{{$data->description}}</td>
                <td class=""><img style="border-radius: 0%; width:70px;height:auto;" src="/menufoodimage/{{$data->image}}"></td>
                <td class="text-danger"><a href="{{url('/deletemenuarea',$data->id)}}">Delete</a></td>
                <td class="text-danger"><a href="{{url('/updatemenuarea',$data->id)}}">Update</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>

    
      
    

  </div>
    @include('admin.adminscript')

  </body>
</html>