function updateOwner(id,username)
{
    var url = 'http://localhost/Journey/PHP/Market/updateOwner.php';
    var method = 'POST';
    var params = 'id='+id;
    params += "&user="+username;
    var container_id = 'market-container' ;
    var loading_text = '<img src="https://c.tenor.com/tEBoZu1ISJ8AAAAC/spinning-loading.gif">' ;
    // call ajax function
    ajax (url, method, params, container_id, loading_text) ;
}