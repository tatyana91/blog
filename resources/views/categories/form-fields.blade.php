@csrf
<div class="mb-3">
    <x-controls.input name="title" label="Title" :item="$category ?? null"/>
</div>
<div class="mb-3">
    <x-controls.input name="slug" label="Slug" :item="$category ?? null"/>
</div>
<div class="mb-3">
    <x-controls.textarea name="description" label="Description" :item="$category ?? null"/>
</div>
