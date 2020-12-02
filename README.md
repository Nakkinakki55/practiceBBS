# Herokuを用いて掲示板をwebに公開してみた/Deploy BBS which is used by Heroku.

**URL↓↓↓↓↓↓<br />**
**https://practicekeijiban.herokuapp.com/main.php<br />**
<br />
<br />
<br />
**使用したもの/use<br />**
(言語/language:)
<br />HTML PHP<br />

**(Web アプリケーションフレームワーク/Web Application Framework:)<br />** 
Bootstrap<br />

(DB:)<br />
MySQL<br />
<br />
<br />
<br />
**参考文献/References<br />**
PHPで作ったWebサービスをHerokuでデプロイするまでの手順書<br />
https://qiita.com/ak25562983/items/c6bd1ec88e06a1f7f954<br />

【PHP】PHPでリロード対策をして二重投稿を防止しよう<br />
https://the-zombis.sakura.ne.jp/wp/blog/2014/07/11/post-2139/<br />
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
送信ボタンを押した後、リロードすると二重にデータが投稿された。
