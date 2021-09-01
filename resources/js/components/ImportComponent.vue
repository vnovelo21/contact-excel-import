<template>
    <div>
        <form action="/users/import" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <input type="file" name="file" />
                <button type="submit" class="btn btn-primary">Import</button>
            </div>
        </form>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Import component mounted Vue')
        }
    }
</script>