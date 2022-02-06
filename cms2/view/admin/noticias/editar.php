<h3>
    <a href="<?php echo $_SESSION['home'] ?>admin" title="Inicio">Inicio</a> <span>| </span>
    <a href="<?php echo $_SESSION['home'] ?>admin/noticias" title="Noticias">Noticias</a> <span>| </span>
    <?php if ($datos->id){ ?>
        <span>Editar <?php echo $datos->equipo ?></span>
    <?php } else { ?>
        <span>Nueva noticia</span>
    <?php } ?>
</h3>
<div class="row">
    <?php $id = ($datos->id) ? $datos->id : "nuevo" ?>
    <form class="col s12" method="POST" enctype="multipart/form-data" action="<?php echo $_SESSION['home'] ?>admin/noticias/editar/<?php echo $id ?>">
        <div class="col m12 l6">
            <div class="row">
                <div class="input-field col s12">
                    <input id="equipo" type="text" name="equipo" value="<?php echo $datos->equipo ?>">
                    <label for="equipo">Título</label>
                </div>
                <div class="input-field col s12">
                    <input id="entrenador" type="text" name="entrenador" value="<?php echo $datos->entrenador ?>">
                    <label for="entrenador">Entrenador</label>
                </div>
                <div class="input-field col s12">
                    <?php $fundacion = ($datos->fundacion) ? date("d-m-Y", strtotime($datos->fundacion)) : date("d-m-Y") ?>
                    <input id="fundacion" type="text" name="fundacion" class="datepicker" value="<?php echo $fundacion ?>">
                    <label for="fundacion">Fundacion</label>
                </div>
            </div>
        </div>
        <div class="col m12 l6 center-align">
            <div class="file-field input-field">
                <div class="btn">
                    <span>Imagen</span>
                    <input type="file" name="imagen">
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text">
                </div>
            </div>
            <?php if ($datos->imagen){ ?>
                <img src="<?php echo $_SESSION['public']."img/".$datos->imagen ?>" alt="<?php echo $datos->equipo ?>">
            <?php } ?>
        </div>
        <div class="col s12">
            <div class="row">
                <div class="input-field col s12">
                    <textarea id="entradilla" class="materialize-textarea" name="entradilla"><?php echo $datos->entradilla ?></textarea>
                    <label for="entradilla">Entradilla</label>
                </div>
                <div class="input-field col s12">
                    <textarea id="texto" class="materialize-textarea" name="texto"><?php echo $datos->texto ?></textarea>
                    <label for="texto">Texto</label>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                <a href="<?php echo $_SESSION['home'] ?>admin/noticias" title="Volver">
                    <button class="btn waves-effect waves-light" type="button">Volver
                        <i class="material-icons right">replay</i>
                    </button>
                </a>
                <button class="btn waves-effect waves-light" type="submit" name="guardar">Guardar
                    <i class="material-icons right">save</i>
                </button>
            </div>
        </div>
    </form>
</div>
