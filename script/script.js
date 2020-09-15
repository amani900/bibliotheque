var boite = document.getElementById("horloge1"); // variable objet
   function horloge() 
   {
      var heure =new Date();
      var heureGMT = heure.toGMTString();
      boite.textContent = "il est : " + heure.getHours()+":"+ heure.getMinutes()+":"+ heure.getSeconds() + "\n mais en GMT il est : " + heureGMT;
   }
   setInterval("horloge()", 1000);

   var aujourdhui = new Date(); 
   var annee = aujourdhui.getFullYear(); // retourne le millésime
   var mois =aujourdhui.getMonth()+1; // date.getMonth retourne un entier entre 0 et 11 donc il faut ajouter 1
   var jour = aujourdhui.getDate(); // retourne le jour (1à 31)
   var joursemaine = aujourdhui.getDay() ; // retourne un entier compris entre 0 et 6 (0 pour dimanche)
   //var tab_jour=new Array("Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi");
   //document.write('Nous sommes le : ' +  tab_jour[joursemaine] + ' ' + jour + '/' + mois + '/' + annee) ; 

   function togglePwd(id)
{
  var x = document.getElementById("pw");
  x.type = (x.type === "password")? "text" : "password";
}