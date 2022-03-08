<x-layout>
    <x-setting heading="Create new post">
        <form method="POST" action="/admin/posts" enctype="multipart/form-data">
            @csrf
            <x-form.input name="title" required />
            <x-form.input name="slug" required />
            <x-form.textarea name="excerpt" required />
            <x-form.textarea name="content" required />

            <x-form.button>Create</x-form.button>
        </form>
    </x-setting>
</x-layout>