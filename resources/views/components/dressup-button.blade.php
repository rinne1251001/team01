<form action="{{ route('dressup') }}" method="GET">
    <input type="hidden" name="image" value="{{ $image }}">
    <button type="submit" class="btn">きせかえをする</button>
</form>