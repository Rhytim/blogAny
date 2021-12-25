<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <title>Blog de Videojuegos</title>
</head>

<body>
    <!-- CABECERA -->
    <header id="cabecera">
        <div id="logo">
            <a href="index.php">
                Blog de Videojuegos
            </a>
        </div>

        <!-- MENU -->
        <nav id="menu">
            <ul>
                <li>
                    <a href="index.php">Inicio</a>
                </li>
                <li>
                    <a href="index.php">Categoria 1</a>
                </li>
                <li>
                    <a href="index.php">Categoria 2</a>
                </li>
                <li>
                    <a href="index.php">Categoria 3</a>
                </li>
                <li>
                    <a href="index.php">Categoria 4</a>
                </li>
                <li>
                    <a href="index.php">Sobre mi</a>
                </li>
                <li>
                    <a href="index.php">Contacto</a>
                </li>
            </ul>
        </nav>
        <div class="clearfix"></div>
    </header>

    <!-- BARRA LATERAL -->
    <div id="contenedor">
        <aside id="sidebar">
            <div id="login" class="bloque">
                <h3>Identificate</h3>
                <form action="login.php" method="POST">
                    <label for="email">Email</label>
                    <input type="email" name="email">
                    <label for="password">Contraseña</label>
                    <input type="password" name="password">
                    <input type="submit" value="Entrar">
                </form>
            </div>
            <div id="register" class="bloque">
                <h3>Registrate</h3>
                <form action="register.php" method="POST">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre">
                    <label for="apellidos">Apellidos</label>
                    <input type="text" name="apellidos">
                    <label for="email">Email</label>
                    <input type="email" name="email">
                    <label for="password">Contraseña</label>
                    <input type="password" name="password">
                    <input type="submit" value="Registrar">
                </form>
            </div>
        </aside>
    </div>

    <!-- CAJA PRINCIPAL -->
    <div id="principal">
        <h1>Ultimas entradas</h1>
        <article class="entrada">
            <h2>Titulo de mi entrada</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi, eum. Facilis explicabo molestiae
                adipisci, iusto voluptate eaque animi praesentium quo repellat. Eum pariatur saepe omnis, nulla ipsam
                vel at est?
            </p>
        </article>
        <article class="entrada">
            <h2>Titulo de mi entrada</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi, eum. Facilis explicabo molestiae
                adipisci, iusto voluptate eaque animi praesentium quo repellat. Eum pariatur saepe omnis, nulla ipsam
                vel at est?
            </p>
        </article>
        <article class="entrada">
            <h2>Titulo de mi entrada</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi, eum. Facilis explicabo molestiae
                adipisci, iusto voluptate eaque animi praesentium quo repellat. Eum pariatur saepe omnis, nulla ipsam
                vel at est?
            </p>
        </article>
    </div>

    <!-- PIE DE PAGINA -->
    <footer id="pie">
        <p>Desarrollado por Marc Lopez &copy; 2021</p>
    </footer>

</body>

</html>