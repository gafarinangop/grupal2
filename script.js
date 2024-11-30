const esEstudiante = confirm("¿Eres estudiante?");
if (esEstudiante) {
    let nombre = prompt("Ingresa tu nombre:");
    let apellido = prompt("Ingresa tu apellido:");
    let edad = parseInt(prompt("Ingresa tu edad:"));
    let correo = prompt("Ingrese su correo electrónico:");
    let telefono = prompt("Ingrese su número de teléfono:");
    let genero = prompt("¿Cuál es tu género? (Masculino/Femenino/Otro):");
    let direccion = prompt("Ingrese su dirección:");
    let institucion = prompt("Ingrese el nombre de su institución:");
    let nivel = parseInt(prompt("Ingrese su nivel educativo (Opciones: 1.Secundaria, 2.Pregrado, 3.Posgrado, 4.Otro): "));
    let interes = prompt("Áreas de interés: Matemáticas, Ciencias, Arte, Tecnología, etc.");
    let experiencia = prompt("¿Tienes experiencia en el área? (Sí/No):");
    let formato = prompt("¿Prefieres curso en formato (1. Online, 2. Presencial, 3. Mixto):");
    let fecha = new Date().toLocaleDateString();
    let comentarios = prompt("Comentarios adicionales:");


    document.getElementById("nombre").textContent = nombre + " " + apellido;
    document.getElementById("edad").textContent = edad + " años";
    document.getElementById("correo").textContent = correo;
    document.getElementById("telefono").textContent = telefono;
    document.getElementById("genero").textContent = genero;
    document.getElementById("direccion").textContent = direccion;
    document.getElementById("insti").textContent = institucion;

    let mensajeNivel;
    switch (nivel) {
        case 1:
            mensajeNivel = "Secundaria";
            break;
        case 2:
            mensajeNivel = "Pregrado";
            break;
        case 3:
            mensajeNivel = "Posgrado";
            break;
        default:
            mensajeNivel = "Otro";
    }
    document.getElementById("nivel").textContent = mensajeNivel;

    document.getElementById("interes").textContent = interes;
    document.getElementById("experiencia").textContent = experiencia;

    let mensajeFormato = formato == 1 ? "Online" : formato == 2 ? "Presencial" : "Mixto";
    document.getElementById("formato").textContent = mensajeFormato;

    document.getElementById("fecha").textContent = fecha;
    document.getElementById("comentarios").textContent = comentarios;
} else {
    console.warn("Debe ser estudiante para registrar el formulario");
}
