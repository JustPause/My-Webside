var element = document.getElementById("download");
let opt = {
  margin: 0,
  filename: 'Justinas-Stankunas-CV.pdf',
  jsPDF: { format: 'a4', orientation: 'portrait' }
};
html2pdf().set(opt).from(element).save();