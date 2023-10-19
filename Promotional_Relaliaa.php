<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ROMO International - Promotional</title>
    <link rel="icon" type="image/x-icon" href="./img/since 1978 (1).png">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- link file css -->
    <link rel="stylesheet" href="./style.css">
    <style>
      *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins" , sans-serif;
}
body{
  min-height: 100vh;
  width: 100%;
  background: #FCFCFC;
}
footer{
  /* position: fixed; */
  background: #1C1E22;
  width: 100%;
  bottom: 0;
  left: 0;
}
footer::before{
  content: '';
  position: absolute;
  left: 0;
  /* top: 80px; */
  height: 1px;
  width: 100%;
  background: #AFAFB6;
}
footer .content{
  max-width: 1250px;
  margin: auto;
  padding: 30px 40px 40px 40px;
}
footer .content .top{
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin-bottom: 50px;
}
.content .top .logo-details{
  color: #fff;
  font-size: 30px;
}
.content .top .media-icons{
  display: flex;
}
.content .top .media-icons a{
  height: 40px;
  width: 40px;
  margin: 0 8px;
  border-radius: 50%;
  text-align: center;
  line-height: 40px;
  color: #fff;
  font-size: 17px;
  text-decoration: none;
  transition: all 0.4s ease;
}
.top .media-icons a:nth-child(1){
  background: green;
}
.top .media-icons a:nth-child(1):hover{
  color: #4267B2;
  background: #fff;
}
.top .media-icons a:nth-child(2){
  background: #1DA1F2;
}
.top .media-icons a:nth-child(2):hover{
  color: #1DA1F2;
  background: #fff;
}
.top .media-icons a:nth-child(3){
  background: #E1306C;
}
.top .media-icons a:nth-child(3):hover{
  color: #E1306C;
  background: #fff;
}
.top .media-icons a:nth-child(4){
  background: #0077B5;
}
.top .media-icons a:nth-child(4):hover{
  color: #0077B5;
  background: #fff;
}
.top .media-icons a:nth-child(5){
  background: #FF0000;
}
.top .media-icons a:nth-child(5):hover{
  color: #FF0000;
  background: #fff;
}
footer .content .link-boxes{
  width: 100%;
  display: flex;
  justify-content: space-between;
}
footer .content .link-boxes .box{
  width: calc(100% / 5 - 10px);
}
.content .link-boxes .box .link_name{
  color: #fff;
  font-size: 18px;
  font-weight: 400;
  margin-bottom: 10px;
  position: relative;
}
.link-boxes .box .link_name::before{
  content: '';
  position: absolute;
  left: 0;
  bottom: -2px;
  height: 2px;
  width: 35px;
  background: #fff;
}
.content .link-boxes .box li{
  margin: 6px 0;
  list-style: none;
}
.content .link-boxes .box li a{
  color: #fff;
  font-size: 14px;
  font-weight: 400;
  text-decoration: none;
  opacity: 0.8;
  transition: all 0.4s ease
}
.content .link-boxes .box li a:hover{
  opacity: 1;
  text-decoration: underline;
}
.content .link-boxes .input-box{
  margin-right: 55px;
}
.link-boxes .input-box input{
  height: 40px;
  width: calc(100% + 55px);
  outline: none;
  border: 2px solid #AFAFB6;
  background: #1C1E22;
  border-radius: 4px; 
  padding: 0 15px;
  font-size: 15px;
  color: #fff;
  margin-top: 5px;
}
.link-boxes .input-box input::placeholder{
  color: #AFAFB6;
  font-size: 16px;
}
.link-boxes .input-box input[type="button"]{
  background: #fff;
  color: #1C1E22;
  border: none;
  font-size: 18px;
  font-weight: 500;
  margin: 4px 0;
  opacity: 0.8;
  cursor: pointer;
  transition: all 0.4s ease;
}
.input-box input[type="button"]:hover{
  opacity: 1;
}
footer .bottom-details{
  width: 100%;
  background: #1C1E22;
}
footer .bottom-details .bottom_text{
  max-width: 1250px;
  margin: auto;
  padding: 20px 40px;
  display: flex;
  justify-content: space-between;
}
.bottom-details .bottom_text span,
.bottom-details .bottom_text a{
  font-size: 14px;
  font-weight: 300;
  color: #fff;
  opacity: 0.8;
  text-decoration: none;
}
.bottom-details .bottom_text a:hover{
  opacity: 1;
  text-decoration: underline;
}
.bottom-details .bottom_text a{
  margin-right: 10px;
}
@media (max-width: 900px) {
  footer .content .link-boxes{
    flex-wrap: wrap;
  }
  footer .content .link-boxes .input-box{
    width: 40%;
    margin-top: 10px;
  }
}
@media (max-width: 700px){
  footer{
    position: relative;
  }
  .content .top .logo-details{
    font-size: 26px;
  }
  .content .top .media-icons a{
    height: 35px;
    width: 35px;
    font-size: 14px;
    line-height: 35px;
  }
  footer .content .link-boxes .box{
    width: calc(100% / 3 - 10px);
  }
  footer .content .link-boxes .input-box{
    width: 60%;
  }
  .bottom-details .bottom_text span,
  .bottom-details .bottom_text a{
    font-size: 12px;
  }
}
@media (max-width: 520px){
  footer::before{
    top: 145px;
  }
  footer .content .top{
    flex-direction: column;
  }
  .content .top .media-icons{
    margin-top: 16px;
  }
  footer .content .link-boxes .box{
    width: calc(100% / 2 - 10px);
  }
  footer .content .link-boxes .input-box{
    width: 100%;
  }
}
    </style>
    <style>
      .service-grid {
  background: #fcfcfc;
}
 .service-title h4 {
  position: relative;
  display: inline-block;
}
.service-icon {
  position: relative;
}
.service-title p {
  padding: 0 190px;
  margin-bottom: 10px;
}
.about-info-text h2 {
  margin-bottom: 23px;
  text-transform: capitalize;
  font-weight: 700;
  line-height: .9;
}
.about-info-text p {
  padding: 0 100px;
  font-size: 18px;
  margin-bottom: 26px;
    position: relative;
}
.about-content p {
  margin-bottom: 0;
}
.about-info-text a {
  margin-bottom: 20px;
    position: relative;
}
.service-icon i {
  font-size: 40px;
  color: #e8bc00;
  margin-bottom: 20px;
  display: inline-block;
}
.service-wrap {
  border: 1px solid #e6e6e6;
  padding: 50px 30px;
    position: relative;
}

