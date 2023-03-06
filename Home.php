
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Bank Managemennt</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"

        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQS
        vqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" />

        
        <link rel="stylesheet"
         href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous"
          referrerpolicy="no-referrer" />
          




           

    <!--Bootstrap Link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!--Js File-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
    crossorigin="anonymous"></script>

    <link rel="stylesheet" href="home.css">
    <style>
            
            *{
    margin:0;
    padding: 0;
    box-sizing: border-box;
}
a{
    text-decoration:none;
    
    color: whitesmoke;
}
ul{
    list-style: none;
    display: inline;
}
.logo span{
    color:yellow;
    font-family: 'Courier New', Courier, monospace;
}



.active{
    color: whitesmoke;
    font-weight:bold;
    text-decoration:none;
}
.active:hover{
    color: rgb(24, 140, 207);
    font-weight: bold;
    text-decoration:none;
}

body, html{
    overflow-x: hidden;
    
}



/*Navbar*/
.navbar{
    position:absolute;
    top:0;
    left: 0;
    display:flex;
    width: 100%;
    justify-content: space-between;
    padding: 20px;
    color: rgb(223, 235, 223);
}
.nav-links{
    display: flex;
    align-items: center;
}
.nav-links li{
    margin: 0 30px;
}


.navbar ul{
    
    float: right;
    list-style-type: none;
    font-weight: bold;
    
    
}
.navbar ul li{
    color: whitesmoke;
    display: inline-block;
    text-decoration: none;
    font-size: 20px;
    transition: all  0.3s;
    font-weight: bold;
    position: relative;
    
}
.navbar ul li  :hover{
    color: rgb(217, 231, 21);
}
.navbar ul li a{
    color: whitesmoke;
    text-decoration: none;
    font-size: 20px;
}

.dropdown_menu{
    display: none;
}


.navbar ul li:hover .dropdown_menu{
    display: block;
    position: absolute;
    left: 10;
    top: 100%;
   
    
}
 .dropdown_menu ul{
    display: block;
    margin: 10px;

}

.dropdown_menu ul li{
    width: 200px;
    padding: 5px;
}
header{
    width: 100vw;
    height: 90vh;
    background:  rgba(231, 18, 18, 0.979) url('image/Blood\ Donation.jpg');
    background-position: bottom center;
    border-radius: 0 0 20% 20%/0 0 40% 40% ;
    background-size: cover;
    display: flex;
    align-items: center;
    justify-content: center;
    background-blend-mode:darken;
    
    
}
.header-content{
    margin-bottom:70px;
    color: whitesmoke;
    text-align: center;
}
.header-content h2{
    font-size: 4vmin;
    text-align: center;
    
    
}
.header-content span{
    color: yellow;
}

.header-content h1{
    font-size: 7vmin;
    margin-top: 20px;
    margin-bottom: 10px;
    text-align: center;
}
.logo{
    text-transform: uppercase;
  }






.btn{
    padding: 8px 15px;
    background:yellow;
    border-radius: 30px;
    color: rgb(139, 9, 9);
}
.btn:hover{
    padding: 8px 15px;
    background: #ee363f;
    border-radius: 30px;
    color: whitesmoke;
}

.menu-btn{
    position: absolute;
    top: 30px;
    right: 30px;
    width: 40px;
    cursor: pointer;
    color: white;
    display: none;
}

/*Events Css Section*/
section{
    width: 80%;
    margin: 80px auto;
}

.title{
    text-align: center;
    font-size: 4vmin;
    color: #a30c0c;
    font-weight: bold;
}
.line{
    width:150px;
    height: 7px;
    background: #f03333;
    margin: 10px auto;
    border-radius: 5px;

}
.row{
    padding-top: 25px;
    display: flex;
    align-items: center;
    width: 100%;
    justify-content: space-between;
}
.row .col{
    display: flex;
    flex-direction: column;
    align-items: center;
}
 
.row .col img{
    width: 80%;
    border-radius: 15px;
    
}

