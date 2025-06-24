<?php
include 'project_des/header.php';
include 'project_des/nav.php'; 
?>

    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text product-more">
                        <a href="./index.php"><i class="fa fa-home"></i> Home</a>
                        <a href="./shop.php">Shop</a>
                        <span>Shopping Cart</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Shopping Cart Section Begin -->
    <section class="shopping-cart spad">
        <div class="container">
            <div class="row">

<?php

$all_price = 0;

$select_product = "SELECT * FROM `cart`";
$result_product = $connection->query($select_product);
foreach ($result_product as $key_products)
{
    $name = $key_products['name'];
    $image = $key_products['image'];
    $price = $key_products['price'];
    $count = $key_products['count'];
    
?>
                <div class="col-lg-12">
                    <div class="cart-table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Product Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th><a href="delete_cart.php?id=<?php echo $id = $key_products['id']; ?>" class="ti-close"></a></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="cart-pic first-row"><img src="control-panel/img/<?php echo $image; ?> " alt=""></td>
                                    <td><h5> <?php echo $name; ?></h5></td>
                                    <td class="p-price first-row">$<?php echo $price; ?></td>
                                    <td class="qua-col first-row">
                                        <div class="quantity"><?php echo $count; ?>
                                            <!-- <div class="pro-qty">
                                                <input type="text" value="<?php echo $count; ?>">
                                            </div> -->
                                            <!-- <div class="filter-widget">
                                            <a href="shopping-cart.php" class="filter-btn">@</a>
                                            </div> -->
                                        </div>
                                    </td>
                                    <td class="total-price first-row">$<?php echo $price; ?> </td>
                                    <td class="close-td first-row"><a href="delete_cart.php?id=<?php echo $key_products['id']; ?>" class="ti-close"></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

<?php
for ($i= 0; $i < $count; $i++) {
    $all_price += $price;
}
}
?>

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="cart-buttons">
                                <a href="shop.php" class="primary-btn continue-shop">Continue shopping</a>
                                <a href="shopping-cart.php" class="primary-btn up-cart">Update cart</a>
                            </div>
                            <div class="discount-coupon">
                                <h6>Discount Codes</h6>
                                <form action="shopping-cart.php" class="coupon-form">
                                    <input type="text" placeholder="Enter your codes">
                                    <button type="submit" class="site-btn coupon-btn">Apply</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-4 offset-lg-4">
                            <div class="proceed-checkout">
                                <ul>
                                    <li class="subtotal">Subtotal <span>$<?php echo $all_price ?></span></li>
                                    <li class="cart-total">Total <span>$<?php echo $all_price ?></span></li>
                                </ul>
                                <a href="#" class="proceed-btn">PROCEED TO CHECK OUT</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shopping Cart Section End -->


 <?php include 'project_des/footer.php'; ?>
 