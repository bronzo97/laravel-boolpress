import Vue from "vue";
import frontend from "./frontend.vue";
import VueRouter from 'vue-router'
import { routes } from "./routes"

Vue.use(VueRouter);

new Vue({
el: "#app",
render: h => h(frontend),
// il valore di questa chiave deve essere 
// un istanza di VueRouter
router: new VueRouter({
    routes,
    mode: "history"
})
})