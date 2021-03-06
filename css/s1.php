<?php
header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past
header("Content-type: text/css");
?>
/* DOM */
/*Generert kl. <?=date("H:i:s");?>*/
/*Test*/

html, body {
    margin: 0;
    padding: 0;
    background: url(/images/footerbg.png) repeat top left;
    font-family: Arial, Helvetica, Sans-Serif;
    font-size: 12px;
    color: #fff;
}
a {
    text-decoration: none;
    color: #ccc;
	-webkit-transition: all 0.3s ease;
	-moz-transition: all 0.3s ease;
	-o-transition: all 0.3s ease;
	transition: all 0.3s ease;
}

a:hover {
    color: #BBB;
}

.wrapper {
    width: 1000px;
    margin: 0 auto 0 auto;
}

h1 {
    margin: 0;
    padding: 7px 0px 5px 27px;
    font-size: 16px;
    text-transform: uppercase;
    font-weight: bold;
    color: #fff;
    border-bottom: 1px solid #000;
    box-shadow: 0px 1px 0px #313131;
    background: rgba(0,0,0,0.2);
}

h2 {
  margin: 0;
  padding: 4px 0px 3px 25px;
  font-size: 14px;
  text-transform: uppercase;
  font-weight: bold;
  color: #FFF;
  box-shadow: 0px 1px 0px #313131;
  border-top: 1px solid rgba(211, 211, 211, 0.12);
  padding: 6px;
  background: rgba(73, 73, 73, 0.29);
}

hr {
	border:none;
	border-bottom: 3px solid #111;
	margin:0;
}

table, tr, td, tbody {
    margin: 0;
    padding: 0;
    border-spacing: 0;
	max-width: 100%;
}

::selection {
background-color: #447788;
color: #fff;
}

/* Header */

#headerbg {
  width: 100%;
height: 175px;
padding-top: 110px;
background: #EBEBEB;
}

.light {
    background: url(/images/headerbg.png) repeat top left;
}
.dark {
    background: url(/images/headerbgdark.png) repeat top left;
}

#header {
	width: 1000px;
	height: 150px;
	margin: 0 auto 0 auto;
	background: url(/images/mikheader.png) no-repeat top left;
	border: solid 1px #FFFFFF;
	-moz-box-shadow: inset 0 0 10px #000000;
	-webkit-box-shadow: inset 0 0 10px #B8B8B8;
	box-shadow: inset 0 0 27px #AFAFAF;
	margin-top: -15px;
}

/* Hovedseksjonen */

section {
    width: 100%;
    background: url(/images/bg.png) repeat top left;
    float: left;
    border-bottom: 1px solid #333;
    box-shadow: 0px 2px 5px #060606;
}

#shadow {
    width: 1000px;
    height: 23px;
    background: url(/images/shadow.png) no-repeat top center;
}

#content {
    width: 1000px;
    background: url(/images/mainbg.png) repeat-y top center;
    float:left;
    padding-bottom: 50px;
}

#leftmenu, #rightmenu {
width: 186px;
float: left;
background: #181818;
border: 1px solid #2B2B2B;
}

#leftmenu ul, #rightmenu ul{
    width: 190px;
    padding: 0px 0px 10px 30px;
    font-size: 12px;
    line-height: 1.5;
}

#leftmenu li, #rightmenu li{
    list-style: none;
    color: #666;
}

#leftmenu a, #rightmenu a {
text-decoration: none;
color: #AFAFAF;
}

#leftmenu a:hover, #rightmenu a:hover{
    text-decoration: none;
    color: #999;
}

#main {
width: 600px;
margin: 0 10px 0 10px;
min-height: 600px;
background: #1a1a1a;
float: left;
border: 1px solid #2B2B2B;
}

/* Nyheter */

.news1, .news2 {
    margin-bottom: 15px;
}

.news2 td, .news1 td {
    width: 590px;
    background: #666;
    color: #111;
    font-size: 11px;
    text-align: right;
    padding-right: 10px;
    padding-top: 3px;
}

.news2 td[colspan], .news1 td[colspan] {
    text-align: left;
    background: #333;
    padding: 10px 0px 10px 10px;
	font-size: 12px;
	color: #ccc;
}

