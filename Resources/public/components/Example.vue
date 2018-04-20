<template>
    <div>
        <h1>{{ a }}</h1>
        <button class="btn btn-default" @click="add">add</button>
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