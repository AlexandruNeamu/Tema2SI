 <?php
   function pingAddress($ip) {
       $pingresult = exec("  ping -n 3 $ip > out.txt" , $outcome, $status);
       if (0 == $status) {
           $status = "alive";
       } else {
           $status = "dead";
       }
       echo "The IP address, $ip, is  ".$status;
   }
   
   pingAddress( "127.0.0.1 ");?>