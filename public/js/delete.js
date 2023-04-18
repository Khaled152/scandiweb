document.getElementById('delete-product-btn').addEventListener('click', function() {

  var productIds = [];
  var checkboxes = document.getElementsByClassName('delete-checkbox');
  for (var i = 0; i < checkboxes.length; i++) {
    if (checkboxes[i].checked) {
      productIds.push(checkboxes[i].id);
    }
  }

console.log(productIds)
  if(productIds.length == 0){
      window.location='/';

  }else{
      
      window.location='home/delete/'+productIds.join("/");

  }
  

});