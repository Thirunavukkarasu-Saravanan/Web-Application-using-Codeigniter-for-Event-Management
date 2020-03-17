<style>
nav{
    display:block;
    min-height:50px;
    width:100%;
    box-sizing:border-box;
}
nav * {
    vertical-align:middle;
}
nav-logo{
    float:left;
    height:40px;
    min-width:40px;
    margin:5px;
    background-color:grey;
}
nav-items{    
    display: inline-flex;
    float: right;
    padding-right: 25px;
}
.navItems{    
    margin: 10px 5px;
    padding: 5px;
    background-color:yellow;
}
.navItems:hover{
    background-color:red;
}
</style>
<nav>
<nav-logo>
 <img style="width:40px;height:40px;background-color:red;"/>
 <h1 style="display:inline-block; margin: 0; ">LEAN</h1>
</nav-logo>
<nav-items>
<nav-item class="navItems">Home</nav-item>
<nav-item class="navItems">About</nav-item>
<nav-item class="navItems">Contact</nav-item>
<nav-item class="navItems">Events</nav-item>
<nav-item class="navItems">Login</nav-item>
</nav-items>
</nav>