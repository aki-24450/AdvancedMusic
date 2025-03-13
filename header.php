<!--Made a change -->
<style>
/*I have moved the style.css and main.css into this folder where 
I can combine and do all my styling,positioning,editing etc..*/
     header {
     display: flex;
     align-items: center;
     background-color:red;
     }
     header img{
     max-width: 100%;
     }
     header figure{
     max-width: 20%;
     margin: 1em;
     margin-left: 2em;
     }
     header h1 { 
     font-family: 'https://fonts.google.com/specimen/Righteous';
     font-size: 250%;
     font-weight: lighter;
     color:white;
     }

     nav {
     display: flex;
     /*background-color: #280071; */
     background-color: blue;
     border-top: solid black thin;
     border-bottom: solid black thin;
     }
     nav p{
     flex: 1 1 100px;
     text-align: center;

     }
     nav a { 
     text-decoration: none;
     color: #fff;
     font-weight: bold;
     }
     nav a:hover { 
     text-decoration: none;
     color: #e91e63;
     font-weight: bold;
     }
     nav label{
     display: none;
     }
</style>
<header>
     <figure>
          <img class="square" src="images/TonganFlag.jpg" width="600">    
     </figure>
     <h1>Beautiful Tonga</h1>
</header>
<nav>
     <!-- site wide navigation bar -->
     <p><a href="index.html"> Home</a></p>  
     <p><a href= "music.php">Music</a></p>                            
     <p><a href= "culture.php">Culture</a></p>
     <p><a href="page3.html">Add </a></p>
</nav>

          