<x-layout>
	<div>
		<h1>Edit your note:</h1>

		<form action="{{ route('note.update', $note) }}" method="POST" class="note">
			@csrf
			@method('PUT')

			<textarea name="note" rows="10" class="note-input" placeholder="Write your note here...">{{ $note -> note }}</textarea>

			<div class="note-buttons">
				<a href="{{ route('note.show', $note) }}" class="note-bt button">&Cross; Cancel</a>
				<button class="button">&raquo; Submit</button>
			</div>
		</form>
	</div>
</x-layout>
