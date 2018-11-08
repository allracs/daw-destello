<?php
    include("include/cabecera.inc");
    include("include/header.inc");
    include("include/nav.inc");
?>
<style>
    <?php include 'CSS/main_indexANDdetalle_foto.css';?>
</style>
<main>
    <?php
        /*if ($err_ini != "bien") {
            echo $err_ini;
        }*/
        if(isset($_GET["err_ini"])){
            echo '<p style="color:red">Error: inicio sesion incorrecto</p>';
        }
    ?>
    <h1>Fotos, fotos y mas fotos</h1>
    <div class="container_posting">
        <div class="p_box">
            <label class="title">Búho</label>
            <span> - </span>
            <label class="ubicacion">Bosque</label>
            <br>
            <figure>
                <a href="detalle_foto.php?titulo=Buho&img=img/buho.jpg&alt=Buho&fecha=01/10/2018&pais=Bosque&usuario=Harry Potter">
                    <img src="img/buho.jpg" alt="[foto_not_found]">
                </a>
            </figure>
            <span class="icon-heart-empty"></span>
            <span class="icon-comment-empty"></span>
            <label>Harry Potter</label>
            <time datetime="2018-10-01">01/10/2018</time>
        </div>

        <div class="p_box">
            <label class="title">cocodrilo</label>
            <span> - </span>
            <label class="ubicacion">Bosque</label>
            <br>
            <figure>
                <a href="detalle_foto.php?titulo=Cocodrilo&img=img/cocodrilo.jpg&alt=Cocodrilo&fecha=01/10/2018&pais=Bosque&usuario=Harry Potter">
                    <img src="img/cocodrilo.jpg" alt="[foto_not_found]">
                </a>
            </figure>
            <span class="icon-heart-empty"></span>
            <span class="icon-comment-empty"></span>
            <label>Harry Potter</label>
            <time datetime="2018-10-01">01/10/2018</time>
        </div>

        <div class="p_box">
            <label class="title">elefante</label>
            <span> - </span>
            <label class="ubicacion">Bosque</label>
            <br>
            <figure>
                <a href="detalle_foto.php?titulo=elefante&img=img/elefante.jpg&alt=elefante&fecha=01/10/2018&pais=Bosque&usuario=Harry Potter">
                    <img src="img/elefante.jpg" alt="[foto_not_found]">
                </a>
            </figure>
            <span class="icon-heart-empty"></span>
            <span class="icon-comment-empty"></span>
            <label>Harry Potter</label>
            <time datetime="2018-10-01">01/10/2018</time>
        </div>

        <div class="p_box">
            <label class="title">leon</label>
            <span> - </span>
            <label class="ubicacion">Bosque</label>
            <br>
            <figure>
                <a href="detalle_foto.php?titulo=leon&img=img/leon.jpg&alt=leon&fecha=01/10/2018&pais=Bosque&usuario=Harry Potter">
                    <img src="img/leon.jpg" alt="[foto_not_found]">
                </a>
            </figure>
            <span class="icon-heart-empty"></span>
            <span class="icon-comment-empty"></span>
            <label>Harry Potter</label>
            <time datetime="2018-10-01">01/10/2018</time>
        </div>

        <div class="p_box">
            <label class="title">pantera</label>
            <span> - </span>
            <label class="ubicacion">Bosque</label>
            <br>
            <figure>
                <a href="detalle_foto.php?titulo=pantera&img=img/pantera.jpg&alt=pantera&fecha=01/10/2018&pais=Bosque&usuario=Harry Potter">
                    <img src="img/pantera.jpg" alt="[foto_not_found]">
                </a>
            </figure>
            <span class="icon-heart-empty"></span>
            <span class="icon-comment-empty"></span>
            <label>Harry Potter</label>
            <time datetime="2018-10-01">01/10/2018</time>
        </div>
    </div>
</main>
<?php
    require_once("include/fin.inc");
?>