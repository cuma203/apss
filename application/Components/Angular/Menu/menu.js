angular.module('sideMenu', [])

    .component('sideMenu', {
        // templateUrl: 'application/Components/Angular/Menu/side_menu.html'
            template:
            '<nav class="navbar navbar-inverse sidebar navbar-fixed-top" role="navigation" style="border: none;">'+
            '<div class="container-fluid">'+
            '<div class="navbar-header">'+
            '<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">'+
                '<span class="sr-only">Toggle navigation</span>'+
        '<span class="icon-bar"></span>'+
    '<span class="icon-bar"></span>'+
    '<span class="icon-bar"></span>'+
    '</button>'+
    '<a class="navbar-brand" href="#"><b style="color: #ffffff;">CRM</b><span style="color:#cd5c5c;">system</span></a>'+
    '</div>'+
    '<div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">'+
    '<ul class="nav navbar-nav">'+
    '<li>'+
    '<a  ng-link="[\'Home\']" ng-class="">Home'+
        '<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home">'+
            '</span>'+ '</a>'+
    '</li>'+
                '<li>'+
            '<a  ng-link="[\'Offers\']" ng-class="">Offers'+
            '<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-th-large">'+
            '</span>'+
            '</a>'+
                '</li>'+
'</ul>'+
'</div>'+
'</div>'+
'</nav>'
});