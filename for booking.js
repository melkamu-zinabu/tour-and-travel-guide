function validateForm() {
    if (isEmpty(document.getElementById('data_3').value.trim())) {
        alert('First name is required!');
        return false;
    }
    if (isEmpty(document.getElementById('data_4').value.trim())) {
        alert('Last name is required!');
        return false;
    }
    if (!validateEmail(document.getElementById('data_5').value.trim())) {
        alert('Email must be a valid email address!');
        return false;
    }
    return true;
}
function isEmpty(str) { return (str.length == 0 || !str.trim()); }
function validateEmail(email) {
    var re = "";
    return isEmpty(email) || re.test(email);
}