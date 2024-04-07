function SavePage() {
  var element = document.getElementById("download");
  let opt = {
    margin: 0,
    dpi: 500,
    filename: 'Justinas-Stankunas-CV.pdf',
    jsPDF: { format: 'a4', orientation: 'portrait' }
  }

  html2pdf().set(opt).from(element).save();
};

console.log("Loding the page");

setTimeout(SavePage, 1000);