<?php include'../commoncode/commoncss.php';
  session_start();  
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/BS_css/css/BS.min.css">
</head>
<body>
    <h1>chatrrom </h1>
    <form  method="POST">
     <div class="input-group">
    <textarea class="form-control" aria-label="With textarea"></textarea>
    </div>
    <div class="input-group">
  <span class="input-group-text">With textarea</span>
  <textarea class="form-control" aria-label="With textarea"  id="msg" name="name"></textarea>
    </div>
    <div class="container"></div>
    <button type="button" class="btn btn-success" id="send" name="send " >send</button>
    <?php
     print_r($_SESSION);
     echo "$_SESSION[username]";
     $userId='$_SESSION[id]';
    ?> 

    </form>
<script type="text/javascript">

		var con = new WebSocket('ws://localhost:8080');
		con.onopen = function(e) {
		    console.log("Connection established!");
		};

		con.onmessage = function(e) {
		    console.log(e.data);
		    var data = JSON.parse(e.data);


		};

		con.onclose = function(e) {
			console.log("Connection Closed!");
		}

 
		// $("#send").click(function(){
		// 	var userId 	= $userId;
		// 	var msg 	= $("#msg").val();
		// 	var data = {
		// 		userId: userId,
		// 		msg: msg
		// 	};
		// 	con.send(JSON.stringify(data));
		// 	$("#msg").val("");
    //   con.send("hello");
		// });

  
</script>
</body>

</html>