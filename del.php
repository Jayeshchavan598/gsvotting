<!DOCTYPE html>
<html>
<head>
  <title></title>
  <script type="text/javascript" src="jquery.min.js"></script>
  <!-- <script type="text/javascript" src="pages.js"></script> -->
  <script type="text/javascript">
  	$(document).ready(function() {
      setInterval(function () {
  		$.ajax({
             type: "POST",
             url: 'redirect.php',
             // data: {pro_id: val},
             success: function(data)
             {
             // document.getElementById('pid2').value=data;
             // $('#pid2').html(data);
                if(data==1)
                {
                  window.location.href="a.php";
                }
                
                
             }
            });
      }, 1000);
     });
  </script>
</head>
<body>

</body>
</html>