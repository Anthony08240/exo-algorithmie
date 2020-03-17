<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>algo js</title>
</head>
<body>
<script>
function rand(min,max){     //fonction visant à simplifier la génération d'un nombre aléatoire (personnalisable)
    return Math.round(Math.random() * (+max - +min) + +min)
}
   
function randdix(){     //fonction visant à simplifier la génération d'un nombre aléatoire (de 0 à 10 uniquement)
    return Math.round(Math.random()*10)
}
</script>


<!------------->
<!--Exo 1 & 2-->
<!------------->

<p class="title">EXO 1 & 2<br> ----- <br>Afficher le resultat le plus grand / Afficher le resultat le plus petit</p>

<script>
var a=randdix();
var b=randdix();
if (a<b){
    document.write("<strong>b est le plus grand = </strong> " + b + "<br>");
    document.write("<strong>a est le plus petit = </strong> " + a + "<br>");
}
else if (a>b){
    document.write("<strong>a est le plus grand = </strong> " + a + "<br>");
    document.write("<strong>b est le plus petit = </strong> " + b + "<br>");
}
else{
    document.write("<strong>a et b sont égaux</strong><br>" + "<strong>a = </strong>" + a + "<br><strong>b = </strong>" + b);
}
</script>


<!-------->
<!--Exo3-->
<!-------->

<p class="title">EXO 3<br> ----- <br>Echanger le contenu de la variable a et b</p>

<script>
var temp=a;

a=b;
b=temp;

document.write("<strong>a = </strong>" + a + "<br>");
document.write("<strong>b = </strong>" + b + "<br>");
</script>


<!-------->
<!--Exo4-->
<!-------->

<p class="title">EXO 4<br> ----- <br>Additionner la variable a et b</p>

<script>
var res=a+b;
document.write(a + " + " + b + " = " + res);
</script>


<!-------->
<!--Exo5-->
<!-------->

<p class="title">EXO 5<br> ----- <br>Afficher un nombre aléatoire entre 1 et 100 ;</p>

<script>
var exo5=rand(1,100);
document.write("<strong>nombre aléatoire =</strong> " + exo5);
</script>


<!-------->
<!--Exo6-->
<!-------->

<p class="title">EXO 6<br> ----- <br>Afficher un nombre aléatoire entre 5 et 10 ;</p>

<script>
var randomexo6=rand(5,10);
document.write("<strong>nombre aléatoire =</strong> " + randomexo6);
</script>


<!-------->
<!--Exo7-->
<!-------->

<p class="title">EXO 7<br> ----- <br>Faire une fonction Addition</p>

<script>
function additionner(val1,val2){
    return val1+val2;
    }

var result=additionner(a,b);
document.write(a +" + " + b + " = " + result);
</script>


<!-------->
<!--Exo8-->
<!-------->
<p class="title">EXO 8<br> ----- <br>Générer un chiffre aléatoire entre 1 et 100,<br> "je suis nul" si x < 50<br> sinon "je suis bon"</p>

<script>
var exo8=rand(1,100);
if (exo8<50){
    document.write(exo8 + ", donc je suis nul");
}
else{
    document.write(exo8 + ", donc je suis bon");
}
</script>


<!-------------->
<!--Exo 9 & 10-->
<!-------------->
<p class="title">EXO 9 & 10<br> ----- <br>Faire une fonction qui prend en paramètre x (nombre aléatoire entre 0 et 5), <br>si x=1 alors afficher AAAA,<br> si x=2 alors afficher BBBB,<br> si x=3 alors afficher CCCC,<br> si x=4 alors afficher DDDD,<br> sinon je suis une perruche.<br> Faire avec condition si (9) et switch case (10).</p>
<p class="custom-text">condition si</p>


<script>
function fonctionTest(x)
{   
    if (x < 5 && x > 0) {
        
        if (x == 1) {
            return "AAAAA";
        } else if (x == 2) {
            return "BBBBB";
        } else if (x == 3) {
            return "CCCCC";
        } else if (x == 4) {
            return "DDDDD";
        }
    } 
    else {
        return "Je suis une perruche";
    }
}

var randomexo9 = fonctionTest(rand(0,5))
document.write(randomexo9);
</script>

<p class="custom-text">switch case</p>

<script>
function switchtest(x)
{
    switch (x) {
        case 1:
            return "AAAAA";
        break;
        case 2:
            return "BBBBB";
        break;
        case 3:
            return "CCCCC";
        break;
        case 4:
            return "DDDDD";
        break;
        default:
            return "Je suis un perruche";
        break;
    }
}
var randomexo10 = switchtest(rand(0,5));
document.write(randomexo10);
</script>


<!-------------------->
<!--Exo 11 & 12 & 13-->
<!-------------------->
<p class="title">EXO 11 & 12 & 13<br> ----- <br>Générer 10 valeur aléatoire, et afficher les 10 variable<br>Ajouter 10 valeur aléatoire dans un tableau<br>Parcourir ce tableau et afficher l'addition de tous ces résultats</p>

<p class="custom-text">Générer 10 nombres aléatoires</p>

<script>
for(i = 0; i<10; i++){
    var i2=i;
    document.write("<strong>index " + (i2++) + " = </strong>" + rand(0,1000) + "<br>");
}
</script>

<p class="custom-text">Générer 10 valeurs dans un tableau et les afficher</p>

<script>
var exo10 = [rand(0,1000), rand(0,1000), rand(0,1000), rand(0,1000), rand(0,1000), rand(0,1000), rand(0,1000), rand(0,1000), rand(0,1000) ,rand(0,1000)]; //tableau
document.write(exo10); //afficher tableau
</script>

</body>
</html>