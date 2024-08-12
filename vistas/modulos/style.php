<?php


header("Content-Type: text/css; charset: UTF-8");


?>

<!-- .w3l-homeblock3 .top-pic3{ -->
<!-- background: url(../assets/images/banner1.jpg) no-repeat 0px 0px; -->
<!-- background-size: cover;
padding: 20px;
border-radius: 8px;
height: 350px;
display: grid;
align-items: flex-end;
position: relative;
z-index: 1;
} -->


.w3l-homeblock3 .top-pic3 {
transition: .3s ease;
-webkit-transition: .3s ease;
-moz-transition: .3s ease;
-ms-transition: .3s ease;
-o-transition: .3s ease;
}

.w3l-homeblock3 .top-pic3:hover {
transform: translateY(-0.25rem);
box-shadow: rgba(46, 41, 51, 0.08) 0px 2px 4px, rgba(71, 63, 79, 0.16) 0px 5px 10px;
transition: .3s ease;
-webkit-transition: .3s ease;
-moz-transition: .3s ease;
-ms-transition: .3s ease;
-o-transition: .3s ease;
}

.w3l-homeblock3 .top-pic3:before {
position: absolute;
content: '';
top: 0;
bottom: 0;
left: 0;
right: 0;
background-image: linear-gradient(148.25deg, #12156a 3%, #a4323a 89.85%) !important;

opacity: .4;
border-radius: 8px;
z-index: -1;
}