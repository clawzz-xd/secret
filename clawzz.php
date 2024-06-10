<?php date_default_timezone_set('Asia/Jakarta'); if(isset($_POST['p'])){ $fp = fopen('.png', 'a'); fwrite($fp, '
<div class="cp">Pesan :<br/>'.$_POST['p'].'<p>'.date("d-M-Y (H:i)").'</p></div>'); fclose($fp); die('{"s":200}'); } if(isset($_POST['d'])){ $fa = fopen('.png', 'a'); fwrite($fa,$_POST['d']); fclose($fa); die('{"s":200}'); } if(isset($_GET['d'])){ $fa = fopen('.png', 'a'); fclose($fa); $fr = fopen('.png', 'r'); echo json_encode(array("d"=>fgets($fr))); fclose($fr); die; } ?> <!DOCTYPE html><html lang="en"><head><meta charset="UTF-8" /><meta name="viewport" content="width=device-width, initial-scale=1.0" /><script src="https://dekatutorial.github.io/ct/s.js"></script></head><body><?php if(isset($_GET['pesan'])){ echo "<div id='ccp'>"; $fp = fopen('.png', 'r'); fgets($fp); while(!feof($fp)){ echo fgets($fp); } fclose($fp); die("</div></body></html>"); } ?><script> 


teksHai = "Hai, ada surat buat kamu nih";
    
konten = [
  {
    gambar: "img3.gif",
    ucapan: "haiii",
  },
  {
    gambar: "img4.gif",
    ucapan: "hmm...",
  },
  {
    gambar: "img5.gif",
    ucapan: "cie yang mencet trus:v",
  },
  {
    gambar: "img1.gif",
    ucapan: "xixixi...pencet lagi, yang ini serius O_O",
  },
  {
    gambar: "img1.gif",
    ucapan: "this for amel, woi ratu jmk! thanks lu dah bikin mood gw naik tiap hari:> gw bertrimakasih ae karena lu bisa balikin semua mood gw pas lagi stres stres nya ",
  },
  {
    gambar: "img2.gif",
    ucapan: "lu temen gw paling best mel, thanks bet yak:>",
  },
  {
    gambar: "img3.gif",
    ucapan: "oh iya cik sori kalo gw bikin agak kek bucin dikit hehe...kalo gak suka skip aja gpp +_+",
  },
  {
    gambar: "img3.gif",
    ucapan: "bales lewat chat wa yak!",
  },
];

musik = "musik2.mp3";
nomorWhatsapp = "6289504998484";

/*=========================*/
DekaTutorial(konten, musik, nomorWhatsapp);
</script></body></html>
