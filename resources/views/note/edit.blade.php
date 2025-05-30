<x-layout>
    <div class="note-container single-note">
        <h1>Edit new note</h1>
        <form action="{{route('note.update', $note)}}" method="POST" class="note">
            @csrf
            @method('PUT')
            <textarea name="note" class="note-body" placeholder="Enter your note here" cols="30" rows="10">
                {{$note->note}}
            </textarea>
            <div class="note-buttons">
                <a href="{{route('note.index')}}" class="note-cancel-button">Cancel</a>
                <button class="note-submit-button">Submit</button>
            </div>
        </form>
    </div>
</x-layout>