.news2 .linkstyle a, .news1 .linkstyle a {
    float: right;
    display: block;
    margin-left: 5px;
    text-decoration: none;
    color: #ccc;
}

.news2 span, .news1 span {
    width: 400px;
    color: #ccc;
    font-size: 12px;
}

.innlegsdato {
    clear:right;
    float:right;
    display: block;
}

.news2 b, .news1 b {
    float: left;
    color: #fff;
    font-size: 14px;
    text-transform: capitalize;
    padding: 7px 0px 10px 10px
}

input[type="button"], input[type="submit"], .button {
padding-left: 10px;
background-color: #3D3A3A;
background: #FFFFFF;
border: 1px solid #c0c0c0;
border-bottom: 1px solid #FFD3D3;
color: #61586a;
cursor: pointer;
/*display: inline-block;*/
font: bold 11px 'helvetica-neue', sans-serif;
margin: 20px;
padding: 5px;
position: relative;
text-decoration: none;
text-shadow: 0 1px 0 #fff;
vertical-align: top;
-moz-border-radius: 5px;
border-radius: 5px;
-moz-box-shadow: 0 1px 6px rgba(229,221,232,.9), inset 0 1px 0 rgba(249,249,249,.9);
-webkit-transition: all 0.5s ease-out;
}
input[type="submit"].endre:hover {
padding-left: 10px;
background-color: #000000;
background: #000000;
border: 1px solid #000000;
color: #FFFFFF;
cursor: pointer;
display: inline-block;
font: bold 11px 'helvetica-neue', sans-serif;
margin: 20px;
padding: 7px 18px;
position: relative;
text-decoration: none;
text-shadow: none;
vertical-align: top;
-moz-border-radius: 5px;
border-radius: 5px;
-moz-box-shadow: 0 1px 6px rgba(229,221,232,.9), inset 0 1px 0 rgba(249,249,249,.9);
-webkit-transition: all 0.5s ease-out;
}
input[type="text"]:not(.frelst){
  background-color: #aaa; 
  border: 1px; 
  height: 16px;
}

/* Funksjoner */

#main p, #main pre {
padding-left: 15px;
width: 560px;
line-height: 1.2;
padding: 10px;
}
.feil2 {
    width: 560px;
	background: #911B1B;
	text-align: center;
    color: #eee;
	font-weight: bold;
    padding-top: 4px;
    padding-bottom: 4px;
    margin-left: -8px;
    font-size: 11px;
    text-shadow: 0px -1px 0px rgba(0,0,0,0.4);
    border-radius: 4px;
}

.feil3 {
	padding: 8px 0px 8px 14px;
	margin-left: 12px;
	margin-bottom: 20px;
	text-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);
	background-color: rgb(34, 139, 34);
	border: 1px solid #eed3d7;
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	border-radius: 4px;
	color: #b94a48;
}

/*.feil {
    width: 400px;
	background: rgb(90,0,0);
    background-image: linear-gradient(top, rgb(140,0,0) 0%, rgb(90,0,0) 100%);
    background-image: -o-linear-gradient(top, rgb(140,0,0) 0%, rgb(90,0,0) 100%);
    background-image: -moz-linear-gradient(top, rgb(140,0,0) 0%, rgb(90,0,0) 100%);
    background-image: -webkit-linear-gradient(top, rgb(140,0,0) 0%, rgb(90,0,0) 100%);
    background-image: -ms-linear-gradient(top, rgb(140,0,0) 0%, rgb(90,0,0) 100%);
    background-image: -webkit-gradient(
        linear,
        left top,
        left bottom,
        color-stop(0, rgb(140,0,0)),
        color-stop(1, rgb(90,0,0))
    );
    color: #fff;
    padding-top: 12px;
    padding-bottom: 12px;
    margin-left: 15px;
    font-size: 12px;
    color: #110000;
    text-shadow: 0px 1px 0px rgb(140,0,0);
    border-radius: 15px;
}

.lykket {
width: 580px!important;
background: rgba(0,10,0,0.4);
padding-top: 12px;
padding-bottom: 12px;
margin-left: 0px;
font-size: 12px;
color: rgb(255, 255, 255);
background: #347510;
}
    color: #fff;
    padding-top: 12px;
    padding-bottom: 12px;
    margin-left: 15px;
    font-size: 12px;
    color: #001100;
    text-shadow: 0px 1px 0px rgb(0,140,0);
    border-radius: 15px;
}*/

