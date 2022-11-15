

document.addEventListener('DOMContentLoaded', init);

let hideIngredients = true;


function init() {
    console.log("Init!");

    document.querySelector('#show').addEventListener("click",showIngredients);

    document.querySelector("#ingr1").addEventListener("click",ingr1);
    document.querySelector("#ingr2").addEventListener("click", ingr2);

}

function showIngredients() {

    if(hideIngredients) {
        document.querySelector('#ingredients').classList.remove("hide");    
    }
    else {
        document.querySelector("#ingredients").classList.add("hide");
    }
    hideIngredients != hideIngredients;

    console.log("Show Hide Ingredients");
}

function ingr1() {
    document.querySelector("#ingr1-mixing").classList.remove("hide");
}

function ingr2() {
    document.querySelector("#ingr2-mixing").classList.remove("hide");
}