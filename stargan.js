$(function() {

  console.log('loaded');

  var loginClient = new JSONRpcClient({
  'url': 'https://user-api.simplybook.me' + '/login',
  'onerror': function (error) {},
  });
var token = loginClient.getToken('stargan', '0487e9cfccf66d47a3250375788ff6689896517f2f0edf655fd6cbf6d82a74e5');
console.log(token);

console.log(loginClient.getServiceUrl('stargan'));

this.client = new JSONRpcClient({
	'url': 'https://user-api.simplybook.me',
	'headers': {
		'X-Company-Login': 'stargan',
		'X-Token': token
	},
	'onerror': function (error) {}
});

});
