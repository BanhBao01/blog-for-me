<template>
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Dashboard</div>

            <div class="card-body">
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>

                You are logged in!
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
