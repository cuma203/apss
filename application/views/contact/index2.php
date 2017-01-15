<?php
add_javascript('dupa.js');
?>
<div style="width: 1000px; height: 800px;margin:0 auto;">
    <div class="panel panel-default">
    <div class="panel-heading">CONTACT</div>
    <div class="panel-body">
        <div ng-app="table">
            <table ng-controller="tableCtrl" class="table table-striped table-bordered table-hover">
                <thead class="thead-data">
<!--                <tr>
                    <td colspan="6" id="search">
                        <div class="input-group">
                            <span style="width:20%;font-weight:bold;" class="input-group-addon">Szukaj</span>
                                <input  size="300" id="2" type="text" class="form-control" ng-model="szukaj">
                        </div>
                    </td>
                </tr>-->
                    <tr>
                        <th>
                            <a href="#" ng-click="sortType = 'Klient'; sortReverse = !sortReverse">
                            Klient
                            <span ng-show="sortType == 'Klient' && !sortReverse" class="fa fa-caret-down" >&nbsp;&#9650;</span>
                            <span ng-show="sortType == 'Klient' && sortReverse" class="fa fa-caret-up">&nbsp;&#9660;</span>
                            </a>
                        </th>
                        <th>
                            <a href="#" ng-click="sortType = 'Nazwisko'; sortReverse = !sortReverse">
                            Nazwisko
                            <span ng-show="sortType == 'Nazwisko' && !sortReverse" class="fa fa-caret-down">&nbsp;&#9650;</span>
                            <span ng-show="sortType == 'Nazwisko' && sortReverse" class="fa fa-caret-up">&nbsp;&#9660;</span>
                            </a>
                        </th>
                        <th>
                            <a href="#" ng-click="sortType = 'Imie'; sortReverse = !sortReverse">
                            Imie
                            <span ng-show="sortType == 'Imie' && !sortReverse" class="fa fa-caret-down">&nbsp;&#9650;</span>
                            <span ng-show="sortType == 'Imie' && sortReverse" class="fa fa-caret-up">&nbsp;&#9660;</span>
                            </a>
                        </th>
                        <th>
                            <a href="#" ng-click="sortType = 'Telefon'; sortReverse = !sortReverse">
                            Telefon
                            <span ng-show="sortType == 'Telefon' && !sortReverse" class="fa fa-caret-down">&nbsp;&#9650;</span>
                            <span ng-show="sortType == 'Telefon' && sortReverse" class="fa fa-caret-up">&nbsp;&#9660;</span>
                            </a>
                        </th>
                        <th>
                            <a href="#" ng-click="sortType = 'Miasto'; sortReverse = !sortReverse">
                            Miasto
                            <span ng-show="sortType == 'Miasto' && !sortReverse" class="fa fa-caret-down">&nbsp;&#9650;</span>
                            <span ng-show="sortType == 'Miasto' && sortReverse" class="fa fa-caret-up">&nbsp;&#9660;</span>
                            </a>
                        </th>
                        <th>
                            <a href="#" ng-click="sortType = 'Kraj'; sortReverse = !sortReverse">
                            Kraj
                            <span ng-show="sortType == 'Kraj' && !sortReverse" class="fa fa-caret-down">&nbsp;&#9650;</span>
                            <span ng-show="sortType == 'Kraj' && sortReverse" class="fa fa-caret-up">&nbsp;&#9660;</span>
                            </a>
                        </th>
                </tr>
                </thead>
                <tr style="background-color: #B7C1AA;" >
                    <td><input type="text" class="form-control-2" ng-model="szukaj.Klient" size="10"></td>
                    <td><input type="text" class="form-control-2" ng-model="szukaj.Nazwisko" size="10"></td>
                    <td><input type="text" class="form-control-2" ng-model="szukaj.Imie" size="10"></td>
                    <td><input type="text" class="form-control-2" ng-model="szukaj.Telefon" size="10"></td>
                    <td><input type="text" class="form-control-2" ng-model="szukaj.Miasto" size="10"></td>
                    <td><input type="text" class="form-control-2" ng-model="szukaj.Kraj" size="10"></td>
                </tr>
                <tbody class="small-font">
                    <tr ng-repeat="data in PostDataResponse|filter:szukaj |orderBy:sortType:sortReverse ">
                        <td>{{data.Klient}}</td>
                        <td>{{data.Nazwisko}}</td>
                        <td>{{data.Imie}}</td>
                        <td>{{data.Telefon}}</td>
                        <td>{{data.Miasto}}</td>
                        <td>{{data.Kraj}}</td>
                    </tr>
                </tbody>
            </table>
            <menu-bar ></menu-bar>
        </div>
    </div>
</div>
</div>
