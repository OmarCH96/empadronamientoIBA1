<div class="main">
    <div class="main__container">
        <div class="main__registro bg-light">
            <div class="main__leyenda">
                <p class="main__leyenda--p"> <strong> El empadronamiento a mascotas es un certificado que debe actualizarce cada año.</strong></p>
            </div>
            <form class="form" action="<?php echo base_url('registro/insertar') ?>" method="$_POST">
                <div class="form__div">
                    <h4 class="form__h4">Datos de la mascota</h4>
                </div>
                <div class="form__inputs">
                    <div class="form__input">
                        <label class="form__label" for="">Nombre</label>
                        <input class="form__text form__input--nombre"  type="text">
                    </div>
                    <div class="form__input">
                        <label class="form__label" for="">Edad</label>
                        <input class="form__text form__input--nombre"  type="number">
                    </div>
                    <div class="form__input">
                        <label class="form__label" for="">Especie</label>
                        <select class="form__text" name="" id="">
                            <option  value="">Perro</option>
                            <option value="">Gato</option>
                        </select>
                    </div>
                    <div class="form__input">
                        <label class="form__label" for="">Sexo</label>
                        <select class="form__text" name="" id="">
                            <option  value="">Macho</option>
                            <option value="">Hembra</option>
                        </select>
                    </div>
                    <div class="form__input">
                        <label class="form__label" for="">Vacunado</label>
                        <select class="form__text" name="" id="">
                            <option  value="">Si</option>
                            <option value="">No</option>
                        </select>
                    </div>
                    <div class="form__input">
                        <label class="form__label" for="">Esterilizado</label>
                        <select class="form__text" name="" id="">
                            <option  value="">Si</option>
                            <option value="">No</option>
                        </select>
                    </div>
                    <div class="form__input">
                        <label class="form__label" for="">Señas particulares</label>
                        <input class="form__text form__input--nombre"  type="text">
                    </div>
                    <div class="form__input">
                        <label class="form__label" for="">Raza</label>
                        <input class="form__text form__input--nombre"  type="text"pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}">
                    </div>
                    <div class="form__input">
                        <label class="form__label" for="">Color</label>
                        <input class="form__text form__input--nombre"  type="text">
                    </div>
                </div>
                <button type="submit" id="registrar"  class="btn btn-primary text-center form__submit" >Registrar</button>
            </form>
        </div>
    </div>
</div>