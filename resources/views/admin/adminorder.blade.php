

<x-app-layout >
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
  
  @include('admin.admincss')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <style>
.topnav {
  overflow: hidden;
  background-color: #e9e9e9;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 5px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}
  </style>
  <body>
  <div class="container-scroller"> 
  
  
  
    @include('admin.navbar')
    <!-- right side -->
    
    <div class="container my-5">
    <div class="topnav bg-transparent">
      <div class="search-container">
        <form action="{{url('/search')}}" method="get">
          <input type="text" placeholder="Search.." name="search" class="text-black">
          <button type="submit"><i class="fa fa-search"></i></button>
        </form>
      </div>
    </div>
        <center><h3 class="my-5 text-danger">Food Orders</h3></center>
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">Name</th>
                <th scope="col">Adress</th>
                <th scope="col">Phone</th>
                <th scope="col">Pincode</th>
                <th scope="col">Food</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
                <th scope="col">Total</th>

                </tr>
            </thead>
            <tbody>
                @foreach($data as $data)
                <tr>
                <td class="text-white">{{$data->name}}</td>
                <td class="text-white">{{$data->address}}</td>
                <td class="text-white">{{$data->phone}}</td>
                <td class="text-white">{{$data->pincode}}</td>
                <td class="text-white">{{$data->foodname}}</td>
                <td class="text-white">₹{{$data->price}}</td>
                <td class="text-white">{{$data->quantity}}</td>
                <td class="text-white">₹{{$data->price * $data->quantity}}</td>
                <!-- <td class=""><img style="border-radius: 0%; width:70px;height:auto;" src="/chefimage/{{$data->image}}"></td> -->
                <!-- <td class="text-danger"><a href="{{url('/deletechef',$data->id)}}">Delete</a></td>
                <td class="text-danger"><a href="{{url('/updatechef',$data->id)}}">Update</a></td> -->
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>

  </div>
    @include('admin.adminscript')

  </body>
</html>