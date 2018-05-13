<!DOCTYPE html>
<html>
<script src="{{ URL::asset("/js/angular.min.js")}}"></script>
<body>

<div ng-app="myapp">
    <div ng-controller="HeaderController">
        <h2>Xin chào @{{data.title}} đến với website @{{data.website}}!</h2>
    </div>
</div>
<script>
    angular.module("myapp", []).controller("HeaderController", function($scope) {

        $scope.data = {
            title : 'các bạn',
            website : 'freetuts.net'
        };
    });
</script>
</body>
</html>
