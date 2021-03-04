<html>
    <head>
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
.about-container{
     width: 80%;
     height: 330px;
     background-color: #FFFFFF;
     box-shadow: 4px 4px 12px rgba(0,0,0,2);
     display: flex;
     position: absolute;
     top:20%;
     left: 140px;
     border-radius: 20px;
     position: relative;
     justify-content: space-evenly;
     align-items: center;

}
.about-text{
      width: 900px;
}    
.about-text p:nth-child(1){
color: #403e3e;
font-family: Arial, Helvetica, sans-serif;
font-weight: bold;
font-size: 23px;
line-height: 0px;
}
.about-text p:nth-child(2){
    color:#3e3d3d;
    font-size: 13px;
    font-family: Arial, Helvetica, sans-serif;
    font-weight: bold;
    line-height: 5px;
}
.about-text p:nth-child(3),
.about-text p:nth-child(4){
color: #7e7d7d;
font-family: calibri;
font-size: 16px;

}

        </style>
    </head>
    <body>
    <section>
     <nav>
      <a href="#" class="logo">My CV Website</a>
      <ul>
          <li><a href="{{ route('Home' )}}" class="active">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="{{ route('contacts') }}">Contacts</a></li>
      </ul>

     </nav>
    </section>
    <div class="about-container">
       <div class="about-text">
           <p>About Me</p>
           <p>2nd year Student</p>
           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi quasi cum, possimus tenetur exercitationem sint facere earum aliquam ipsam, ducimus quas iure, pariatur inventore. Eligendi, voluptates rerum. Totam, dicta ea! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Amet at ab esse eius enim ipsam hic distinctio quidem et accusantium corrupti </p>
           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet quod ipsum rerum impedit, minima perspiciatis veritatis ad provident accusamus animi alias fugiat beatae offics! Dicta, architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit rerum, eaque iusto omnis tempora esse repudiandae. .</p>
       </div>
    </div>
    </body>
</html>