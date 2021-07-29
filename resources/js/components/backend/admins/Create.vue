<template>
    <div>
        <form class="form" @submit.prevent="processData()" enctype="multipart/form-data">
            <div class="row mt-5">
                <div class="col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">{{ cardTitle }}</h3>

                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Name</label>
                                        <input type="text" name="name" v-model="inputData.name" class="form-control"
                                            placeholder="e.g. Mohammad Borhan">

                                    </div>
                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <input type="text" name="email" v-model="inputData.email" class="form-control"
                                            placeholder="e.g. borhan@mail.com">

                                    </div>
                                    <div class="form-group">
                                        <label for="">Mobile Number</label>
                                        <input type="text" name="phone" v-model="inputData.phone" class="form-control"
                                            placeholder="e.g. 01749xxxxxx">

                                    </div>
                                    
                                    
                                </div>
                                <!--col-6 end-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">User Name</label>
                                        <input type="text" name="user_name" v-model="inputData.user_name"
                                            class="form-control" placeholder="e.g. iborhan" >
                                    </div>
                                    <div class="form-group">
                                        <label for="">Password</label>
                                        <input type="password" name="password" v-model="inputData.password"
                                            class="form-control" placeholder="e.g. 1234">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Profile Photo</label>
                                        <input type="file" name="image" class="form-control">
                                        <div class="mt-4" v-if="isEdit" v-html="showImage"></div>
                                    </div>
                                    
                                    
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <FormButton :isEdit="isEdit" :backUrl="backUrl"></FormButton>
                        </div>
                    </div>

                </div>
            </div>
        </form>
    </div>
</template>

<script>
    import mixin from '../../../src/mixin';
    export default {
        mixins: [mixin],
        data() {
            return {
                
            }
        },

        created() {
            this.generalApi = 'admin-user'
            this.backUrl = '/admin-user'
            this.isFile = true
            this.isImage = 'image_path'
            this.cardTitle = this.isEdit ? 'Edit Admin' : 'Add New Admin'

        },

        methods: {
            
        }


    }

</script>
