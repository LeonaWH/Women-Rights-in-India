<?php
    include 'header.php';
?>
<head>
    <title>Search Page</title>
    <link rel="stylesheet" href="searchstlye.css">
    <script src="script2.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/brands.min.css">
  <script src="https://kit.fontawesome.com/d4369a04df.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Shrikhand&display=swap" rel="stylesheet">

<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css">



<style>
      #chatbot-icon {
        z-index: 9999; 
        position: fixed;
        bottom: 20px;
        right: 20px;
        width: 70px;
        height: 70px; 
        background-color: #000000;
        border-radius: 50%;
        cursor: pointer;
      }
      #chatbot-icon:hover {
        background-color: #737373;
      }
      
      #chatbot {
        position: fixed;
        bottom: 20px; 
        z-index:10;
        right: 70px;
        width: 350px;
        background-color: white;
        box-shadow: 0px 0px 10px #888;
        display: none;
        border-radius: 2px;
        height: 300px; /* set a fixed height for the chatbot container */
        overflow-y: scroll; /* enable vertical scrolling */
      }
      #chatbot-header {
        background-color: #000000;
        color: white;
        padding: 10px;
        font-weight: bold;
        
      }
      #chatbot-log {
        padding: 10px;
        font-weight: bold;
      }
      #chatbot-message {
        margin: 10px;
        font-weight: bold;
      }
      #chatbot-input {
        width: 80%;
        box-sizing: border-box; 
        padding: 10px;
        border: 2px solid #000000;
        border-radius: 5px;
        margin: 10px;
      }
    #chatbot-submit{
      padding: 10px;
      margin: 10px;
    }
    .chatbot-btn{
      align-items: center;
      margin: 2px;
      background-color: #fff;
      border: 2px solid #000;
      box-sizing: border-box;
      color: #000;
      cursor: pointer;
      display: inline-flex;
      fill: #000;
      font-family: Inter,sans-serif;
      font-size: 12px;
      font-weight: 600;
      height: 30px;
      justify-content: center;
      letter-spacing: -.8px;
      line-height: 24px;
      min-width: 140px;
      outline: 0;
      padding: 0 17px;
      text-align: center;
      text-decoration: none;
      transition: all .3s;
      user-select: none;
      -webkit-user-select: none;
      touch-action: manipulation;
    }
    
    .chatbot-btn :focus {
      color: #171e29;
    }
    
    .chatbot-btn:hover {
      border-color: #06f;
      color: #06f;
      fill: #06f;
    }
    
    .chatbot-btn:active {
      border-color: #06f;
      color: #06f;
      fill: #06f;
    }



    html {
  box-sizing: border-box;
}

*,
*::before,
*::after {
  box-sizing: inherit;
  padding: 0;
  margin: 0;
}

body {
  font-size: 16px;
  line-height: 1.5;
  font-family: Roboto, sans-serif;
}

.slider {
  position: relative;
  width: 1000px;
  height: 300px;
  margin: 20px auto;
  box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 1px 5px 0 rgba(0, 0, 0, 0.12),
    0 3px 1px -2px rgba(0, 0, 0, 0.2);
  overflow: hidden;
}

.slider-controls {
  position: absolute;
  bottom: 0px;
  left: 50%;
  width: 200px;
  text-align: center;
  transform: translatex(-50%);
  z-index: 1;
  list-style: none;
  text-align: center;
}

.slider input[type="radio"] {
  position: absolute;
  top: 0;
  left: 0;
  opacity: 50%;
  width: 0;
  height: 0;
}

.slider-controls label {
  display: inline-block;
  border: none;
  height: 20px;
  width: 20px;
  border-radius: 50%;
  cursor: pointer;
  background-color: #212121;
  transition: background-color 0.2s linear;
}

