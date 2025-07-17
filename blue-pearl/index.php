<?php
session_start();
if(isset($_SESSION['anon_id'])){
    header("location: /blue-pearl/portal/index.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/blue-pearl/src/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> 
    <title>Blue Pearl</title>
</head>
<body>
    

    <div class="container" id="main-body">
        <img src="/blue-pearl/src/pics/logo.png" class="img-fluid" alt="">

        <div class="col enter">
            <a href="" data-bs-toggle="modal" data-bs-target="#signup">enter</a>
        </div>
        <div class="col">
        <a href="/blue-pearl/portal/change-pass/">
                            <button class="btn btn-danger mt-3">Forgot Password?</button> 
                        </a>
        </div>
        <div class="row mt-5">
            <div class="col mt-5 desc">
                IS THE WORLD INSANE
            </div>
        </div>
    </div>



    <div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>                    
                
                <form class="form-group signup" method="POST">
                    <br/>    
                    <div class="col">Enter username</div>
                        <input type="text" name="username" class="form-control"><br/>

                        <div class="col">Enter password</div>
                        <input type="password" name="password" class="form-control">


                        <button class="btn btn-primary mt-3 submit">Apply</button> 
                       

                        
                        <div class="col mt-4 error"></div>
                    </form>
                     
            </div>
            
          </div>
        </div>
      </div>

<script type="text/javascript" src="/blue-pearl/src/js/login.js"></script>

    
</body>
</html>
