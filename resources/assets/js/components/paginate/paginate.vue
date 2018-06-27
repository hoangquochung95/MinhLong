<template>
    
</template>

<script>
    export default {
        name: "paginate",
        data:function () {
            return{
                perPageNumber:0,
                total:0,
                numberPage:0,
                currentPage:0,

            }
        },
        props:['setPaginate']
    }
</script>

<style scoped>

</style>