.events .row{
    margin-top: 50px;

}
h4{
    font-size: 3vmin;
    color: #7a0909;
    margin: 20px auto;
    font-family: 'Lobster',cursive;
    font-weight: bold;
}
p{
    color: #4b4949;
    padding: 0px 40px;
}



.footer{
    
    display:flex;

    padding: 50px;
    color: #fff;
    background-color: #640606;
}
.footer > *{
    flex: 1 100%;
}
.footer-left{
    margin-right: 1.25em;
    margin-bottom: 2em;

}

.footer-left img{
    width: 30%;
}
h2{
    font-weight: 600;
    font-size: 17px;
}
.footer ul{
    list-style: none;
    padding-left: 0;
}
.footer li{
    line-height: 2em;
}
.footer a{
    text-decoration: none;
}
.footer-right{
    display: inline-block;
}
.footer-right  > *{
    
    margin-right: 1.25em;
}
.footer-right .features{
    display: inline-block;
}
.box a{
    color: whitesmoke;
}
.footer-bottom{
    text-align: center;
    color: whitesmoke;
    padding-top: 50px;
}
.footer-left p{
    padding-right: 20%;
    color: whitesmoke;
}
.socials a{
    background: #364a62;
    width: 40px;
    height: 40px;
    display: inline-block;
    margin-right: 10px;
    clip-path: circle();
}
.socials a i{
    color: #e7f2f4;
    padding: 10px 20px;
    font-size: 20px;
}

.fa {
    padding: 3px;
    font-size: 30px;
    width: 40px;
    text-align: center;
    text-decoration: none;
    margin: 5px 2px;
  
  }
  
  .fa:hover {
      opacity: 0.7;
  }
  
  .fa-facebook {
    background: #f3f3f5;
    color: rgb(136, 9, 9);
    clip-path: circle();
  }
  
  .fa-twitter {
    background: #f3f3f5;
    color: rgb(136, 9, 9);
    clip-path: circle();
  }
  
  .fa-instagram {
    background: #f3f3f5;
    color: rgb(136, 9, 9);
    clip-path: circle();
  }

  .fa-linkedin {
    background: #f3f3f5;
    color: rgb(136, 9, 9);
    clip-path: circle();
  }


 .footer-bottom{
    background-color: #640606;
   
   
   
 }
 
























/*Mobile Device*/
@media only screen and (max-width:850px){

    .menu-btn{
        display: block;
    }
    .navbar{
        padding: 0;

    }
    .logo{
        position:absolute;
        top:30px;
        left: 30px;
    }
    .nav-links{
        flex-direction: column;
        width: 100%;
        height: 100vh;
        justify-content: center;
        background:#6b6baa;
        margin-top: -900px;
        transition: all 0.5s ease;
    }
    .menu-mobile{
        margin-top: 0px;
        border-bottom-right-radius: 30%;
    }
    .nav-links li{
        margin: 30px auto;
    }

}
  </style>    
