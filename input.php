<?php
 require('require/error-messages.php');
 require('require/header.html');
 ?>

<body>
  <?php 
  // var_dump($_GET) ?>
  <?php
  //  var_dump($_SESSION) ?>

  <header class="title">お問い合わせフォーム</header>
  <?php if(isset($messages)): ?>
    <div class="error-messages-wrapper">
      <ul class="error-messages">
        <?php foreach($messages as $message): ?>
        <li><?php echo $message ?></li>
        <?php endforeach; ?>
      </ul>
    </div>
  <?php endif; ?>

  <form action="confirm.php" class="form" method="POST">
    <div class=form-contents-wrapper>
      <div class="wrapper">
        <div class="box">件名</div>
        <select name="title">
          <?php if(isset($_SESSION['title'])){
            $selected = $_SESSION['title'];
            }?>
          <option name="initial" value=""> 選択してください </option>
          <option name="opinion" <?php if($selected == "ご意見"){
            echo "selected";
            }?>>ご意見</option>
          <option name="comment" <?php if($selected == "感想"){
            echo "selected";
            }?>>感想</option>
          <option name="other" <?php if($selected == "その他"){
            echo "selected";
            }?>>その他</option>
        </select>
      </div>
      <div class="wrapper">
        <div class="box">名前</div>
        <input name="username" type=text value="<?php if(isset($_SESSION['username'])){
          echo $_SESSION['username'];} ?>" >
      </div>

      <div class="wrapper">
        <div class="box">メールアドレス</div>
        <input name="email" type=text value="<?php if(isset($_SESSION['email'])){
          echo $_SESSION['email'];
          } ?>">
      </div>

      <div class="wrapper">
        <div class="box">電話番号</div>
        <input name="phoneNumber" type=text value="<?php if (isset($_SESSION['phoneNumber'])){
          echo $_SESSION['phoneNumber'];
        } ?>">
      </div>

      <div class="wrapper">
        <div class="box">お問い合わせ内容</div>
        <textarea name="content"><?php if(isset($_SESSION['content'])){
          echo $_SESSION['content'];
        } ?></textarea>
      </div>
    </div>

    <button type="submit" name="confirm">入力内容を確認する</button>
  </form>
</body>
</html>
