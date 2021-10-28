
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleinf.css">
    <link rel="stylesheet" href="{{ asset('css/styleinf.css') }}">
    <title>お問い合わせ</title>
  </head>
  <body>
  @section('layouts.layout2')
  <header class="container">
    <h1>お問い合わせ</h1>
  </header>
  
  <div class="nav">
    <ul>
      <li><a href="{{ url('hello') }}">トップ</a></li>
      <li><a href="#">ナビ１</a></li>
      <li><a href="{{ url('info') }}" >お問い合わせ</a></li>
      <li><a href="{{ url('mypage') }}" >自己紹介</a></li>
    </ul>
  </div>
  
  <div class="wrapper">

  <form method="POST" name="name_form" action="{{url('/sample/store')}}">
  {{ csrf_field( ) }}
    
   <div class="name">
     <p>名前</p>
    <label id=",myname"> </label>
    <input type="text" name="name">
  </div>   
    
    <label for="male" >性別</label>
    <div class="gender">

      <label for="r_male">男性
        <input  type="radio" name="gender" value=1>
        </label>
      <label for="r_female">女性
         <input type="radio" name="gender" value=2>
      </label>
    </div>
    
    <div class="content">
      <div class="content-label">
        <label for="content" >問合内容</label>
      </div>
      <textarea id="content" name="message" ></textarea>
    </div>
    
    <label id="file">添付ファイル</label>
    <div class="file">
      <input type="file" name="example" > 
    </div> 
    
    <div class="button">
      <button type="sumbit" onclick="return check()">送信</button>
    </div>
  </form>
  
</div>
  <div class="footer">
    <p>&copy; 20xx ∞ ALL Rights Reserved.</p>
</div>
<script src="{{ asset('/js/info.js') }}"></script>


</body>
</html>