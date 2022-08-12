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

<link rel="stylesheet" href="<?php echo URL_BASE?>/csspaginas/chat.css" alt="">
</head>
<body>
<div class="divtotal row">

    <div class="ajustechat col l3 m3 hide-on-small-only grey darken-3">
<h1>dw</h1>
    </div>
    <div class="ajustechat col l6 m6 s12 black  " >
    <iframe src="./chat/src/index.php" id="iframes" ></iframe>
    </div>

<div class=" col l3 grey  m3 hide-on-small-only darken-3">
<ul class="collection">
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


  </ul>



  
</div>


</div>
       
</body>

            