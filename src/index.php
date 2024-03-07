<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    
    <title>To do List</title>
</head>
<body>
    
    <div class="container mt-5 pt-5">
        <div class="row align-item-center">
            <div class="col-md-10 mx-auto col-lg-4">               
                
                <?php if(isset($_SESSION['msg'])){ echo $_SESSION['msg'];}?>
                
                <form action="app/validateLogin.php" method="POST" class="p-4 p-md-5 border rounded-3 bg-light">
                    <div class="input-group flex-nowrap mb-3">
                        <h1>Login</h1>
                    </div>
                    
                    <div class="input-group flex-nowrap mb-3">
                        <input type="text" name="name" class="form-control" placeholder="Usuário..." required>
                    </div>

                    <div class="input-group flex-nowrap mb-3">
                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                    </div>

                    <div class="input-group flex-nowrap mb-3">
                        <input type="password" name="pass" class="form-control" placeholder="Senha..." required>
                    </div>

                    <div class="input-group flex-nowrap mb-3">
                        <a href="cadastrarUsuario.php">Cadastre-se</a>
                    </div>

                    <div class="d-grid gap-2">    
                        <input type="submit" value="Logar" class="btn btn-lg btn-success">
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    
</body>
</html>