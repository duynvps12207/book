<?php
    use App\Http\Controllers\SachProduct;
?>

<div class="header-bottom"><!--header-bottom-->
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="mainmenu pull-left">
                    <ul class="nav navbar-nav collapse navbar-collapse">
                        <li><a href="index.html" class="active">Home</a></li>
                        <li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                            <ul role="menu" class="sub-menu">
                                <li><a href="{{action([SachProduct::class, 'product'])}}">Products</a></li>
                                <li><a href="product-details.html">Product Details</a></li> 
                                <li><a href="checkout.html">Checkout</a></li> 
                                <li><a href="cart.html">Cart</a></li> 
                                <li><a href="login.html">Login</a></li> 
                            </ul>
                        </li> 
                        <li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
                            <ul role="menu" class="sub-menu">
                                <li><a href="blog.html">Blog List</a></li>
                                <li><a href="blog-single.html">Blog Single</a></li>
                            </ul>
                        </li> 
                        <li><a href="404.html">404</a></li>
                        <li><a href="contact-us.html">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-4">
                <form action="{{URL::to('/timkiem')}}" method="post">
                    {{ csrf_field() }}
                    <div class="search_box pull-right">
                        <input type="text" name="keyword_submit" placeholder="Nhập tên sách..."/>
                    </div>
                    {{-- <input type="submit" name="search_item" class="btn btn-info btn-sm" value="Tìm kiếm"> --}}
                </form>
                
            </div>
        </div>
    </div>
</div><!--/header-bottom-->