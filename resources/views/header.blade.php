<?php

use App\Http\Controllers\ProductController;
$total=0;
if(Session::has('user'))
{
  $total= ProductController::cartItem();

}
?>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" >E-Commerce</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="a"><a href="/project/eCommerce/home">Home</a></li>
      <li><a href="/project/eCommerce/myOrders">Orders</a></li>
    </ul>
    <form class="navbar-form navbar-left " action="/project/eCommerce/search">
      <div class="form-group">
        <input type="text" class="form-control search-box" placeholder="Search" name="query">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="/project/eCommerce/cartList">Cart({{$total}})</a></li>
      @if (Session::has('user'))
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{Session::get('user')['name']}}
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="/project/eCommerce/logout">Logout</a></li>
        </ul>
      </li>
      @else
      <li><a href="/project/eCommerce/login">Login</a></li> 
      <li><a href="/project/eCommerce/register">Register</a></li>          
         
      @endif
  </div>
</nav>