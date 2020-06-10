// Articles
// ------------
FillInLatestArticles(GetArticleData);

// Comments 
// ------------
FillInComments(GetCommentData);
setSubmitComment();



// Articles for main page
// ------------
function GetArticleData()
{
  var data = document.getElementById('art_data').textContent;
  var result = [];
  data = data.trim();
  data = data.split('\n');

  for(i=0;i<data.length;i++)
  {
    var item = data[i];
    if(item)
    {
      var item = item.split(';');
      var article = {
        id: item[0],
        date: item[1],
        image: item[2],
        title: item[3],
        prewiev: item[4]
      }
      result.push(article);
    }
  }

  // console.log(result);
  return result;
}
function FillInLatestArticles(getData)
{
  var content = getData();
  
  
  var target = document.getElementById('articleprev');
  target.innerHTML="";

  var div = null;
  for(i=0;i<content.length;i++)
  {
    var item = content[i];

    div = document.createElement('div');
    div.className="artp-gchild";
    div.innerHTML = '<a class="artabut" href="article1.php?id='+item.id+'">'+
    '<img src="'+item.image+'" alt="">'+
    '<p class="arttit">'+item.title+'</p>'+
    '<p class="artdat">'+item.date+'</p>'+
    '<p class="artpar">'+item.prewiev+'</p></a>';

    target.appendChild(div);
  }
}


// Comment Fill, Submission and Setup
// ------------
function GetCommentData()
{
  var data = document.getElementById('comm_data').textContent;
  
  var result = [];
  data = data.split('\n');
  
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

  // console.log(result);
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

function submitComment(form)
{
  var comment = null;
  if(form.fname.value && form.fcomment.value)
  {
    comment = form.fname.value +';'+ form.fcomment.value
    comment = comment.replace("\n","");
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function()
    {
      if(xhr.readyState == 4)
      {
        var msg = document.getElementById('commentok');
        msg.style.display = 'block';
        if(this.status == 200)
        {
          console.log(xhr.response);
          var response = JSON.parse(xhr.response);
          if(response)
          {
            msg.textContent = "Thank you for your feedback!";
          }
          else
          {
            msg.textContent = "Ups something went wrong. Please try again later!";
          }
          form.fname.value = "";
          form.fcomment.value = "";
        }
        else
        {
          msg.textContent = "Ups something went wrong. Please try again later!";
        }
      }
    }
    xhr.open("POST",'http://localhost/Niquismo Website/src/server/server.php',true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("comment="+comment);
  }
  else
  {
    var msg = document.getElementById('commentok');
    msg.style.display = 'block';
    msg.textContent = "You have to add a name and text to your comment!";
  }
};

function setSubmitComment()
{
  var submit = document.getElementById('commentform');
  submit.addEventListener('submit', function(e)
  {
    e.preventDefault();
    submitComment(this);
  });
}

function addComment() {
    var x = document.getElementById("commform");
    if (x.style.display === "block") {
      x.style.display = "none";
    } else {
      x.style.display = "block";
    }
    var msg = document.getElementById('commentok');
    msg.style.display = 'none';
  }

// Gallery
// ------------
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
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slides[slideIndex-1].style.display = "block";

  }
