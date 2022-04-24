<!DOCTYPE html>
<html lang="en">

  <head>
  <base href="/public">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>Salt - Restaurant HTML Template</title>
<!--
    
TemplateMo 558 Salt

https://templatemo.com/tm-558-klassy-cafe

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">
    <!-- jquery cdn -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
    
    <body>
    <style>
        .payment-info {
    background: #9e9e9e;
    padding: 10px;
    border-radius: 6px;
    color: #fff;
    font-weight: bold
}

.product-details {
    padding: 10px
}

body {
    background: #eee
}

.cart {
    background: #fff
}

.p-about {
    font-size: 12px
}

.table-shadow {
    -webkit-box-shadow: 5px 5px 15px -2px rgba(0, 0, 0, 0.42);
    box-shadow: 5px 5px 15px -2px rgba(0, 0, 0, 0.42)
}

.type {
    font-weight: 400;
    font-size: 10px
}

label.radio {
    cursor: pointer
}

label.radio input {
    position: absolute;
    top: 0;
    left: 0;
    visibility: hidden;
    pointer-events: none
}

label.radio span {
    padding: 1px 12px;
    border: 2px solid #ada9a9;
    display: inline-block;
    color: #8f37aa;
    border-radius: 3px;
    text-transform: uppercase;
    font-size: 11px;
    font-weight: 300
}

label.radio input:checked+span {
    border-color: #fff;
    background-color: blue;
    color: #fff
}

.credit-inputs {
    background: rgb(102, 102, 221);
    color: #fff !important;
    border-color: rgb(102, 102, 221)
}

.credit-inputs::placeholder {
    color: #fff;
    font-size: 13px
}

.credit-card-label {
    font-size: 9px;
    font-weight: 300
}

.form-control.credit-inputs:focus {
    background: rgb(102, 102, 221);
    border: rgb(102, 102, 221)
}

.line {
    border-bottom: 1px solid rgb(102, 102, 221)
}

.information span {
    font-size: 12px;
    font-weight: 500
}

.information {
    margin-bottom: 5px
}

.items {
    -webkit-box-shadow: 5px 5px 4px -1px rgba(0, 0, 0, 0.25);
    box-shadow: 5px 5px 4px -1px rgba(0, 0, 0, 0.08)
}

