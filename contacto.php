<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contacto</title>
    <link href="estilos/estilo6.css" rel="stylesheet" type="text/css">
    <link href="estilos/contactos1.css" rel="stylesheet" type="text/css">
</head>
<body>
    <header>
        <nav>
           <img class="img1" width="88" height="88" src="imagenes/beer.png">
            <ul>
                <li><a class="log" href="index.php">INICIO</a></li>
                <li><a href="">MENU</a>
                <ul>
                <li><a href="cocina.php">TIPOS DE BEBIDA</a></li>
                    <li><a href="dietas.php">BEBIDAS ESPECIALES</a></li>
                    
                </ul>
                </li>    
                <li><a href="Nosotros.php">QUIENES SOMOS</a></li>
                <li><a href="contacto.php">CONTACTO</a></li>
            </ul>
        </nav>
    </header>
    <section id="contenido">
       <a name="arriba"><img class="img2" width="1100" height="200" src="imagenes/beer.png"></a>
        <article id="A">
            <h2>CONTACTANOS</h2>
            <p>Hola estimado cliente, aqui le presentamos un resgistro pacontactarnos y saber mas de nosotros en privado, solo añada supara que podamos identificarlo en nuestra agencia de adopcion detodo tiene que poner su numero telefonico, para poder llamanimarle a adptar un cachorro.</p>
          <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d120683.33321243603!2d-65.27729104458008!3d-19.0481600009138!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sbo!4v1723646552271!5m2!1ses!2sbo" width="950" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
           <p class="cali"><a href="formulario.php">CALIFICANOS</a></p>
            
        </article>
        <article id="B">
           <form class="contact_form" action="#" method="post">
        <ul>
            <li>
                <h2>Contactanos</h2>
            </li>
            <li>
                <label for="name">Nombre</label>
                <input type="text" placeholder="Johan Ricardo" required/>
            </li>
            <li>
                <label for="email">Email:</label>
                <input type="email" name="email" placeholder="jricardo@ejemplo.com" required />
            </li>
            <li>
                <label for="website">Sitio web:</label>
                <input type="url" name="web" placeholder="http://tutosytips.com" required />
            </li>
            <li>
               <label for="website">Busqueda:</label>
                <input type="search" placeholder="Busqueda" name="busqueda" id="busqueda" required autofocus>
            </li>
            <li>
               <label for="website">Telefono:</label>
                <input type="tel" placeholder="Telefono" name="telefono" id="telefono" required>
            </li>
            <li>
               <label for="website">C. Hijos:</label>
                <input type="number" placeholder="Numeros" name="numero" id="numero" min="0" max="9" step="1" required>
            </li>
            <li>
               <label for="website">fecha de N.:</label>
                <input type="date" placeholder="Calendario" name="fecha" id="fecha" required>
            </li>
            <li>
               <label for="website">Hora de R.:</label>
                <input type="time" placeholder="Tiempo" name="hora" id="hora" required>
            </li>
            <li>
               <label for="website">C. favorito:</label>
                <input type="color" placeholder="Color" name="color" id="color" required>
            </li>
            <li>
               <label for="website">C.I.:</label>
                <input pattern="[0-9]{8}" placeholder="codigo" name="codigopostal" id="codigopostal" required>
            </li>
            <li>
                <label for="Mensaje">Mensaje:</label>
                <textarea name="Mensaje" cols="40" rows="6" required ></textarea>
            </li>
            <li>
                <button class="submit" type="submit">Enviar</button>
            </li>
        </ul>
    </form>
        </article>
    </section>
    <footer>
        <div class="div1">
            <h3>Visitanos</h3>
            <p>El Prado, 1234</p>
            <p>La Paz, LP 10001</p>
        </div>
        <div class="div2">
        <h3>Horario de Apertura</h3>
        <p>Lun-Vie: 7pm - 6am</p>
            <p>Sab-Dom: 8pm - 12pm</p>
        </div>
        <div class="div3">
        <h3>Contactanos</h3>
        <p>Beerplace@gamil.com</p>
            <p>+591 - 76586575</p>
        </div>
        <div class="div4">
            <p>&copia; 2024 Beer Place. Todos los derechos reservados.</p>
            <p>Pagina web hecho por: Alejandro Javier Toco Vasquez</p>
        </div>
    </footer>
</body>
</html>