.service-wrap p{
    position: relative;
}

.service-wrap:hover {
  /* background-image: url(./img/0.jpg); */
  background-color: #ffaa17;
  background-size: cover;
  background-position: center center;
  background-attachment: local;
  transition: all .5s;
}

.service-wrap:hover:before {
  background: rgba(0, 0, 0, 0.2901960784313726);
  position: absolute;
  height: 100%;
  width: 100%;
  left: 0px;
  content: "";
  top: 0;
  opacity: 1;
}

.service-wrap:hover h4,.service-wrap:hover p{
  color: #fff;
}
.service-wrap h4 {
  font-weight: 600;
  color: #1e2331;
  margin-bottom: 17px;
  font-size: 18px;
  text-transform: capitalize;
    position: relative;
}
.service-wrap a {
  font-size: 14px;
  font-weight: 600;
    position: relative;

}
    </style>
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap');

body {
    font-family: "Poppins", sans-serif;
    color: #444444;
}

a,
a:hover {
    text-decoration: none;
    color: inherit;
}

.section-products {
    padding: 80px 0 54px;
}

.section-products .header {
    margin-bottom: 50px;
}

.section-products .header h3 {
    font-size: 1rem;
    color: #fe302f;
    font-weight: 500;
}

.section-products .header h2 {
    font-size: 2.2rem;
    font-weight: 400;
    color: #444444; 
}

.section-products .single-product {
    margin-bottom: 26px;
}

.section-products .single-product .part-1 {
    position: relative;
    height: 290px;
    max-height: 290px;
    margin-bottom: 20px;
    overflow: hidden;
}

.section-products .single-product .part-1::before {
		position: absolute;
		content: "";
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		z-index: -1;
		transition: all 0.3s;
}

