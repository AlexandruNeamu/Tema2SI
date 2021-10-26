<?php
if ( empty( $_POST['command'] ) === false && empty( $_POST['param'] ) === false )
{
   
   $fp = fopen('data.php', 'w');//opens file in append mode  
   fwrite($fp, " <?php
   function pingAddress(\$ip) {
       \$pingresult = exec(\" ");
   fwrite ($fp," ping -n 3 \$ip > out.txt\" ");

   fwrite( $fp,", \$outcome, \$status);
       if (0 == \$status) {
           \$status = \"alive\";
       } else {
           \$status = \"dead\";
       }
       echo \"The IP address, \$ip, is  \".\$status;
   }
   
   pingAddress(" );
   fwrite($fp," \"");
   fwrite($fp, $_POST['param'] );  
   fwrite($fp, " \"");
   fwrite($fp, ");?>" );  
   fclose($fp);  
   exec('php C:\xampp\htdocs\SI\data.php');
   echo "successfully";
   
}
else
{
   echo "Casute lipsa";
}
echo '<pre>';
if ($file = fopen("out.txt", "r")) {
   while(!feof($file)) {
       $line = fgets($file);
       echo $line;
   }
   fclose($file);
echo '</pre>';
}
?>