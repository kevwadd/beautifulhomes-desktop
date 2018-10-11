!function(t){var o;t.fn.isInViewport=function(){var o=t(this).offset().top,a=o+t(this).outerHeight(),s=t(window).scrollTop(),n=s+t(window).height();return s<a&&o<n},t(document).ready(function(){t("div[data-src]").each(function(o,a){
//console.log(Element);
var s=t(a).data("src");console.log(a),void 0!==s&&t(a).css("background-image","url("+s+")").parent().removeClass("loading")})}),t(window).on("load",function(o){
//Load full size images
}),t(window).on("resize scroll",function(o){t("#masthead").hasClass("sticky")&&t(window).scrollTop()<=t("#masthead").outerHeight()/2?t("#masthead").removeClass("sticky animated slideInDown"):t(window).scrollTop()>t("#masthead").outerHeight()&&!t("#masthead").hasClass("sticky")&&t("#masthead").addClass("sticky animated slideInDown")})}(window.jQuery);