<!DOCTYPE HTML> 
<html xmlns:fb="http://ogp.me/ns/fb#">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/jquery-ui-1.10.3.custom.js"></script>
        <script type="text/javascript" src="js/textualizer.js"></script>
        <script type="text/javascript" src="js/funciones.js"></script>
        <script type="text/javascript" src="js/social.js"></script>
        <script type="text/javascript" src="js/jquery.jplayer.js"></script>
        <script type="text/javascript" src="js/ttw-music-player.js"></script>
        <script type="text/javascript" src="js/myplaylist.js"></script>
        <link rel="stylesheet" type="text/css" href="css/estilos.css">
        <link rel="stylesheet" type="text/css" href="css/styleSocial.css">
        <link rel="stylesheet" type="text/css" href="css/sunny/jquery-ui-1.10.3.custom.css">
        <link rel="stylesheet" type="text/css" href="css/stylePlayer.css">

        <title>Carbonno - Divergente</title>
    </head>
    <body>
        <script type="text/javascript">

                    function labnol() {
                      var url = "controlador/descargar.php";  
                      $(location).attr('href',url);
                    }

                    window.fbAsyncInit = function() {
                      FB.init({ status : true, cookie : true, xfbml  : true });
                      FB.Event.subscribe('edge.create', function(response) { labnol(); });
                    };

                    (function(d, s, id) {
                      var js, fjs = d.getElementsByTagName(s)[0];
                      if (d.getElementById(id)) return;
                      js = d.createElement(s); js.id = id;
                      js.src = "//connect.facebook.net/en_US/all.js";
                      fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));
                </script>
         <script type="text/javascript">
        $(document).ready(function(){
            var description = 'Texto de ejemplo y prueba';

            $('#reproductor').ttwMusicPlayer(myPlaylist, {
                autoPlay:false, 
                //description:description,
                buyNotActive:true,
                jPlayer:{
                    swfPath:'../plugin/jquery-jplayer' //You need to override the default swf path any time the directory structure changes
                }
            });
        });
    </script> 
    
 
    <div id="header">
            <div id="logo" align="center">
                Carbonno
            </div>
            <div id="txtlzr">
                
            </div>
            <div id="red">
                <ul class="social" id="jquery">
			<li class="facebook">
				<a href="https://www.facebook.com/carbono.band" target="blank"><strong>Facebook</strong></a>
			</li>
                        <li class="twitter">
				<a href="http://twitter.com/carbono_band" target="blank"><strong>Twitter</strong></a>
			</li>
			<li class="soundcloud">
				<a href="http://www.soundcloud.com/carbono_band" target="blank"><strong>Soundcloud</strong></a>
			</li>
			<li class="youtube">
				<a href="http://www.youtube.com/Carbonnorock" target="blank"><strong>Youtube</strong></a>
			</li>
			<!--<li class="reddit">
				<a href="http://www.reddit.com/"><strong>Reddit</strong></a>
			</li>
			<li class="rss">
				<a href="http://feeds2.feedburner.com/marcofolio"><strong>RSS</strong></a>
			</li>*/-->
			
		</ul>
            </div>
            
        </div>
        <div id="banner">
            <img src="media/images/banner.jpg" style="cursor: pointer;" width="100%">
        </div>
        <div id="reproductor"></div>
        <div id="instagram">
            <iframe src="http://widget.stagram.com/in/carbonorock/?s=100&w=6&h=1&b=1&p=5" allowtransparency="true" frameborder="0" scrolling="no" style="border:none;overflow:hidden;width:690px; height: 115px" ></iframe> <!-- Webstagram - web.stagram.com -->
        </div>
        <div id="dialog">
            <div align="center">
                <img src="media/images/bannerDescarga.jpg"/>
            </div>
            <div align="center">
            <div id="fb-root"></div>
                 <div id="restricted">
                  <fb:like href="http://www.facebook.com/carbono.band" send="false" 
                      layout="standard" width="550" show_faces="true"></fb:like>
            </div>
            <div align="right">Si ya sigues a CARBONNO, haz click <a href="controlador/descargar.php">aquí</a></div>
            </div>
        </div>
<!--
     -->   
    </body>
</html>
