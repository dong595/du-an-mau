<?php
    function viewCart($remove){
        $total_price = 0;
        $i=0;
                     foreach($_SESSION['myCart'] as $product){
                        
                        $item_price = $product[3]*$product[4];
                        
                        $total_price += ($product[3]*$product[4]);
                      
                        $remove = ' <a href="index.php?act=remove&code='.$i.'"><input type="button" value="Xóa" /></a>';

                      
                    // $updateproduct = "index.php?act=suakh&id=".$productId;
                    echo '<tr>
                    <td><input type="checkbox" name="" id="" /></td>
                    <td>' . $product[0] . '</td>
                    <td>' . $product[1] . '</td>
                    <td> <img style="width:80px;height:80px;" src="upload/'. $product[2]  . '" alt=""> </td>
                    <td>'.$product[3].'</td>
                    <td >'.$product[4].'</td>
                    <td>' .  $item_price . '</td>
                    
                 
                    <td>
                   
                   '.$remove.'
                    </td>
                </tr>';
                $i +=1;
                      
                } echo  '<tr>
                <td colspan="6">Tổng tiền:</td>
                <td colspan="2">' . $total_price. '</td>
                
             
            </tr>';
    }    
?>