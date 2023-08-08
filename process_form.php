<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // ここでメール送信のコードを記述します。例えば、以下のようにしてメールを送信できます。
    $to = "kengo-matayoshi-20c@stu.kbc.ac.jp";
    $subject = "お問い合わせがありました";
    $headers = "From: $email";

    mail($to, $subject, $message, $headers);

    // 送信後、ユーザーを別のページにリダイレクトさせるなどの処理を追加することもできます。
    header("Location: thank_you_page.html");
    exit;
}
?>
