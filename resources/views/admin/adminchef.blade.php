

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
    <h3 class="ml-2 text-danger">Add Chefs</h3>
        <br>
        <form method="POST" action="{{url('/uploadchef')}}" enctype="multipart/form-data">
            @csrf
            <div class="col-sm-6">
            <input type="text" class="form-control" id="" name='name' placeholder="Name">
            </div>
            <br>
            <div class="col-sm-6">
            <input type="text" class="form-control" name="speciality" id="" placeholder="Speciality">
            </div>
            <br>
            <div class="col-sm-6">
            <input type="file" class="form-control" name="image" id="" placeholder="Image">
            </div>
            <br>
            
            <div class="col">
            <input type="submit" class="btn btn-success" name="submit" id="" value="Submit">
            </div>
        </form>

        <center><h3 class="my-5 text-danger">Chef Details</h3></center>
        <table class="table table-striped">
            <thead>
                <tr>
                  <th scope="col">Chef Name</th>
                  <th scope="col">Speciality</th>
                  <th scope="col">Image</th>
                  <th scope="col"></th>
                  <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $data)
                  <tr>
                    <td class="text-white">{{$data->name}}</td>
                    <td class="text-white">{{$data->speciality}}</td>
                    <td class=""><img style="border-radius: 0%; width:70px;height:auto;" src="/chefimage/{{$data->image}}"></td>
                    <td class="text-danger"><a href="{{url('/deletechef',$data->id)}}">Delete</a></td>
                    <td class="text-danger"><a href="{{url('/updatechef',$data->id)}}">Update</a></td>
                  </tr>
                @endforeach
            </tbody>
        </table>

    </div>

    
      
    

  </div>
    @include('admin.adminscript')

  </body>
</html>