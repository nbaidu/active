﻿<?php 
$url=isset($_GET['url'])?$_GET['url']:'http://188tv.vip';//改成你已经被拦截的域名网址


 ?>
<!DOCTYPE html>
                    <html lang="zh">
                    <head>
                    <title>安全页面 放心访问</title>
					<script id="wxjubao-js" src="/jubao/wxjubao.js"> </script>
                    <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
                    </head>
                    <style>
                      *{margin:0;padding:0;font-family: "Microsoft YaHei";color: #fff;}
                        body,div,form,input,li,ol,p,textarea,ul{margin:0;padding:0;font-family: "Microsoft YaHei";color: #fff;}
                      body{background:#fff;color:#3f3f3f;font-family:Apple LiGothic Medium,SimHei,Geneva,Arial,Helvetica,sans-serif;-webkit-tap-highlight-color:transparent;-webkit-tap-highlight-color:transparent;-webkit-touch-callout:none;-webkit-appearance:none;width:100%;font-size:12px;}
                      body p {color: white;text-align: center;line-height: 25px;}
#zl{
overflow:hidden;
}
                    </style>
                    <body style="text-align: center;">
                    <div id="Zl"><iframe  id="preview" src="<?=$url?>" frameborder="0" width="100%" height="910px"scrolling='auto'></iframe></div>
                    <script>
                        $("#Zl").html("<iframe width="100%" id="preview" src="<?=$url?>" frameborder="0"></iframe>");
                        $(document).ready(function(){
                                function fix_height(){  $("#preview").attr("height", (($(window).height())-5) + "px");}
                                $(window).resize(function(){ fix_height(); }).resize();
                                $("#preview").contentWindow.focus();
                        });
                    </script>
</br></br></br>

                    </body>
                    </html>

