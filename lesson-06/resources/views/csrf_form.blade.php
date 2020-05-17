<form method="POST" action="/create/post" >
  @csrf

title :
<input type="text" name="title" />
<br>
content:
<input type="text" name="content">
<hr>
<input type="submit" value=" create post" />

</form>
