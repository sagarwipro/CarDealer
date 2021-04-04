function reply(id) {
    document.getElementById("response").style.display = "inline";
    document.getElementById("IDForReply").value = id;
}

function responseFunc() {
    $id = document.getElementById("IDForReply").value;
    $message = document.getElementById("responseMessage").value;
    window.location.href = "http://localhost/CarDealer/Registration&Login/Admin/php/Reply.php?id=" + $id + "&message=" + $message;
}

document.addEventListener('keydown', function (event) {
    if (event.key === "Escape") {
        document.getElementById("response").style.display = "none";
    }
});

function add() {
    window.location.href = "http://localhost/CarDealer/Registration&Login/Admin/php/addEvent.php";
}
