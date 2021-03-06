const prevBtns = document.querySelectorAll(".btns-group__btn-prev");
const nextBtns = document.querySelectorAll(".btns-group__btn-next");
const progress = document.getElementById("progress");
const formSteps = document.querySelectorAll(".form-step");
const progressSteps = document.querySelectorAll(".progressbar__progress-step");

  
var formStepsNum = 0; 

nextBtns.forEach((btn) => {
  btn.addEventListener("click", () => {
    formStepsNum++;
    console.log('working')
    updateFormSteps();
    updateProgressbar(); 
    
  });
});

prevBtns.forEach((btn) => {
  btn.addEventListener("click", () => {
    formStepsNum--;
    updateFormSteps();
    updateProgressbar();
  });
});

function updateFormSteps() {
  formSteps.forEach((formStep) => {
    formStep.classList.contains("form-step-active") &&
      formStep.classList.remove("form-step-active");
  });

  formSteps[formStepsNum].classList.add("form-step-active");
}

function updateProgressbar() {
  progressSteps.forEach((progressStep, idx) => {
    if (idx < formStepsNum + 1) {
      progressStep.classList.add("progressbar__progress-step-active");
    } else {
      progressStep.classList.remove("progressbar__progress-step-active");
    }
  });

  const progressActive = document.querySelectorAll(".progressbar__progress-step-active");

  progress.style.width =
    ((progressActive.length - 1) / (progressSteps.length - 1)) * 100 + "%";
}