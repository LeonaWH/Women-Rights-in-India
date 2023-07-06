<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Contact Us Form</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="contactstyle.css">
    <link rel="stylesheet" href="style.css">
    <script src="contact.js"></script>
    <script src="https://kit.fontawesome.com/d4369a04df.js" crossorigin="anonymous"></script>
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
<body>

<header class="header">
    <a href="#" class="logo"><img src="images/Logo WRI.png" alt="Logo" width="40" height="55" class="d-inline-block align-text-top"></a>
    <nav class="nav-items">
    <a href="index.html">Home</a>
      <a href="index2.php">Search Cases</a>
      <a href = "contactus.php">Contact Us</a>
      <a href="news.html"><b><em>News</em></b></a>
    </nav>
</header>

<h2>Connect with Us: Reach Out for Support and Answers to Your Questions</h2>


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


const form = document.querySelector("form"),
statusTxt = form.querySelector(".button-area span");

form.onsubmit = (e)=>{
  e.preventDefault();
  statusTxt.style.color = "#0D6EFD";
  statusTxt.style.display = "block";
  statusTxt.innerText = "Sending your message...";
  form.classList.add("disabled");

  let xhr = new XMLHttpRequest();
  xhr.open("POST", "contactform.php", true);
  xhr.onload = ()=>{
    if(xhr.readyState == 4 && xhr.status == 200){
      let response = xhr.response;
      if(response.indexOf("Email and message field is required!") != -1 || response.indexOf("Enter a valid email address!") != -1 || response.indexOf("Sorry, failed to send your message!") != -1){
        statusTxt.style.color = "red";
      }else{
        form.reset();
        setTimeout(()=>{
          statusTxt.style.display = "none";
        }, 3000);
      }
      statusTxt.innerText = response;
      form.classList.remove("disabled");
    }
  }
  let formData = new FormData(form);
  xhr.send(formData);
}

</script>
<div class="wrapper">
    <header>Send us a Message</header>
    <form action="#">
      <div class="dbl-field">
        <div class="field">
          <input type="text" name="name" placeholder="Enter your name">
          <i class='fas fa-user'></i>
        </div>
        <div class="field">
          <input type="text" name="email" placeholder="Enter your email">
          <i class='fas fa-envelope'></i>
        </div>
      </div>
      <div class="dbl-field">
        <div class="field">
          <input type="text" name="phone" placeholder="Enter your phone">
          <i class='fas fa-phone-alt'></i>
        </div>
        <div class="field">
          <input type="text" name="website" placeholder="Enter your website">
          <i class='fas fa-globe'></i>
        </div>
      </div>
      <div class="message">
        <textarea placeholder="Write your message" name="message"></textarea>
        <i class="material-icons">message</i>
      </div>
      <div class="button-area">
        <button type="submit">Send Message</button>
        <span></span>
      </div>
    </form>
  </div>


  <footer class="footer">
    <div class="copy">© 2023 TE MiniProject</div>
  </footer>
  <script src="contact.js"></script>
</body>
</html>
