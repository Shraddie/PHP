<style>
    *
    {
        margin:0px;
    }
    nav ul{
        list-style-type: none;
        background:lightgray;
        height:24px;
        padding:1%;
        margin:auto;
        font-family:"Trebuchet MS";
    }
    nav ul li
    {
        display:inline;
        margin-right: 22px;
    }
    nav ul li a
    {
        text-decoration: none;
        color:black;
    }
    nav ul li a:hover
    {
        transition: 0.3s ease-in-out 0.1s;
        padding:12px;
        background-color:darkgray;
    }
    nav ul li a:not(hover)
    {
        transition: 0.3s ease-in-out 0.1s;
    }
    #login
    {
        float:right;
        margin-right: 30px;
    }
    #navlogo
    {
        width:35px;
        height:35px;
        float:left;
        margin-top:-10px;
    }
</style>
<nav>
    <ul>
        <li><img id="navlogo" src="/includes/nav/ooievaar.png" href=""></li>
        <li><a href="">Home</a></li>
        <li><a href="">Content</ahref></li>
        <li id="login"><a href="">Login</a></li>
    </ul>
</nav>