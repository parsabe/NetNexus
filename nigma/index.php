<?php
session_start();
if(isset($_SESSION['anon_id'])){
    header("location: https://nigma.hounaar.com/portal/");
}

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/src/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" 
    crossorigin="anonymous">
    
    <link rel="icon" href="/src/pics/riddler.png"/>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-66QB6HFNET"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-66QB6HFNET');
</script>


    <title>Edward Nigma</title>
</head>

<script type="text/javascript">
    (function(c,l,a,r,i,t,y){
        c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
        t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
        y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
    })(window, document, "clarity", "script", "g2hfleg8gp");
</script>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-THDPB69');</script>
<!-- End Google Tag Manager -->

<body>
    
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-THDPB69"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

    <div class="container">
        <img src="/src/pics/logo.png" class="img-fluid src" alt="">

    </div>
    <div class="container">
        <div class="row mt-5 justify-content-between">
            <div class="col-md-5">
                <form method="POST" class="form-group login">
                    <h4>In order to play, you need to create an account first.</h4>
                    <input type="text" placeholder="Enter Username" name="username" class="form-control" required><br/>
                    <input type="password" placeholder="Enter Password" name="password" class="form-control" required><br/>
                    <button class="btn btn-success enter">Enter</button>
                    <div class="col error"></div>
                </form>
            </div>
            <div class="col-lg-5">
                <img src="/src/pics/riddler.png" class="img-fluid question" height="200" width="200" alt="">
            </div>
        </div>
    </div>
    <script type="text/javascript" src="/src/js/login.js"></script>
    
</body>
</html>
