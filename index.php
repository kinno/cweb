 <html xmlns:fb="http://ogp.me/ns/fb#">
    <head>
        <title></title>
    </head>
    <body>
    <div id="fb-root"></div>
    <script type="text/javascript">
 
        function labnol() {
          // The file URL that visitors can download after their Like/tweet/+1
          var url = "descargar.php";  
          url = "<a href='" + url + "'>Click here</a> to download the file.";
          document.getElementById("restricted").innerHTML = url;
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
 
     <div id="restricted">
      <fb:like href="http://www.facebook.com/carbono.band" send="false" 
          layout="button_count" width="220" show_faces="false"></fb:like>
     </div>
        
    </body>
</html>
