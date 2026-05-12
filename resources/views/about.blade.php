<h1>About Page</h1>
<p>Welcome, {{ $name }}!</p>

<h3>Our Departments:</h3>
<select name="department">
    @foreach($departments as $key => $value)
        <option value="{{ $key }}">{{ $value }}</option>
    @endforeach
</select>
<hr>
<form action="/about" method="POST">
    @csrf
    <input type="text" name="user_name" placeholder="  هاني ">
    <button type="submit">إرسال</button>
</form>
