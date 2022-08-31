<template>
    <div>
    <Navbar></Navbar>

    <div class="container">
        <!-- Funziona come lo @yield di blade -->
        <router-view></router-view>
    </div>
    </div>
</template>

<script>
import Navbar from './frontend/components/Navbar.vue';
import PostsList from './frontend/components/PostsList.vue';

export default {
    components: { Navbar, PostsList },
    data() {
    return {
        message: "Ciao ciao cone le mani"
    };
    },
}
</script>