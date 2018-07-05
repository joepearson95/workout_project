@extends('layouts.app')	

@section('pageTitle', 'Index')

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
            <div class="col-xs-6 col-md-4 col-lg-4 no-padding">
                <div class="panel panel-teal panel-widget border-right">
                    <div class="row no-padding"><em class="fa fa-xl fa-dumbbell color-blue"></em>
                        <div class="large">{{ $user->days_active }}</div>
                        <div class="text-muted">Days Active</div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-md-4 col-lg-4 no-padding">
                <div class="panel panel-blue panel-widget border-right">
                    <div class="row no-padding"><em class="fa fa-xl fa-chart-pie color-orange"></em>
                        <div class="large">Stats</div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-md-4 col-lg-4 no-padding">
                <div class="panel panel-orange panel-widget border-right">
                    <div class="row no-padding"><em class="fa fa-xl fa-users color-teal"></em>
                        <div class="large">24</div>
                        <div class="text-muted">Users Online</div>
                    </div>
                </div>
            </div>
        </div><!--/.row-->
    </div>
    
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-default chat">
                <div class="panel-heading">
                    Chat
                    <span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fas fa-caret-square-up"></em></span></div>
                <div class="panel-body">
                    <ul>
                        <li class="left clearfix"><span class="chat-img pull-left">
                            <img src="http://placehold.it/60/30a5ff/fff" alt="User Avatar" class="img-circle" />
                            </span>
                            <div class="chat-body clearfix">
                                <div class="header"><strong class="primary-font">John Doe</strong> <small class="text-muted">32 mins ago</small></div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ante turpis, rutrum ut ullamcorper sed, dapibus ac nunc.</p>
                            </div>
                        </li>
                        <li class="right clearfix"><span class="chat-img pull-right">
                            <img src="http://placehold.it/60/dde0e6/5f6468" alt="User Avatar" class="img-circle" />
                            </span>
                            <div class="chat-body clearfix">
                                <div class="header"><strong class="pull-left primary-font">Jane Doe</strong> <small class="text-muted">6 mins ago</small></div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ante turpis, rutrum ut ullamcorper sed, dapibus ac nunc.</p>
                            </div>
                        </li>
                        <li class="left clearfix"><span class="chat-img pull-left">
                            <img src="http://placehold.it/60/30a5ff/fff" alt="User Avatar" class="img-circle" />
                            </span>
                            <div class="chat-body clearfix">
                                <div class="header"><strong class="primary-font">John Doe</strong> <small class="text-muted">32 mins ago</small></div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ante turpis, rutrum ut ullamcorper sed, dapibus ac nunc.</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="panel-footer">
                    <div class="input-group">
                        <input id="btn-input" type="text" class="form-control input-md" placeholder="Type your message here..." /><span class="input-group-btn">
                            <button class="btn btn-primary btn-md" id="btn-chat">Send</button>
                    </span></div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    To-do List
                    <span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fas fa-caret-square-up"></em></span></div>
                <div class="panel-body">
                    <ul class="todo-list">
                        <li class="todo-list-item">
                            <div class="checkbox">
                                <input type="checkbox" id="checkbox-1" />
                                <label for="checkbox-1">Make coffee</label>
                            </div>
                            <div class="pull-right action-buttons"><a href="#" class="trash">
                                <em class="fa fa-trash"></em>
                            </a></div>
                        </li>
                    </ul>
                </div>
                <div class="panel-footer">
                    <div class="input-group">
                        <input id="btn-input" type="text" class="form-control input-md" placeholder="Add new task" /><span class="input-group-btn">
                            <button class="btn btn-primary btn-md" id="btn-todo">Add</button>
                    </span></div>
                </div>
            </div>
        </div><!--/.col-->
        
        
        <div class="col-md-6">
            <div class="panel panel-default ">
                <div class="panel-heading">
                    Timeline
                    <span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fas fa-caret-square-up"></em></span></div>
                <div class="panel-body timeline-container">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-badge"><em class="glyphicon glyphicon-pushpin"></em></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="timeline-title">Lorem ipsum dolor sit amet</h4>
                                </div>
                                <div class="timeline-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer at sodales nisl. Donec malesuada orci ornare risus finibus feugiat.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-badge primary"><em class="glyphicon glyphicon-link"></em></div>
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
        </div><!--/.col-->
    </div><!--/.row-->
@endsection	
@section('scripts')
    <script>
        $(document).on('click', '.panel-heading span.clickable', function(e){
            var $this = $(this);
            if(!$this.hasClass('panel-collapsed')) {
                $this.parents('.panel').find('.panel-body').slideUp();
                $this.addClass('panel-collapsed');
                $this.find('em').removeClass('fa-toggle-up').addClass('fa-toggle-down');
            } else {
                $this.parents('.panel').find('.panel-body').slideDown();
                $this.removeClass('panel-collapsed');
                $this.find('em').removeClass('fa-toggle-down').addClass('fa-toggle-up');
            }
        })
    </script>
@endsection