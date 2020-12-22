<?php
require('require/session.php');
require('require/validation.php');
require('require/header.html');
?>

<body>
  <?php var_dump($_POST); ?>
  <!-- var_dump(変数)  キー名 => 型(バイト数) "値"-->
  <header class="title">お問い合わせフォーム</header>
  <form action="complete.php" class="form" method="POST">
    <div class=form-contents-wrapper>
      <div class="wrapper">
        <div class="box">件名</div>
        <p class="confirm-content"><?php echo $_POST['title']; ?></p>
        <input type="hidden" name="title" value="<?php echo $_POST['title']; ?>">
      </div>

      <div class="wrapper">
        <div class="box">名前</div>
        <p class="confirm-content"><?php echo $_POST['username']; ?></p>
        <input type="hidden" name="username" value="<?php echo $_POST['username']; ?>">
      </div>

      <div class="wrapper">
        <div class="box">メールアドレス</div>
        <p class="confirm-content"><?php echo $_POST['email']; ?></p>
        <input type="hidden" name="email" value="<?php echo $_POST['email']; ?>">
      </div>
        
      <div class="wrapper">
        <div class="box">電話番号</div>
        <p class="confirm-content"><?php echo $_POST['phoneNumber']; ?></p>
        <input type="hidden" name="phoneNumber" value="<?php echo $_POST['phoneNumber']; ?>">
      </div>
        
      <div class="wrapper">
        <div class="box">お問い合わせ内容</div>
        <p class="confirm-content"><?php echo $_POST['content']; ?></p>
        <input type="hidden" name="content" value="<?php echo $_POST['content']; ?>">
      </div>


    </div>
    <button type="submit" class="button">送信する</button>
    <button type="button" onclick="location.href='input.php?reset'" value="unset">修正する</button>
  </form>
</body>
</html>