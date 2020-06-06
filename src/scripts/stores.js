//fillStoreList(getStoreData);

function fillStoreList(getData)
{
    var content = getData();

    // var target = document.getElementById('asd');
    // target.innerHTML = "";
    var div = null;

    for(i=0;i<content.length;i++)
    {

    }
    console.log(content);
}

function getStoreData()
{
    var data = document.getElementById('store_data').textContent;

    var result = [];
    data = data.split('\n'); //Egyenlőre ne legyen \n egy article-ben

    for(i=0;i<data.length;i++)
    {
      var item = data[i].split(';');
      var comment = {
        thumb: item[0],
        title: item[1],
        street: item[2],
        city: item[3],
        postal: item[4],
        phone: item[5]
      }
      result.push(comment);
    }

    return result;
}