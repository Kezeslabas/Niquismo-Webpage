
//fillArticleList(getArticleData);


function getArticleData()
{
    var data = document.getElementById('art_data').textContent;

    var result = [];
    data = data.split('\n'); //Egyenlőre ne legyen \n egy article-ben

    for(i=0;i<data.length;i++)
    {
      var item = data[i].split(';');
      var comment = {
        date: item[0],
        thumb: item[1],
        title: item[2],
        content: item[3]
      }
      result.push(comment);
    }

    return result;
}

function fillArticleList(getData)
{
    var content = getData();

    var target = document.getElementById('articlelist');
    target.innerHTML = "";
    var div = null;

    for(i=0;i<content.length;i++)
    {
      var item = content[i];
      div = document.createElement('div')
      div.innerHTML = '<img src="'+item.thumb+'">';
      div.className = "art-gchild-img";
      target.appendChild(div);

      div = document.createElement('div')
      div.innerHTML = ''+
      '<p>'+item.title+'</p>'+
      '<p>'+item.content+'<a href="">Read more >></a></p>';
      div.className = "art-gchild-artl";
      target.appendChild(div);

    }
}