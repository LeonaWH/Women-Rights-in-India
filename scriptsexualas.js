
function displayPDF() {
    var pdfOverlay = document.getElementById("pdf-overlay");
    pdfOverlay.style.display = "block";
    
    var pdfContainer = document.createElement("div");
    pdfContainer.setAttribute("id", "pdf-container");
    
    var embed = document.createElement("embed");
    embed.setAttribute("src", "docs/Assault/Civil Appeal No. 2756 of 2021.pdf");
    embed.setAttribute("type", "application/pdf");
    embed.setAttribute("width", "100%");
    embed.setAttribute("height", "100%");
    
    pdfContainer.appendChild(embed);
    pdfOverlay.appendChild(pdfContainer);
}


var pdfFrame = document.querySelector("iframe");
  pdfFrame.addEventListener("load", function() {
	console.log("PDF loaded!");
  });

function closePDF() {
	console.log("Close button clicked!");
	var pdfOverlay = document.getElementById("pdf-overlay");
	pdfOverlay.parentNode.removeChild(pdfOverlay);
  pdfOverlay.close();
  }

  function displayPDF2() {
    var pdfOverlay = document.getElementById("pdf-overlay");
    pdfOverlay.style.display = "block";
    
    var pdfContainer = document.createElement("div");
    pdfContainer.setAttribute("id", "pdf-container");
    
    var embed = document.createElement("embed");
    embed.setAttribute("src", "docs/Assault/Civil Appeal No. 6859 of 2021.pdf");
    embed.setAttribute("type", "application/pdf");
    embed.setAttribute("width", "100%");
    embed.setAttribute("height", "100%");
    
    pdfContainer.appendChild(embed);
    pdfOverlay.appendChild(pdfContainer);
}

function displayPDF3() {
  var pdfOverlay = document.getElementById("pdf-overlay");
  pdfOverlay.style.display = "block";
  
  var pdfContainer = document.createElement("div");
  pdfContainer.setAttribute("id", "pdf-container");
  
  var embed = document.createElement("embed");
  embed.setAttribute("src", "docs/Assault/Civil Appeal No(s). 6723 of 2021.pdf");
  embed.setAttribute("type", "application/pdf");
  embed.setAttribute("width", "100%");
  embed.setAttribute("height", "100%");
  
  pdfContainer.appendChild(embed);
  pdfOverlay.appendChild(pdfContainer);
}

function displayPDF4() {
    var pdfOverlay = document.getElementById("pdf-overlay");
    pdfOverlay.style.display = "block";
    
    var pdfContainer = document.createElement("div");
    pdfContainer.setAttribute("id", "pdf-container");
    
    var embed = document.createElement("embed");
    embed.setAttribute("src", "docs/Assault/Criminal Appeal No. 144 of 2022.pdf");
    embed.setAttribute("type", "application/pdf");
    embed.setAttribute("width", "100%");
    embed.setAttribute("height", "100%");
    
    pdfContainer.appendChild(embed);
    pdfOverlay.appendChild(pdfContainer);
  }

  function displayPDF5() {
    var pdfOverlay = document.getElementById("pdf-overlay");
    pdfOverlay.style.display = "block";
    
    var pdfContainer = document.createElement("div");
    pdfContainer.setAttribute("id", "pdf-container");
    
    var embed = document.createElement("embed");
    embed.setAttribute("src", "docs/Assault/Criminal Appeal No. 451 of 2022.pdf");
    embed.setAttribute("type", "application/pdf");
    embed.setAttribute("width", "100%");
    embed.setAttribute("height", "100%");
    
    pdfContainer.appendChild(embed);
    pdfOverlay.appendChild(pdfContainer);
  }

  function displayPDF6() {
    var pdfOverlay = document.getElementById("pdf-overlay");
    pdfOverlay.style.display = "block";
    
    var pdfContainer = document.createElement("div");
    pdfContainer.setAttribute("id", "pdf-container");
    
    var embed = document.createElement("embed");
    embed.setAttribute("src", "docs/Assault/Criminal Appeal No. 680 of 2020.pdf");
    embed.setAttribute("type", "application/pdf");
    embed.setAttribute("width", "100%");
    embed.setAttribute("height", "100%");
    
    pdfContainer.appendChild(embed);
    pdfOverlay.appendChild(pdfContainer);
  }

$('section.awSlider .carousel').carousel({
	pause: "hover",
  interval: 1000
});

var startImage = $('section.awSlider .item.active > img').attr('src');
$('section.awSlider').append('<img src="' + startImage + '">');

$('section.awSlider .carousel').on('slid.bs.carousel', function () {
 var bscn = $(this).find('.item.active > img').attr('src');
	$('section.awSlider > img').attr('src',bscn);
});


function searchToggle(obj, evt){
  var container = $(obj).closest('.search-wrapper');
      if(!container.hasClass('active')){
          container.addClass('active');
          evt.preventDefault();
      }
      else if(container.hasClass('active') && $(obj).closest('.input-holder').length == 0){
          container.removeClass('active');
          // clear input
          container.find('.search-input').val('');
      }
}


  


  

  



  

  
