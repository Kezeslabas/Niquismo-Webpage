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
GetArticleData();

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
  var div = null;

  for(i=0;i<content.length;i++)
  {
    var item = content[i];
    div = document.createElement('div')
    div.innerHTML = ''+
    '<p><em><q>'+item.text+'</q></em></p>'+
    '<p><i>- '+item.name+'</i></p>';
    if(i==0)div.classList.add('visible');
    else div.classList.add('hidden');
    target.appendChild(div);
  }


}

function addComment() {
    var x = document.getElementById("commform");
    if (x.style.display === "block") {
      x.style.display = "none";
    } else {
      x.style.display = "block";
    }
  }