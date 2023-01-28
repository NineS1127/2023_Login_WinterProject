<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Board</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script></head>
<body>
<div class="container">
  <h2 style="margin-top: 30px; float: center; text-align: center; font-size: 60px; font-weight: bold;">Board</h2>
  <form action="write.jsp" method="post">
    <div class="form-group">
      <label for="title" style="font-size: 20px; margin-top: 30px;">Title</label>
      <input type="text" class="form-control" id="title"
       placeholder="Insult Title(4-100 letters)" name="title"
       maxlength="100" required="required"
       pattern=".{4,100}">
    </div>
    <div class="form-group">
   <label for="content" style="font-size: 20px; margin-top: 20px;">Contents</label>
   <textarea class="form-control" style="height: 500px;" rows="5" id="content"
    name="content" placeholder="Write contents in here !"></textarea>
 </div>
    <div class="form-group">
      <label for="writer">Writer</label>
      <input type="text" class="form-control" id="writer"
       placeholder="Writer(2-10 letters)" name="writer">
    </div>
    <button type="submit" class="btn btn-default">OK</button>
  </form>
</div>
</body>
</html>
