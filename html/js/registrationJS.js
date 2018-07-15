function setup() {
    document.getElementById('buttonid').addEventListener('click', openDialog);

    function openDialog() {
        document.getElementById('fileUpload').click();

    }

    document.getElementById('fileUpload').onchange = function () {
        var fullPath = document.getElementById('fileUpload').value;
        if (fullPath) {
            var startIndex = (fullPath.indexOf('\\') >= 0 ? fullPath.lastIndexOf('\\') : fullPath.lastIndexOf('/'));
            var filename = fullPath.substring(startIndex);
            if (filename.indexOf('\\') === 0 || filename.indexOf('/') === 0) {
                filename = filename.substring(1);
            }
            document.getElementById('fileName').innerHTML = filename;
        }
        document.getElementById('fileName').style.border = "thin solid #000000";
        document.getElementById('fileName').style.borderRadius = "5px";
        document.getElementById('fileName').style.padding = "2px";
        document.getElementById('fileName').style.marginLeft = "0px";
    }
}

function showfield(name) {
    if (name === 'Other') {
        document.getElementById('eduError').innerHTML = '<input type="text" id="otherSchool" name="otherSchoolText" placeholder="Enter Other Institution"' +
            'class="form-control" autofocus required />' +
            '<span class="help-block">Full Educational Institution Name, <br>eg.: Edwardsville High School</span>';
    } else {
        document.getElementById('eduError').innerHTML = '';
    }
}
<!--/School js-->

<!--Validation JS-->
var isValid = false;

