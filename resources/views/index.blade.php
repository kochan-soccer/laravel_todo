<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="content">
    <h1 class="content_title">Todo List</h1>
    @if(count($errors) > 0)
    <div>
      <ul>
        @foreach($errors->all() as $error)
          <li>{{$error}}</li>
        @endforeach
      </ul>
    </div>
    @endif
    <form action="/todo/create" method="post">
      <input type="text" name="content" >
      <input type="submit" value="追加">
    </form>
      <table>
        <thead>
          <th>作成日</th>
          <th>タスク名</th>
          <th>更新</th>
          <th>消去</th>
        </thead>
        <tbody>
        @foreach($blogs as $blog)
        <td>
          <div>{{$blog->created_at}}</div>
        </td>
        @endforeach
        </tbody>
      </table>
  </div>
</body>
</html>