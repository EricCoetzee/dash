const postForm = document.querySelector('.post-form');
const category = document.querySelector('.cat-select__selected');
const gender = document.querySelector('#gender');
const age = document.querySelector('#age');
const yUrl = document.querySelector('#yurl');

const nextBtn = document.querySelectorAll(".btns-group__btn-next");

function validCategory() {
    if (category.value !== "") {
        category.style.border = "1px solid var(--color-success)"
        setSuccessFor(category, 'Valid Category')
    } else {
        setErrorFor(category, 'Please select category')
    }
}

function validGender() {
    if (gender.value !== "") {
        gender.style.border = "1px solid var(--color-success)"
        // invalidBikeModel()
        setSuccessFor(gender, 'Valid Gender')
    } else {
        setErrorFor(gender, 'Select Gender')
    }
}
function validAge() {
    if (age.value !== "") {
        age.style.border = "1px solid var(--color-success)"
        // invalidBikeModel()
        setSuccessFor(age, 'Valid Age Group')
    } else {
        setErrorFor(age, 'Select Age Group')
    }
}

function validYUrl() {
    if (yUrl.value !== "") {
        yUrl.style.border = "1px solid var(--color-success)"
        // invalidBikeModel()
        setSuccessFor(yUrl, 'Valid Link')
    } else {
        setErrorFor(yUrl, 'Enter Url')
    }
}

function checkForm() {
    validCategory()
    validGender()
    validAge()
    validYUrl()
}

document.body.addEventListener("onload", checkForm(), false);

function setErrorFor(input, message) {
    const formControl = input.parentElement;
    const small = formControl.querySelector('small');
    formControl.className = 'valid error';
    small.innerText = message;
}

function setSuccessFor(input, message) {
    const formControl = input.parentElement;
    const small = formControl.querySelector('small');
    formControl.className = 'valid success';
    small.innerText = message;
}