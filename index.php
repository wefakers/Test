<?php
$file="stat.log";    // файл для записи истории посещения сайта
$col_zap=99999999999999;    // ограничиваем количество строк log-файла 

function getRealIpAddr() {
  if (!empty($_SERVER['HTTP_CLIENT_IP']))        // Определяем IP
  { $ip=$_SERVER['HTTP_CLIENT_IP']; }
  elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) 
  { $ip=$_SERVER['HTTP_X_FORWARDED_FOR']; }
  else { $ip=$_SERVER['REMOTE_ADDR']; }
  return $ip;
}

if (strstr($_SERVER['HTTP_USER_AGENT'], 'YandexBot')) {$bot='YandexBot';} //Выявляем поисковых ботов
elseif (strstr($_SERVER['HTTP_USER_AGENT'], 'Googlebot')) {$bot='Googlebot';}
else { $bot=$_SERVER['HTTP_USER_AGENT']; }

$ip = getRealIpAddr();
$date = date("H:i:s d.m.Y");        // определяем дату и время события
$home = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];    // определяем страницу сайта
$lines = file($file);
while(count($lines) > $col_zap) array_shift($lines);
$lines[] = $date."|".$bot."|".$ip."|".$home."|\r\n";
file_put_contents($file, $lines);
?>

