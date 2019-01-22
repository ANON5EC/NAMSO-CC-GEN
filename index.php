
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {margin:0;}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}
</style>
</head>
<body>





<!-- Baseado no NamsoCCGen, Modificado e Distribuido por N1ghtm4R3 24-10-2016| Powered by PerfectCarders -->
<!-- Por gentileza, não delete estas informações do código fonte, este CCGen é totalmente OpenSource, você pode modificalo de acordo com sua necessidade, mas sempre deixe alguma referencia ao N1ghtm4R3 e ao Namso.-->
<!DOCTYPE html><html lang="pt-br" xmlns="http://www.w3.org/1999/xhtml" hola_ext_inject="disabled"><head><title>DARK SEC CC GENERATOR V1</title><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta content="width=device-width, initial-scale=1.0, user-scalable=no" name="viewport"><meta name="description" content="Credit Card Generator."><meta name="keywords" content="namso,ccgen,ccgen online,namso online, card, cc, bin,generador tarjetas,tarjetas,generador, bin check, bin search, bin find, find bin, check bin, search bin, bank identification number, bin, iin, issuer identification number, check iin, find iin, search iin, iin check, iin search, iin find, bank, card search, card check, card find, merchant bin, merchant, bin lookup, bin checker, bin list, carding, carder, generate cc, namso, ccgen, credit card, infocc, bin, gerador de cartões de créditos, tarjetas, generator, darkside, checker cc, gerador, bins, gerar cc, mastercard, visa, amex, discover, diners club"><meta name="author" content="N1ghtm4R3"><meta name="google" content="notranslate"><meta name="og:description" content="Credit Card Generator."><meta name="og:url" content="https://darksidecc.com/lite"><meta name="og:title" content="DARK SEC CC GENERATOR V1"><meta name="og:image" content="https://www.darksidecc.com/lite/ds_files/img/og_img.png"><meta name="theme-color" content="#000000"><link rel="apple-touch-icon" sizes="96x96" href="./ds_files/img/not_ic96.png"><link rel="shortcut icon" href="./ds_files/img/not_ic48.png"><link href="//fonts.googleapis.com/css?family=Orbitron" rel="stylesheet"><link href="//db.onlinewebfonts.com/c/3116cf7d5d85070c2c0d4b96bfee7d8d?family=GeosansLight" rel="stylesheet" type="text/css"/> <link rel="stylesheet" type="text/css" href="./ds_files/css/style.css"><link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css"><script type="text/javascript" src="./ds_files/js/jquery-1.11.2.min.js"></script><script type="text/javascript" src="./ds_files/js/F4K_w78Gt0X.js"></script><script>(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o), m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m) })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');ga('create', 'UA-81402023-1', 'auto');ga('send', 'pageview');</script></head><body onload="n1ght();"><header><br /><section class="title"><img src="./ds_files/img/favicon.png" alt="Icon"> DARK SEC CC GENERATOR</section><div class="hh-title"> Credit Card Generator <br /><i class="fa fa-cc-mastercard" aria-hidden="true"></i> <i class="fa fa-cc-discover" aria-hidden="true"></i> <i class="fa fa-cc-visa" aria-hidden="true"></i> <i class="fa fa-cc-jcb" aria-hidden="true"></i> <i class="fa fa-cc-amex" aria-hidden="true"></i> <i class="fa fa-cc-diners-club" aria-hidden="true"></i></div></header><br /><form name="console" id="console" class="form-horizontal" role="form" method="POST">	<div class="p"><div class="Ilabel"><i class="fa fa-gg"></i> Enter your BIN</div><input type="text" class="input_text" id="ccpN" name="ccp" value="" style="width: 175px" placeholder="xxxx xxxx xxxx xxxx" maxlength="19" list="iin-predefined" required><datalist id="iin-predefined"><option value="552289"class="bin0">BIN 0</option><option value="546479" class="bin1">BIN 1</option><option value="512112" class="bin2">BIN 2</option><option value="512119" class="bin3">BIN 3</option><option value="552589" class="bin4">BIN 4</option></datalist></div><br /><select name="ccnsp" class="input_text" style="display:none;"><option selected="selected">Nenhum</option></select><div class="p"><div class="Ilabel"><i class="fa fa-plus-square"></i> Include</div>		<div class="input_text s"><label>Data<input type="checkbox" id="ccexpdat" name="ccexpdat"></label><label>CCV2<input type="checkbox" id="ccvi" name="ccvi"></label><label>Bank Type<input type="checkbox" id="ccbank" name="ccbank"></label></div></div><br /><div class="p"><div class="Ilabel"><i class="fa fa-shopping-bag" aria-hidden="true"></i> Quantity</div><input class="input_text" type="number" name="ccghm" style="width: 40px" maxlength="4" value="10"></div>	<div class="p"><div class="Ilabel"><i class="fa fa-cogs" aria-hidden="true"></i> Formate</div>		<select name="ccoudatfmt" class="input_text"><option value="CHECKER" selected="selected">CHECKER</option><option value="CSV">CSV</option><option value="XML">XML</option><option value="JSON">JSON</option></select></div><br /><div class="p"><div class="Ilabel"><i class="fa fa-connectdevelop"></i> CCV2</div><input type="text" id="eccv" maxlength="4" style="width: 40px" value="rnd" class="input_text" name="eccv"></div><div class="p"><div class="Ilabel"><i class="fa fa-calendar" aria-hidden="true"></i> Month	</div>	<select name="emeses" class="input_text"><option value="rnd">Rnd</option><option value="01">01</option><option value="02">02</option><option value="03">03</option><option value="04">04</option><option value="05">05</option><option value="06">06</option><option value="07">07</option><option value="08">08</option><option value="09">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option></select></div><div class="p"><div class="Ilabel"><i class="fa fa-calendar" aria-hidden="true"></i> Year</div><select name="eyear" class="input_text"><option value="rnd">Rnd</option><option value="2016">16</option><option value="2017">17</option><option value="2018">18</option><option value="2019">19</option><option value="2020">20</option><option value="2021">21</option><option value="2022">22</option><option value="2023">23</option><option value="2024">24</option><option value="2025">25</option></select></div><input type="hidden" name="tr" value="1000"><input type="hidden" name="L" style="width: 20px" value="1L"><br /><br />	<a class="Lbutton" name="generar" id="generar"><i class="fa fa-cog fa-spin"></i>  Generate Cards</a><br /><br /><center><div class="eighty"><div><div class="clean" id="cleanText"></div></div><textarea class="textarea" name="output2" id="output2" rows="15" readonly=""></textarea></div></center></form><br /><footer><i class="fa fa-credit-card-alt" aria-hidden="true"></i><strong>DARK SEC CC GENERATOR V1</strong><i class="fa fa-credit-card-alt" aria-hidden="true"></i> <br />OPEN SOURCE PROJECT<br /><i class="fa fa-user-secret" aria-hidden="true"></i> Developer <a hrhost" style="color:#00ffff;">ANON</a><br /><a target="_BLANK" href="" style="color:#00ffff;">DARK SEC CC GENERATOR V1</a><i class="fa fa-certificate" aria-hidden="true"></i><br /><script id="_waukd0">var _wau = _wau || []; _wau.push(["small", "cezjmml3gtso", "kd0"]); (function() {var s=document.createElement("script"); s.async=true; s.src="./ds_files/js/small.js"; document.getElementsByTagName("head")[0].appendChild(s); })();</script></footer></body></html>
<script src="particles.min.js"></script>
	<script src="particulas.js"></script>
</body></html>