.spec {
    font-size: 11px
}
.hidden_input{
    border: none;
    background-color: transparent;
    resize: none;
    outline: none;
}
</style>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky mb-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            <img src="assets/images/klassy-logo.png" align="Salt html template">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="{{url('/redirects')}}" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#menu">Menu</a></li>
                            <li class="scroll-to-section"><a href="#chefs">Chefs</a></li> 
                            <li class="scroll-to-section"><a href="#reservation">Contact Us</a></li> 
                            @auth
                                <li class="scroll-to-section">
                                    <a style="display:inline" href="{{url('/showcart',Auth::user()->id)}}">
                                    Cart <span class="bg-warning px-2">
                                        {{ $count }}
                                    </a>
                                    </span>
                                </li> 
                            @endauth
                                
                            
                            <li>
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                </li> 
                @auth
                <x-app-layout>
                    </x-app-layout>
                        
                    @else
                    <li><a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a></li>
                        

                    @if (Route::has('register'))
                    <li><a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a></li> 
                    @endif
                    @endauth
                </div>
            @endif
                            
                        </ul>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div class="container mt-5 p-3 rounded cart" >
        <div class="row no-gutters" style="margin-top: 118px;">
            <div class="col-md-8">
                <div class="product-details mr-2">
                    <div class="d-flex flex-row align-items-center"><i class="fa fa-long-arrow-left"></i><span class="ml-2">Continue Shopping</span></div>
                    <hr>
                    <div class="section-heading">
                                <h2>Shopping Cart</h2>
                    </div>
                    <div class="d-flex justify-content-between" style="display: block;"><span class="h6 text-primary">You have {{$count}} items in your cart</span></div>
                </div> 

                <form action="{{url('/orderconfirm')}}" method="POST"> 
                @csrf

                <div class="row">
                    <div class="col-md-9">
                        @foreach($data as $data)
                                <div class="d-flex justify-content-between align-items-center mt-3 p-2 items rounded">
                                    <div class="d-flex flex-row"><img class="rounded" src="/menufoodimage/{{$data->image}}" width="40">
                                        <div class="ml-2">
                                            <span class="font-weight-bold d-block">
                                                <input class="hidden_input" type="text" name="foodname[]" value="{{$data->title}}" readonly>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row align-items-center">
                                        <span class="d-block">
                                            <input type="text" name="quantity[]" value="{{$data->quantity}}" class="hidden_input" readonly>
                                        </span>
                                        <span class="d-block ml-5 font-weight-bold">
                                            <input type="text" name="price[]" value="{{$data->price}}" class="hidden_input" readonly>
                                        </span>
                                    </div>
                                </div>
                        @endforeach
                    </div>
                    <div class="col-md-1">
                        @foreach($data2 as $data2)
                            <a href="{{url('/removecart',$data2->id)}}" style="display:block;margin: 30px 0 1px 0;line-height: 3;background-color: #ebebeb;border-radius: 4px;" >
                                <i class="fa fa-trash-o ml-3" style="padding: 4px"></i>
                            </a>
                        @endforeach
                    </div>
                    <div class="col-md-2">

                    </div>
                </div> 
                <input type="button" class="border-danger btn mt-4 text-danger text-white" id="order" value="Order Now" name="order">   
            </div>
            <div class="col-md-4" style="display: none;" id="appear">
                <div class="payment-info m-3" >
                    <div class="mt-5"></div>
                    <div><label class="credit-card-label">Full Name </label><input type="text" class="form-control credit-inputs" name="name"></div>
                    <div><label class="credit-card-label">Address</label><input type="text" class="form-control credit-inputs" name="address" ></div>
                    <div class="row">
                        <div class="col-md-6"><label class="credit-card-label">Pin Code</label><input type="number" class="form-control credit-inputs" name="pincode"></div>
                        <div class="col-md-6"><label class="credit-card-label">City</label><input type="text" class="form-control credit-inputs" name="city"></div>
                    </div>
                    <div><label class="credit-card-label">Mobile Number</label><input type="Number" class="form-control credit-inputs" name="phone" ></div>
                    <div class="mb-5"></div>
                </div>
                <center>
                    <input type="button" class="bg-danger btn text-white ml-3 mt-2" id="close" value="Close" name="close">   
                    <input type="submit" class="bg-success btn text-white ml-3 mt-2" id="confirm" value="Confirm Order" name="orderconfirm">   
                </center>
            </div>

            </form>  
        </div>
    </div>

        <script>
            $('#order').click(
                function(){
                    $('#appear').show();
                }
            )
            $('#close').click(
                function(){
                    $('#appear').hide();
                }
            )
        </script>
        <!-- <div class="col-md-4">
            <div class="payment-info">
                <div class="d-flex justify-content-between align-items-center"><span>Card details</span><img class="rounded" src="" width="30"></div><span class="type d-block mt-3 mb-1">Card type</span><label class="radio"> <input type="radio" name="card" value="payment" checked> <span><img width="30" src="https://img.icons8.com/color/48/000000/mastercard.png" /></span> </label>
                <label class="radio"> <input type="radio" name="card" value="payment"> <span><img width="30" src="https://img.icons8.com/officel/48/000000/visa.png" /></span> </label>
                <label class="radio"> <input type="radio" name="card" value="payment"> <span><img width="30" src="https://img.icons8.com/ultraviolet/48/000000/amex.png" /></span> </label>
                <label class="radio"> <input type="radio" name="card" value="payment"> <span><img width="30" src="https://img.icons8.com/officel/48/000000/paypal.png" /></span> </label>
                <div><label class="credit-card-label">Name on card</label><input type="text" class="form-control credit-inputs" placeholder="Name"></div>
                <div><label class="credit-card-label">Card number</label><input type="text" class="form-control credit-inputs" placeholder="0000 0000 0000 0000"></div>
                <div class="row">
                    <div class="col-md-6"><label class="credit-card-label">Date</label><input type="text" class="form-control credit-inputs" placeholder="12/24"></div>
                    <div class="col-md-6"><label class="credit-card-label">CVV</label><input type="text" class="form-control credit-inputs" placeholder="342"></div>
                </div>
                <hr class="line">
                <div class="d-flex justify-content-between information"><span>Subtotal</span><span>$3000.00</span></div>
                <div class="d-flex justify-content-between information"><span>Shipping</span><span>$20.00</span></div>
                <div class="d-flex justify-content-between information"><span>Total(Incl. taxes)</span><span>$3020.00</span></div><button class="btn btn-primary btn-block d-flex justify-content-between mt-3" type="button"><span>$3020.00</span><span>Checkout<i class="fa fa-long-arrow-right ml-1"></i></span></button>
            </div>
        </div> -->

    <!-- ***** Main Banner Area End ***** -->

    
    <footer >
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-xs-12">
                    <div class="right-text-content">
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="logo">
                    <a href="index.html" style="background-color: white;"><img src="assets/images/salt02.png" style="background: white;padding: 5px 0;border-radius: 21px;"  alt=""></a>
                    </div>
                </div>
                <div class="col-lg-4 col-xs-12">
                    <div class="left-text-content">
                        <p>© Copyright Salt Co.
                        
                        <br>Design: Dilzz</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/slick.js"></script> 
    <script src="assets/js/lightbox.js"></script> 
    <script src="assets/js/isotope.js"></script> 
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>
    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>
  </body>
</html>