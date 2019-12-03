/**
 * Function to validate a given object in the form
 * @param {*} object the object to validate
 */
function validate(object) {
    isvalid = false;
    // Getting the element and checking if it's empty
    if (document.getElementById(object).value == "") {
        // Styling the object's box to display error
        document.getElementById(object).style.borderColor = "red";
        document.getElementById(object).style.backgroundColor = 'pink';
        isvalid = false;
    } else {
        // The object validated
        document.getElementById(object).style = null;
        isvalid = true;
    }

    return isvalid;

}

/**
 * Main function that is used to validate all the inputs
 */
function validateForm() {
    nameValid = validate("name");
    commentValid = validate("comment");
    return (nameValid && commentValid);
} // end of function to validate Form