// Articles (3 latest)
//  Date
//  Thumbnail
//  Title
//  Content

// Gallery (4 random)
//  Imgage urls

// Comments (All authorized?)
FillInComments(GetCommentData);

// Draw Out Article preview

// Draw out Gallery Preview

// Request data 
function GetArticleData()
{
  var data = document.getElementById('art_data').textContent;

}
function GetCommentData()
{
  var data = document.getElementById('comm_data').textContent;
  
  var result = [];
  data = data.split('\n'); //Ne engedjünk \n karaktert comment input-nál
  
  for(i=0;i<data.length;i++)
  {
    var item = data[i].split(';');
    var comment = {
      date: item[0],
      name: item[1],
      text: item[2]
    }
    result.push(comment);
  }

  console.log(result);
  return result;
}

function FillInComments(getData)
{
  var content = getData();

  var target = document.getElementById('commentbox');
  target.innerHTML="";
  var div = null;

  for(i=0;i<content.length;i++)
  {
    var item = content[i];
    div = document.createElement('div')
    div.innerHTML = ''+
    '<q>'+item.text+'</q>'+
    '<p class="commentp">- '+item.name+'</p>';
    div.className = "carousel-item"
    if(i==0)div.classList.add('active');

    target.appendChild(div);
  }

}

function getContactUsInfo()
{

}

function addComment() {
    var x = document.getElementById("commform");
    if (x.style.display === "block") {
      x.style.display = "none";
    } else {
      x.style.display = "block";
    }
  }

  // Gallery

  function openModal() {
    document.getElementById("myModal").style.display = "block";
  }
  
  function closeModal() {
    document.getElementById("myModal").style.display = "none";
  }
  
  var slideIndex = 1;
  showSlides(slideIndex);
  
  function plusSlides(n) {
    showSlides(slideIndex += n);
  }
  
  function currentSlide(n) {
    showSlides(slideIndex = n);
  }
  
  function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("demo");
    var captionText = document.getElementById("caption");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
    captionText.innerHTML = dots[slideIndex-1].alt;
  }
