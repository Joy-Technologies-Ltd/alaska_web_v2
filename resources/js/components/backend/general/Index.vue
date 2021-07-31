<template>
   <TableContent  style="margin-top:-20px;"  v-if="typeof(dataList) == 'object'" :searchForm="searchForm" :sortingForm="sortingForm" :isAddItem="isAddItem" :isEditBtn="isEditBtn" :isDelBtn="isDelBtn" :isActionBtn="isActionBtn" :cardTitle="cardTitle" :columnsHead="columnsHead" :columnsBody="columnsBody" :dataList="dataList" :showEditForm="showEditForm" :deleteItem="deleteItem" :getDataList="getDataList" :excelFields="excelFields" :excelTitle="excelTitle" :isDownload="isDownload" :isSearchBox="isSearchBox" route="admin"></TableContent>
</template> 
<script>
import mixin from '../../../src/mixin';
export default {
    mixins:[mixin],

    created(){
        this.getApi = "general-user"
        this.columnsHead.push('Sn',' Name','User Name', 'Email', 'Mobile No.','Status')
        this.columnsBody.push('name','user_name','email','phone','status')
        this.isActionBtn = false
        this.isAddItem = false
        this.isEditBtn  = true
        this.isDownload = false

       
        
       
        
    }
}
</script>
