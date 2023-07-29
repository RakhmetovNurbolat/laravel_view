<select name="selected">
    @foreach ($months as $currentMonth)
        <option value="{{ $currentMonth }}  @selected(old('selected') == $currentMonth)" >
            {{ $currentMonth }}
        </option>
    @endforeach
</select>