<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <!-- use normalize.css -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/4.1.1/normalize.min.css" rel="stylesheet" type="text/css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/sanitize.css/2.0.0/sanitize.min.css" rel="stylesheet" type="text/css">
        <style type="text/css">

        /*全称セレクタの使用は好みが分かれますがリセット忘れがないので便利です*/
        * {
            margin: 0px;
            padding: 0px;
        }
        /*firefoxで縦のスクロールバーが常に表示されるようにします*/
        html {
            overflow-y: scroll;
        }
        /*フォントファミリー、フォントサイズを指定します*/
        body {
            font-family: "Meiryo", "メイリオ", "Arial", "ヒラギノ角ゴ Pro w3", "Hiragino Kaku Gothic Pro,osaka", "ＭＳ Ｐゴシック", sans-serif;
            font-size: 10px;
        }
        /*hタグも10pxから計算できます*/
        h1, h2, h3, h4, h5, h6 {
            font-size: 100%;
        }
        /*テキスト成形のスタイルです*/
        p, li, dt, dd, table {
            text-align: justify;
            text-justify: inter-ideograph;
            line-break: strict;
            font-size: 1.6rem;
            line-height: 1.8;
        }
        /*imgに付く枠線を消します*/
        img {
            border: 0px;
        }
        /*リストのマークを消します*/
        ul,ol{
            list-style-type: none;
        }
        /*テーブルの枠線の設定です*/
        table {
            border-collapse: collapse;
            border-spacing: 0px;
        }
        /*イタリックなどがかかる文字などを通常のスタイルにします*/
        address, caption, cite, code, dfn, em, th, var {
            font-style: normal;
            font-weight: normal;
        }
        /*firefoxでoptionが埋まってしまうときの対策です*/
        select option {
            padding: 0px 5px;
        }
        /*labelの上にポインターがくるとアイコンが変わるようにします*/
        form label {
            cursor: pointer;
        }
        /*:afterを使ってフロートを解除します*/
        .cfix:after {
            content: "";
            display: block;
            clear: both;
        }
        /*オーバーフローを使ってフロートを解除します。afterを使う方が良い場合が多いです*/
        .cfixo {
            overflow: hidden;
        }
        /*リセットしたリストのスタイルをもとに戻します*/
        .ul,
        .ol {
            padding-left: 40px;
            list-style-type: disc;
        }
        .ol {
            list-style-type: decimal;
        }


            .main-nav a {
              margin: 10px;
              border-radius: 5px;
              background: #60B99A;
              color: #fff;
              display: block;
              padding: 15px;
              text-decoration: none;
            }
            .main-nav .logo {
              background: #4584b1;
            }
            .main-nav {
                display: flex;
                justify-content: space-between;
            }
        </style>


    </head>
    <body>
        <h1>Hello fucking world!</h1>
        <h2>Hello fucking world!</h2>
        <h3>Hello fucking world!</h3>
        <h4>Hello fucking world!</h4>
        <div>this is div</div>
        <p>this is paragragh</p>
        <form action="./" name="" >
            <input type="text" name="" value=""><br> 
            <textarea name=""></textarea><br>
            <input type="submit" name="" value="submit"><br>
        </form>


        <nav>
          <ul class="main-nav">
            <li><a href="#" class="logo">Logo</a></li>
            <li><a href="#">Menu 1</a></li>
            <li><a href="#">Menu 2</a></li>
            <li><a href="#">Menu 3</a></li>
            <li><a href="#">Menu 4</a></li>
          </ul>
        </nav>

    </body>
</html>
