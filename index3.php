<?php
    include 'header2.php';
?>
<head>
    <title>Search Page</title>
    <link rel="stylesheet" href="searchstlye.css">
    <script src="script.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/d4369a04df.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/brands.min.css">

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
    
    </style>


</head>
<header class="header">
    <a href="#" class="logo"><img src="images/Logo WRI.png" alt="Logo" width="40" height="55" class="d-inline-block align-text-top"></a>
    <nav class="nav-items">
      <a href="index.html">Home</a>
      <a href="news.html"><b><em>News</em></b></a>
    </nav>
  </header>

  <h1 style="margin-top: 0px;margin-bottom: 0px;">All Lawyers</h1>
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
  <form action="search2.php" method="POST">
  <div class="searchBox">

        <input class="searchInput"type="text" name="search" placeholder="Search by area of practice">
        <button type="submit"name="submit-search" class="search-btn" href="#">Search</i>
</button>
</div>
</form>


<div class="article-container">
    <?php
        $sql = "SELECT*FROM lawyers";
        $result = mysqli_query($conn, $sql);
        $queryResult = mysqli_num_rows($result);

        if ($queryResult > 0){
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<div class = 'article-box'>
                <h3>".$row['lawyer_name']."</h3>
                <p><b>City</b>: ".$row['city']."</p>
                <p><b>Phone Number: </b>".$row['phoneno']."</p>
                <p><b>Email ID: </b>".$row['email']."</p>
                <p><b>Area of Practice: </b>".$row['areapractice']."</p>
                <p><b>Address: </b>".$row['address']."</p>
                
                  
                </div>";
            }
        }



    ?>


</div>
</body>
</html>