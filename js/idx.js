function detectversion() { // d�but de la fonction de d�tection
var OuAller = ""; // vide la variable OuAller
var NomNav = navigator.appName; // place le nom du navigateur dans la variable NomNav 
var VersNav = navigator.appVersion; // place la version du navigateur dans la variable VersNav 
var NumVers = parseFloat(VersNav); // transforme en num�rique flottant
if (NumVers < 5 && NomNav == "Microsoft Internet Explorer") { // si MIE et < � 4 
OuAller = ("newsbrower.htm"); // met la bonne page dans OuAller
document.location = OuAller; 
} 
}
