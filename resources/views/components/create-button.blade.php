<form action="{{ route('collections.create') }}" method="GET">
    <input type="hidden" name="image" value="{{ $image }}">
    <button type="submit" class="btn">ひろばにつれていく</button>
</form>