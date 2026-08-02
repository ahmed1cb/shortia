const urlForm = document.getElementById("url-form");

const linkRule = /^https?:\/\//i;
const nameRule = /^(?!.*\.\.)(?!.*\.$)(?!^\.)[a-zA-Z0-9._]{1,30}$/i;

async function copyToClipboard(text) {
  try {
    await navigator.clipboard.writeText(text);
    Swal.fire({
      theme: localStorage.mode ?? "light",
      text: "Success",
    });
  } catch (err) {
    Swal.fire({
      icon: "error",
      theme: localStorage.mode ?? "light",
      text: "Faild To Copy",
    });
  }
}

urlForm.onsubmit = (e) => {
  const name = urlForm.name.value;
  const link = urlForm.url.value;

  if (!name || !nameRule.test(name)) {
    Swal.fire({
      title: "Invalid Data",
      icon: "error",
      text: "Invalid Name Name Should be : no  Spaces | No Spicial Chars | Should be At least 1 letter and at most 30 ",
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

  fetch("/src/api/url.php", {
    method: "POST",
    body: formData,
  })
    .then((e) => e.json())
    .then((e) => {
      const link = `${location.origin}/?s=${e.short_link_tok}`;

      Swal.fire({
        text: "Success: " + link,
        confirmButtonText: "Copy",
        theme: localStorage.mode ?? "light",
      }).then((result) => {
        if (result.isConfirmed) {
          copyToClipboard(link);
        }
      });
    })
    .catch((err) => {
      console.log(err);
      Swal.fire({
        title: "Something Went Wrong ",
        icon: "error",
        text: "Try again Later",
        theme: localStorage.mode ?? "light",
      });
      return false;
    });

  e.preventDefault();
};
