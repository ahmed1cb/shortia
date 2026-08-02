const toggleButton = document.getElementById("toggle-btn");
const modeIcon = toggleButton.querySelector("img");
let mode = localStorage.mode;

if (!mode) {
  localStorage.setItem("mode", "light");
  mode = "light";
}

if (mode == "dark") {
  document.body.classList.add("dark");
}

modeIcon.src = mode == "light" ? "src/icons/moon.svg" : "src/icons/sun.svg";
toggleButton.onclick = () => {
  mode = mode == "dark" ? "light" : "dark";
  modeIcon.src = mode == "light" ? "src/icons/moon.svg" : "src/icons/sun.svg";
  localStorage.setItem("mode", mode);
  document.body.classList.toggle("dark");
};
