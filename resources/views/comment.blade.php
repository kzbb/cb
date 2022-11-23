<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>コメント入力 - CB!</title>
</head>
<body onload="document.getElementById('comment').focus();">
    <div class="col-lg-8 mx-auto p-3 py-md-5">
        <main>
            <div class="">
                @foreach ($comment_templates as $comment_template)
                <div class="m-2 float-start">
                    <form action="{{url('/send_comment')}}" method="POST">
                        {{ csrf_field() }}
                        <input type="hidden" value="{{$id}}" name="board">
                        <input type="hidden" value="{{$comment_template}}" name="comment">
                        <button class="btn btn-outline-primary btn-lg px-4" type="submit">{{$comment_template}}</button>
                    </form>
                </div>
                @endforeach
            </div>

            <div class="">
                <form action="{{url('/send_comment')}}" method="POST">
                    {{ csrf_field() }}
                    <input type="hidden" value="{{$id}}" name="board">
                    <div class="mt-3">
                        <textarea id="comment" name="comment" class="form-control mb-3"></textarea>
                        <button class="btn btn-primary btn-lg px-4" type="submit">送信</button>
                    </div>
                </form>
            </div>

        </main>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>