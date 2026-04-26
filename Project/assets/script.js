function validateForm() {
    let title = document.forms["itemForm"]["title"].value;
    if (title == "") {
        alert("Title must be filled out");
        return false;
    }
}