.section-products .single-product:hover .part-1::before {
		transform: scale(1.2,1.2) rotate(5deg);
}

.section-products #product-1 .part-1::before {
    background: url("./img/Picsart_23-09-28_15-03-39-416.jpg") center no-repeat ;
    background-size: cover ;
		transition: all 0.3s;

  
}

.section-products #product-2 .part-1::before {
    background: url("./img/Picsart_23-09-28_15-02-52-808\ \(1\).jpg") no-repeat center;
    background-size: cover;
}

.section-products #product-3 .part-1::before {
    background: url("./img/Picsart_23-09-28_15-03-16-841\ \(1\).jpg") no-repeat center;
    background-size: cover;
}

.section-products #product-4 .part-1::before {
    background: url("./img/Picsart_23-09-28_15-23-44-293.jpg") no-repeat center;
    background-size: cover;
}

/* second line */

.section-products #product-5 .part-1::before {
    background: url("./img/Picsart_23-09-28_15-23-15-104.jpg") center no-repeat ;
    background-size: cover ;
		transition: all 0.3s;

  
}

.section-products #product-6 .part-1::before {
    background: url("./img/Picsart_23-09-28_15-32-49-097.jpg") no-repeat center;
    background-size: cover;
}

.section-products #product-7 .part-1::before {
    background: url("./img/Picsart_23-09-28_17-17-36-758.jpg") no-repeat center;
    background-size: cover;
}

.section-products #product-8 .part-1::before {
    background: url("./img/Picsart_23-09-28_15-31-59-899.jpg") no-repeat center;
    background-size: cover;
}

.section-products #product-9 .part-1::before {
    background: url("./img/royal-blue-plain-tshirt-mydesignation-unisex-image.jpg") no-repeat center;
    background-size: cover;
}
.section-products #product-10 .part-1::before {
    background: url("./img/51UOxBsmkjL._AC_UY1100_.jpg") no-repeat center;
    background-size: cover;
}

.section-products #product-11 .part-1::before {
    background: url("./img/golden-yellow-plain-tshirt-mydesignation.jpg") no-repeat center;
    background-size: cover;
}

.section-products #product-12 .part-1::before {
    background: url("./img/purple-plain-tshirt-mydesignation-unisex-image.jpg") no-repeat center;
    background-size: cover;
}

.section-products #product-13 .part-1::before {
    background: url("./img/Sports-Cap.jpg") no-repeat center;
    background-size: cover;
}

.section-products #product-14 .part-1::before {
    background: url("./img/s-l225.jpg") no-repeat center;
    background-size: cover;
}

.section-products #product-15 .part-1::before {
    background: url("./img/images\ \(1\).jpg") no-repeat center;
    background-size: cover;
}

.section-products #product-16 .part-1::before {
    background: url("./img/Hdaadddf88dfe4b8f84dbd6cd0e538322R.jpg") no-repeat center;
    background-size: cover;
}


.section-products .single-product .part-1 .discount,
.section-products .single-product .part-1 .new {
    position: absolute;
    top: 15px;
    left: 20px;
    color: #ffffff;
    background-color: #fe302f;
    padding: 2px 8px;
    text-transform: uppercase;
    font-size: 0.85rem;
}

.section-products .single-product .part-1 .new {
    left: 0;
    background-color: #444444;
}

.section-products .single-product .part-1 ul {
    position: absolute;
    bottom: -41px;
    left: 20px;
    margin: 0;
    padding: 0;
    list-style: none;
    opacity: 0;
    transition: bottom 0.5s, opacity 0.5s;
}

.section-products .single-product:hover .part-1 ul {
    bottom: 30px;
    opacity: 1;
}

.section-products .single-product .part-1 ul li {
    display: inline-block;
    margin-right: 4px;
}

.section-products .single-product .part-1 ul li a {
    display: inline-block;
    width: 40px;
    height: 40px;
    line-height: 40px;
    background-color: #ffffff;
    color: #444444;
    text-align: center;
    box-shadow: 0 2px 20px rgb(50 50 50 / 10%);
    transition: color 0.2s;
}

.section-products .single-product .part-1 ul li a:hover {
    color: #fe302f;
}

.section-products .single-product .part-2 .product-title {
    font-size: 1rem;
}

