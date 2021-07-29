<template>
    <div>
       
        <div class="row mt-5">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{activeUser}}</h3>

                <p>Total Active User</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <!-- <router-link to="/admin-sm" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></router-link> -->
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{totalUser}}
                  <!-- <sup style="font-size: 20px">%</sup> -->
                </h3>

                <p>Total User </p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <!-- <router-link to="/admin-rsm" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></router-link> -->
            </div>
          </div>
        
          
        </div>
     
        
          <!-- ./col -->
        
    </div>
</template>
<script>

export default {
  data(){
    return {
      url         : window.location.origin,
      totalUser     : '',
      activeUser    : '',
   
    }
  },
  created(){
    
  axios.get(this.url+'/api/total-panel-user')
    .then(res => {
      this.totalUser      = res.data.totalUser 
      this.activeUser     = res.data.activeUser
    
    })
  }
}
</script>