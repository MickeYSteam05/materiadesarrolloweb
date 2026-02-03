function probarConexion() {
  console.log("Función probarConexion llamada"); // Confirmar que entra

  fetch("conexion.php")
    .then(response => {
      console.log("Respuesta recibida:", response); // Ver qué llega
      if (!response.ok) {
        throw new Error("Error HTTP: " + response.status);
      }
      return response.text();
    })
    .then(data => {
      console.log("Datos recibidos:", data); // Ver contenido
      document.getElementById("resultado").innerHTML = data;
    })
    .catch(error => {
      document.getElementById("resultado").innerHTML = "Error: " + error;
      console.error("Error:", error);
    });
}

document.addEventListener("DOMContentLoaded", () => {
  const boton = document.getElementById("botonConexion");
  if (boton) {
    boton.addEventListener("click", probarConexion);
    console.log("Evento enganchado correctamente");
  }
});
