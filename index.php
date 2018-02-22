<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>

<body>

  <div class="jumbotron text-center">
    <h1>Feedback Box</h1>
    <p></p>
  </div>

  <div class="container">
    <form method="post" action="php/feedbackProcess.php">

      <div class="form-group">
        <label for="module">Module: </label>
        <select class="custom-select" id="module" name="module">
 <option value="WAD">Web Application Development</option>
 <option value="AI">Introduction to Artificial Intelligence</option>
11
 <option value="BDA">Business Data Analytics</option>
 </select>
      </div>

      <div class="form-group">
        <label for="semester">Semester: </label>
        <select class="custom-select" id="semester" name="semester">
 <option value="Sem1_2016-17">Sem 1, 2016/17</option>
 <option value="Sem2_2017">Sem 2, 2017</option>
 <option value="Sem1_2017-18">Sem 1, 2017/18</option>
 </select>
      </div>

      <div class="form-group">
        <label for="text">Feedback: </label>
        <textarea class="form-control" id="text" name="text" rows="3" style="minwidth:
100%"></textarea>
      </div>

      <div class="form-group">
        <label class="radio-inline"><input type="radio" name="rating"
value="1">:((</label>
        <label class="radio-inline"><input type="radio" name="rating"
value="2">:(</label>
        <label class="radio-inline"><input type="radio" name="rating"
value="3">:|</label>
        <label class="radio-inline"><input type="radio" name="rating"
value="4">:)</label>
        <label class="radio-inline"><input type="radio" name="rating"
value="5">:))</label>
      </div>

      <input id="submit" name="submit" type="submit" value="Drop into Box" class="btn btn-primary">



    </form>
  </div>

</body>
  <?php
  ini_set('display_errors', 1);
  ?>

</html>