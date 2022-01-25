


























<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/4d2f18a60d.js" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link rel="stylesheet" href="../assets/css/style-contact-nosotros.css">
    <link rel="shortcut icon" href="../assets/img/logo-ra.svg">
    <title>Contactanos</title>
</head>
<body>

            
<section class="contact">

            <div class="header-contact">
                
                <a href="../inicio.php" class="nav__log" > <i class='bx bxs-chevron-left-circle bx-contact'> <span class="return">Regresar</span></i></a>
                <a href="../inicio.php" class="nav__log" > <img class="contact-img"src="../assets/img/logo-ra.svg" alt=""></a>
            </div>
            
    <div class="content">
        <h2>Contáctanos</h2>
        <p>¡Somos tu mejor elección en educación, contamos con docentes altamente capacitados para garantizar la educación de nuestros alumnos!</p>
    </div>

    <div class="container">
        <div class="contactInfo">


            <div class="box">
                <div class="icon">
                <i class="fas fa-map-marker-alt"></i>                
                </div>

                <div class="text">
                    <h3>Dirección</h3>
                   
                    <p>Asoc. Sta. Rosa <br> Mz A Lt 03-06<br> Lima - Santa Rosa </p>
                </div>
            </div>






            <div class="box">
                <div class="icon">
                <i class="fas fa-map-marker-alt"></i>                
                </div>
                <div class="text">
                    <h3>Teléfono</h3>
                    <p>+51 993409418<br> +51 978234850<br> +51 990927298 </p>
                </div>
            </div>




            <div class="box">
                <div class="icon">
                    <i class="fas fa-envelope"></i>
                </div>
                <div class="text">
                        <h3>Email</h3>
                        <p> consultas@rosadeamerica.com <br>iep.rosadeamerica.sr@gmail.com <br> rosadeamerica.edu.lider@hotmail.com <br></p>
                    </div>
            </div>





        </div>

        <div class="contactForm">

            <form action="enviar-correo.php" method="POST">
                <h2>Enviar Mensaje</h2>
                <div class="inputBox">
                    <input type="text" name="nombre-apoderado"  required="required">
                    <span>Apoderado (Nombre completo)</span>
                </div>

                <div class="inputBox">
                    <input type="text" name="nombre-alumno"  required="required">
                    <span>Alumno (Nombre completo)</span>
                </div>

                <div class="inputBox">
                    <input type="email" name="email" required="required">
                    <span>Email</span>
                </div>

                <div class="inputBox">
                    <input type="number"  name="celular" required="required">
                    <span>Número telefónico</span>
                </div>

                <div class="inputBox">
                    <textarea required="required" name="consulta"></textarea>
                    <span>Escribe tu consulta</span>
                </div>

               

                <div class="select-grado">
                    <input type="checkbox" name="checkbox-inicial" id="checkbox1" value="inicial">
                    <label for="checkbox1">Inicial</label>

                    <input type="checkbox" name="checkbox-primaria" id="checkbox2" value="primaria">
                    <label for="checkbox2">Primaria</label>


                    <input type="checkbox" name="checkbox-secundaria" id="checkbox3" value="secundaria">
                    <label for="checkbox3">Secundaria</label>
                </div>





                <div class="inputBox">
                    <input type="submit" name="" value="enviar">
                   
                </div>


            </form>
        </div>



    </div>


</section>
    






























<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
        <script src="https://unpkg.com/scrollreveal"></script>
        <script src="../assets/js/main.js"></script>
</body>
</html>