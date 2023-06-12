<?php

function component($productname, $productauthor, $productprice, $productid){
    $element = "
    
    <div class=\"col-md-3 col-sm-6 my-3 my-md-0 \">
                <form action=\"index.php\" method=\"post\">
                    <div class=\"card shadow\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">$productname</h5>
                            <h5 class=\"card-title\">$productauthor</h5>
                            <h5>
                                <span class=\"price\">$$productprice</span>
                            </h5>

                            <button type=\"submit\" class=\"btn btn-warning my-3\" name=\"add\">Add to Cart <i class=\"fas fa-shopping-cart\"></i></button>
                             <input type='hidden' name='product_id' value='$productid'>
                        </div>
                    </div>
                </form>
            </div>
    ";
    echo $element;
}

function cartElement($productname, $productauthor, $productprice, $productid){
    $element = "
    
    <form action=\"cart.php?action=remove&id=$productid\" method=\"post\" class=\"cart-items\">
                    <div class=\"border rounded\">
                        <div class=\"row bg-white\">
                            <div class=\"col-md-6 mb-3\">
                                <h5 class=\"pt-2\">$productname</h5>
                                <h5 class=\"pt-2\">$productauthor</h5>
                                <h5 class=\"pt-2\">$$productprice</h5>
                                <button type=\"submit\" class=\"btn btn-danger mx-2 btn-sm\" name=\"remove\">Remove</button>
                            </div>
                        </div>
                    </div>
                </form>
    
    ";
    echo  $element;
}
















