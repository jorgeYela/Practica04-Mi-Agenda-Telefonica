var aparecer1 = function(){
    document.getElementById("margenCF1").style.display ="block"; 
    desaparecer2();
    desaparecer3();
    desaparecer4();
    desaparecer5();
}

var aparecer2 = function(){
    document.getElementById("margenCF2").style.display ="block"; 
    desaparecer1();
    desaparecer3();
    desaparecer4();
    desaparecer5();
}

var aparecer3 = function(){
    document.getElementById("margenCF3").style.display ="block";
    desaparecer1();
    desaparecer2();
    desaparecer4();
    desaparecer5();
}

var aparecer4 = function(){
    document.getElementById("margenCF4").style.display ="block";
    desaparecer1();
    desaparecer2();
    desaparecer3();
    desaparecer5();
}

var aparecer5 =  function(){
    document.getElementById("margenCF5").style.display ="block";
    desaparecer1();
    desaparecer2();
    desaparecer3();
    desaparecer4();
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

var desaparecer4 = function(){
    document.getElementById("margenCF4").style.display ="none"; 
    
}

var desaparecer5 = function(){
    document.getElementById("margenCF5").style.display ="none"; 
    
}
