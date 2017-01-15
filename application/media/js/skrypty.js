function getData(val){
    var aaa = $('#'+val.id);
    var rows = $('.table tr');
    
    for(var i=0;i<rows.length;i++){
        if(aaa !== rows[i].id){
            rows[i].removeAttribute("style");
        }
    }
    var data = $('#'+val.id).children();
    var header = $('#header-table').children();
    var content='<form id="test">';
    aaa.css("backgroundColor","rgba(49, 209, 0, 0.31)");
    var www = aaa[0].id;
    
    for(var i =0; i<data.length;i++){
        content += '<div class="input-group"><span style="width:40%;font-weight:bold;" class="input-group-addon">'+header[i].innerHTML+'</span><input  size="300" id="msg'+i+'" type="text" class="form-control" name="msg" value="'+$.trim(data[i].innerHTML)+'"></div>';
    }
    content +='<button style="float:right; margin-top:10px;" type="button" class="btn btn-success" onclick="sendData('+www+');">Zatwierdź</button>';
    $("#okienko").html(content);
    $("#okienko").dialog({
        width: 600,
        position: { my: "top", at: "top", of: window }
    });
}
function sendData(val)
{
    var inputs = $('.input-group input');
    var data = val.children;

    for(var i=0;i<data.length;i++){
        data[i].innerHTML=inputs[i].value;
    }
    val.removeAttribute("style");
    $("#okienko").dialog("close");
    
    var send = $.ajax({
        type     : "POST",
        url      : "home/saveCustomerAction",
        data     : {
            nazwa : inputs[0].value,
            nazwisko : inputs[1].value,
            imie : inputs[2].value,
            tel : inputs[3].value,
            adres : inputs[4].value,
            miasto : inputs[5].value,
            stan : inputs[6].value,
            kod : inputs[7].value,
            kraj : inputs[8].value,
            numer: val.id
        },
        success: function(ret) {
            $('#alert').fadeIn(1000);
            $('#alert').fadeOut(3000);
//             send.abort();
            console.log(ret);
        },
        complete: function() {
            
        },
        error: function(jqXHR, errorText, errorThrown) {
            console.log(errorText);
        }
    });
}

function nipVerify(nip)
{
    var nip_bez_kresek = nip.replace(/-/g,"");
    var reg = /^[0-9]{10}$/;
    
    if(reg.test(nip_bez_kresek) == false) {
        return false;}
    else
    {
        var dig = (""+nip_bez_kresek).split("");
        var kontrola = (6*parseInt(dig[0]) + 5*parseInt(dig[1]) + 7*parseInt(dig[2]) + 2*parseInt(dig[3]) + 3*parseInt(dig[4]) + 4*parseInt(dig[5]) + 5*parseInt(dig[6]) + 6*parseInt(dig[7]) + 7*parseInt(dig[8]))%11;
        if(parseInt(dig[9])==kontrola){
            $.ajax({
                type     : "POST",
                url      : "applications/verifyNipAction",
                data     : {
                    nip: parseInt(dig[9])
                },
                success: function(ret) {
                    console.log(ret);
                },
                complete: function() {

                },
                error: function(jqXHR, errorText, errorThrown) {
                    console.log(errorText);
                }
            });
        }
        else
            console.log('nie');
    }
}

$('button.ui-dialog-titlebar-close').click(function(){
    alert('dasdjkfgasdjfgasdjk');
    $('table tr').removeAttr("style");
});

function nextPage(page){
    $.ajax({
        type     : "POST",
        url      : "home/getCustomerAction",
        data     : {
            page : page-1 
        },
        success: function(ret) {
//            $('table.table tbody').html('');
            var data = JSON.parse(ret);
            var rows = $('.table tbody tr');
            var header = $('#header-table th');
            var content = '';
            for(var i=0; i<rows.length;i++){
                if(data[i]){
                    content += '<tr id="sticky_table_'+data[i].customerNumber+'" onclick="getData(this);">';
                    rows[i].id = 'sticky_table_'+data[i].customerNumber;
                }
                for(var j=0;j<rows[i].children.length;j++){
                    var attr = rows[i].children[j].getAttribute('name');
//                    var attr = '';
                    if(data[i]){
                        content += '<td>'+data[i][attr]?data[i][attr]:''+'</td>';
                        rows[i].children[j].innerHTML = (data[i][attr]?data[i][attr]:'');
                    }
                }
                content =+ '</tr>';
            }
        },
        complete: function() {
            
        },
        error: function(jqXHR, errorText, errorThrown) {
            console.log(errorText);
        }
    });
}
$( document ).ajaxStart(function() {
    $('.loading-overlay').show();   
});

$( document ).ajaxStop(function() {
    $('.loading-overlay').hide();
});
//window.addEventListener("load", function(){ 
//});
//(function() {
//  "use strict";
//
//  var app = angular.module("myApp", ["ngTable", "ngTableDemos"]);
//
//  app.controller("demoController", demoController);
//  demoController.$inject = ["NgTableParams", "ngTableSimpleList"];
//
//  function demoController(NgTableParams, simpleList) {
//    var self = this;
//    self.tableParams = new NgTableParams({}, {
//      dataset: simpleList
//    });
//  }
//})();

(function(){
    "use strict";

    var app = angular.module("table",[]);
    app.controller("tableCtrl",function($scope, $http){
//        console.log($scope);
        function getData(){
            var data = $.param({
            });

            var config = {
                headers : {
                    'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
                }
            };

            $http.post('contact/getDataAction', data, config)
            .success(function (data, status, headers, config) {
                $scope.PostDataResponse = data;
                var headers = [];
                for(var i=0;i<Object.keys(data).length;i++){
                    for(var key in data[i]){
                        if(headers.indexOf(key) === -1)
                            headers.push(key);
                    }
                }
                $scope.headers = headers;
            })
            .error(function (data, status, header, config) {
                $scope.ResponseDetails = "Data: " + data +
                    "<hr />status: " + status +
                    "<hr />headers: " + header +
                    "<hr />config: " + config;
            });
        };
        
        this.$onInit = function () {
            getData();
        };
//        $scope.sortType     = 'Klient'; // set the default sort type
        $scope.sortReverse  = false; 
    });
})();

(function(){
    'use strict';
    var app = angular.module('mainmenu',[]);
    app.controller('menuCtrl',function($scope,$http){
            app.module('menu')
    var navbar = [
  '<nav class="navbar navbar-default">',
  '<div class="container">',
  '<div class="navbar-header">',
  '<a class="navbar-brand" href="#">{{$ctrl.brand}}</a>',
  '</div>',
  '<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">',
  '<ul class="nav navbar-nav">',
  '<li ng-repeat="menu in $ctrl.menu">',
  '<a href="{{menu.component}}">{{menu.name}} <span class="sr-only">(current)</span></a>',
  '</li>',
  '</ul>',
  '</div>',
  '</div>',
  '</nav>'
].join(' ');
        app.component('menuBar', {
            bindings: {
              brand: '<'
            },
            template: navbar,
            controller: function() {
              this.menu = [{
                name: "Home",
                component: "home"
              }, {
                name: "About",
                component: "about"
              }, {
                name: "Contact",
                component: "contact"
              }];
            }
        });
    });
})();
