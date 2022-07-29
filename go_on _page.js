 $(document).ready(function(){

        var currentdate = $("#currentdate").val();

        var regi_date = $("#regi_date").val();
        var vote_start_date = $("#vote_start_date").val();
        var vote_end_date = $("#vote_end_date").val();

         if(currentdate>=regi_date && currentdate<vote_start_date)  
          {
            window.location.href="a.php";
          }
          else if(currentdate>=vote_start_date && currentdate<=vote_end_date)  
          {
            window.location.href="b.php";
          }
          else
          {
            window.location.href="c.php";

          }
           
    });