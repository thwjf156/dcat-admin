
<div align="center">
    <img src="https://cdn.learnku.com/uploads/images/202009/27/38389/WFQxJ7qZ1k.png!large" height="80"> 
</div>
<br>

<p align=""><code>Dcat Admin</code>は<a href="https://www.laravel-admin.org/" target="_blank">laravel-admin</a>に基づいて作られたシステム構築ツールである</p>


- [公式サイト](http://www.dcatadmin.com)
- [中国語ドキュメント](https://learnku.com/docs/dcat-admin)
- [英語ドキュメント](http://www.dcatadmin.com/docs/en-2.x/quick-start.html)
- [デモサイト](http://103.39.211.179:8080/admin)
- [デモソース](https://github.com/jqhph/dcat-admin-demo)


![](https://cdn.learnku.com/uploads/images/202101/28/38389/YLmL7PLqH7.png!large)



### 环境
 - PHP >= 8.1.0
 - Laravel 10.0 ~
 - Fileinfo PHP Extension

### インストール

首先需要安装`laravel`框架，如已安装可以跳过此步骤。如果您是第一次使用`laravel`，请务必先阅读文档 [安装 《Laravel中文文档》](https://learnku.com/docs/laravel/8.x/installation/9354) ！
```bash
composer create-project --prefer-dist laravel/laravel project 10.*
# または
composer create-project --prefer-dist laravel/laravel project
```

インストールが完了したら、修正ファイルが必要です。.envデータベース接続を設定してください。

```dotenv
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=dcat-admin
DB_USERNAME=root
DB_PASSWORD=
```

`dcat-admin`のインストール


```
cd {プロジェクト名}

composer require dcat/laravel-admin
```

その後、次のコマンドを実行して配布ソースを発行します。

```
php artisan admin:publish
```

```
php artisan admin:install
```

Webサーバ nginx の場合は下記を設定してください
```dotenv
location / {
	try_files $uri $uri/ /index.php?$query_string;
}
```

サービスのURL http://localhost/admin ユーザー名`admin`とパスワード`admin`が登録されております。


### 感謝の意
`Dcat Admin` 以下のコンポーネントをりようしております

+ [Laravel](https://laravel.com/)
+ [Laravel Admin](https://www.laravel-admin.org/)
+ [AdminLTE3](https://github.com/ColorlibHQ/AdminLTE)
+ [bootstrap4](https://getbootstrap.com/)
+ [jQuery3](https://jquery.com/)
+ [Eonasdan Datetimepicker](https://github.com/Eonasdan/bootstrap-datetimepicker/)
+ [font-awesome](http://fontawesome.io)
+ [jquery-form](https://github.com/jquery-form/form)
+ [moment](http://momentjs.com/)
+ [webuploader](http://fex.baidu.com/webuploader/)
+ [jquery-pjax](https://github.com/defunkt/jquery-pjax)
+ [Nestable](http://dbushell.github.io/Nestable/)
+ [toastr](http://codeseven.github.io/toastr/)
+ [editor-md](https://github.com/pandao/editor.md)
+ [fontawesome-iconpicker](https://github.com/itsjavi/fontawesome-iconpicker)
+ [layer弹出层](http://layer.layui.com/)
+ [char.js](https://www.chartjs.org)
+ [nprogress](https://ricostacruz.com/nprogress/)
+ [bootstrap-validator](https://github.com/1000hz/bootstrap-validator)
+ [Google map](https://www.google.com/maps)
+ [Tencent map](http://lbs.qq.com/)



### License
`dcat-admin` is licensed under [The MIT License (MIT)](LICENSE).
