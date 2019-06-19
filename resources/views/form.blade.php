<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('task.delete', [1]) }}" method="post">
        <input type="hidden" name="_method" value="DELETE">
        <button type="submit">删除任务</button>
    </form>
</body>
</html>
