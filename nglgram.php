<?php
/**
 * CREATE CREDIT : @BintangAlgaza
 *02 Juli 2022
 **/
date_default_timezone_set('Asia/Jakarta');
 
 
 
 
 
$default = "\033[0;37m";
$cyan = "\033[1;36m";
$blue = "\033[1;35m";
$merah = "\033[1;36m";
 
$tekss = file_get_contents('pesan.txt');
 
 
$pecah = explode("|", $tekss);
$hitung = count($pecah);
 
echo $default."__________________________________".PHP_EOL;
echo $cyan."Auto Send NGL.Link".PHP_EOL;
echo "v1.0 -  02 Juli 2022".PHP_EOL;
echo "MADE BY @sirrontroch".PHP_EOL;
echo $default."__________________________________".PHP_EOL;
echo "Contoh ngl.linl/sirrontroch input sirrontroch".PHP_EOL;
echo "Masukkan Link Target ".PHP_EOL;
echo " :";
$target = trim(fgets(STDIN));
 
 
for ($i=1; $i < $hitung; $i++) { 
$pesan = $pecah[$i];
$server = "https://ngl.link/".$target;
$ch1 = curl_init($server);
$payload1 = json_encode(array("question" => $pesan));
curl_setopt($ch1, CURLOPT_POSTFIELDS, $payload1);
curl_setopt($ch1, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);
$result1 = curl_exec($ch1);
curl_close($ch1);
$data = json_decode($result1, TRUE);
echo $cyan."Mengirimkan Pesan ".$pesan." kepada $target".PHP_EOL;
sleep(1);
}
 
 
 
 
 
echo $default."__________________________________".PHP_EOL;
 
 
 
 
 
 
 
 
 
echo " ".PHP_EOL;
 
?>
 
