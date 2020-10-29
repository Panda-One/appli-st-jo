
window.addEventListener('load', function (e)
{
      
    // 1. Récupérer le select (rajouter une classe ou un identifiant pour le récupérer correctement)
var element= document.querySelector('.class_select');

element.value= getUrlParameter('class');

    // 2. Ajouter un écouteur d'événement (change) sur le select
    element.addEventListener('change', function (e)
    {
        // 3. Au changement de valeur du select, modifier l'url de la page (document.location.href)
        document.location='http://applistjoseph/?class='+element.value;

        // et recharger la page avec en paramètre GET la classe sélectionnée
      
    });

   function getUrlParameter(name)
   {
let search=decodeURI(document.location.search).split('δ');

if (search[0])
{
    search [0] = search[0].replace('?', '');
}

const slug= search.find(slug=>slug.startsWith(name+'='));
if (typeof slug=='undefined')return undefined

return slug.slice((name+'=').length);
   }
console.log(document.location)
    
});