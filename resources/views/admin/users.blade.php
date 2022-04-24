

<x-app-layout>
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
    
    <div class="container mt-5">
      
      <div class="row">
      <h3 class="ml-2 text-danger">Users</h3>
        <div class="col-md-8">
          <table class="table table-striped ml-5">
              <thead>
                  <tr>
                  <th scope="col">Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Action</th>
                  </tr>
              </thead>
              <tbody>
                  @foreach($data as $data)
                  <tr>
                  <td class="text-white">{{$data->name}}</td>
                  <td class="text-white">{{$data->email}}</td>
                  @if($data->usertype=="0")
                  <td class="text-danger"><a href="{{url('/deleteuser',$data->id)}}">Delete</a></td>
                  @else
                  <td class="text-white">Not Allowed</td>
                  @endif
                  </tr>
                  @endforeach
              </tbody>
          </table>
        </div>
    </div>

    

  </div>
    @include('admin.adminscript')

  </body>
</html>