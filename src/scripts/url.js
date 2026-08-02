document.addEventListener("DOMContentLoaded", () => {
  const urlForm = document.getElementById("url-form");
  const modalEl = document.getElementById("app-modal");

  const modal = new ldcover({
    root: "#app-modal",
  });

  const linkRule = /^https?:\/\//i;

  urlForm.onsubmit = (e) => {
    const name = urlForm.name.value;
    const link = urlForm.url.value;

    if (!name || name.length < 3) {
      modalEl.textContent = "the Name should be at least 3 letters";
      modal.toggle();
      return false;
    }

    if (!linkRule.test(link)) {
      modalEl.textContent = "Invalid URL";
      modal.toggle();
    }
    e.preventDefault();
  };
});
