// filter
function filterFunction() {
    var x = document.getElementById("show-filer");
    if (x.style.display === "none" || x.style.display === "") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}


$(function () {
    $('.example-popover').popover({
        container: 'body'
    })
})