function validate() {

    var alphaNum = /^[0-9a-zA-Z]+$/;

    var firstValid = false;
    var lastValid = false;
    var emailValid = false;
    var genValid = false;
    var shirtValid = false;
    var codingValid = false;
    var eduValid = false;
    var telValid = false;

    var inpObj = document.getElementById('firstName');
    var lastObj = document.getElementById('lastName');
    var emailObj = document.getElementById('email');
    var genderObj = document.getElementsByName('gender');
    var shirtObj = document.getElementsByName('shirtSize');
    var eduObj = document.getElementById('educational');
    var telObj = document.getElementById('telNo');
    var codingObj = document.getElementsByName('coding');

    //     ---------FIRST NAME VALIDITY CHECK---------
    //Check validity of first name
    if (!inpObj.checkValidity()) {
        //if no name is entered change placeholder
        inpObj.setAttribute("placeholder", "Required Field - Please enter first name");
        //display error
        document.getElementById('firstNameError').innerHTML = '<span style="color:red">Enter first name.</span><br>';
        //set bool to false so form will not submit
        firstValid = false;
    } else if (!inpObj.value.match(alphaNum)) {
        //display error if user enters non-accepted characters
        inpObj.setAttribute("placeholder", "Please only use alpha numeric characters");
        //display error for entering an invalid first name
        document.getElementById('firstNameError').innerHTML = '<span style="color:red">Enter valid first name.</span><br>';
        //set bool to false so form will not submit
        firstValid = false;
    } else {
        //set true so form will submit
        firstValid = true;
        //remove error
        document.getElementById('firstNameError').innerHTML = '';
    }
    //     ---------FIRST NAME VALIDITY CHECK ENDS---------


    //     ---------LAST NAME VALIDITY CHECK---------
    //Check validity of last name
    if (!lastObj.checkValidity()) {
        //if no name is entered change placeholder
        lastObj.setAttribute("placeholder", "Required Field - Please enter last name");
        //set error field to error
        document.getElementById('lastNameError').innerHTML = '<span style="color:red">Enter last name.</span><br>';
        //set bool so form will not submit
        lastValid = false;
    } else if (!lastObj.value.match(alphaNum)) {
        //if user enters non-alpha chars change placeholder
        inpObj.setAttribute("placeholder", "Please only use alpha numeric characters");
        //display error in error field if non-alpha characters are used
        document.getElementById('lastNameError').innerHTML = '<span style="color:red">Enter valid last name.</span><br>';
        //set bool to false to form will not submit
        lastValid = false;
    } else {
        //if all is valid set bool to true so form will submit
        lastValid = true;
        //clear error field
        document.getElementById('lastNameError').innerHTML = '';
    }
    //     ---------LAST NAME VALIDITY CHECK ENDS---------


    //     ---------EMAIL VALIDITY CHECK---------
    //check validity of email input (is it an email address)
    if (!emailObj.checkValidity()) {
        //check if email is valid - if not set placeholder to hint
        emailObj.setAttribute("placeholder", "Required Field - Please enter email");
        //if invalid set error section to display error
        document.getElementById('emailError').innerHTML = '<span style="color:red">Enter email.</span><br>';
        //set test bool to false
        emailValid = false;
    } else {
        // else set to true
        emailValid = true;
        //reset error
        document.getElementById('emailError').innerHTML = '';
    }

    //Check telObj for valid telephone number
    if (!telObj.checkValidity()) {
        //if invalid set placeholder to hint
        telObj.setAttribute("placeholder", "Required Field - Please enter telephone number");
        //set error field below to display error
        document.getElementById('telError').innerHTML = '<span style="color:red">Enter valid phone number.</span><br>';
        //set test bool to false
        telValid = false;
    } else {
        //set test bool to true
        telValid = true;
        //clear error field
        document.getElementById('telError').innerHTML = '';
    }
    //     ---------EMAIL VALIDITY CHECK ENDS---------


    //     ---------EDUCATION VALIDITY CHECK---------
    //if eduObj selected value is index 0 (please choose an option) then invalid (option hasn't been selected)
    if (eduObj.selectedIndex === 0) {
        //set error field to display error
        document.getElementById('eduError').innerHTML = '<span style="color:red">Select valid educational institution.</span><br>';
        //set bool to false
        eduValid = false;
        //else if selected index is 24 (other field)
    } else if (eduObj.selectedIndex === 24) {
        //getElement 'otherSchool'
        var otherSchoolInput = document.getElementById('otherSchool');
        //check otherfield input validity
        if (!otherSchoolInput.checkValidity()) {
            //if invalid change placeholder to hint
            otherSchoolInput.setAttribute("placeholder", "Required Field - Please enter other school");
            //set error to display required field if invalid
            document.getElementById('eduError').innerHTML += '<span style="color:red">' +
                'Required Field - Please enter other educational institution.</span><br>';
            //set test bool to false
            eduValid = false;
        } else {
            //else set test bool to true
            eduValid = true;
            //grab value that user typed in
            var otherSet = document.getElementById('otherSchool').value;
            //set index 24 to that value so php can grab the value.
            eduObj[24].value = otherSet;
        }
    } else {
        //if user selects a field other than 'none' or 'other' then set bool to true
        eduValid = true;
        //clear error field
        document.getElementById('eduError').innerHTML = '';
    }
    //     ---------EDUCATION VALIDITY CHECK ENDS---------


    //     ---------GENDER VALIDITY CHECK---------
    if (!(genderObj[0].checked || genderObj[1].checked || genderObj[2].checked || genderObj[3].checked)) {
        document.getElementById('genderError').innerHTML = '<span style="color:red">Please select gender field.</span><br>';
        genValid = false;
    } else {
        document.getElementById('genderError').innerHTML = '';
        genValid = true;
    }
    //     ---------GENDER VALIDITY CHECK ENDS---------


    //     ---------SHIRT SIZE VALIDITY CHECK---------
    if (!(shirtObj[0].checked || shirtObj[1].checked || shirtObj[2].checked || shirtObj[3].checked)) {
        document.getElementById('shirtError').innerHTML = '<span style="color:red">Please select shirt size.</span><br>';
        shirtValid = false;
    } else {
        document.getElementById('shirtError').innerHTML = '';
        shirtValid = true;
    }
    //     ---------SHIRT SIZE VALIDITY CHECK ENDS---------


    //     ---------CODE EXP SIZE VALIDITY CHECK---------
    if (!(codingObj[0].checked || codingObj[1].checked)) {
        document.getElementById('codeError').innerHTML = '<span style="color:red">Please select if you have experience</span><br>';
        codingValid = false;
    } else {
        document.getElementById('codeError').innerHTML = '';
        codingValid = true;
    }
    //     ---------CODE EXP SIZE VALIDITY CHECK ENDS---------


    //     ---------FINAL VALIDITY CHECK---------
    //If all required fields are filled then set isValid to true and allow to form to submit
    if ((firstValid && lastValid && emailValid && genValid && shirtValid && codingValid && telValid && eduValid)) {
        //set isValid to true
        isValid = true;
    }

    return isValid;
}