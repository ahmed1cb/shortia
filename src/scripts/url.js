const urlForm = document.getElementById("url-form");

const linkRule = /^https?:\/\//i;

urlForm.onsubmit = (e) => {
  const name = urlForm.name.value;
  const link = urlForm.url.value;

  if (!name || name.length < 3) {
    Swal.fire({
      title: "Invalid Data",
      icon: "error",
      text: "Invalid Name Name Should be At Least 3 letters",
      theme: localStorage.mode ?? "light",
    });

    return false;
  }

  if (!linkRule.test(link)) {
    Swal.fire({
      title: "Invalid Data",
      icon: "error",
      text: "Link is Invalid Should be a Valid URL",
      theme: localStorage.mode ?? "light",
    });
    return false;
  }

  const formData = new FormData();

  formData.append("name", name);
  formData.append("link", link);

  e.preventDefault();
};
