<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>CB! {{date("Y-m-d H:i:s")}}</title>
</head>
<body>
    <div class="container-fluid row">
        <div class="col-auto">
            <div id="qrcode" class="mt-5"></div>

            <div class="mt-5">
                <div class="mb-3">
                    <label for="fontSize" class="form-label">フォントサイズ</label>
                    <input type="number" class="form-control" id="fontSize" value="38" onChange="setFontSize()">
                </div>
                <div class="mb-3">
                    <label for="textColor" class="form-label">文字色
                    </label>
                    <input type="text" class="form-control" id="textColor" value="#000000" onChange="setTextColor()">
                </div>
                <div class="mb-3">
                    <label class="form-label">背景色</label>
                    <button type="button" class="col m-1 btn btn-dark" onClick="setBgColor('black')">Black</button>
                    <button type="button" class="col m-1 btn btn-light" onClick="setBgColor('white')">White</button>
                </div>
                <div class="mb-3">
                    <a href="{{$commentersview_url}}" target="_blank" rel="noreferrer" class="me-2">コメント欄</a>
                    <a href="/" class="ms-2">ホーム</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div id="comment"></div>
        </div>
    
    </div>

    <script>
        setFontSize();
        setTextColor();

        function setFontSize(){
            const text = document.getElementById('comment');
            const fontSize = document.getElementById('fontSize');

            text.style.fontSize = fontSize.value + "px";
        }

        function setTextColor(){
            const text = document.getElementById('comment');
            const textColor = document.getElementById('textColor');

            text.style.color = textColor.value;
        }

        function setBgColor(color){
            const bg = document.body;
            const textColor = document.getElementById('textColor');

            switch(color){
                case 'black':
                    bg.style.color = 'white';
                    textColor.value = '#ffffff';
                    break;
                default:
                    bg.style.color = 'black';
                    textColor.value = '#000000';
                    break;
            }

            bg.style.backgroundColor = color;
            setTextColor();
        }
    </script>

    <script src="/js/cb.js"></script>
    <script type="text/javascript">
        let comment_el =document.getElementById('comment');
        let url = "reload/{{$id}}"
        reload(comment_el, url);
    </script>

    <script src="/js/qrcodejs/qrcode.min.js"></script>
    <script type="text/javascript">
        let qr_el = document.getElementById('qrcode');
        let text = '{{$commentersview_url}}';
        new QRCode(qr_el, text);
    </script>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>