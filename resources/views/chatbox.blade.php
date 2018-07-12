<ul>
@foreach($data as $message)
    @if($message->username == Auth::user()->name)
        <li class="right clearfix"><span class="chat-img pull-right">
            <img src="http://placehold.jp/99ccff/99ccff/60x60.png" alt="User Avatar" class="img-circle" />
            </span>
            <div class="chat-body clearfix">
                <div class="header"><strong class="pull-left primary-font">{{$message->username}}</strong> <small class="text-muted">6 mins ago</small></div>
                <p>{{$message->message}}</p>
            </div>
        </li>
    @else
        <li class="left clearfix"><span class="chat-img pull-left">
            <img src="http://placehold.jp/f70000/f70000/60x60.png" alt="User Avatar" class="img-circle" />
            </span>
            <div class="chat-body clearfix">
            <div class="header"><strong class="primary-font">{{$message->username}}</strong> <small class="text-muted">32 mins ago</small></div>
                <p>{{$message->message}}</p>
            </div>
        </li>
    @endif
@endforeach
</ul>