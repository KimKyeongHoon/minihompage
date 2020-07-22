<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
<!-- 합쳐지고 최소화된 최신 CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

<!-- 부가적인 테마 -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

<!-- 합쳐지고 최소화된 최신 자바스크립트 -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

<style>
  .login{
    margin-top : 200px;
    background-color: #ffffff;
    border-radius : 5%;
    
    padding-bottom : 50px;
  }
  .login h2{
    text-align : center;
  }
  .bg{
    background-color:rgba(0,0,0,0.5);
    position:absolute;
    width:100%;
    height:100%;
  }
  ul{
    margin : 10px;
    padding:0px;
    text-align:center;
  }
  ul li{
    display:inline;
    border-left : 1px solid #999;
    padding:0 10px;
  }
  ul li:first-child{
    border-left:none;
  }
</style>

</head>
<body style="background: url('bg.png') center top no-repeat;">
<div class="bg"></div>
    <div class="container">
      <div class = "col-xs-4 col-xs-offset-4 login">
        <h2>Jyworld</h2>
        <form action="">
          <div class = "form-group">
            <label for="inputemail">이메일 주소</label>
            <input type="email" class="form-control" id = "inputemail" placeholder = "이메일을 입력하세요">
          </div>
          <div class = "form-group">
            <label for="inputpassword">암호</label>
            <input type="password" class = "form-control" id = "inputpassword" placeholder = "암호를 입력하세요">
          </div>
          <button class = "btn btn-default btn-block" type="submit">로그인</button>
        </form>
        <ul>
          <li>아아디/비밀번호 찾기</li>
          <li>회원가입</li>
        </ul>
      <div>
    </div>
    
</body>
</html>