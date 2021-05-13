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
      <input class="create_btn btn" type="submit" value="追加">
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

            <form action="/todo/update/" method="post">
            @csrf
              <input type="hidden" name="id" value="{{$blog->id}}">
              <td>
                <div>
                  <input type="text" name="content" value="{{$blog->content}}">
                </div>
              </td>
              <td>
                <input class="update_btn btn" type="submit" value="更新">
              </td>
            </form>

            <form action="/todo/delete/" method="post">
              <td>
                  @csrf
                  <input type="hidden" name="id" value="{{$blog->id}}">
                  <input class="delete_btn btn" type="submit" value="消去">
              </td>
            </form>
          </tr>
        @endforeach
        </tbody>
      </table>
  </div>
</body>
</html>