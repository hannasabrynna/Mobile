<x-layout>
    <h2>Add New Movie</h2>

    <form method="POST" action="{{ route('movies.store') }}">
        @csrf
        <div>
            <label>Title:</label><br>
            <input type="text" name="title" required>
        </div>

        <div>
            <label>Year:</label><br>
            <input type="number" name="year" required>
        </div>

        <div>
            <label>Director:</label><br>
            <input type="text" name="director">
        </div>

        <div>
            <label>Watched On:</label><br>
            <input type="date" name="watched_on">
        </div>

        <button type="submit">Save</button>
    </form>

    <a href="{{ route('movies.index') }}">⬅ Back to List</a>
</x-layout>
