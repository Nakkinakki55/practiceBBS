# Herokuを用いて掲示板をwebに公開してみた/Deploy BBS which is using Heroku.

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
【Python入門】Djangoとは？基礎知識 + 使い方を解説！<br />
https://www.sejuku.net/blog/9014<br />

【Django入門】あなたのパソコンにDjangoをインストール！<br />
https://www.sejuku.net/blog/28235<br />

【Django入門】viewsを使ってページを表示させよう<br />
https://www.sejuku.net/blog/25952<br />

【Python入門】virtualenvで仮想環境を作ろう<br />
https://www.sejuku.net/blog/68398<br />

Python仮想環境とDjango<br />
https://qiita.com/Syoitu/items/54d6d3e57482c1e8ab17<br />
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
