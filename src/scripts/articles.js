
FillInHighlightedArticles(GetHighlightedArticleData);

var articleN = 0;
SetArticleList();


// Highlighted Articles
// ------------
function GetHighlightedArticleData()
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

function FillInHighlightedArticles(getData)
{
  var content = getData();

  var target = document.getElementById('high_arts');
  target.innerHTML = "";

  var div = null;
  for(i=0;i<content.length;i++)
  {
    var item = content[i];
    div = document.createElement('div');
    div.className = "carousel-item";
    if(i==0)div.classList.add("active");
    div.innerHTML = ''+
    '<a class="artcbut" href="article1.php?id='+item.id+'">'+
    '<img class="d-block" src="'+item.image+'" alt="">'+
    '<div class="carousel-caption d-none d-md-block">'+
    '  <h3>'+item.title+'</h3>'+
    '  <p class="carartdate">'+item.date+'</p>'+
    '  <p>'+item.prewiev+'</p>'+
    '</a>'+
    '</div>';

    target.appendChild(div);
  }
}

// Latest Articles
// ------------
function RequestLatestArticles(target,append)
{
  var xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function()
  {
    if(xhr.readyState == 4)
    {
      if(this.status == 200)
      {
        var response = JSON.parse(xhr.response);
        if(response)
        {
          if(response.sent==4)
          {
            articleN = articleN + 4;
            SetGetButton(target);
          }
          else
          {
            SetGetButton(target,true);
          }
          append(target,response.data);
        }
        else
        {
          SetGetButton(target,true);
          console.log('No articles found');
        }
      }
      else
      {
        SetGetButton(target,true);
        console.log('Connection error');
      }
    }
  }
  xhr.open("POST",'http://localhost/Niquismo Website/src/server/server.php',true);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.send("from="+articleN);
}

function ConvertArticleData(data)
{
  var result = [];
  for(var i=0;i<data.length;i++)
  {
    var item = data[i];
    item = item.trim();
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
  return result;
}

function AppendArticleList(target,data)
{
  var content = ConvertArticleData(data);
    for(i=0;i<content.length;i++)
    {
      var item = content[i];
      target.innerHTML = target.innerHTML +
      '<div class="art-gchild-img">'+
      '<img src="'+item.image+'" alt="flower">'+
      '</div>'+
      '<div class="art-gchild-artl">'+
      '<p class="listarttit"><a class="artabut" href="article1.php?id='+item.id+'"><b>'+item.title+'</b></p>'+
      '<p class="listartdate">'+item.date+'</p>'+
      '<p>'+item.prewiev+'</a></p>'+
      '</div>';
    }
}


function SetArticleList()
{
  var target = document.getElementById('articlelist');
  target.innerHTML = "";

  RequestLatestArticles(target,AppendArticleList);
}

function SetGetButton(target,empty = false)
{
  var endMsg = document.getElementById('article_button');
  endMsg.innerHTML = "";
  if(empty)
  {
    endMsg.innerHTML = ''+
    '<div class="artlistnom">'+
    '<p class="artlistnop">Sorry, currently we don'+"'"+'t have any more articles. </p>'+
    '<p class="artlistnop">Please come back later.</p>'+
    '</div>';
  }
  else
  {
    var button = document.createElement('button')
    button.className="button";
    button.textContent = "More Articles";
    button.onclick = function(e)
    {
      this.style.display="none";
      RequestLatestArticles(target,AppendArticleList);
    }
    endMsg.appendChild(button);
  }
}