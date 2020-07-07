<?php

$codigohtml = htmlspecialchars('<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,300&display=swap" rel="stylesheet"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alexander Duque G.</title>
</head>
<body>
    <!--Creamos nuestra parte del header-->
    <header>
        <div class="contenedor-header">
            <div class="texto-header">
                <h1>El hombre nunca sabe de lo que es capaz hasta que lo intenta.</h1>
            </div>
        </div>
    </header>
    <!--Creamos nuestra parte del main-->
    <main>
        <!--Creamos nuestro contenedor el cual sera flex-->
        <div class="contenedor-main">
            <div class="sesion1">
                <div class="imagen-main">
                    <img src="img/fotomia.jpeg" alt="">
                </div>
                <div class="texto-main">
                    <h1>Hola, Me llamo Alexander Duque.</h1>
                    <br>
                    <p>Gracias por visitar mi pagina! te contare un poco sobre mi. Soy un apasionado por la programación, amante de las líneas de código que busca expandir sus conocimientos día a día, Puedes ver mis proyectos, desde mi página Web o GitHub.</p>
                </div>
            </div>
            <div class="sesion2">
                <div class="codigo">
                    <textarea name="" id="" cols="30" rows="10"><?php echo $codigo;?>
                    </textarea>
                </div>
                <div class="explicacodigo">
                    <p>Codigo <samp class="Naranja">HTML,</samp><span class="Azul">CSS.</span> de esta Web</p>
                </div>
            </div>
            <div class="sesion3">
                <div class="proyecto1">
                    <div class="imgp1">
                        <a href=""><img src="img/p1img.jpg" alt=""></a>
                    </div>
                    <div class="txtp1">
                        <h3><samp class="Naranja">HTML 5</samp>,<span class="Azul"> CSS</span>.</h3>
                    </div>
                </div>
                <div class="proyecto2">
                    <div class="imgp1">
                        <a href=""><img src="img/p1img.jpg" alt=""></a>
                    </div>
                    <div class="txtp1">
                        <h3><samp class="Naranja">HTML 5</samp>,<span class="Azul"> CSS</span>, <span class="Amarillo"> JavaScript</span>.</h3>
                    </div>
                </div>
                <div class="proyecto3">
                    <div class="imgp1">
                        <a href=""><img src="img/p1img.jpg" alt=""></a>
                    </div>
                    <div class="txtp1">
                        <h3><samp class="Naranja">HTML 5</samp>,<span class="Azul"> CSS</span>,<span class="Morado"> PHP.</span></h3>
                    </div>
                </div>
                <div class="proyecto4">
                    <div class="imgp1">
                        <a href=""><img src="img/p1img.jpg" alt=""></a>
                    </div>
                    <div class="txtp1">
                        <h3><samp class="Naranja">HTML 5</samp>,<span class="Azul"> CSS</span>,<span class="Morado"> PHP.</span><span class="Amarillo"> JavaScript</span>.</h3>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="contenedor-footer">
            <div class="imagenesfooter">
                <div class="gi">
                    <a href="#"><img src="img/git.png" alt=""></a>
                </div>
                <div class="lin">
                    <a href="#"><img src="img/lin.png" alt=""></a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>');



?>




<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,300&display=swap" rel="stylesheet"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alexander Duque G.</title>
</head>
<body>
    <!--Creamos nuestra parte del header-->
    <header>
        <div class="contenedor-header">
            <div class="texto-header">
                <h1>El hombre nunca sabe de lo que es capaz hasta que lo intenta.</h1>
            </div>
        </div>
    </header>
    <!--Creamos nuestra parte del main-->
    <main>
        <!--Creamos nuestro contenedor el cual sera flex-->
        <div class="contenedor-main">
            <div class="sesion1">
                <div class="imagen-main">
                    <img src="img/fotomia.jpeg" alt="">
                </div>
                <div class="texto-main">
                    <h1>Hola, Me llamo Alexander Duque.</h1>
                    <br>
                    <p>Gracias por visitar mi pagina! te contare un poco sobre mi. Soy un apasionado por la programación, amante de las líneas de código que busca expandir sus conocimientos día a día, Puedes ver mis proyectos, desde mi página Web o GitHub.</p>
                </div>
            </div>
            <div class="sesion2">
                <div class="codigo">
                    <textarea name="" id="" cols="30" rows="10"><?php echo $codigohtml;?>
                        <?php echo "\n";?>
                        <?php echo "\n";?>
                        <?php echo "\n";?>
                        <?php echo "\n";?>
                        Codigo CSS:
                        <code>
<!--Visualizamos el codigo CSS--><!--Visualizamos el codigo CSS--><!--Visualizamos el codigo CSS-->                            
                        
/* Quitamos los margenes y padding que el navegador nos pone por defecto */

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Josefin Sans', sans-serif;
}


/* Hacemos las modificaciones pertinentes para el header*/

.contenedor-header{
    display: flex;
    width: 100%;
    height: 250px;
    background-image: url('../img/fondo.jpg');
    background-size: cover;
    background-attachment: fixed;
    justify-content: center;
    align-items: center;
}

.texto-header{
    width: 70%;
    border: dashed 1px #ffffff; 
    padding: 10px;
}

.texto-header h1{
    color: #ffffff;
    text-align: center;
}




/* Indicamos que el contenedor de los demas div tambiens era flex */
.sesion1{
    display: flex;
    width: 100%;
    height: auto;
}

.imagen-main{
    width: 50%;
    /*background: rosybrown;*/
    padding-top: 20px;
}

