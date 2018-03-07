<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Bootstrap Snippet: Login Form</title>
  
  
  <link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css'>

      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
    <form action="verify" method="post"  enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group">
            <input type="file" class="form-group" name="img" ID="img" multiple>
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
    </form>
</body>

</html>
