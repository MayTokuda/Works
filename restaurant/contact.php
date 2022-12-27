<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="reset.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Tangerine&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
        <script src="//code.jquery.com/jquery-2.2.4.min.js"></script>
        <title>French Restrant / contact</title>
    </head>

    <body>
        <!--header.php読み込み-->
        <?php include('./header.php'); ?>
        
        <main>
            <div class="box_contact">
                <h2>CONTACT</h2>
                <form method="post" action="mail.php">
                    <table class="formTable">
                        <tr>
                            <th>ご用件</th>
                            <td><select name="ご用件">
                                <option value="">選択してください</option>
                                <option value="ご質問・お問い合わせ">ご質問・お問い合わせ</option>
                                <option value="リンクについて">リンクについて</option>
                            </select></td>
                        </tr>
                        <tr>
                            <th>お名前<span>必須</span></th>
                            <td><input size="20" type="text" name="お名前" /></td>
                        </tr>
                        <tr>
                            <th>電話番号（半角）<span>必須</span></th>
                            <td><input size="30" type="text" name="電話番号" /></td>
                        </tr>
                        <tr>
                            <th>Mail（半角）</th>
                            <td><input size="30" type="text" name="Email" /></td>
                        </tr>
                        <tr>
                            <th>お問い合わせ内容<br /></th>
                            <td><textarea name="お問い合わせ内容" cols="50" rows="5"></textarea></td>
                        </tr>
                    </table>
                    <div class="con_privacy">
                        <div class="box_privacy">
                            <div class="box_definition">
                                <h4>プライバシー</h4>
                                <p class="txt">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                            </div>
                            <div class="box_number">
                                <h4>プライバシー</h4>
                                <p class="txt">テキストテキストテキストテキストテキストテキストテキストテキスト</p>
                            </div>
                            <div class="box_number">
                                <h4>プライバシー</h4>
                                <p class="txt">テキストテキストテキストテキストテキストテキストテキストテキスト</p>
                            </div>
                            <div class="box_number">
                                <h4>プライバシー</h4>
                                <p class="txt">テキストテキストテキストテキストテキストテキストテキストテキスト</p>
                            </div>
                        </div>
                    </div>
                    <div class="button">
                        <div class="box_check">
                            <label>
                                <input type="checkbox" name="acceptance-714" value="1" aria-invalid="false" class="agree"><span class="check">プライバシーポリシーに同意する</span>
                            </label>
                        </div>
                        <p class="btn">
                            <span><input type="submit" value="　 送信 　" /></span>
                        </p>
                    </div>
                </form>
            </div>
        </main>

        <!--footer.php読み込み-->
        <?php include('./footer.php'); ?> 

    </body>
</html>


