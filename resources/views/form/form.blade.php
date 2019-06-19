<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('css/app.css')  }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach( $errors->all() as $error )
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('form.submit') }}" method="POST">
            <div class="form-group">
                <label>标题</label>
                <input type="text" name="title" class="form-control" placeholder="输入标题" value="{{old('title')}}">
            </div>
            <div class="form-group">
                <label>URL</label>
                <input type="text" name="url" class="form-control" placeholder="输入URL" value="{{old('url')}}">
            </div>
            <button type="submit" class="btn btn-primary">提交</button>
        </form>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>