.section-products .single-product .part-2 h4 {
    display: inline-block;
    font-size: 1rem;
}

.section-products .single-product .part-2 .product-old-price {
    position: relative;
    padding: 0 7px;
    margin-right: 2px;
    opacity: 0.6;
}

.section-products .single-product .part-2 .product-old-price::after {
    position: absolute;
    content: "";
    top: 50%;
    left: 0;
    width: 100%;
    height: 1px;
    background-color: #444444;
    transform: translateY(-50%);
}
    </style>


<style>


.text-blk {
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 0px;
  margin-left: 0px;
  line-height: 25px;
  padding-top: 0px;
  padding-right: 0px;
  padding-bottom: 0px;
  padding-left: 0px;
}

.responsive-cell-block {
  min-height: 75px;
}

.responsive-container-block {
  min-height: 75px;
  height: fit-content;
  width: 100%;
  padding-top: 10px;
  padding-right: 10px;
  padding-bottom: 10px;
  padding-left: 10px;
  display: flex;
  flex-wrap: wrap;
  margin-top: 0px;
  margin-right: auto;
  margin-bottom: 0px;
  margin-left: auto;
  justify-content: flex-start;
}

.responsive-container-block.bigContainer {
  padding-top: 0px;
  padding-right: 50px;
  padding-bottom: 0px;
  padding-left: 50px;
  margin-top: 50px;
  margin-right: 0px;
  margin-bottom: 50px;
  margin-left: 0px;
}

.responsive-container-block.Container {
  max-width: 1320px;
  justify-content: space-evenly;
  align-items: center;
  padding-top: 10px;
  padding-right: 10px;
  padding-bottom: 0px;
  padding-left: 10px;
  position: relative;
  overflow-x: hidden;
  overflow-y: hidden;
  margin-top: 0px;
  margin-right: auto;
  margin-bottom: 0px;
  margin-left: auto;
}

.mainImg {
  width: 100%;
  height: 800px;
  object-fit: cover;
}

.blueDots {
  position: absolute;
  top: 150px;
  right: 15%;
  z-index: -1;
  left: auto;
  width: 80%;
  height: 500px;
  object-fit: cover;
}

.imgContainer {
  position: relative;
  width: 48%;
}

.responsive-container-block.textSide {
  width: 48%;
  padding-top: 0px;
  padding-right: 0px;
  padding-bottom: 0px;
  padding-left: 0px;
  z-index: 100;
}

.text-blk.heading {
  font-size: 36px;
  line-height: 40px;
  font-weight: 700;
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 20px;
  margin-left: 0px;
}

.text-blk.subHeading {
  font-size: 18px;
  line-height: 26px;
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 20px;
  margin-left: 0px;
}

.cardImg {
  width: 31px;
  height: 31px;
}

.cardImgContainer {
  padding-top: 20px;
  padding-right: 20px;
  padding-bottom: 20px;
  padding-left: 20px;
  border-top-width: 1px;
  border-right-width: 1px;
  border-bottom-width: 1px;
  border-left-width: 1px;
  border-top-style: solid;
  border-right-style: solid;
  border-bottom-style: solid;
  border-left-style: solid;
  border-top-color: rgb(229, 229, 229);
  border-right-color: rgb(229, 229, 229);
  border-bottom-color: rgb(229, 229, 229);
  border-left-color: rgb(229, 229, 229);
  border-image-source: initial;
  border-image-slice: initial;
  border-image-width: initial;
  border-image-outset: initial;
  border-image-repeat: initial;
  border-top-left-radius: 10px;
  border-top-right-radius: 10px;
  border-bottom-right-radius: 10px;
  border-bottom-left-radius: 10px;
  margin-top: 0px;
  margin-right: 10px;
  margin-bottom: 0px;
  margin-left: 0px;
}

.responsive-cell-block.wk-desk-6.wk-ipadp-6.wk-tab-12.wk-mobile-12 {
  display: flex;
  justify-content: center;
  align-items: center;
  padding-top: 10px;
  padding-right: 15px;
  padding-bottom: 10px;
  padding-left: 0px;
}

