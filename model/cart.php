<?php
    function viewCart($remove){
        $total_price = 0;
        $i=0;
                     foreach($_SESSION['myCart'] as $product){
                        
                        $item_price = $product[3]*$product[4];
                        
                        $total_price += ($product[3]*$product[4]);
                        $i +=1;
                        $remove = ' <a href="index.php?act=remove&code='.$i.'"><input type="button" value="Xóa" /></a>';

                      
                    // $upbillPhoneproduct = "index.php?act=suakh&id=".$productId;
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
               
                // var_dump($i);die;
                      
                } echo  '<tr>
                <td colspan="6">Tổng tiền:</td>
                <td colspan="2">' . $total_price. '</td>
                
             
            </tr>';
    }    
    function totalOrder(){
        $total_price = 0;
        foreach($_SESSION['myCart'] as $product){
            $total_price += ($product[3]*$product[4]);
        }
        return $total_price;
    }
    function insert_bill($billName,$billAddress,$billEmail,$billPhone,$billTotal,$billPaymentMethods,$billDate){
        $sql = "INSERT INTO bill (billName,billAddress,billEmail,billPhone,billTotal,billPaymentMethods,billDate) VALUES ('$billName','$billAddress','$billEmail','$billPhone','$billTotal','$billPaymentMethods','$billDate')";
        return pdo_execute_return_LastInsertId($sql);
    }
    function  insert_cart($idUser,$idpro,$name,$img,$price,$soluong,$thanhtien,$idBill){
        $sql = "INSERT INTO cart (idUser,,idpro,cartName,img,price,soluong,thanhtien,idBill) VALUES ('$idUser','$idpro','$name','$img','$price','$soluong','$thanhtien','$idBill')";  
        pdo_execute($sql);
    }
    function loadOne_bill($id){
        $sql = 'SELECT* FROM bill where id  = '.$id;
        $bill = pdo_query_one($sql);
        return $bill;
    }
?>