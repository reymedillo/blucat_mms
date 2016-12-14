<!DOCTYPE html>
<html ng-app="exampleapp">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/angularjs/1.0.6/angular.min.js"></script>
    <script type="text/javascript" src="http://cdn.datatables.net/1.9.4/js/jquery.dataTables.min.js"></script>
    {{--<script src="/js/1.10.12/jquery.dataTables.min.js" charset="utf-8"></script>--}}
    <script type="text/javascript" src="/js/angular/angular.datatables.js"></script>

    {{--<script src="/js/1.10.12/dataTables.bootstrap.min.js" charset="utf-8"></script>--}}
    <script type="text/javascript" src="http://cdn.datatables.net/plug-ins/505bef35b56/integration/bootstrap/3/dataTables.bootstrap.js"></script>
    <title></title>
</head>
<body  ng-controller="ExampleCtrl">
<table datatable sAjaxSource="data.json" sAjaxDataProp="result" class="table table-striped table-bordered">
    <thead>
    <tr>
        <th data-mdata="id" data-sclass="highlight-red">ID</th>
        <th data-mdata="name">Name</th>
        <th data-mdata="about.text" data-bvisible="false">About me</th>
        <th data-mdata="phone">Phone</th>
        <th data-mdata="email">Email</th>
        <th data-mdata="age">Age</th>
    </tr>
    </thead>
    <tbody></tbody>
</table>
</body>
<script>
    // You need to enable the datatablesDirectives
    var app = angular.module('exampleapp', ['datatablesDirectives']);

    app.controller('ExampleCtrl', function($scope, $window, $location) {

        // The directives automatically detects a dtOptions directive.
        // It will act as a default options for all the datatables in the scope. This is not necessary.
        $scope.dtOptions = {

            iDisplayLength: 5,

            // These 2 lines are for styling. Ignore!
            sDom: "<'row'<'span6'l><'span6'f>r>t<'row'<'span6'i><'span6'p>>",
            sPaginationType: "bootstrap",
            // End

        }

        // These are the options for the second DT. It's set in the element tags.
        $scope.dtOptionsExample2 = {
            sAjaxSource: 'data.json',
            sAjaxDataProp: 'result',
            bProcessing: false,
            fnRowCallback: function(row, data, index, fullindex) {
                if (data.id === 1) {
                    angular.element(row).addClass('blue');
                }
            }
        }


        // This is an example of column callback
        $scope.idCB = function(data) {
            if (data.id > 3) {
                return '<span class="label label-info">'+data.id+'</span>'
            }
            return '<span class="label label-important">'+data.id+'</span>'
        }

        // Anoter example
        $scope.aboutCB = function(data) {
            return data.about.text.substring(0, 50) + '...';
        }
    })
</script>






</html>
