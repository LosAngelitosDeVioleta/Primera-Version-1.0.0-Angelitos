 const backToTopBtn = document.getElementById("back-to-top");

  window.addEventListener("scroll", () => {
    if (window.scrollY > 100) {
      backToTopBtn.classList.add("_show-scroll");
    } else {
      backToTopBtn.classList.remove("_show-scroll");
    }
  });

  backToTopBtn.addEventListener("click", (e) => {
    e.preventDefault();
    window.scrollTo({ top: 0, behavior: "smooth" });
  });