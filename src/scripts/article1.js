DrawOutArticle(GetMainArticleData, GetSecondaryArticleData)


function GetMainArticleData()
{
    var data = document.getElementById('art_data').textContent;
    data = data.split(';');

    var result = null;
    if(data.length>=6)
    {
        result = {
            header: {
                date: data[1],
                image: data[2],
                title: data[3],
                prewiev: data[4]
            },
            body: []
        };

        for(var i=5;i<data.length;i++)
        {
            result.body.push(data[i]);
        }
    }
    return result;
}

function GetSecondaryArticleData()
{
    var data = document.getElementById('last_data').textContent;
    
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
          }
          result.push(article);
      }

    }
  
    // console.log(result);
    return result;
}

function DrawOutArticle(getMainData,getSecData)
{

    var mainContent = getMainData();
    var lastContent = getSecData();
    if(mainContent)
    {
        var mainTarget = document.getElementById('maintarget');
        mainTarget.innerHTML = ''+
        '<img src="'+mainContent.header.image+'" alt=""></img>'+
        '<h2 class="oparttitle">'+mainContent.header.title+'</h2>';

        var target = document.createElement('div');
        target.className = "opartart";
        target.innerHTML = '<p class="opartartin">'+mainContent.header.prewiev+'</p>'
        
        var body = mainContent.body;
        for(var i=0;i<body.length;i++)
        {
            target.innerHTML = target.innerHTML +
            '<p class="opartartp">'+body[i]+'</p>';
        }
        mainTarget.appendChild(target);

        var lastTarget = document.getElementById('openart');
        lastTarget.innerHTML = "";

        for(var i=0;i<lastContent.length;i++)
        {
            var item = lastContent[i];
            lastTarget.innerHTML = lastTarget.innerHTML +
            '<div class="opartp-gchild"><a class="artabut" href="article1.php?id='+item.id+'">'+
            '<img src="'+item.image+'" alt="">'+
            '<p class="oparttit">'+item.title+'</p>'+
            '<p class="opartdat">'+item.date+'</p>'+
            '</a>'+
            '</div>';     
        }
    }

}