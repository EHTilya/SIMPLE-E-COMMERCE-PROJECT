@extends('master')
@section('content')

    <div class="container">
        <div class="cl-sm-10">
            <table class="table">
                <tbody>
                  <tr>
                    <td>Amount</td>
                    <td>${{$total}}</td>
                  </tr>
                  <tr>
                    <td>Tax</td>
                    <td>$0</td>
                  </tr>
                  <tr>
                    <td>Delivery</td>
                    <td>$10</td>
                  </tr>
                  <tr>
                    <td>Total Amount</td>
                    <td>${{$total+10}}</td>
                  </tr>
                </tbody>
              </table>
        </div>
        <div>
            <form action="/project/eCommerce/orderPlace" method="POST">
                @csrf
                <div class="form-group">
                  <input type="text" name="address" class="form-control" placeholder="enter your Address"><br>
                </div>
                <div class="form-group">
                  <label for="pwd">Payment Method</label><br>
                  <input type="radio" value="cash" name="payment"><span>Online paymeny</span><br>
                  <input type="radio" value="cash" name="payment"><span>EMI payment</span><br>
                  <input type="radio" value="cash" name="payment"><span>Payment on Delivery</span><br>
                </div>       
                <button type="submit" class="btn btn-default">Order Now</button>
              </form>
            
        </div>
    </div>
      
     
@endsection
