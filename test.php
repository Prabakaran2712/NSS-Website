<?php require './views/header.php'; ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<?php require './test2.php'; ?>

<script>
  function todo(){
  $.ajax({
  url:"test2.php",
  method:"POST",
  data:{
    a: 'hello'
  },
  success:function(data){
    $('#volist').html(data);
  }
})
}
</script>
<?php require './views/footer.php'; ?>