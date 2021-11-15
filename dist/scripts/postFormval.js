const postForm = document.querySelector('.post-form');
const category = document.querySelector('.cat-select__selected');
const gender = document.querySelector('#gender');
const age = document.querySelector('#age');
const yUrl = document.querySelector('#yurl');
const yLabel = document.querySelector('#yLabel');
const title = document.querySelector('#title');
const description = document.querySelector('#description');
const additionalUrl = document.querySelector('#additionalUrl');

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
    const url = yUrl.value;
    if (url != undefined || url != '') {
        const regExp = /^.*(youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=|\&v=|\?v=)([^#\&\?]*).*/;
        const match = url.match(regExp);
        if (match && match[2].length == 11) {
            setSuccessFor(yUrl, 'Valid URL');

        } else if (url == undefined || url === '') {
            setSuccessFor(yUrl, 'No Youtube URL');
        }
        else {
            setErrorFor(yUrl, 'Only Valid URLs Allowed');
        }
    }
}

function validTitle(){
    if(title.value !== "" && title.value.length > 4) {
        title.style.border = "1px solid var(--success-color)" 
        setSuccessFor(title, 'Valid Title');
    }else if(title.value === ""){
        setErrorFor(title, 'Add Title');
    }else if(title.value.length < 5){
        setErrorFor(title, 'Title needs 5 characters');
    }
}

function validDescription(){
    if(description.value !== "" && description.value.length > 19) {
        setSuccessFor(description, 'Valid Description');
    }else if(description.value === ""){
        setErrorFor(description, 'Add Description');
    }else if(description.value.length < 20){
        setErrorFor(description, 'Description needs 20 characters');
    }
}


function validAdditionalUrl(){
    var url = /(www\.)?[-a-zA-Z0-9@:%._\+~#=]{2,256}\.[a-z]{2,6}\b([-a-zA-Z0-9@:%_\+.~#?&//=]*)/;
    if(additionalUrl.value.match(url) && additionalUrl.value.length > 3 && additionalUrl.value.substring(0, 4) !== 'http' && additionalUrl.value.substring(0, 4) !== 'HTTP' ) {
        additionalUrl.style.border = "1px solid var(--success-color)" 
        setSuccessFor(additionalUrl, 'Valid URL');
    }else if(additionalUrl.value.substring(0, 4) === 'http' || additionalUrl.value.substring(0, 4) === 'HTTP'){
        additionalUrl.style.border = "1px solid var(--color-danger)" 
        setErrorFor(additionalUrl, 'HTTP(S) not allowed');
    }else if(additionalUrl.value.length < 1) { 
        additionalUrl.style.border = "1px solid var(--success-color)"  
        setSuccessFor(additionalUrl, 'No URL selected');
    }else if(additionalUrl.value.length < 3){
        additionalUrl.style.border = "1px solid var(--color-danger)" 
        setErrorFor(additionalUrl, 'URL must be more than 3 characters');
    }else if(!additionalUrl.value.match(url)){
        additionalUrl.style.border = "1px solid var(--color-danger)" 
        setErrorFor(additionalUrl, 'URL not valid');
    }
}

function checkForm() {
    validCategory()
    validGender()
    validAge()
    validYUrl()
    validTitle()
    validDescription()
    validAdditionalUrl()
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