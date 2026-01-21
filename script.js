// script.js
function darBienvenida() {
  alert("Bienvenido al curso de Desarrollo Web");
}

function incrementarProgreso10() 
{ const progress = document.getElementById("tarea");
  const percent = document.getElementById("percent"); // Aumenta en 10, pero sin pasar del máximo 
    if (progress.value + 10 <= progress.max) 
       {progress.value += 10;
       } else { 
        progress.value = 0; // se queda en 100 
    } 
  // Actualiza el texto del porcentaje 
  percent.textContent = progress.value + "%"; 
  }



  // Para horoscopos



  document.getElementById("btnm1").addEventListener("click", increaseProgress);
