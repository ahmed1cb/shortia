const urlForm = document.getElementById("url-form");

const linkRule = /^https?:\/\//i;
const nameRule = /^(?!.*\.\.)(?!.*\.$)(?!^\.)[a-zA-Z0-9._]{1,30}$/i;

async function copyToClipboard(text) {
  try {
    await navigator.clipboard.writeText(text);
    showSwal({
      icon: "success",
      title: "Copied!",
      text: "The short link is now in your clipboard.",
    });
  } catch (err) {
    showSwal({
      icon: "error",
      title: "Copy Failed",
      text: "Could not copy the link automatically. Select it and copy manually.",
    });
  }
}

function showShortened(link) {
  const swalLink = document.createElement("div");
  swalLink.className = "swal-copy-box";
  swalLink.innerHTML =
    '<span class="swal-copy-label">Your short link</span><span class="swal-copy-value"></span>';

  swalLink.querySelector(".swal-copy-value").textContent = link;

  showSwal({
    icon: "success",
    title: "Link Shortened!",
    html: swalLink,
    confirmButtonText: "Copy",
    showCancelButton: true,
    cancelButtonText: "Done",
    cancelButtonColor: "#737373",
    allowOutsideClick: false,
  }).then((result) => {
    if (result.isConfirmed) {
      copyToClipboard(link);
    }
  });
}
let disabled = false;
urlForm.onsubmit = (e) => {
  if (disabled) {
    return false;
  }
  const name = urlForm.name.value;
  const link = urlForm.url.value;

  if (!name || !nameRule.test(name)) {
    showSwal({
      title: "Invalid Data",
      icon: "error",
      html: "Name should be 1&ndash;30 characters with no spaces or special characters. Letters, numbers, dots, and underscores are allowed.",
    });

    return false;
  }

  if (!linkRule.test(link)) {
    showSwal({
      title: "Invalid Data",
      icon: "error",
      text: "Link is invalid. Make sure it starts with http:// or https://",
    });
    return false;
  }

  const formData = new FormData();

  formData.append("name", name);
  formData.append("link", link);

  disabled = true;
  urlForm.querySelector("button").setAttribute("disabled", true);
  console.log(urlForm.querySelector("button"));
  fetch("/src/api/url.php", {
    method: "POST",
    body: formData,
  })
    .then((e) => {
      return e.json();
    })
    .then((e) => {
      const link = `${location.origin}/?s=${e.short_link_tok}`;
      showShortened(link);
    })
    .catch((err) => {
      console.log(err);
      showSwal({
        title: "Something Went Wrong",
        icon: "error",
        text: "Try again later.",
      });
      return false;
    })
    .finally(() => {
      disabled = false;
      urlForm.querySelector("button").removeAttribute("disabled");
    });

  e.preventDefault();
};
