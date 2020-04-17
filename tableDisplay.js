$(function(){
  $.ajax({
    url     : 'tableDisplay.php',
    data    : {},
    type    : 'POST',
    success : function(resp){
      $("#tableTest").html(resp);
      $("#tableTest").dataTable();
    },
    error   : function(resp){
      alert(JSON.stringify(resp));  //alert for error in table manipulation
    }
  });
});
