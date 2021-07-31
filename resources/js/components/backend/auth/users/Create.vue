<template>
    <div>
        <form class="form" @submit.prevent="processData()">
            <div class="row" style="margin-top:-20px;">
                <div class="col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">{{ cardTitle }}</h3>
                        </div>
                        <div class="card-body">
                           <div class="row">
                                <div class="col-md-6">
                                <div class="form-group">
                                <label for="">Name {{ inputData.name }}</label>
                                <input type="text" name="name" v-model="inputData.name" class="form-control" placeholder="e.g. Mohammad Ali">
                                
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" name="email" v-model="inputData.email" class="form-control" placeholder="e.g. mohammadali@mail.com">
                                
                            </div>
                            <div class="form-group">
                                <label for="">Mobile Number</label>
                                <input type="text" name="mobile_no" v-model="inputData.mobile_no" class="form-control" placeholder="e.g. 01749xxxxxx">
                                
                            </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label for="">Role</label>
                                <input type="text" name="role" v-model="inputData.role" class="form-control" placeholder="e.g. ADMIN" readonly>
                            </div>
                            <div class="form-group">
                                <label for="">User ID</label>
                                <input type="text" name="user_id" v-model="inputData.user_id" class="form-control" placeholder="e.g. RX-ADMIN-1" readonly>
                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="text" name="password" v-model="inputData.password" class="form-control" placeholder="********">
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
import mixin from '../../../../src/mixin';
export default {
mixins:[mixin], 
created(){

    this.generalApi = 'users'
    this.backUrl = '/users'
    this.cardTitle = this.isEdit?'Edit User':'Add New User'   
    
    
    axios.get(this.url+'/api/'+this.generalApi)
    .then(res => {
        console.log(res.data.user_id);
        this.inputData.user_id = res.data.user_id
    })

},


}

</script>
