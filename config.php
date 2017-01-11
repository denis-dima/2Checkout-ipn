<?php
/**
 * Created by Sevio Solutions.
 * User: Denis DIMA
 * Product: 2Checkout-ipn
 * Date: 10.01.2017
 * Time: 15:13
 * All rights and copyrights are owned by Sevio Solutions®
 */
define("PUBLIC_KEY", 'CF96D9D1-ED07-41E5-9228-FD0FC3206348');
define("PRIVATE_KEY", '946F9677-A169-438B-88C5-B9B5CA5F76A5');
define('SELLER_ID', '901337055');

define('USERNAME', 'DenisDima');
define('PASSWORD', 'Connard0232');
define('SECRET_WORD', 'MDdjOTZkNDMtZTJlOS00YjUyLWE3MTUtOTA5MDQ3ODAzMTJk');

Twocheckout::privateKey(PRIVATE_KEY);
Twocheckout::sellerId(SELLER_ID);

Twocheckout::username(USERNAME);
Twocheckout::password(PASSWORD);

Twocheckout::verifySSL(false);
Twocheckout::sandbox(true);

Twocheckout::format('json');