#btn-1:checked ~ .slider-controls label[for="btn-1"] {
    background-color: #ff4081;
  }
  
  #btn-2:checked ~ .slider-controls label[for="btn-2"] {
    background-color: #ff4081;
  }
  
  #btn-3:checked ~ .slider-controls label[for="btn-3"] {
    background-color: #ff4081;
  }
  #btn-4:checked ~ .slider-controls label[for="btn-4"] {
    background-color: #ff4081;
  }
  #btn-5:checked ~ .slider-controls label[for="btn-5"] {
    background-color: #ff4081;
  }

/* SLIDES */

.slides {
  list-style: none;
  padding: 0;
  margin: 0;
  height: 100%;
}

.slide {
  position: absolute;
  top: 0;
  left: 0;

  display: flex;
  justify-content: space-between;
  padding: 20px;
  width: 100%;
  height: 100%;

  opacity: 0;
  transform: translatex(-100%);
  transition: transform 250ms linear;
}

.slide-content {
  width: 550px;
}

.slide-title {
  margin-bottom: 20px;
  font-size: 30px;
}

.slide-text {
  margin-bottom: 20px;
}

.slide-link {
  display: inline-block;
  padding: 10px 20px;
  color: #fff;
  border-radius: 3px;
  text-decoration: none;
  background-color: black;
}

.slide-image img {
  max-width: 100%;
}

/* Slide animations */
#btn-1:checked ~ .slides .slide:nth-child(1) {
    transform: translatex(0);
    opacity: 1;
  }
  
  #btn-2:checked ~ .slides .slide:nth-child(2) {
    transform: translatex(0);
    opacity: 1;
  }
  
  #btn-3:checked ~ .slides .slide:nth-child(3) {
    transform: translatex(0);
    opacity: 1;
  }
  #btn-4:checked ~ .slides .slide:nth-child(4) {
    transform: translatex(0);
    opacity: 1;
  }
  #btn-5:checked ~ .slides .slide:nth-child(5) {
    transform: translatex(0);
    opacity: 1;
  }
  
  #btn-1:not(:checked) ~ .slides .slide:nth-child(1) {
    animation-name: swap-out;
    animation-duration: 300ms;
    animation-timing-function: linear;
  }
  
  #btn-2:not(:checked) ~ .slides .slide:nth-child(2) {
    animation-name: swap-out;
    animation-duration: 300ms;
    animation-timing-function: linear;
  }
  
  #btn-3:not(:checked) ~ .slides .slide:nth-child(3) {
    animation-name: swap-out;
    animation-duration: 300ms;
    animation-timing-function: linear;
  }
  #btn-4:not(:checked) ~ .slides .slide:nth-child(4) {
    animation-name: swap-out;
    animation-duration: 300ms;
    animation-timing-function: linear;
  }
  #btn-5:not(:checked) ~ .slides .slide:nth-child(5) {
    animation-name: swap-out;
    animation-duration: 300ms;
    animation-timing-function: linear;
  }
  
@keyframes swap-out {
  0% {
    transform: translatex(0);
    opacity: 1;
  }

  50% {
    transform: translatex(50%);
    opacity: 0;
  }

  100% {
    transform: translatex(100%);
  }
}
#pdf-overlay {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5);
  display: none;
  z-index:2;
}

#pdf-container {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 90%;
  height: 90%;
  z-index:2;
  transform: translate(-50%, -50%);
}

#pdf-close{
  background-color: #ffffff;
  z-index:2;
 
}

.align-right {
  text-align: right;
  border: 0;
  padding: 10px;
}
.close-btn{
  cursor: pointer;
  border: 1px solid whitesmoke;
  background-color: transparent;
  height: 50px;
  width: 50px;
  color: white;
  z-index: 2;
  box-shadow: 0 6px 6px rgba(0, 0, 0, 0.6);
}
    
</style>


