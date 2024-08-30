<x-app-layout>
	<div>
		<h1>Create new note:</h1>

		<form action="{{ route('note.store') }}" method="POST" class="note">
			@csrf

			<textarea name="note" rows="10" class="note-input" placeholder="Write your note here..."></textarea>

			<div class="note-buttons">
				<a href="{{ route('note.index') }}" class="note-bt button">&Cross; Cancel</a>
				<button class="button">&raquo; Submit</button>
			</div>
		</form>
	</div>
</x-app-layout>
