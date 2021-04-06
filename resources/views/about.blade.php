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
          <li><a href="{{ route('Home' )}}" class="active">{{__('lang.home')}}</a></li>
          <li><a href="#">{{__('lang.about')}}</a></li>
          <li><a href="{{ route('contacts') }}">{{__('lang.contacts')}}</a></li>
      </ul>

     </nav>
    </section>
    <div class="about-container">
       <div class="about-text">
           <p>{{__('lang.aboutme')}}</p>
           <p>{{__('lang.info1')}}</p>
           <p>{{__('lang.info2')}} </p>
           <p>{{__('lang.info3')}}</p>
       </div>
    </div>
    </body>
</html>