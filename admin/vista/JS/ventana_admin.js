var aparecer1 = function(){
    document.getElementById("margenCF1").style.display ="block"; 
    desaparecer2();
    desaparecer3();
    desaparecer4();
    desaparecer5();
    desaparecer6();
}

var aparecer2 = function(){
    document.getElementById("margenCF2").style.display ="block"; 
    desaparecer1();
    desaparecer3();
    desaparecer4();
    desaparecer5();
    desaparecer6()
}

var aparecer3 = function(){
    document.getElementById("margenCF3").style.display ="block";
    desaparecer1();
    desaparecer2();
    desaparecer4();
    desaparecer5();
    desaparecer6();
}

var aparecer4 = function(){
    document.getElementById("margenCF4").style.display ="block";
    desaparecer1();
    desaparecer2();
    desaparecer3();
    desaparecer5();
    desaparecer6();
}

var aparecer5 =  function(){
    document.getElementById("margenCF5").style.display ="block";
    desaparecer1();
    desaparecer2();
    desaparecer3();
    desaparecer4();
    desaparecer6();
}

var aparecer6 =  function(){
    window.location.href="/Practica04-Mi-Agenda-Telefonica/admin/controladores/listar.php";
    document.getElementById("margenCF5").style.display ="block";
    desaparecer1();
    desaparecer2();
    desaparecer3();
    desaparecer4();
    desaparecer5();
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

var desaparecer6 = function(){
    document.getElementById("margenCF6").style.display ="none";
}

var redirigirPrincipal = function(){
    window.location.href="/Practica04-Mi-Agenda-Telefonica/admin/vista/html/ventana_admin.php";
}
