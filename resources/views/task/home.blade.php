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

<h3>
    @if ( $students === 1 )
        操场上只有一个同学
    @elseif ( $students === 0 )
        操场上一个同学也没有
    @else
        操场上有 {{ $students }} 个同学
    @endif
</h3>

<h3>
    @unless( $user->hasPaid )
        用户没有支付
    @endunless
</h3>

<h3>
    @isset( $user->name )
        {{ $user->name  }}
    @else
        empty
    @endisset
</h3>

<h3>
    @empty( $user->amount )
        用户账号为空
    @else
        用户账号剩余 {{ $user->amount }} 元
    @endempty
</h3>

<h3>用户信息列表：</h3>
<div>
    @forelse( $UserAll as $user )
        <div>
            <p>{{ $loop->iteration  }} : {{ $user['name']  }}</p>
            <p>剩余迭代数：{{ $loop->remaining  }}</p>
            <p>元素总数：{{ $loop->count  }}</p>
            @if( $loop->first )
                <p>当前为第一条数据</p>
            @endif

            @if( $loop->last )
                <p>当前为最后一条数据</p>
            @endif

            <p>当前为第 {{ $loop->depth  }} 层循环</p>

            <div>
                @forelse( $user['report'] as $k=>$reports )
                    <dl>
                        <dt>
                            <p>当前日期为：{{ $k  }}</p>
                            <p>当前为第 {{ $loop->depth  }} 层循环</p>
                        </dt>
                        @forelse( $reports as $report )
                            <dd>
                            {{ $loop->parent->parent->iteration .'-'. $loop->parent->iteration .'-'. $loop->depth  }}
                                {{ $report }}

                            </dd>
                        @empty
                            <dd>没有当天的打卡记录</dd>
                        @endforelse
                    </dl>
                @empty
                    没有当天的打卡记录
                @endforelse
            </div>
        </div>
        <hr>
    @empty
        <div>没有用户信息</div>
    @endforelse
</div>
</body>
</html>
