function detectversion() { // début de la fonction de détection
var OuAller = ""; // vide la variable OuAller
var NomNav = navigator.appName; // place le nom du navigateur dans la variable NomNav 
var VersNav = navigator.appVersion; // place la version du navigateur dans la variable VersNav 
var NumVers = parseFloat(VersNav); // transforme en numérique flottant
if (NumVers < 5 && NomNav == "Microsoft Internet Explorer") { // si MIE et < à 4 
OuAller = ("newsbrower.htm"); // met la bonne page dans OuAller
document.location = OuAller; 
} 
}
//gestion vieux navigateur
