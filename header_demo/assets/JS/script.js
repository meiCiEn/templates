function toggleNav ()
{
    let x = document.getElementById( "topnav" );
    let y= document.getElementById( "toggle" );
    if ( x.className === "topnav" )
    {
        x.className += " responsive";
        y.className += " responsive"
    } else
    {
        x.className = "topnav";
        y.className = "toggle";
    }
}