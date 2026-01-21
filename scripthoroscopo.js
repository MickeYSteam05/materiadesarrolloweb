// Lista de imágenes y textos
const items = [
  { img: "imagenes/imgZodiaco1.png", text: "Texto 1" },
  { img: "imagenes/imgZodiaco2.png", text: "Texto 2" },
  { img: "imagenes/imgZodiaco3.png", text: "Texto 3" },
  { img: "imagenes/imgZodiaco4.png", text: "Texto 4" },
  { img: "imagenes/imgZodiaco5.png", text: "Texto 5" },
  { img: "imagenes/imgZodiaco6.png", text: "Texto 6" },
  { img: "imagenes/imgZodiaco7.png", text: "Texto 7" },
  { img: "imagenes/imgZodiaco8.png", text: "Texto 8" },
  { img: "imagenes/imgZodiaco9.png", text: "Texto 9" },
  { img: "imagenes/imgZodiaco10.png", text: "Texto 10" },
  { img: "imagenes/imgZodiaco11.png", text: "Texto 11" },
  { img: "imagenes/imgZodiaco12.png", text: "Texto 12" }
];

let index = 0; // posición inicial

const image = document.getElementById("image");
const text = document.getElementById("text");
const progress = document.getElementById("progress");
const progressText = document.getElementById("progressText");

document.getElementById("next").addEventListener("click", () => {
  if (index < items.length - 1) {
    index++;
    updateContent();
  }
});

document.getElementById("prev").addEventListener("click", () => {
  if (index > 0) {
    index--;
    updateContent();
  }
});

function updateContent() {
  image.src = items[index].img;
  text.textContent = items[index].text;
  progress.value = index + 1;
  progressText.textContent = `${index + 1} / ${items.length}`;
}

// Inicializa
updateContent();
