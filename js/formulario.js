const formulario = document.getElementById('formulario');
const inputs = document.querySelectorAll('#formulario input');
const expresiones = {
    nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/,
    apellido: /^[a-zA-ZÀ-ÿ\s]{1,40}$/,
    tipoDocumento: /^[a-zA-ZÀ-ÿ\s]{1,40}$/,
    documento: /^\d{7,14}$/,
    correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
    telefono: /^\d{7,14}$/,
    eps: /^[a-zA-ZÀ-ÿ\s]{1,40}$/,
    servicio: /^[a-zA-ZÀ-ÿ\s]{1,40}$/,
};

const campos = {
    nombre: false,
    apellido: false,
    tipoDocumento: false,
    documento: false,
    correo: false,
    telefono: false,
    eps: false,
    servicio: false,
    terminos: false,
};

const validarCampo = (expresion, input, campo) => {
    const grupo = document.getElementById(`grupo__${campo}`);
    const errorElement = grupo.querySelector('.formulario__input-error');
    const valorInput = input.value.trim();

    if (valorInput === '') {
        grupo.classList.add('formulario__grupo-incorrecto');
        grupo.classList.remove('formulario__grupo-correcto');
        errorElement.classList.add('formulario__input-error-activo');
        campos[campo] = false;
    } else {
        if (expresion.test(valorInput)) {
            grupo.classList.remove('formulario__grupo-incorrecto');
            grupo.classList.add('formulario__grupo-correcto');
            errorElement.classList.remove('formulario__input-error-activo');
            campos[campo] = true;
        } else {
            grupo.classList.add('formulario__grupo-incorrecto');
            grupo.classList.remove('formulario__grupo-correcto');
            errorElement.classList.add('formulario__input-error-activo');
            campos[campo] = false;
        }
    }
};

inputs.forEach((input) => {
    input.addEventListener('keyup', validarFormulario);
    input.addEventListener('blur', validarFormulario);
});

function validarFormulario() {
    for (const campo in campos) {
        if (campos.hasOwnProperty(campo)) {
            if (!campos[campo]) {
                document.getElementById('formulario__mensaje').classList.remove('formulario__mensaje-exito');
                document.getElementById('formulario__mensaje').classList.add('formulario__mensaje-activo');
                return;
            }
        }
    }

    document.getElementById('formulario__mensaje').classList.remove('formulario__mensaje-activo');
}

formulario.addEventListener('submit', (e) => {
    e.preventDefault();
    const terminos = document.getElementById('terminos');
    if (terminos.checked) {
        document.getElementById('formulario__mensaje').classList.remove('formulario__mensaje-activo');
        document.getElementById('formulario__mensaje').classList.add('formulario__mensaje-exito');
        alert('Formulario enviado con éxito');
        formulario.reset();
    } else {
        document.getElementById('formulario__mensaje').classList.remove('formulario__mensaje-exito');
        document.getElementById('formulario__mensaje').classList.add('formulario__mensaje-activo');
    }
});