.feil {
    width: 580px!important;
	background: rgba(10,0,0,0.4);
    padding-top: 12px;
    padding-bottom: 12px;
    margin-left: 0px;
    font-size: 12px;
    color: rgb(150,0,0);
}

.lykket {
    width: 580px!important;	
	background: rgba(0,10,0,0.4);    
	padding-top: 12px;   
	padding-bottom: 12px;   
	margin-left: 0px;  
	font-size: 12px;   
	color: rgb(0,150,0);
}

/* Footer */

footer {
    width: 1000px;
    margin: 0 auto 0 auto;
    clear: both;
    color: #444;
}

footer a {
    text-decoration: none;
    color: #999;
    font-weight: bold;
}

footer a:hover {
    color: #ccc;
}


footer #spot1 {
    width: 200px;
    height: 60px;
    padding-top: 40px;
    float:left;
}

footer #spot2 {
    width: 600px;
    height: 60px;
    padding-top: 40px;
    text-align: center;
    float:left;
}

footer #spot3 {
    width: 200px;
    height: 60px;
    padding-top: 40px;
    text-align: right;
    float:left;
}
/*Tabeller*/
.table, #garasje{
    border-collapse:collapse;
    width:100%;
    margin:auto;
}
.table th,.table td, #garasje th, #garasje td{
    border-right:1px solid #111;
    border-bottom:1px solid #111;
    color:#ccc;
    background:#222;
    padding: 3px;
	max-width: 100%;
}
.table th:last-child,.table td:last-child, #garasje th:last-child, #garasje td:last-child{
    border-right:none;
}
.table tbody tr:last-child th,.table tbody tr:last-child td, #garasje tbody tr:last-child th,#garasje tbody tr:last-child td{
    border-bottom:none;
}
.table td, #garasje .biler td{
    background:#666;
}
.table tr.c_1 td{
    background:#666;
}
.table tr.c_2 td, .table tr.c_3 td{
    background:#333;
}

.normrad1{
    background: #333 !important;
}

#bilfrakt input {
    margin: 5px 20px 5px 0px;
}

.table.flyplass {
    width: 400px!important;
}

.table.chat {
    margin-top: 10px;
}

.table.chat2 {
    width: 80px!important;
    padding: 10px!important;
}

.table.chat3 {
    width: 380px!important;
    padding: 10px!important;
}

.table.tema td {
    /*background: #5C5957;*/
    padding: 1px;
    margin: 1px;
}

.table.bj td {
    padding: 0px!important;
	text-align: center;
}

.table.bj {
	margin: 15px 0px 15px 0px;
}

.table.stats {
	width: 290px;
	margin-top: 15px;
}

#lotto th {
    background: #666!important;
}

#lotto th[colspan="2"] {
    background: #222!important;
}

.bank {
    margin-top: 15px;
    width: 400px;
}

.forumimg {
	width: 150px;
	padding: 0 !important;
}

.forumsvar {/*
	border-bottom: 1px solid #333;
	border-top: 1px solid #999;*/
}

.adminpanel {
	margin:0;
	padding:0;
	list-style: none;
	width: 100%;
	max-width: 100%;
	margin-top: 15px;
}

.adminpanel a li {
	width: 50%;
	background: #ccc;
	border-bottom: 1px solid #333;
	border-top: 1px solid #fff;
	margin: 0px auto 0px auto;
	padding-top: 7px;
	text-align: center;
	font-weight: normal;
	-webkit-transition: all 0.3s ease;
	-moz-transition: all 0.3s ease;
	-o-transition: all 0.3s ease;
	transition: all 0.3s ease;
}

.adminpanel a li:hover {
	background: #aaa;
}

.adminpanel a {
	color: #111;
}

.adminpanel a:first-child li {
	border-radius: 10px 10px 0 0;
	border-top: none;
}

