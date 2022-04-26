<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 50%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>
<body>

<script src="infoCol.js" type="text/javascript"></script>
<script src="https://www.gstatic.com/firebasejs/6.0.2/firebase.js"></script>

<h1>Contact Form</h1>

<div class="container">
  <form action="/action_page.php">
    <label for="name">Name</label>
    <br>
    <input type="text" id="name" name="name" placeholder="Your name..">
    <br>
    <label for="pcm_perc">PCM (PHYSIC CHEMISTRY MATHS) MARKS PERCENTAGE</label>
    <br>
    <input type="text" id="perc" name="perc" placeholder="Enter your PERCENTAGE">
    <br>
    <label for="type">Type</label>
    <br>

    <select id="type" name="type">
      <option value="MGMT">MANAGEMET</option>
      <option value="NRI">NRI</option>
    </select>
    <br>
    <label for="brach">Preferd branch</label>
    <br>

    <select id="branch" name="brach">
      <option value="CSE">CSE</option>
      <option value="ECE">ECE</option>
      <option value="ME">ME</option>
      <option value="CE">CE</option>
      <option value="EEE">EEE</option>

    </select>
    <br>
    <input type="submit" value="Submit">
  </form>
</div>
</body>
</html>