function randomString(length, chars) {
    var result = '';
    for (var i = length; i > 0; --i) result += chars[Math.round(Math.random() * (chars.length - 1))];
    return result;
}

jQuery(document).ready(function() {

	if (jQuery('[name="post_title"]').val() === '') {
		jQuery('[name="post_title"]').val('day_' + randomString(32, '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'));
	}

});