.text-blk.cardHeading {
  font-size: 18px;
  line-height: 28px;
  font-weight: 700;
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 10px;
  margin-left: 0px;
}

.text-blk.cardSubHeading {
  color: rgb(153, 153, 153);
  line-height: 22px;
}

.explore {
  font-size: 18px;
  line-height: 20px;
  font-weight: 700;
  color: white;
  background-color: rgb(244, 152, 146);
  box-shadow: rgba(244, 152, 146, 0.25) 0px 10px 20px;
  border-top-left-radius: 10px;
  border-top-right-radius: 10px;
  border-bottom-right-radius: 10px;
  border-bottom-left-radius: 10px;
  cursor: pointer;
  border-top-width: 0px;
  border-right-width: 0px;
  border-bottom-width: 0px;
  border-left-width: 0px;
  border-top-style: initial;
  border-right-style: initial;
  border-bottom-style: initial;
  border-left-style: initial;
  border-top-color: initial;
  border-right-color: initial;
  border-bottom-color: initial;
  border-left-color: initial;
  border-image-source: initial;
  border-image-slice: initial;
  border-image-width: initial;
  border-image-outset: initial;
  border-image-repeat: initial;
  padding-top: 17px;
  padding-right: 40px;
  padding-bottom: 17px;
  padding-left: 40px;
}

.explore:hover {
  background-image: initial;
  background-position-x: initial;
  background-position-y: initial;
  background-size: initial;
  background-repeat-x: initial;
  background-repeat-y: initial;
  background-attachment: initial;
  background-origin: initial;
  background-clip: initial;
  background-color: rgb(244, 182, 176);
}

#ixvck {
  margin-top: 60px;
  margin-right: 0px;
  margin-bottom: 0px;
  margin-left: 0px;
}

.redDots {
  position: absolute;
  bottom: -350px;
  right: -100px;
  height: 500px;
  width: 400px;
  object-fit: cover;
  top: auto;
}

@media (max-width: 1024px) {
  .responsive-container-block.Container {
    position: relative;
    align-items: flex-start;
    justify-content: center;
  }

  .mainImg {
    bottom: 0px;
  }

  .imgContainer {
    position: absolute;
    bottom: 0px;
    left: 0px;
    height: auto;
    width: 60%;
  }

  .responsive-container-block.textSide {
    margin-top: 0px;
    margin-right: 0px;
    margin-bottom: 0px;
    margin-left: auto;
    width: 70%;
  }

  .responsive-container-block.Container {
    flex-direction: column-reverse;
  }

  .imgContainer {
    position: relative;
    width: auto;
    margin-top: 0px;
    margin-right: auto;
    margin-bottom: 0px;
    margin-left: auto;
  }

  .responsive-container-block.textSide {
    margin-top: 0px;
    margin-right: 0px;
    margin-bottom: 20px;
    margin-left: 0px;
    width: 100%;
  }

  .responsive-container-block.Container {
    flex-direction: row-reverse;
  }

  .responsive-container-block.Container {
    flex-direction: column-reverse;
  }
}

@media (max-width: 768px) {
  .responsive-container-block.textSide {
    width: 100%;
    align-items: center;
    flex-direction: column;
    justify-content: center;
  }

  .text-blk.subHeading {
    text-align: center;
    font-size: 17px;
    max-width: 520px;
  }

  .text-blk.heading {
    text-align: center;
  }

  .imgContainer {
    opacity: 0.8;
  }

  .imgContainer {
    height: 500px;
  }

  .imgContainer {
    width: 30px;
  }

  .responsive-container-block.Container {
    flex-direction: column-reverse;
  }

  .responsive-container-block.Container {
    flex-wrap: nowrap;
  }

  .responsive-container-block.textSide {
    width: 100%;
    margin-top: 0px;
    margin-right: 0px;
    margin-bottom: 20px;
    margin-left: 0px;
  }

  .imgContainer {
    width: 90%;
  }

  .imgContainer {
    height: 450px;
    margin-top: 5px;
    margin-right: 33.9062px;
    margin-bottom: 0px;
    margin-left: 33.9062px;
  }

  .redDots {
    display: none;
  }

  .explore {
    font-size: 16px;
    line-height: 14px;
  }
}

