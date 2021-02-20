<?php 

use TechStore\Classes\Cart;
use TechStore\Classes\Models\Order;
use TechStore\Classes\Models\OrderDetail;

require_once("../app.php");

if($request->postHas('submit')){

    $name=$request->post('name');
    $email=$request->post('email');
    $phone=$request->post('phone');
    $address=$request->post('address');

   $order = new Order;

  $orderId=$order->insertAndGetId(
      "name,email,phone,address",
   "'$name','$email','$phone',
   '$address'");




   $cart = new Cart;
   $orderDetail= new OrderDetail;

   foreach($cart->all() as $id=>$prodData){
       $qty=$prodData['qty'];
        $orderDetail->insert("order_id,product_id,qty",
        "'$orderId','$id','$qty'");
   }

   $request->redirect("products.php");
}