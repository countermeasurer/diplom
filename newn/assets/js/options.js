<script> var close_next;

document.addEventListener("click", function(is_close) {

if (is_close.target.className =="show_next_1")

{

close_next = is_close.target.id;

document.getElementById(close_next).nextElementSibling.style="display:block";

}

if (is_close.target.className =="close_window")

{

document.getElementById(close_next).nextElementSibling.style="display:none";

}

});</script>