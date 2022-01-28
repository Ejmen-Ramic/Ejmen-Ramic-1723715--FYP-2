<?php
//payment-ebook-generate-gateway-call.php

$name=$_POST['buyername'];
$email=$_POST['buyeremail'];
$telephone=$_POST['phoneno'];
$price=$_POST['totalprice'];
//insert POST data ke tblorder
//$qinsorder=sqlquery("insert into tblorder (nama, email, telefon,harga, status, tarikh) values (?,?,?,?,?,now())");
//$qinsorder->bindValue(1,$nama);
//$qinsorder->bindValue(2,$email);
//$qinsorder->bindValue(3,$telefon);
//$qinsorder->bindValue(4,$harga);
//$qinsorder->bindValue(5,0);
//$qinsorder->execute();
//get orderid
//$qgetoid=sqlquery("select id from tblorder order by id desc limit 1");
//$qgetoid->execute();
//$getoid = $qgetoid->fetch(PDO::FETCH_ASSOC);
//$oid=$getoid['id']; 
//convert RM1=100
$rmx100=($price*100);
$some_data = array(
    'userSecretKey'=> 'clpr480c-lfez-y6bh-qj57-s3ui79wgj7d1',
    'categoryCode'=> 'lfhiwy2q',
    'billName'=> 'Donation',
    'billDescription'=> 'Donation for the needy ones'.$harga,
    'billPriceSetting'=>1,
    'billPayorInfo'=>1,
    'billAmount'=>$rmx100,
    'billReturnUrl'=>'file:///C:/Users/scari/Desktop/JS/Website%20FYP/explore_projects/theme.html',
    'billCallbackUrl'=>'',
    'billExternalReferenceNo'=>'',
    'billTo'=>$name,
    'billEmail'=>$email,
    'billPhone'=>$telephone,
    'billSplitPayment'=>0,
    'billSplitPaymentArgs'=>'',
    'billPaymentChannel'=>0,
  );  
  $curl = curl_init();
  curl_setopt($curl, CURLOPT_POST, 1);
  curl_setopt($curl, CURLOPT_URL, 'https://toyyibpay.com/index.php/api/createBill');  
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($curl, CURLOPT_POSTFIELDS, $some_data);
  $result = curl_exec($curl);
  $info = curl_getinfo($curl);  
  curl_close($curl);
  $obj = json_decode($result,true);
  $billcode=$obj[0]['BillCode'];
?>
<!--SEND USER TO TOYYIBPAY PAYMENT-->
<script type="text/javascript">
    //redirect to payment gateway
   window.location.href="https://toyyibpay.com/<?php echo $billcode;?>"; 
 </script>