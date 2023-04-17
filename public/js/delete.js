document.getElementById('delete-product-btn').addEventListener('click', function() {

  var productIds = [];
  var checkboxes = document.getElementsByClassName('delet-checkbox');
  for (var i = 0; i < checkboxes.length; i++) {
    if (checkboxes[i].checked) {
      productIds.push(checkboxes[i].id);
    }
  }
  if(productIds.length == 0){
      window.location='/';

  }else{
      
      window.location='home/delete/'+productIds.join("/");

  }
  

});