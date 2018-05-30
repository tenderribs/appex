<div class="tiles">
    <div class="tile is-ancestor">
        <div class="tile is-vertical is-8">
            <div class="tile">
                <div class="tile is-parent is-vertical">
                    <article class="tile is-child box">
                        <p class="title">Blog - Knowledge Management in the AEC industry</p>
                    </article>

                    <article class="tile is-child box">
                        <article class="message is-dark">
                            <div class="message-body">
                                <p class="title">Blog</p>
                                <p>Blog posts coming soon.</p>
                                <br>
                            </div>
                        </article>
                    </article>
                </div>
                <div class="tile is-parent">
                    <article class="tile is-child box">
                        <figure class="image">
                            <img src="images/bridge.jpg">
                        </figure>
                    </article>
                </div>
            </div>
        </div>

        <div class="tile is-parent">
            <article class="tile is-child box">
                <article class="message is-dark">
                    <div class="message-body">
                        <p class="title">Contact us</p>
                        <p>Applied Experience GmbH is located in Baden, Switzerland.
                            <br>Please contact us at info@appex.ch.
                        </p>
                </article>
            </article>
            </div>
        </div>
    </div> 
<?php 
// connect to database
include 'config/config.php';
 
// include objects
include_once "objects/blogposts.php";
 
// connect to database here
// get database connection
$database = new Database();
$db = $database->getConnection();
 
// initialize objects
$product = new Product($db);
$product_image = new ProductImage($db);
$cart_item = new CartItem($db);

// read all products in the database
$stmt=$product->read($from_record_num, $records_per_page);
 
// count number of retrieved products
$num = $stmt->rowCount();
 
// if products retrieved were more than zero
if($num>0){
    // needed for paging
    $page_url="products.php?";
    $total_rows=$product->count();
 
    // show products
    include_once "read_products_template.php";
}
 
// tell the user if there's no products in the database
else{
    echo "<div class='col-md-12'>";
        echo "<div class='alert alert-danger'>No products found.</div>";
    echo "</div>";
}
?>
    <p class="bottomspaceBlog">