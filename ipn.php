<?php
/**
 * Created by Sevio Solutions.
 * User: Denis DIMA
 * Product: 2Checkout-ipn
 * Date: 10.01.2017
 * Time: 17:04
 * All rights and copyrights are owned by Sevio Solutions®
 */

//SETTING INS DASHBOARD
//UPPERCASE(MD5_ENCRYPTED(sale_id + vendor_id + invoice_id + Secret Word)); Can be used to validate authenticity of message

$stringHash =  strtoupper(md5($_POST['sale_id'] . $_POST['vendor_id'] . $_POST['invoice_id'] . SECRET_WORD
));

if ($stringHash != $_POST['md5_hash']) {
    $result = 'Fail - Hash Mismatch';
} else {
    $result = 'Success - Hash Matched';
    if($_POST['invoice_status']=='approved'){
        //invoice approved
    }
}

echo $result;