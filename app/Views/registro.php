<div class="main">
    <div class="main__container">
        <div class="main__registro bg-light">
            <div class="main__leyenda">
                <p clas="main__leyenda--p"><strong><em>"Los datos personales recabados serán protegidos, incorporados y tratados de conformidad con lo establecido en la: <br>LEY DE PROTECCIÓN DE DATOS PERSONALES DEL ESTADO DE PUEBLA."</strong></em><br />
                </p>
                <p class="main__leyenda--p"> <strong> El empadronamiento a mascotas es un certificado que debe actualizarce cada año.</strong></p>
            </div>
            <form class="form" action="<?php echo base_url('registro/insertar') ?>" method="$_POST">
                <div class="form__div">
                    <h4 class="form__h4">Datos de la persona responsable</h4>
                </div>
                <div class="form__inputs">
                    <div class="form__input">
                        <label class="form__label" for="">Nombre</label>
                        <input class="form__text form__input--nombre"  type="text">
                        <input type="file" name="" id="" class="form__file">
                    </div>
                    <div class="form__input">
                        <label class="form__label" for="">Dirección</label>
                        <input class="form__text form__input--nombre"  type="text">
                        <input type="file" name="" id="" class="form__file">
                    </div>
                    <div class="form__input">
                        <label class="form__label" for="">CURP</label>
                        <input class="form__text form__input--nombre"  type="text">
                        <input type="file" name="" id="" class="form__file">
                    </div>
                    <div class="form__input">
                        <label class="form__label" for="">N° Identificacion</label>
                        <input class="form__text form__input--nombre"  type="text">
                        <input type="file" name="" id="" class="form__file">
                    </div>
                    <div class="form__input">
                        <label class="form__label" for="">Telefono</label>
                        <input class="form__text form__input--nombre"  type="tel"pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}">
                    </div>
                    <div class="form__input">
                        <label class="form__label" for="">Correo</label>
                        <input class="form__text form__input--nombre"  type="email">
                    </div>
                    <div class="form__input">
                        <label class="form__label" for="">Contraseña</label>
                        <input class="form__text form__input--nombre"  type="password" placeholder="Ingrese su contraseña">
                    </div>
                    <div class="form__input">
                        <label class="form__label" for="">Confirme su contraseña</label>
                        <input class="form__text form__input--nombre"  type="password" placeholder="Confirme su contraseña">
                    </div>
                </div>
                <button type="submit" id="registrar"  class="btn btn-primary text-center form__submit" >Registrar</button>
            </form>
        </div>
    </div>
</div>
    
