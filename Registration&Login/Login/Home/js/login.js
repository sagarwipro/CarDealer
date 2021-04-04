function validateForm(form) {
    $u = document.getElementById('username').value;
    $p = document.getElementById('password').value;
    window.location.href = "http://localhost/CarDealer/Registration&Login/User/finduser.php?u=" + $u + "&p=" + $p, false;
    return false
}