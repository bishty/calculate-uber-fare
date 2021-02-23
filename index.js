
$(document).ready(function () {
  $("#submit").click(function(e){
    e.preventDefault();
    $.ajax({
      url: "fareobj.php",
      type: "POST",
      datatype:"html",
      data:$("#form").serialize(),
      success:function(data){
       $(".modal-body").html(data);
       $("#modal").modal('show');
      }
    });
  });
  $("#sel").change(function () {
    var sel = $("#sel").val();
    console.log(sel);
    if (sel == "CedMicro") {
      $("#place").prop("disabled", true);
      $("#place").attr(
        "placeholder",
        " YOU DON'T CARRY YOUR LUGGAGE WITH YOU ."
      );
    } else {
      $("#place").prop("disabled", false);
      $("#place").attr("placeholder", "In kg");
    }
  });



  
  $("#pick").on("change",function(){
      $("#drop option").show();
      $("#drop option[value=" +$(this).val()+"]").hide();

  });

  $("#drop").on("change",function(){
      $("#pick option").show();
      $("#pick option[value=" +$(this).val()+"]").hide();
  });

  $("#close").on("click",function(){
    $("#modal").modal('hide');
  });
    
  });
  

