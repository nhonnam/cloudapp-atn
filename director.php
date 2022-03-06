<head>
                <meta http-equiv="refresh" content="<?php echo $_SESSION["refresh"];?>;URL='<?php echo $page?>'">
                <form action="" method="post">
                    <select name="refresh_time">
                        <option value="">Stop refreshing</option>
                        <option value=5>5 seconds</option>
                        <option value=10>10 seconds</option>
                        <option value=30>30 seconds</option>
                    </select>
                    <input type="submit" name="submit_time" value="Set time">
                <label><?php echo "Current refresh time setting is ".$_SESSION["refresh"];?></label>
                </form>
            </head>

            <form action="" method="post">
            <select name="shop">
                <option value="All_Shops">All Shops</option>
                <option value="shop_a">Shop A</option>
                <option value="shop_b">Shop B</option>
            </select>
            <input type="submit" name="selected_shop" value="Selected Shop">
            </form>
            <?php
          
                $selected_shop = $_SESSION["selected_shop"];
                if($selected_shop=="All_Shops")
                {
                    $product_query = "SELECT * FROM product ORDER BY product_id";
                }
                else
                {
                    $product_query = "SELECT * FROM product WHERE shop = '$selected_shop' ORDER BY product_id";
                }
                ?>