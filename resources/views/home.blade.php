<html>
    <head>
        
        <meta charset="utf-8">
        <title>MyCV</title>

        <style>
           @import url('https://fonts.googleapis.com/css2?family=Stick&display=swap');
           @import url('https://fonts.googleapis.com/css2?family=Fascinate&family=Stick&display=swap');
            body{
                background-color: white;
    margin: 0;
    padding: 0;

}
ul{
    list-style: none;

}
a{
    text-decoration: none;
}
section{
    width: 100%;
    height: 95hv;
    background-repeat: no-repeat;
    background-size: cover;
}
nav{
    display: flex;
    justify-content: space-between;
    align-items: center;
    height: 60px;
    background-color: white;
    box-shadow: 2px 2px 12px rgba(0, 0, 0, 1);
    padding: 0px 5%;
}
nav ul{
    display: flex;
}
nav ul li a{
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    margin: 30px;
    color:#505050;
    font-size: 15px;
    font-weight: 700;
}
.logo{
    font-family: Fascinate ;
    color: black;
    font-size: 22px;

}
.active{
    font-weight: 700;
    color: #2d2a2a;
}
.text-container p:nth-child(1){
    font-family: calibri;
    font-weight: bold;
    color: #6d6d6d;
    font-size: 22px;
}
.text-container p:nth-child(2){
    font-family: calibri;
    font-weight: bold;
    letter-spacing: 1px;
    color: #1a1a1a;
    font-size: 60px;
}
.text-container p:nth-child(3){
    font-family: Arial, Helvetica, sans-serif ;
    color: #403e3e;
    font-size: 30px;
    line-height: 30px;
}
.text-container p{
    line-height: 0px;
    margin: 45px 0px 25px;
}
.text-container{
    position: absolute;
    left: 13%;
    top: 42%;
    transform: translate(-13%, -42%);
}
.text-container button{
    width: 130px;
    height: 42px;
    border-radius: 10px;
    font-family: calibri;
    font-weight: bold;
    font-size: 14px;
    outline:none;
    margin: 0px 10px;
}
.hire-btn{
    border: 2px solid #373636;
    color: #373636;
}
.down-cv{
    background-color: #0b0b0b;
    color: #FFFFFF;
    border: none;
}
button:active{
    transform: scale(1.1);
}

        </style>
    </head>
    <body>
   <section>
     <nav>
      <a href="#" class="logo">My CV Website</a>
      <ul>
          <li><a href="#" class="active">Home</a></li>
          <li><a href="{{ route('about') }}">About</a></li>
          <li><a href="{{ route('contacts') }}">Contacts</a></li>
      </ul>

     </nav>
     <div class="text-container">
         <p>Hello,</p>
         <p>I'm Kamila Intykbayeva</p>
         <p>Student & Bum :)</p>
         <button class="hire-btn">Hire me</button>
         <button class="down-cv">Download CV</button>
     </div>
   </section>

   
    </body>
</html>