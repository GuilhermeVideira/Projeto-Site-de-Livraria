function onSubmit() {
    
    var selectElement = document.getElementById("mySelect");

    var selectedValue = selectElement.value;

    if (selectedValue === "cliente") {
      window.location.href = "TelaHomeCliente.html";
    } else if (selectedValue === "editora") {
      window.location.href = "TelaHomeEditora.html";
    }

    return false;
}