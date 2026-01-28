const password = document.getElementById("password");
const icon = document.getElementById("icon");

icon.addEventListener("click", () => {
  if (password.type === "password") {
    password.type = "text";
    icon.classList.remove("fa-eye");
    icon.classList.add("fa-eye-slash");
  } else {
    password.type = "password";
    icon.classList.add("fa-eye");
    icon.classList.remove("fa-eye-slash");
  }
});
