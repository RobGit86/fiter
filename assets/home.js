import './styles/home.css';

let kcalNode = document.getElementById("home-kcal-input")
let proteinInput = document.getElementById("home-protein-input")
let carbInput = document.getElementById("home-carb-input")
let fatInput = document.getElementById("home-fat-input")
let mealPerDay = document.getElementById("home-meal-per-day")

kcalNode.addEventListener("input", function(evn) {

    let kcal = document.getElementById("home-kcal-input").value

    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {}
    xhttp.open("GET", "/changeKcal?kcal=" + kcal, true);
    xhttp.send();
})

proteinInput.addEventListener("input", updatePCF) 
carbInput.addEventListener("input", updatePCF)
fatInput.addEventListener("input", updatePCF)  

function updatePCF() {

    let protein = document.getElementById("home-protein-input").value
    let carb = document.getElementById("home-carb-input").value
    let fat = document.getElementById("home-fat-input").value

    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {}
    xhttp.open("GET", "/changeProtein?protein=" + protein + "&carb=" + carb + "&fat=" + fat, true);
    xhttp.send();
}

mealPerDay.addEventListener("input", function(evn) {

    let mealPerDay = document.getElementById("home-meal-per-day-input").value

    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {}
    xhttp.open("GET", "/changeMealPerDay?mealPerDay=" + mealPerDay, true);
    xhttp.send();
})
