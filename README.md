# Herokuを用いて掲示板（仮）をwebに公開してみた

**URL↓↓↓↓↓↓<br />**
**https://practicekeijiban.herokuapp.com/main.php<br />**
<br />
<br />
<br />
**使用したもの/use<br />**
(言語/language:)
<br />HTML PHP<br />

**(Web アプリケーションフレームワーク/Web Application Framework<br />**
Bootstrap<br />

(DB:)<br />
実装予定<br />
<br />
<br />
<br />
**参考文献/References<br />**
PHPで作ったWebサービスをHerokuでデプロイするまでの手順書<br />
https://qiita.com/ak25562983/items/c6bd1ec88e06a1f7f954<br />
<br />
<br />
<br />
**詰まったポイント<br />**
composerをインストールせずに実行しようとしたところ<br />
(https://getcomposer.org/doc/00-intro.md#installation-windows)<br />

https://practicekeijiban.herokuapp.com/main.php
ではなく
https://practicekeijiban.herokuapp.com
で表示してエラーが出ていた。巻末に/main.phpをつけるべきだった。
<br />
<br />
<br />
**次にやること<br />**
MySQLに接続してDBの中身を表示する
