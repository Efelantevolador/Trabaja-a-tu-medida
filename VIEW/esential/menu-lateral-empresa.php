<style>
.arf{
    text-decoration: none;
    color:#fff;
}
.arf:hover{
    text-decoration: none!important;
}
.contenido-all{
    width:100%;
    max-width:1000px;
    margin:auto;
    margin-top:80px;
}
.contenido-all label{
    position:relative;
    width:100%;
    max-width:1000px;
    bottom:100px;
    right:20px;
    font-size: 25px;
    color:#ffff;
    cursor:pointer;
    transition:all 400ms;
    background: #202020;
}
.menu-lateral1{
    position:relative;
    bottom:108px;
    right:20px;
    width:0px;
    height:100vh;
    color:#fff;
    background: #202020;
    overflow:hidden;
    transition:all 400ms;
    display:none;
}
.menu-lateral1 li{
    list-style:none;
    padding:15px;
    color:#fff;
    cursor:pointer;
    transition:all 400ms;
    display:block;
    width:100%;
    border-bottom: 1px solid #fff;
}
.menu-lateral1 li a{
    text-decoration: none;
    color:#fff;
}
.menu-lateral1 li:hover{
    background: rgba(0,0,0,0.2);
    border-bottom: 1px solid red;
}
#check{
    display:none;
}
#check:checked ~ .menu-lateral1{ /*seudo clase todo lo que este despues de los :*/
    width:100%;
    display:block;
}
</style>
<div class="contenido-all">
    <input type="checkbox" id="check">
        <label for="check" class="icon">
            <img src="../CSS/open-iconic-master/png/home-3x.png" style="margin-left:10px;" alt="icon name">
            Menu.
        </label>
    <nav class="menu-lateral1">
        <ul>
            <a class="arf" href="../VIEW/perfil.usuario.empresa.php"><li>Perfil</li></a>
            <a class="arf" href="../VIEW/perfil.empresa.php"><li>Informacion de empresa</li></a>
            <a class="arf" href="../VIEW/crearOferta.php"><li>generar postulacion de trabajo</li></a>
            <a class="arf" href=""><li>Mis Postulaciones generadas</li></a>
        </ul>
    </nav>
</div>