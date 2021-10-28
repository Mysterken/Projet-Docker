function verif() {
    if (document.getElementById('classe').value == '' || document.getElementById('nom').value == '') {
        document.getElementById('validation').disabled = true;
    } else document.getElementById('validation').disabled = false;
}