<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <nav>
            <!-- logo -->
            <div class="logo">
                <img src="logo.png">
            </div>
            <!-- botones de navegacion -->
            <ul>
                <li><a href="">Productos</a></li>
                <li><a href="">Soluciones</a></li>
                <li><a href="">Comunidad</a></li>
                <li><a href="">Herramientas</a></li>
                <li><a href="">Precios</a></li>
                <li><a href="">Contacto</a></li>
                <li><a href="">Enlace</a></li>
                <li><a href="login.html" id="sing_in">Inicio de Sesión</a></li>
                <li><a href="register.html" id="reg">Registro</a></li>
            </ul>
        </nav>

        <div class="container_2">
            <div class="boton favorito">
                <button class="button">Favoritos</button>
            </div>
            <div class="formularios">
                <div class="cli">
                    <form action="">
                        <h3>Clientes</h3>
                        <div class="cont_cli">
                            <div class="nom">
                                <label for="">Nombre</label>
                                <input type="text">
                            </div>
                            <div class="ci_button">
                                <div class="cuadro_ci">
                                    <label for="">CI</label>
                                </div>
                                <div class="button_ci">
                                    <input type="text">
                                    <button type="submit">Agregar</button>
                                    <button type="button">Borrar</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="pedidos">
                    <form action="">
                        <h3>Pedidos</h3>
                        <div class="contain_form">
                            <div class="cuadros">
                                <label for="pedidos">Productos</label>
                                <select name="pedidos" id="pedidos">
                                    <option value="pedido1">Pedido 1</option>
                                    <option value="pedido2">Pedido 2</option>
                                    <option value="pedido3">Pedido 3</option>
                                </select>
                                <label for="">Cantidad</label>
                                <input type="text">
                                <label for="">cliente</label>
                                <select name="" id="">
                                    <option value="cliente1">Cliente 1</option>
                                    <option value="cliente2">Cliente 2</option>
                                    <option value="cliente3">Cliente 3</option>
                                </select>
                            </div>
                            <div class="agre_ped">
                                <button class="button">Agregar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="last-reviews">
            <h2>Last Reviews</h2>
            <div class="reviews-container">
                <div class="review-box">
                    <div class="stars">
                        <?php
                        
                        for ($i = 0; $i < 5; $i++) {
                            echo "&#9733; "; // Estrella llena
                        }
                        
                        ?>
                    </div>
                    <h4>Cliente satisfecho</h4>
                    <p>Excelente servicio y atención.</p>
                    <div class="recuadro">
                        <div class="img_recua">
                            <img src="img.jpg">
                        </div>
                        <div class="usu_recua">
                            <h3>Usuario 1</h3>
                            <?php
                            echo date("d/m/Y");
                            ?>
                        </div>
                    </div>
                </div>
                <div class="review-box">
                    <div class="stars">
                        <?php
                        
                        for ($i = 0; $i < 5; $i++) {
                            echo "&#9733; "; // Estrella llena
                        }
                        
                        ?>                    
                </div>
                    <h4>Recomendado</h4>
                    <p>Productos de alta calidad.</p>
                    <div class="recuadro">
                        <div class="img_recua">
                            <img src="img.jpg">
                        </div>
                        <div class="usu_recua">
                            <h3>Usuario 2</h3>
                            <?php
                            echo date("d/m/Y");
                            ?>
                        </div>
                    </div>
                </div>
                <div class="review-box">
                    <div class="stars">
                    <?php
                        
                    for ($i = 0; $i < 5; $i++) {
                        echo "&#9733; "; // Estrella llena
                    }
                    
                    ?>
                    </div>
                    <h4>Buen servicio</h4>
                    <p>Entrega rápida y eficiente.</p>
                    <div class="recuadro">
                        <div class="img_recua">
                            <img src="img.jpg">
                        </div>
                        <div class="usu_recua">
                            <h3>Usuario 3</h3>
                            <?php
                            echo date("d/m/Y");
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="img_table">
            <div class="img_deco">
                <img src="imgs/camera.jpg">
            </div>
            <div class="tablas">
                <div class="boton">
                    <button>agregar</button>
                </div>
                <div class="table">
                    <table>
                        <thead>
                            <tr>
                                <th>Producto</th>
                                <th>Cantidad</th>
                                <th>Cliente</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            
                            for($i=0; $i< 3; $i++){
                                ?>
                                <tr>
                                    <td>Pedido <?php echo $i; ?></td>
                                    <td><?php echo rand(1, 100); ?></td>
                                    <td>Cliente <?php echo rand(min:1,max:10); ?></td>
                                    <td>
                                        <button type="button">Actualizar</button>
                                        <button type="button">Borrar</button>
                                    </td>
                                </tr>
                                <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="productos">
            <div class="texto">
                <h2>Productos</h2>
                <h4>Destalles de los productos</h4>
            </div>
            <?php

            $productos = [
                [
                    'nombre' => 'Café',
                    'descripcion' => 'Café molido premium, perfecto para tus mañanas. Empaque de 500g.',
                    'precio' => 4.20,
                    'imagen' => 'imgs/camera.jpg'
                ],
                [
                    'nombre' => 'Leche',
                    'descripcion' => 'Leche entera pasteurizada, fresca y nutritiva. Botella de 1L.',
                    'precio' => 1.80,
                    'imagen' => 'imgs/camera.jpg'
                ],
                [
                    'nombre' => 'Pan',
                    'descripcion' => 'Pan artesanal recién horneado, ideal para desayunos y meriendas.',
                    'precio' => 2.00,
                    'imagen' => 'imgs/camera.jpg'
                ]
            ];

            for ($i = 0; $i < count($productos); $i++) {
                ?>
                <div class="cuadro_pro">
                    <div class="img_pro">
                        <img src="<?php echo $productos[$i]['imagen']; ?>">
                    </div>
                    <div class="texto">
                        <h2><?php echo $productos[$i]['nombre']; ?></h2>
                        <p><?php echo $productos[$i]['descripcion']; ?></p>
                        <h3>$<?php echo number_format($productos[$i]['precio'], 2); ?></h3>
                        <button type="button">Agregar</button>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
    <footer>
        <div class="footer-row" style="display: flex; justify-content: space-between; background: #222; color: #fff; padding: 40px 20px;">
            <div class="footer-section" style="flex: 1; margin: 0 20px;">
                <h3>Sobre Nosotros</h3>
                <p>Somos una empresa dedicada a ofrecer productos y soluciones de calidad. Nuestro compromiso es la satisfacción del cliente.</p>
            </div>
            <div class="footer-section" style="flex: 1; margin: 0 20px;">
                <h3>Enlaces Rápidos</h3>
                <ul style="list-style: none; padding: 0;">
                    <li><a href="#" style="color: #fff;">Inicio</a></li>
                    <li><a href="#" style="color: #fff;">Productos</a></li>
                    <li><a href="#" style="color: #fff;">Contacto</a></li>
                    <li><a href="#" style="color: #fff;">Soporte</a></li>
                </ul>
            </div>
            <div class="footer-section" style="flex: 1; margin: 0 20px;">
                <h3>Contacto</h3>
                <p>Email: info@empresa.com</p>
                <p>Teléfono: +591 12345678</p>
                <div style="margin-top: 10px;">
                    <a href="#"><img src="imgs/facebook.png" alt="Facebook" style="width:24px; margin-right:8px;"></a>
                    <a href="#"><img src="imgs/twitter.png" alt="Twitter" style="width:24px; margin-right:8px;"></a>
                    <a href="#"><img src="imgs/instagram.png" alt="Instagram" style="width:24px;"></a>
                </div>
            </div>
            <div class="footer-section" style="flex: 1; margin: 0 20px;">
                <h3>Suscríbete</h3>
                <form>
                    <input type="email" placeholder="Tu correo" style="padding:8px; width:80%; margin-bottom:8px;">
                    <button type="submit" style="padding:8px 16px; background:#ff9800; color:#fff; border:none;">Enviar</button>
                </form>
            </div>
        </div>
        <div style="text-align:center; background:#111; color:#bbb; padding:10px 0; font-size:14px;">
            &copy; <?php echo date("Y"); ?> Empresa. Todos los derechos reservados.
        </div>
    </footer>
</body>
</html>