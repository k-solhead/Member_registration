＜関数＞

get_post($key)
html_escape($word)　　　　　　　　エスケープ処理
check_word($word, $length)　　　バリデーション（長さ）
get_db_connnect()　　　　　　　　データベース接続

＜データベース＞
id       int        5
name     varchar    50
email    varchar    200
password varchar    255
created  datetime

＜ファイル構成＞
config.php
signup.php
login.php
logout.php
member.php

helpers db_helpre.php
        extra_helper.php

views   signup.php
        login.php
        member_view.php
