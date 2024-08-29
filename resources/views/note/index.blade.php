<x-layout>
	<div class="notes">
		<a href="{{ route('note.create') }}" class="note-bt button">New Note</a>

		@foreach ( $notes as $note )
			<div class="note">
				{{ $note -> created_at }}
				<div class="note-body">
					<p>{{ Str::words($note -> note, 30) }}</p>
				</div>

				<div class="note-buttons">
					<a href="{{ route('note.show', $note) }}" class="note-bt button">&raquo; View</a>
					<a href="{{ route('note.edit', $note) }}" class="note-bt button">Edit</a>
					<form action="{{ route('note.destroy', $note) }}" method="POST">
						@csrf
						@method('DELETE')
						<label for="delete-bt-{{ $note -> user_id }}" class="button">&Cross; Delete</label>
						<button id="delete-bt-{{ $note -> user_id }}" style="display: none"></button>
					</form>
				</div>
			</div>
		@endforeach

		{{ $notes -> links() }}
	</div>
</x-layout>