</head>
<body>
     <!--Navbar-->
     <nav class="navbar">
     <h1 class="logo">MA<span>rk</span>S MA<span>na</span>ge</h1>
     <ul class="nav-links">
        <li class="active"><a href="Home.php">Home</a></li>
        <li><a href="sign_in_up/login_form.php">Login</a></li>      
     </ul>

     <img src="image/menu-btn.png"  alt=""  class="menu-btn">
    </nav>
     
    <header> 
      <div class="header-content">
        <h2>Welcome to Bl<span>oo</span>d Ba<span>nk</span> Management</h2>
        
          <h1>Our Online Bl<span>oo</span>d Don<span>at</span>ion Camp!</h1>
            
         
      </div>
    </header>

     <!--Events-->

     <section class="events">
      <div class="title">
        <h1>All Blood Group</h1>
        <div class="line">
        </div>
      </div>
         
      <div class="row">
        <div class="col">
          <img src="image/A+ Blood.png">
          <h4>Blood Group-A+</h4>
          <p>Blood group-A+ has A antigens on the red blood cells with anti-B antibodies in the plasma.</p>
          
        </div>

        <div class="col">
          <img src="image/A- Blood.png ">
          <h4>Blood Group-A-</h4>
          <p>Blood group-A- has A antigens on the red blood cells with anti-B antibodies in the plasma</p>
          
        </div>
      </div>


     <div class="row">
        <div class="col">
          <img src="image/B+ Blood.png ">
          <h4>Blood Group-B+ </h4>
          <p>Blood group-B+ has B antigens with anti-A antibodies in the plasma</p>
          
        </div>

        <div class="col">
          <img src="image/B- Blood.jfif">
          <h4>Blood Group-B-</h4>
          <p>Blood group-B- has B antigens with anti-A antibodies in the plasma</p>
          
        </div>
      </div>

      <div class="row">
        <div class="col">
          <img src="image/AB+ Blood.png">
          <h4>Blood Group-AB+ </h4>
          <p>Blood group-AB+ has both A and B antigens, but no antibodies </p>
          
        </div>

        <div class="col">
          <img src="image/AB- Blood.jfif">
          <h4>Blood Group-AB-</h4>
          <p>Blood group-AB- has both A and B antigens, but no antibodies</p>
          
        </div>
      </div>

      <div class="row">
        <div class="col">
          <img src="image/O+ Blood.png ">
          <h4>Blood Group-O+ </h4>
          <p>Blood group-O+ has no antigens, but both anti-A and anti-B antibodies in the plasma </p>
          
        </div>

        <div class="col"> 
          <img src="image/O- Blood.png ">
          <h4>Blood Group-B-</h4>
          <p>Blood group-O- has no antigens, but both anti-A and anti-B antibodies in the plasma</p>
          
        </div>
      </div>
</section>

  
<footer class="footer">
  <div class="footer-left">
    <img src="image/Ruet-logo.jpg" style="margin-left:10px; width:60%;"alt="">
    <br>
    <div class="container-fluid">

        <a href="https://www.facebook.com/ruet.ac.bd/" class="fa fa-facebook"></a>
        <a href="https://mobile.twitter.com/ruetbd" class="fa fa-twitter"></a>
        <a href="https://www.instagram.com/explore/locations/1031232421/ruet-engineering-university-rajshahi"
         class="fa fa-instagram"></a>
        <a href="https://bd.linkedin.com/company/ruet" class="fa fa-linkedin"></a>
        </div>
  </div>
  </div>

  <div class="container-fluid">
  <ul class="footer-right">
    <li>
      <h2>Useful Links</h2>
      <ul class="box">
        <li> <a href="#">Home</a></li>
              <li><a href="#">About us</a></li>
              <li><a href="#">Services</a></li>
              <li> <a href="#">Terms of service</a></li>
              <li> <a href="#">Privacy policy</a></li>
      </ul>
      
    </li>
    </ul>
    </div>


  <div class="container-fluid">
    <ul>
    <li>
      <h2>Our Services</h2>
      <ul class="box" >
        <li > <a href="#">Blood Donation Process</a></li>
              <li><a href="#">Blood Receiver Location</a></li>
              <li><a href="#">Blood Donor Location</a></li>
              <li> <a href="#">Searching Blood</a></li>
              <li> <a href="#">Need Blood </a></li>
              
      </ul>
    </li>
    </ul>
    </div>
 
    <div class="container-fluid col-md-4 mb-5">
    <ul>
    <li>
      <h2 style="margin-left:40px;">Contact Us</h2>
      <ul class="box col-md-4 mb-5">
        <p class="text-white">
          Shah Newaz Sarkar <br>
          <strong>Phone:</strong> +88 01567984591<br>
          <strong>Id: 1803065</strong>
          <strong href="#">Email:setunnnws@gmail.com</strong><br>
         
        </p>
      </ul>
    </li>
  </ul>
</div>

</footer>
 


    
  
    
    <script>
      const menuBtn=document.querySelector('.menu-btn')
      const navlinks= document.querySelector('.nav-links')

     menuBtn.addEventListener('click',()=>{
      navlinks.classList.toggle('menu-mobile')

     })

    </script>

</body>
</html>