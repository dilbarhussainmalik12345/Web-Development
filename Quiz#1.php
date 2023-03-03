<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<script>

var z;


function on()
{
  
    
    z = "buloff" + ".gif";
    document.getElementById("s1").src=z;
   

}

function off()
{
 
   
    
    z = "bulon" +".gif";

    document.getElementById("s1").src=z;


}


</script>



<style>
body
{
    background-color: black;
}

</style>



</head>


<body>
    
<button onclick ="on()"> Switch Off </button>
<img id = "s1" src="bulon.gif"  width= 300  height= 300 >


<button onclick ="off()"> Switch On </button>


</body>
</html>