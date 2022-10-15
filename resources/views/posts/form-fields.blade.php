@csrf
<div class="mb-3">
    <x-controls.select name="category_id"
                       label="Category"
                       :item="$post ?? null"
                       :options="$categories"/>
</div>
<div class="mb-3">
    <x-controls.input name="title" label="Title" :item="$post ?? null"/>
</div>
<div class="mb-3">
    <x-controls.input name="slug" label="Slug" :item="$post ?? null"/>
</div>
<div class="mb-3">
    <x-controls.textarea name="content" label="Content" :item="$post ?? null"/>
</div>
