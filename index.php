<!DOCTYPE html>
<html lang="en-US">
<html>

<head>

 <title>Journal</title>
 <link rel="stylesheet" href="index.css">
 <script src="index.js"></script>

</head>

<body>

<h1>Journal<h1>

<div class="side">
 <h3>Categories</h3>
 <p>Links to pages</p>
</div>

<div class="entry" id="newPost">
 <h2>New Entry Form</h2>
 <form action="index.php" method="post">
  Entry Type: <br>
  <input type="radio" name="type" value="question"> Question/Thought <br>
  <input type="radio" name="type" value="hm"> Hm <br>
  <input type="radio" name="type" value="happy"> Happy <br>
  <input type="radio" name="type" value="quote"> Quote <br> <br>
  
  Content: <br>
  <input type="text" name="entry" style="width:500px; height:200px; font-size:12px"> <br> <br>
  <input type="submit" value="Add">
 </form>
 
<!-- 
 <p id="content1" onmouseover="setColor(this, 'skyblue')" onmouseout="setColor(this, 'white')"> Paragraph! </p>
 <img id="kite" onclick="changeSize(this)" src="http://static.zerochan.net/Kite.(Hunter.x.Hunter).full.1831755.jpg" width="200px"> 
 <br>
 <input id="input1">
 <button onclick=submitEntry()>Submit</button>
-->
</div>

<div class="entry" id="recent">
 <h2>Recent Entries</h2>
 <p>Your entry is: <?php echo $_POST["entry"]; ?> </p>
</div>

</body>

</html>