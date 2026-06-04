<div>
    <!-- People find pleasure in different ways. I find it in keeping my mind clear. - Marcus Aurelius -->
    <h1>This is Register Page</h1>
</div>

<form method="POST" action="/register">
    @csrf

    <label>Name </label>
    <input name="name" placeholder="Enter Your Name" type="text" value="{{old('name')}}">
    @error('name')
        {{$message}}
    @enderror
    <br>
    <br>
    <label>Age </label>
    <input name="age" placeholder="Enter Your Age" type="number" value="{{old('age')}}">
    @error('age')
        {{$message}}
    @enderror
    <br>
    <br>
    <label>Gender </label>
    <select name="gender" value="{{old('gender')}}">
        <option>Male</option>
        <option>Female</option>
        <option>Others</option>
    </select>
    <br>
    <br>
    <label>Email </label>
    <input name="email" placeholder="xyz@abc.com" type="email" value="{{old('email')}}">
    @error('email')
        {{$message}}
    @enderror
    <br>
    <br>
    <label>Password</label>
    <input name="password" placeholder="Enter Password" type="password" value="{{old('password')}}">
    <label>Confirm Password</label>
    <input name="password_confirmation" placeholder="Enter Password Again" type="password" value="{{old('confirm_pass')}}">
    @error('password')
        {{$message}}
    @enderror

    <br>
    <br>
    <button type="submit">Register</button>
</form>
