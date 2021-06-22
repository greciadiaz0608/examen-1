<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="CSS/estilos.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
        <title>Portafolio Grecia</title>
    </head>

    <body>
        <div id="sidemenu" class="menu-collapsed">
            <!-- header -->
            <div id="header">
                <div id="title"><span>Portafolio</span></div>
                <div id="menu-btn">
                    <div class="btn-hamburger"></div>
                    <div class="btn-hamburger"></div>
                    <div class="btn-hamburger"></div>
                </div>
            </div>
            <!-- profile -->
            <div id="profile">
                <div id="photo"><img src="IMG/Fotodeperfil.jpeg" alt="Foto de perfil"></div>
                <div id="name"><span>Grecia Najera</span></div>
            </div>
            <!-- items -->
            <div id="menu-items">
                <div class="item">
                    <a href="index.html">
                        <div class="icon"><img src="IMG/house.png" alt="Inicio"></div>
                        <div class="title">Inicio</div>
                    </a>
                    <div class="item-separator"></div>
                    <a href="acercaDe.html">
                        <div class="icon"><img src="IMG/acercade.png" alt="Acerca de"></div>
                        <div class="title">Acerca de</div>
                    </a>
                </div>
            </div>
        </div>
        <script>
            const btn = document.querySelector('#menu-btn');
            const menu = document.querySelector('#sidemenu');
            btn.addEventListener('click', e =>{
                menu.classList.toggle("menu-expanded");
                menu.classList.toggle("menu-collapsed");

                document.querySelector('body').classList.toggle('body-expanded');
            });
        </script>
        <div align="center">
            <h2 align="center" class="animated zoomInDown" id="titleC">Contactame</h1>

            <form align="center" method="POST">

                <input type="text" placeholder="Nombre" name="name" require="">
                <input type="text" placeholder="Email" name="email" require="">
                <input type="text" placeholder="Asunto" name="asunto" require="">
                <textarea placeholder="Escriba su mensaje" name="msg"></textarea>
                <input type="submit" name="enviar">

            </form>

            <?php
            ?>

        </div>
        <div align="center">

            <br>
            <a id="face" target="_blank" href="https://www.facebook.com/grecia.diz.6">Ir al perfil de facebook</a>
            
            <a id="insta" target="_blank" href="https://www.instagram.com/igreciadiaz/">Ir a perfil de Instagram</a>
        </div>

        <footer>

            <div class="container-footer-all">
     
                 <div class="container-body">
     
                     <div class="colum1">
                         <h1>Mas informacion de sobre mi</h1>
     
                         <p>Soy una persona muy apasionada por la transformación digital de manera innovadora , evolucionando la digitalización de los procesos, automatización, optimización y eficiencia. Lo que la tecnología transforma de manera radical es la experiencia de uso.</p>
     
                     </div>
     
                     <div class="colum2">
     
                         <h1>Redes Sociales</h1>
     
                         <div class="row">
                             <a href="https://www.facebook.com/grecia.diz.6/" target="_BLANK"><img src="IMG/facebook.png"></a>
                             <label>S&iacute;gueme en Facebook</label>
                         </div>
                         <div class="row">
                             <a href="https://twitter.com/GreciaDiaz06" target="_BLANK"><img src="IMG/twitter.png"></a>
                             <label>S&iacute;gueme en Twitter</label>
                         </div>
                         <div class="row">
                             <a href="https://www.instagram.com/igreciadiaz/" target="_BLANK"><img src="IMG/instagram.png"></a>
                             <label>S&iacute;gueme en Instagram</label>
                         </div>
                         <div class="row">
                             <a href=""target="_BLANK"><img src="IMG/google-plus.png"></a>
                             <label>S&iacute;gueme en Google Plus</label>
                         </div>
                         <div class="row">
                             <a href="https://www.pinterest.com/victoriagrecia/_saved/%22target=%22_BLANK%22%3E<img src="IMG/pinterest.png"></a>
                             <label>S&iacute;gueme en Pinteres</label>
                         </div>
     
                     </div>
     
                     <div class="colum3">
     
                         <h1>Informaci&oacute;n Contactos</h1>
     
                         <div class="row2">
                             <img src="IMG/house.png">
                             <label>Cartago, Costa Rica Taras San Nicolas</label>
                         </div>
     
                         <div class="row2">
                             <img src="IMG/smartphone.png">
                             <label>+506-71885340</label>
                         </div>
     
                         <div class="row2">
                             <img src="IMG/contact.png">
                              <label>victoriagrecia0608@gmail.com</label>
                         </div>
     
                     </div>
     
                 </div>
     
             </div>
     
             <div class="container-footer">
                    <div class="footer">
                         <div class="copyright">
                             © 2021 Todos los Derechos Reservados | <a href="">Grecia Najera Diaz</a>
                         </div>
     
                         <div class="information">
                             <a href="">Informaci&oacute;n Personal</a> | <a href="">Privacion y Politica</a> | <a href="">Terminos y Condiciones</a>
                         </div>
                     </div>
     
                 </div>
     
         </footer>
        
    </body>
</html>   