<html lang="en" data-rh="lang" data-triggered="true">
   <head>
      <title>Watch online TV on the device of your choice</title>
      <meta data-rh="true" charset="utf-8">
      <meta data-rh="true" name="viewport" content="width=device-width, initial-scale=1">
      <meta data-rh="true" name="mobile-web-app-capable" content="yes">
      <meta data-rh="true" name="description" content="Stream over 100 live TV channels over the internet. Never miss your favorite tv show. With Zattoo, you can get your TV anywhere and anytime. TRY NOW FOR FREE">
      <meta data-rh="true" name="keywords" content="zattoo, tv, live, internet, streaming, online">
      <meta data-rh="true" name="robots" content="">
      <link rel="stylesheet" href="/client/main-2ed4dd4dce33a9362c7d.css">
      <link rel="stylesheet" href="/client/vendors~generic-page~preview-page-2ed4dd4dce33a9362c7d.css">
      <link rel="stylesheet" href="/client/generic-page~preview-page-2ed4dd4dce33a9362c7d.css">
      <link rel="stylesheet" href="/client/generic-page-2ed4dd4dce33a9362c7d.css">
      <link rel="icon" sizes="16x16" href="/client/16x16-0cdd1c8ecf8330fe4ccaf7b66873fbc1.png" data-rh="true">
      <link rel="icon" sizes="32x32" href="/client/32x32-ae93e73801b251688e8d61cefc9752fa.png" data-rh="true">
      <link rel="icon" sizes="192x192" href="/client/192x192-bc820dc5c4afdbce21c999c927d1b3c5.png" data-rh="true">
      <link rel="icon" sizes="270x270" href="/client/270x270-cd713ca2ce8dac300806c043ca179033.png" data-rh="true">
      <link rel="icon" sizes="512x512" href="/client/512x512-a7644ff5050c2398c3b95c2b2dbef7bf.png" data-rh="true">
      <link rel="apple-touch-icon" sizes="180x180" href="/client/apple-touch-icon-18b42bddd9d5db513d46f7c22955c0c5.png" data-rh="true">
      <link rel="icon" href="/client/favicon-c1e28203a55785e21c2a842af2b87de7.ico" type="image/x-icon" data-rh="true">
      <link rel="shortcut icon" href="/client/favicon-c1e28203a55785e21c2a842af2b87de7.ico" type="image/x-icon" data-rh="true">
      <link rel="mask-icon" href="/client/safari-pinned-tab-1d74741fd137afbb6ad5e1068e5b8c0e.svg" data-rh="true">
      <script type="text/javascript" src="/client/main-2ed4dd4dce33a9362c7d.js" defer="defer"></script>
      <style type="text/css" id="onetrust-style">#onetrust-banner-sdk{-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}#onetrust-banner-sdk .onetrust-vendors-list-handler{cursor:pointer;color:#1f96db;font-size:inherit;font-weight:bold;text-decoration:none;margin-left:5px}#onetrust-banner-sdk .onetrust-vendors-list-handler:hover{color:#1f96db}#onetrust-banner-sdk .ot-close-icon,#onetrust-pc-sdk .ot-close-icon{background-image:url("data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4IiB3aWR0aD0iMzQ4LjMzM3B4IiBoZWlnaHQ9IjM0OC4zMzNweCIgdmlld0JveD0iMCAwIDM0OC4zMzMgMzQ4LjMzNCIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgMzQ4LjMzMyAzNDguMzM0OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+PGc+PHBhdGggZmlsbD0iIzU2NTY1NiIgZD0iTTMzNi41NTksNjguNjExTDIzMS4wMTYsMTc0LjE2NWwxMDUuNTQzLDEwNS41NDljMTUuNjk5LDE1LjcwNSwxNS42OTksNDEuMTQ1LDAsNTYuODVjLTcuODQ0LDcuODQ0LTE4LjEyOCwxMS43NjktMjguNDA3LDExLjc2OWMtMTAuMjk2LDAtMjAuNTgxLTMuOTE5LTI4LjQxOS0xMS43NjlMMTc0LjE2NywyMzEuMDAzTDY4LjYwOSwzMzYuNTYzYy03Ljg0Myw3Ljg0NC0xOC4xMjgsMTEuNzY5LTI4LjQxNiwxMS43NjljLTEwLjI4NSwwLTIwLjU2My0zLjkxOS0yOC40MTMtMTEuNzY5Yy0xNS42OTktMTUuNjk4LTE1LjY5OS00MS4xMzksMC01Ni44NWwxMDUuNTQtMTA1LjU0OUwxMS43NzQsNjguNjExYy0xNS42OTktMTUuNjk5LTE1LjY5OS00MS4xNDUsMC01Ni44NDRjMTUuNjk2LTE1LjY4Nyw0MS4xMjctMTUuNjg3LDU2LjgyOSwwbDEwNS41NjMsMTA1LjU1NEwyNzkuNzIxLDExLjc2N2MxNS43MDUtMTUuNjg3LDQxLjEzOS0xNS42ODcsNTYuODMyLDBDMzUyLjI1OCwyNy40NjYsMzUyLjI1OCw1Mi45MTIsMzM2LjU1OSw2OC42MTF6Ii8+PC9nPjwvc3ZnPg==");background-size:contain;background-repeat:no-repeat;background-position:center;height:12px;width:12px}#onetrust-banner-sdk .powered-by-logo,#onetrust-banner-sdk .ot-pc-footer-logo a,#onetrust-pc-sdk .powered-by-logo,#onetrust-pc-sdk .ot-pc-footer-logo a{background-size:contain;background-repeat:no-repeat;background-position:center;height:25px;width:152px;display:block}#onetrust-banner-sdk h3 *,#onetrust-banner-sdk h4 *,#onetrust-banner-sdk h6 *,#onetrust-banner-sdk button *,#onetrust-banner-sdk a[data-parent-id] *,#onetrust-pc-sdk h3 *,#onetrust-pc-sdk h4 *,#onetrust-pc-sdk h6 *,#onetrust-pc-sdk button *,#onetrust-pc-sdk a[data-parent-id] *{font-size:inherit;font-weight:inherit;color:inherit}#onetrust-banner-sdk .ot-hide,#onetrust-pc-sdk .ot-hide{display:none !important}#onetrust-pc-sdk .ot-sdk-row .ot-sdk-column{padding:0}#onetrust-pc-sdk .ot-sdk-container{padding-right:0}#onetrust-pc-sdk .ot-sdk-row{flex-direction:initial;width:100%}#onetrust-pc-sdk [type="checkbox"]:checked,#onetrust-pc-sdk [type="checkbox"]:not(:checked){pointer-events:initial}#onetrust-pc-sdk [type="checkbox"]:disabled+label::before,#onetrust-pc-sdk [type="checkbox"]:disabled+label:after,#onetrust-pc-sdk [type="checkbox"]:disabled+label{pointer-events:none;opacity:0.7}#onetrust-pc-sdk #vendor-list-content{transform:translate3d(0, 0, 0)}#onetrust-pc-sdk li input[type="checkbox"]{z-index:1}#onetrust-pc-sdk li .ot-checkbox label{z-index:2}#onetrust-pc-sdk li .ot-checkbox input[type="checkbox"]{height:auto;width:auto}#onetrust-pc-sdk li .host-title a,#onetrust-pc-sdk li .ot-host-name a,#onetrust-pc-sdk li .accordion-text,#onetrust-pc-sdk li .ot-acc-txt{z-index:2;position:relative}#onetrust-pc-sdk input{margin:3px 0.1ex}#onetrust-pc-sdk .toggle-always-active{opacity:0.6;cursor:default}#onetrust-pc-sdk .screen-reader-only,#onetrust-pc-sdk .ot-scrn-rdr{border:0;clip:rect(0 0 0 0);height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;width:1px}#onetrust-pc-sdk .pc-logo,#onetrust-pc-sdk .ot-pc-logo{height:60px;width:180px;background-position:center;background-size:contain;background-repeat:no-repeat}#onetrust-pc-sdk .ot-tooltip .ot-tooltiptext{visibility:hidden;width:120px;background-color:#555;color:#fff;text-align:center;padding:5px 0;border-radius:6px;position:absolute;z-index:1;bottom:125%;left:50%;margin-left:-60px;opacity:0;transition:opacity 0.3s}#onetrust-pc-sdk .ot-tooltip .ot-tooltiptext::after{content:"";position:absolute;top:100%;left:50%;margin-left:-5px;border-width:5px;border-style:solid;border-color:#555 transparent transparent transparent}#onetrust-pc-sdk .ot-tooltip:hover .ot-tooltiptext{visibility:visible;opacity:1}#onetrust-pc-sdk .ot-tooltip{position:relative;display:inline-block;z-index:3}#onetrust-pc-sdk .ot-tooltip svg{color:grey;height:20px;width:20px}#onetrust-pc-sdk.ot-fade-in,.onetrust-pc-dark-filter.ot-fade-in{animation-name:onetrust-fade-in;animation-duration:400ms;animation-timing-function:ease-in-out}#onetrust-pc-sdk.ot-hide{display:none !important}.onetrust-pc-dark-filter.ot-hide{display:none !important}#ot-sdk-btn.ot-sdk-show-settings,#ot-sdk-btn.optanon-show-settings{color:#68b631;border:1px solid #68b631;height:auto;white-space:normal;word-wrap:break-word;padding:0.8em 2em;font-size:0.8em;line-height:1.2;cursor:pointer;-moz-transition:0.1s ease;-o-transition:0.1s ease;-webkit-transition:1s ease;transition:0.1s ease}#ot-sdk-btn.ot-sdk-show-settings:hover,#ot-sdk-btn.optanon-show-settings:hover{color:#fff;background-color:#68b631}#ot-sdk-btn.ot-sdk-show-settings:focus,#ot-sdk-btn.optanon-show-settings:focus{outline:none}.onetrust-pc-dark-filter{background:rgba(0,0,0,0.5);z-index:2147483646;width:100%;height:100%;overflow:hidden;position:fixed;top:0;bottom:0;left:0}@keyframes onetrust-fade-in{0%{opacity:0}100%{opacity:1}}@media only screen and (min-width: 426px) and (max-width: 896px) and (orientation: landscape){#onetrust-pc-sdk p{font-size:0.75em}}
         #onetrust-banner-sdk,#onetrust-pc-sdk,#ot-sdk-cookie-policy{font-size:16px}#onetrust-banner-sdk *,#onetrust-banner-sdk ::after,#onetrust-banner-sdk ::before,#onetrust-pc-sdk *,#onetrust-pc-sdk ::after,#onetrust-pc-sdk ::before,#ot-sdk-cookie-policy *,#ot-sdk-cookie-policy ::after,#ot-sdk-cookie-policy ::before{-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box}#onetrust-banner-sdk div,#onetrust-banner-sdk span,#onetrust-banner-sdk h1,#onetrust-banner-sdk h2,#onetrust-banner-sdk h3,#onetrust-banner-sdk h4,#onetrust-banner-sdk h5,#onetrust-banner-sdk h6,#onetrust-banner-sdk p,#onetrust-banner-sdk img,#onetrust-banner-sdk svg,#onetrust-banner-sdk button,#onetrust-banner-sdk section,#onetrust-banner-sdk a,#onetrust-banner-sdk label,#onetrust-banner-sdk input,#onetrust-banner-sdk ul,#onetrust-banner-sdk li,#onetrust-banner-sdk nav,#onetrust-banner-sdk table,#onetrust-banner-sdk thead,#onetrust-banner-sdk tr,#onetrust-banner-sdk td,#onetrust-banner-sdk tbody,#onetrust-banner-sdk .ot-main-content,#onetrust-banner-sdk .ot-toggle,#onetrust-banner-sdk #ot-content,#onetrust-banner-sdk #ot-pc-content,#onetrust-banner-sdk .checkbox,#onetrust-pc-sdk div,#onetrust-pc-sdk span,#onetrust-pc-sdk h1,#onetrust-pc-sdk h2,#onetrust-pc-sdk h3,#onetrust-pc-sdk h4,#onetrust-pc-sdk h5,#onetrust-pc-sdk h6,#onetrust-pc-sdk p,#onetrust-pc-sdk img,#onetrust-pc-sdk svg,#onetrust-pc-sdk button,#onetrust-pc-sdk section,#onetrust-pc-sdk a,#onetrust-pc-sdk label,#onetrust-pc-sdk input,#onetrust-pc-sdk ul,#onetrust-pc-sdk li,#onetrust-pc-sdk nav,#onetrust-pc-sdk table,#onetrust-pc-sdk thead,#onetrust-pc-sdk tr,#onetrust-pc-sdk td,#onetrust-pc-sdk tbody,#onetrust-pc-sdk .ot-main-content,#onetrust-pc-sdk .ot-toggle,#onetrust-pc-sdk #ot-content,#onetrust-pc-sdk #ot-pc-content,#onetrust-pc-sdk .checkbox,#ot-sdk-cookie-policy div,#ot-sdk-cookie-policy span,#ot-sdk-cookie-policy h1,#ot-sdk-cookie-policy h2,#ot-sdk-cookie-policy h3,#ot-sdk-cookie-policy h4,#ot-sdk-cookie-policy h5,#ot-sdk-cookie-policy h6,#ot-sdk-cookie-policy p,#ot-sdk-cookie-policy img,#ot-sdk-cookie-policy svg,#ot-sdk-cookie-policy button,#ot-sdk-cookie-policy section,#ot-sdk-cookie-policy a,#ot-sdk-cookie-policy label,#ot-sdk-cookie-policy input,#ot-sdk-cookie-policy ul,#ot-sdk-cookie-policy li,#ot-sdk-cookie-policy nav,#ot-sdk-cookie-policy table,#ot-sdk-cookie-policy thead,#ot-sdk-cookie-policy tr,#ot-sdk-cookie-policy td,#ot-sdk-cookie-policy tbody,#ot-sdk-cookie-policy .ot-main-content,#ot-sdk-cookie-policy .ot-toggle,#ot-sdk-cookie-policy #ot-content,#ot-sdk-cookie-policy #ot-pc-content,#ot-sdk-cookie-policy .checkbox{font-family:inherit;font-weight:normal;-webkit-font-smoothing:auto;letter-spacing:normal;line-height:normal;padding:0;margin:0;height:auto;min-height:0;max-height:none;width:auto;min-width:0;max-width:none;border-radius:0;border:none;clear:none;float:none;position:static;bottom:auto;left:auto;right:auto;top:auto;text-align:left;text-decoration:none;text-indent:0;text-shadow:none;text-transform:none;white-space:normal;background:none;overflow:visible;vertical-align:baseline;visibility:visible;z-index:auto;box-shadow:none}#onetrust-banner-sdk label:before,#onetrust-banner-sdk label:after,#onetrust-banner-sdk .checkbox:after,#onetrust-banner-sdk .checkbox:before,#onetrust-pc-sdk label:before,#onetrust-pc-sdk label:after,#onetrust-pc-sdk .checkbox:after,#onetrust-pc-sdk .checkbox:before,#ot-sdk-cookie-policy label:before,#ot-sdk-cookie-policy label:after,#ot-sdk-cookie-policy .checkbox:after,#ot-sdk-cookie-policy .checkbox:before{content:"";content:none}
         #onetrust-banner-sdk .ot-sdk-container,#onetrust-pc-sdk .ot-sdk-container,#ot-sdk-cookie-policy .ot-sdk-container{position:relative;width:100%;max-width:100%;margin:0 auto;padding:0 20px;box-sizing:border-box}#onetrust-banner-sdk .ot-sdk-column,#onetrust-banner-sdk .ot-sdk-columns,#onetrust-pc-sdk .ot-sdk-column,#onetrust-pc-sdk .ot-sdk-columns,#ot-sdk-cookie-policy .ot-sdk-column,#ot-sdk-cookie-policy .ot-sdk-columns{width:100%;float:left;box-sizing:border-box;padding:0;display:initial}@media (min-width: 400px){#onetrust-banner-sdk .ot-sdk-container,#onetrust-pc-sdk .ot-sdk-container,#ot-sdk-cookie-policy .ot-sdk-container{width:90%;padding:0}}@media (min-width: 550px){#onetrust-banner-sdk .ot-sdk-container,#onetrust-pc-sdk .ot-sdk-container,#ot-sdk-cookie-policy .ot-sdk-container{width:100%}#onetrust-banner-sdk .ot-sdk-column,#onetrust-banner-sdk .ot-sdk-columns,#onetrust-pc-sdk .ot-sdk-column,#onetrust-pc-sdk .ot-sdk-columns,#ot-sdk-cookie-policy .ot-sdk-column,#ot-sdk-cookie-policy .ot-sdk-columns{margin-left:4%}#onetrust-banner-sdk .ot-sdk-column:first-child,#onetrust-banner-sdk .ot-sdk-columns:first-child,#onetrust-pc-sdk .ot-sdk-column:first-child,#onetrust-pc-sdk .ot-sdk-columns:first-child,#ot-sdk-cookie-policy .ot-sdk-column:first-child,#ot-sdk-cookie-policy .ot-sdk-columns:first-child{margin-left:0}#onetrust-banner-sdk .ot-sdk-one.ot-sdk-column,#onetrust-banner-sdk .ot-sdk-one.ot-sdk-columns,#onetrust-pc-sdk .ot-sdk-one.ot-sdk-column,#onetrust-pc-sdk .ot-sdk-one.ot-sdk-columns,#ot-sdk-cookie-policy .ot-sdk-one.ot-sdk-column,#ot-sdk-cookie-policy .ot-sdk-one.ot-sdk-columns{width:4.66666666667%}#onetrust-banner-sdk .ot-sdk-two.ot-sdk-columns,#onetrust-pc-sdk .ot-sdk-two.ot-sdk-columns,#ot-sdk-cookie-policy .ot-sdk-two.ot-sdk-columns{width:13.3333333333%}#onetrust-banner-sdk .ot-sdk-three.ot-sdk-columns,#onetrust-pc-sdk .ot-sdk-three.ot-sdk-columns,#ot-sdk-cookie-policy .ot-sdk-three.ot-sdk-columns{width:22%}#onetrust-banner-sdk .ot-sdk-four.ot-sdk-columns,#onetrust-pc-sdk .ot-sdk-four.ot-sdk-columns,#ot-sdk-cookie-policy .ot-sdk-four.ot-sdk-columns{width:30.6666666667%}#onetrust-banner-sdk .ot-sdk-five.ot-sdk-columns,#onetrust-pc-sdk .ot-sdk-five.ot-sdk-columns,#ot-sdk-cookie-policy .ot-sdk-five.ot-sdk-columns{width:39.3333333333%}#onetrust-banner-sdk .ot-sdk-six.ot-sdk-columns,#onetrust-pc-sdk .ot-sdk-six.ot-sdk-columns,#ot-sdk-cookie-policy .ot-sdk-six.ot-sdk-columns{width:48%}#onetrust-banner-sdk .ot-sdk-seven.ot-sdk-columns,#onetrust-pc-sdk .ot-sdk-seven.ot-sdk-columns,#ot-sdk-cookie-policy .ot-sdk-seven.ot-sdk-columns{width:56.6666666667%}#onetrust-banner-sdk .ot-sdk-eight.ot-sdk-columns,#onetrust-pc-sdk .ot-sdk-eight.ot-sdk-columns,#ot-sdk-cookie-policy .ot-sdk-eight.ot-sdk-columns{width:65.3333333333%}#onetrust-banner-sdk .ot-sdk-nine.ot-sdk-columns,#onetrust-pc-sdk .ot-sdk-nine.ot-sdk-columns,#ot-sdk-cookie-policy .ot-sdk-nine.ot-sdk-columns{width:74%}#onetrust-banner-sdk .ot-sdk-ten.ot-sdk-columns,#onetrust-pc-sdk .ot-sdk-ten.ot-sdk-columns,#ot-sdk-cookie-policy .ot-sdk-ten.ot-sdk-columns{width:82.6666666667%}#onetrust-banner-sdk .ot-sdk-eleven.ot-sdk-columns,#onetrust-pc-sdk .ot-sdk-eleven.ot-sdk-columns,#ot-sdk-cookie-policy .ot-sdk-eleven.ot-sdk-columns{width:91.3333333333%}#onetrust-banner-sdk .ot-sdk-twelve.ot-sdk-columns,#onetrust-pc-sdk .ot-sdk-twelve.ot-sdk-columns,#ot-sdk-cookie-policy .ot-sdk-twelve.ot-sdk-columns{width:100%;margin-left:0}#onetrust-banner-sdk .ot-sdk-one-third.ot-sdk-column,#onetrust-pc-sdk .ot-sdk-one-third.ot-sdk-column,#ot-sdk-cookie-policy .ot-sdk-one-third.ot-sdk-column{width:30.6666666667%}#onetrust-banner-sdk .ot-sdk-two-thirds.ot-sdk-column,#onetrust-pc-sdk .ot-sdk-two-thirds.ot-sdk-column,#ot-sdk-cookie-policy .ot-sdk-two-thirds.ot-sdk-column{width:65.3333333333%}#onetrust-banner-sdk .ot-sdk-one-half.ot-sdk-column,#onetrust-pc-sdk .ot-sdk-one-half.ot-sdk-column,#ot-sdk-cookie-policy .ot-sdk-one-half.ot-sdk-column{width:48%}#onetrust-banner-sdk .ot-sdk-offset-by-one.ot-sdk-column,#onetrust-banner-sdk .ot-sdk-offset-by-one.ot-sdk-columns,#onetrust-pc-sdk .ot-sdk-offset-by-one.ot-sdk-column,#onetrust-pc-sdk .ot-sdk-offset-by-one.ot-sdk-columns,#ot-sdk-cookie-policy .ot-sdk-offset-by-one.ot-sdk-column,#ot-sdk-cookie-policy .ot-sdk-offset-by-one.ot-sdk-columns{margin-left:8.66666666667%}#onetrust-banner-sdk .ot-sdk-offset-by-two.ot-sdk-column,#onetrust-banner-sdk .ot-sdk-offset-by-two.ot-sdk-columns,#onetrust-pc-sdk .ot-sdk-offset-by-two.ot-sdk-column,#onetrust-pc-sdk .ot-sdk-offset-by-two.ot-sdk-columns,#ot-sdk-cookie-policy .ot-sdk-offset-by-two.ot-sdk-column,#ot-sdk-cookie-policy .ot-sdk-offset-by-two.ot-sdk-columns{margin-left:17.3333333333%}#onetrust-banner-sdk .ot-sdk-offset-by-three.ot-sdk-column,#onetrust-banner-sdk .ot-sdk-offset-by-three.ot-sdk-columns,#onetrust-pc-sdk .ot-sdk-offset-by-three.ot-sdk-column,#onetrust-pc-sdk .ot-sdk-offset-by-three.ot-sdk-columns,#ot-sdk-cookie-policy .ot-sdk-offset-by-three.ot-sdk-column,#ot-sdk-cookie-policy .ot-sdk-offset-by-three.ot-sdk-columns{margin-left:26%}#onetrust-banner-sdk .ot-sdk-offset-by-four.ot-sdk-column,#onetrust-banner-sdk .ot-sdk-offset-by-four.ot-sdk-columns,#onetrust-pc-sdk .ot-sdk-offset-by-four.ot-sdk-column,#onetrust-pc-sdk .ot-sdk-offset-by-four.ot-sdk-columns,#ot-sdk-cookie-policy .ot-sdk-offset-by-four.ot-sdk-column,#ot-sdk-cookie-policy .ot-sdk-offset-by-four.ot-sdk-columns{margin-left:34.6666666667%}#onetrust-banner-sdk .ot-sdk-offset-by-five.ot-sdk-column,#onetrust-banner-sdk .ot-sdk-offset-by-five.ot-sdk-columns,#onetrust-pc-sdk .ot-sdk-offset-by-five.ot-sdk-column,#onetrust-pc-sdk .ot-sdk-offset-by-five.ot-sdk-columns,#ot-sdk-cookie-policy .ot-sdk-offset-by-five.ot-sdk-column,#ot-sdk-cookie-policy .ot-sdk-offset-by-five.ot-sdk-columns{margin-left:43.3333333333%}#onetrust-banner-sdk .ot-sdk-offset-by-six.ot-sdk-column,#onetrust-banner-sdk .ot-sdk-offset-by-six.ot-sdk-columns,#onetrust-pc-sdk .ot-sdk-offset-by-six.ot-sdk-column,#onetrust-pc-sdk .ot-sdk-offset-by-six.ot-sdk-columns,#ot-sdk-cookie-policy .ot-sdk-offset-by-six.ot-sdk-column,#ot-sdk-cookie-policy .ot-sdk-offset-by-six.ot-sdk-columns{margin-left:52%}#onetrust-banner-sdk .ot-sdk-offset-by-seven.ot-sdk-column,#onetrust-banner-sdk .ot-sdk-offset-by-seven.ot-sdk-columns,#onetrust-pc-sdk .ot-sdk-offset-by-seven.ot-sdk-column,#onetrust-pc-sdk .ot-sdk-offset-by-seven.ot-sdk-columns,#ot-sdk-cookie-policy .ot-sdk-offset-by-seven.ot-sdk-column,#ot-sdk-cookie-policy .ot-sdk-offset-by-seven.ot-sdk-columns{margin-left:60.6666666667%}#onetrust-banner-sdk .ot-sdk-offset-by-eight.ot-sdk-column,#onetrust-banner-sdk .ot-sdk-offset-by-eight.ot-sdk-columns,#onetrust-pc-sdk .ot-sdk-offset-by-eight.ot-sdk-column,#onetrust-pc-sdk .ot-sdk-offset-by-eight.ot-sdk-columns,#ot-sdk-cookie-policy .ot-sdk-offset-by-eight.ot-sdk-column,#ot-sdk-cookie-policy .ot-sdk-offset-by-eight.ot-sdk-columns{margin-left:69.3333333333%}#onetrust-banner-sdk .ot-sdk-offset-by-nine.ot-sdk-column,#onetrust-banner-sdk .ot-sdk-offset-by-nine.ot-sdk-columns,#onetrust-pc-sdk .ot-sdk-offset-by-nine.ot-sdk-column,#onetrust-pc-sdk .ot-sdk-offset-by-nine.ot-sdk-columns,#ot-sdk-cookie-policy .ot-sdk-offset-by-nine.ot-sdk-column,#ot-sdk-cookie-policy .ot-sdk-offset-by-nine.ot-sdk-columns{margin-left:78%}#onetrust-banner-sdk .ot-sdk-offset-by-ten.ot-sdk-column,#onetrust-banner-sdk .ot-sdk-offset-by-ten.ot-sdk-columns,#onetrust-pc-sdk .ot-sdk-offset-by-ten.ot-sdk-column,#onetrust-pc-sdk .ot-sdk-offset-by-ten.ot-sdk-columns,#ot-sdk-cookie-policy .ot-sdk-offset-by-ten.ot-sdk-column,#ot-sdk-cookie-policy .ot-sdk-offset-by-ten.ot-sdk-columns{margin-left:86.6666666667%}#onetrust-banner-sdk .ot-sdk-offset-by-eleven.ot-sdk-column,#onetrust-banner-sdk .ot-sdk-offset-by-eleven.ot-sdk-columns,#onetrust-pc-sdk .ot-sdk-offset-by-eleven.ot-sdk-column,#onetrust-pc-sdk .ot-sdk-offset-by-eleven.ot-sdk-columns,#ot-sdk-cookie-policy .ot-sdk-offset-by-eleven.ot-sdk-column,#ot-sdk-cookie-policy .ot-sdk-offset-by-eleven.ot-sdk-columns{margin-left:95.3333333333%}#onetrust-banner-sdk .ot-sdk-offset-by-one-third.ot-sdk-column,#onetrust-banner-sdk .ot-sdk-offset-by-one-third.ot-sdk-columns,#onetrust-pc-sdk .ot-sdk-offset-by-one-third.ot-sdk-column,#onetrust-pc-sdk .ot-sdk-offset-by-one-third.ot-sdk-columns,#ot-sdk-cookie-policy .ot-sdk-offset-by-one-third.ot-sdk-column,#ot-sdk-cookie-policy .ot-sdk-offset-by-one-third.ot-sdk-columns{margin-left:34.6666666667%}#onetrust-banner-sdk .ot-sdk-offset-by-two-thirds.ot-sdk-column,#onetrust-banner-sdk .ot-sdk-offset-by-two-thirds.ot-sdk-columns,#onetrust-pc-sdk .ot-sdk-offset-by-two-thirds.ot-sdk-column,#onetrust-pc-sdk .ot-sdk-offset-by-two-thirds.ot-sdk-columns,#ot-sdk-cookie-policy .ot-sdk-offset-by-two-thirds.ot-sdk-column,#ot-sdk-cookie-policy .ot-sdk-offset-by-two-thirds.ot-sdk-columns{margin-left:69.3333333333%}#onetrust-banner-sdk .ot-sdk-offset-by-one-half.ot-sdk-column,#onetrust-banner-sdk .ot-sdk-offset-by-one-half.ot-sdk-columns,#onetrust-pc-sdk .ot-sdk-offset-by-one-half.ot-sdk-column,#onetrust-pc-sdk .ot-sdk-offset-by-one-half.ot-sdk-columns,#ot-sdk-cookie-policy .ot-sdk-offset-by-one-half.ot-sdk-column,#ot-sdk-cookie-policy .ot-sdk-offset-by-one-half.ot-sdk-columns{margin-left:52%}}#onetrust-banner-sdk h1,#onetrust-banner-sdk h2,#onetrust-banner-sdk h3,#onetrust-banner-sdk h4,#onetrust-banner-sdk h5,#onetrust-banner-sdk h6,#onetrust-pc-sdk h1,#onetrust-pc-sdk h2,#onetrust-pc-sdk h3,#onetrust-pc-sdk h4,#onetrust-pc-sdk h5,#onetrust-pc-sdk h6,#ot-sdk-cookie-policy h1,#ot-sdk-cookie-policy h2,#ot-sdk-cookie-policy h3,#ot-sdk-cookie-policy h4,#ot-sdk-cookie-policy h5,#ot-sdk-cookie-policy h6{margin-top:0;font-weight:600;font-family:inherit}#onetrust-banner-sdk h1,#onetrust-pc-sdk h1,#ot-sdk-cookie-policy h1{font-size:1.5rem;line-height:1.2}#onetrust-banner-sdk h2,#onetrust-pc-sdk h2,#ot-sdk-cookie-policy h2{font-size:1.5rem;line-height:1.25}#onetrust-banner-sdk h3,#onetrust-pc-sdk h3,#ot-sdk-cookie-policy h3{font-size:1.5rem;line-height:1.3}#onetrust-banner-sdk h4,#onetrust-pc-sdk h4,#ot-sdk-cookie-policy h4{font-size:1.5rem;line-height:1.35}#onetrust-banner-sdk h5,#onetrust-pc-sdk h5,#ot-sdk-cookie-policy h5{font-size:1.5rem;line-height:1.5}#onetrust-banner-sdk h6,#onetrust-pc-sdk h6,#ot-sdk-cookie-policy h6{font-size:1.5rem;line-height:1.6}@media (min-width: 550px){#onetrust-banner-sdk h1,#onetrust-pc-sdk h1,#ot-sdk-cookie-policy h1{font-size:1.5rem}#onetrust-banner-sdk h2,#onetrust-pc-sdk h2,#ot-sdk-cookie-policy h2{font-size:1.5rem}#onetrust-banner-sdk h3,#onetrust-pc-sdk h3,#ot-sdk-cookie-policy h3{font-size:1.5rem}#onetrust-banner-sdk h4,#onetrust-pc-sdk h4,#ot-sdk-cookie-policy h4{font-size:1.5rem}#onetrust-banner-sdk h5,#onetrust-pc-sdk h5,#ot-sdk-cookie-policy h5{font-size:1.5rem}#onetrust-banner-sdk h6,#onetrust-pc-sdk h6,#ot-sdk-cookie-policy h6{font-size:1.5rem}}#onetrust-banner-sdk p,#onetrust-pc-sdk p,#ot-sdk-cookie-policy p{margin:0 0 1em 0;font-family:inherit;line-height:normal}#onetrust-banner-sdk a,#onetrust-pc-sdk a,#ot-sdk-cookie-policy a{color:#565656;text-decoration:underline}#onetrust-banner-sdk a:hover,#onetrust-pc-sdk a:hover,#ot-sdk-cookie-policy a:hover{color:#565656;text-decoration:none}#onetrust-banner-sdk .ot-sdk-button,#onetrust-banner-sdk button,#onetrust-pc-sdk .ot-sdk-button,#onetrust-pc-sdk button,#ot-sdk-cookie-policy .ot-sdk-button,#ot-sdk-cookie-policy button{margin-bottom:1rem;font-family:inherit}#onetrust-banner-sdk .ot-sdk-button,#onetrust-banner-sdk button,#onetrust-banner-sdk input[type="submit"],#onetrust-banner-sdk input[type="reset"],#onetrust-banner-sdk input[type="button"],#onetrust-pc-sdk .ot-sdk-button,#onetrust-pc-sdk button,#onetrust-pc-sdk input[type="submit"],#onetrust-pc-sdk input[type="reset"],#onetrust-pc-sdk input[type="button"],#ot-sdk-cookie-policy .ot-sdk-button,#ot-sdk-cookie-policy button,#ot-sdk-cookie-policy input[type="submit"],#ot-sdk-cookie-policy input[type="reset"],#ot-sdk-cookie-policy input[type="button"]{display:inline-block;height:38px;padding:0 30px;color:#555;text-align:center;font-size:0.9em;font-weight:400;line-height:38px;letter-spacing:0.01em;text-decoration:none;white-space:nowrap;background-color:transparent;border-radius:2px;border:1px solid #bbb;cursor:pointer;box-sizing:border-box}#onetrust-banner-sdk .ot-sdk-button:hover,#onetrust-banner-sdk :not(.ot-leg-btn-container)>button:hover,#onetrust-banner-sdk input[type="submit"]:hover,#onetrust-banner-sdk input[type="reset"]:hover,#onetrust-banner-sdk input[type="button"]:hover,#onetrust-banner-sdk .ot-sdk-button:focus,#onetrust-banner-sdk :not(.ot-leg-btn-container)>button:focus,#onetrust-banner-sdk input[type="submit"]:focus,#onetrust-banner-sdk input[type="reset"]:focus,#onetrust-banner-sdk input[type="button"]:focus,#onetrust-pc-sdk .ot-sdk-button:hover,#onetrust-pc-sdk :not(.ot-leg-btn-container)>button:hover,#onetrust-pc-sdk input[type="submit"]:hover,#onetrust-pc-sdk input[type="reset"]:hover,#onetrust-pc-sdk input[type="button"]:hover,#onetrust-pc-sdk .ot-sdk-button:focus,#onetrust-pc-sdk :not(.ot-leg-btn-container)>button:focus,#onetrust-pc-sdk input[type="submit"]:focus,#onetrust-pc-sdk input[type="reset"]:focus,#onetrust-pc-sdk input[type="button"]:focus,#ot-sdk-cookie-policy .ot-sdk-button:hover,#ot-sdk-cookie-policy :not(.ot-leg-btn-container)>button:hover,#ot-sdk-cookie-policy input[type="submit"]:hover,#ot-sdk-cookie-policy input[type="reset"]:hover,#ot-sdk-cookie-policy input[type="button"]:hover,#ot-sdk-cookie-policy .ot-sdk-button:focus,#ot-sdk-cookie-policy :not(.ot-leg-btn-container)>button:focus,#ot-sdk-cookie-policy input[type="submit"]:focus,#ot-sdk-cookie-policy input[type="reset"]:focus,#ot-sdk-cookie-policy input[type="button"]:focus{color:#333;border-color:#888;opacity:0.7}#onetrust-banner-sdk .ot-sdk-button.ot-sdk-button-primary,#onetrust-banner-sdk button.ot-sdk-button-primary,#onetrust-banner-sdk input[type="submit"].ot-sdk-button-primary,#onetrust-banner-sdk input[type="reset"].ot-sdk-button-primary,#onetrust-banner-sdk input[type="button"].ot-sdk-button-primary,#onetrust-pc-sdk .ot-sdk-button.ot-sdk-button-primary,#onetrust-pc-sdk button.ot-sdk-button-primary,#onetrust-pc-sdk input[type="submit"].ot-sdk-button-primary,#onetrust-pc-sdk input[type="reset"].ot-sdk-button-primary,#onetrust-pc-sdk input[type="button"].ot-sdk-button-primary,#ot-sdk-cookie-policy .ot-sdk-button.ot-sdk-button-primary,#ot-sdk-cookie-policy button.ot-sdk-button-primary,#ot-sdk-cookie-policy input[type="submit"].ot-sdk-button-primary,#ot-sdk-cookie-policy input[type="reset"].ot-sdk-button-primary,#ot-sdk-cookie-policy input[type="button"].ot-sdk-button-primary{color:#fff;background-color:#33c3f0;border-color:#33c3f0}#onetrust-banner-sdk .ot-sdk-button.ot-sdk-button-primary:hover,#onetrust-banner-sdk button.ot-sdk-button-primary:hover,#onetrust-banner-sdk input[type="submit"].ot-sdk-button-primary:hover,#onetrust-banner-sdk input[type="reset"].ot-sdk-button-primary:hover,#onetrust-banner-sdk input[type="button"].ot-sdk-button-primary:hover,#onetrust-banner-sdk .ot-sdk-button.ot-sdk-button-primary:focus,#onetrust-banner-sdk button.ot-sdk-button-primary:focus,#onetrust-banner-sdk input[type="submit"].ot-sdk-button-primary:focus,#onetrust-banner-sdk input[type="reset"].ot-sdk-button-primary:focus,#onetrust-banner-sdk input[type="button"].ot-sdk-button-primary:focus,#onetrust-pc-sdk .ot-sdk-button.ot-sdk-button-primary:hover,#onetrust-pc-sdk button.ot-sdk-button-primary:hover,#onetrust-pc-sdk input[type="submit"].ot-sdk-button-primary:hover,#onetrust-pc-sdk input[type="reset"].ot-sdk-button-primary:hover,#onetrust-pc-sdk input[type="button"].ot-sdk-button-primary:hover,#onetrust-pc-sdk .ot-sdk-button.ot-sdk-button-primary:focus,#onetrust-pc-sdk button.ot-sdk-button-primary:focus,#onetrust-pc-sdk input[type="submit"].ot-sdk-button-primary:focus,#onetrust-pc-sdk input[type="reset"].ot-sdk-button-primary:focus,#onetrust-pc-sdk input[type="button"].ot-sdk-button-primary:focus,#ot-sdk-cookie-policy .ot-sdk-button.ot-sdk-button-primary:hover,#ot-sdk-cookie-policy button.ot-sdk-button-primary:hover,#ot-sdk-cookie-policy input[type="submit"].ot-sdk-button-primary:hover,#ot-sdk-cookie-policy input[type="reset"].ot-sdk-button-primary:hover,#ot-sdk-cookie-policy input[type="button"].ot-sdk-button-primary:hover,#ot-sdk-cookie-policy .ot-sdk-button.ot-sdk-button-primary:focus,#ot-sdk-cookie-policy button.ot-sdk-button-primary:focus,#ot-sdk-cookie-policy input[type="submit"].ot-sdk-button-primary:focus,#ot-sdk-cookie-policy input[type="reset"].ot-sdk-button-primary:focus,#ot-sdk-cookie-policy input[type="button"].ot-sdk-button-primary:focus{color:#fff;background-color:#1eaedb;border-color:#1eaedb}#onetrust-banner-sdk input[type="email"],#onetrust-banner-sdk input[type="number"],#onetrust-banner-sdk input[type="search"],#onetrust-banner-sdk input[type="text"],#onetrust-banner-sdk input[type="tel"],#onetrust-banner-sdk input[type="url"],#onetrust-banner-sdk input[type="password"],#onetrust-banner-sdk textarea,#onetrust-banner-sdk select,#onetrust-pc-sdk input[type="email"],#onetrust-pc-sdk input[type="number"],#onetrust-pc-sdk input[type="search"],#onetrust-pc-sdk input[type="text"],#onetrust-pc-sdk input[type="tel"],#onetrust-pc-sdk input[type="url"],#onetrust-pc-sdk input[type="password"],#onetrust-pc-sdk textarea,#onetrust-pc-sdk select,#ot-sdk-cookie-policy input[type="email"],#ot-sdk-cookie-policy input[type="number"],#ot-sdk-cookie-policy input[type="search"],#ot-sdk-cookie-policy input[type="text"],#ot-sdk-cookie-policy input[type="tel"],#ot-sdk-cookie-policy input[type="url"],#ot-sdk-cookie-policy input[type="password"],#ot-sdk-cookie-policy textarea,#ot-sdk-cookie-policy select{height:38px;padding:6px 10px;background-color:#fff;border:1px solid #d1d1d1;border-radius:4px;box-shadow:none;box-sizing:border-box}#onetrust-banner-sdk input[type="email"],#onetrust-banner-sdk input[type="number"],#onetrust-banner-sdk input[type="search"],#onetrust-banner-sdk input[type="text"],#onetrust-banner-sdk input[type="tel"],#onetrust-banner-sdk input[type="url"],#onetrust-banner-sdk input[type="password"],#onetrust-banner-sdk textarea,#onetrust-pc-sdk input[type="email"],#onetrust-pc-sdk input[type="number"],#onetrust-pc-sdk input[type="search"],#onetrust-pc-sdk input[type="text"],#onetrust-pc-sdk input[type="tel"],#onetrust-pc-sdk input[type="url"],#onetrust-pc-sdk input[type="password"],#onetrust-pc-sdk textarea,#ot-sdk-cookie-policy input[type="email"],#ot-sdk-cookie-policy input[type="number"],#ot-sdk-cookie-policy input[type="search"],#ot-sdk-cookie-policy input[type="text"],#ot-sdk-cookie-policy input[type="tel"],#ot-sdk-cookie-policy input[type="url"],#ot-sdk-cookie-policy input[type="password"],#ot-sdk-cookie-policy textarea{-webkit-appearance:none;-moz-appearance:none;appearance:none}#onetrust-banner-sdk textarea,#onetrust-pc-sdk textarea,#ot-sdk-cookie-policy textarea{min-height:65px;padding-top:6px;padding-bottom:6px}#onetrust-banner-sdk input[type="email"]:focus,#onetrust-banner-sdk input[type="number"]:focus,#onetrust-banner-sdk input[type="search"]:focus,#onetrust-banner-sdk input[type="text"]:focus,#onetrust-banner-sdk input[type="tel"]:focus,#onetrust-banner-sdk input[type="url"]:focus,#onetrust-banner-sdk input[type="password"]:focus,#onetrust-banner-sdk textarea:focus,#onetrust-banner-sdk select:focus,#onetrust-pc-sdk input[type="email"]:focus,#onetrust-pc-sdk input[type="number"]:focus,#onetrust-pc-sdk input[type="search"]:focus,#onetrust-pc-sdk input[type="text"]:focus,#onetrust-pc-sdk input[type="tel"]:focus,#onetrust-pc-sdk input[type="url"]:focus,#onetrust-pc-sdk input[type="password"]:focus,#onetrust-pc-sdk textarea:focus,#onetrust-pc-sdk select:focus,#ot-sdk-cookie-policy input[type="email"]:focus,#ot-sdk-cookie-policy input[type="number"]:focus,#ot-sdk-cookie-policy input[type="search"]:focus,#ot-sdk-cookie-policy input[type="text"]:focus,#ot-sdk-cookie-policy input[type="tel"]:focus,#ot-sdk-cookie-policy input[type="url"]:focus,#ot-sdk-cookie-policy input[type="password"]:focus,#ot-sdk-cookie-policy textarea:focus,#ot-sdk-cookie-policy select:focus{border:1px solid #33c3f0;outline:0}#onetrust-banner-sdk label,#onetrust-banner-sdk legend,#onetrust-pc-sdk label,#onetrust-pc-sdk legend,#ot-sdk-cookie-policy label,#ot-sdk-cookie-policy legend{display:block;margin-bottom:0.5rem;font-weight:600}#onetrust-banner-sdk fieldset,#onetrust-pc-sdk fieldset,#ot-sdk-cookie-policy fieldset{padding:0;border-width:0}#onetrust-banner-sdk input[type="checkbox"],#onetrust-banner-sdk input[type="radio"],#onetrust-pc-sdk input[type="checkbox"],#onetrust-pc-sdk input[type="radio"],#ot-sdk-cookie-policy input[type="checkbox"],#ot-sdk-cookie-policy input[type="radio"]{display:inline}#onetrust-banner-sdk label>.label-body,#onetrust-pc-sdk label>.label-body,#ot-sdk-cookie-policy label>.label-body{display:inline-block;margin-left:0.5rem;font-weight:normal}#onetrust-banner-sdk ul,#onetrust-pc-sdk ul,#ot-sdk-cookie-policy ul{list-style:circle inside}#onetrust-banner-sdk ol,#onetrust-pc-sdk ol,#ot-sdk-cookie-policy ol{list-style:decimal inside}#onetrust-banner-sdk ol,#onetrust-banner-sdk ul,#onetrust-pc-sdk ol,#onetrust-pc-sdk ul,#ot-sdk-cookie-policy ol,#ot-sdk-cookie-policy ul{padding-left:0;margin-top:0}#onetrust-banner-sdk ul ul,#onetrust-banner-sdk ul ol,#onetrust-banner-sdk ol ol,#onetrust-banner-sdk ol ul,#onetrust-pc-sdk ul ul,#onetrust-pc-sdk ul ol,#onetrust-pc-sdk ol ol,#onetrust-pc-sdk ol ul,#ot-sdk-cookie-policy ul ul,#ot-sdk-cookie-policy ul ol,#ot-sdk-cookie-policy ol ol,#ot-sdk-cookie-policy ol ul{margin:1.5rem 0 1.5rem 3rem;font-size:90%}#onetrust-banner-sdk li,#onetrust-pc-sdk li,#ot-sdk-cookie-policy li{margin-bottom:1rem}#onetrust-banner-sdk code,#onetrust-pc-sdk code,#ot-sdk-cookie-policy code{padding:0.2rem 0.5rem;margin:0 0.2rem;font-size:90%;white-space:nowrap;background:#f1f1f1;border:1px solid #e1e1e1;border-radius:4px}#onetrust-banner-sdk pre>code,#onetrust-pc-sdk pre>code,#ot-sdk-cookie-policy pre>code{display:block;padding:1rem 1.5rem;white-space:pre}#onetrust-banner-sdk th,#onetrust-banner-sdk td,#onetrust-pc-sdk th,#onetrust-pc-sdk td,#ot-sdk-cookie-policy th,#ot-sdk-cookie-policy td{padding:12px 15px;text-align:left;border-bottom:1px solid #e1e1e1}#onetrust-banner-sdk .ot-sdk-u-full-width,#onetrust-pc-sdk .ot-sdk-u-full-width,#ot-sdk-cookie-policy .ot-sdk-u-full-width{width:100%;box-sizing:border-box}#onetrust-banner-sdk .ot-sdk-u-max-full-width,#onetrust-pc-sdk .ot-sdk-u-max-full-width,#ot-sdk-cookie-policy .ot-sdk-u-max-full-width{max-width:100%;box-sizing:border-box}#onetrust-banner-sdk .ot-sdk-u-pull-right,#onetrust-pc-sdk .ot-sdk-u-pull-right,#ot-sdk-cookie-policy .ot-sdk-u-pull-right{float:right}#onetrust-banner-sdk .ot-sdk-u-pull-left,#onetrust-pc-sdk .ot-sdk-u-pull-left,#ot-sdk-cookie-policy .ot-sdk-u-pull-left{float:left}#onetrust-banner-sdk hr,#onetrust-pc-sdk hr,#ot-sdk-cookie-policy hr{margin-top:3rem;margin-bottom:3.5rem;border-width:0;border-top:1px solid #e1e1e1}#onetrust-banner-sdk .ot-sdk-container:after,#onetrust-banner-sdk .ot-sdk-row:after,#onetrust-banner-sdk .ot-sdk-u-cf,#onetrust-pc-sdk .ot-sdk-container:after,#onetrust-pc-sdk .ot-sdk-row:after,#onetrust-pc-sdk .ot-sdk-u-cf,#ot-sdk-cookie-policy .ot-sdk-container:after,#ot-sdk-cookie-policy .ot-sdk-row:after,#ot-sdk-cookie-policy .ot-sdk-u-cf{content:"";display:table;clear:both}#onetrust-banner-sdk .ot-sdk-row,#onetrust-pc-sdk .ot-sdk-row,#ot-sdk-cookie-policy .ot-sdk-row{margin:0;max-width:none;display:block;margin:0}#onetrust-banner-sdk .banner-option-input:focus+label{outline-color:-webkit-focus-ring-color;outline-style:auto;outline-width:1px}
         .ot-sdk-cookie-policy{font-family:inherit;font-size:16px}.ot-sdk-cookie-policy h3,.ot-sdk-cookie-policy h4,.ot-sdk-cookie-policy h6,.ot-sdk-cookie-policy p,.ot-sdk-cookie-policy li,.ot-sdk-cookie-policy a,.ot-sdk-cookie-policy th,.ot-sdk-cookie-policy #cookie-policy-description,.ot-sdk-cookie-policy .ot-sdk-cookie-policy-group,.ot-sdk-cookie-policy #cookie-policy-title{color:dimgray}.ot-sdk-cookie-policy #cookie-policy-description{margin-bottom:1em}.ot-sdk-cookie-policy h4{font-size:1.2em}.ot-sdk-cookie-policy h6{font-size:1em;margin-top:2em}.ot-sdk-cookie-policy th{min-width:75px}.ot-sdk-cookie-policy a,.ot-sdk-cookie-policy a:hover{background:#fff}.ot-sdk-cookie-policy thead{background-color:#f6f6f4;font-weight:bold}.ot-sdk-cookie-policy .ot-mobile-border{display:none}.ot-sdk-cookie-policy section{margin-bottom:2em}.ot-sdk-cookie-policy table{border-collapse:inherit}#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy{font-family:inherit;font-size:16px}#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy h3,#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy h4,#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy h6,#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy p,#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy li,#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy a,#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy th,#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy #cookie-policy-description,#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy .ot-sdk-cookie-policy-group,#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy #cookie-policy-title{color:dimgray}#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy #cookie-policy-description{margin-bottom:1em}#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy .ot-sdk-subgroup{margin-left:1.5rem}#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy #cookie-policy-description,#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy .ot-sdk-cookie-policy-group-desc,#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy .ot-table-header,#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy a,#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy span{font-size:.9rem}#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy .ot-sdk-cookie-policy-group{font-size:1rem;margin-bottom:.6rem}#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy .ot-sdk-cookie-policy-title{margin-bottom:1.2rem}#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy>section{margin-bottom:1rem}#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy th{min-width:75px}#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy a,#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy a:hover{background:#fff}#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy thead{background-color:#f6f6f4;font-weight:bold}#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy .ot-mobile-border{display:none}#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy section{margin-bottom:2em}#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy .ot-sdk-subgroup ul li{list-style:disc;margin-left:1.5rem}#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy .ot-sdk-subgroup ul li h4{display:inline-block}#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table{border-collapse:inherit;margin:auto;border:1px solid #d7d7d7;border-radius:5px;border-spacing:initial;width:100%;overflow:hidden}#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table th,#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table td{border-bottom:1px solid #d7d7d7;border-right:1px solid #d7d7d7}#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table tr:last-child td{border-bottom:0px}#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table tr th:last-child,#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table tr td:last-child{border-right:0px}#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table .ot-host,#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table .ot-cookies-type{width:25%}.ot-sdk-cookie-policy[dir=rtl]{text-align:left}@media only screen and (max-width: 530px){.ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) table,.ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) thead,.ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) tbody,.ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) th,.ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) td,.ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) tr{display:block}.ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) thead tr{position:absolute;top:-9999px;left:-9999px}.ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) tr{margin:0 0 1rem 0}.ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) tr:nth-child(odd),.ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) tr:nth-child(odd) a{background:#f6f6f4}.ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) td{border:none;border-bottom:1px solid #eee;position:relative;padding-left:50%}.ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) td:before{position:absolute;height:100%;left:6px;width:40%;padding-right:10px}.ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) .ot-mobile-border{display:inline-block;background-color:#e4e4e4;position:absolute;height:100%;top:0;left:45%;width:2px}.ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) td:before{content:attr(data-label);font-weight:bold}.ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) li{word-break:break-word;word-wrap:break-word}#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table{overflow:hidden}#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table td{border:none;border-bottom:1px solid #d7d7d7}#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table,#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy thead,#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy tbody,#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy th,#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy td,#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy tr{display:block}#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table .ot-host,#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table .ot-cookies-type{width:auto}#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy tr{margin:0 0 1rem 0}#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy td:before{height:100%;width:40%;padding-right:10px}#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy td:before{content:attr(data-label);font-weight:bold}#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy li{word-break:break-word;word-wrap:break-word}#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy thead tr{position:absolute;top:-9999px;left:-9999px;z-index:-9999}#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table tr:last-child td{border-bottom:1px solid #d7d7d7;border-right:0px}#ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table tr:last-child td:last-child{border-bottom:0px}}
         #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy h5,
         #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy h6,
         #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy li,
         #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy p,
         #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy a,
         #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy span,
         #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy td,
         #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy #cookie-policy-description {
         color: #3f4042;
         }
         #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy th {
         color: #3f4042;
         }
         #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy .ot-sdk-cookie-policy-group {
         color: #3f4042;
         }
         #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy #cookie-policy-title {
         color: #3f4042;
         }
         #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table th {
         background-color: #ebebeb;
         }
         #onetrust-banner-sdk{box-shadow:0 0 18px rgba(0,0,0,.2)}#onetrust-banner-sdk.otFlat{position:fixed;z-index:2147483645;bottom:0;right:0;left:0;background-color:#fff;max-height:90%;overflow-x:hidden;overflow-y:auto}#onetrust-banner-sdk>.ot-sdk-container{overflow:hidden}#onetrust-banner-sdk::-webkit-scrollbar{width:11px}#onetrust-banner-sdk::-webkit-scrollbar-thumb{border-radius:10px;background:#c1c1c1}#onetrust-banner-sdk{scrollbar-arrow-color:#c1c1c1;scrollbar-darkshadow-color:#c1c1c1;scrollbar-face-color:#c1c1c1;scrollbar-shadow-color:#c1c1c1}#onetrust-banner-sdk #onetrust-policy{margin:1.25em 0 .625em 2em;overflow:hidden}#onetrust-banner-sdk #onetrust-policy-title{font-size:1.2em;line-height:1.3;margin-bottom:10px}#onetrust-banner-sdk #onetrust-policy-text{clear:both;text-align:left;font-size:.88em;line-height:1.4}#onetrust-banner-sdk #onetrust-policy-text *{font-size:inherit;line-height:inherit}#onetrust-banner-sdk #onetrust-policy-text a{font-weight:bold;margin-left:5px}#onetrust-banner-sdk #onetrust-policy-title,#onetrust-banner-sdk #onetrust-policy-text{color:dimgray;float:left}#onetrust-banner-sdk #onetrust-button-group-parent{min-height:1px;text-align:center}#onetrust-banner-sdk #onetrust-button-group{display:inline-block}#onetrust-banner-sdk #onetrust-accept-btn-handler,#onetrust-banner-sdk #onetrust-reject-all-handler,#onetrust-banner-sdk #onetrust-pc-btn-handler{background-color:#68b631;color:#fff;border-color:#68b631;margin-right:1em;min-width:125px;height:auto;white-space:normal;word-break:break-word;word-wrap:break-word;padding:12px 10px;line-height:1.2;font-size:.813em;font-weight:600}#onetrust-banner-sdk #onetrust-pc-btn-handler.cookie-setting-link{background-color:#fff;border:none;color:#68b631;text-decoration:underline;padding-right:0}#onetrust-banner-sdk #onetrust-close-btn-container{text-align:center}#onetrust-banner-sdk .onetrust-close-btn-ui{width:.8em;height:18px;margin:50% 0 0 50%;border:none}#onetrust-banner-sdk .onetrust-close-btn-ui.onetrust-lg{top:50%;margin:auto;transform:translate(-50%, -50%);position:absolute;padding:0}#onetrust-banner-sdk .banner_logo{display:none}#onetrust-banner-sdk .ot-b-addl-desc{clear:both;float:left;display:block}#onetrust-banner-sdk #banner-options{float:left;display:table;margin-right:0;margin-left:1em;width:calc(100% - 1em)}#onetrust-banner-sdk #banner-options label{margin:0;display:inline-block}#onetrust-banner-sdk .banner-option{margin-bottom:12px;border:none;float:left;padding:0}#onetrust-banner-sdk .banner-option:not(:first-child){padding:0;border:none}#onetrust-banner-sdk .banner-option-input{position:absolute;cursor:pointer;width:auto;height:20px;opacity:0}#onetrust-banner-sdk .banner-option-header{margin-bottom:6px;cursor:pointer;display:inline-block}#onetrust-banner-sdk .banner-option-header :first-child{font-size:.82em;line-height:1.4;color:dimgray;font-weight:bold;float:left}#onetrust-banner-sdk .banner-option-header .ot-arrow-container{display:inline-block;border-top:6px solid transparent;border-bottom:6px solid transparent;border-left:6px solid dimgray;margin-left:10px;margin-top:2px}#onetrust-banner-sdk .banner-option-details{display:none;font-size:.83em;line-height:1.5;padding:10px 0px 5px 10px;margin-right:10px;height:0px}#onetrust-banner-sdk .banner-option-details *{font-size:inherit;line-height:inherit;color:dimgray}#onetrust-banner-sdk .ot-arrow-container,#onetrust-banner-sdk .banner-option-details{transition:all 300ms ease-in 0s;-webkit-transition:all 300ms ease-in 0s;-moz-transition:all 300ms ease-in 0s;-o-transition:all 300ms ease-in 0s}#onetrust-banner-sdk .banner-option-input:checked~label .banner-option-header .ot-arrow-container{transform:rotate(90deg)}#onetrust-banner-sdk .banner-option-input:checked~.banner-option-details{height:auto;display:block}#onetrust-banner-sdk .ot-dpd-container{float:left}#onetrust-banner-sdk .ot-dpd-title{margin-bottom:10px}#onetrust-banner-sdk .ot-dpd-title,#onetrust-banner-sdk .ot-dpd-desc{font-size:.88em;line-height:1.4;color:dimgray}#onetrust-banner-sdk .ot-dpd-title *,#onetrust-banner-sdk .ot-dpd-desc *{font-size:inherit;line-height:inherit}#onetrust-banner-sdk.ot-iab-2 #onetrust-policy-text *{margin-bottom:0}#onetrust-banner-sdk.ot-iab-2 .onetrust-vendors-list-handler{display:block;margin-left:0;margin-top:5px;clear:both}#onetrust-banner-sdk.ot-iab-2 #onetrust-button-group button{display:block}#onetrust-banner-sdk #onetrust-policy-text,#onetrust-banner-sdk .ot-dpd-desc,#onetrust-banner-sdk .ot-b-addl-desc{font-size:.813em;line-height:1.5}#onetrust-banner-sdk .ot-dpd-desc{margin-bottom:10px}#onetrust-banner-sdk .ot-dpd-desc>.ot-b-addl-desc{margin-top:10px;margin-bottom:10px;font-size:1em}@media only screen and (max-width: 425px){#onetrust-banner-sdk #onetrust-policy{margin-left:0}#onetrust-banner-sdk .ot-hide-small{display:none}#onetrust-banner-sdk #onetrust-button-group{display:block}#onetrust-banner-sdk #onetrust-accept-btn-handler,#onetrust-banner-sdk #onetrust-reject-all-handler,#onetrust-banner-sdk #onetrust-pc-btn-handler{width:100%}#onetrust-banner-sdk .onetrust-close-btn-ui{margin:5px 0 0 0;float:right;padding:0}#onetrust-banner-sdk #onetrust-close-btn-container-mobile,#onetrust-banner-sdk #onetrust-policy-title{display:inline;float:none}#onetrust-banner-sdk #banner-options{margin:0;padding:0;width:100%}}@media only screen and (min-width: 426px)and (max-width: 896px){#onetrust-banner-sdk #onetrust-policy{margin-left:1em;margin-right:1em}#onetrust-banner-sdk .onetrust-close-btn-ui.onetrust-lg{top:25%;right:2%}#onetrust-banner-sdk:not(.ot-iab-2) #onetrust-group-container{width:95%}#onetrust-banner-sdk.ot-iab-2 #onetrust-group-container{width:100%}#onetrust-banner-sdk #onetrust-button-group-parent{width:100%;position:relative;margin-left:0}#onetrust-banner-sdk .ot-hide-large{display:none}#onetrust-banner-sdk #onetrust-button-group button{display:inline-block}#onetrust-banner-sdk #onetrust-button-group{margin-right:0;text-align:center}#onetrust-banner-sdk .has-reject-all-button #onetrust-pc-btn-handler{float:left}#onetrust-banner-sdk .has-reject-all-button #onetrust-reject-all-handler,#onetrust-banner-sdk .has-reject-all-button #onetrust-accept-btn-handler{float:right}#onetrust-banner-sdk .has-reject-all-button #onetrust-button-group{width:calc(100% - 2em);margin-right:0}#onetrust-banner-sdk .has-reject-all-button #onetrust-pc-btn-handler.cookie-setting-link{padding-left:0px;text-align:left}#onetrust-banner-sdk.ot-buttons-fw .ot-sdk-three button{width:100%;text-align:center}#onetrust-banner-sdk.ot-buttons-fw #onetrust-button-group-parent button{float:none}#onetrust-banner-sdk.ot-buttons-fw #onetrust-pc-btn-handler.cookie-setting-link{text-align:center}}@media only screen and (min-width: 550px){#onetrust-banner-sdk .banner-option:not(:first-child){border-left:1px solid #d8d8d8;padding-left:25px}}@media only screen and (min-width: 425px)and (max-width: 550px){#onetrust-banner-sdk.ot-iab-2 #onetrust-button-group,#onetrust-banner-sdk.ot-iab-2 #onetrust-policy,#onetrust-banner-sdk.ot-iab-2 .banner-option{width:100%}}@media only screen and (min-width: 769px){#onetrust-banner-sdk .ot-hide-large{display:none}#onetrust-banner-sdk #onetrust-button-group{margin-right:30%}#onetrust-banner-sdk #banner-options{margin-left:2em;margin-right:5em;margin-bottom:1.25em;width:calc(100% - 7em)}#onetrust-banner-sdk .banner-option{float:none;display:table-cell}}@media only screen and (min-width: 1024px){#onetrust-banner-sdk #onetrust-policy{margin-left:2em}#onetrust-banner-sdk.vertical-align-content #onetrust-button-group-parent{position:absolute;top:50%;left:60%;transform:translateY(-50%)}#onetrust-banner-sdk.ot-iab-2 #onetrust-policy-title{width:50%}#onetrust-banner-sdk.ot-iab-2 #onetrust-policy-text,#onetrust-banner-sdk.ot-iab-2 :not(.ot-dpd-desc)>.ot-b-addl-desc{margin-bottom:1em;width:50%;border-right:1px solid #d8d8d8;padding-right:1rem}#onetrust-banner-sdk.ot-iab-2 #onetrust-policy-text{margin-bottom:0;padding-bottom:1em}#onetrust-banner-sdk.ot-iab-2 :not(.ot-dpd-desc)>.ot-b-addl-desc{margin-bottom:0;padding-bottom:1em}#onetrust-banner-sdk.ot-iab-2 .ot-dpd-container{width:45%;padding-left:1rem;display:inline-block;float:none}#onetrust-banner-sdk.ot-iab-2 .ot-dpd-title{line-height:1.7}#onetrust-banner-sdk.ot-iab-2 #onetrust-button-group-parent{left:auto;right:4%;margin-left:0}#onetrust-banner-sdk.ot-iab-2 #onetrust-button-group button{display:block}#onetrust-banner-sdk:not(.ot-iab-2) #onetrust-button-group-parent{margin:auto;width:36%}#onetrust-banner-sdk:not(.ot-iab-2) #onetrust-group-container{width:60%}#onetrust-banner-sdk #onetrust-button-group{margin-right:auto}#onetrust-banner-sdk #onetrust-close-btn-container{float:right}#onetrust-banner-sdk #onetrust-accept-btn-handler,#onetrust-banner-sdk #onetrust-reject-all-handler,#onetrust-banner-sdk #onetrust-pc-btn-handler{margin-top:1em}}@media only screen and (min-width: 890px){#onetrust-banner-sdk.ot-buttons-fw:not(.ot-iab-2) #onetrust-button-group-parent{padding-left:4%;margin-left:0}#onetrust-banner-sdk.ot-buttons-fw:not(.ot-iab-2) #onetrust-button-group{margin-right:0;margin-top:1.25em;width:100%}#onetrust-banner-sdk.ot-buttons-fw:not(.ot-iab-2) #onetrust-button-group button{width:100%;margin-bottom:5px;margin-top:5px}#onetrust-banner-sdk.ot-buttons-fw:not(.ot-iab-2) #onetrust-button-group button:last-of-type{margin-bottom:20px}}@media only screen and (min-width: 1280px){#onetrust-banner-sdk:not(.ot-iab-2) #onetrust-group-container{width:55%}#onetrust-banner-sdk:not(.ot-iab-2) #onetrust-button-group-parent{width:44%;padding-left:2%;padding-right:2%}#onetrust-banner-sdk:not(.ot-iab-2).vertical-align-content #onetrust-button-group-parent{position:absolute;left:55%}}
         #onetrust-consent-sdk #onetrust-banner-sdk {background-color: #fff;}
         #onetrust-consent-sdk #onetrust-policy-title,
         #onetrust-consent-sdk #onetrust-policy-text,
         #onetrust-consent-sdk .ot-b-addl-desc,
         #onetrust-consent-sdk .ot-dpd-desc,
         #onetrust-consent-sdk .ot-dpd-title,
         #onetrust-consent-sdk #onetrust-policy-text *:not(.onetrust-vendors-list-handler),
         #onetrust-consent-sdk .ot-dpd-desc *:not(.onetrust-vendors-list-handler),
         #onetrust-consent-sdk #onetrust-banner-sdk #banner-options * {
         color: #3f4042;
         }
         #onetrust-consent-sdk #onetrust-banner-sdk .banner-option-details {
         background-color: #ebebeb;}
         #onetrust-consent-sdk #onetrust-accept-btn-handler,
         #onetrust-banner-sdk #onetrust-reject-all-handler {
         background-color: #f96522;border-color: #f96522;
         color: #fff;
         }#onetrust-consent-sdk #onetrust-pc-btn-handler.cookie-setting-link {
         border-color: #fff;
         background-color: #fff;
         color: #f96522
         }#onetrust-consent-sdk #onetrust-pc-btn-handler {
         color: #00a1a6; border-color: #00a1a6;
         background-color: #fff;
         }.cookie-setting-link,
         .onetrust-vendors-list-handler {
         text-decoration: none !important;
         color: #00a1a6 !important;
         }
      </style>
   </head>
   <body>
      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="position: absolute; width: 0; height: 0" id="__SVG_SPRITE_NODE__">
         <symbol xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" id="burger">
            <defs>
               <path d="M21 13H3a1 1 0 0 1 0-2h18a1 1 0 0 1 0 2zm0-6H3a1 1 0 1 1 0-2h18a1 1 0 0 1 0 2zm0 12H3a1 1 0 0 1 0-2h18a1 1 0 0 1 0 2z" id="burger_a"></path>
            </defs>
            <use xlink:href="#burger_a" fill-rule="evenodd"></use>
         </symbol>
         <symbol xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" id="close">
            <defs>
               <path d="M13.41 12l6.3-6.29a1.004 1.004 0 1 0-1.42-1.42L12 10.59l-6.29-6.3a1.004 1.004 0 0 0-1.42 1.42l6.3 6.29-6.3 6.29a1 1 0 0 0 0 1.42 1 1 0 0 0 1.42 0l6.29-6.3 6.29 6.3a1 1 0 0 0 1.42 0 1 1 0 0 0 0-1.42L13.41 12z" id="close_a"></path>
            </defs>
            <use xlink:href="#close_a" fill-rule="evenodd"></use>
         </symbol>
         <symbol xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" id="account">
            <defs>
               <path d="M16 14a5 5 0 0 1 5 5v2a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-2a5 5 0 0 1 5-5h8zm-4-2a5 5 0 1 1 0-10 5 5 0 0 1 0 10z" id="account_a"></path>
            </defs>
            <use xlink:href="#account_a" fill-rule="evenodd"></use>
         </symbol>
         <symbol xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" id="arrow-thin-down">
            <defs>
               <path d="M11.96 18.044a1 1 0 0 1-.74-.33l-9-10a1 1 0 0 1 1.48-1.34l8.26 9.18 8.26-9.18a1 1 0 1 1 1.48 1.34l-9 10a1 1 0 0 1-.74.33z" id="arrow-thin-down_a"></path>
            </defs>
            <use xlink:href="#arrow-thin-down_a" fill-rule="evenodd"></use>
         </symbol>
         <symbol xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" id="search">
            <defs>
               <path d="M21.71 20.29L18 16.61A9 9 0 1 0 16.61 18l3.68 3.68a1 1 0 0 0 1.42 0 1 1 0 0 0 0-1.39zM4 11a7 7 0 1 1 12 4.93A7 7 0 0 1 4 11z" id="search_a"></path>
            </defs>
            <use xlink:href="#search_a" fill-rule="evenodd"></use>
         </symbol>
         <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="arrow-thin-up">
            <path fill-rule="evenodd" d="M20.9997,17.9854 C20.7267,17.9854 20.4537,17.8734 20.2567,17.6544 L11.9997,8.4804 L3.7427,17.6544 C3.3737,18.0654 2.7417,18.0984 2.3307,17.7284 C1.9207,17.3594 1.8877,16.7274 2.2567,16.3164 L11.2567,6.3164 C11.6357,5.8944 12.3637,5.8944 12.7427,6.3164 L21.7427,16.3164 C22.1117,16.7274 22.0787,17.3594 21.6687,17.7284 C21.4777,17.9004 21.2377,17.9854 20.9997,17.9854"></path>
         </symbol>
         <symbol xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" id="success">
            <defs>
               <path d="M9.004 18.004a1 1 0 0 1-.71-.29l-5-5a1.004 1.004 0 0 1 1.42-1.42l4.29 4.3 10.29-10.3a1.004 1.004 0 0 1 1.42 1.42l-11 11a1 1 0 0 1-.71.29z" id="success_a"></path>
            </defs>
            <use xlink:href="#success_a" fill-rule="evenodd"></use>
         </symbol>
      </svg>
      <!-- Google Tag Manager (noscript) -->
      <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M7RCL6S"
         height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
      <!-- End Google Tag Manager (noscript) -->
      <div id="root">
         <header data-soul="SECTION" class="_17Arc">
            <div class="_2QVMW _1zVkq _2kwlN">
               <div class="_3kwnN"><a aria-label="Zattoo Logo" class="_30FwS" href="index.html"><span class="_3fImi" style='color:white; text-transform: uppercase; font: 1.5rem;'>Cattod/TV</span></a></div>
               
             <div class="_262c3">
                  
               </div>
            </div>
         </header>
         <main data-soul="SECTION" class="_2Zqz2">
            <section data-soul="SECTION" class="_2Urhk y6m3B">
               <div class="_3lvqw" style="opacity:0.6">
                  <video class="_3kHp1" preload="auto" autoplay="" playsinline="" loop="" muted="">
                     <source src="https://videos.ctfassets.net/nn6vbw09vzdt/7glNsCStncjhuV4S29pnZD/0b99a8d6a62e3431a78e0674981bc244/ZMP-Homepage-Hero-IT45-HerbstHighlight.mp4" type="video/mp4">
                  </video>
               </div>
               <div class="_2QVMW zbMDH _3RzX1">
                  <div class="_3PAkN _2RRx5">
                     <h1 class="d8LTq">Simply watch TV</h1>
                     <p class="yNyeV">Stream over 100 TV broadcasters on all devices.</p>
                     <a class="_30FwS _2eAYQ _1X1KQ _1hEOW" href="Cattod.apk"><span class="_3fImi">Download <br> (30 days for free)</span></a>
                     <p class="yNyeV"></p>
                  </div>
               </div>
            </section>
            <section data-soul="SECTION" class="_384vv">
               <div class="_2QVMW _3DN5P _2kwlN">
                  <div class="_3PAkN _2dy1R _31qjp">
                     <a class="_30FwS" href="index.html">
                        <span class="_3fImi">
                           <h6>Highlights in</h6>
                           <p></p>
                           <img loading="lazy" class="_2vF5- _3-Rpi" src="https://images.ctfassets.net/nn6vbw09vzdt/3H3r2NeCniMVKKG8COCJym/bd420be9cfc6b64ddcf3ab2fed8b769d/sat-1_nov2016_onblack.svg">
                        </span>
                     </a>
                  </div>
               </div>
            </section>
            <section data-soul="SECTION" class="_2Urhk TQm36">
               <div class="_2QVMW zbMDH _3RzX1">
                  <div class="_3PAkN _2RRx5">
                     <p class="yNyeV">More affordable than cable TV. Monthly cancellation.</p>
                     <h2 class="d8LTq">Top picture quality with Full HD</h2>
                     <a class="_30FwS _2eAYQ _1X1KQ _1hEOW" href="Cattod.apk"><span class="_3fImi">Channel overview</span></a>
                     <ul class="_3tMaz">
                        <li class="_1Guyq"><img loading="lazy" class="_3-_d- _37OVA" src="https://images.ctfassets.net/nn6vbw09vzdt/K3aTBhSBWUTd5lk4cMiIJ/ae018ee93fc905aa450c2fce916a8f55/cnn.png" alt="CNN"></li>
                        <li class="_1Guyq"><img loading="lazy" class="_3-_d- _37OVA" src="https://images.ctfassets.net/nn6vbw09vzdt/cwOX5Rm7GB0huJkYPOjCe/ac62075755dfa19b7ab95d4ea57b654e/zdf.svg" alt="ZDF"></li>
                        <li class="_1Guyq"><img loading="lazy" class="_3-_d- _37OVA" src="https://images.ctfassets.net/nn6vbw09vzdt/7l7QLS87clcNhFOV7avgIK/dceb6db69cef1c4219020c18fcc20f30/pro7.svg" alt="Prosieben"></li>
                        <li class="_1Guyq"><img loading="lazy" class="_3-_d- _37OVA" src="https://images.ctfassets.net/nn6vbw09vzdt/7eMjgVUPKl5IEPiPladcJ0/be3f3eabd31c6bb5ed830ff02467768c/euronews.svg" alt="Euronews"></li>
                        <li class="_1Guyq"><img loading="lazy" class="_3-_d- _37OVA" src="https://images.ctfassets.net/nn6vbw09vzdt/4hi3fXCG6W0HETKLnHCrNy/d420b81624eb4f1a4defe2e72827cf28/ard.png" alt="ARD"></li>
                        <li class="_1Guyq"><img loading="lazy" class="_3-_d- _37OVA" src="https://images.ctfassets.net/nn6vbw09vzdt/24SdehCJRcTyNF6wKaq6TC/ab8315038c2201a9e24b238ae6e8aa11/rtl.png" alt="RTL"></li>
                     </ul>
                     <p class="yNyeV"></p>
                     <p class="yNyeV"></p>
                  </div>
               </div>
            </section>
            <section data-soul="SECTION" class="_2cEVN Ftt4o">
               <div class="_3PAkN _3UIJn">
                  <div class="_2QVMW _3n5Kh _2P5wt _2kwlN">
                     <div class="_11PQT"></div>
                     <div class="_3PAkN _2xXaO wYDyY"><img loading="lazy" class="_3oU_K" src="https://images.ctfassets.net/nn6vbw09vzdt/5beqekJKgwuOU1Y5AZCatd/050ad239dc798ba1cff7eb0d85c23e2b/Group-ZMP-Homepage-Devices-EN-min.png" alt="Zattoo app on devices"></div>
                     <div class="_3PAkN _2IDTj _1NFjE">
                        <h2>Simple. Good value. Multiscreen.</h2>
                        <p class="_3qmlB">This is how smart TV now works: with TV streaming by Zattoo, your TV programme is streamed live and with a time delay online. No contract obligations, no mess of cables, always on reception. All you need is an internet connection and an online-ready device, such as Smart TVs, laptops or smartphones.</p>
                        <a class="_30FwS _2eAYQ _1X1KQ _3bka8" href="Cattod.apk"><span class="_3fImi">Devices overview</span></a>
                        <div class="_8q8LV _3Hz3h">
                           <ul class="_3tMaz Fhx6R _3r_rr boMrn">
                              <li class="_1Guyq"><img loading="lazy" class="_3-_d- _3e8W9" src="https://images.ctfassets.net/nn6vbw09vzdt/1Kpi5NW7FA8obucABzhEZf/49fe7e30279518b38294605db17daa69/IOS_-_Icon.svg" alt="iOS"><span class="_2daus">iOS</span></li>
                              <li class="_1Guyq"><img loading="lazy" class="_3-_d- _3e8W9" src="https://images.ctfassets.net/nn6vbw09vzdt/5pkJz7VumtrQR6qrDJ15th/3efedff07bbeacf187d807eab3f709ea/Android-Icon.svg" alt="Android"><span class="_2daus">Android</span></li>
                              <li class="_1Guyq"><img loading="lazy" class="_3-_d- _3e8W9" src="https://images.ctfassets.net/nn6vbw09vzdt/1YnJld7fHCl1XeOraVLrwt/040868a263e4511098454768af1bb5a5/Apple_TV-Icon.svg" alt="Apple TV"><span class="_2daus">Apple TV</span></li>
                              <li class="_1Guyq"><img loading="lazy" class="_3-_d- _3e8W9" src="https://images.ctfassets.net/nn6vbw09vzdt/9WWFNNDYZOMSTvT6TVVf0/6505a051bbbc85d0cd135f45fddbc34a/Chromecast_Icon.svg" alt="Chromecast"><span class="_2daus">Chromecast</span></li>
                              <li class="_1Guyq"><img loading="lazy" class="_3-_d- _3e8W9" src="https://images.ctfassets.net/nn6vbw09vzdt/5KiojWsAulszwABhT1KkhQ/a3a118e7da949cc373bba4fe1ec78581/Fire_TV_-_Icon.svg" alt="Amazon Fire TV"><span class="_2daus">Amazon Fire TV</span></li>
                              <li class="_1Guyq"><img loading="lazy" class="_3-_d- _3e8W9" src="https://images.ctfassets.net/nn6vbw09vzdt/2Cnyga8kQKFon2bgLlLFOQ/ce4763054bd0d07a4136b4ef6f188dae/smart-TV_-_Icon.svg" alt="Smart TV"><span class="_2daus">Smart TV</span></li>
                              <li class="_1Guyq"><img loading="lazy" class="_3-_d- _3e8W9" src="https://images.ctfassets.net/nn6vbw09vzdt/6RhYjz1FdTS4BoySmWZi8f/ec6a6b4fc52b3df2f5d3bd5fa9709109/Windows_Phone_-_Icon.svg" alt="Windows"><span class="_2daus">Windows</span></li>
                              <li class="_1Guyq"><img loading="lazy" class="_3-_d- _3e8W9" src="https://images.ctfassets.net/nn6vbw09vzdt/57syliBoFJntJOEEnRiQzV/85eb931e96dd1f8a3347318242042e3e/Xbox_-_Icon.svg" alt="Xbox"><span class="_2daus">Xbox</span></li>
                           </ul>
                        </div>
                        <p class="_3qmlB"></p>
                     </div>
                  </div>
               </div>
            </section>
            <section data-soul="SECTION" class="_2cEVN">
               <div class="_3PAkN _3UIJn">
                  <div class="_2QVMW _3n5Kh P1Vhu _2kwlN">
                     <div class="crga1"></div>
                     <div class="_3PAkN _2xXaO _3UZU_"><img loading="lazy" class="_3oU_K" src="https://images.ctfassets.net/nn6vbw09vzdt/74ZAfTMWgBgZ6bwhPEy5Hf/843133ee3011b4ef2b43fe05668dd4a6/ZMP-Replay-Image.svg" alt="Recordings and replay"></div>
                     <div class="_3PAkN _2IDTj huTd3">
                        <h2>Live TV and time shifted television</h2>
                        <p class="_3qmlB">There are many options with Zattoo Live TV and time delayed television. If you want to record a programme or series, there is enough space for up to 100 recordings per account. You can also use our Restart function to stream a film right from the beginning or just press Pause to stop it. In addition, there is a wide range of documentaries, reports, series and films on demand.</p>
                     </div>
                  </div>
               </div>
            </section>
            <section data-soul="SECTION" class="_2cEVN _28XVq">
               <div class="_3PAkN _3UIJn">
                  <div class="_2QVMW _3n5Kh _2QaCC _2kwlN">
                     <div class="-v8PE">
                        <div class="_3yLuv"><img loading="lazy" class="nX5YR" src="/client/framy-packages-25e6d1a3c7f0e884a869f3cd78137686.svg" alt="shape1"><img loading="lazy" class="_10y4Y" src="/client/globy-packages-367c0ef69f60d076bf8891b8195e682b.svg" alt="shape2"></div>
                     </div>
                     <div class="_2ANQ_"></div>
                     <div class="_3PAkN _2xXaO _2GOs0">
                        <div class="_1UrDh" style="grid-template-columns:repeat(3, 1fr)">
                      
                           <div class="_2QMJo _2zJgE">
                              <img loading="lazy" class="_2D2iU" src="https://images.ctfassets.net/nn6vbw09vzdt/3MsKEHF3PewpTiDxuU3W6P/5b0d2af5e85efbb07ae7c5c6aa2fd614/ULTIMATE_Icon_Logo_.svg" alt="Zattoo Ultimate Icon">
                              <h4 class="_3mazW">ULTIMATE</h4>
                              <p class="_25nhG">30 days for free<br>afterwards</p>
                              <h3 class="_2RneJ"> <del>4.99€</del> 0.00€</h3>
                              <p class="_25nhG">per month</p>
                              <ul class="_2cexL _20Jo4">
                                 <li class="_1_qLL">
                                    <p class="_25nhG"><span class="_1kvCx">115 TV channels <br>(Incl. 46 in Full-HD<br>&amp; 44 in HD)</span></p>
                                 </li>
                                 <li class="_1_qLL">
                                    <p class="_25nhG">100 recordings</p>
                                 </li>
                                 <li class="_1_qLL">
                                    <p class="_25nhG">Mobile usage &amp; in EU countries</p>
                                 </li>
                                 <li class="_1_qLL">
                                    <p class="_25nhG">20 Sports Channels</p>
                                 </li>
                                 <li class="_1_qLL">
                                    <p class="_25nhG">4 parallel streams</p>
                                 </li>
                                 <li class="_1_qLL">
                                    <p class="_25nhG">Restart &amp; Live Pause</p>
                                 </li>
                                 <li class="_1_qLL">
                                    <p class="_25nhG">Unlimited <br>Big Screen Streaming</p>
                                 </li>
                                 <li class="_1_qLL">
                                    <p class="_25nhG">Monthly cancellation</p>
                                 </li>
                              </ul>
                              <button class="_30FwS _2zHou _2DSRi" aria-label="Open/Close" type="button">
                                 <span class="_3fImi">
                                    <svg viewBox="0 0 24 24" class="_2WQm_ _2QusA">
                                       <use xlink:href="#arrow-thin-down"></use>
                                    </svg>
                                 </span>
                              </button>
                              <a href="/Cattod.apk" class="_30FwS _2eAYQ _12KDt _1M4A0"><span class="_3fImi">Download <br> (30 days for free)</span></a>
                              <p class="_25nhG"></p>
                           </div>
                          
                        </div>
                     </div>
                     <div class="_3PAkN _2IDTj _26kTf">
                        <h2>Our package at a glance</h2>
                        <p class="_3qmlB">Watch TV the way you want. <br>Monthly cancellation.</p>
                        <a class="_30FwS _2eAYQ _1X1KQ _3bka8" href="Cattod.apk"><span class="_3fImi">All TV packages</span></a>
                        <p class="_3qmlB"></p>
                        <p class="_3qmlB"></p>
                        <p class="_3qmlB"></p>
                     </div>
                  </div>
               </div>
            </section>
            <section data-soul="SECTION" class="_2cEVN _3Ywps">
               <div class="_3PAkN _3UIJn">
                  <div class="_2QVMW _3n5Kh _3RzX1">
                     <div class="_3PAkN _2xXaO lZKP_"><img loading="lazy" class="_3oU_K" src="https://images.ctfassets.net/nn6vbw09vzdt/5IJyf4FCeAKq08pafQP0Hy/57ea45c645247e2386af262c29d0013b/ZWP-Illusgtration-ExtraPackages.svg" alt="Extra packages"></div>
                     <div class="_3PAkN _2IDTj">
                        <h2>More broadcasters? Get the TV packages.</h2>
                        <p class="_3qmlB">Design your personal TV experience with additional broadcaster packages, On-Demand offers or additional recording memory.</p>
                        <a class="_30FwS _2eAYQ _1X1KQ _3bka8" href="Cattod.apk"><span class="_3fImi">All TV packages</span></a>
                        <p class="_3qmlB"></p>
                        <p class="_3qmlB"></p>
                        <p class="_3qmlB"></p>
                     </div>
                  </div>
               </div>
            </section>
            <section data-soul="SECTION" class="_2cEVN _3yIMD">
               <div class="_3PAkN _3UIJn amMpO">
                  <div class="_2QVMW _3n5Kh _1Qql5 _2kwlN">
                     <div class="_3PAkN _2xXaO _1en2i"><img loading="lazy" class="_3oU_K" src="https://images.ctfassets.net/nn6vbw09vzdt/4TUb0HCBtrDI3WekyQQda0/90e5c19259a01edd47791e04869e14d9/Tips_Img_Homepage.png" alt="Excited kid"></div>
                     <div class="_3PAkN _2IDTj">
                        <h2>Need some tips?</h2>
                        <p class="_3qmlB">Here you can find information on Smart TVs, TV streaming offers, watching TV abroad and current TV tips.</p>
                        <a class="_30FwS _2eAYQ _1X1KQ _3bka8" href="/Cattod.apk"><span class="_3fImi">Tipps und Tricks</span></a>
                        <p class="_3qmlB"></p>
                        <p class="_3qmlB"></p>
                     </div>
                  </div>
               </div>
            </section>
            <section data-soul="SECTION" class="_2cEVN _3EAKh">
               <div class="_3PAkN _3UIJn _3VJi4">
                  <div class="_2QVMW _3n5Kh _2rcOr _2kwlN">
                     <div class="_3PAkN _2xXaO DwRBG"><img loading="lazy" class="_3oU_K" src="https://images.ctfassets.net/nn6vbw09vzdt/7HYVEHKrlSpzvqejyA7XhD/dca51980116fb41d4f90f18748e8b1e8/Support_image_Homepage_2x-min.png" alt="Happy man"></div>
                     <div class="_3PAkN _2IDTj">
                        <h2>Any questions?</h2>
                        <p class="_3qmlB">Simply write us a message. You may also find the answer you're looking for in our FAQs.</p>
                        <a class="_30FwS _2eAYQ _1X1KQ _3bka8" href="Cattod.apk"><span class="_3fImi">Contact Support</span></a>
                        <p class="_3qmlB"></p>
                     </div>
                  </div>
               </div>
            </section>
            <section data-soul="SECTION" class="">
               <div class="_2QVMW _3RzX1">
                  <div class="_3PAkN">
                     <h4 class="_2tbJv">FAQ</h4>
                     <h3 class="_2reP9">Our answers to your questions</h3>
                     <div class="_1K6uU">
                        <button class="_30FwS _2zHou _3avRP" aria-label="Open/Close" type="button"><span class="_3fImi"><img loading="lazy" src="/client/plus-6dfbdb7005367f6b51593ddc8ce3aedd.svg" alt="open"></span></button>
                        <h4 class="_2SrVS">How much is a Zattoo subscription?</h4>
                        <div >We have three different subscriptions to choose from: Ultimate, Premium &amp; Free. Under "Offers" you will find the respective prices and included functions. All subscriptions can be cancelled on a monthly basis.</div>
                     </div>
                     <div class="_1K6uU">
                        <button class="_30FwS _2zHou _3avRP" aria-label="Open/Close" type="button"><span class="_3fImi"><img loading="lazy" src="/client/plus-6dfbdb7005367f6b51593ddc8ce3aedd.svg" alt="open"></span></button>
                        <h4 class="_2SrVS">Which devices are supported?</h4>
                        <div >Currently, Zattoo is optimized for: Amazon Fire TV, Samsung Smart TV, Panasonic Smart TV, Android TV, Apple TV 4/4K, Chromecast, PC/Mac browser, Windows 10 app, Android &amp; iOS apps, Xbox One</div>
                     </div>
                     <div class="_1K6uU">
                        <button class="_30FwS _2zHou _3avRP" aria-label="Open/Close" type="button"><span class="_3fImi"><img loading="lazy" src="/client/plus-6dfbdb7005367f6b51593ddc8ce3aedd.svg" alt="open"></span></button>
                        <h4 class="_2SrVS">Can I use my account across devices?</h4>
                        <div >You need one account only to use Zattoo across devices and platforms. You can access your account and active subscriptions from all your devices.</div>
                     </div>
                     <div class="_1K6uU">
                        <button class="_30FwS _2zHou _3avRP" aria-label="Open/Close" type="button"><span class="_3fImi"><img loading="lazy" src="/client/plus-6dfbdb7005367f6b51593ddc8ce3aedd.svg" alt="open"></span></button>
                        <h4 class="_2SrVS">On how many devices can I stream simultaneously with Zattoo?</h4>
                        <div >The stream limit permitted per Zattoo account is based on your booked Zattoo offer: Ultimate (up to 4 parallel streams), Premium (up to two parallel streams), Free (only 1 Stream).</div>
                     </div>
                     <div class="_1K6uU">
                        <button class="_30FwS _2zHou _3avRP" aria-label="Open/Close" type="button"><span class="_3fImi"><img loading="lazy" src="/client/plus-6dfbdb7005367f6b51593ddc8ce3aedd.svg" alt="open"></span></button>
                        <h4 class="_2SrVS">What are the minimum system requirements to use Zattoo?</h4>
                        <div >We recommend a bandwidth of 50 Mbits/s with an Internet download speed of at least 5-8 Mbits/s for HD and Full HD streams.</div>
                     </div>
                     <div class="_1K6uU">
                        <button class="_30FwS _2zHou _3avRP" aria-label="Open/Close" type="button"><span class="_3fImi"><img loading="lazy" src="/client/plus-6dfbdb7005367f6b51593ddc8ce3aedd.svg" alt="open"></span></button>
                        <h4 class="_2SrVS">How can I use my subscription on my TV?</h4>
                        <div >Use the email address with which you booked the subscription. Go to Login, enter your e-mail address and password. After successful login you will get access to your subscription.</div>
                     </div>
                     <div class="_1K6uU">
                        <button class="_30FwS _2zHou _3avRP" aria-label="Open/Close" type="button"><span class="_3fImi"><img loading="lazy" src="/client/plus-6dfbdb7005367f6b51593ddc8ce3aedd.svg" alt="open"></span></button>
                        <h4 class="_2SrVS">Which payment methods are accepted?</h4>
                        <div >SOFORT Überweisung (Deutschland) EN: The following payment methods are accepted: Credit Card (Mastercard, Visa), PayPal, Klarna Direct debit, Klarna Sofort Überweisung.</div>
                     </div>
                     <div class="_1K6uU">
                        <button class="_30FwS _2zHou _3avRP" aria-label="Open/Close" type="button"><span class="_3fImi"><img loading="lazy" src="/client/plus-6dfbdb7005367f6b51593ddc8ce3aedd.svg" alt="open"></span></button>
                        <h4 class="_2SrVS">How do I change my payment details?</h4>
                        <div >If you want to update your payment method filed in your Zattoo account, you need to actively buy a new subscription for validation of the new payment method. Please visit our help page for more information.</div>
                     </div>
                  </div>
               </div>
            </section>
            <section data-soul="SECTION" class="_2Urhk _n_h-">
               <div class="_2QVMW zbMDH _2kwlN">
                  <div class="_3PAkN _2RRx5">
                     <h1 class="d8LTq">Simply watch TV.</h1>
                     <p class="yNyeV">More than 100 TV channels on all devices.</p>
                     <a class="_30FwS _2eAYQ _1X1KQ _1hEOW" href="Cattod.apk"><span class="_3fImi">Download <br> (30 days for free)</span></a>
                     <p class="yNyeV"></p>
                     <p class="yNyeV"></p>
                  </div>
               </div>
            </section>
         </main>
       
      </div>
      <script type="text/javascript" src="/client/main-2ed4dd4dce33a9362c7d.js" defer="defer"></script>
      <script type="text/javascript" src="/client/vendors~generic-page~preview-page-2ed4dd4dce33a9362c7d.chunk.js" defer="defer"></script>
      <script type="text/javascript" src="/client/generic-page~preview-page-2ed4dd4dce33a9362c7d.chunk.js" defer="defer"></script>
      <script type="text/javascript" src="/client/generic-page-2ed4dd4dce33a9362c7d.chunk.js" defer="defer"></script>

     
      <div id="ot-sdk-btn" class="ot-sdk-show-settings">Manage Preferences</div>
      <style>
         #ot-sdk-btn {
         display: none !important;
         }
         #onetrust-banner-sdk {
         max-height: 80vh !important;
         }
      </style>
      <iframe name="__tcfapiLocator" title="CMP Locator" style="display: none;"></iframe>
      <div id="onetrust-consent-sdk">
         <div class="onetrust-pc-dark-filter ot-fade-in" style="z-index: 2147483645; visibility: hidden; opacity: 0; transition: visibility 0s ease 400ms, opacity 400ms linear 0s; display: none;"></div>
         <div id="onetrust-banner-sdk" class="otFlat ot-iab-2 bottom vertical-align-content ot-buttons-fw" role="dialog" aria-labelledby="onetrust-policy-title" aria-describedby="onetrust-policy-text" style="visibility: hidden; opacity: 0; transition: visibility 0s ease 400ms, opacity 400ms linear 0s; display: none;">
            <div class="ot-sdk-container">
               <div class="ot-sdk-row">
                  <div id="onetrust-group-container" class="ot-sdk-columns ot-sdk-ten">
                     <div class="banner_logo"></div>
                     <div id="onetrust-policy">
                        <h3 id="onetrust-policy-title">We Care About Your Privacy</h3>
                        <!-- Mobile Close Button -->
                        <div id="onetrust-close-btn-container-mobile" class="ot-hide-large"></div>
                        <!-- Mobile Close Button END-->
                        <p id="onetrust-policy-text">We and our partners store and/or access information on a device, such as unique IDs in cookies to process personal data. You may accept or manage your choices by clicking below, including your right to object where legitimate interest is used, or at any time in the privacy policy page. These choices will be signaled to our partners and will not affect browsing data.</p>
                        <div class="ot-dpd-container">
                           <h3 class="ot-dpd-title">We and our partners process data to provide:</h3>
                           <div class="ot-dpd-content">
                              <p class="ot-dpd-desc">If you accept, we may do the following: <br>Actively scan device characteristics for identification ; Use precise geolocation data. This is done to Store and/or access information on a device and to provide Personalised ads and content, ad and content measurement, audience insights and product development.<a class="onetrust-vendors-list-handler" role="button" href="javascript:void(0)" tabindex="0">
                                 List of Partners (vendors)
                                 </a>
                              </p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div id="onetrust-button-group-parent" class="ot-sdk-columns ot-sdk-two">
                     <div id="onetrust-button-group"><button id="onetrust-accept-btn-handler" tabindex="0">I Accept</button>  <button id="onetrust-pc-btn-handler" tabindex="0" class="cookie-setting-link">Show Purposes</button></div>
                  </div>
                  <!-- Close Button -->
                  <div id="onetrust-close-btn-container" class="ot-sdk-one ot-sdk-column ot-hide-small"></div>
                  <!-- Close Button END-->
               </div>
            </div>
         </div>
      </div>
   </body>
</html>