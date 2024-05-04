const mobile_nav = document.querySelector(".hamburger");
const nav_header = document.querySelector("nav");

const toggleNavbar = () => {
  
  nav_header.classList.toggle("active");
};

mobile_nav.addEventListener("click", () => toggleNavbar());