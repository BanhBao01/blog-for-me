<template>
    <tr @dblclick="editCategory">
        <td>
            <div class="custom-control custom-checkbox" style="line-height: 35px">
                <input type="checkbox" class="custom-control-input" :id="'categories_' + i ">
                <label class="custom-control-label" :for="'categories_'+i"></label>
            </div>
        </td>
        <th scope="row">{{ i+1 }}</th>
        <td v-if="!edit">{{ item.name }}</td>
        <td v-else>
            <div class="form-group" style="margin-bottom: unset">
                <input type="text" class="form-control" v-model="item.name" @focusout="edit = false"  @keyup.enter="updateCategory" @keyup.esc="updateCategory">
            </div>
        </td>
        <td>{{ item.slug_name }}</td>
        <td v-if="!edit">{{ item.status }}</td>
        <td v-else>
            <div class="form-group" style="margin-bottom: unset">
                <select class="form-control" v-model="item.status" @change="updateCategory">
                    <option value="show">show</option>
                    <option value="hide">hide</option>
                </select>
            </div>
        </td>
    </tr>
</template>

<script>
    export default {
        props: ['item', 'i'],
        name: "itemTableCatgory",
        data() {
            return {
                edit: false
            }
        },
        methods: {
            editCategory() {
                this.edit = true
            },
            updateCategory() {
                axios.put('/backend/category/' + this.item.id, this.item)
                    .then(res => {
                        if(res.status == 200 || res.status == 201){
                            this.$emit('updateCategory',res.data,this.i)
                        }
                        this.edit = false
                    })
            },
            success: function() {
                this.$alertify.success('success');
            },
            error: function() {
                this.$alertify.error('success');
            },
        }
    }
</script>

<style scoped>

</style>