.adminpanel a:last-child li {
	border-radius: 0 0 10px 10px;
	border-bottom: none;
}

.profiltekst{
	padding-top: 15px;
}

.profiltekst a{
	font-weight: bold;
	text-decoration: underline;
}

.ct1 {
	width: 580px;
	padding: 5px 10px 5px 10px;
	background: rgba(0,0,0,0.2);
	font-size: 10px;
	color: #999;
}
.ct2{
	width: 580px;
	padding: 5px 10px 5px 10px;
	font-size: 10px;
	color: #999;
}
.chattext {
	font-size: 12px;
	color: #fff;
	max-width: 580px;
	margin-top: 5px;
}
.systeminnboks {
padding: 10px;
margin: 10px;
width: auto;
height: auto;
border: 1px solid #742A2A;
border-radius: 13px;
background: #6B1A1A;
}
.systeminnboks a{
 -moz-transition: all 0.3s ease;
-o-transition: all 0.3s ease;
transition: all 0.3s ease;
}
.systemdato{
float: right;
height: 18px;
}
.faq_1 .faq_2 {
  -moz-border-radius: 3px; -webkit-border-radius: 3px; border-radius: 3px;
  border:1px dotted #666;
  background: #202020;
  color: #555555;
  margin: 10px 0 10px 0;
  text-align: justify;
}
.tema_wrap {
  color: #666666;
  width: 580px;
  margin: 5px auto 20px;
}

.forumhoyre{
width: 190px;
height: 270px;
border: 1px dotted;
position: absolute;
right: 260px;
top: 251px;
}
.forumstart{
border: 1px solid #000000;
display: inline-block;
width: 597px;
background-color: #292929;
}
/*FORUM*/
.object_one{ /*Bildet*/
display: block;
float: left;
margin: 5px;
width: 172px;
/*background-color: red;*/
}
.object_two{ /*Teksten*/
float: left;
display: block;
/*background-color: blue;*/
}
.object_three{ /*Dato*/
width: 401px;
text-align: center;
background-color: #474747;
}
.object_four{ /*Sitering*/
background-color: #987A2D;
display: block;
width: 401px;
}
/*Farger for statusfunksjon*/
.stat1{
  /*Admin*/
  color:#0ff;
}
.stat2{
  /*Moderator*/
  color:#0f0;
}
.stat3{
/*Forum-moderator*/
  color:#ff0;
}
.stat4{
/*Picmaker*/
  color:inherit;/*Legg inn en eller annen farge her :3*/
}
.stat5{
/*Vanlig spiller*/
  color:#fff;
}
.stat6{
/*D�d spiller*/
  color:#f00;
}

