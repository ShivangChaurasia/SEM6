<form method="post" action="/submit" enctype="multipart/form-data">
    @csrf
    <input type="file" name="file" required>
    <input type="submit" value="Upload">
</form>
