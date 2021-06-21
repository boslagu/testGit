angular.module("myProfile", ['ngMaterial', 'ngMessages', 'material.svgAssetsCache'])
  //responsible for all function in angularjs
  .controller("myProfileCtrl", function($scope, $http){
   
  var myName = $http.get('https://api.github.com/users/boslagu').then(function(apiDta) {
    $scope.profileName = apiDta.data.name
    $scope.gitHubName = apiDta.data.login
    $scope.myURL = apiDta.data.html_url
    $scope.myBio = apiDta.data.bio
    $scope.myContents = apiDta.data.contents_url
    $scope.myPicture = apiDta.data.avatar_url
    console.log(apiDta.data)
    });
  
  $scope.alertMe = function(){
    alert('No Experience yet')
  }  
   $scope.search = function() {
  $http.get('https://api.github.com/users/boslagu/repos?').then(function(apiData) {
    let array = apiData.data;
    array.forEach(function(item) {
    item.url = item.url.replace('api.', "");
    item.url = item.url.replace('repos/', "");
    });
    $scope.datas = array
    // console.log(apiData.data)
    });
    }
   
   
    
   $scope.viewContents = function() {
  $http.get('https://api.github.com/users/boslagu/repos?').then(function(apiData) {
    let array = apiData.data;
    
    array.forEach(function(item) {
    item.url = item.url.replace('users', "repos") + '/contents';
    
    $http.get(item.url).then(function(apiDatas) {
    let array1 = apiDatas.data;
      // console.log(apiDatas);
      
    $scope.infos = array1
    });    
    console.log(item.url);
    });
    // console.log(item.url)
    });
    }
   
   
   $scope.showSkills = function() {
     $scope.mySkills = true
     $scope.myPersonalInformation = true
     $scope.myContacts = false
    }
   
    $scope.showPersonalInformation = function() {
     $scope.mySkills = false
     $scope.myPersonalInformation = false
     $scope.myContacts = false
    }
   
    $scope.showContacts = function() {
     $scope.mySkills = false
     $scope.myPersonalInformation = true
     $scope.myContacts = true
    }
    
})