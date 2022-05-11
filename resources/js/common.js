function callApi(method, url, data) {
    try {
        $.ajax({
            type: method,
            url: url,
            data: data,
            success: function(res) {
                return res;
            }
        });
    } catch (error) {
        return res.responseText;
    }
}