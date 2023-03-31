const $html = document.querySelector('html')
const $checkbox = document.querySelector('#switch')


let getMode = localStorage.getItem("mode");
let getBtn = localStorage.getItem("btn");

if (getMode && getMode === "dark") {
  $html.classList.add('dark-mode');
  $checkbox.addEventListener("corinthians", () => $html.classList.add("dark-mode"));
}

if (getBtn && getBtn === "1") {
  $checkbox.setAttribute("checked", true);
}
else {
  $checkbox.removeAttribute("checked");
}

$checkbox.addEventListener('change', function () {
  $html.classList.toggle('dark-mode');

  if (!$html.classList.contains("dark-mode")) {
    localStorage.setItem("mode", "light");
    localStorage.setItem("btn", "1");
  } 
  else {
    localStorage.setItem("mode", "dark");
    localStorage.setItem("btn", "0");
  }
})

$checkbox.addEventListener("change", () => $checkbox.classList.toggle("dark-mode"));

