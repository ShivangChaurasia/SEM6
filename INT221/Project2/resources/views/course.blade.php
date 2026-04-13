<form method="POST" action="{{ url('/course') }}">
    @csrf
    <fieldset>
        <legend style="font-size: 80px">Course</legend>

        <label><input type="checkbox" name="skill[]" value="Python"> Python</label>
        <label><input type="checkbox" name="skill[]" value="Java"> Java</label>
        <label><input type="checkbox" name="skill[]" value="C++"> C++</label>
        <label><input type="checkbox" name="skill[]" value="JavaScript"> JavaScript</label>

        <h2>Gender</h2>
        <label><input type="radio" name="gender" value="Male" required> Male</label>
        <label><input type="radio" name="gender" value="Female"> Female</label>
    </fieldset>

    <button type="submit">Submit</button>
</form>
