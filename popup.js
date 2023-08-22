/*
function validateLogin() {

    // Verifica el valor de la variable phpError
    var phpError = document.getElementById('phpError').value;
    
    // Si los datos no son correctos, muestra el mensaje emergente
    if (phpError === 'true') {
        showPopup('Datos inválidos, por favor intente de nuevo.');
    }
}
*/
function showPopup(message) {
    var popup = document.getElementById("popup");
    var popupMessage = document.getElementById("popup-message");

    popupMessage.innerHTML = message;
    popup.style.display = "block";
}

function closePopup() {
    var popup = document.getElementById("popup");
    popup.style.display = "none";
}