@media (max-width: 500px) {
  .imgContainer {
    position: static;
    height: 450px;
  }

  .mainImg {
    height: 100%;
  }

  .blueDots {
    width: 100%;
    left: 0px;
    top: 0px;
    bottom: auto;
    right: auto;
  }

  .imgContainer {
    width: 100%;
  }

  .responsive-container-block.textSide {
    margin-top: 0px;
    margin-right: 0px;
    margin-bottom: 0px;
    margin-left: 0px;
  }

  .responsive-container-block.Container {
    padding-top: 0px;
    padding-right: 0px;
    padding-bottom: 0px;
    padding-left: 0px;
    overflow-x: visible;
    overflow-y: visible;
  }

  .responsive-container-block.bigContainer {
    padding-top: 10px;
    padding-right: 20px;
    padding-bottom: 10px;
    padding-left: 20px;
    padding: 0 30px 0 30px;
  }

  .redDots {
    display: none;
  }

  .text-blk.subHeading {
    font-size: 16px;
    line-height: 23px;
  }

  .text-blk.heading {
    font-size: 28px;
    line-height: 28px;
  }

  .responsive-container-block.textSide {
    margin-top: 40px;
    margin-right: 0px;
    margin-bottom: 50px;
    margin-left: 0px;
  }

  .imgContainer {
    margin-top: 5px;
    margin-right: auto;
    margin-bottom: 0px;
    margin-left: auto;
    width: 100%;
    position: relative;
  }

  .explore {
    padding-top: 17px;
    padding-right: 0px;
    padding-bottom: 17px;
    padding-left: 0px;
    width: 100%;
  }

  #ixvck {
    width: 90%;
    margin-top: 40px;
    margin-right: 0px;
    margin-bottom: 0px;
    margin-left: 0px;
    font-size: 15px;
  }

  .blueDots {
    bottom: 0px;
    width: 100%;
    height: 80%;
    top: 10%;
  }

  .text-blk.cardHeading {
    font-size: 16px;
    margin-top: 0px;
    margin-right: 0px;
    margin-bottom: 8px;
    margin-left: 0px;
    line-height: 25px;
  }

  .responsive-cell-block.wk-desk-6.wk-ipadp-6.wk-tab-12.wk-mobile-12 {
    padding-top: 10px;
    padding-right: 0px;
    padding-bottom: 10px;
    padding-left: 0px;
  }
}


