const qrcodeForm = document.getElementById("qrcode-form");
const textInput = qrcodeForm.text;

var qrcode = new QRCode("preview", {
  text: "",
  correctLevel: QRCode.CorrectLevel.H,
});

qrcodeForm.onsubmit = (e) => {
  const text = textInput.value;
  qrcode.clear();
  qrcode.makeCode(text);

  console.log(text);
  e.preventDefault();
};