/* Pagination */
.pagination {
    text-align: center;
}
.pagination span, .pagination a {
  margin: 5px 2px 5px 2px;
  padding: 2px;
  color: #aaa;
  text-decoration: none;
  font-size: 10px;
  border: solid 1px #333333;
  display: inline-block;
}
.pagination a:hover, .pagination a.active:hover, .pagination a.active:hover {
background: darkolivegreen;
}
.pagination span { font-style: italic; }
.pagination a.active {
    background: darkolivegreen;
}
.pagination a.seperator {
    background: #161616;
    border-color: #262626;
    color: #555555;
}
.pagination a.seperator:hover {
    background: #504940;
    color: #111111;
    border-color: #504940;
}
/*Mikkal, du luringen din xD*/
#repro { 
position: fixed; 
width: 100%; 
height: 68px; 
top: 0px; 
background: rgba(54, 54, 54, 0.48); 
vertical-align: top; 
color: #FFF; 
-webkit-user-select: none; 
background: #333333; 
-moz-box-shadow: inset 0 0 10px #000000; 
-webkit-box-shadow: inset 0 0 10px #000000; 
box-shadow: inset 0 0 27px #000000; 
margin-top: -15px; 
z-index: 333; 
}
#repro .content {
width: 1068px;
margin: 0 auto;
height: 54px;
overflow: hidden;
font-size: 13px;
}
#logo {
    width: 40px;
    height: 54px;
    background: url("http://i.imgur.com/X9iWd.png") no-repeat center center;
    display: inline-block;
    text-indent: -9999px;
    vertical-align: top;
}
#logo:active {
    margin-top: 1px;
}
#repro .info {
    display: inline-block;
    position: relative;
    height: 54px;
    width: 380px;
    vertical-align: top;
    overflow: hidden;
}
#repro .art {
    width: 36px;
    height: 36px;
    position: relative;
    top: 8px;
    left: 9px;
    background-color: rgba(255,255,255,.2);
    box-shadow: 0 1px 2px rgba(0,0,0,.7);
    display: inline-block;
}
#repro .text {
    display: inline-block;
    position: relative;
    left: 15px;
    font-size: 90%;
    line-height: 15px;
    top: 3px;
}
#repro .track, #repro .artist {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    max-width: 395px;
}
#repro .artist {
    opacity: 0.8;
}
#play {
    display: inline-block;
    width: 40px;
    height: 54px;
    margin-left: 10px;
    position: relative;
    overflow: hidden;
}
#reproducir, #detener {
    cursor: pointer;
    background-repeat: no-repeat;
    background-position: center center;
    width: 40px;
    height: 54px;
    background-size: 28px;
    position: absolute;
    top: 0px;
    left: 0px;
    opacity: 0.8;
    -webkit-transition: opacity 250ms ease-in-out;
}
#reproducir:hover, #detener:hover {
    opacity: 1;
}
#reproducir:active, #detener:active {
    top: 1px;
}
#reproducir {
    background-image: url('http://i.imgur.com/pDVRy.png');
}
#detener {
    background-image: url('http://i.imgur.com/0QfQK.png');
}
#repro nav {
  display: inline-block;
  width: 1000px;
  margin-left: -5px;
  vertical-align: top;
  height: 54px;
}
#repro nav ul {
width: 100%;
display: table;
height: 54px;
table-layout: fixed;
border-right: 1px solid rgba(255, 255, 255, 0.14);
}
#repro nav ul li {
    display: table-cell;
    text-align: center;
    vertical-align: middle;
    border-right: 1px solid rgba(0, 0, 0, 0.26);
    border-left: 1px solid rgba(255, 255, 255, 0.14);
    line-height: 53px;
}
#repro nav a {
color: #FFF;
text-decoration: none;
font-size: 100%;
opacity: 0.8;
-webkit-transition: all 100ms ease-in-out;
display: block;
width: 100%;
height: 100%;
}
#repro nav a:hover {
    opacity: 1;
}
#repro nav a:active {
    box-shadow: inset 0 3px 15px 2px rgba(0, 0, 0, 0.4);
}

#main.site {
    width: 1088px;
    margin: 54px auto 0 auto;
    background: #FFF;
    min-height: 700px;
    box-shadow: 0 0 3px 1px #CCC;
    vertical-align: top;
}
#site, #sidebar {
    vertical-align: top;
    display: inline-block;
    min-height: 300px;
    padding: 10px;
}
#site {
    width: 748px;
}
#sidebar {
    width: 340px;
}
#write::-webkit-input-placeholder {
    color:    #222;
}
#write:-moz-placeholder {
    color:    #222;
}
#write::-moz-placeholder {
    color:    #222;
}
#write:-ms-input-placeholder {
    color:    #222;
}
#avatar {
width: 100%;
margin-bottom: -2px;
}
.table td {
border-right: 1px solid #111;
border-bottom: 1px solid #111;
color: #999;
border-right: 1px solid rgba(253, 253, 253, 0.03);
border-bottom: 1px solid rgba(255, 255, 255, 0.06);
color: #999;
padding: 11px;
background: #0C0B0B;
}
.shadow {
box-shadow: inset 0px 0px 20px rgba(0,0,0,0.9);
width: 95px;
height: 95px;
border-radius: 8px;
}
#brukerbilde{
  width: 95px;
  height: 95px;
  position:relative;
  z-index:0;
  border-radius: 8px;
}
.custom-menu {
  z-index:1000;
  position: absolute;
  background-color:#C0C0C0;
  border: 1px solid black;
  padding: 2px;
}
.custom-menu ul{
  list-style-type: none;
}