@extends("layouts.layout")

@section("title", "Todo一覧")

@section("menubar")
@parent
詳細ページ
@endsection

@section("content")
<div class="show">
    <table>
        <tr>
            <th>タイトル</th>
            <th>コメント</th>
            <th>編集/削除</th>
        </tr>
        <tr>
            <td>{{$todo->title}}</td>
            <td>{{$todo->comment}}</td>
            <td><a href="{{route('todo.edit',$todo->id)}}">編集</a></td>
        </tr>
    </table>

    <button>
        <a href="{{route('todo.index')}}">一覧に戻る</a>
    </button>

</div>

@endsection

@section("footer")
copyright 2022
@endsection