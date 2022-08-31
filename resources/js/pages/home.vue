<template>
    <div>
    <h1>Pagina Home</h1>


    <h2>Lista post</h2>

    <PostsList></PostsList>
    </div>
</template>

<script>
import PostsList from '../frontend/components/PostsList.vue';
export default {
    components: { PostsList }
}
</script>