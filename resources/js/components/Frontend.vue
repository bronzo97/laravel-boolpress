<template>
    <div>
        <Navbar></Navbar>
        <h1>{{ message }}</h1>

        <div class="container">

            <h2 class="text-center">Tutti i posts:</h2>

            <PostsList></PostsList>
            
        </div>
    </div>
</template>

<script>
import Navbar from "../frontend/components/Navbar.vue";
import PostsList from "../frontend/components/PostsList.vue";
    export default {
    data() {
        return {
            message: "Hello, my name is Vue.js"
        };
    },
    components: { Navbar, PostsList }
}
</script>