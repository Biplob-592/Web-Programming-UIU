const calory_goal = 2000;

let sum = 0;
let count = 0;




function pass(){
    count++;

    let input1 = Number( document.getElementById("input1").value );

    sum+=input1;

    document.getElementById("Total_Calories").innerText = "Total Calories: " + sum;

    document.getElementById("Entry").innerText = "Entry = " + count ;











}