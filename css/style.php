<?php

 header('Content-type: text/css; charset:UTF-8')
?>


@import url('https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@700&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Source Sans Pro', sans-serif;
    scroll-behavior: smooth;
}

body{
    overflow-x: hidden;
}

section
{
    position: relative;
    width: 100%;
    min-height: 100vh;
    padding: 100px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}
header
{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    padding: 20px 100px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    z-index: 1000;
}
header .logo
{
    position: relative;
    max-width: 6rem;
    z-index: 1000;
}
header nav
{
    position: relative;
    display: flex;
    z-index: 1000;
}
header nav li
{
    list-style: none;
    z-index: 1000;
}
header nav li a
{
	float: left;
	color: black;
	text-decoration: none;
	font-size: 1rem;
	font-weight: 400;
	padding:12px;
	text-transform: uppercase;
    z-index: 1000;
}

header nav li a:hover
{
    display: inline-block;
    float: left;
	color: var(--white);
	text-decoration: none;
	font-size: 1rem;
	font-weight: 400;
	text-transform: uppercase;
    z-index: 1000;
    border-bottom: 2px solid black;
}

.content
{
    position: relative;
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    transition: 0.5s;
}
.content .textbox
{
    position: relative;
    max-width: 600px;
}
.content .textbox h2
{
    color: #333;
    font-size: 4em;
    line-height: 1.4em;
    font-weight: 500;
}

.content .textbox h2 span 
{
    color: #68573f;
    font-size: 1.7em;
    line-height: 1.2em;
    font-weight: 700;
    transition: 0.5s;
}
.content .textbox p
{
    color: #333;
}
.content .textbox a
{
    display: inline-block;
    font-size: 1.5em;
    margin-top: 20px;
    padding:8px 20px ;
    background: #68573f;
    color: #fff;
    border-radius: 40px;
    font-weight: 500;
    letter-spacing: 1px;
    text-decoration: none;
    transition: 0.5s;
}

.content .textbox a:hover
{
    transform: translateY(-5px);
}
.content .imgBox {
    width: 854px;
    display: flex;
    justify-content: flex-end;
    padding-right: 62px;
    margin-top: 82px;
    transition: 0.5s;
}
.content .imgBox img {
    max-width: 883px;
    margin-right: -55px;
    transition: 0.5s;
}

.content .imgBox img:hover {
    max-width: 883px;
    margin-right: -55px;
    transform: translateY(-15px);
}
.thumb
{
    position: absolute;
    left: 50%;
    bottom: 80px;
    transform: translateX(-50%);
    display: flex;
}
.thumb li
{
    list-style: none;
    display: inline-block;
    margin: 0 20px;
    cursor: pointer;
    transition: 0.5s;
}
.thumb li:hover
{
    transform: translateY(-15px);
}
.thumb li img
{
    max-width: 150px;
    z-index: 900;
}
.circle
{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: #68573f;
    clip-path: circle(600px at right 700px);
    z-index:-1;
    transition: 0.5s;
}
footer{
    background-color: #f7f7f7;
    box-sizing: border-box;
    position: relative;
    text-align: center;
    margin-top: 500px;
    z-index: 21;
    opacity: 1;
    width: 100%;
    min-height: 820px;
}
.footertext{
    color: #999;
}

