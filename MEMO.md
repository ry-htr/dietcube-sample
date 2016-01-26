MEMO
=================

* 気づいたことややってみたいこと、わからないこと、課題などを記述する。予定

わからないこと
--------------

* 全てのリクエストに対して処理を行う場合(認証など)どう書くのが良いのか
app\Application.phpに書くのか？

わかったこと
----------

* jsonとかをレスポンスとして返すときはどう書くのか？
コントローラークラスのアクションメソッドで
```
return $this->json(['hoge' => 'huga']);
```
を使用すればOK
詳しいことは[こちら](https://github.com/mercari/dietcube/blob/master/src/Controller.php#L96)