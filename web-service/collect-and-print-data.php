<?php

// COLLECT DATA
// Create the function collectArray.
// This function contains the parameter 
// that defines the required product-type. 

function collectArray($productcode){

    // Make $products from your stock available 
    // inside this function.(use statement global)
    global $products;

    // Have a new empty array ready for 
    // collecting required products 
    $collect = [];
    
    // Check if $products array has any elements 
    if(sizeof($products) > 0){
        
        // If so,
        // scan through $products array (foreach-loop) and check
        // each product if it contains the required product-code 
        foreach($products as $product){
            if($product['code'] == $productcode){
                $collect[] = $product;
            }
            // If the match is found, push the 
            // fitting product into $collect array. 
        // close if
        }
        
        // If $collect is not empty, return collect
        if(sizeof($collect) > 0){
            return $collect;
        }else{
        // otherwise: return products
            return $products;
        // close conditional
        }

    // close if
    }

// close collectArray
}




// PRINT HTML:
// Create function printHTML.
function printHTML(){
    // Check if a product-code is in $_GET array. If product code is 
    // in $_GET array, it means user selected it, and you will 
    // print only the products of the selected type, otherwise
    // print all products.
    if(isset($_GET["code"])){
        $newloop = collectArray($_GET["code"]);
    }else{
        $newloop = collectArray(0);
    }




    // You need to loop through the array of selected products,
        // create HTML tags in the fly and extract values 
        // of each product into proper or corresponding HTML tag.
        // Print the HTML content.
    foreach($newloop as $loop){
        echo '<div class="col-sm-12 col-md-6 col-lg-3 mb-0">
                <figure>
                    <img src="'.$loop["img"].'" class="img-fluid" alt="'.$loop["name"].'">
                    <figcaption>
                        <ul class="pl-2 pt-2">
                            <li class="text-primary">'.$loop["name"].'</li>
                            <li>'.$loop["price"].'</li>
                        </ul>
                    </figcaption>
                </figure>
            </div>';
    // Close loop.

        }
// Close printHTML.
    }
    
?>