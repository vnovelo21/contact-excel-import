<template>
    <div>
        <form action="/contacts/import" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_token" :value="csrf">
            <div class="form-group">
                <input type="file" name="file" />
                <button type="submit" class="btn btn-primary">Import</button>
            </div>
        </form>
    </div>
</template>

<script>
    export default {
        data: () => ({
            csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
        }),
    }
</script>