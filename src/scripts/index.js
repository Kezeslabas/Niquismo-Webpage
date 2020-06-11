// Articles
// ------------
FillInLatestArticles(GetArticleData);

// Comments 
// ------------
FillInComments(GetCommentData);
setSubmitComment();

// Gallery
// ------------
FillInGallery(GetGalleryData);

// Mail
// ------------
setSubmitMail();

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
      item = item.split(';');
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

// Mail
// ------------
function setSubmitMail()
{
  var submit = document.getElementById('mail_form');
  submit.addEventListener('submit', function(e)
  {
    e.preventDefault();
    SubmitMail(this);
  });
}

function SubmitMail(form)
{
  var mail = {
    name: form.cname.value,
    email: form.cemail.value,
    job: form.job.value,
    text: form.text.value
  }
  if(mail.name && mail.email && mail.job && mail.text)
  {
    mail = JSON.stringify(mail);
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function()
    {
      if(xhr.readyState == 4)
      {
        var msg = document.getElementById('mail_msg');
        msg.style.display = 'block';
        if(this.status == 200)
        {
          console.log(xhr.response);
          var response = JSON.parse(xhr.response);
          if(response)
          {
            msg.textContent = "Email sent successfully! We will contact you soon!";
          }
          else
          {
            msg.textContent = "Ups something went wrong. Please try again later!";
          }
          form.cname.value="";
          form.cemail.value="";
          form.text.value="";
        }
        else
        {
          msg.textContent = "Ups something went wrong. Please try again later!";
        }
      }
    }
    xhr.open("POST",'http://localhost/Niquismo Website/src/server/server.php',true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("mail="+mail);
  }
  else
  {
    var msg = document.getElementById('mail_msg');
    msg.style.display = 'block';
    msg.textContent = "Please fill in every field!";
  }
}

// Gallery
// ------------
function GetGalleryData()
{
  var data = document.getElementById('gal_data').textContent;

  data = data.trim();
  data = data.substring(0, data.length-1);
  data = data.split(';');


  return data;
}

function FillInGallery(getData)
{
  var content = getData();

  var target = document.getElementById('gal_list');
  target.innerHTML="";
  var modal = document.getElementById('gal_modal');
  modal.innerHTML = "";

  var images = 4;
  if(content.length<images)images = content.length;
  for(i=0;i<images;i++)
  {
    var item = content[i];
    target.innerHTML = target.innerHTML +
    '<div class="column">'+
    '<img src="'+item+'" style="width:100% " onclick="openModal();currentSlide('+(i+1)+')" class="hover-shadow cursor">'+
    '</div>';

    modal.innerHTML = modal.innerHTML +
    '<div class="mySlides">'+
    '<div class="numbertext">'+(i+1)+' / '+images+'</div>'+
    '<img src="'+item+'" style="width:100%">'+
    '</div>';
  }
}


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
