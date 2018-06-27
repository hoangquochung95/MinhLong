<template>
    <div class="row highlights-item-shop">
        <div class="col-md-3" v-for="(displayItems,key) in listImg">
            <template v-if="key%2 === 0" v-for="(item,index) in displayItems" >
                <img v-if="index === 0" class="card-img-top small-item-shop"  :src="item.url" :alt="item.name">
                <img v-if="index === 1" class="card-img-top large-item-shop"  :src="item.url" :alt="item.name">
            </template>
            <template v-if="key%2 !== 0" v-for="(item,index) in displayItems"  >
                <img v-if="index === 0" class="card-img-top large-item-shop" :src="item.url" :alt="item.name">
                <img v-if="index === 1" class="card-img-top small-item-shop" :src="item.url" :alt="item.name">
            </template>

        </div>
    </div>
</template>
<script>
    export default {
        data: function () {
            return {
                img: [
                    {
                        url: 'image/a.jpeg',
                        name: "Bon cau cao cap 1",
                        price: "123",
                        categoryName: "Thể Loại 1",
                        categoryId: "1"
                    },
                    {
                        url: 'image/a.jpeg',
                        name: "Bon cau cao cap 2",
                        price: "123",
                        categoryName: "Thể Loại 1",
                        categoryId: "1"
                    },
                    {
                        url: 'image/a.jpeg',
                        name: "Bon cau cao cap 3 ",
                        price: "123",
                        categoryName: "Thể Loại 1",
                        categoryId: "1"
                    },
                    {
                        url: 'image/a.jpeg',
                        name: "Bon cau cao cap 4",
                        price: "123",
                        categoryName: "Thể Loại 1",
                        categoryId: "1"
                    },{
                        url: 'image/a.jpeg',
                        name: "Bon cau cao cap 5",
                        price: "123",
                        categoryName: "Thể Loại 1",
                        categoryId: "1"
                    },
                    {
                        url: 'image/a.jpeg',
                        name: "Bon cau cao cap 6",
                        price: "123",
                        categoryName: "Thể Loại 1",
                        categoryId: "1"
                    },
                    {
                        url: 'image/a.jpeg',
                        name: "Bon cau cao cap 7",
                        price: "123",
                        categoryName: "Thể Loại 1",
                        categoryId: "1"
                    },
                    {
                        url: 'image/a.jpeg',
                        name: "Bon cau cao cap 8",
                        price: "123",
                        categoryName: "Thể Loại 1",
                        categoryId: "1"
                    },


                ],
                displayImg: '',
                currentCategory: 1,
            }
        },
        mounted:function(){
            console.log(this.img.slice(2, 2+1));
        },
        computed: {
            listImg: function () {
                var img= this.img.map(function (img) {
                    img.url = window.location.origin + '/' + baseUrl + '/' +img.url;
                    return img;
                });
                var result=[];
                for( var i =0;i<4;i++){
                    if(i===0)
                        result.push(img.slice(0,2));
                    else
                        result.push(img.slice(2*i-1,2*i+1));
                }
                return result;
            },
        },
        watch:{
            isActive:function(val){
                this.notActive=!val;
            }
        },
        methods:{
            changeActive:function (isActive) {
                this.isActive=!isActive;
                return this.isActive;
            }
        }
    }
</script>