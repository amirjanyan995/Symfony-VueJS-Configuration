<template>
    <div class="row">
        <div class="col-md-12">
            <h1>{{ a }}</h1>
            <button class="btn btn-danger" @click="add">add</button>
        </div>
    </div>
</template>

<script>
    export default {
        name: "example",
        data() {
            return {
                a: 1
            }
        },
        methods: {
            add(){
                this.a++;
            }
        }
    }
</script>

<style scoped>

</style>