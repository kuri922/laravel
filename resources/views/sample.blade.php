<!DOCTYPE html>
<html lang="ja">
<head>

  <style>
  body ul {
display: flex;
list-style: none;
gap: 6px 10px;
padding: 10px;

}
table td{
  padding : 20px 10px;
}
  </style>
  <meta charset="UTF-8">
  <title>問合せ内容</title>
</head>
<body>

      <ul>
            <li>名前</li> <li>性別</li><li>問合せ内容</li>
      </ul> 

      <table>
  @foreach($posts as $post)

  
      <tr>
            <td>{{$post->name}}</td> 
            <td>{{$post->gender}}</td>
            <td>{{$post->message}}</td>

            
      </tr>
      @endforeach

      <a href="/home">ホームへ</a> </td>

   
</body>
</html>