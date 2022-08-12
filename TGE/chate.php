<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE);
include 'config.php';

if(isset($_SESSION) == false){
    header('Location:DIR_loginFuncp');
}

$nomeUsuario = $_SESSION['userName'];

include TEMPLATE_BASE.'/head.php';
include TEMPLATE_BASE.'/nav.php';
?>
<link rel="stylesheet" href="<?php echo URL_BASE?>/csspaginas/chws.css" alt="">
</head>
<body>
    <div class="row">

    <div class="divs col l3 hide-on-med-and-down" id="left" >
<h1>22</h1>
    </div>

    <div class="divs col s12 l6" >    
    <iframe src="./chat/src/index.php" id="iframes" ></iframe>
    </div>

    <div class="divs col l3 hide-on-small-only " id="right">
    <ul class="collection hide-on-med-and-down">
    <li class="collection-item avatar">
      <img src="https://i.pinimg.com/736x/7a/65/f4/7a65f421acede5b0e5ae41b35d9a40c4.jpg" alt="" class="circle">
      <p>PatinhoDaShiroDF</p> 
    </li>
    <li class="collection-item avatar">
    <img src="https://i.pinimg.com/736x/7a/65/f4/7a65f421acede5b0e5ae41b35d9a40c4.jpg" alt="" class="circle">
      <p>PatinhoDaShiroDF</p> 
    </li>
    <li class="collection-item avatar">
    <img src="https://i.pinimg.com/736x/7a/65/f4/7a65f421acede5b0e5ae41b35d9a40c4.jpg" alt="" class="circle">
      <p>PatinhoDaShiroDF</p> 
    </li>
    <li class="collection-item avatar">
    <img src="https://i.pinimg.com/736x/7a/65/f4/7a65f421acede5b0e5ae41b35d9a40c4.jpg" alt="" class="circle">
      <p>PatinhoDaShiroDF</p>
    </li>
    <li class="collection-item avatar">
      <img src="https://i.pinimg.com/736x/7a/65/f4/7a65f421acede5b0e5ae41b35d9a40c4.jpg" alt="" class="circle">
      <p>PatinhoDaShiroDF</p> 
    </li>
    <li class="collection-item avatar">
    <img src="https://i.pinimg.com/736x/7a/65/f4/7a65f421acede5b0e5ae41b35d9a40c4.jpg" alt="" class="circle">
      <p>PatinhoDaShiroDF</p> 
    </li>
    <li class="collection-item avatar">
    <img src="https://i.pinimg.com/736x/7a/65/f4/7a65f421acede5b0e5ae41b35d9a40c4.jpg" alt="" class="circle">
      <p>PatinhoDaShiroDF</p> 
    </li>
    <li class="collection-item avatar">
    <img src="https://i.pinimg.com/736x/7a/65/f4/7a65f421acede5b0e5ae41b35d9a40c4.jpg" alt="" class="circle">
      <p>PatinhoDaShiroDF</p> 
    </li>
  </ul>
    </div>

    </div>
</body>