<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Practice</title>
    <script src="jquery.min.js"></script>
</head>
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
</style>
<body>
   
    <legend>Login Form</legend>
         <input type="text" placeholder="Username" name="username" id="uname" required="true"><br>
        <input type="password" placeholder="Password" name="password" id="pass"><br>
        <button id="btnsub">Submit</button>
  <br>
  <br>
  <button id="btnsee" onclick="getData()">See Database</button>
<div id="displaydata">
    
</div>
   
   

    <script>
    $(document).ready(function(){
        
      //send data using ajax
    $('#btnsub').click(function(){
       var username = document.getElementById('uname').value;
       var password = document.getElementById('pass').value;
        $.ajax({
          url : 'insertdata.php',
          method : 'POST',
          data : {username:username, password:password},
          success : function(data){
            document.getElementById('uname').value = "";
            document.getElementById('pass').value = "";
            alert(data);
 
          }
      })
    });
    
    
        
        
   


    });
   //get data using ajax embedded onclick
    function getData(){
        $.ajax({
            url : 'retrievedata.php',
            method : 'GET',
            data : {getData : 1},
            success : function(data){
                $('#displaydata').html(data);
                
            }

        });
    }
// $(document).ready(function(){
//     $('#btnsub').click(function(){
//         var a = document.getElementById('uname').value;
//      alert(a);
//     });
// });
    

    </script>
</body>
</html>