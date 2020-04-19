<!doctype html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
    <style>
        table{
            margin:10px 30px 30px 50px;
        }
        table thead{
            width:max-content;
        }
        button{
            margin-top:20px;
            float:right;
            width:60px;
            border-radius:5px;

        }
    </style>
</head>
<body>


  <div>
      <table class="table table-striped">
          <thead>
          <tr>
              <th scope="col">No</th>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col">Description</th>
          </tr>
          </thead>
          <tbody>
          @foreach($users as $user)
              <tr>
                  <td>{{$user->id}}</td>
                  <td>{{$user->name}}</td>
                  <td>{{$user->email}}</td>
                  <td>{{$user->title}}</td>
                  <td>{{$user->description}}</td>
              </tr>
          @endforeach

          </tbody>
      </table>

  </div>

</body>
</html>