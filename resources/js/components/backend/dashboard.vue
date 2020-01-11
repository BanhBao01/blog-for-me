<template>
    <div class="col-sm-10 row">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body text-center">
                    <router-link to="/article">
                        <span style="cursor: pointer">Article</span>
                    </router-link>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body text-center">
                    <router-link to="/category">
                        <span style="cursor: pointer">Category</span>
                    </router-link>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
  export default {
    name: "dashboard"
  }
</script>

<style scoped>

</style>