</head>
<header class="header">
    <a href="#" class="logo"><img src="images/Logo WRI.png" alt="Logo" width="40" height="55" class="d-inline-block align-text-top"></a>
    <nav class="nav-items">
    <a href="index.html">Home</a>
      <a href="index2.php">Search Cases</a>
      <a href="contactus.php">Contact Us</a>
      <a href="news.html"><b><em>News</em></b></a>
    </nav>
  </header>
  <!--Landmark Judgments Section-->
  <h1 style="margin-top: 0px;margin-bottom: 0px;">Landmark Judgments</h1>
  <div class="slider">
  <input type="radio" name="toggle" id="btn-1" checked>
  <input type="radio" name="toggle" id="btn-2">
  <input type="radio" name="toggle" id="btn-3">
  <input type="radio" name="toggle" id="btn-4">
  <input type="radio" name="toggle" id="btn-5">

  <div class="slider-controls">
    <label for="btn-1"></label>
    <label for="btn-2"></label>
    <label for="btn-3"></label>
    <label for="btn-4"></label>
    <label for="btn-5"></label>
  </div>
  
  <ul class="slides">
    <li class="slide">
      <div class="slide-content">
        <h2 class="slide-title">Lata Singh Vs State of Uttar Pradesh</h2>
        <p class="slide-text">Lata Singh's marriage to a lower-caste man led to a Supreme Court judgment that upholds adult women's right to choose their spouse and criminalizes violence against inter-religious or inter-caste marriages.</p>
        <a href="#" onclick="displayPDF()" class="slide-link">Read more</a>
</div>
        <p class="slide-image">
        <img class="car" src="images\istockphoto-1330033671-170667a.jpg" alt="stuff" width="320" height="240">
      </p>
       
     
    </li>
    <li class="slide">
      <div class="slide-content">
        <h2 class="slide-title">Roxann Sharma Vs Arun Sharma</h2>
        <p class="slide-text">Roxann's custody battle led to a Supreme Court decision that grants custody of children under five years old to the mother in legal disputes with estranged fathers.</p>
        <a href="#" onclick="displayPDF2()" class="slide-link">Read More</a>
      </div>
      <p class="slide-image">
        <img class="car" src="images\istockphoto-1330033671-170667a.jpg" alt="stuff" width="320" height="240">
      </p>
    </li>
    <li class="slide">
      <div class="slide-content">
        <h2 class="slide-title">Laxmi vs Union Of India & Ors</h2>
        <p class="slide-text">In 2006, Laxmi, an acid attack victim, petitioned for acid sale regulations and compensation. In 2013, the Supreme Court banned over-the-counter sales and mandated stricter regulations.</p>
        <a href="#" onclick="displayPDF3()" class="slide-link">Read More</a>
      </div>
      <p class="slide-image">
        <img class="car" src="images\istockphoto-1330033671-170667a.jpg" alt="stuff" width="320" height="240">
      </p>
    </li>
    <li class="slide">
      <div class="slide-content">
        <h2 class="slide-title">Vishaka vs State of Rajasthan</h2>
        <p class="slide-text">Bhanwari Devi, a social worker from Rajasthan, was gang-raped for preventing a child marriage. The trial court acquitted the accused, so Vishaka Group filed a petition. On August 13, 1997, the Supreme Court issued Vishaka guidelines on sexual harassment at the workplace.</p>
        <a href="#" onclick="displayPDF4()" class="slide-link">Read More</a>
      </div>
      <p class="slide-image">
        <img class="car" src="images\istockphoto-1330033671-170667a.jpg" alt="stuff" width="320" height="240">
      </p>
    </li>
    <li class="slide">
      <div class="slide-content">
        <h2 class="slide-title">CEHAT Vs Union of India</h2>
        <p class="slide-text">PNDT Act was introduced in 1996 by the Indian government to stop female feticide, but its provisions were not implemented effectively. The Supreme Court later directed the governments to enact the provisions and banned all ads related to prenatal sex determination techniques.</p>
        <a href="#" onclick="displayPDF6()" class="slide-link">Read More</a>
      </div>
      <p class="slide-image">
        <img class="car" src="images\istockphoto-1330033671-170667a.jpg" alt="stuff" width="320" height="240">
      </p>
    </li>
  </ul>
