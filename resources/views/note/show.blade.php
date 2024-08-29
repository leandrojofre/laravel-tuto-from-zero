<x-layout>
	<div class="note">
		<div>
			<h1>Note: {{ $note -> created_at }}</h1>
			<div class="note-buttons">
				<a href="{{ route('note.index') }}" class="note-bt button">&laquo; Back</a>
				<a href="{{ route('note.edit', $note) }}" class="note-bt button">Edit</a>
				<form action="{{ route('note.destroy', $note) }}" method="POST" id="delete-note-index">
					@csrf
					@method('DELETE')
					<label for="delete-bt-{{ $note -> user_id }}" class="button">&Cross; Delete</label>
					<button id="delete-bt-{{ $note -> user_id }}" style="display: none"></button>
				</form>
			</div>
		</div>
		
		<div class="note-input">
			{{ $note -> note }}
		</div>
	</div>
</x-layout>
