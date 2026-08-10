const swalTheme = () => localStorage.mode ?? "light";

const swalBase = {
  theme: swalTheme(),
  confirmButtonColor: "#ea580c",
  background: swalTheme() === "dark" ? "#171717" : "#ffffff",
  color: swalTheme() === "dark" ? "#fafafa" : "#171717",
  customClass: {
    popup: "swal-brand",
    confirmButton: "swal-brand-btn",
  },
};

function showSwal(options) {
  return Swal.fire({ ...swalBase, ...options });
}