</div>

<div id="pdf-overlay">
                <div class="align-right">
                <button class="close-btn" onclick="closePDF()"> x </button>
              </div>
              <div id="pdf-container"></div>
      </div>
  <h1 style="margin-top: 0px;margin-bottom: 0px;">All Cases</h1>
  <br>
  <br>
  <div>
  <button id="chatbot-icon">
		<!-- Add an icon to the button, such as a chat bubble -->
		<i class="fa-solid fa-comments fa-beat fa-sm " style="color:#fff"></i>
	</button>
	
	<!-- Add HTML elements to display the chatbot interface -->
	<div id="chatbot">
		<div id="chatbot-header">
			Chatbot 
		</div>
     
      <div id="chatbot-log">
        <p>Hey! Can I help you?</p>
        <div id="options">
          <button class="chatbot-btn" id="yes">Yes</button>
          <button class="chatbot-btn" id="no">No</button>
        </div>
      </div> 
      <div id="chatbot-form">
        <input type="text" id="chatbot-input" placeholder="Type your message here...">
        <button class="chatbot-btn" type="submit" id="chatbot-submit">Send</button>
      </div>
    </div> 
<script>
   const button = document.getElementById("chatbot-icon");
		const chatbot = document.getElementById("chatbot");
    chatbot.scrollTop = chatbot.scrollHeight;

    function scrollToBottom() {
  chatbot.scrollTop = chatbot.scrollHeight;
}
		
      const chatbotLog = document.getElementById("chatbot-log");
  const chatbotInput = document.getElementById("chatbot-input");
  const chatbotForm = document.getElementById("chatbot-form");
  const yesButton = document.getElementById("yes");
  const noButton = document.getElementById("no");
  button.addEventListener("click", function() {
    if (chatbot.style.display === "none") {
      chatbot.style.display = "block";
    } else {
      chatbot.style.display = "none";
    }
  });

