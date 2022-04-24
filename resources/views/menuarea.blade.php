<section class="section" id="offers">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4 text-center">
                    <div class="section-heading">
                        <h6>Klassy Week</h6>
                        <h2>This Week’s Special Meal Offers</h2>
                    </div>
                </div>
            </div>
            <section>
                <center class="d-flex">
                    <div class="container">
                        <div class="row justify-content-between">   
                        @foreach($data3 as $data)
                        <form action="{{url('/addcart',$data->id)}}" method="post" class="d-flex">
                            @csrf
                                <div class="card my-4 mx-3" style="width: 16rem;" >
                                    <img class="card-img-top"style="height:12rem;" src="/menufoodimage/{{$data->image}}" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">{{$data->title}}</h5>
                                        <p class="card-text ">₹{{$data->price}}</p>
                                        <p class="card-text mb-3">{{$data->description}}</p>
                                        <input type="number" min="1" value="1" name="quantity" style="width: 70px;display:inline;border-radius: 8px;height: 38px;text-align: center;">
                                        <button type="submit" class="btn bg-danger text-white" value="">Add Cart</button>
                                    </div>
                                </div>
                        </form>
                        @endforeach
                        </div>
                    </div>
                </center>
            </section>   
        </div>
    </section>