  <?php
    $MensajeBienvenida = "Bienvenidos a Time Royal";
    $ContactoEmail = "Timeroyal@gmail.com";
    $TelefonoContacto = "+123456789";
    $Localidad = "CABA";
    $RedesSociales = "Instagram: RelojeriaTimeRoyal";
    $contactoMensaje = "Contáctanos hoy mismo en $RedesSociales.";

    define("CURRENT_YEAR", date("Y")); 

    if (isset($_GET['cart']) && $_GET['cart'] == 'added') {
        echo "<script>showAlert('Inicie sesión para agregar al carrito ✔️');</script>";
    }
    include_once'header.php';
    ?>

    <section id="home">
        <div class="container">
            <h2><?php echo $MensajeBienvenida; ?></h2>
            <p>Encuentra los mejores relojes para cada ocasión.</p>
        </div>
    </section>

    <section id="about">
        <div class="container">
            <h2>Sobre Nosotros</h2>
             <p>Time Royal es una empresa dedicada a ofrecer lo último en relojes modernos para todas las ocasiones.
                Nuestra colección incluye desde relojes tecnológicos y sofisticados hasta diseños vanguardistas y deportivos.
                Nuestro objetivo es brindar a nuestros clientes no solo un accesorio funcional, sino una declaración de
                estilo que refleje su personalidad y gusto refinado.
                Con una meticulosa atención al detalle y una selección cuidadosa de los mejores materiales y tecnologías.
                Únete a nosotros en nuestra búsqueda de la excelencia relojera y descubre el mundo emocionante de Time
                Royal.</p>
        </div>
    </section>

    <section id="products">
        <div class="container">
            <h2>Nuestros Productos</h2>
            <div class="product-grid">
                <div class="product-item">
                    <img src="img/SmartW.png" alt="Smart Band Mi Band 8 1.62">
                    <h3>Xiaomi</h3>
                    <p>Smart Band Mi Band 8 1.62 el estilo que va con vos.</p>
                    <form action="index.php" method="get">
                        <button type="submit" name="cart" value="added">Añadir al carrito</button>
                    </form>
                </div>
                <div class="product-item">
                    <img src="img/SmartW2.png" alt="Smartwatch Y1">
                    <h3>Smartwatch Y1</h3>
                    <p>Blanco perfecto para cualquier actividad física.</p>
                    <form action="index.php" method="get">
                        <button type="submit" name="cart" value="added">Añadir al carrito</button>
                    </form>
                </div>
                <div class="product-item">
                    <img src="img/SmartW3.png" alt="Reloj Elegante Minimalista">
                    <h3>Reloj Minimalista</h3>
                    <p>Malla Acero 9185 Resistente Al Agua.</p>
                    <form action="index.php" method="get">
                        <button type="submit" name="cart" value="added">Añadir al carrito</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="contacto">
        <div class="container">
            <h2>Contacto</h2>
            <div>
                <?php
                if (isset($_GET['ok'])) {
                    echo '<h3>Mensaje enviado con éxito</h3>';
                }
                ?>
                <form action="enviar_consulta.php" method="post">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" required>
                    
                    <label for="email">Correo electrónico</label>
                    <input type="email" name="email" id="email" required>
                    
                    <label for="mensaje">Mensaje</label>
                    <textarea name="mensaje" id="mensaje" required></textarea>
                    
                    <input type="submit" value="Enviar consulta">
                </form>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <h2>Contactanos para conocer y revender todos nuestros productos</h2>
            <p>Email: <?php echo $ContactoEmail; ?></p>
            <p>Teléfono: <?php echo $TelefonoContacto; ?></p>
            <p>Dirección: <?php echo $Localidad; ?></p>
            <p><?php echo $RedesSociales; ?></p>
            <p><?php echo $contactoMensaje; ?></p>
        </div>
    </section>

    <?php include_once 'footer.php'?>