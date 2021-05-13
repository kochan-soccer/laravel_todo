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
    @csrf
      <input type="text" name="content" >
      <!-- <input type="submit" value="追加"> -->
      <button class="btn">送信</button>
    </form>
      <table>
        <thead>
          <tr>
            <th>作成日</th>
            <th>タスク名</th>
            <th>更新</th>
            <th>消去</th>
          </tr>
        </thead>
        <tbody>
        @foreach($blogs as $blog)
          <tr>
            <td>
              <div>{{$blog->created_at}}</div>
            </td>
            <td>
              <div>
                <input type="text" value="{{$blog->content}}">
              </div>
            </td>
            <td>
              <form action="/todo/update/{{$blog->id}}" method="post">
              @csrf
                <button>更新</button>
              </form>
            </td>
            <td>
              <form action="/todo/delete/{{$blog->id}}" method="post">
              @csrf
                <button>消去</button>
              </form>
            </td>

          </tr>
        @endforeach
        </tbody>
      </table>
  </div>
</body>
</html>