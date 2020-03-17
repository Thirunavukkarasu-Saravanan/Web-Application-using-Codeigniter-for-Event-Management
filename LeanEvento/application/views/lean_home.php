<style>
    #pageContainer_home {
        font-family: Roboto, 'Helvetica Neue', sans-serif;
    }

    #home_pagebanner {
        width: 100%;
        background-image: url(<?php echo base_url(); ?>imagenes/bannerlean2.jpg);
        text-align: center;
        padding: 10vw 0;
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        object-fit: scale-down;
    }

    #home_logo {
        width: 15vw;
        position: relative;
        top: 0;
        left: 25%;
    }

    #home_abt,
    #home_Funders {
        margin: 50px 15% 75px 15%;
        text-align: center;
        font-size: .7em;
        line-height: 17px;
    }

    .home_head {
        line-height: 200%;
        font-weight: 500;
    }

    .home_head::before {
        content: "                 ";
        line-height: 200%;
        font-weight: 500;
        height: 0;
        margin-right: 10px;
        display: inline-block;
        position: relative;
        top: 1em;
        border-bottom: 3px solid #ffc300;
        ;
        color: #ffffff;
    }

    .home_head::after {
        content: "                 ";
        line-height: 200%;
        font-weight: 500;
        height: 0;
        margin-left: 10px;
        display: inline-block;
        position: relative;
        top: 1em;
        border-bottom: 3px solid #ffc300;
        ;
        color: #ffffff;
    }

    #home_abt>.context {
        color: grey;
    }

    #home_peopleList {
        background-color: #ffc300;
        height: 100px;
        padding: 20px 10% 30px 10%;
        display: flex;
    }

    #home_peopleList>.showContainer {
        height: 60px;
        width: 550px;
        padding: 20px 0;
        margin: 0 20px;
        text-align: center;
    }

    #home_peopleList>.showContainer>.head {
        font-size: 2em;
        padding-bottom: 10px;
    }

    #home_peopleList>.showContainer>.value {
        font-size: 1em;
    }

    #home_midBanner {
        background-color: grey;
        height: 43vw;
        width: 100%;
        background-repeat: repeat-y;
        /*background-position: 0 -275px;*/
        background-size: cover;
        background-image: url(<?php echo base_url(); ?>imagenes/bannerabout.jpg);
        margin: 0;

    }

    #home_midBanner>.home_quotes {
        text-align: center;
        width: 80%;
        height: 50px;
        margin-top: 200px;
        display: inline-block;
        vertical-align: middle;
        margin: 20vw 10%;
    }

    #home_midBanner>.home_quotes>.home_author {
        text-align: right;
        display: block;
        margin-top: 10px;
        margin-right: 20%;
        color: grey;
        text-shadow: 0 0 0px black;
        font-size: .8em;
    }

    #home_funders_img {
        margin: 20px 0px;
        padding: 2px;
        height: 150px;
        overflow: hidden;
    }

    #home_funders_img_cont {
        width: auto;
    }

    #home_funders_img .imgContainer {
        width: 150px;
        height: 150px;
        display: inline-block;
        margin: 0 calc(2.5% - 5px);
        text-align: center;
    }

    #home_funders_img .imgContainer>img {
        width: 100%;
        vertical-align: top;
    }

    #home_Funders>#home_btns {
        margin: 0 25%;
        height: 50px;
        text-align: center;
    }

    #home_Funders>#home_btns>.btnArrow {
        background-color: lightgrey;
        display: inline-block;
        margin: 0 25px;
        width: 45px;
        height: 45px;
        line-height: 45px;
        font-size: 20px;
        font-weight: 900;
        color: white;
    }

    #home_Funders>#home_btns>.btnArrow:hover {
        background-color: lightgrey;
        outline: 2px solid darkgrey;
        color: darkgrey;
    }
</style>

<div id="pageContainer_home">
    <div id="home_pagebanner">
        <img id="home_logo" src="<?php echo base_url(); ?>imagenes/logo-blanco.png" />
    </div>
    <div id="home_abt">
        <h1 class="home_head">¿QUÉ HACEMOS? <?php echo $d1 ?></h1>
        <div class="context">
            La asociación civil LEAN fue creada con el objetivo de ayudar, a través de acciones concretas, a nuestros
            conciudadanos
            en Venezuela ante la grave escasez de medicinas e insumos médicos en que se encuentra el país. Nuestra
            misión consiste
            en recolectar ayuda médico sanitaria en delegaciones en España y, a través de agentes de transporte,
            llevarlos a
            Venezuela para que otras asociaciones se encarguen de su distribución. De esta manera aportamos nuestro
            granito de
            arena ayudando a llevar asistencia humanitaria a Venezuela. Somos una asociación sin fines de lucro,
            dedicada a la
            defensa de los Derechos Humanos.
        </div>
    </div>
    <div id="home_peopleList">
        <div class="showContainer">
            <div class="head">478</div>
            <div class="value">VOLUNTARIOS</div>
        </div>
        <div class="showContainer">
            <div class="head">60,000</div>
            <div class="value">PERSONAS BENEFICIADAS</div>
        </div>
        <div class="showContainer">
            <div class="head">45</div>
            <div class="value">ALIADOS</div>
        </div>
    </div>
    <div id="home_midBanner">
        <div class="home_quotes">
            "La injusticia, en cualquier parte, e una amenaza a la justicia en todas partes."
            <author class="home_author"> - Martin Luter King</author>
            </div>
        </div>
    </div>
    <div id="home_Funders">
        <h1 class="home_head">ALIADOS</h1>
        <div id="home_funders_img">
            <div id="home_funders_img_cont">
                <div class="imgContainer">
                    <img alt="O" src="<?php echo base_url(); ?>imagenes/logo1.png" />
                </div>
                <div class="imgContainer">
                    <img alt="O" src="<?php echo base_url(); ?>imagenes/logo2.png" />
                </div>
                <div class="imgContainer">
                    <img alt="O" src="<?php echo base_url(); ?>imagenes/logo3.png" />
                </div>
                <div class="imgContainer">
                    <img alt="O" src="<?php echo base_url(); ?>imagenes/logo4.png" />
                </div>
            </div>
        </div>
        <div id="home_btns">
            <div class="btnArrow">&lt;</div>
            <div class="btnArrow">&gt;</div>
        </div>
    </div>
    <br><br>
</div>
