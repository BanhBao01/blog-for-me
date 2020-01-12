<template>
    <div class="col-sm-10">
        <div class="mb-3 p-1 text-right">
            <button class="btn btn-danger btn-sm" @click="deleteCategory">Delete All</button>
            <button class="btn btn-secondary btn-sm">Fillter</button>
            <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#new-category">New</button>
        </div>
        <div class="modal fade" id="new-category" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog " role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">New Category</h5>
                        <button type="button" class="close" ref="closePopupCategory" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input class="form-control" v-model="data.name"  @keyup.enter="saveCategory" id="name" type="text" placeholder="Name Category">
                            <small v-if="validate.name" class="text-danger ml-2"><strong>{{ validate.name }}</strong></small>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" @click="saveCategory">Save</button>
                    </div>
                </div>
            </div>
        </div>
        <table class="table table-shadown-custom">
            <thead>
            <tr>
                <th style="width: 50px">
                    <div class="custom-control custom-checkbox" style="line-height: 35px">
                        <input type="checkbox" @change="selectDeleteAll" class="custom-control-input" id="category-select-all">
                        <label class="custom-control-label" for="category-select-all"></label>
                    </div>
                </th>
                <th>#</th>
                <th>Name</th>
                <th>Slug Name</th>
                <th>Status</th>
            </tr>
            </thead>
            <tbody>
                <ItemTableCatgory v-if="categories" @selectDelete="selectDelete" v-for="(item,i) in categories" :key="i" :item="item" :i="i" ></ItemTableCatgory>
                <tr v-else>
                    <td colspan="4" class="text-center">
                        <a>Not data</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    import ItemTableCatgory from "./itemTableCatgory";
    export default {
        name: "category",
        components: {ItemTableCatgory},
        data(){
            return {
                data: {
                    name: ''
                },
                validate: {
                    name: ''
                },
                categories: [],
                delete: [],
                selectedAll: false
            }
        },
        methods: {
            saveCategory:function () {
                if(this.data.name){
                    axios.post('/backend/category',this.data)
                        .then(res => {
                            if(res.status == 200 || res.status == 201){
                                this.data.name = ''
                                this.validate.name = ''
                                this.categories.push(res.data)
                                this.closePopup()
                                this.success()
                            }else{
                                this.error()
                            }
                        })
                }else{
                    this.validate.name = 'Not required name'
                }
            },
            fetchCategory() {
                axios.get('/backend/category')
                    .then(res => {
                        this.categories = res.data
                    })
            },
            deleteCategory() {
                if(this.delete.length > 0){
                    this.delete.forEach(id => {
                        this.categories = this.categories.filter(item => item.id != id)
                        axios.delete('/backend/category/' + id)
                    })
                    this.delete = []
                    this.success()
                }
            },
            selectDelete(id) {
                if(this.delete.indexOf(id) == -1){
                    this.delete.push(id)
                }else{
                    this.delete.splice(this.delete.indexOf(id),1)
                }
            },
            selectDeleteAll(){
                if(this.categories.length == this.delete.length){
                    this.delete = []
                }else {
                    this.categories.forEach(item => {
                        this.delete.push(item.id)
                    })
                }
            },
            updateCategory(category,index){
                this.categories.splice(index,1,category)
            },
            closePopup()
            {
                this.$refs.closePopupCategory.click()
            },
            success: function() {
                this.$alertify.success('success');
            },
            error: function() {
                this.$alertify.error('success');
            },
        },

        computed: {

        },
        mounted() {
            this.fetchCategory()
        }
    }
</script>

<style scoped>

</style>
