<?php 

use Controllers\UserController;

// aqui se ocorrer um post criamos um objeto da controller e chamamos a função passando os campos desejados

if ($_POST) {
    $user = new UserController ();

    $user = $user -> verifyLogin ($_POST ["email"] , $_POST ["password"]);
    echo ($user);
}

?>

<html lang = "pt-br">
    <head> 
        <link href="https://cdn.jsdelivr.net/npm/daisyui@3.9.2/dist/full.css" rel="stylesheet" type="text/css" />
        <script src="https://cdn.tailwindcss.com"></script>
    </head>

    <body> 
        <div class="hero min-h-screen bg-base-200">
            <div class="hero-content flex-col lg:flex-row-reverse">
                <div class="text-center lg:text-left">
                <h1 class="text-5xl font-bold"> Me dá sua senha aí </h1>
                <p class="py-6"> Confia man, eu ia fazer fishing pra que ?  </p>
                </div>
                <div class="card flex-shrink-0 w-full max-w-sm shadow-2xl bg-base-100">
                <form class="card-body" method = "POST">
                    <div class="form-control">
                    <label class="label">
                        <span class="label-text"> Email </span>
                    </label>
                    <input type="email" placeholder = "email" class="input input-bordered" name = "email" required />
                    </div>
                    <div class="form-control">
                    <label class="label">
                        <span class="label-text"> Senha </span>
                    </label>
                    <input type="password" placeholder = "senha" class="input input-bordered" name = "password" required />
                    <label class="label">
                        <a href="#" class="label-text-alt link link-hover"> Como assim vc esqueceu sua senha ?  </a>
                    </label>
                    </div>
                    <div class="form-control mt-6">
                    <button class="btn btn-primary">Login</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </body>
</html>