.imagen-main img{
    width: 70%;
    display: block;
    margin: auto;
    border-radius: 10px;
    margin-bottom: 10px;
}

.texto-main{
    width: 50%;
   /* background: skyblue; */
    padding: 40px 60px 10px 20px;
    text-align: left;
}

.texto-main h1{
    color: #009881;
}

.texto-main p{
    font-size: 20px;
}


/* Iniciamos la segunda 2 session */

.sesion2{
    display: flex;
    width: 100%;
    height: auto;
    background:#f7f7f7;
}

.codigo{
    width: 65%;
    margin: 10px;
}

.codigo textarea{
    width: 100%;
    max-width: 100%;
    max-height: 150px;
    min-width: 100%;
    min-height:150px;
}

.explicacodigo{
    width: 35%;
    padding: 17px;
}

.explicacodigo p{
    text-align: center;
    margin-top: 25px;
    font-size: 20px;
}

.explicacodigo  .Naranja{
    color: rgb(255, 145, 0);
}

.explicacodigo  .Azul{
    color: #33beff;
}


/* Iniciamos la tercera 3 session */

.sesion3{
    display: flex;
    width: 100%;
    height: auto;
    margin-top: 35px;
}

.proyecto1{
    width: 25%;
    height: 250px;
}

.proyecto2{
    width: 25%;
    height: 250px;
}

.proyecto3{
    width: 25%;
    height: 250px;
}

.proyecto4{
    width: 25%;
    height: 250px;
}

.imgp1{
    height: 80%;
}

.imgp1 img{
    width: 70%;
    display: block;
    margin: 0 auto;
    border-radius: 3%;
}

.txtp1{
    margin-top: 10px;
    text-align: center;
}

.txtp1 .Naranja{
    color: rgb(255, 145, 0);
}
.txtp1 .Azul{
    color: #33beff;
}
.txtp1 .Amarillo{
    color: #c0d510
}
.txtp1 .Morado{
    color: #6177fc;
}

/*Realizamos la parte del footer*/

footer{
    width: 100%;
    height: 60px;
    margin-top: 20px;
}

.contenedor-footer{
    display: flex;
    width: 100%;
    height: 100%;
    background-image: url('../img/fondo.jpg');
    background-size: cover;
    background-attachment: fixed;
    border-radius: 5px 5px 5px 5px;
    flex-wrap: wrap;
}


.imagenesfooter{
    width: 100%;
    height: 100%;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
}


.imagenesfooter img{
    width: 40px;
    height: 40px;
    max-width: 100%;
    max-width: 100%;
}

.gi{
    margin: 0 10px;
}

.lin{
    margin: 0 10px;
}

@media screen and (max-width:576px){

    .sesion2 .codigo{
        margin-left: 30px;
    }

    .contenedor-header{
        height: 100px;
        height: auto;
    }

    .texto-header{
        font-size: 26px;
        margin: 10px;
    }

    .texto-header h1{
        font-size: 26px;
    }

    .sesion1{
        flex-wrap: wrap;
    }

    .imagen-main{
        width: 100%;
        
    }
    
    .texto-main{
        width: 100%;
        
        text-align: center;
    }

    .texto-main p{
        font-size: 18px;
    }

/*Cambiamos el tamano de los proyectos*/
    
.sesion3{
    flex-wrap: wrap;
}    

.imgp1{
    height: 60%;
}

    .proyecto1,
    .proyecto2,
    .proyecto3,
    .proyecto4{
        width: 50%;
        height: 190px;
        
    }
<!--FIALIZA el codigo CSS--><!--FIANLIZA el codigo CSS--><!--FINALIZA el codigo CSS-->     
   

}</code>
                        
                        
                    </textarea>
                </div>
                <div class="explicacodigo">
                    <p>Codigo <samp class="Naranja">HTML,</samp><span class="Azul">CSS.</span> de esta Web</p>
                </div>
            </div>
            <div class="sesion3">
                <div class="proyecto1">
                    <div class="imgp1">
                        <a href=""><img src="img/p1img.jpg" alt=""></a>
                    </div>
                    <div class="txtp1">
                        <h3><samp class="Naranja">HTML 5</samp>,<span class="Azul"> CSS</span>.</h3>
                    </div>
                </div>
                <div class="proyecto2">
                    <div class="imgp1">
                        <a href=""><img src="img/p1img.jpg" alt=""></a>
                    </div>
                    <div class="txtp1">
                        <h3><samp class="Naranja">HTML 5</samp>,<span class="Azul"> CSS</span>, <span class="Amarillo"> JavaScript</span>.</h3>
                    </div>
                </div>
                <div class="proyecto3">
                    <div class="imgp1">
                        <a href=""><img src="img/p1img.jpg" alt=""></a>
                    </div>
                    <div class="txtp1">
                        <h3><samp class="Naranja">HTML 5</samp>,<span class="Azul"> CSS</span>,<span class="Morado"> PHP.</span></h3>
                    </div>
                </div>
                <div class="proyecto4">
                    <div class="imgp1">
                        <a href=""><img src="img/p1img.jpg" alt=""></a>
                    </div>
                    <div class="txtp1">
                        <h3><samp class="Naranja">HTML 5</samp>,<span class="Azul"> CSS</span>,<span class="Morado"> PHP.</span><span class="Amarillo"> JavaScript</span>.</h3>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="contenedor-footer">
            <div class="imagenesfooter">
                <div class="gi">
                    <a href="#"><img src="img/git.png" alt=""></a>
                </div>
                <div class="lin">
                    <a href="#"><img src="img/lin.png" alt=""></a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>