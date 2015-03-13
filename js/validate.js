function formValidator() {
    // Make quick references to our fields
    var firstname = document.getElementById('firstname');
    var addr = document.getElementById('addr');
    var zip = document.getElementById('zip');
    var city = document.getElementById('city');
    var username = document.getElementById('username');
    var email = document.getElementById('email');

    //Check each input in the order that it appears in the form!
    if (isAlphabet(firstname, "Please enter only letters for your name")) {
        if (isAlphanumeric(addr, "Numbers and Letters Only for Address")) {
            if (isNumeric(zip, "Please enter a valid zip code")) {
                if (madeSelection(city, "Please Choose a City")) {
                    if (lengthRestriction(username, 7, 10)) {
                        if (emailValidator(email, "Please enter a valid email address")) {
                            return true;
                        }
                    }
                }
            }
        }
    }
    return false;

}


function notEmpty(elem, msg) {

    if (elem.value.length == 0) {
        elem.focus();//set the focus to this input
        return false;
    }
    return true;

}
function isNumeric(elem, msg) {
    var numericExpression = /^[0-9]+$/;
    if (elem.value.match(numericExpression)) {
        return true;
    } else {
        alert(msg);
        elem.focus();
        return false;
    }

}


function isAlphabet(elem, msg) {
    var alphaExp = /^[a-zA-Z]+$/;
    if (elem.value.match(alphaExp)) {
        return true;
    }
    else {
        alert(msg);
        elem.focus();
        return false;
    }

}

function isAlphanumeric(elem, msg) {
    var alphaExp = /^[0-9a-zA-Z]+$/;
    if (elem.value.match(alphaExp)) {
        return true;
    } else {
        alert(msg);
        elem.focus();
        return false;
    }

}

function lengthRestriction(elem, min, max) {
    var uInput = elem.value;
    if (uInput.length >= min && uInput.length <= max) {
        return true;
    }

}

function madeSelection(elem, msg) {
    if (elem.value == 0) {
        alert(msg);
        elem.focus();
        return false;
    } else {
        return true;
    }
}

function emailValidator(elem, img) {
    var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
    if (elem.value.match(emailExp)) {
        return true;
    } else {
        alert(msg);
        elem.focus();
        return false;
    }
}
