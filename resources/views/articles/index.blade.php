@extends('user')

@section('content')
    <h1>Novice</h1>

    @if($currentUser != null && ($currentUser->isAManager() || $currentUser->isAnAdmin()))
        <h3><a href="{{ action('ArticleController@create') }}">Ustvari novo novico</a></h3>
    @endif

    @foreach($articles as $article)
        <article>
            <h2>
                <a href="{{ action('ArticleController@show', [$article->id]) }}">{{ $article->title }}

                    @if($currentUser != null && ($currentUser->isAManager() || $currentUser->isAnAdmin()))
                        <small><a href="{{ url('articles/' . $article->id . '/edit') }}">[uredi]</a></small>
                    @endif


                </a>
            </h2>

            <div class="body">{{ $article->text }}</div>


        </article>

    @endforeach
@stop