var p;
var q = 1;
p = q + "." + "JPG";

function forward()
{
    p = p+1;

    if(p>10)
    {
        p = 1;
    }

    document.getElementById("s1").src = p;
}


function backward()
{
    p = p-1;

    if(p<1)
    {
        p = 10;
    }

    document.getElementById("s1").src = p;
}