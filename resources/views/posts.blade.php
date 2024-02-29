<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        *{
            font-family:sans-serif;
        }
    </style>
</head>
<body>
    <div style="width:500px; border:#888; margin:1rem auto; p-0">
        @foreach ($posts as $post)
            <div style="background: #d1d1d1; border-bottom:10px solid #FFF; padding:1.2rem 0.8rem 0.8rem 0.8rem">
                <p style="margin:0;"><strong>{{ $post->title }}</strong></p>
                <p style="margin:0.5rem 0;"><span>{{ $post->user->name }}</span></p>
                <hr style="width:60%; margin:1.1rem auto 0rem auto;"/>
                <hr style="width:60%; margin:0.2rem auto 0.2rem auto;"/>
                <div style="width:auto; display:block; margin:0.6rem auto; padding:0.4rem">
                    <h1 style="margin:0; margin-bottom:0.4rem; padding:0; color:#616161; font-size:1rem;">
                        Comments
                    </h1>
                    <div style="width:100%; margin:0; border-bottom:3px solid #FFF;">
                        @foreach ($post->comments as $comment)
                            <p style="font:100 0.9rem sans-serif; margin:0; display:block; padding:0.4rem 0;">
                                <strong style="color:steelblue; display:block;">{{ $comment->user->name }}</strong>
                                <span>{{ $comment->comment }}</span>
                            </p>
                            @foreach ($comment->replays as $replay)
                                <p style="font:100 0.9rem sans-serif; color:#444; width:95%; margin:0 0 0.5rem auto; border-bottom:1px solid #999; padding-bottom:0.6rem;">
                                    {{$replay->replay}}
                                     by <strong>{{ $replay->user->name }}</strong>
                                </p>
                            @endforeach
                        @endforeach
                    </div>
                </div>
            </div>

        @endforeach
    </div>
</body>
</html>
