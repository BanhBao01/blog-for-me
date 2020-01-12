<template>
    <ul class="navbar-nav mr-auto">
        <li class="nav-item" v-for="(item,i) in link" :key="i">
            <router-link :to="item.path">
                <a class="nav-link ">{{ item.name }}</a>
            </router-link>
        </li>
    </ul>
</template>

<script>
    export default {
        name: "left-side-menu",
        data(){
            return {
                link: [
                    {
                        path: '/',
                        name: 'Dashboard'
                    },
                    {
                        path: '/article',
                        name: 'Article'
                    },
                    {
                        path: '/category',
                        name: 'Category'
                    }
                ]
            }
        }
    }
</script>

<style scoped>

</style>
