var q = 1;

function inc()
{
    q = q+1;

    if(q>10)
    {
        q = 1;
    }

    document.getElementById("m1").innerHTML = q;
}


function dec()
{
    q = q-1;

    if(q<1)
    {
        q = 10;
    }

    document.getElementById("m1").innerHTML = q;
}