

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
      <h3 class="text-danger">Reservation Details</h3>
        <div class="row">
        <div class="col-md-8">
        <table class="table table-striped">
            <thead>
                <tr>
                  <th scope="col">Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Phone</th>
                  <th scope="col">No of Guests</th>
                  <th scope="col">Date</th>
                  <th scope="col">Time</th>
                  <th scope="col">Message</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $data)
                <tr>
                  <td class="text-white">{{$data->name}}</td>
                  <td class="text-white">{{$data->email}}</td>
                  <td class="text-white">{{$data->phone}}</td>
                  <td class="text-white">{{$data->guest}}</td>
                  <td class="text-white">{{$data->date}}</td>
                  <td class="text-white">{{$data->time}}</td>
                  <td class="text-white">{{$data->message}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
        
    </div>
        </div>
        

    

  </div>
    @include('admin.adminscript')

  </body>
</html>