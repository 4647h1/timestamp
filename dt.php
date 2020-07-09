<!doctype html>
<html>
<head>
    <title>timestamp attempt</title>
 <script>
    var time = new Date();
    function show(id) {
      if (id == 1)
      {
         document.getElementById('time').value=time;
      }
     
    }
 </script>
</head>
<body>
 <form action="dil.php" method="POST">
 First Name: <input type="text" name="fname"><br /> 
 Last Name: <input type="text" name="lname"><br /> 
 About:<textarea name="about"></textarea><br />
 </form>
 <input type='text' id="time" value="">
   <button id='1' onclick="show(this.id)">click submit</button>
    <br>
</body>
</html>