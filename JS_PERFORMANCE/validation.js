
"use strict"

function emailValidation(){
    
    let data = document.getElementById('email').value;
    
    if (data === "") {
        
        window.alert('Email is empty!');
        
    }
}

function genderValidation(){
    
    if(document.getElementById("male").checked|| document.getElementById("female").checked|| document.getElementById("other").checked){
        
        alert("Gender is selected");
        
    }
    
    else{
        
        alert("select one gender");
        
    }
    
}

function degreeValidation(){
    
    if(document.getElementById("ssc").checked|| document.getElementById("hsc").checked|| document.getElementById("Bsc").checked){
        
        alert("Degree is selected");
        
    }
    
    else{
        
        alert("select one degree");
        
    }
    
}