.containerp
{
    display: flex;
    flex-direction:inherit;
    margin-top: 5rem;
}
.containerp .card
{
    position: relative;
    width: 320px;
    height: 450px;
    background: #2b2b2b;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.containerp .card::before,
.colorcircle
{
    content: '';
    position: absolute;
    top: 0;
    left:0;
    width: 100%;
    height: 100%;
    z-index: 10;
    clip-path: circle(150px at 80% 20%);
    transition: 0.5s ease-in-out;
}

.colorcircle{
    content: '';
    position: absolute;
    top: 0;
    left:0;
    width: 100%;
    height: 100%;
    z-index: 10;
    clip-path: circle(150px at 80% 20%);
    transition: 0.5s ease-in-out;
}


.containerp .card:hover::before,
.colorcircle
{
    clip-path: circle(300px at 80% -20%);

}

.containerp .card::after,
{
    content: ;
    position: absolute;
    top: 30%;
    left: -20%;
    font-size: 12em;
    font-weight: 800;
    font-style: italic;
    color: rgba(255, 255, 255, 0.04);
}

.item-a .card::after
{
    content: 'Faiss';
} 

.item-a .card .contentbox h2
{
    font-weight: 600;
    font-size: 1rem;
    letter-spacing: 1px;
    color: #fff;
}

.item-a .containerp .card .contentbox .size span:hover
{
    background: #ece6cd;
    color: #68573f;
}

.containerp .card .proImg
{
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    z-index: 10000;
    width: 100%;
    height: 220px ;
    transition: 0.5s;
}

.containerp .card:hover .proImg
{
    top: 10%;
    transform: translateY(0%);
}

.containerp .card .proImg img
{
    position: absolute;
    top: 45%;
    left: 50%;
    transform: translate(-50%, -50%) rotate(-25deg);
    width: 18rem;

}
.containerp .card .contentbox
{
    position: absolute;
    bottom: 0;
    width: 100%;
    height: 100px;
    text-align: center;
    transition: 1s;
    z-index: 10;
}
.containerp .card:hover .contentbox 
{
    height: 190px;

}
.containerp .card .contentbox h2
{
    font-weight: 600;
    letter-spacing: 1px;
    color: #fff;
}
.containerp .card .contentbox .size,
.containerp .card .contentbox .color
{
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 8px 20px;
    transition: 0.5s;
    opacity: 0;
    visibility: hidden;
}
.containerp .card:hover .contentbox .size
{
 opacity: 1;
 visibility:visible;
 transition: 0.5s;
}

.containerp .card:hover .contentbox .color
{
 opacity: 1;
 visibility:visible;
 transition: 0.5s;
}

.containerp .card .contentbox .size h3,
.containerp .card .contentbox .color h3
{
    color: #fff;
    font-weight: 100;
    font-size: 0.8rem;
    text-transform: uppercase;
    letter-spacing: 2px;
    margin-right: 10px;
}
.containerp .card .contentbox .size span
{
    width: 26px;
    height: 26px;
    text-align: center;
    line-height: 26px;
    font-size: 0.8rem;
    display: inline-block;
    color: #111;
    background: #fff;
    margin: 0 5px;
    transition: 0.5s;
    color: #111;
    border-radius: 0.5rem;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.containerp .card .contentbox .size span:hover
{
    background: #000;
    color: #fff;
}

.containerp .card .contentbox .color span:hover
{
    transform: translateY(-2px);
    transition: 0.5s;
}

.containerp .card .contentbox .color span
{
    width: 20px;
    height: 20px;
    border-radius: 50%;
    margin: 0 5px;
    cursor: pointer;
}

.containerp .card .contentbox a
{
    display: inline-block;
    padding: 10px 20px;
    background: #fff;
    border-radius: 4px;
    margin-top: 10px;
    text-decoration: none;
    font-weight: 600;
    color: #111;
    opacity: 0;
    transform: translateY(50px);
    transition: 0.5s;
}
.containerp .card:hover .contentbox a
{
    opacity: 1;
    transform: translateY(0px);
    transition-delay: 0.1s;
}

.ProductCard
{
    display: table;
    margin: 0 auto;
}
.ProductTitle
{
    margin-top: 4rem;
    font-size: 8rem;
    text-transform: uppercase;
    text-align: center;
}
li
{
    list-style: none;
}
.ProductSlider 
{
    display:flex;
    gap: 2rem;
}
ul .ProductSlider li
{
    display: inline;
}

.bvideo
{
    position: relative;
    margin-top: 4rem;
    right: 0;
    bottom: 0;
    z-index: 100;
    width: 100%;
}


@media (max-width: 991px)
{
    body {
        overflow-x: hidden;
    }
    header
    {
        padding: 20px;
    }
    header .logo 
    {
        max-width: 6rem;
    }
    header ul
    {
        display: none;
    }
    section 
    {
        padding: 40px;
    }
    .content
    {
        flex-direction: column;
        margin-top: 100px;
    }
    .content .textbox h2 
    {
        color: #333;
        font-size: 2.5em;
        margin-bottom: 15px;
    }
    .content .textbox {
        max-width: 100%; 
        text-align: center;
        flex-direction: column;
        justify-content: center;
        align-content: center;
        margin-bottom: 550px;
    }
    .circle {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: #68573f;
        clip-path: circle(500px at center bottom);
        z-index: -1;
    }
    .content .imgBox img {
        max-width: 794px;
        margin-right: -22px;
    }
    .content .imgBox {
        width: 854px;
        display: flex;
        justify-content: flex-end;
        padding-right: 62px;
        margin-top: -422px;
    }

    .thumb {
        position: absolute;
        left: 50%;
        top: 1100px;
        /* bottom: -6px; */
        transform: translateX(-50%);
        display: flex;
    }

    footer {
        background-color: #f7f7f7;
        box-sizing: border-box;
        display: flex;
        position: relative;
        text-align: center;
        z-index: -21;
        opacity: 1;
        width: 100%;
        margin-top: 428px;
        min-height: 840px;
        flex-direction: column;
    }
}

@media (max-width: 414px){

    body {
        overflow-x: hidden;
    }

    section {
        padding: 0px;
    }

    header .logo {
        max-width: 2.5rem;
    }

    .content .imgBox img {
        max-width: 333px;
        margin-right: 212px;
    }
    .content .textbox h2 {
        color: #333;
        font-size: 1.9em;
        /* margin-bottom: 15px; */
    }

    .content .textbox p {
        color: #333;
        font-size: 0.7em;
        padding: 6px;
    }
    .content .textbox {
        max-width: 100%;
        text-align: center;
        flex-direction: column;
        justify-content: center;
        align-content: center;
        margin-bottom: 700px;
    }

    .circle {
        position: absolute;
        top: 33px;
        left: 0;
        width: 100%;
        height: 100%;
        background: #68573f;
        clip-path: circle(270px at center bottom);
        z-index: -1;
    }

    .thumb {
        position: absolute;
        left: 50%;
        top: 366px;
        /* bottom: -6px; */
        transform: translateX(-50%);
        display: flex;
    }

    .thumb li img {
        max-width: 59px;
        z-index: 900;
    }

    .content .imgBox {
        width: 854px;
        display: flex;
        justify-content: flex-end;
        padding-right: 62px;
        margin-top: -602px;
    }

    .content .textbox a {
        display: inline-block;
        font-size: 1.5em;
        margin-top: 3px;
        padding: 8px 20px;
        background: #68573f;
        color: #fff;
        border-radius: 40px;
        font-weight: 500;
        letter-spacing: 1px;
        text-decoration: none;
        transition: 0.5s;
    }

    header nav {
        display: none;
    }
}

@media (max-width: 375px){

    body {
        overflow-x: hidden;
    }

    section {
        padding: 0px;
    }

    header .logo {
        max-width: 3rem;
    }

    .content .imgBox img {
        max-width: 344px;
        margin-right: 198px;
    }
    .content .textbox h2 {
        color: #333;
        font-size: 1.9em;
        /* margin-bottom: 15px; */
    }

    .content .textbox p {
        color: #333;
        font-size: 0.7em;
    }
    .content .textbox {
        max-width: 100%;
        text-align: center;
        flex-direction: column;
        justify-content: center;
        align-content: center;
        margin-bottom: 677px;
    }

    .circle {
        position: absolute;
        top: 11px;
        left: 0;
        width: 100%;
        height: 100%;
        background: #68573f;
        clip-path: circle(270px at center bottom);
        z-index: -1;
    }

    .thumb {
        position: absolute;
        left: 50%;
        top: 445px;
        bottom: -6px;
        transform: translateX(-50%);
        display: flex;
      }

      .thumb li img {
        max-width: 3.9rem;
        z-index: 900;
      }

    .content .imgBox {
        width: 854px;
        display: flex;
        justify-content: flex-end;
        padding-right: 62px;
        margin-top: -602px;
    }

    .ProductTitle {
        margin-top: 4rem;
        font-size: 1.5rem;
        text-transform: uppercase;
      }

      .ProductSlider {
        display: block;
        gap: 2rem;
      }
}



