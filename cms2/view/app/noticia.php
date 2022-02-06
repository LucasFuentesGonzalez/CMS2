<h3>
    <a href="<?php echo $_SESSION['home'] ?>" title="Inicio">Inicio</a> <span>| </span>
    <a href="<?php echo $_SESSION['home'] ?>noticias" title="Noticias">Noticias</a> <span>| </span>
    <span><?php echo $datos->equipo ?></span>
</h3>
<div class="row">
    <article class="col s12">
        <div class="card horizontal large noticia">
            <div class="card-image">
                <img src="<?php echo $_SESSION['public']."img/".$datos->imagen ?>" alt="<?php echo $datos->equipo ?>">
            </div>
            <div class="card-stacked">
                <div class="card-content">
                    <h4><?php echo $datos->equipo ?></h4>
                    <p><?php echo $datos->entradilla ?></p>
                    <p><?php echo $datos->texto ?></p>
                    <br>
                    <p>
                        <strong>Fundacion</strong>: <?php echo date("d/m/Y", strtotime($datos->fundacion)) ?><br>
                        <strong>Entrenador</strong>: <?php echo $datos->entrenador ?>
                    </p>
                </div>
            </div>
        </div>
    </article>
</div>
