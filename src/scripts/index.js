// Request data from Server

// Articles (3 latest)
//  Date
//  Thumbnail
//  Title
//  Content

// Gallery (4 random)
//  Imgage urls

// Comments (All authorized?)
//  Date
//  Name
//  Text

// Draw Out Article preview

// Draw out Gallery Preview
GetArticleData();
GetCommentData();

function GetArticleData()
{
  var data = document.getElementById('art_data').textContent;

}
function GetCommentData()
{
  var data = document.getElementById('comm_data').textContent;
}

function addComment() {
    var x = document.getElementById("commform");
    if (x.style.display === "block") {
      x.style.display = "none";
    } else {
      x.style.display = "block";
    }
  }