yesButton.addEventListener("click", function() { 
  chatbotLog.innerHTML += "<p>Do you want to know more about women's rights in India?</p>";
  chatbotLog.innerHTML += "<div id='options'><button class='chatbot-btn' id='yes2'>Sexual Harassment</button><button class='chatbot-btn' id='yes3'>Marriage and Divorce</button><button class='chatbot-btn' id='yes4'>Property Rights</button></div><br>";
  chatbotForm.style.display = "block";

  const yesButton2 = document.getElementById("yes2");
  const yesButton3 = document.getElementById("yes3"); 
  const yesButton4 = document.getElementById("yes4");
  const yesButton15 = document.getElementById("yes15");

  yesButton2.addEventListener("click", function() {
    chatbotLog.innerHTML += "<a href=''>Click here for more information</a>";
    chatbotForm.style.display = "block";
  });

yesButton3.addEventListener("click", function() {
    chatbotLog.innerHTML += "<a href='https://www.ijlmh.com/judicial-approach-towards-curbing-the-sexual-harassment-of-women-at-work-place/'>Click here for more information</a>";
    chatbotForm.style.display = "block";
  });   

// yesButton4.addEventListener("click", function() {
//     chatbotLog.innerHTML += "<div id='options'>The various property rights:<br><button class='chatbot-btn' id='yes15'>The Dowry Prohibition Act, 1961</button><button class='chatbot-btn' id='yes6'>The Hindu Succession Act, 1956 </button><button class='chatbot-btn' id='yes7'>The Transfer of Property Act, 1882</button></div>";
//     chatbotForm.style.display = "block";
//   });
yesButton4.addEventListener("click", function() {
  chatbotLog.innerHTML += "<div id='options'>The various property rights:<br><button class='chatbot-btn' id='yes15'>The Dowry Prohibition Act, 1961</button><button class='chatbot-btn' id='yes6'>The Hindu Succession Act, 1956</button><button class='chatbot-btn' id='yes7'>The Transfer of Property Act, 1882</button></div>";
  chatbotForm.style.display = "block";

  const yesButton15 = document.getElementById("yes15");
  const yesButton6 = document.getElementById("yes6");
  const yesButton7 = document.getElementById("yes7");

  yesButton15.addEventListener("click", function() {
    chatbotLog.innerHTML += "<br><p>This act prohibits the giving or taking of dowry. It also provides for punishment for those who demand or give dowry. The act can be used to protect a woman's right to her property as it prohibits dowry-related demands.</p><a href='./propertylaws.html'>Click here for more information about other Property Rights</a>";
    chatbotForm.style.display = "block";
  });

  yesButton6.addEventListener("click", function() {
    chatbotLog.innerHTML += "<br><p>This act governs the inheritance of property among Hindus, including women. The act was amended in 2005 to give daughters equal rights in ancestral property. This means that daughters have the same right as sons in inheriting property from their parents. The act also provides for widows' rights in the husband's property.</p> <a href='./propertylaws.html'>Click here for more information about other Property Rights</a>";
    chatbotForm.style.display = "block";
  });
 
  yesButton7.addEventListener("click", function() {
    chatbotLog.innerHTML += "<br><p>This act governs the transfer of property in India. It provides for various modes of transfer, including sale, gift, and mortgage. Women have the same right as men to transfer their property using any of these modes.</p><a href='./propertylaws.html'>Click here for more information about other Property Rights</a>";
    chatbotForm.style.display = "block";
  });
});

//   const yesButton6 = document.getElementById("yes6");
//     const yesButton7 = document.getElementById("yes7");
//     const helloBtn = document.getElementById("Hellobtn");

//     yesButton6.addEventListener("click", function() {
//       chatbotLog.innerHTML += "<a href=''>Click here for more information about The Hindu Succession Act, 1956</a>";
//       chatbotForm.style.display = "block";
//     });

//     yesButton7.addEventListener("click", function() {
//       chatbotLog.innerHTML += "<a href=''>Click here for more information about The Transfer of Property Act, 1882</a>";
//       chatbotForm.style.display = "block";
//     });

//     yesButton15.addEventListener("click", function() {
//   chatbotLog.innerHTML += "<a href='#'>Click here for no info</a>";
//   chatbotForm.style.display = "block";
// });


// yesButton15.addEventListener("click", function() { 
//   chatbotLog.innerHTML += "<p>Do you want to know more about women's rights in India?</p>";
//   chatbotLog.innerHTML += "<div id='options'><button class='chatbot-btn' id='Hellobtn'>Click me</button></div>";
//   chatbotForm.style.display = "block";
// }); 

noButton.addEventListener("click", function() {
  chatbotLog.innerHTML += "<p>Okay understood.</p>";
  chatbotForm.style.display = "block";
}); 

chatbotForm.addEventListener("submit", function(event) {
  event.preventDefault();
  const userMessage = chatbotInput.value;
  chatbotLog.innerHTML += "<p>You said: " + userMessage + "</p>";
  chatbotInput.value = "";
});});

</script>
<div class="please">

  <div class="1">
  <form action="search.php" method="POST">
  <div class="searchBox">

        <input class="searchInput"type="text" name="search" placeholder="Type to search">
        <button type="submit"name="submit-search" class="search-btn" href="#">Search</i>
</button>
</div>
</form>
<div class="article-container">
    <?php
        $sql = "SELECT*FROM article1";
        $result = mysqli_query($conn, $sql);
        $queryResult = mysqli_num_rows($result);

        if ($queryResult > 0){
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<div class = 'article-box'>
                    <h3>".$row['a_title']."</h3>
                    <p>".$row['a_court']."</p>
                    <p>".$row['a_author']."</p>
                    <p><b>Description:</b> ".$row['a_text']."</p>
                   
                  
                </div>";
            }
        }



    ?></div>

    </div>

</body>
</html>