*,
*:before,
*:after {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

body {
  margin: 0;
}

.wk-desk-1 {
  width: 8.333333%;
}

.wk-desk-2 {
  width: 16.666667%;
}

.wk-desk-3 {
  width: 25%;
}

.wk-desk-4 {
  width: 33.333333%;
}

.wk-desk-5 {
  width: 41.666667%;
}

.wk-desk-6 {
  width: 50%;
}

.wk-desk-7 {
  width: 58.333333%;
}

.wk-desk-8 {
  width: 66.666667%;
}

.wk-desk-9 {
  width: 75%;
}

.wk-desk-10 {
  width: 83.333333%;
}

.wk-desk-11 {
  width: 91.666667%;
}

.wk-desk-12 {
  width: 100%;
}

@media (max-width: 1024px) {
  .wk-ipadp-1 {
    width: 8.333333%;
  }

  .wk-ipadp-2 {
    width: 16.666667%;
  }

  .wk-ipadp-3 {
    width: 25%;
  }

  .wk-ipadp-4 {
    width: 33.333333%;
  }

  .wk-ipadp-5 {
    width: 41.666667%;
  }

  .wk-ipadp-6 {
    width: 50%;
  }

  .wk-ipadp-7 {
    width: 58.333333%;
  }

  .wk-ipadp-8 {
    width: 66.666667%;
  }

  .wk-ipadp-9 {
    width: 75%;
  }

  .wk-ipadp-10 {
    width: 83.333333%;
  }

  .wk-ipadp-11 {
    width: 91.666667%;
  }

  .wk-ipadp-12 {
    width: 100%;
  }
}

@media (max-width: 768px) {
  .wk-tab-1 {
    width: 8.333333%;
  }

  .wk-tab-2 {
    width: 16.666667%;
  }

  .wk-tab-3 {
    width: 25%;
  }

  .wk-tab-4 {
    width: 33.333333%;
  }

  .wk-tab-5 {
    width: 41.666667%;
  }

  .wk-tab-6 {
    width: 50%;
  }

  .wk-tab-7 {
    width: 58.333333%;
  }

  .wk-tab-8 {
    width: 66.666667%;
  }

  .wk-tab-9 {
    width: 75%;
  }

  .wk-tab-10 {
    width: 83.333333%;
  }

  .wk-tab-11 {
    width: 91.666667%;
  }

  .wk-tab-12 {
    width: 100%;
  }
}

@media (max-width: 500px) {
  .wk-mobile-1 {
    width: 8.333333%;
  }

  .wk-mobile-2 {
    width: 16.666667%;
  }

  .wk-mobile-3 {
    width: 25%;
  }

  .wk-mobile-4 {
    width: 33.333333%;
  }

  .wk-mobile-5 {
    width: 41.666667%;
  }

  .wk-mobile-6 {
    width: 50%;
  }

  .wk-mobile-7 {
    width: 58.333333%;
  }

  .wk-mobile-8 {
    width: 66.666667%;
  }

  .wk-mobile-9 {
    width: 75%;
  }

  .wk-mobile-10 {
    width: 83.333333%;
  }

  .wk-mobile-11 {
    width: 91.666667%;
  }

  .wk-mobile-12 {
    width: 100%;
  }
}
</style>
</head>
<body>

    

<section id="prod" class="section-products" >
		<div class="container" >
				<div class="row justify-content-center text-center">
						<div class="col-md-8 col-lg-6">
								<div class="header">
										<!-- <h3>Featured Product</h3> -->
                    <h1 >Hardware <span style="color: #FFAA17;">Products</span></h1>
								</div>
                <a href="./index.php#prod" class="btn">Hardware Products</a>
                <br>
                
						</div>
				</div>
				<div class="row">
						<!-- Single Product -->
						<div class="col-md-6 col-lg-4 col-xl-3">
								<div id="product-1" class="single-product">
										<div class="part-1">
                      <span class="new">new</span>
												<!-- <ul>
														<li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
														<li><a href="#"><i class="fas fa-heart"></i></a></li>
														<li><a href="#"><i class="fas fa-plus"></i></a></li>
														<li><a href="#"><i class="fas fa-expand"></i></a></li>
												</ul> -->
										</div>
										<div class="part-2">
												<h3 class="product-title"><a style="text-decoration: underline;" href="./product_detail_1.php">High-quality door handle</a></h3>
												<!-- <h4 class="product-old-price">$79.99</h4> -->
												<!-- <h4 class="product-price">$49.99</h4> -->
										</div>
								</div>
						</div>
						<!-- Single Product -->
						<div class="col-md-6 col-lg-4 col-xl-3">
								<div id="product-2" class="single-product">
										<div class="part-1">
                      <!-- <span class="new">new</span> -->
												<span class="discount">Latest</span>
												<!-- <ul>
														<li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
														<li><a href="#"><i class="fas fa-heart"></i></a></li>
														<li><a href="#"><i class="fas fa-plus"></i></a></li>
														<li><a href="#"><i class="fas fa-expand"></i></a></li>
												</ul> -->
										</div>
										<div class="part-2">
												<h3 class="product-title"><a style="text-decoration: underline;" href="./product_detail_2.php">High-quality door handle</a></h3>
												<!-- <h4 class="product-price">$49.99</h4> -->
										</div>
								</div>
						</div>
						<!-- Single Product -->
						<div class="col-md-6 col-lg-4 col-xl-3">
								<div id="product-3" class="single-product">
										<div class="part-1">
                      <span class="new">new</span>
												<!-- <ul>
														<li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
														<li><a href="#"><i class="fas fa-heart"></i></a></li>
														<li><a href="#"><i class="fas fa-plus"></i></a></li>
														<li><a href="#"><i class="fas fa-expand"></i></a></li>
												</ul> -->
										</div>
										<div class="part-2">
												<h3 class="product-title"><a style="text-decoration: underline;" href="./product_detail_3.php">High-quality door handle</a></h3>
												<!-- <h4 class="product-old-price">$79.99</h4> -->
												<!-- <h4 class="product-price">$49.99</h4> -->
										</div>
								</div>
						</div>
						<!-- Single Product -->
						<div class="col-md-6 col-lg-4 col-xl-3">
								<div id="product-4" class="single-product">
										<div class="part-1">
												<span class="new">new</span>
												<!-- <ul>
														<li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
														<li><a href="#"><i class="fas fa-heart"></i></a></li>
														<li><a href="#"><i class="fas fa-plus"></i></a></li>
														<li><a href="#"><i class="fas fa-expand"></i></a></li>
												</ul> -->
										</div>
										<div class="part-2">
												<h3 class="product-title"><a style="text-decoration: underline;" href="./product_detail_4.php">Stainless Steel Door Chitkani</a></h3>
												<!-- <h4 class="product-price">$49.99</h4> -->
										</div>
								</div>
						</div>
						<!-- Single Product -->
						<div class="col-md-6 col-lg-4 col-xl-3">
								<div id="product-5" class="single-product">
										<div class="part-1">
                      <span class="new">new</span>
												<!-- <ul>
														<li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
														<li><a href="#"><i class="fas fa-heart"></i></a></li>
														<li><a href="#"><i class="fas fa-plus"></i></a></li>
														<li><a href="#"><i class="fas fa-expand"></i></a></li>
												</ul> -->
										</div>
										<div class="part-2">
												<h3 class="product-title"><a style="text-decoration: underline;" href="./product_detail_5.php">Mortise Door Lock</a></h3>
												<!-- <h4 class="product-old-price">$79.99</h4> -->
												<!-- <h4 class="product-price">$49.99</h4> -->
										</div>
								</div>
						</div>
						<!-- Single Product -->
						<div class="col-md-6 col-lg-4 col-xl-3">
								<div id="product-6" class="single-product">
										<div class="part-1">
                      <!-- <span class="new">new</span> -->
												<span class="discount">Latest</span>
												<!-- <ul>
														<li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
														<li><a href="#"><i class="fas fa-heart"></i></a></li>
														<li><a href="#"><i class="fas fa-plus"></i></a></li>
														<li><a href="#"><i class="fas fa-expand"></i></a></li>
												</ul> -->
										</div>
										<div class="part-2">
												<h3 class="product-title"><a style="text-decoration: underline;" href="./product_detail_6.php">Mortise Door Lock</a></h3>
												<!-- <h4 class="product-price">$49.99</h4> -->
										</div>
								</div>
						</div>
						<!-- Single Product -->
						<div class="col-md-6 col-lg-4 col-xl-3">
								<div id="product-7" class="single-product">
										<div class="part-1">
                    <span class="new">new</span>
												<!-- <ul>
														<li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
														<li><a href="#"><i class="fas fa-heart"></i></a></li>
														<li><a href="#"><i class="fas fa-plus"></i></a></li>
														<li><a href="#"><i class="fas fa-expand"></i></a></li>
												</ul> -->
										</div>
										<div class="part-2">
												<h3 class="product-title"><a style="text-decoration: underline;" href="./product_detail_7.php">Mortise Door Lock</a></h3>
												<!-- <h4 class="product-old-price">$79.99</h4> -->
												<!-- <h4 class="product-price">$49.99</h4> -->
										</div>
								</div>
						</div>
						<!-- Single Product -->
						<div class="col-md-6 col-lg-4 col-xl-3">
								<div id="product-8" class="single-product">
										<div class="part-1">
												<span class="new">new</span>
												<!-- <ul>
														<li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
														<li><a href="#"><i class="fas fa-heart"></i></a></li>
														<li><a href="#"><i class="fas fa-plus"></i></a></li>
														<li><a href="#"><i class="fas fa-expand"></i></a></li>
												</ul> -->
										</div>
										<div class="part-2">
												<h3 class="product-title"><a style="text-decoration: underline;" href="./product_detail_8.php">Mortise Door Lock</a></h3>
												<!-- <h4 class="product-price">$49.99</h4> -->
										</div>
								</div>
						</div>
           

            
				</div>
		</div>
</section>
</body>
</html>