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