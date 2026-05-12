<h1>About Page</h1>
<p>Welcome, {{ $name }}!</p>

<h3>Our Departments:</h3>
<select name="department">
    @foreach($departments as $key => $value)
        <option value="{{ $key }}">{{ $value }}</option>
    @endforeach
</select>
