 <div class="container">
        <div id="top"><a class="scrollup" href="#" style="display: inline;"><i class="fa fa-angle-up"></i>Top</a></div>
        <div class="copyright pull-left">
            Copyright &copy; HanhToiLySon <?php $now = getdate(); echo $now["year"] ?> . Thiết kế bởi <a target="_blank" href="huanit1237.blogspot.com">Võ Văn Huấn</a>.
        </div>
        <div class="paypal pull-right"></div>
    </div>


<div id="fb-root">
           
       </div>
       <script>
           $(document).ready(function() {
               var raido = $(".wrap").attr("data-toggle");
               if(raido === 1){
                   $(".vnk-tuvan").css("display","none");
                   $(".x").click(function(){
                       $(".wrap").slideToggle();
                       $(".vnk-tuvan").slideToggle();
                   });
                   $(".vnk-tuvan").click(function(){
                       $(".wrap").slideToggle();
                       $(this).slideToggle();
                   });
               }else{
                   $(".wrap").css("display","none");
                   $(".x").click(function(){
                       $(".wrap").slideToggle();
                       $(".vnk-tuvan").slideToggle();
                   });
                   $(".vnk-tuvan").click(function(){
                       $(".wrap").slideToggle();
                       $(this).slideToggle();
                   });
               }
           }) 
           (function(d, s, id) {var js, fjs = d.getElementsByTagName(s)[0];
               if (d.getElementById(id)) 
                   return;
               js = d.createElement(s);
               js.id = id;js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.9&&appId=126586364523772";
               fjs.parentNode.insertBefore(js, fjs);
           }(document, "script", "facebook-jssdk"));
    </script>
              <style>
                  .wrap{
                      position:fixed; 
                      width:300px; 
                      height: 400px;
                      z-index:9999999;
                      right:0px; 
                      bottom:0px;
                  }.x{
                        font-family: arial, helvetica;
                        background: rgba(78,86,101,0.8) none repeat scroll 0 0;
                        font-size:14px;font-weight:bold;color: #fff;
                        display: inline-block;height: 25px;line-height: 25px;
                        position: absolute;right: 0;text-align: center;
                        top: -19px;width: 25px;z-index: 99999999;
                  }.x:hover{
                      cursor: pointer;
                  }.pxem{
                      text-align:left;
                      height:20px;
                      margin-bottom: 0;margin-top: 0;
                      background: #34495E;
                      width:100%;
                      bottom: 0;display: block;
                      left: 0px;position: absolute;
                      z-index: 999999999;border-left: 1px solid #fff;
                  }.pxem a.axem{
                      color: #fff;font-family: arial,helvetica;
                      font-size: 12px;
                      line-height: 23px;
                      padding-left: 5px;
                      text-decoration: none;
                  }.pxem a.axem:hover{
                      text-decoration: underline;
                  }.alogo{
                        position: absolute;
                        bottom: 0;right: 0px;
                        z-index: 999999999999;
                        width: 75px;
                        height: 20px;
                        display: inline-block;
                        background:#34495E;
                        border-left:2px solid #2c3e50;
                        padding-right: 0px;
                        padding-left: 5px
                  }.vnk-tuvan{
                      position:fixed;
                      width: 300px;
                      background:#34495E;
                      z-index:99999999;
                      right:0px;
                      bottom:0px; 
                      border-style: solid solid none;
                      border-width: 1px 1px 0;
                      border-color: #2c3e50
                  }.vnk-tuvan p{
                      color: #fff;font-size: 15px;
                      margin: 0;padding: 0 13px;
                      text-align: left;
                  }.vnk-tuvan p a{
                      color: #fff;
                      font-size: 15px;
                      padding: 5px 0px 7px;
                      margin: 0;display:inline-block;
                      font-family: arial, helvetica;
                      text-decoration: none;
                  }.vnk-tuvan p a:hover{
                      text-decoration: underline;
                      cursor: pointer;
                  }.vnk-tuvan p img {
                      float: right;
                      margin-top: 10px;
                  } 
              </style>
              <div data-toggle="0" class="wrap" style="position:fixed; width:220px; height: 320px; ">
                  <span class="x" style="">X</span>
                  <div class="fb-page" data-adapt-container-width="true" data-height="320" data-hide-cover="false" data-href="<?php echo $supports->onlinechat; ?>" data-show-facepile="true" data-show-posts="false" data-small-header="false" data-tabs="messages" data-width="280" style="position:relative; z-index:9999999; right:50px; bottom:21px;border-left: 1px solid #fff;border-top: 1px solid #fff;">
                      
                  </div>
                  
              </div>
              <div class="vnk-tuvan" style="width: 220px;" >
                  <p style=" ">
                              <a style="">Để lại lời nhắn của bạn?</a>
                              <img src="<?php echo base_url('upload') ?>/icons/supprt.png">
                          </p>
                      </div>
