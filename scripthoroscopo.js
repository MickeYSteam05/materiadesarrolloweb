// Lista de imágenes y textos
const items = [
  { img: "imagenes/imgZodiaco1.png", text: "ARIES: Impulsivo, valiente y competitivo. Ama los retos, la acción y liderar. Energía intensa, entusiasmo contagioso y espíritu pionero que busca abrir caminos nuevos constantemente." }, // ARIES
  { img: "imagenes/imgZodiaco2.png", text: "TAURO: Práctico, paciente y amante de la estabilidad. Disfruta lo material, la comodidad y los placeres sensoriales. Perseverante, confiable y con gran fuerza de voluntad para alcanzar sus metas." }, // TAURO
  { img: "imagenes/imgZodiaco3.png", text: "GEMINIS: Curioso, versátil y comunicador nato. Cambia rápido de intereses, disfruta aprender y compartir ideas. Sociable, ingenioso y adaptable, siempre en movimiento entre pensamientos y experiencias diversas." }, // GEMINIS
  { img: "imagenes/imgZodiaco4.png", text: "CANCER: Emocional, protector y sensible. Valora la familia, el hogar y la seguridad emocional. Intuitivo y empático, con gran capacidad de cuidar y conectar profundamente con los demás." }, // CANCER
  { img: "imagenes/imgZodiaco5.png", text: "LEO: Carismático, creativo y orgulloso. Ama brillar, ser reconocido y expresar su talento. Generoso y apasionado, busca liderar con confianza y dejar huella en todo lo que hace." }, // LEO
  { img: "imagenes/imgZodiaco6.png", text: "VIRGO: Analítico, detallista y perfeccionista. Ama la organización, la lógica y la eficiencia. Práctico y servicial, siempre dispuesto a mejorar procesos y ayudar con soluciones claras y precisas." }, // VIRGO
  { img: "imagenes/imgZodiaco7.png", text: "LIBRA: Diplomático, encantador y amante del equilibrio. Busca justicia, armonía y belleza en todo. Sociable y cooperativo, evita conflictos y se esfuerza por mantener relaciones justas y agradables." }, // LIBRA
  { img: "imagenes/imgZodiaco8.png", text: "ESCORPIO: Intenso, misterioso y apasionado. Profundo en emociones, busca transformación y verdad. Determinado y magnético, con gran fuerza interior y capacidad de regenerarse tras cualquier desafío." }, // ESCORPIO
  { img: "imagenes/imgZodiaco9.png", text: "SAGITARIO: Optimista, aventurero y amante de la libertad. Busca conocimiento, viajes y experiencias nuevas. Directo y filosófico, siempre en expansión, con entusiasmo por descubrir el mundo y sus posibilidades." }, // Sagitario
  { img: "imagenes/imgZodiaco10.png", text:"CAPRICORNIO: Ambicioso, disciplinado y perseverante. Ama la estructura, la responsabilidad y alcanzar metas a largo plazo. Práctico y serio, con gran capacidad de trabajo y enfoque en el éxito."},// CAPRICORNIO
  { img: "imagenes/imgZodiaco11.png", text:"ACUARIO: Original, independiente y visionario. Ama la innovación, las ideas progresistas y la libertad personal. Humanitario y rebelde, busca transformar el mundo con creatividad y pensamiento diferente."},// ACUARIO
  { img: "imagenes/imgZodiaco12.png", text:"PISCIS: Soñador, compasivo y espiritual. Con gran imaginación y sensibilidad, conecta con lo intangible. Empático y artístico, busca ayudar, inspirar y vivir en mundos llenos de emociones profundas."} // PISCIS
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
