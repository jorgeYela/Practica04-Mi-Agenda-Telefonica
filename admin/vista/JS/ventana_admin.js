var aparecer1 = function(){
    document.getElementById("margenCF1").style.display ="block"; 
    desaparecer2();
    desaparecer3();
}

var aparecer2 = function(){
    document.getElementById("margenCF2").style.display ="block"; 
    desaparecer1();
    desaparecer3();
}

var aparecer3 = function(){
    document.getElementById("margenCF3").style.display ="block";
    desaparecer1();
    desaparecer2();
}

var desaparecer1 = function(){
    document.getElementById("margenCF1").style.display ="none"; 
    
}

var desaparecer2 = function(){
    document.getElementById("margenCF2").style.display ="none"; 
    
}

var desaparecer3 = function(){
    document.getElementById("margenCF3").style.display ="none"; 
    
}
