@extends('layouts.app')	

@section('pageTitle', 'Index')

@section('metas')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('content')
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                <em class="fa fa-home"></em>
            </a></li>
            <li class="active">Dashboard</li>
        </ol>
    </div><!--/.row-->
    
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Dashboard</h1>
        </div>
    </div><!--/.row-->
    
    <div class="panel panel-container">
        <div class="row">
            <div class="col-xs-6 col-md-6 col-lg-6 no-padding">
                <div class="panel panel-teal panel-widget border-right">
                    <div class="row no-padding"><em class="fa fa-xl fa-dumbbell color-blue"></em>
                        <div class="large">{{ $user->days_active }}</div>
                        <div class="text-muted">Days Active</div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-md-6 col-lg-6 no-padding">
                <div class="panel panel-blue panel-widget border-right">
                    <div class="row no-padding"><em class="fa fa-xl fa-chart-pie color-orange"></em>
                        <div class="large">Stats</div>
                    </div>
                </div>
            </div> 
        </div><!--/.row-->
    </div>
    
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-default chat">
                <div class="panel-heading">
                    Chat (Deleted Every 24 Hours)
                    <span class="pull-right"></span></div>
                <div class="panel-body" id="messages">
                    
                </div>
                <div class="panel-footer">
                    <div class="input-group" style="width:100%">
                        <input id="btn btn-input" name="message" type="text" class="form-control input-md message" placeholder="Type your message here..."/>
                        <span class="input-group-btn">
                            <input type="submit" class="btn btn-primary btn-md" id="btn-chat" value="send"/>
                        </span>
                    </div>
                </div>
            </div>
        </div><!--/.col-->
        
        
        <div class="col-md-6">
            <div class="panel panel-default ">
                <div class="panel-heading">
                    Key News
                    <span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fas fa-caret-square-up"></em></span></div>
                <div class="panel-body timeline-container">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-badge primary"></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="timeline-title">Lorem ipsum dolor sit amet</h4>
                                </div>
                                <div class="timeline-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    To-do List
                    <span class="pull-right clickable panel-toggle panel-button-tab-left" id="listToggle"><em class="fas fa-caret-square-up"></em></span></div>
                <div class="panel-body" id="tasks">
                    <ul class="todo-list">
                        @foreach($tasks as $task)
                            <li class="todo-list-item">
                                <form action="task/{{ $task->id }}" method="post" class="deleteTasks">
                                <div class="checkbox">
                                    <label for="checkbox-1">{{ $task->task }}</label>
                                </div>
                                <div class="pull-right action-buttons">
                                    <span class="trash">
                                        <button type="submit" style="border:none; background:none;">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </span>
                                </div>
                                </form>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="panel-footer">
                    <form action="sendTask" method="POST" id="sendTask">
                        <div class="form-group input-group" style="width:100%;">
                            <input id="btn btn-input" name="task" type="text" class="form-control input-md task" placeholder="Add your task here..."/>
                            <span class="input-group-btn">
                                <input type="submit" class="btn btn-primary btn-md" id="btn-chat" value="Add"/>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div><!--/.col-->
    </div><!--/.row-->
@endsection	
@section('scripts')
    <script>
        $(document).ready(function(){
            var csrfVar = $('meta[name="csrf-token"]').attr('content');
            $(".deleteTasks").append("<input name='_token' value='" + csrfVar + "' type='hidden'>");
            $("#sendTask").append("<input name='_token' value='" + csrfVar + "' type='hidden'>");

            //AJAX insert, getting the message and a token to prevent double inserts. All when button clicked to enter
            $("#btn-chat").click(function(){
                var message = $(".message").val();
                
                $.ajax({
                    type: "post",
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    data: "message=" + message,
                    url: "<?php echo url('sendChatMessage') ?>",
                    success: function(data) {
                        console.log(data);
                        $(".message").val("");
                    }
                });
            });
        });

        $(document).on('click', '.panel-heading span.clickable', function(e){
            var $this = $(this);
            if(!$this.hasClass('panel-collapsed')) {
                if($this.attr("id") == "listToggle")
                {
                    $this.parents('.panel').find('.panel-footer').hide();
                }
                $this.parents('.panel').find('.panel-body').slideUp();
                $this.addClass('panel-collapsed');
                $this.find('em').removeClass('fa-toggle-up').addClass('fa-toggle-down');
            } else {
                if($this.attr("id") == "listToggle")
                {
                    $this.parents('.panel').find('.panel-footer').show();
                }
                $this.parents('.panel').find('.panel-body').slideDown();
                $this.removeClass('panel-collapsed');
                $this.find('em').removeClass('fa-toggle-down').addClass('fa-toggle-up');
            }
        })

        /*quick function to reload the chat every 100seconds with AJAX
        var auto_refresh  = setInterval (
            function() {
                $('#messages').load('<?php echo url('chatmessages');?>').fadeIn("slow");
            },100);*/
    </script>
@endsection