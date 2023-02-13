let darkMode = false;
const table = document.getElementById("table");

function eliminar() {
  let res = confirm("Confirma la eliminación de la persona");
  return res;
}

function toggleDarkMode() {
  darkMode = !darkMode;

  if (darkMode) {
    document.body.classList.add("dark-mode");
    table.classList.add("table-dark");
  } else {
    document.body.classList.remove("dark-mode");
    table.classList.remove("table-dark");
  }
}
