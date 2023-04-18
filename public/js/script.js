const form = $('#product_form')




function getCall(value){
    if(value === 'DVD'){
            $("#DVD").show();
            $("#Book").hide();
            $("#Furniture").hide();
    }
    else if(value === 'Book'){
            $("#Book").show();
            $("#DVD").hide();
            $("#Furniture").hide();
    }
    else if(value ==='Furniture' ){
            $("#Furniture").show();
            $("#DVD").hide();
            $("#Book").hide();
    }
}



      
$("#saveBtn").click(function () {
 
  var submit = true;
  
  $(':input[checkable]:visible', form).each(function () {
      if (this.value.trim() === '') {
          alert('Please, submit required data');
          submit = false;
          return false;
      }
  });

  

  if (!submit) {
      return false;
  } else {
      if(!/^(?=.*[A-Z])(?=.*\d).+$/.test($("#sku").val())){
      
      alert("Pelase Provide Right Format of SKU !!")
      return
  }

  
form.submit();
  }
})