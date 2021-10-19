 <!-- layout.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>GESTION DES VACATIONS</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
        <meta http-equiv="Content-Type" content="text/html,charset=UTF-8"/>
                
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assetss/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/styles.css">
        <link rel="stylesheet" href="assets/css/feuille.css">
        <link rel="stylesheet" href="assetss/css/styles.css">
        <link rel="stylesheet" href="assetss/css/feuille.css">

<style type="text/css">    

#menu-demo2, #menu-demo2 ul{
padding:0;
margin:0;
list-style:none;
text-align:center;
}
#menu-demo2 li{
display:inline-block;
position:relative;
border-radius:8px 8px 0 0;
}
#menu-demo2 ul li{
display:inherit;
border-radius:0;
}
#menu-demo2 ul li:hover{
border-radius:0;
}
#menu-demo2 ul li:last-child{
border-radius:0 0 8px 8px;
}
#menu-demo2 ul{
position:absolute;
z-index: 1000;
max-height:0;
left: 0;
right: 0;
overflow:hidden;
-moz-transition: .8s all .3s;
-webkit-transition: .8s all .3s;
transition: .8s all .3s;
}
#menu-demo2 li:hover ul{
max-height:30em;
}
/* background des liens menus */
#menu-demo2 li:first-child{
background-color: #65537A;
background-image:-webkit-linear-gradient(top, #65537A 0%, #2A2333 100%);
background-image:linear-gradient(to bottom, #65537A 0%, #2A2333 100%);
}
#menu-demo2 li:nth-child(2){
background-color: #729EBF;
background-image: -webkit-linear-gradient(top, #729EBF 0%, #333A40 100%);
background-image:linear-gradient(to bottom, #729EBF 0%, #333A40 100%);
}
#menu-demo2 li:nth-child(3){
background-color: #F6AD1A;
background-image:-webkit-linear-gradient(top, #F6AD1A 0%, #9F391A 100%);
background-image:linear-gradient(to bottom, #FFFF00 0%, #9F391A 100%);
}
#menu-demo2 li:nth-child(4){
background-color: #FAF0C5;
background-image: -webkit-linear-gradient(top, #FEFEE2 0%, #333A40 100%);
background-image:linear-gradient(to bottom, #FAF0C5 0%, #333A40 100%);
}
#menu-demo2 li:nth-child(5){
background-color: #79F8F8;
background-image:-webkit-linear-gradient(top, #0000FF 0%, #0000FF 100%);
background-image:linear-gradient(to bottom, #0000FF 0%, #9F391A 100%);
}
#menu-demo2 li:nth-child(6){
background-color: #00FF00;
background-image: -webkit-linear-gradient(top, #7E3300 0%, #333A40 100%);
background-image:linear-gradient(to bottom, #DF6D14 0%, #00FFFF 100%);
}
#menu-demo2 li:nth-child(7){
background-color: #D2CAEC;
background-image:-webkit-linear-gradient(top, #25FDE9 0%, #9F391A 100%);
background-image:linear-gradient(to bottom, #25FDE9 0%, #9F391A 100%);
}
#menu-demo2 li:last-child{
background-color: #CFFF6A;
background-image:-webkit-linear-gradient(top, #CFFF6A 0%, #677F35 100%);
background-image:linear-gradient(to bottom, #CFFF6A 0%, #677F35 100%);
}
/* background des liens sous menus */
#menu-demo2 li:first-child li{
background:#2A2333;
}
#menu-demo2 li:nth-child(2) li{
background:#333A40;
}
#menu-demo2 li:nth-child(3) li{
background:#F3D617;
}
#menu-demo2 li:nth-child(4) li{
background:#A76726;
}
#menu-demo2 li:nth-child(5) li{
background:#0000FF;
}
#menu-demo2 li:nth-child(6) li{
background:#333A40;
}
#menu-demo2 li:nth-child(7) li{
background:#00000F;
}
#menu-demo2 li:last-child li{
background:#677F35;
}
/* background des liens menus et sous menus au survol */
#menu-demo2 li:first-child:hover, #menu-demo2 li:first-child li:hover{
background:#65537A;
}
#menu-demo2 li:nth-child(2):hover, #menu-demo2 li:nth-child(2) li:hover{
background:#729EBF;
}
#menu-demo2 li:nth-child(3):hover, #menu-demo2 li:nth-child(3) li:hover{
background:#F6AD1A;
}
#menu-demo2 li:nth-child(2):hover, #menu-demo2 li:nth-child(2) li:hover{
background:#729EBF;
}
#menu-demo2 li:nth-child(3):hover, #menu-demo2 li:nth-child(3) li:hover{
background:#F6AD1A;
}
#menu-demo2 li:nth-child(4):hover, #menu-demo2 li:nth-child(2) li:hover{
background:#729EBF;
}
#menu-demo2 li:nth-child(5):hover, #menu-demo2 li:nth-child(3) li:hover{
background:#F6AD1A;
}
#menu-demo2 li:nth-child(6):hover, #menu-demo2 li:nth-child(2) li:hover{
background:#729EBF;
}
#menu-demo2 li:nth-child(7):hover, #menu-demo2 li:nth-child(3) li:hover{
background:#F6AD1A;
}
#menu-demo2 li:last-child:hover, #menu-demo2 li:last-child li:hover{
background:#CFFF6A;
}
/* les a href */
#menu-demo2 a{
text-decoration:none;
display:block;
padding:8px 32px;
color:#fff;
font-family:arial;
}
#menu-demo2 ul a{
padding:8px 0;
}
#menu-demo2 li:hover li a{
color:#fff;
text-transform:inherit;
}
#menu-demo2 li:hover a, #menu-demo2 li li:hover a{
color:#000;
}

</style>
    
</head>
<body>
  <div class="container">
    @yield('content')
  </div>
  <script src="{{ asset('js/app.js') }}" type="text/js"></script>
</body>
</html>
