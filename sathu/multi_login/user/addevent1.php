<html>
<head>
<title> Add An Event </title>
<style>
body {
    background: url(images/adde.jpg);
    background-size: cover;
    height: 100vh;
    background-position: center;
}
h1{
    font-family: Lucida Handwriting;
    color:blue;
}
table {
        border-collapse: collapse;
        width: 60%;
      }
      th,
      td {
        text-align: left;
        padding: 6px 4px;
        font-size:20px;
        color:black;
      }
      tr {
        background-color: FFE4B5;
      }
     
      button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}
button {
  background-color: white; 
  color: black; 
  border: 2px solid #008CBA;
}

button:hover {
  background-color: #008CBA;
  color: white;
}
      
 </style>
   </head>
   <body>
<form action="addevent.php" method="post" enctype="multipart/form-data">
<h1 align="center">Add An Event</h1>
<table class="table" height="400" width="600" border="3" cellpadding="6" align="center" border="thick solid green">
<tr><th>
Event name:
</th>
<td>
<input type="text" name="t1" >
</td></tr>
<tr><th>
Registration Start Date:
</th>
<td>
<input type="date" name="t2" value="<?php echo date('Y-m-d'); ?>">
</td></tr>
<tr><th>

&nbsp Registartion End Date:
</th>
<td>
<input type="date" name="t3" value="<?php echo date('Y-m-d'); ?>">
</td></tr>
<tr><th>
&nbsp RULES:
</th>
<td>
 <textarea  name="t4"></textarea>
</td></tr>
<tr><th>
&nbsp COORINATOR NAME:
</th>
<td>
 <input type="text"  name="t6"></textarea>
</td></tr>
<tr><th>
&nbsp COORINATOR NUMBER :
</th>
<td>
 <input type="number"  name="t5"></textarea>
</td></tr>
<tr><th>
&nbsp Upload Image:
</th>
<td>
<input type="file" name="image">
</td></tr>

</table>
<h2 align="center">
<button type="submit"class="btn1">Submit</button>
</h2>
</form>
</body>
</html>